<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$pdo      = require __DIR__ . '/../config/db.php';
$mailconf = require __DIR__ . '/../config/mail.php';

// Hàm hiển thị thông báo lỗi hoặc thành công
function showMsg($msg, $ok = false) {
  $redirect = $ok ? "../lienhe/list_appointments.php" : "javascript:history.back()";
  echo "<script>alert(".json_encode($msg).");window.location='$redirect';</script>";
  exit;
}

// Nhận dữ liệu từ form
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? '');
$expert  = trim($_POST['expert'] ?? '');
$date    = trim($_POST['date'] ?? '');
$time    = trim($_POST['time'] ?? '');
$note    = trim($_POST['note'] ?? '');
$userId  = $_SESSION['uid'] ?? null;

// Kiểm tra đầu vào
if ($name==='' || $email==='' || $service==='' || $date==='' || $time==='') {
  showMsg('Vui lòng nhập đầy đủ Họ tên, Email, Dịch vụ, Ngày và Giờ.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  showMsg('Email không hợp lệ.');
}

// Kiểm tra trùng slot
$check = $pdo->prepare("SELECT COUNT(*) FROM appointments WHERE date=? AND time_slot=? AND status!='canceled'");
$check->execute([$date, $time]);
if ($check->fetchColumn() > 0) {
  showMsg('Khung giờ này đã có người đặt. Vui lòng chọn khung giờ khác.');
}

// Lưu lịch hẹn
$stmt = $pdo->prepare("INSERT INTO appointments (user_id, full_name, email, phone, service, expert, date, time_slot, note)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$userId, $name, $email, $phone, $service, $expert, $date, $time, $note]);

// Gửi email xác nhận cho người dùng
require_once __DIR__ . '/../libs/PHPMailer.php';
require_once __DIR__ . '/../libs/SMTP.php';
require_once __DIR__ . '/../libs/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;

try {
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host       = $mailconf['host'];
  $mail->SMTPAuth   = true;
  $mail->Username   = $mailconf['username'];
  $mail->Password   = $mailconf['password'];
  $mail->SMTPSecure = $mailconf['encryption'];
  $mail->Port       = $mailconf['port'];
  $mail->CharSet    = 'UTF-8';

  $mail->setFrom($mailconf['from_email'], $mailconf['from_name']);
  $mail->addAddress($email, $name);
  $mail->isHTML(true);
  $mail->Subject = "Xác nhận đặt lịch hẹn - Protect Children";
  $mail->Body = "
    <p>Xin chào <strong>{$name}</strong>,</p>
    <p>Bạn đã đặt lịch hẹn thành công tại <strong>Protect Children</strong>.</p>
    <p>Thông tin chi tiết:</p>
    <ul>
      <li><b>Dịch vụ:</b> {$service}</li>
      <li><b>Chuyên gia:</b> ".($expert ?: '—')."</li>
      <li><b>Ngày:</b> {$date}</li>
      <li><b>Giờ:</b> {$time}</li>
    </ul>
    <p>Chúng tôi sẽ sớm liên hệ xác nhận. Cảm ơn bạn đã tin tưởng!</p>
  ";
  $mail->AltBody = "Bạn đã đặt lịch hẹn thành công tại Protect Children: {$service}, {$date} {$time}";
  $mail->send();

  showMsg('Đặt lịch hẹn thành công! Chúng tôi đã gửi email xác nhận cho bạn.', true);
} catch (Throwable $e) {
  // Nếu gửi mail thất bại, vẫn coi là đặt thành công
  showMsg('Đặt lịch hẹn thành công (gửi email thất bại).', true);
}
