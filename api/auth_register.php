<?php
// api/auth_register.php
session_start();
header('Content-Type: application/json; charset=utf-8');

$pdo      = require __DIR__ . '/../config/db.php';
$mailconf = require __DIR__ . '/../config/mail.php';

// nạp thư viện PHPMailer (bạn đã copy vào /libs)
require __DIR__ . '/../libs/PHPMailer.php';
require __DIR__ . '/../libs/SMTP.php';
require __DIR__ . '/../libs/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;

// nhận JSON hoặc form
$raw = file_get_contents('php://input');
$in  = $raw ? json_decode($raw, true) : $_POST;

$name  = trim($in['name']  ?? '');
$email = trim($in['email'] ?? '');
$pass  = trim($in['password'] ?? '');

if ($name === '' || $email === '' || $pass === '') {
  echo json_encode(['ok'=>false,'msg'=>'Vui lòng nhập đủ họ tên, email, mật khẩu']); exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo json_encode(['ok'=>false,'msg'=>'Email không hợp lệ']); exit;
}

// check trùng
$st = $pdo->prepare("SELECT id FROM users WHERE email=?");
$st->execute([$email]);
if ($st->fetch()) {
  echo json_encode(['ok'=>false,'msg'=>'Email đã được sử dụng']); exit;
}

// tạo tài khoản
$hash = password_hash($pass, PASSWORD_DEFAULT);
$st = $pdo->prepare("INSERT INTO users (full_name,email,password_hash,role) VALUES (?,?,?,?)");
$st->execute([$name, $email, $hash, 'user']);
$user_id = $pdo->lastInsertId();

// đăng nhập luôn sau khi tạo
session_regenerate_id(true);
$_SESSION['uid']  = (int)$user_id;
$_SESSION['role'] = 'user';
$_SESSION['name'] = $name;

// gửi email xác nhận
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
  $mail->Subject = 'Đăng ký tài khoản thành công';
  $mail->Body = "
    <p>Chào <strong>{$name}</strong>,</p>
    <p>Bạn đã đăng ký tài khoản thành công tại <strong>Protect Children</strong>.</p>
    <p>Cảm ơn bạn đã đồng hành cùng chúng tôi!</p>
  ";
  $mail->AltBody = "Chao {$name}, ban da dang ky tai khoan thanh cong tai Protect Children.";
  $mail->send();
} catch (\Throwable $e) {
  // không cần dừng nếu gửi mail lỗi
}

echo json_encode([
  'ok' => true,
  'msg' => 'Đăng ký thành công!',
  'redirect' => 'index.php', // 👈 frontend dùng để chuyển trang
  'name' => $name
]);
