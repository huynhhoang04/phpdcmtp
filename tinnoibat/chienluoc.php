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
    ['href'=>'#', 'img'=>$base.'assets/tintuchotthucday.webp',   'title'=>'Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em', 'meta'=>'Tin chính sách'],
    ['href'=>'#', 'img'=>$base.'assets/tintuchotyte.webp',        'title'=>'Thành phố HCM tăng cường bảo đảm nhi khoa',                           'meta'=>'Tin y tế'],
    ['href'=>'#', 'img'=>$base.'assets/tintuchotmxhchotre.webp',  'title'=>'Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm', 'meta'=>'An toàn số'],
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
        <h1>Hội Bảo vệ quyền trẻ em Việt Nam ký kết hợp tác chiến lược bốn bên, chung tay vì sức khỏe trẻ em tại các địa bàn khó khăn</h1>
      </header>
      <section id="toc" class="toc-card">
  <button class="toc-toggle" type="button" aria-expanded="true">
    <span>☰ Phụ Lục Nội Dung</span>
    <span class="chev">▾</span>
  </button>
  <nav class="toc-body">
    <ol class="toc-list"><!-- JS sẽ tự điền mục lục vào đây --></ol>
  </nav>
</section>
      <div class="article-body">
      <h1>Hội Bảo vệ quyền trẻ em Việt Nam ký kết hợp tác chiến lược bốn bên, chung tay vì sức khỏe trẻ em tại các địa bàn khó khăn</h1>

<p>Ngày 10/10/2025, tại Hà Nội, Hội Bảo vệ quyền trẻ em Việt Nam đã tổ chức lễ ký kết hợp tác chiến lược bốn bên với sự tham gia của Bộ Y tế, Tổ chức Cứu trợ Trẻ em Quốc tế (Save the Children) và Công ty Dược phẩm An Khang. Đây là dấu mốc quan trọng trong nỗ lực chung tay bảo vệ và nâng cao sức khỏe cho trẻ em Việt Nam, đặc biệt là trẻ em sống tại các khu vực vùng sâu, vùng xa và có điều kiện kinh tế - xã hội đặc biệt khó khăn.</p>

<h2>1. Mục tiêu và ý nghĩa của chương trình hợp tác</h2>
<p>Chương trình hướng tới mục tiêu cải thiện toàn diện sức khỏe thể chất và tinh thần cho trẻ em, thông qua việc triển khai các hoạt động khám, chữa bệnh lưu động, hỗ trợ dinh dưỡng, chăm sóc y tế học đường và truyền thông nâng cao nhận thức cho cộng đồng. Sự hợp tác bốn bên thể hiện tinh thần đoàn kết, chung tay của Nhà nước, các tổ chức xã hội và doanh nghiệp trong công cuộc bảo vệ quyền được chăm sóc y tế của trẻ em.</p>
<p>Phát biểu tại buổi lễ, bà <strong>Đinh Thị Lan</strong> – Chủ tịch Hội Bảo vệ quyền trẻ em Việt Nam nhấn mạnh: “Không chỉ dừng lại ở việc hỗ trợ y tế, chúng tôi mong muốn tạo nên một hệ sinh thái bền vững, nơi mọi trẻ em, dù ở bất kỳ đâu, đều được tiếp cận các dịch vụ chăm sóc sức khỏe cơ bản và an toàn.”</p>

<h2>2. Hành trình đưa dịch vụ y tế đến vùng khó khăn</h2>
<p>Sau lễ ký kết, chương trình sẽ triển khai thí điểm tại bốn tỉnh miền núi gồm: Hà Giang, Lai Châu, Quảng Trị và Đắk Nông. Mỗi đoàn công tác gồm các y, bác sĩ tình nguyện, chuyên gia dinh dưỡng, cùng đội ngũ tư vấn tâm lý trẻ em sẽ trực tiếp đến từng điểm trường và trung tâm bảo trợ xã hội để thăm khám, phát thuốc, và hướng dẫn kỹ năng chăm sóc sức khỏe cơ bản cho phụ huynh và giáo viên.</p>
<p>Đặc biệt, các buổi tư vấn “<em>Bác sĩ cùng em đến trường</em>” sẽ được tổ chức định kỳ, giúp học sinh hiểu hơn về việc giữ gìn vệ sinh cá nhân, phòng tránh bệnh tật theo mùa và xây dựng thói quen ăn uống lành mạnh.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/hoptac-1.jpg" alt="Đoàn bác sĩ và tình nguyện viên khám sức khỏe cho trẻ em tại vùng cao" />
  <figcaption>Đoàn bác sĩ tình nguyện trực tiếp đến các điểm trường vùng cao để thăm khám và hướng dẫn chăm sóc sức khỏe cho trẻ.</figcaption>
</figure>

<h2>3. Bốn bên cùng chung tay – một mục tiêu vì trẻ em</h2>
<p>Trong khuôn khổ hợp tác, mỗi bên sẽ đảm nhận một vai trò cụ thể: Bộ Y tế chịu trách nhiệm về chuyên môn, cung cấp đội ngũ y tế và hướng dẫn nghiệp vụ; Hội Bảo vệ quyền trẻ em đóng vai trò điều phối và giám sát; Tổ chức Save the Children hỗ trợ tài chính và kỹ thuật; Công ty Dược phẩm An Khang đảm nhận cung ứng thuốc, vitamin và thiết bị y tế cần thiết.</p>
<p>Sự kết hợp chặt chẽ này giúp đảm bảo các hoạt động diễn ra đồng bộ, minh bạch và mang lại hiệu quả thiết thực, đúng với phương châm “Vì một Việt Nam khỏe mạnh, không trẻ em nào bị bỏ lại phía sau.”</p>

<h2>4. Lan tỏa tinh thần nhân ái và trách nhiệm cộng đồng</h2>
<p>Không chỉ dừng lại ở việc cung cấp dịch vụ y tế, chương trình còn khuyến khích các doanh nghiệp, trường học và cá nhân trong cộng đồng tham gia ủng hộ, đóng góp vật chất và tinh thần để duy trì lâu dài hoạt động này. Các chiến dịch truyền thông “Chung tay vì sức khỏe trẻ em” được phát động trên toàn quốc nhằm kêu gọi mọi người cùng hành động.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/hoptac-2.webp" alt="Buổi lễ ký kết hợp tác chiến lược bốn bên vì sức khỏe trẻ em Việt Nam" />
  <figcaption>Buổi lễ ký kết hợp tác chiến lược giữa bốn đơn vị – bước tiến quan trọng trong công tác chăm sóc sức khỏe trẻ em Việt Nam.</figcaption>
</figure>

<h2>5. Hướng tới tương lai – vì thế hệ khỏe mạnh và hạnh phúc</h2>
<p>Trong giai đoạn 2025–2030, chương trình dự kiến sẽ mở rộng đến 25 tỉnh thành trên cả nước. Bên cạnh việc tổ chức các đợt khám chữa bệnh định kỳ, các đối tác còn hướng đến việc đào tạo đội ngũ y tế học đường và xây dựng mô hình “Trường học an toàn – Trẻ khỏe mạnh” tại mỗi địa phương.</p>
<p>Các chuyên gia cho biết, việc đầu tư vào sức khỏe trẻ em không chỉ mang lại lợi ích trước mắt mà còn là nền tảng vững chắc cho sự phát triển bền vững của xã hội trong tương lai. Mỗi đứa trẻ khỏe mạnh hôm nay chính là công dân hạnh phúc và có ích cho đất nước mai sau.</p>

<h2>Kết luận</h2>
<p>Buổi ký kết hợp tác chiến lược bốn bên không chỉ đánh dấu sự gắn kết giữa các tổ chức mà còn là minh chứng cho tinh thần nhân văn, vì cộng đồng của xã hội Việt Nam hiện đại. Với sự chung tay của Nhà nước, doanh nghiệp và các tổ chức xã hội, chương trình hứa hẹn sẽ mang lại một tương lai khỏe mạnh hơn, hạnh phúc hơn cho hàng triệu trẻ em – những mầm non của đất nước.</p>
<p>Hội Bảo vệ quyền trẻ em Việt Nam cùng các đối tác cam kết sẽ tiếp tục mở rộng, duy trì và nâng cao hiệu quả của chương trình, để mỗi em nhỏ đều được lớn lên trong vòng tay yêu thương, được chăm sóc toàn diện và được sống khỏe mạnh như các bạn đồng trang lứa ở mọi miền Tổ quốc.</p>


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
      <?php render_sidebar_box('Tin mới hôm nay', $news_items); ?>
      <?php render_sidebar_box('Cẩm nang và bài học', $guide_items); ?>
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


