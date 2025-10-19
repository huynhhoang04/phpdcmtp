<?php
// api/auth_login.php
session_start();
header('Content-Type: application/json; charset=utf-8');

$pdo = require __DIR__ . '/../config/db.php';

$email = trim($_POST['email'] ?? '');
$pass  = (string)($_POST['password'] ?? '');

// validate cơ bản
if ($email === '' || $pass === '') {
  http_response_code(422);
  echo json_encode(['ok' => false, 'msg' => 'Vui lòng nhập email và mật khẩu']);
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo json_encode(['ok' => false, 'msg' => 'Email không hợp lệ']);
  exit;
}

// lấy user
$stmt = $pdo->prepare("SELECT id, email, password_hash, full_name, role FROM users WHERE email = ? LIMIT 1");
$stmt->execute([$email]);
$u = $stmt->fetch();

if (!$u || !password_verify($pass, $u['password_hash'])) {
  http_response_code(401);
  echo json_encode(['ok' => false, 'msg' => 'Sai thông tin đăng nhập']);
  exit;
}

// login OK -> chống fixation + set session
session_regenerate_id(true);
$_SESSION['uid']  = (int)$u['id'];
$_SESSION['role'] = $u['role'] ?? 'user';
$_SESSION['name'] = $u['full_name'] ?: $u['email'];

echo json_encode([
  'ok'   => true,
  'name' => $_SESSION['name'],
  'role' => $_SESSION['role']
]);
