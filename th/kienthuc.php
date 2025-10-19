<?php
/* ============================
   KIẾN THỨC & HƯỚNG DẪN (kienthuc.php)
   ============================ */

// Nếu bạn muốn render tĩnh (không phụ thuộc API), điền $posts tại đây.
// Nếu muốn chỉ dùng API để đổ dữ liệu, có thể bỏ $posts và để .kt-grid trống.
if (!isset($posts) || !is_array($posts) || !count($posts)) {
  $posts = [
    [
      'slug'  => 'dau-hieu-bat-nat-online',
      'title' => 'Dấu hiệu trẻ bị bắt nạt online',
      'desc'  => 'Các dấu hiệu cho thấy trẻ đang bị bắt nạt trên mạng.',
      'age'   => '6-10',
      'tags'  => 'an-toan-mang phu-huynh-giao-vien',
      'img'   => '/btapphpp1/assets/batnaton.webp',
      'alt'   => 'Minh họa: An toàn mạng',
    ],
    [
      'slug'  => 'ho-tro-tre-tram-cam',
      'title' => 'Làm sao khi trẻ có dấu hiệu trầm cảm',
      'desc'  => 'Các bước hỗ trợ cơ bản dành cho cha mẹ, thầy cô.',
      'age'   => '11-14',
      'tags'  => 'suc-khoe-tinh-than xu-ly-tinh-huong phu-huynh-giao-vien',
      'img'   => '/btapphpp1/assets/tramcam.jpg',
      'alt'   => 'Minh họa: Sức khỏe tinh thần',
    ],
    [
      'slug'  => 'quyen-tre-em-co-ban',
      'title' => 'Những quyền trẻ em cơ bản',
      'desc'  => 'Giới thiệu dễ hiểu về các quyền quan trọng của trẻ.',
      'age'   => '6-10',
      'tags'  => 'quyen-tre-em',
      'img'   => '/btapphpp1/assets/qte.webp',
      'alt'   => 'Minh họa: Quyền trẻ em',
    ],
    [
       'slug'  => 'dinh-duong-cho-tre',
       'title' => 'Kiến thức dinh dưỡng trẻ em',
       'desc'  => 'Thực đơn dinh dưỡng cho trẻ em theo từng độ tuổi',
       'age'   => '0-5 6-10 11-14 15-18' ,
       'tags'  => 'suc-khoe-tinh-than',
       'img'   => '/btapphpp1/assets/dinhduong.webp',
       'alt'   => 'Minh họa: Sức khỏe tinh thần'
    ],
  ];
}
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="app-base" content="/btapphpp1/"><!-- để app.js xác định APP_BASE -->
  <title>Kiến thức & Hướng dẫn</title>
  <style>
    :root{ --bg:#fffaf7; --card:#ffffff; --ink:#232325; --muted:#666; --brand:#e45a21; --chip:#f3ede9; --chipActive:#ffe7db; --bd:#eee; }
    *{box-sizing:border-box}
    body{margin:0;font:16px/1.5 system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial; color:var(--ink); background:var(--bg)}
    .container{max-width:1100px;margin-inline:auto;padding:40px 20px}
    .section-head h2{margin:0 0 6px;font-size:clamp(24px,4vw,32px)}
    .section-head p{margin:0;color:var(--muted)}
    .kt-toolbar{display:grid;gap:14px;margin:24px 0 16px;grid-template-columns:1fr auto}
    .chip-row{display:flex;flex-wrap:wrap;gap:10px}
    .chip2{border:1px solid var(--bd);background:var(--chip);padding:8px 12px;border-radius:999px;cursor:pointer;transition:.15s}
    .chip2:hover{filter:brightness(.97)}
    .chip2.active{background:var(--chipActive);border-color:#ffc6a6}
    .kt-search{display:flex;align-items:center}
    .kt-search input{width:280px;max-width:100%;border:1px solid var(--bd);border-radius:12px;padding:10px 12px}
    .layout{display:grid;grid-template-columns:1fr 320px;gap:24px}
    @media (max-width: 960px){.layout{grid-template-columns:1fr}}
    .kt-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
    @media (max-width: 900px){.kt-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
    @media (max-width: 560px){.kt-grid{grid-template-columns:1fr}}
    article.post{background:var(--card);border:1px solid var(--bd);border-radius:16px;padding:14px;display:flex;flex-direction:column;gap:8px}
    article.post figure{margin:0;display:flex;justify-content:center;align-items:center;aspect-ratio:16/9;background:#faf7f4;border-radius:12px;border:1px dashed #e8ded7}
    article.post img{max-width:80%;height:auto}
    article.post h3{margin:8px 0 0;font-size:18px}
    article.post p{margin:0;color:var(--muted)}
    .btn-cta{align-self:start;margin-top:auto;background:var(--brand);color:#fff;text-decoration:none;padding:8px 12px;border-radius:10px}
    .btn-cta.outline{background:transparent;color:var(--brand);border:1px solid var(--brand)}
    .kt-aside .aside-card{position:sticky;top:24px;background:var(--card);border:1px solid var(--bd);border-radius:16px;padding:16px;display:grid;gap:10px}
    .aside-ill img{max-width:100%;height:auto}
    .aside-list{padding-left:20px;margin:0;display:grid;gap:6px}
    .empty{border:1px dashed var(--bd);border-radius:14px;padding:22px;text-align:center;color:var(--muted)}
  </style>
</head>
<body>
<section id="kienthuc" class="section alt">
  <div class="container">
    <header class="section-head">
      <h2>Kiến thức &amp; Hướng dẫn</h2>
      <p>Bài viết thực tế từ chuyên gia và cơ quan chức năng.</p>
    </header>

    <div class="kt-toolbar">
      <div class="chip-row" role="tablist" aria-label="Chủ đề">
        <button class="chip2 active" role="tab" aria-selected="true" data-filter="all">Tất cả</button>
        <button class="chip2" role="tab" data-filter="an-toan-mang">An toàn mạng</button>
        <button class="chip2" role="tab" data-filter="xu-ly-tinh-huong">Xử lý tình huống</button>
        <button class="chip2" role="tab" data-filter="danh-ba-ho-tro">Danh bạ hỗ trợ</button>
        <button class="chip2" role="tab" data-filter="suc-khoe-tinh-than">Sức khỏe tinh thần</button>
        <button class="chip2" role="tab" data-filter="quyen-tre-em">Quyền trẻ em</button>
        <button class="chip2" role="tab" data-filter="phu-huynh-giao-vien">Dành cho phụ huynh/giáo viên</button>
      </div>
      <form class="kt-search" role="search" onsubmit="return false;">
        <label class="sr-only" for="ktQuery">Tìm kiếm bài viết</label>
        <input id="ktQuery" type="search" placeholder="Tìm theo từ khóa...">
      </form>
    </div>

    <div class="layout">
      <div>
        <div class="kt-grid" id="postGrid">
          <?php
          $seen = [];
          foreach ($posts as $post):
            $slug = strtolower(trim($post['slug'] ?? ''));
            if ($slug === '' || isset($seen[$slug])) continue;
            $seen[$slug] = true;

            $title = htmlspecialchars($post['title'] ?? '');
            $desc  = htmlspecialchars($post['desc'] ?? '');
            $age   = htmlspecialchars($post['age'] ?? '');
            $tags  = htmlspecialchars($post['tags'] ?? '');
            $img   = htmlspecialchars($post['img'] ?? '/btapphpp1/assets/infographics.jpg');
            $alt   = htmlspecialchars($post['alt'] ?? $title);
          ?>
          <article class="post"
                   data-age="<?= $age ?>"
                   data-tags="<?= $tags ?>"
                   data-title="<?= $title ?>"
                   data-desc="<?= $desc ?>"
                   data-slug="<?= htmlspecialchars($slug) ?>">
            <figure class="ill">
              <img src="<?= $img ?>" alt="<?= $alt ?>">
            </figure>
            <h3><?= $title ?></h3>
            <p><?= $desc ?></p>
            <a class="btn-cta" href="bai-viet.php?slug=<?= urlencode($slug) ?>">Xem chi tiết</a>
          </article>
          <?php endforeach; ?>
        </div>

        <div class="kt-actions" style="display:flex;gap:16px;align-items:center;margin:18px 0">
          <label class="age-filter">
            <span>Độ tuổi:</span>
            <select id="ageRange" aria-label="Lọc theo độ tuổi">
              <option value="">Tất cả</option>
              <option value="0-5">0-5</option>
              <option value="6-10">6–10</option>
              <option value="11-14">11–14</option>
              <option value="15-18">15–18</option>
            </select>
          </label>

          <div class="rating" id="ratingBlock" aria-label="Đánh giá bài viết" style="margin-left:auto">
            <span>Bài viết này có hữu ích không?</span>
            <div class="stars" role="radiogroup" aria-label="Đánh giá theo sao">
              <button class="star" data-v="1" role="radio" aria-checked="false" aria-label="1 sao">★</button>
              <button class="star" data-v="2" role="radio" aria-checked="false" aria-label="2 sao">★</button>
              <button class="star" data-v="3" role="radio" aria-checked="false" aria-label="3 sao">★</button>
              <button class="star" data-v="4" role="radio" aria-checked="false" aria-label="4 sao">★</button>
              <button class="star" data-v="5" role="radio" aria-checked="false" aria-label="5 sao">★</button>
            </div>
          </div>
        </div>

        <div id="emptyState" class="empty" hidden>Không tìm thấy bài viết nào phù hợp.</div>
      </div>

      <aside class="kt-aside" aria-label="Tài nguyên nổi bật">
        <div class="aside-card">
          <div style="display:flex;gap:8px;align-items:center"><span aria-hidden="true">📌</span><strong>Infographic nổi bật</strong></div>
          <ul class="aside-list">
            <li>✔ Dấu hiệu nhận biết</li>
            <li>✔ Quy trình báo cáo</li>
            <li>✔ Đường dây nóng 111</li>
          </ul>
          <figure class="aside-ill"><img src="/btapphpp1/assets/hero_placeholder.svg" alt="Infographic minh họa" /></figure>
          <a class="btn-cta outline" href="/btapphpp1/assets/infographic.pdf" download>Tải tài liệu</a>
        </div>
      </aside>
    </div>
  </div>
</section>

<script>
  const chips = document.querySelectorAll('.chip2');
  const grid = document.getElementById('postGrid');
  const posts = Array.from(grid.querySelectorAll('article.post'));
  const searchInput = document.getElementById('ktQuery');
  const ageSelect = document.getElementById('ageRange');
  const emptyState = document.getElementById('emptyState');

  let activeTag = 'all';

  function applyFilters(){
    const q = (searchInput?.value || '').trim().toLowerCase();
    const age = ageSelect?.value || '';
    let visible = 0;

    posts.forEach(card => {
      const tags = (card.dataset.tags || '').trim().split(/\s+/).filter(Boolean);
      const okTag = activeTag === 'all' || tags.includes(activeTag);
      const okAge = !age || (card.dataset.age === age);
      const text = ((card.dataset.title || '') + ' ' + (card.dataset.desc || '')).toLowerCase();
      const okQ = !q || text.includes(q);
      const show = okTag && okAge && okQ;
      card.style.display = show ? '' : 'none';
      if (show) visible++;
    });

    if (emptyState) emptyState.hidden = visible !== 0;
  }

  chips.forEach(btn => {
    btn.addEventListener('click', () => {
      chips.forEach(b=>{b.classList.remove('active'); b.setAttribute('aria-selected','false');});
      btn.classList.add('active'); btn.setAttribute('aria-selected','true');
      activeTag = btn.dataset.filter || 'all';
      applyFilters();
    });
  });

  searchInput?.addEventListener('input', applyFilters);
  ageSelect?.addEventListener('change', applyFilters);

  // Dedupe theo slug (phòng khi backend render trùng)
  (function dedupeBySlug(){
    const seen = new Set();
    document.querySelectorAll('#postGrid article.post').forEach(card=>{
      const slug = card.dataset.slug;
      if (!slug) return;
      if (seen.has(slug)) card.remove(); else seen.add(slug);
    });
  })();

  // Khởi tạo
  applyFilters();
</script>
</body>
</html>
