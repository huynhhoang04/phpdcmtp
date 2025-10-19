<?php
// th/highlight-section.php
// === Khối "Chuyên mục nổi bật / Chính sách mới" dùng chung ===

// Hàm tránh lỗi XSS
if (!function_exists('h')) {
  function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
}

/**
 * render_highlight_section($title, $items)
 * @param string $title  Tiêu đề mục (vd: "Chuyên mục nổi bật")
 * @param array  $items  Mỗi phần tử gồm: href, img, title
 */
if (!function_exists('render_highlight_section')) {
  function render_highlight_section(string $title, array $items): void {
    echo '<section class="highlight-section">';
      echo '<div class="container">';
        echo '<h2 class="highlight-title">'.h($title).'</h2>';
        echo '<div class="highlight-grid">';
        foreach ($items as $it) {
  $href = $it['href'] ?? '#';
  $img  = $it['img']  ?? '';
  $t    = $it['title']?? '';
  $meta = $it['meta'] ?? ''; // dòng chữ nhỏ

  echo '<a class="highlight-item" href="'.h($href).'">';
    if ($img !== '') echo '<img src="'.h($img).'" alt="">';
    echo '<div class="txt">';
      echo '<strong>'.h($t).'</strong>';
      if ($meta !== '') echo '<small>'.h($meta).'</small>';
    echo '</div>';
  echo '</a>';
}

        echo '</div>';
      echo '</div>';
    echo '</section>';
  }
}
