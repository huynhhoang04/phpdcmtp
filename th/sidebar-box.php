<?php
// th/sidebar-box.php
// === Component dùng chung cho sidebar tin tức hoặc chuyên mục ===

// hàm nhỏ để tránh lỗi XSS
if (!function_exists('h')) {
  function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
}

/**
 * render_sidebar_box($title, $items)
 * @param string $title  Tiêu đề ô (ví dụ: "Tin mới hôm nay")
 * @param array  $items  Mỗi item gồm: href, img, title, meta
 */
if (!function_exists('render_sidebar_box')) {
  function render_sidebar_box(string $title, array $items): void {
    echo '<div class="sidebar-box">';
      echo '<h2 class="sidebar-title">'.h($title).'</h2>';
      echo '<div class="news-list">';
        foreach ($items as $it) {
          $href = $it['href'] ?? '#';
          $img  = $it['img']  ?? '';
          $t    = $it['title']?? '';
          $meta = $it['meta'] ?? '';
          echo '<a class="news-item" href="'.h($href).'">';
            if ($img !== '') echo '<img src="'.h($img).'" alt="">';
            echo '<div class="text">';
              echo '<strong>'.h($t).'</strong>';
              if ($meta !== '') echo '<small>'.h($meta).'</small>';
            echo '</div>';
          echo '</a>';
        }
      echo '</div>';
    echo '</div>';
  }
}
