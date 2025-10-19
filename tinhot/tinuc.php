<?php
  // Header (đã nạp $base và styles chung)
  include __DIR__ . '/../th/banner.php'; 
  include __DIR__ . '/../th/header.php';
  // Component ô sidebar dùng chung
  require_once __DIR__ . '/../th/sidebar-box.php';
  
  // $base 
  $base = $base ?? '/btapphpp1/';
 
  // Dữ liệu cho 2 ô sidebar
  $news_items = [
    ['href'=>'../tinnoibat/baovemat.php', 'img'=>$base.'assets/tintuc7cachbaovemat.jpg',   'title'=>'7 Cách Bảo Vệ Mắt Không Bị Cận Cho Trẻ Em Thường Xuyên Tiếp Xúc Thiết Bị Điện Tử', 'meta'=>'Tin sức khỏe'],
    ['href'=>'../tinnoibat/nguonnuoc.php', 'img'=>$base.'assets/tintuctimhiuevenguonnuoc.webp',        'title'=>'10 năm giúp trẻ em hiểu về nguồn nước',                           'meta'=>'Tin sự kiện'],
    ['href'=>'../tinnoibat/mauthuan.php', 'img'=>$base.'assets/tintuccachungxukhitredanhnhau.webp',  'title'=>'Trẻ nhỏ mâu thuẫn và cái "đầu nóng" của phụ huynh: Giáo dục nhân cách là vắc-xin cho văn hóa ứng xử', 'meta'=>'Tin tâm lý và sức khỏe'],
  ];
  $guide_items = [
    ['href'=>'#', 'img'=>$base.'assets/camnangtichcuc.jpg',   'title'=>'Muốn cuộc sống con tích cực, cha mẹ phải là người thay đổi trước', 'meta'=>'Cẩm nang gia đình'],
    ['href'=>'#', 'img'=>$base.'assets/camnangnhutnhat.webp', 'title'=>'Những nguyên nhân trẻ nhút nhát cha mẹ không thể bỏ qua',           'meta'=>'Kỹ năng & Tâm lý'],
  ];
?>
<script src="<?= $base ?>app.js" defer></script>
<link rel="stylesheet" href="<?= $base ?>styles.css" />
<main id="main" class="page quyentreem">
  <div class="container page-inner">
    <!-- Cột trái: nội dung chính -->
    <article class="main-article">
      <header class="article-head">
        <h1>Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại 'chừa' kẽ hở nguy hiểm</h1>
        <p class="meta">
          Nguồn: <a href="https://tuoitre.vn/uc-cam-tre-duoi-16-tuoi-len-mang-xa-hoi-song-lai-chua-ke-ho-nguy-hiem-20250916133656081.htm"><strong>Báo tuổi trẻ</strong></a><br>
        </p>
      </header>
      <div class="article-body">
        <strong>Lệnh cấm mạng xã hội sắp được áp dụng tại Úc đối với người dưới 16 tuổi, song cho phép Facebook, TikTok và các nền tảng khác có sai sót nhất định khi kiểm tra độ tuổi người dùng.</strong>
<figure class="article-image">
        <img src="<?= $base ?>assets/tinuc1.webp" alt="">
        <figcaption></figcaption>
        </figure>
        <p>Theo luật mới, có hiệu lực từ ngày 10-12, các nền tảng mạng xã hội như Snapchat, X và YouTube sẽ chịu trách nhiệm thực thi giới hạn độ tuổi người dùng, và phải chịu mức phạt lên đến 50 triệu đô la Úc (hơn 33 triệu USD) nếu vi phạm.
<br>
Dù vậy, theo hướng dẫn quản lý dành cho các nhà điều hành mạng xã hội công bố hôm 16-9, Ủy viên An toàn Điện tử (eSafety Commissioner) của Úc sẽ không áp đặt mức độ chính xác tối thiểu đối với công nghệ kiểm tra độ tuổi mà các nền tảng chọn.</p>
<p>"Các nền tảng có thể tự xác định mức sai số chấp nhận được tùy theo rủi ro, loại hình dịch vụ và nhóm người dùng. Họ không cần loại bỏ hoàn toàn sự không chắc chắn, nhưng phải hạn chế tối đa thiệt hại, đồng thời bảo đảm quyết định họ đưa ra là hợp lý, công bằng và có thể được rà soát lại", Ủy viên An toàn Điện tử Úc nêu rõ.</p>
<p>Theo Hãng tin Bloomberg, điều này đồng nghĩa một phần quyền kiểm soát được trao lại cho chính các công ty mà luật pháp muốn siết chặt, đồng thời mở ra kẽ hở để trẻ em lách luật.
<br>
Động thái này được xem là phép thử trong bối cảnh nhiều chính phủ trên thế giới đang loay hoay tìm cách bảo vệ trẻ em khỏi các nội dung độc hại trên môi trường trực tuyến.
<br>
Trước đó, vào ngày 28-11-2024, Thượng viện Úc thông qua dự luật cấm trẻ dưới 16 tuổi dùng mạng xã hội, sau khi Hạ viện nhất trí trước đó một ngày, với sự ủng hộ của lưỡng đảng.
<br>
Biện pháp này từng là chủ đề tranh cãi căng thẳng trong dư luận Úc suốt nhiều tháng.</p>


    </div>
    <!-- Meta + Chia sẻ -->
<div class="post-bottom-meta">
  <div class="post-updated">
    Cập nhật <strong><?= date('g:i A , d/m/Y') ?></strong>
  </div>
  <div class="post-share">
    <span>Chia sẻ nội dung này</span>
    <a class="ic fb" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('http://your-domain/bai-viet') ?>" target="_blank" rel="noopener">f</a>
    <a class="ic tw" href="https://twitter.com/intent/tweet?url=<?= urlencode('http://your-domain/bai-viet') ?>" target="_blank" rel="noopener">t</a>
    <a class="ic pin" href="https://pinterest.com/pin/create/button/?url=<?= urlencode('http://your-domain/bai-viet') ?>" target="_blank" rel="noopener">p</a>
  </div>
</div>

<!-- Khối bình luận -->
<section class="comment-card" id="binhluan">
  <h4>Trở thành người đầu tiên bình luận cho bài viết này!</h4>
  <form action="#" method="post" onsubmit="return false">
    <textarea name="comment" rows="6" placeholder="Nội dung bình luận"></textarea>
    <button type="submit" class="btn btn-primary">Gửi bình luận</button>
  </form>
</section>

    </article>
    <!-- Cột phải: sidebar (dùng component chung) -->
    <aside class="sidebar">
      <?php render_sidebar_box('Tin tức nổi bật', $news_items); ?>
      <?php render_sidebar_box('Cẩm nang và bài học', $guide_items); ?>
    </aside>

  </div>
</main>
<?php
require_once __DIR__ . '/../th/highlight-section.php';

$base = $base ?? '/btapphpp1/';
$highlight_items = [
  ['href'=>'../tinhot/tinyte.php', 'img'=>$base.'assets/tintuchotthucday.webp', 'title'=>'Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em', 'meta'=>'Tin chính sách'],
  ['href'=>'../tinhot/tinuc.php', 'img'=>$base.'assets/tintuchotmxhchotre.webp',  'title'=>'Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm', 'meta'=>'An toàn số'],
];


render_highlight_section('Tin mới khác', $highlight_items);
?>
<?php require_once __DIR__ . '/../th/footer.php'; ?>
<script>
document.querySelector('#binhluan form')?.addEventListener('submit', function(){
  const txt = this.querySelector('textarea');
  if (!txt.value.trim()) { alert('Vui lòng nhập nội dung bình luận'); return; }
  alert('Đã nhận bình luận (demo). Tích hợp API sau nhé!');
  txt.value = '';
});
</script>


