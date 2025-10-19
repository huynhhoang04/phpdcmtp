<?php
// config/mail.php
return [
  'host'       => 'smtp.gmail.com',
  'port'       => 587,
  'encryption' => 'tls', // STARTTLS
  'username'   => 'nguyenthingan02102005@gmail.com',    // Gmail đăng nhập
  'password'   => 'nunpzhzpfcqioyrk',                   // App Password 16 ký tự (không khoảng trắng!)
  'from_email' => 'nguyenthingan02102005@gmail.com',    // Nên trùng username
  'from_name'  => 'Protect Children',
];
