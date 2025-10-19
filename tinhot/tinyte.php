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
        <h1>TP HCM tăng cường bảo đảm an toàn nhi khoa</h1>
        <p class="meta">
          Nguồn: <a href="https://nld.com.vn/tp-hcm-tang-cuong-bao-dam-an-toan-nhi-khoa-19625091720201807.htm"><strong>Báo người lao động</strong></a><br>
        </p>
      </header>
      <div class="article-body">
        <strong>Sở Y tế TP HCM vừa yêu cầu các cơ sở khám, chữa bệnh tăng cường các biện pháp bảo đảm an toàn cho bệnh nhi.</strong>
        <p>Các cơ sở cần tổ chức hệ thống chăm sóc nhi khoa phù hợp, bảo đảm cơ sở vật chất và nhân lực chuyên môn; cơ sở sản khoa cần có nhân sự được đào tạo hồi sức sơ sinh tại phòng sinh.
<br>
Việc sàng lọc dị tật bẩm sinh và bệnh lây truyền từ mẹ sang con như HIV, viêm gan B, giang mai phải được thực hiện đầy đủ. Trẻ sinh non cần sàng lọc bệnh võng mạc (ROP); trẻ sơ sinh phải được theo dõi vàng da trong tuần đầu... Đồng thời, cần cung ứng đầy đủ thuốc, vật tư y tế phù hợp lứa tuổi, pha chế đúng quy trình, chuyển đổi dạng thuốc phù hợp. Hướng dẫn sử dụng thuốc phải rõ ràng, phổ biến đến tất cả nhân viên y tế, tích hợp nhắc nhở cảnh báo vào bệnh án điện tử và sử dụng phần mềm tính liều cho trẻ.
<br>
Triển khai đồng bộ các biện pháp phòng ngừa thoát mạch, tổn thương da, nhiễm khuẩn bệnh viện; kiểm soát nhiễm khuẩn tại các khu vực có nguy cơ cao và quản lý sử dụng kháng sinh hợp lý; trẻ nằm viện chưa tiêm đủ vắc-xin thì tiêm bổ sung. Ngoài ra, bảo đảm an toàn dinh dưỡng, nuôi ăn qua ống thông đúng kỹ thuật; phòng ngừa té ngã, nhầm lẫn người bệnh, giao nhầm trẻ bằng các vòng định danh và quy trình kiểm soát chặt chẽ. Bảo đảm an toàn trong chuyển viện, có đầy đủ phương tiện, nhân lực được đào tạo...</p>
<figure class="article-image">
        <img src="<?= $base ?>assets/tinyte1.webp" alt="">
        <figcaption></figcaption>
        </figure>



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


