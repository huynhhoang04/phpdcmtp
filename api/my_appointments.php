<?php
// api/my_appointments.php
session_start();
header('Content-Type: application/json; charset=utf-8');

$pdo = require __DIR__ . '/../config/db.php';

// Lấy user id & email từ session
$uid   = (int)($_SESSION['uid'] ?? 0);
$email = trim($_SESSION['email'] ?? '');

if ($uid === 0 && $email === '') {
  http_response_code(401);
  echo json_encode(['ok'=>false,'msg'=>'Chưa đăng nhập']);
  exit;
}

// Gán lại các lịch cũ (user_id IS NULL) cho user hiện tại nếu trùng email
if ($uid > 0 && $email !== '') {
  try {
    $bf = $pdo->prepare("UPDATE appointments SET user_id=? WHERE user_id IS NULL AND email=?");
    $bf->execute([$uid, $email]);
  } catch (Throwable $e) {
    // Bỏ qua nếu lỗi
  }
}

// Lấy lịch của user hiện tại (ưu tiên user_id, fallback theo email)
$sql = "SELECT id, service, expert, date, time_slot, status, note, canceled_at
        FROM appointments
        WHERE (user_id = ?)
           OR (? <> '' AND email = ?)
        ORDER BY date DESC, time_slot DESC, id DESC";
$st = $pdo->prepare($sql);
$st->execute([$uid, $email, $email]);
$rows = $st->fetchAll(PDO::FETCH_ASSOC);

$now = new DateTime('now');
foreach ($rows as &$r) {
  // Cho phép hủy nếu:
  // - trạng thái là pending hoặc confirmed
  // - chưa bị hủy
  // - thời gian hẹn chưa trôi qua
  $can = in_array($r['status'], ['pending', 'confirmed'], true);
  $d = DateTime::createFromFormat('Y-m-d H:i', $r['date'].' '.$r['time_slot']);
  if ($d && $d < $now) $can = false;
  if (!empty($r['canceled_at'])) $can = false;
  $r['can_cancel'] = $can;
}

echo json_encode(['ok'=>true, 'rows'=>$rows]);
