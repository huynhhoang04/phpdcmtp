<?php
// api/appointment_cancel.php
session_start();
header('Content-Type: application/json; charset=utf-8');

if (!isset($_SESSION['uid'])) {
  http_response_code(401);
  echo json_encode(['ok'=>false,'msg'=>'Chưa đăng nhập']);
  exit;
}

$pdo = require __DIR__ . '/../config/db.php';
$mailconf = require __DIR__ . '/../config/mail.php'; // nếu chưa cần gửi email thì có thể bỏ dòng này

$id     = (int)($_POST['id'] ?? 0);
$reason = trim($_POST['reason'] ?? '');
if ($id <= 0) {
  http_response_code(422);
  echo json_encode(['ok'=>false,'msg'=>'Thiếu ID lịch hẹn']);
  exit;
}

// lấy lịch & kiểm tra quyền sở hữu
$uid = (int)$_SESSION['uid'];
$st  = $pdo->prepare("SELECT * FROM appointments WHERE id=? AND user_id=? LIMIT 1");
$st->execute([$id, $uid]);
$appt = $st->fetch(PDO::FETCH_ASSOC);
if (!$appt) {
  http_response_code(404);
  echo json_encode(['ok'=>false,'msg'=>'Không tìm thấy lịch hẹn']);
  exit;
}

// kiểm tra có thể hủy không (giống bên my_appointments.php)
if ($appt['status'] === 'canceled' || !empty($appt['canceled_at'])) {
  echo json_encode(['ok'=>false,'msg'=>'Lịch này đã bị hủy trước đó']);
  exit;
}
$can = in_array($appt['status'], ['pending','confirmed'], true);
$dt  = DateTime::createFromFormat('Y-m-d H:i', ($appt['date'] ?? '') . ' ' . ($appt['time_slot'] ?? ''));
if (!($dt instanceof DateTime) || $dt <= new DateTime()) $can = false;
if (!$can) {
  echo json_encode(['ok'=>false,'msg'=>'Lịch đã quá hạn hoặc không thể hủy']);
  exit;
}

// cập nhật DB
$st = $pdo->prepare("UPDATE appointments
                     SET status='canceled',
                         canceled_at=NOW(),
                         cancel_reason=?
                     WHERE id=? AND user_id=?");
$st->execute([$reason !== '' ? $reason : 'Hủy bởi người dùng', $id, $uid]);

/* ===== GỬI EMAIL XÁC NHẬN HỦY (PHPMailer) – tùy chọn =====
   Bạn đã có thư viện trong /libs theo hình trước đó.
*/
$sendOk = false;
try {
  require __DIR__ . '/../libs/PHPMailer.php';
  require __DIR__ . '/../libs/SMTP.php';
  require __DIR__ . '/../libs/Exception.php';

  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
  $mail->isSMTP();
  $mail->Host       = $mailconf['host'];        // smtp.gmail.com
  $mail->SMTPAuth   = true;
  $mail->Username   = $mailconf['username'];    // gmail
  $mail->Password   = $mailconf['password'];    // app password 16 ký tự
  $mail->SMTPSecure = $mailconf['encryption'];  // 'tls'
  $mail->Port       = $mailconf['port'];        // 587
  $mail->CharSet    = 'UTF-8';

  $mail->setFrom($mailconf['from_email'], $mailconf['from_name']);
  // gửi về email đã lưu cùng lịch hẹn (bảng appointments của bạn có cột email)
  $toEmail = $appt['email'] ?: $mailconf['from_email'];
  $toName  = $appt['full_name'] ?: $toEmail;
  $mail->addAddress($toEmail, $toName);

  $mail->Subject = 'Xác nhận hủy lịch hẹn #' . $appt['id'];
  $mail->isHTML(true);
  $mail->Body = "
    <p>Xin chào <b>" . htmlspecialchars($toName, ENT_QUOTES, 'UTF-8') . "</b>,</p>
    <p>Lịch hẹn của bạn đã được <b>hủy</b>.</p>
    <ul>
      <li><b>Dịch vụ:</b> " . htmlspecialchars($appt['service'], ENT_QUOTES, 'UTF-8') . "</li>
      <li><b>Chuyên gia:</b> " . htmlspecialchars($appt['expert'] ?? '', ENT_QUOTES, 'UTF-8') . "</li>
      <li><b>Thời gian:</b> " . htmlspecialchars($appt['date'] . ' ' . $appt['time_slot'], ENT_QUOTES, 'UTF-8') . "</li>
      " . ($reason ? "<li><b>Lý do:</b> " . htmlspecialchars($reason, ENT_QUOTES, 'UTF-8') . "</li>" : "") . "
    </ul>
    <p>Nếu đây không phải thao tác của bạn, vui lòng phản hồi lại để được hỗ trợ.</p>
  ";
  $mail->AltBody = "Huy lich hen #{$appt['id']} - {$appt['service']} - {$appt['date']} {$appt['time_slot']}" .
                   ($reason ? " - Ly do: $reason" : "");

  $mail->send();
  $sendOk = true;
} catch (Throwable $e) {
  // Gửi email thất bại thì vẫn coi là hủy thành công
  // error_log($e->getMessage());
}

echo json_encode([
  'ok'  => true,
  'msg' => $sendOk
    ? 'Đã hủy lịch và gửi email xác nhận.'
    : 'Đã hủy lịch (gửi email thất bại).'
]);
