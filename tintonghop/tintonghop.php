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
    ['href'=>'../tinhot/tinchinhsach.php', 'img'=>$base.'assets/tintuchotthucday.webp',   'title'=>'Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em', 'meta'=>'Tin chính sách'],
    ['href'=>'../tinhot/tinyte.php', 'img'=>$base.'assets/tintuchotyte.webp',        'title'=>'Thành phố HCM tăng cường bảo đảm nhi khoa',                           'meta'=>'Tin y tế'],
    ['href'=>'../tinhot/tinuc.php', 'img'=>$base.'assets/tintuchotmxhchotre.webp',  'title'=>'Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm', 'meta'=>'An toàn số'],
  ];
?>
<script src="<?= $base ?>app.js" defer></script>
<link rel="stylesheet" href="<?= $base ?>styles.css" />
<main id="main" class="page quyentreem">
  <div class="container page-inner">
    <!-- Cột trái: nội dung chính -->
    <article class="main-article">
      <header class="article-head">
        <h1>Tin tổng hợp</h1>
        <p>Tổng hợp tất cả các tin tức đã được đăng tải</p>
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
          <h3><a href="#">Thành phố HCM tăng cường bảo đảm nhi khoa</a></h3>
          <p>Sở Y tế TP HCM vừa yêu cầu các cơ sở khám, chữa bệnh tăng cường các biện pháp bảo đảm an toàn cho bệnh nhi.</p>
          <span class="cat">Tin y tế</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="/btapphpp1/assets/tintuchotmxhchotre.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="#">Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm</a></h3>
          <p>ệnh cấm mạng xã hội sắp được áp dụng tại Úc đối với người dưới 16 tuổi, song cho phép Facebook, TikTok và các nền tảng khác có sai sót nhất định khi kiểm tra độ tuổi người dùng.</p>
          <span class="cat">Tin thế giới</span>
        </div>
      </article>
      
      <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuc7cachbaovemat.jpg" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/baovemat.php">7 Cách Bảo Vệ Mắt Không Bị Cận Cho Trẻ Em Thường Xuyên Tiếp Xúc Thiết Bị Điện Tử</a></h3>
          <p>Bảo vệ mắt cho trẻ em là một vấn đề cực kỳ quan trọng trong thời đại công nghệ số hiện nay. Trẻ em ngày nay tiếp xúc thiết bị điện tử như điện thoại di động, máy tính bảng,...</p>
          <span class="cat">Tin sức khỏe</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuctrungthu.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/trungthu.php">Mang Trung thu yêu thương đến cho hơn 500 trẻ em vùng xa</a></h3>
          <p>Chương trình Trung thu yêu thương, sinh viên Trường ĐH Khoa học Xã hội và Nhân văn-ĐHQG TP HCM đã kêu gọi ủng hộ hơn 1,5 tỉ đồng cho trẻ em.</p>
          <span class="cat">Tin sự kiện</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuccachungxukhitredanhnhau.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/mauthuan.php">Trẻ nhỏ mâu thuẫn và cái "đầu nóng" của phụ huynh: Giáo dục nhân cách là vắc-xin cho văn hóa ứng xử</a></h3>
          <p>Để khắc phục văn hóa ứng xử xuống cấp, cần tập trung vào giáo dục nhân cách và đối thoại</p>
          <span class="cat">Tin tâm lý & sức khỏe</span>
        </div>
      </article>

       <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuctimhiuevenguonnuoc.webp" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/nguonnuoc.php">10 năm giúp trẻ em hiểu về nguồn nước</a></h3>
          <p>10 năm triển khai chương trình "Mizuiku – Em yêu nước sạch", học sinh tiểu học được hiểu về vai trò của nước, khuyến khích hình thành thói quen tiết kiệm, bảo vệ môi trường.</p>
          <span class="cat">Tin sự kiện</span>
        </div>
      </article>

      <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuckyket.jpg" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/chienluoc.php">Hội Bảo vệ quyền trẻ em Việt Nam ký kết hợp tác chiến lược bốn bên, chung tay vì sức khỏe trẻ em tại các địa bàn khó khăn</a></h3>
          <p>Ngày 23/9/2025 tại Hà Nội, Hội Bảo vệ quyền trẻ em Việt Nam (VACR) đã cùng Hệ thống nhà thuốc Pharmacity, Công ty Cổ phần MHD Pharma và Công ty AORA Health (Tây Ban Nha) chính thức ký kết ...</p>
          <span class="cat">Tin sự kiện</span>
        </div>
      </article>

       <article class="news-item">
        <figure class="thumb">
          <img src="../assets/tintuchanhtrinhvuotkho.jpg" alt="">
        </figure>
        <div class="body">
          <h3><a href="../tinnoibat/yeuthuong.php">Hành trình yêu thương – Tiếp sức cho trẻ em vượt khó</a></h3>
          <p>Ngày 13/9/2025 tại Hà Nội, trong khuôn khổ chương trình AIA Pink Journey – Hành trình Yêu thương 2025, Công ty Bảo hiểm Nhân thọ AIA Việt Nam đã phối hợp cùng ...</p>
          <span class="cat">Tin sự kiện</span>
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
  ['href'=>'#', 'img'=>$base.'assets/cat5.png', 'title'=>'Chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.', 'meta'=>'Giới thiệu các chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.'],
  ['href'=>'#', 'img'=>$base.'assets/cat6.jpg', 'title'=>'Bảo vệ trẻ em trên không gian mạng', 'meta'=>'Bảo vệ trẻ em trên không gian mạng là một nhiệm vụ quan trọng, bao gồm việc áp dụng các quy định và biện pháp nhằm đảm bảo an toàn cho trẻ em khi sử dụng Internet và các dịch vụ trực tuyến.'],
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


