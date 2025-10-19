<?php
ini_set('display_errors','1');
error_reporting(E_ALL);

$base = '/btapphpp1/';
$pdo  = require __DIR__.'/../config/db.php';

// Phân trang
$limit  = 12;
$page   = max(1, (int)($_GET['page'] ?? 1));
$offset = ($page - 1) * $limit;

// Tổng lượt & tổng tiền
$total = (int)$pdo->query("SELECT COUNT(*) FROM donations")->fetchColumn();
$sum   = (int)$pdo->query("SELECT COALESCE(SUM(amount_vnd),0) FROM donations")->fetchColumn();

// Danh sách donations
$sql = "
  SELECT d.id, d.amount_vnd, d.note, d.status, d.created_at,
         COALESCE(dr.full_name,'Ẩn danh') AS ho_ten, dr.email
  FROM donations d
  LEFT JOIN donors dr ON d.donor_id = dr.id
  ORDER BY d.created_at DESC
  LIMIT :limit OFFSET :offset
";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':limit',  $limit,  PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll();

function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
function vnd($n){ return number_format((int)$n, 0, ',', '.'); }

$totalPages = max(1, (int)ceil($total / $limit));
$prev = max(1, $page-1);
$next = min($totalPages, $page+1);
$goal = 100_000_000;
$progress = min(100, round($sum / $goal * 100));
?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Danh sách ủng hộ - Bảo vệ Trẻ Em</title>
<link rel="stylesheet" href="<?= $base ?>assets/style.css">
<style>
body{font-family:Inter,system-ui,sans-serif;background:#fffaf6;margin:0;color:#1e293b}
header{display:flex;justify-content:space-between;align-items:center;padding:16px 5%;background:#fff;border-bottom:1px solid #eee;position:sticky;top:0;z-index:10}
header nav a{text-decoration:none;color:#374151;margin:0 10px;font-weight:500}
header nav a:hover{color:#f97316}
.brand{display:flex;align-items:center;gap:10px;font-weight:700}
.brand-icon{width:34px;height:34px;border-radius:12px;background:linear-gradient(135deg,#fda35f,#f97316);box-shadow:0 4px 10px rgba(249,115,22,0.3)}
.container{max-width:1000px;margin:40px auto;padding:0 5%}
.card{background:#fff;border:1px solid #eee;border-radius:16px;padding:20px;margin-top:16px;box-shadow:0 4px 12px rgba(0,0,0,0.05)}
.stats{display:flex;flex-wrap:wrap;gap:16px;margin-bottom:16px}
.stat{flex:1 1 200px;background:#fff7ed;border:1px solid #fde68a;border-radius:12px;padding:16px}
.stat strong{font-size:20px;color:#f97316}
.table-wrap{overflow:auto;margin-top:16px}
table{width:100%;border-collapse:collapse}
th,td{padding:12px 14px;text-align:left;border-bottom:1px solid #f1f5f9}
th{background:#fff7ed;font-weight:600}
.badge{padding:4px 10px;border-radius:999px;font-size:13px}
.pending{background:#fff7ed;color:#b45309}
.confirmed{background:#ecfdf5;color:#15803d}
.rejected{background:#fee2e2;color:#b91c1c}
.pagination{display:flex;justify-content:center;gap:8px;margin-top:20px}
.pagination a{padding:8px 12px;border:1px solid #e5e7eb;border-radius:10px;text-decoration:none;color:#374151;background:#fff}
.pagination a:hover{background:#f97316;color:#fff}
.btn-orange{background:#f97316;color:white;padding:10px 16px;border:none;border-radius:10px;text-decoration:none;cursor:pointer;font-weight:500}
.btn-orange:hover{background:#ea580c}
.fab{position:fixed;right:18px;bottom:18px;background:#f97316;color:#fff;border:none;border-radius:999px;padding:14px 20px;font-weight:600;box-shadow:0 10px 22px rgba(249,115,22,0.35);cursor:pointer}
.fab:hover{background:#ea580c}
.slogan{text-align:center;margin-top:10px;font-weight:600;font-size:18px;color:#111}
.slogan span{font-size:22px;margin-right:6px}
</style>
</head>
<body>

<header>
  <div class="brand">
    <div class="brand-icon"></div> 🛡️ Bảo vệ Trẻ Em
  </div>
  <nav>
    <a href="<?= $base ?>index.php">Trang chủ</a>
    <a href="<?= $base ?>quyengop/quyengop.php">Quyên góp</a>
  </nav>
</header>

<div class="container">
  <h2>📋 Danh sách ủng hộ</h2>
  <p>Minh bạch – Tử tế – Kết nối yêu thương</p>

  <div class="stats">
    <div class="stat">
      <small>Tổng số tiền đã nhận</small>
      <strong><?= vnd($sum) ?> VND</strong>
    </div>
    <div class="stat">
      <small>Tổng lượt ủng hộ</small>
      <strong><?= number_format($total) ?> lượt</strong>
    </div>
    <div class="stat">
      <small>Tiến độ mục tiêu</small>
      <strong><?= $progress ?>%</strong>
      <div style="height:10px;background:#ffe4cc;border-radius:999px;margin-top:6px">
        <div style="width:<?= $progress ?>%;height:100%;background:#f97316;border-radius:999px"></div>
      </div>
      <small><?= vnd($goal) ?> VND</small>
    </div>
  </div>

  <div class="table-wrap card">
    <?php if (!$rows): ?>
      <p>Chưa có bản ghi nào.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Người ủng hộ</th>
            <th>Email</th>
            <th>Số tiền (VND)</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Thời gian</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r): ?>
            <tr>
              <td><?= (int)$r['id'] ?></td>
              <td><?= h($r['ho_ten']) ?></td>
              <td><?= h($r['email']) ?></td>
              <td><?= vnd($r['amount_vnd']) ?></td>
              <td><?= h($r['note']) ?></td>
              <td><span class="badge <?= h($r['status']) ?>"><?= h($r['status']) ?></span></td>
              <td><?= h($r['created_at']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="pagination">
        <a href="?page=1">« Đầu</a>
        <a href="?page=<?= $prev ?>">‹ Trước</a>
        <span>Trang <?= $page ?>/<?= $totalPages ?></span>
        <a href="?page=<?= $next ?>">Sau ›</a>
        <a href="?page=<?= $totalPages ?>">Cuối »</a>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php
// Chỉ hiển thị nút Quyên góp ngay nếu KHÔNG phải ở trang quyên góp
$current = basename($_SERVER['PHP_SELF']);
if ($current !== 'quyengop.php' && $current !== 'donate.php'):
?>
  <a href="<?= $base ?>quyengop/donate.php" class="fab">Quyên góp ngay</a>
  <div class="slogan">
    <span>👉</span>Hãy quyên góp ngay để trở thành người hùng của trẻ em Việt Nam!
  </div>
<?php endif; ?>

</body>
</html>
