<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');

/* Bật debug tạm thời để thấy lỗi (xong chạy OK thì đổi '1' thành '0') */
ini_set('display_errors', '1');
error_reporting(E_ALL);

/* Helper xuất JSON */
function jexit(array $data, int $code = 200): void {
  http_response_code($code);
  if (ob_get_length()) { ob_end_clean(); }
  echo json_encode($data, JSON_UNESCAPED_UNICODE);
  exit;
}

/* Cho phép kiểm tra nhanh bằng GET */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  jexit(['ok'=>true, 'ready'=>true, 'msg'=>'POST amount & note để lưu.']);
}

/* Kết nối DB */
try {
  $pdo = require __DIR__ . '/../config/db.php';  // ĐƯỜNG DẪN NÀY PHẢI TỒN TẠI
  if (!$pdo instanceof PDO) {
    jexit(['ok'=>false, 'where'=>'db', 'msg'=>'config/db.php không trả về PDO'], 500);
  }
} catch (Throwable $e) {
  jexit(['ok'=>false, 'where'=>'db', 'msg'=>'Không load được db.php', 'err'=>$e->getMessage()], 500);
}

/* Nhận dữ liệu */
$amount = isset($_POST['amount']) ? preg_replace('/[^\d]/', '', (string)$_POST['amount']) : '0';
$note   = trim((string)($_POST['note'] ?? ''));
$amount = (int)$amount;
if ($amount <= 0) {
  jexit(['ok'=>false, 'msg'=>'Số tiền không hợp lệ'], 400);
}

try {
  $pdo->beginTransaction();

  // Tìm/ tạo donor "Ẩn danh"
  $anonId = $pdo->query("SELECT id FROM donors WHERE full_name='Ẩn danh' LIMIT 1")->fetchColumn();
  if (!$anonId) {
    $pdo->exec("INSERT INTO donors (full_name) VALUES ('Ẩn danh')");
    $anonId = (int)$pdo->lastInsertId();
  }

  // Ghi donation
  $stmt = $pdo->prepare("
    INSERT INTO donations
      (donor_id, amount_vnd, note, payment_method, bank_code, bank_account, status)
    VALUES
      (:donor_id, :amount_vnd, :note, 'bank_transfer', 'VCB', '0123456789', 'pending')
  ");
  $stmt->execute([
    ':donor_id'   => (int)$anonId,
    ':amount_vnd' => $amount,
    ':note'       => $note ?: 'Ung Ho Tre Em',
  ]);

  $pdo->commit();
  jexit(['ok'=>true, 'id'=>(int)$pdo->lastInsertId(), 'msg'=>'Đã lưu thành công']);
} catch (Throwable $e) {
  if ($pdo->inTransaction()) $pdo->rollBack();
  jexit(['ok'=>false, 'msg'=>'Lỗi khi lưu', 'err'=>$e->getMessage()], 500);
}
