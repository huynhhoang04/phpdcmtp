<?php
// search.php tạm thời
$q = isset($_GET['q']) ? trim($_GET['q']) : '';

// dữ liệu mẫu cứng
$articles = [
    ['id' => 1, 'title' => 'Hướng dẫn lập trình PHP cơ bản'],
    ['id' => 2, 'title' => 'Kiến thức HTML & CSS'],
    ['id' => 3, 'title' => 'Tìm hiểu JavaScript nâng cao'],
    ['id' => 4, 'title' => 'Hướng dẫn sử dụng MySQL'],
];

// lọc kết quả tạm thời
$results = [];
if ($q !== '') {
    foreach ($articles as $a) {
        if (stripos($a['title'], $q) !== false) {
            $results[] = $a;
        }
    }
}
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Kết quả tìm kiếm: <?php echo htmlspecialchars($q); ?></title>
  <meta name="description" content="Kết quả tìm kiếm cho <?php echo htmlspecialchars($q); ?>" />

  <link rel="stylesheet" href="/BTAPPHPP1/styles.css" />
</head>
<body>
    <?php if (file_exists('header.php')) include 'header.php'; ?>
  <main id="main">
    <section class="section" aria-labelledby="cat-title">
      <div class="container">

         <?php if ($results): ?>
      <ul>
        <?php foreach ($results as $row): ?>
          <li>
            <a href="article.php?id=<?php echo $row['id']; ?>">
              <?php echo htmlspecialchars($row['title']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p class="no-results">Không tìm thấy kết quả.</p>
    <?php endif; ?>

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
