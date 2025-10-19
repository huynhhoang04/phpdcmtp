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
        <h1>Tin tức mới nhất ngày <?= date('d/m/Y') ?></h1>
        <p>Được tòa soạn lựa chọn theo ngày</p>
      </header>
<section id="tinnoibat" class="section">
  <div class="container">
    <div class="news-list">
      <article class="news-item">
        <figure class="thumb">
          <img src="/btapphpp1/assets/tintuchotthucday.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinhot/tinchinhsach.php">Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em</a></h3>
          <p>Trao đổi với Tạp chí Trẻ em Việt Nam, bà Silvia Danailov - Trưởng đại diện UNICEF tại Việt Nam đã chia sẻ, đánh giá sâu sắc những nỗ lực của Việt Nam trong việc...</p>
          <span class="cat">Tin chính sách</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="/btapphpp1/assets/tintuchotyte.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinhot/tinyte.php">Thành phố HCM tăng cường bảo đảm nhi khoa</a></h3>
          <p>Sở Y tế TP HCM vừa yêu cầu các cơ sở khám, chữa bệnh tăng cường các biện pháp bảo đảm an toàn cho bệnh nhi.</p>
          <span class="cat">Tin y tế</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="/btapphpp1/assets/tintuchotmxhchotre.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinhot/tinuc.php">Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm</a></h3>
          <p>An toàn số</p>
          <span class="cat">Quyền trẻ em</span>
        </div>
      </article>
    </div>
  </div>
</section>


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
    </article>
    <!-- Cột phải: sidebar (dùng component chung) -->
    <aside class="sidebar">
      <?php render_sidebar_box('Tin tức nổi bật', $news_items); ?>
    </aside>

  </div>
</main>
<?php
require_once __DIR__ . '/../th/highlight-section.php';

$base = $base ?? '/btapphpp1/';
$highlight_items = [
  ['href'=>'../chuyenmuc/quyentreem.php', 'img'=>$base.'assets/cat1.png', 'title'=>'Quyền trẻ em theo Luật trẻ em 2016', 'meta'=>'Quyền sống, quyền được bảo vệ để không bị bạo lực, bỏ rơi, bỏ mặc, quyền được chăm sóc sức khỏe,... '],
  ['href'=>'../chuyenmuc/phongchongbaohanh.php', 'img'=>$base.'assets/cat2.png', 'title'=>'Bạo hành trẻ em: Thực trạng hiện nay và giải pháp khắc phục', 'meta'=>'Thực trạng bạo hành trẻ em hiện nay vẫn đang rất nhức nhối và không ngừng gia tăng. Trong đó có đến hơn 70% trường hợp bạo hành trẻ em diễn ra trong chính gia đình gây ra những hệ quả thương tâm. Cần đẩy mạnh các biện pháp bảo vệ trẻ em, nâng cao hình phạt với những kẻ bạo hành để sớm ngăn chặn vấn đề này.'],
  ['href'=>'../chuyenmuc/giaoducantoan.php', 'img'=>$base.'assets/cat3.png', 'title'=>'Giáo dục kĩ năng an toàn cho trẻ em.', 'meta'=>'Môi trường giáo dục an toàn là môi trường nuôi dưỡng, chăm sóc, giáo dục trong đó trẻ em được bảo vệ, được đối xử công bằng, nhân ái.'],
  ['href'=>'../chuyenmuc/chinhsachvahoatdong.php', 'img'=>$base.'assets/cat5.png', 'title'=>'Chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.', 'meta'=>'Giới thiệu các chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.'],
  ['href'=>'../chuyenmuc/antoanmang.php', 'img'=>$base.'assets/cat6.jpg', 'title'=>'Bảo vệ trẻ em trên không gian mạng', 'meta'=>'Bảo vệ trẻ em trên không gian mạng là một nhiệm vụ quan trọng, bao gồm việc áp dụng các quy định và biện pháp nhằm đảm bảo an toàn cho trẻ em khi sử dụng Internet và các dịch vụ trực tuyến.'],
  ['href'=>'../chuyenmuc/honnhanvagd.php', 'img'=>$base.'assets/cat4.jpg', 'title'=>'Bảo vệ quyền trẻ em theo luật hôn nhân và gia đình', 'meta'=>'Một số vấn đề lý luận về bảo vệ quyền trẻ em theo luật hôn nhân và gia đình Việt Nam.'],
];


render_highlight_section('Chuyên mục nổi bật', $highlight_items);
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


