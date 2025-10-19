<?php
// api/posts_list.php
header('Content-Type: application/json; charset=utf-8');

// TODO: Nếu có DB, select theo $_GET['filter'], $_GET['q'], $_GET['page']...
// Dữ liệu mẫu (đúng schema app.js đang đọc)
$posts = [
  [
    'slug'          => 'dau-hieu-bat-nat-online',
    'title'         => 'Dấu hiệu trẻ bị bắt nạt online',
    'excerpt'       => 'Các dấu hiệu cho thấy trẻ đang bị bắt nạt trên mạng.',
    'thumb'         => '/btapphpp1/assets/batnaton.webp',
    'read_time_min' => 4,
    'age_range'     => '6-10',
    'updated'       => '2025-05-10',
    'tags'          => ['an-toan-mang','phu-huynh-giao-vien']
  ],
  [
    'slug'          => 'ho-tro-tre-tram-cam',
    'title'         => 'Làm sao khi trẻ có dấu hiệu trầm cảm',
    'excerpt'       => 'Các bước hỗ trợ cơ bản dành cho cha mẹ, thầy cô.',
    'thumb'         => '/btapphpp1/assets/cat2.svg',
    'read_time_min' => 7,
    'age_range'     => '11-14',
    'updated'       => '2025-04-28',
    'tags'          => ['suc-khoe-tinh-than','xu-ly-tinh-huong','phu-huynh-giao-vien']
  ],
  [
    'slug'          => 'quyen-tre-em-co-ban',
    'title'         => 'Những quyền trẻ em cơ bản',
    'excerpt'       => 'Giới thiệu dễ hiểu về các quyền quan trọng của trẻ.',
    'thumb'         => '/btapphpp1/assets/cat3.svg',
    'read_time_min' => 3,
    'age_range'     => '6-10',
    'updated'       => '2025-03-15',
    'tags'          => ['quyen-tre-em']
  ],
  [
    'slug'          => 'bao-cao-bao-luc-hoc-duong-an-toan',
    'title'         => 'Báo cáo bạo lực học đường an toàn',
    'excerpt'       => 'Cách thu thập bằng chứng và báo cáo qua 111.',
    'thumb'         => '/btapphpp1/assets/hero_placeholder.svg',
    'read_time_min' => 5,
    'age_range'     => '15-18',
    'updated'       => '2025-02-20',
    'tags'          => ['xu-ly-tinh-huong','phu-huynh-giao-vien']
  ],
  [
    'slug'          => 'dinh-duong-cho-tre',
    'title'         => 'Kiến thức dinh dưỡng trẻ em',
    'excerpt'       => 'Thực đơn dinh dưỡng cho trẻ em theo từng độ tuổi',
    'thumb'         => '/btapphpp1/assets/dinhduong.webp',
    'read_time_min' => 4,
    'age_range'     => '0-5 6-10 11-14 15-18',
    'updated'       => '2025-05-10',
    'tags'          => ['suc-khoe-tinh-than']
  ],
];

// Trả về mảng thuần (app.js đã hỗ trợ), hoặc dùng ['posts'=>...]
echo json_encode(['posts' => $posts], JSON_UNESCAPED_UNICODE);


// ===== FILTERING =====
$norm = function($s) { return mb_strtolower(trim($s ?? ''), 'UTF-8'); };

$filtered = array_values(array_filter($posts, function($p) use ($filter, $q, $norm) {
  // lọc theo chip
  $okFilter = ($filter === 'all') || in_array($filter, $p['tags'] ?? [], true);

  // lọc theo từ khóa: title + excerpt
  if ($q !== '') {
    $qn  = $norm($q);
    $txt = $norm(($p['title'] ?? '') . ' ' . ($p['excerpt'] ?? ''));
    $okSearch = (mb_strpos($txt, $qn) !== false);
  } else {
    $okSearch = true;
  }

  return $okFilter && $okSearch;
}));

// ===== SORT (tuỳ chỉnh): mới nhất trước
usort($filtered, function($a, $b) {
  return strcmp($b['updated'] ?? '', $a['updated'] ?? '');
});

// ===== PAGINATION =====
$total = count($filtered);
$offset = ($page - 1) * $pageSize;
$items = array_slice($filtered, $offset, $pageSize);

// ===== RESPONSE SHAPE =====
// UI hiện dùng chỉ cần mảng items; nếu muốn kèm meta, trả thêm "meta".
$response = [
  'items' => $items,
  'meta'  => [
    'page'       => $page,
    'page_size'  => $pageSize,
    'total'      => $total,
    'total_page' => (int)ceil($total / max(1, $pageSize)),
    'filter'     => $filter,
    'q'          => $q,
  ]
];

// Mặc định app.js đang .json() thẳng mảng; để tương thích, nếu muốn giữ nguyên,
// bạn có thể echo chỉ $items thay vì $response. Ở đây mình trả $items khi không có tham số "with_meta".
if (!isset($_GET['with_meta'])) {
  echo json_encode($items, JSON_UNESCAPED_UNICODE);
  exit;
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);