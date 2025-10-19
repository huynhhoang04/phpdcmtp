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
        <h1>Mang Trung thu yêu thương đến cho hơn 500 trẻ em vùng xa</h1>
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
       <p>Trung thu năm nay trở nên đặc biệt hơn bao giờ hết với chương trình “Mang Trung thu yêu thương” do Đoàn trường phối hợp cùng nhóm sinh viên tình nguyện tổ chức. Hành trình ý nghĩa đã đưa những chiếc lồng đèn, bánh kẹo, sách vở và cả niềm vui đến với hơn <strong>500 trẻ em vùng cao xa xôi</strong> – nơi mà các em ít có cơ hội được đón Tết Trung thu trọn vẹn.</p>

<h2>1. Hành trình đến với vùng cao</h2>
<p>Ngay từ đầu tháng 9, các tình nguyện viên đã bắt đầu chuẩn bị quà tặng, gói ghém từng chiếc bánh, chiếc lồng đèn với mong muốn mang đến cho các em một mùa Trung thu thật ấm áp. Sau nhiều giờ di chuyển qua những cung đường đèo quanh co, đoàn đã có mặt tại điểm trường tiểu học vùng cao của xã H’Mông, nơi cuộc sống còn nhiều khó khăn.</p>
<p>Khi thấy xe tình nguyện dừng lại, hàng trăm em nhỏ ùa ra, ánh mắt rạng rỡ và đầy háo hức. Những tiếng cười trong trẻo vang lên giữa núi rừng khiến ai cũng xúc động.</p>

<h2>2. Không chỉ là quà – mà là niềm vui và sự sẻ chia</h2>
<p>Những phần quà tuy nhỏ bé nhưng chứa đựng tình cảm lớn lao của các bạn sinh viên. Mỗi chiếc đèn lồng, mỗi gói bánh đều được chuẩn bị cẩn thận, mang theo thông điệp “chia sẻ yêu thương – thắp sáng ước mơ”.</p>
<p>Không chỉ trao quà, các bạn còn tổ chức các trò chơi dân gian, tô tượng, nặn tò he và hướng dẫn các em làm lồng đèn từ chai nhựa tái chế – vừa vui, vừa mang ý nghĩa bảo vệ môi trường.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/trungthu-1.jpg" alt="Tình nguyện viên tặng quà Trung thu cho trẻ em vùng xa" />
  <figcaption>Niềm vui của các em nhỏ khi nhận quà Trung thu từ các tình nguyện viên.</figcaption>
</figure>

<h2>3. Ánh sáng của tình người</h2>
<p>Buổi tối, sân trường nhỏ rực rỡ ánh sáng từ hàng trăm chiếc đèn lồng. Các em cùng nhau ca hát, múa lân, phá cỗ dưới ánh trăng tròn. Không khí Trung thu giản dị mà ấm áp, xóa tan đi những nhọc nhằn nơi núi rừng xa xôi.</p>
<p>“Chưa bao giờ con được vui như hôm nay!” – bé Pàng A Súa, học sinh lớp 3, hồn nhiên nói với nụ cười tươi rói, khiến mọi người không khỏi nghẹn ngào.</p>

<h2>4. Hành trình gieo yêu thương</h2>
<p>Để tổ chức chương trình, các tình nguyện viên đã vận động quyên góp từ sinh viên, giảng viên và các mạnh thường quân. Tổng cộng hơn <strong>500 phần quà</strong> gồm bánh Trung thu, sữa, vở, bút và đồ chơi đã được trao tận tay các em nhỏ.</p>
<p>Mỗi món quà không chỉ mang giá trị vật chất mà còn là lời động viên, khích lệ tinh thần học tập, giúp các em thêm niềm tin và nghị lực vượt qua khó khăn.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/trungthu-2.jpg" alt="Sinh viên tình nguyện phát quà và chơi cùng trẻ em" />
  <figcaption>Các tình nguyện viên vui Trung thu cùng các em nhỏ vùng cao.</figcaption>
</figure>

<h2>5. Thắp sáng ước mơ đến trường</h2>
<p>Ngoài những phần quà Trung thu, đoàn còn trao tặng thêm 10 suất học bổng cho các học sinh nghèo vượt khó. Đây là món quà tinh thần quý giá giúp các em có thêm động lực tiếp tục con đường học tập.</p>
<p>Nhiều em chia sẻ ước mơ giản dị: “Con muốn sau này trở thành cô giáo để dạy chữ cho các em nhỏ trong bản”. Chính những ước mơ ấy là động lực để các tình nguyện viên tiếp tục hành trình của mình.</p>

<h2>6. Gắn kết trái tim – lan tỏa yêu thương</h2>
<p>Chuyến đi đã giúp các bạn trẻ hiểu thêm giá trị của sự sẻ chia, tinh thần “lá lành đùm lá rách”. Dù đường xa, thời tiết khắc nghiệt, ai nấy đều thấy hạnh phúc khi được mang niềm vui đến cho các em nhỏ.</p>
<p>Trung thu không chỉ là ngày của trẻ em, mà còn là dịp để mỗi người lớn chúng ta sống chậm lại, cảm nhận sự ấm áp của tình người và học cách yêu thương nhiều hơn.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/trungthu-3.jpg" alt="Đêm hội trăng rằm vùng cao" />
  <figcaption>Đêm hội trăng rằm lung linh, tràn đầy tiếng cười của hơn 500 em nhỏ vùng xa.</figcaption>
</figure>

<h2>7.Hành trình chưa dừng lại</h2>
<p>Kết thúc chương trình, đoàn tình nguyện trở về với hành trang là những nụ cười, những cái ôm và lời cảm ơn của các em nhỏ. Nhiều bạn sinh viên chia sẻ rằng chuyến đi là trải nghiệm quý báu, giúp họ trưởng thành hơn và hiểu rằng trao đi yêu thương cũng chính là nhận lại niềm hạnh phúc.</p>

<h2>Kết luận</h2>
<p>“Mang Trung thu yêu thương” không chỉ mang đến niềm vui cho hơn 500 trẻ em vùng xa mà còn thắp sáng tinh thần thiện nguyện trong mỗi trái tim trẻ. Hy vọng rằng, những ngọn đèn Trung thu năm nay sẽ tiếp tục lan tỏa ánh sáng của yêu thương, để không một em nhỏ nào bị lãng quên trong niềm vui ngày Tết đoàn viên.</p>



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


