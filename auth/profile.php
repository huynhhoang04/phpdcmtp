<?php
// auth/profile.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['uid'])) {
  header('Location: ../auth/auth-pages.php');
  exit;
}
$base = '/btapphpp1/';
?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Hồ sơ của tôi</title>
<link rel="stylesheet" href="<?= $base ?>style.css">
<style>
  :root{
    --brand:#e45a21; --ink:#232325; --muted:#667085; --bg:#fffaf7; --card:#fff;
    --bd:#ececec; --ring:#ffe6d6; --ring2:#ffd7bf; --shadow:0 12px 28px rgba(0,0,0,.07);
    --ok:#0f7a45; --err:#b9381a;
  }
  *{box-sizing:border-box}
  body{margin:0;background:var(--bg);color:var(--ink);font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Arial}
  .wrap{max-width:1120px;margin:0 auto;padding:24px 20px}
  .topbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px}
  .topbar h1{margin:0;color:var(--brand)}
  .btn{display:inline-flex;align-items:center;justify-content:center;background:var(--brand);color:#fff;border:none;border-radius:12px;padding:10px 14px;font-weight:800;cursor:pointer;text-decoration:none}
  .btn.outline{background:#fff;color:var(--brand);border:2px solid var(--brand)}
  .btn:disabled{opacity:.6;cursor:not-allowed}
  .grid{display:grid;grid-template-columns:360px 1fr;gap:18px}
  @media(max-width:980px){.grid{grid-template-columns:1fr}}
  .card{background:var(--card);border:1px solid var(--bd);border-radius:18px;padding:16px;box-shadow:var(--shadow)}
  .sec{margin:0 0 10px}
  .row{display:grid;grid-template-columns:130px 1fr;gap:10px;margin:10px 0}
  .input,.file{width:100%;padding:11px 12px;border:1px solid #ddd;border-radius:12px;background:#fff;outline:none}
  .input:focus,.file:focus{border-color:var(--ring2);box-shadow:0 0 0 6px var(--ring)}
  .split{display:flex;gap:10px;flex-wrap:wrap}
  .right{display:flex;justify-content:flex-end}
  .avatar{width:104px;height:104px;border-radius:14px;border:1px solid var(--bd);object-fit:cover;background:#fafafa}
  .hint{font-size:13px;color:var(--muted)}
  .table{width:100%;border-collapse:separate;border-spacing:0}
  .table th,.table td{padding:12px;border-bottom:1px solid #f0f0f0;text-align:left;vertical-align:top}
  .badge{padding:2px 10px;border-radius:999px;border:1px solid transparent;font-size:12.5px}
  .pending{background:#fff7ed;border-color:#fdba74;color:#9a4e12}
  .confirmed{background:#ecfdf5;border-color:#86efac;color:#066e39}
  .completed{background:#eef2ff;border-color:#c7d2fe;color:#3730a3}
  .canceled{background:#fee2e2;border-color:#fca5a5;color:#991b1b}
</style>
</head>
<body>
<div class="wrap">
  <div class="topbar">
    <h1>Hồ sơ của tôi</h1>
    <div class="split">
      <a class="btn outline" href="<?= $base ?>">Trang chủ</a>
      <a class="btn outline" href="<?= $base ?>lienhe/list_appointments.php">DS lịch công khai</a>
    </div>
  </div>

  <div class="grid">
    <!-- Hồ sơ -->
    <section class="card">
      <h2 class="sec">Thông tin cá nhân</h2>
      <div class="split" style="align-items:center;margin-bottom:10px">
        <img id="avatarPreview" class="avatar" src="<?= $base ?>assets/avatar-default.jpg" alt="avatar">
      </div>

      <form id="profileForm" enctype="multipart/form-data">
        <div class="row"><label>Họ & Tên</label><input class="input" name="name" id="name"></div>
        <div class="row"><label>Email</label><input class="input" id="email" disabled></div>
        <div class="row"><label>Điện thoại</label><input class="input" name="phone" id="phone" placeholder="090xxxxxxx"></div>
        <div class="row"><label>Ảnh đại diện</label><input class="file" type="file" name="avatar" id="avatar" accept="image/png,image/jpeg"></div>
        <div class="right"><button class="btn" type="submit">Lưu thay đổi</button></div>
      </form>

      <hr style="margin:16px 0;border:none;border-top:1px solid #eee">
      <h2 class="sec">Đổi mật khẩu</h2>
      <form id="passwordForm" class="split" style="flex-direction:column">
        <input class="input" type="password" name="old_password" placeholder="Mật khẩu hiện tại" required>
        <input class="input" type="password" name="new_password" placeholder="Mật khẩu mới (≥ 6 ký tự)" required>
        <input class="input" type="password" name="new_password2" placeholder="Nhập lại mật khẩu mới" required>
        <div class="right"><button class="btn outline" type="submit">Đổi mật khẩu</button></div>
      </form>

      <div id="msg" class="hint" style="margin-top:8px"></div>
    </section>

    <!-- Lịch sử -->
    <section class="card">
      <h2 class="sec">Lịch sử đặt lịch của tôi</h2>
      <div class="hint" style="margin-bottom:8px">Các lịch do tài khoản của bạn đặt.</div>
      <div style="overflow:auto;border:1px solid #ececec;border-radius:14px">
        <table class="table" id="apptTable">
          <thead>
            <tr>
              <th>#</th><th>Dịch vụ</th><th>Chuyên gia</th>
              <th>Ngày</th><th>Giờ</th><th>Trạng thái</th><th>Ghi chú</th><th>Thao tác</th>
            </tr>
          </thead>
          <tbody id="apptBody"><tr><td colspan="8" class="hint">Đang tải…</td></tr></tbody>
        </table>
      </div>
    </section>
  </div>
</div>

<script>
// ====== LỊCH SỬ ĐẶT LỊCH ======
const tbody = document.getElementById('apptBody');
const loadingRow = `<tr><td colspan="8" class="hint">Đang tải…</td></tr>`;
if (tbody) tbody.innerHTML = loadingRow;

function escapeHtml(s){
  return String(s||'').replace(/[&<>"']/g, m => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]));
}

async function loadMyAppointments(){
  if (!tbody) return;
  tbody.innerHTML = loadingRow;
  try{
    // API đúng
    const res  = await fetch('../api/my_appointments.php', {credentials:'same-origin'});
    const data = await res.json();

    if (!data.ok) {
      tbody.innerHTML = `<tr><td colspan="8" class="hint">Không thể tải lịch hẹn.</td></tr>`;
      return;
    }

    const rows = data.rows || [];
    if (rows.length === 0) {
      tbody.innerHTML = `<tr><td colspan="8" class="hint">Bạn chưa có lịch hẹn nào.</td></tr>`;
      return;
    }

    tbody.innerHTML = rows.map(r => `
      <tr>
        <td>${r.id}</td>
        <td>${escapeHtml(r.service)}</td>
        <td>${escapeHtml(r.expert || '')}</td>
        <td>${escapeHtml(r.date)}</td>
        <td>${escapeHtml(r.time_slot)}</td>
        <td><span class="badge ${escapeHtml(r.status)}">${escapeHtml(r.status)}</span></td>
        <td>${escapeHtml(r.note || '')}</td>
        <td>
          ${r.can_cancel
            ? `<button class="btn outline btn-cancel" data-id="${r.id}">Hủy</button>`
            : ''
          }
        </td>
      </tr>
    `).join('');

    // Gắn sự kiện hủy
    tbody.querySelectorAll('.btn-cancel').forEach(btn=>{
      btn.addEventListener('click', async () => {
        if (!confirm('Bạn chắc chắn muốn hủy lịch hẹn này?')) return;
        const reason = prompt('Lý do hủy (không bắt buộc):') || '';
        btn.disabled = true;
        try{
          const body = new URLSearchParams({id: btn.dataset.id, reason});
          const rr = await fetch('../api/appointment_cancel.php', {
            method:'POST',
            headers:{'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'},
            body,
            credentials:'same-origin'
          });
          const js = await rr.json();
          alert(js.msg || (js.ok ? 'Đã hủy lịch hẹn.' : 'Không thể hủy.'));
          if (js.ok) loadMyAppointments();
        }catch(e){
          alert('Lỗi mạng, hãy thử lại.');
        }finally{
          btn.disabled = false;
        }
      });
    });

  }catch(e){
    tbody.innerHTML = `<tr><td colspan="8" class="hint">Không tải được dữ liệu.</td></tr>`;
  }
}

loadMyAppointments();
</script>

</body>
</html>
