<?php
// chuyen-muc.php
// ---------------------------
// 1) Cấu hình map slug -> metadata
$CATS = [
  'quyen-tre-em' => [
    'title' => 'Quyền trẻ em',
    'desc'  => 'Tổng hợp 4 nhóm quyền cơ bản, ví dụ tình huống và câu hỏi thường gặp.',
    'tag'   => 'quyen-tre-em',
    'hero'  => '/BTAPPHPP1/assets/cat3.svg',
  ],
  'phong-chong-bao-hanh' => [
    'title' => 'Phòng chống bạo hành',
    'desc'  => 'Dấu hiệu nhận biết, quy trình xử lý và kênh hỗ trợ chính thức.',
    'tag'   => 'xu-ly-tinh-huong',
    'hero'  => '/BTAPPHPP1/assets/hero_placeholder.svg',
  ],
  'giao-duc-an-toan' => [
    'title' => 'Giáo dục an toàn',
    'desc'  => 'Kỹ năng an toàn tại nhà, trường học và môi trường trực tuyến.',
    'tag'   => 'an-toan-mang',
    'hero'  => '/BTAPPHPP1/assets/cat1.svg',
  ],
  'suc-khoe-tam-ly' => [
    'title' => 'Sức khỏe & phát triển tâm lý',
    'desc'  => 'Dinh dưỡng, chăm sóc sức khỏe thể chất và tinh thần.',
    'tag'   => 'suc-khoe-tinh-than',
    'hero'  => '/BTAPPHPP1/assets/cat2.svg',
  ],
  'bao-ve-tre-em-vn' => [
    'title' => 'Bảo vệ trẻ em Việt Nam',
    'desc'  => 'Chương trình, chính sách và đường dây nóng 111.',
    'tag'   => 'phu-huynh-giao-vien',
    'hero'  => '/BTAPPHPP1/assets/hero_placeholder.svg',
  ],
  'cap-nhat-xa-hoi' => [
    'title' => 'Cập nhật hoạt động xã hội',
    'desc'  => 'Tin tức, sự kiện, chiến dịch nâng cao nhận thức cộng đồng.',
    'tag'   => 'phu-huynh-giao-vien',
    'hero'  => '/BTAPPHPP1/assets/hero_placeholder.svg',
  ],
];

$slug = $_GET['slug'] ?? '';
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$cat = $CATS[$slug] ?? null;
if (!$cat) {
  http_response_code(404);
  $cat = ['title'=>'Không tìm thấy chuyên mục', 'desc'=>'Chuyên mục bạn truy cập không tồn tại.', 'tag'=>null, 'hero'=>'./assets/hero_placeholder.svg'];
}

// ---------------------------
// 2) Nguồn bài viết
// Nếu bạn đã có $posts từ DB, giữ nguyên. Nếu chưa, dùng fallback mẫu:
if (!isset($posts) || !is_array($posts)) {
  $posts = [
    ['slug'=>'dau-hieu-bat-nat-online','title'=>'Dấu hiệu trẻ bị bắt nạt online','desc'=>'Các dấu hiệu cho thấy trẻ đang bị bắt nạt trên mạng.','age'=>'6-10','tags'=>'an-toan-mang phu-huynh-giao-vien','img'=>'/BTAPPHPP1/assets/cat1.svg','alt'=>'An toàn mạng'],
    ['slug'=>'ho-tro-tre-tram-cam','title'=>'Làm sao khi trẻ có dấu hiệu trầm cảm','desc'=>'Các bước hỗ trợ cơ bản dành cho cha mẹ, thầy cô.','age'=>'11-14','tags'=>'suc-khoe-tinh-than xu-ly-tinh-huong','img'=>'/BTAPPHPP1/assets/cat2.svg','alt'=>'Sức khỏe tinh thần'],
    ['slug'=>'quyen-tre-em-co-ban','title'=>'Những quyền trẻ em cơ bản','desc'=>'Giới thiệu dễ hiểu về các quyền quan trọng của trẻ.','age'=>'6-10','tags'=>'quyen-tre-em','img'=>'/BTAPPHPP1/assets/cat3.svg','alt'=>'Quyền trẻ em'],
    ['slug'=>'bao-cao-bao-luc-hoc-duong-an-toan','title'=>'Báo cáo bạo lực học đường an toàn','desc'=>'Cách thu thập bằng chứng và báo cáo qua 111.','age'=>'15-18','tags'=>'xu-ly-tinh-huong phu-huynh-giao-vien','img'=>'/BTAPPHPP1/assets/hero_placeholder.svg','alt'=>'Xử lý tình huống'],
  ];
}

// Lọc theo tag của chuyên mục
$filtered = [];
$seen = [];
foreach ($posts as $p) {
  $pSlug = strtolower(trim($p['slug'] ?? ''));
  if ($pSlug==='' || isset($seen[$pSlug])) continue; // chặn trùng
  $tags  = strtolower(' '.($p['tags'] ?? '').' ');
  if ($cat['tag'] && strpos($tags, ' '.$cat['tag'].' ') === false) continue;
  $seen[$pSlug] = true;
  $filtered[] = $p;
}
?><!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo h($cat['title']); ?> | Bảo vệ quyền trẻ em Việt Nam</title>
  <meta name="description" content="<?php echo h($cat['desc']); ?>" />
  <link rel="stylesheet" href="/BTAPPHPP1/styles.css" />
</head>
<body>

  <main id="main">
    <section class="section" aria-labelledby="cat-title">
      <div class="container">
        <!-- breadcrumb -->
        <!-- <nav aria-label="Breadcrumb" style="margin-bottom:10px">
          <a href="index.php">Trang chủ</a> › <a href="index.php#kienthuc">Kiến thức & Hướng dẫn</a> › <strong><?php echo h($cat['title']); ?></strong>
        </nav> -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <a href="index.php">Trang chủ</a>
  <a href="index.php#kienthuc">Kiến thức & Hướng dẫn</a>
  <span class="current"><?php echo h($cat['title']); ?></span>
</nav>

        <header class="section-head">
          <h1 id="cat-title"><?php echo h($cat['title']); ?></h1>
          <p><?php echo h($cat['desc']); ?></p>
        </header>

        <!-- hero nhỏ -->
        <figure class="aside-ill" style="max-width:520px;margin:10px 0 18px">
          <img src="<?php echo h($cat['hero']); ?>" alt="Minh họa: <?php echo h($cat['title']); ?>" />
        </figure>

        <!-- toolbar tìm kiếm + độ tuổi -->
        <div class="kt-toolbar-2" style="margin-bottom:12px">
          <form class="kt-search" role="search" onsubmit="return false;">
            <label class="sr-only" for="q">Tìm kiếm</label>
            <input id="q" type="search" placeholder="Tìm theo từ khóa trong chuyên mục này…" />
          </form>
          <label class="age-filter" style="justify-self:end">
            <span>Độ tuổi:</span>
            <select id="age" aria-label="Lọc theo độ tuổi">
              <option value="">Tất cả</option>
              <option value="6-10">6–10</option>
              <option value="11-14">11–14</option>
              <option value="15-18">15–18</option>
            </select>
          </label>
        </div>

        <!-- grid bài viết -->
        <div class="grid grid-3" id="catGrid">
          <?php if (!$filtered): ?>
            <div class="empty">Chưa có bài trong chuyên mục này.</div>
          <?php else: ?>
            <?php foreach ($filtered as $p):
              $pSlug = strtolower(trim($p['slug']));
              $title = h($p['title']); $desc = h($p['desc']); $age = h($p['age']);
              $tags  = h($p['tags']);  $img  = h($p['img']);   $alt  = h($p['alt'] ?? $p['title']);
            ?>
            <article class="post card-ill"
                     data-age="<?php echo $age; ?>"
                     data-tags="<?php echo $tags; ?>"
                     data-title="<?php echo $title; ?>"
                     data-desc="<?php echo $desc; ?>"
                     data-slug="<?php echo h($pSlug); ?>">
              <figure class="ill"><img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" /></figure>
              <h3><?php echo $title; ?></h3>
              <p><?php echo $desc; ?></p>
              <a class="btn-cta" href="bai-viet.php?slug=<?php echo urlencode($pSlug); ?>">Xem chi tiết</a>
            </article>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php if (file_exists('footer.php')) include 'footer.php'; ?>

  <script>
    // Lọc client-side trong trang chuyên mục
    (function(){
      const cards = Array.from(document.querySelectorAll('#catGrid article.post'));
      const qInp  = document.getElementById('q');
      const age   = document.getElementById('age');

      function filter(){
        const q = (qInp?.value || '').toLowerCase().trim();
        const a = age?.value || '';
        let shown = 0;
        cards.forEach(c=>{
          const okAge = !a || c.dataset.age === a;
          const text  = (c.dataset.title + ' ' + c.dataset.desc).toLowerCase();
          const okQ   = !q || text.includes(q);
          const show  = okAge && okQ;
          c.style.display = show ? '' : 'none';
          if (show) shown++;
        });
        // nếu muốn, có thể hiện state trống
      }
      qInp?.addEventListener('input', filter);
      age?.addEventListener('change', filter);
    })();
  </script>
</body>
</html>
