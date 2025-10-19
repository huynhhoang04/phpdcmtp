<?php
// auth/logout.php
session_start();

// Xoá toàn bộ session
$_SESSION = [];
if (ini_get('session.use_cookies')) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params['path'], $params['domain'],
    $params['secure'], $params['httponly']
  );
}
session_destroy();

// Quay về trang chủ
$base = '/btapphpp1/';
header('Location: ' . $base . 'index.php');
exit;
