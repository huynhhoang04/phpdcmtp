<?php
// ===========================================
// bai-viet.php — hiển thị chi tiết bài viết
// ===========================================

// 1) Lấy slug từ URL
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
if ($slug === '') {
  http_response_code(400);
  exit('<h1>Thiếu tham số slug.</h1>');
}

// 2) Cố gắng kết nối DB
$post = null;
try {
  $cfg = require __DIR__ . '/config/config1.php'; // hoặc config.php nếu bạn dùng file đó
  $dsn = "mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset={$cfg['db_charset']}";
  $pdo = new PDO($dsn, $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  $stmt = $pdo->prepare("SELECT slug,title,excerpt AS `desc`,content,thumb AS img,age_range,tags
                         FROM posts WHERE slug = ? LIMIT 1");
  $stmt->execute([$slug]);
  $post = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
  // Nếu DB lỗi, tạm im lặng và fallback
  $post = null;
}

// 3) Dữ liệu fallback tĩnh (nếu chưa có DB hoặc không có bài)
if (!$post) {
  $fallbackPosts = [
    [
      'slug'  => 'dau-hieu-bat-nat-online',
      'title' => 'Dấu hiệu trẻ bị bắt nạt online',
      'desc'  => 'Các dấu hiệu cho thấy trẻ đang bị bắt nạt trên mạng.',
      'img'   => '/btapphpp1/assets/batnaton.webp',
      'content' => '
        <p>Trẻ em có thể gặp phải bắt nạt online qua mạng xã hội, tin nhắn hoặc trò chơi trực tuyến. 
        Một số dấu hiệu nhận biết bao gồm: thay đổi tâm trạng đột ngột, né tránh sử dụng mạng, 
        hoặc giấu giếm điện thoại/laptop.</p>
        <p>Phụ huynh nên trao đổi nhẹ nhàng, lắng nghe con và liên hệ với giáo viên, 
        chuyên gia tâm lý hoặc Tổng đài 111 để được hỗ trợ.</p>
      ',
    ],
    [
      'slug'  => 'ho-tro-tre-tram-cam',
      'title' => 'Làm sao khi trẻ có dấu hiệu trầm cảm',
      'desc'  => 'Các bước hỗ trợ cơ bản dành cho cha mẹ, thầy cô.',
      'img'   => '/btapphpp1/assets/cat2.svg',
      'content' => '
        <p>Trẻ trầm cảm thường thu mình, ít nói, mất hứng thú với học tập và bạn bè.
        Cần khuyến khích con chia sẻ cảm xúc, tránh phán xét, và tìm đến chuyên gia tâm lý nếu tình trạng kéo dài.</p>
      ',
    ],
    [
      'slug'  => 'quyen-tre-em-co-ban',
      'title' => 'Những quyền trẻ em cơ bản',
      'desc'  => 'Giới thiệu dễ hiểu về các quyền quan trọng của trẻ.',
      'img'   => '/btapphpp1/assets/cat3.svg',
      'content' => '
        <p>Theo Luật Trẻ em 2016, trẻ có 4 nhóm quyền chính: 
        Quyền sống còn, Quyền phát triển, Quyền được bảo vệ, và Quyền tham gia. 
        Mỗi trẻ đều xứng đáng được lắng nghe và tôn trọng.</p>
      ',
    ],
  ];

  foreach ($fallbackPosts as $p) {
    if ($p['slug'] === $slug) { $post = $p; break; }
  }
}

// 4) Nếu vẫn không có bài
if (!$post) {
  http_response_code(404);
  exit('<h1>Không tìm thấy bài viết.</h1>');
}

// Helper escape
function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= e($post['title']) ?> - Bảo vệ trẻ em</title>
  <link rel="stylesheet" href="/btapphpp1/styles.css" />
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;margin:0;background:#fffaf7;color:#222}
    .container{max-width:900px;margin:auto;padding:32px 16px}
    h1{font-size:clamp(22px,3vw,32px);margin-bottom:10px;color:#e45a21}
    .desc{color:#555;margin-bottom:24px}
    .content p{margin:12px 0;line-height:1.6}
    figure img{max-width:100%;border-radius:8px;margin:12px 0}
    a.back{display:inline-block;margin-top:20px;color:#e45a21;text-decoration:none}
    a.back:hover{text-decoration:underline}
  </style>
</head>
<body>
  <div class="container">
    <a href="/btapphpp1/index.php" class="back">← Quay lại trang chủ</a>
    <h1><?= e($post['title']) ?></h1>
    <p class="desc"><?= e($post['desc']) ?></p>
    <?php if (!empty($post['img'])): ?>
      <figure><img src="<?= e($post['img']) ?>" alt=""></figure>
    <?php endif; ?>
    <div class="content">
      <?= $post['content'] ?>
    </div>
  </div>
</body>
</html>
