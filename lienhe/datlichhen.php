<?php 
include __DIR__ . '/../th/banner.php'; 
include __DIR__ . '/../th/header.php';
$base = '/btapphpp1/';
?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Đặt lịch hẹn | Protect Children</title>
<link rel="stylesheet" href="<?= $base ?>style.css" />
<style>
  /* Chỉ để chắc chắn nhìn thấy giờ đang chọn */
  .slots { display:flex; flex-wrap:wrap; gap:8px }
  .slot { border:1px solid #e2e2e2; padding:8px 12px; border-radius:12px; cursor:pointer }
  .slot.active { outline:2px solid #ff7a00; }
  #summary .row { margin:6px 0; }
  #summary .k { color:#666; display:block; font-size:12px; }
  #summary .v { font-weight:600; }
</style>
</head>
<body>
<div class="wrap">
  <section class="hero">
    <span class="badge">Thời gian làm việc: T2–T6 • 8:00–11:00 • 14:00–16:30</span>
    <h1>Đặt lịch hẹn</h1>
    <p>Vui lòng để lại thông tin – chúng tôi sẽ xác nhận sớm nhất.</p>
  </section>

  <div class="grid">
    <!-- FORM -->
    <form id="bookingForm" class="card" method="post" action="<?= $base ?>lienhe/save_booking.php" novalidate>
      <h2 class="sec">Thông tin liên hệ</h2>

      <div class="group">
        <div>
          <label>Họ tên *</label>
          <input class="control" name="name" id="name" type="text" required placeholder="Nguyễn Văn A">
        </div>
        <div>
          <label>Email *</label>
          <input class="control" name="email" id="email" type="email" required placeholder="example@mail.com">
        </div>
        <div>
          <label>Số điện thoại</label>
          <input class="control" name="phone" id="phone" type="text" placeholder="090xxxxxxx">
        </div>
      </div>

      <div class="group">
        <div>
          <label for="service">Dịch vụ *</label>
          <select class="control" id="service" name="service" required>
            <option value="">— Chọn dịch vụ —</option>
            <option>Tham vấn phụ huynh</option>
            <option>Tư vấn pháp lý cơ bản</option>
            <option>Hỗ trợ sức khỏe tinh thần</option>
            <option>Chương trình tại trường học</option>
          </select>
        </div>
        <div>
          <label for="expert">Chuyên gia</label>
          <select class="control" id="expert" name="expert">
            <option value="">— Chọn chuyên gia —</option>
            <option>Trần Phong (tâm lý)</option>
            <option>Hữu Nam (pháp lý)</option>
            <option>Tiến Dũng (tham vấn phụ huynh)</option>
            <option>Kim Ngân (chương trình trường học)</option>
            <option>Đức Sơn (sức khỏe)</option>
          </select>
        </div>
      </div>

      <h2 class="sec" style="margin-top:8px">Chọn thời gian</h2>
      <div class="group">
        <div>
          <label>Ngày hẹn *</label>
          <input class="control" name="date" id="date" type="date" required>
        </div>
        <div>
          <label>Giờ hẹn *</label>
          <input type="hidden" name="time" id="timeHidden" required>
          <div class="slots" id="slotGrid">
            <button type="button" class="slot" data-t="08:00">08:00</button>
            <button type="button" class="slot" data-t="08:30">08:30</button>
            <button type="button" class="slot" data-t="09:00">09:00</button>
            <button type="button" class="slot" data-t="10:00">10:00</button>
            <button type="button" class="slot" data-t="14:00">14:00</button>
            <button type="button" class="slot" data-t="15:30">15:30</button>
            <button type="button" class="slot" data-t="16:00">16:00</button>
          </div>
        </div>
      </div>

      <div class="group-1">
        <label for="note">Ghi chú</label>
        <textarea class="control" id="note" name="note" placeholder="Mô tả ngắn về nhu cầu hỗ trợ..."></textarea>
      </div>

      <div class="actions">
        <button class="btn" type="submit">Gửi yêu cầu</button>
        <button class="btn outline" id="resetBtn" type="reset">Xóa form</button>
        <!-- NÚT DANH SÁCH ĐẶT LỊCH -->
        <a class="btn outline" href="<?= $base ?>lienhe/list_appointments.php">Danh sách đặt lịch</a>
      </div>
    </form>

    <aside class="card summary">
      <h2 class="sec">Tóm tắt</h2>
      <div id="summary"></div>
    </aside>
  </div>
</div>

<script>
/* ----- Chọn giờ (fix bấm không được) ----- */
const slotGrid = document.getElementById('slotGrid');
const timeHidden = document.getElementById('timeHidden');

slotGrid.addEventListener('click', (e) => {
  const btn = e.target.closest('.slot');
  if (!btn) return;
  // Bỏ active cũ
  slotGrid.querySelectorAll('.slot').forEach(b => b.classList.remove('active'));
  // Active mới + lưu vào input ẩn
  btn.classList.add('active');
  timeHidden.value = btn.dataset.t || '';
  updateSummary();
});

/* ----- Tóm tắt theo thời gian thực ----- */
const fields = ['name','email','phone','service','expert','date','note'];

function getVal(id) {
  const el = document.getElementById(id);
  return (el && el.value) ? el.value.trim() : '';
}

function updateSummary() {
  const data = {
    'Họ tên': getVal('name'),
    'Email': getVal('email'),
    'SĐT': getVal('phone'),
    'Dịch vụ': getVal('service'),
    'Chuyên gia': getVal('expert'),
    'Ngày hẹn': getVal('date'),
    'Giờ hẹn': timeHidden.value || '',
    'Ghi chú': getVal('note')
  };

  const box = document.getElementById('summary');
  box.innerHTML = Object.entries(data).map(([k,v]) => `
    <div class="row">
      <span class="k">${k}</span>
      <span class="v">${v || '—'}</span>
    </div>
  `).join('');
}

// Lắng nghe thay đổi để cập nhật tóm tắt
fields.forEach(id => {
  const el = document.getElementById(id);
  if (!el) return;
  el.addEventListener('input', updateSummary);
  el.addEventListener('change', updateSummary);
});

// Reset form thì xóa active & tóm tắt
document.getElementById('resetBtn').addEventListener('click', () => {
  slotGrid.querySelectorAll('.slot').forEach(b => b.classList.remove('active'));
  timeHidden.value = '';
  setTimeout(updateSummary, 0);
});

// Khởi tạo tóm tắt ban đầu
updateSummary();
</script>
</body>
</html>
<?php require_once __DIR__ . '/../th/footer.php'; ?>
