<?php
// bai-viet.php
// Hiển thị chi tiết bài viết theo slug, ví dụ: /bai-viet.php?slug=huong-dan-tro-chuyen-atm

// 1) Kết nối DB
require __DIR__ . '/config/db.php';

// 2) Nhận slug
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
if ($slug === '') {
  http_response_code(400);
  $error = 'Thiếu tham số slug.';
}

// 3) Lấy bài viết theo slug
if (!isset($error)) {
  $sql = "SELECT p.id, p.title, p.slug, p.excerpt, p.content, p.thumb,
                 p.read_time_min, p.age_range, p.updated_at
          FROM posts p
          WHERE p.slug = :slug AND p.status='published'
          LIMIT 1";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([':slug' => $slug]);
  $post = $stmt->fetch();

  if (!$post) {
    http_response_code(404);
    $error = 'Không tìm thấy bài viết.';
  }
}

// 4) Lấy các chủ đề (categories) của bài (nếu cần hiển thị)
$cats = [];
if (!isset($error)) {
  $sqlc = "SELECT c.code, c.name
           FROM post_categories pc
           JOIN categories c ON c.id = pc.category_id
           WHERE pc.post_id = :pid";
  $stc = $pdo->prepare($sqlc);
  $stc->execute([':pid' => $post['id']]);
  $cats = $stc->fetchAll();
}

// Helper escape
function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// Format ngày
function vn_date($ts) {
  $d = new DateTime($ts);
  return $d->format('d/m/Y');
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    <?php if (isset($error)) { echo 'Không tìm thấy | Bảo vệ Trẻ Em'; }
          else { echo e($post['title']) . ' | Bảo vệ Trẻ Em'; } ?>
  </title>
  <meta name="description" content="<?php echo isset($post['excerpt']) ? e($post['excerpt']) : 'Bài viết kiến thức & hướng dẫn'; ?>" />
  <link rel="stylesheet" href="/styles.css?v=3" />
  <style>
    /* Bổ sung chút style cho trang chi tiết */
    .article-wrap{width:min(900px,92%);margin:40px auto;background:#fff;border-radius:14px;box-shadow:0 10px 28px rgba(0,0,0,.08);overflow:hidden}
    .article-hero{background:#fff6ef;display:grid;place-items:center}
    .article-hero img{max-width:100%;height:auto;display:block}
    .article-body{padding:22px}
    .article-meta{color:#6b6b6b;font-size:.95rem;margin:8px 0 16px;display:flex;gap:12px;flex-wrap:wrap}
    .pill{display:inline-block;background:#fff0e6;color:#b54f16;padding:.25rem .55rem;border-radius:.6rem}
    .backline{display:flex;justify-content:space-between;gap:8px;align-items:center}
    .backline a{color:#c24914;font-weight:700;text-decoration:none}
    .backline a:hover{text-decoration:underline}
    .content-area{line-height:1.75}
    .content-area h2,.content-area h3{margin-top:1.1em}
    .content-area img{max-width:100%;border-radius:10px;box-shadow:0 6px 20px rgba(0,0,0,.06)}
  </style>
</head>
<body>
  <a class="skip-link" href="#main">Bỏ qua nội dung</a>

  <!-- Header dùng lại -->
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="/index.php">
        <span class="brand-logo" aria-hidden="true">👶</span>
        <span class="brand-text">Bảo vệ Trẻ Em</span>
      </a>
      <nav class="nav" aria-label="Chính">
        <button class="nav-toggle" aria-expanded="false" aria-controls="menu">☰</button>
        <ul id="menu" class="menu">
          <li><a href="/index.php#chuyen-muc">Chuyên mục</a></li>
          <li><a href="/index.php#kienthuc">Kiến thức & Hướng dẫn</a></li>
          <li><a href="/index.php#tracuu">Tra cứu</a></li>
          <li><a href="/index.php#baocao">Báo cáo</a></li>
          <li><a href="/index.php#lienhe">Liên hệ</a></li>
          <li><a class="btn btn-outline" href="#dangnhap" id="openLogin">Đăng nhập</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">
    <div class="article-wrap">
      <?php if (isset($error)): ?>
        <div class="article-body">
          <div class="backline">
            <a href="/index.php#kienthuc">← Quay lại Kiến thức</a>
          </div>
          <h1><?php echo e($error); ?></h1>
          <p>Vui lòng kiểm tra lại đường dẫn hoặc chọn một bài viết khác.</p>
        </div>
      <?php else: ?>
        <?php if (!empty($post['thumb'])): ?>
        <div class="article-hero">
          <img src="<?php echo e($post['thumb']); ?>" alt="">
        </div>
        <?php endif; ?>

        <div class="article-body">
          <div class="backline">
            <a href="/index.php#kienthuc">← Quay lại Kiến thức</a>
            <a class="btn btn-outline" href="/index.php#baocao">Báo cáo vụ việc</a>
          </div>

          <h1><?php echo e($post['title']); ?></h1>

          <div class="article-meta">
            <span>⏱️ <?php echo (int)($post['read_time_min'] ?: 3); ?> phút đọc</span>
            <?php if ($post['age_range']): ?>
              <span>👦 <?php echo e($post['age_range']); ?></span>
            <?php endif; ?>
            <span>🗓️ Cập nhật: <?php echo e(vn_date($post['updated_at'])); ?></span>
            <?php foreach ($cats as $c): ?>
              <span class="pill"><?php echo e($c['name']); ?></span>
            <?php endforeach; ?>
          </div>

          <?php if (!empty($post['excerpt'])): ?>
            <p><em><?php echo e($post['excerpt']); ?></em></p>
          <?php endif; ?>

          <div class="content-area">
            <?php
              // CHÚ Ý: nếu bạn tin tưởng nội dung trong DB là HTML sạch do admin nhập,
              // có thể echo thẳng. Nếu không, hãy sanitize.
              echo $post['content'];
            ?>
          </div>

          <hr style="border:none;height:1px;background:#eee;margin:24px 0"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener">Facebook</a> ·
            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener">X</a>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </main>

  <!-- Modal đăng nhập dùng lại -->
  <dialog id="loginModal" aria-labelledby="loginTitle">
    <form method="dialog" class="login-form">
      <h3 id="loginTitle">Đăng nhập quản trị</h3>
      <label for="email">Email</label>
      <input id="email" type="email" required placeholder="admin@example.com" />
      <label for="password">Mật khẩu</label>
      <input id="password" type="password" required placeholder="••••••••" />
      <menu>
        <button value="cancel" class="btn btn-outline">Hủy</button>
        <button value="login" class="btn">Đăng nhập</button>
      </menu>
    </form>
  </dialog>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div>
        <strong>Bảo vệ Trẻ Em</strong><br />
        <small>Phiên bản giao diện mẫu để phát triển.</small>
      </div>
      <ul class="footer-links">
        <li><a href="#">Chính sách bảo mật</a></li>
        <li><a href="#">Điều khoản sử dụng</a></li>
        <li><a href="#">Trợ giúp</a></li>
      </ul>
    </div>
  </footer>

  <script src="/app.js?v=3"></script>
</body>
</html>
          <p><strong>Chia sẻ:</strong>
