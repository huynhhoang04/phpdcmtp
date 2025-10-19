<?php
// quyentreem.php — Trang chuyên mục: Quyền trẻ em

// Hàm escape an toàn
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// Metadata cố định cho chuyên mục này
$cat = [
  'slug'  => 'quyen-tre-em',
  'title' => 'Quyền trẻ em',
  'desc'  => 'Tổng hợp 4 nhóm quyền cơ bản, ví dụ tình huống và câu hỏi thường gặp.',
  'tag'   => 'quyen-tre-em',        // dùng để lọc bài theo tags
  'hero'  => 'assets/cat3.svg',     // hình minh họa
];

// Nếu bạn đã có $posts từ DB, giữ nguyên. Nếu chưa, fallback mẫu:
if (!isset($posts) || !is_array($posts)) {
  $posts = [
    ['slug'=>'dau-hieu-bat-nat-online','title'=>'Dấu hiệu trẻ bị bắt nạt online','desc'=>'Các dấu hiệu cho thấy trẻ đang bị bắt nạt trên mạng.','age'=>'6-10','tags'=>'an-toan-mang phu-huynh-giao-vien','img'=>'assets/cat1.svg','alt'=>'An toàn mạng'],
    ['slug'=>'ho-tro-tre-tram-cam','title'=>'Làm sao khi trẻ có dấu hiệu trầm cảm','desc'=>'Các bước hỗ trợ cơ bản dành cho cha mẹ, thầy cô.','age'=>'11-14','tags'=>'suc-khoe-tinh-than xu-ly-tinh-huong','img'=>'assets/cat2.svg','alt'=>'Sức khỏe tinh thần'],
    ['slug'=>'quyen-tre-em-co-ban','title'=>'Những quyền trẻ em cơ bản','desc'=>'Giới thiệu dễ hiểu về 4 nhóm quyền: Sống còn, Bảo vệ, Phát triển, Tham gia.','age'=>'6-10','tags'=>'quyen-tre-em','img'=>'assets/cat3.svg','alt'=>'Quyền trẻ em'],
    ['slug'=>'quyen-tham-gia-cua-tre','title'=>'Quyền tham gia của trẻ: cách lắng nghe','desc'=>'Gợi ý để gia đình và nhà trường tạo cơ hội cho trẻ bày tỏ ý kiến.','age'=>'11-14','tags'=>'quyen-tre-em phu-huynh-giao-vien','img'=>'assets/hero_placeholder.svg','alt'=>'Quyền tham gia'],
  ];
}

// Lọc theo tag của chuyên mục
$categoryPosts = [];
$seen = [];
foreach ($posts as $p) {
  $pSlug = strtolower(trim($p['slug'] ?? ''));
  if ($pSlug==='' || isset($seen[$pSlug])) continue; // tránh trùng
  $tags  = strtolower(' '.($p['tags'] ?? '').' ');
  if (strpos($tags, ' '.$cat['tag'].' ') === false) continue; // chỉ lấy bài có tag 'quyen-tre-em'
  $seen[$pSlug] = true;
  $categoryPosts[] = $p;
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
  <?php if (file_exists('header.php')) include 'header.php'; ?>

  <main id="main">
    <section class="section" aria-labelledby="cat-title">
      <div class="container">
        <!-- breadcrumb -->
        <nav aria-label="Breadcrumb" style="margin-bottom:10px">
          <a href="index.php">Trang chủ</a> › <a href="index.php#kienthuc">Kiến thức & Hướng dẫn</a> › <strong><?php echo h($cat['title']); ?></strong>
        </nav>

        <header class="section-head">
          <h1 id="cat-title"><?php echo h($cat['title']); ?></h1>
          <p><?php echo h($cat['desc']); ?></p>
        </header>

        <!-- hero nhỏ -->
        <figure class="aside-ill" style="max-width:520px;margin:10px 0 18px">
          <img src="<?php echo h($cat['hero']); ?>" alt="Minh họa: <?php echo h($cat['title']); ?>" />
        </figure>

        <!-- toolbar: tìm kiếm + độ tuổi -->
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
          <?php if (!$categoryPosts): ?>
            <div class="empty">Chưa có bài trong chuyên mục này.</div>
          <?php else: ?>
            <?php foreach ($categoryPosts as $p):
              $pSlug = h(strtolower(trim($p['slug'])));
              $title = h($p['title']); $desc = h($p['desc']); $age = h($p['age']);
              $tags  = h($p['tags']);  $img  = h($p['img']);   $alt  = h($p['alt'] ?? $p['title']);
            ?>
            <article class="post card-ill"
                     data-age="<?php echo $age; ?>"
                     data-tags="<?php echo $tags; ?>"
                     data-title="<?php echo $title; ?>"
                     data-desc="<?php echo $desc; ?>"
                     data-slug="<?php echo $pSlug; ?>">
              <figure class="ill"><img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" /></figure>
              <h3><?php echo $title; ?></h3>
              <p><?php echo $desc; ?></p>
              <a class="btn-cta" href="bai-viet.php?slug=<?php echo urlencode($pSlug); ?>">Xem chi tiết</a>
            </article>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <!-- gợi ý nội dung tĩnh cho chuyên mục này (tuỳ chọn) -->
        <section class="section" style="margin-top:28px">
          <h2>4 nhóm quyền trẻ em</h2>
          <ul class="list-2col">
            <li><strong>Sống còn:</strong> chăm sóc sức khỏe, dinh dưỡng, nơi ở an toàn.</li>
            <li><strong>Bảo vệ:</strong> chống bạo lực, xâm hại, bóc lột, tảo hôn.</li>
            <li><strong>Phát triển:</strong> học tập, vui chơi, văn hóa, tiếp cận thông tin.</li>
            <li><strong>Tham gia:</strong> bày tỏ ý kiến, được lắng nghe về việc liên quan đến trẻ.</li>
          </ul>
        </section>

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
      const empty = document.querySelector('#catGrid .empty');

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
        if (empty) empty.style.display = shown ? 'none' : '';
        if (!shown && !empty) {
          const msg = document.createElement('div');
          msg.className = 'empty';
          msg.textContent = 'Không tìm thấy bài viết phù hợp.';
          document.getElementById('catGrid').appendChild(msg);
        }
      }
      qInp?.addEventListener('input', filter);
      age?.addEventListener('change', filter);
    })();
  </script>
</body>
</html>
