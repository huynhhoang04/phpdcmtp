<?php
// ==== QUYÊN GÓP ====

// 1) Đặt BASE cho toàn site (trùng đúng thư mục gốc trên htdocs)
$base = '/btapphpp1/';

// 2) Thông tin QR (demo)
$PAYMENT = [
  'bank_code'    => 'VCB',
  'account'      => '0123456789',
  'account_name' => 'BAO VE TRE EM'
];

// helper nhỏ
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quyên góp | Bảo vệ trẻ em</title>

  <!-- DÙNG ĐƯỜNG DẪN GỐC -->
  <link rel="icon" href="<?= $base ?>assets/favicon.png" type="image/png">
  <link rel="stylesheet" href="<?= $base ?>styles.css">
  <script src="<?= $base ?>app.js" defer></script>
</head>
<body>
<?php include __DIR__ . '/../th/banner.php'; ?>
<?php require_once __DIR__ . '/../th/header.php'; ?>

<main id="main" class="container" style="max-width: 960px; margin: 0 auto; padding: 24px;">

  <section aria-labelledby="donate-title" class="card" style="padding: 24px; border-radius: 16px; box-shadow: 0 8px 24px rgba(0,0,0,.08);">

    <!-- Chuyển khoản ngân hàng -->
    <div class="card" style="padding: 16px; border-radius: 12px; border: 1px solid #eee; margin-bottom:20px;">
      <h1 class="h3" id="donate-title" style="margin:0 0 8px;">Chuyển khoản ngân hàng</h1>
      <ul style="list-style:none;padding-left:0;margin:0">
        <li><strong>Người nhận:</strong> Quỹ Bảo Vệ Trẻ Em</li>
        <li><strong>Số tài khoản:</strong> <?= h($PAYMENT['account']) ?></li>
        <li><strong>Ngân hàng:</strong> Vietcombank – Chi nhánh Hà Nội</li>
        <li><strong>Nội dung:</strong> Ung Ho Tre Em</li>
      </ul>
    </div>

    <!-- QR VietQR -->
    <section class="card" style="padding:16px; border-radius:16px; box-shadow:0 8px 24px rgba(0,0,0,.06); border:1px solid #eee;">
      <h2 class="h3" style="margin:0 0 8px;">Quét mã QR để ủng hộ</h2>

      <form id="donate-form" onsubmit="return false"
            style="display:flex; flex-direction:column; gap:12px; margin: 8px 0 16px;">
        <label for="donate-amount" style="font-weight:600;">Số tiền ủng hộ (VND)</label>
        <input id="donate-amount" name="amount" inputmode="numeric" pattern="[0-9,\.]*"
               placeholder="VD: 100000"
               style="padding:10px 14px; border:1px solid #ccc; border-radius:12px;">

        <label for="transfer-note" style="font-weight:600;">Nội dung chuyển khoản</label>
        <input id="transfer-note" name="note" value="Ung Ho Tre Em"
               style="padding:10px 14px; border:1px solid #ccc; border-radius:12px;">
      </form>

      <figure style="margin:0; text-align:center">
        <img id="vietqr-img" alt="VietQR" style="max-width:240px;width:100%;height:auto;border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,.08)">
        <figcaption style="margin-top:8px">
          <a id="vietqr-link" href="#" target="_blank" rel="noopener">Mở ảnh QR trong tab mới</a>
        </figcaption>
      </figure>

      <div id="confirm-transfer" style="margin-top:16px; text-align:center;">
        <button id="btn-done" class="btn"
                style="background:#166534;color:#fff;border:none;border-radius:10px;padding:10px 16px;cursor:pointer;">
          Tôi đã chuyển khoản
        </button>
        <div id="error-box" style="margin-top:10px;color:#b91c1c;display:none"></div>
      </div>

      <div id="thankyou-card"
           style="display:none;margin-top:16px;padding:16px;border-radius:12px;border:1px solid #e5e7eb;background:#f0fdf4;">
        <h3 style="margin:0 0 6px;">🎉 Đã chuyển khoản</h3>
        <p style="margin:6px 0 12px;">Cảm ơn bạn đã ủng hộ Quỹ Bảo Vệ Trẻ Em!</p>
        <ul style="list-style:none;padding-left:0;margin:0">
          <li><strong>Số tiền:</strong> <span id="ty-amount">—</span> VND</li>
          <li><strong>Nội dung:</strong> <span id="ty-note">—</span></li>
        </ul>
      </div>
    </section>

    <details style="margin-top:16px;">
      <summary><strong>Biên lai & minh bạch</strong></summary>
      <p style="margin-top:8px">Nếu bạn cần biên lai, vui lòng liên hệ qua trang
        <a href="<?= $base ?>index.php#lienhe">Liên hệ</a>. Báo cáo thu–chi sẽ được cập nhật định kỳ.</p>
    </details>

       <div style="margin-top:24px; display:flex; gap:12px; flex-wrap:wrap;">
      <a href="<?= $base ?>quyengop/danhsach.php"
         class="btn"
         style="display:inline-block;padding:10px 16px;border-radius:10px;border:1px solid #ddd;text-decoration:none">
         📄 Danh sách ủng hộ
      </a>

      <a href="<?= $base ?>index.php"
         class="btn"
         style="display:inline-block;padding:10px 16px;border-radius:10px;border:1px solid #ddd;text-decoration:none">
         ← Về trang chủ
      </a>
    </div>

  </section>
</main>

<?php require_once __DIR__ . '/../th/footer.php'; ?>

<script>
// ==== QR logic + LƯU DB ====
(function(){
  var bank = '<?= h($PAYMENT['bank_code'] ?? 'VCB') ?>';
  var acc  = '<?= h($PAYMENT['account'] ?? '0123456789') ?>';
  var name = '<?= h($PAYMENT['account_name'] ?? 'BAO VE TRE EM') ?>';

  function buildQR(amount, addInfo){
    var base = 'https://img.vietqr.io/image/' + encodeURIComponent(bank) + '-' + encodeURIComponent(acc) + '-compact.png';
    var qs = '?amount=' + encodeURIComponent(amount || 0)
           + '&addInfo=' + encodeURIComponent(addInfo || 'UngHo TreEm')
           + '&accountName=' + encodeURIComponent(name || '');
    return base + qs;
  }

  function parseVND(t){ var n = parseInt(String(t||'').replace(/[^\d]/g,''),10); return isFinite(n) ? n : 0; }
  function formatVND(n){ try { return (n||0).toLocaleString('vi-VN'); } catch(e){ return String(n||0); } }

  var $amount = document.getElementById('donate-amount');
  var $note   = document.getElementById('transfer-note');
  var $img    = document.getElementById('vietqr-img');
  var $a      = document.getElementById('vietqr-link');
  var $btn    = document.getElementById('btn-done');
  var $tyCard = document.getElementById('thankyou-card');
  var $tyAmt  = document.getElementById('ty-amount');
  var $tyNote = document.getElementById('ty-note');
  var $confirm= document.getElementById('confirm-transfer');
  var $errBox = document.getElementById('error-box');

  function showErr(msg){
    if(!$errBox) return;
    $errBox.textContent = msg || 'Có lỗi xảy ra. Vui lòng thử lại.';
    $errBox.style.display = 'block';
  }
  function hideErr(){ if($errBox){ $errBox.style.display='none'; $errBox.textContent=''; } }

  function refreshQR(){
    var amt = $amount ? parseVND($amount.value) : 0;
    var note = $note ? $note.value : 'UngHo TreEm';
    var url = buildQR(amt, note);
    if ($img) $img.src = url;
    if ($a)  { $a.href = url; $a.target = '_blank'; }
  }

  $amount && $amount.addEventListener('input', refreshQR);
  $note   && $note.addEventListener('input',   refreshQR);

  // === GỬI VÀO DB KHI BẤM "Tôi đã chuyển khoản"
  $btn && $btn.addEventListener('click', async function(){
    hideErr();
    var amt  = parseVND($amount && $amount.value);
    var note = ($note && $note.value) || 'UngHo TreEm';
    if (!amt) { alert('Vui lòng nhập số tiền ủng hộ.'); $amount && $amount.focus(); return; }

    // khóa nút trong lúc gửi
    $btn.disabled = true; $btn.textContent = 'Đang lưu...';

    try {
      const res = await fetch('<?= $base ?>quyengop/save_donation.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
        body: new URLSearchParams({ amount: String(amt), note: note })
      });

      if (!res.ok) throw new Error('Máy chủ không phản hồi.');

      const data = await res.json();
      if (!data.ok) throw new Error(data.msg || 'Không lưu được');

      // Hiển thị thank-you
      $tyAmt && ($tyAmt.textContent = formatVND(amt));
      $tyNote && ($tyNote.textContent = note);
      $confirm && ($confirm.style.display = 'none');
      $tyCard && ($tyCard.style.display = 'block');
    } catch (e) {
      showErr(e.message);
    } finally {
      $btn.disabled = false; $btn.textContent = 'Tôi đã chuyển khoản';
    }
  });

  refreshQR();
})();
</script>
</body>
</html>
