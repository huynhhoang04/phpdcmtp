<?php
// lienhe/list_appointments.php — Public list
$pdo = require __DIR__ . '/../config/db.php';

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// ====== Filters (GET) ======
$service = trim($_GET['service'] ?? '');
$expert  = trim($_GET['expert']  ?? '');
$date    = trim($_GET['date']    ?? ''); // yyyy-mm-dd

$where  = [];
$params = [];
if ($service !== '') { $where[] = 'service = ?'; $params[] = $service; }
if ($expert  !== '') { $where[] = 'expert  = ?'; $params[] = $expert;  }
if ($date    !== '') { $where[] = 'date    = ?'; $params[] = $date;    }
$sqlWhere = $where ? ('WHERE '.implode(' AND ', $where)) : '';

// ====== Pagination ======
$limit  = 20;
$page   = max(1, (int)($_GET['page'] ?? 1));
$offset = ($page - 1) * $limit;

// Count
$stc = $pdo->prepare("SELECT COUNT(*) FROM appointments $sqlWhere");
$stc->execute($params);
$total      = (int)$stc->fetchColumn();
$totalPages = max(1, (int)ceil($total / $limit));

// Data (NHỚ SELECT cả canceled_at để tính logic 24h)
$sql = "SELECT id, full_name, email, phone, service, expert, date, time_slot, status, note, created_at, canceled_at
        FROM appointments
        $sqlWhere
        ORDER BY date DESC, time_slot ASC, id DESC
        LIMIT $limit OFFSET $offset";
$st  = $pdo->prepare($sql);
$st->execute($params);
$rows = $st->fetchAll(PDO::FETCH_ASSOC);

// Option lists
$svc = $pdo->query("SELECT DISTINCT service FROM appointments WHERE service<>'' ORDER BY service")->fetchAll(PDO::FETCH_COLUMN);
$exp = $pdo->query("SELECT DISTINCT expert  FROM appointments WHERE expert<>''  ORDER BY expert" )->fetchAll(PDO::FETCH_COLUMN);

// Base path
$base = '/btapphpp1/';

/** Chỉ cho hủy khi:
 *  - status IN ('pending','confirmed')
 *  - chưa có canceled_at
 *  - thời điểm hẹn (date + time_slot) cách hiện tại >= 24 giờ
 */
function canCancelRow(array $r): bool {
  if (!in_array($r['status'], ['pending','confirmed'], true)) return false;
  if (!empty($r['canceled_at'])) return false;
  $dt = DateTime::createFromFormat('Y-m-d H:i', ($r['date'] ?? '').' '.($r['time_slot'] ?? ''));
  if (!$dt) return false;
  return ($dt->getTimestamp() - time()) >= 24*3600;
}
?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Danh sách lịch hẹn | Protect Children</title>
<meta http-equiv="refresh" content="30">
<style>
  :root{
    --brand:#e45a21; --ink:#232325; --muted:#667085; --bg:#fffaf7; --card:#fff;
    --bd:#ececec; --ring:#ffe6d6; --ring2:#ffd7bf; --shadow:0 10px 28px rgba(0,0,0,.07);
    --ok:#0f7a45; --warn:#b94814; --err:#b9381a;
  }
  *{box-sizing:border-box}
  body{margin:0;background:var(--bg);color:var(--ink);font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Arial}
  a{color:inherit}

  .wrap{max-width:1120px;margin:0 auto;padding:24px 20px}
  .header{
    background:linear-gradient(180deg,#fff6ef,#fff); border:1px solid #ffe4d5;
    border-radius:20px; padding:22px 18px; box-shadow:var(--shadow); margin-bottom:18px;
    display:flex; align-items:center; justify-content:space-between; gap:16px;
  }
  .title{display:flex; align-items:center; gap:12px}
  .title .icon{
    width:42px; height:42px; border-radius:12px; display:grid; place-items:center;
    background:#fff; border:1px solid #ffd8c3; box-shadow:0 6px 18px rgba(228,90,33,.18);
    color:var(--brand); font-size:22px
  }
  h1{margin:0; font-size:clamp(22px,4vw,28px); color:var(--brand); letter-spacing:.2px}
  .sub{color:#995e3a; font-size:13.5px}

  .btn{display:inline-block; text-decoration:none; line-height:1; background:var(--brand); color:#fff;
       border:none; border-radius:12px; padding:10px 14px; font-weight:800; cursor:pointer}
  .btn.outline{background:#fff; color:var(--brand); border:2px solid var(--brand)}
  .btn.ghost{background:#fff; color:#333; border:1px solid var(--bd)}
  .bar{display:flex; gap:8px; flex-wrap:wrap}

  .card{background:var(--card); border:1px solid var(--bd); border-radius:18px; padding:16px; box-shadow:var(--shadow)}

  /* Filters */
  .filters{display:flex; flex-wrap:wrap; gap:10px; align-items:flex-end}
  .filters .field{display:flex; flex-direction:column; gap:6px}
  .filters select, .filters input[type="date"]{
    min-width:220px; padding:10px 12px; border:1px solid #ddd; border-radius:12px; background:#fff;
    outline:none; transition:border-color .15s, box-shadow .15s
  }
  .filters select:focus, .filters input[type="date"]:focus{border-color:var(--ring2); box-shadow:0 0 0 5px var(--ring)}
  .filters label{font-weight:700; font-size:14px}

  /* Table */
  .table-wrap{overflow:auto; border-radius:14px; border:1px solid var(--bd); background:#fff}
  table{width:100%; border-collapse:separate; border-spacing:0}
  thead th{position:sticky; top:0; z-index:1; background:#fdf8f3; color:#663c22; text-align:left; font-weight:800; border-bottom:1px solid var(--bd)}
  th, td{padding:12px 12px; border-bottom:1px solid #f0f0f0; vertical-align:top}
  tbody tr:hover{background:#fffaf3}
  td .muted{color:var(--muted); font-size:13px}
  .nowrap{white-space:nowrap}

  /* Status pill */
  .badge{display:inline-flex; align-items:center; gap:6px; padding:2px 10px; border-radius:999px; font-size:12.5px; border:1px solid transparent}
  .pending{background:#fff7ed; border-color:#fdba74; color:#9a4e12}
  .confirmed{background:#ecfdf5; border-color:#86efac; color:#066e39}
  .completed{background:#eef2ff; border-color:#c7d2fe; color:#3730a3}
  .canceled{background:#fee2e2; border-color:#fca5a5; color:#991b1b}

  /* Chính sách hủy ≥24h */
  .note{display:flex;gap:8px;align-items:center;background:#fff6ef;border:1px dashed #ffd7bf;
        border-radius:10px;padding:10px;color:#8b4a2a;margin:10px 0 14px}
  .tag-ok{background:#ecfdf5;border:1px solid #86efac;color:#066e39;padding:2px 8px;border-radius:999px;font-size:12px}
  .tag-no{background:#fef2f2;border:1px solid #fecaca;color:#991b1b;padding:2px 8px;border-radius:999px;font-size:12px}

  @media (max-width: 880px){
    .filters select, .filters input[type="date"]{min-width:unset}
    .hide-sm{display:none}
  }
</style>
</head>
<body>
<div class="wrap">

  <!-- Header -->
  <div class="header">
    <div class="title">
      <div class="icon">📅</div>
      <div>
        <h1>Danh sách lịch hẹn</h1>
        <div class="sub">Trang công khai • Tự động cập nhật mỗi 30 giây</div>
      </div>
    </div>
    <div class="bar">
      <a class="btn ghost" href="<?= $base ?>index.php">Trang chủ</a>
      <a class="btn outline" href="<?= $base ?>lienhe/datlichhen.php">+ Đặt lịch mới</a>
    </div>
  </div>

  <!-- Filters -->
  <div class="card">
    <form class="filters" method="get" action="">
      <div class="field">
        <label for="f_service">Dịch vụ</label>
        <select id="f_service" name="service">
          <option value="">— Tất cả —</option>
          <?php foreach($svc as $s): ?>
            <option <?= $service===$s?'selected':''?>><?= h($s) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="field">
        <label for="f_expert">Chuyên gia</label>
        <select id="f_expert" name="expert">
          <option value="">— Tất cả —</option>
          <?php foreach($exp as $e): ?>
            <option <?= $expert===$e?'selected':''?>><?= h($e) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="field">
        <label for="f_date">Ngày</label>
        <input id="f_date" type="date" name="date" value="<?= h($date) ?>">
      </div>

      <div class="field" style="gap:8px">
        <label class="hide-sm">&nbsp;</label>
        <div class="bar">
          <button class="btn" type="submit">Lọc</button>
          <a class="btn ghost" href="?">Bỏ lọc</a>
        </div>
      </div>
    </form>

    <!-- Banner chính sách -->
    <div class="note">ℹ️ Chính sách hủy: <b>Chỉ được hủy khi còn ≥ 24 giờ</b> trước giờ hẹn.</div>
  </div>

  <!-- Table -->
  <div class="table-wrap">
    <?php if (!$rows): ?>
      <div style="padding:18px" class="count">Chưa có lịch hẹn nào.</div>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th class="nowrap">#</th>
            <th>Họ tên</th>
            <th>Email / SĐT</th>
            <th>Dịch vụ</th>
            <th>Chuyên gia</th>
            <th class="nowrap">Ngày</th>
            <th class="nowrap">Giờ</th>
            <th class="nowrap">Trạng thái</th>
            <th class="nowrap">Khả năng hủy ≥24h</th>
            <th>Ghi chú</th>
            <th class="nowrap">Tạo lúc</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $r): ?>
          <?php $ok = canCancelRow($r); ?>
          <tr>
            <td class="nowrap"><?= (int)$r['id'] ?></td>
            <td><?= h($r['full_name']) ?></td>
            <td>
              <?= h($r['email']) ?><br>
              <span class="muted"><?= h($r['phone']) ?></span>
            </td>
            <td><?= h($r['service']) ?></td>
            <td><?= h($r['expert']) ?></td>
            <td class="nowrap"><?= h($r['date']) ?></td>
            <td class="nowrap"><?= h($r['time_slot']) ?></td>
            <td class="nowrap"><span class="badge <?= h($r['status']) ?>"><?= h($r['status']) ?></span></td>
            <td class="nowrap"><?= $ok ? '<span class="tag-ok">Có thể</span>' : '<span class="tag-no">Không</span>' ?></td>
            <td><?= nl2br(h($r['note'])) ?></td>
            <td class="muted nowrap"><?= h($r['created_at']) ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

  <!-- Footer / Pagination -->
  <div class="footer">
    <div class="count">
      Trang <b><?= $page ?></b>/<b><?= $totalPages ?></b> • Tổng <b><?= number_format($total) ?></b> lịch hẹn
    </div>
    <div class="pagination">
      <?php
        $prev = max(1, $page-1);
        $next = min($totalPages, $page+1);
        $qs = $_GET;
        $qs['page']=1;           $uFirst='?'.http_build_query($qs);
        $qs['page']=$prev;       $uPrev ='?'.http_build_query($qs);
        $qs['page']=$next;       $uNext ='?'.http_build_query($qs);
        $qs['page']=$totalPages; $uLast ='?'.http_build_query($qs);
      ?>
      <a class="btn ghost" href="<?= $uFirst ?>">« Đầu</a>
      <a class="btn ghost" href="<?= $uPrev  ?>">‹ Trước</a>
      <a class="btn ghost" href="<?= $uNext  ?>">Sau ›</a>
      <a class="btn ghost" href="<?= $uLast  ?>">Cuối »</a>
    </div>
  </div>

</div>
</body>
</html>
