<?php
header('Content-Type: application/json; charset=utf-8');
require __DIR__.'/../config/db.php';

$body = $_POST;  // (demo) nếu dùng fetch JSON thì đọc php://input
$name = trim($body['name'] ?? '');
$phone = trim($body['phone'] ?? '');
$location = trim($body['location'] ?? '');
$type = trim($body['type'] ?? '');
$desc = trim($body['desc'] ?? '');

if ($location==='' || $type==='' || $desc==='') {
  http_response_code(422);
  echo json_encode(['ok'=>false,'msg'=>'Thiếu dữ liệu bắt buộc']);
  exit;
}

$stmt = $pdo->prepare("INSERT INTO reports(name,phone,location,type,description,ip) VALUES(?,?,?,?,?,?)");
$stmt->execute([$name,$phone,$location,$type,$desc,$_SERVER['REMOTE_ADDR'] ?? null]);

echo json_encode(['ok'=>true,'msg'=>'Đã ghi nhận báo cáo']);