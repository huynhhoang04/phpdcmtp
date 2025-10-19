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
        <h1>10 năm giúp trẻ em hiểu về nguồn nước</h1>
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
       <h1>10 năm giúp trẻ em hiểu về nguồn nước: Hành trình gieo mầm tri thức xanh</h1>

<p>Trong suốt 10 năm qua, chương trình <strong>“Nước cho em – Tri thức cho tương lai”</strong> do nhóm sinh viên tình nguyện và các tổ chức xã hội phát động đã trở thành một trong những hoạt động giáo dục môi trường ý nghĩa nhất tại Việt Nam. Không chỉ mang nước sạch đến các vùng khó khăn, chương trình còn giúp hàng chục nghìn trẻ em hiểu rõ hơn về giá trị của từng giọt nước – nguồn sống thiết yếu nhưng đang ngày càng bị đe dọa bởi biến đổi khí hậu và ô nhiễm môi trường.</p>

<h2>1. Bắt đầu từ một chuyến đi nhỏ</h2>
<p>Câu chuyện bắt đầu từ năm 2015, khi một nhóm sinh viên Đại học Khoa học Tự nhiên TP.HCM trong chuyến thực tế tại vùng cao Lâm Đồng nhận ra rằng nhiều học sinh nơi đây phải đi hàng cây số để lấy nước suối về dùng. Nước vừa đục vừa có mùi lạ, khiến các em thường xuyên bị đau bụng, dị ứng da.</p>
<p>Từ đó, nhóm quyết định khởi động dự án “Nước cho em”, với mục tiêu không chỉ cung cấp nguồn nước sạch mà còn <strong>giáo dục trẻ em về tầm quan trọng của việc bảo vệ tài nguyên nước</strong>. Họ nhận ra rằng, nước không chỉ là vật chất – mà còn là bài học về sự sống, về sự sẻ chia và trách nhiệm với thiên nhiên.</p>

<h2>2. Những bài học đầu tiên về giọt nước</h2>
<p>Trong những ngày đầu, các buổi học được tổ chức giản dị trong lớp học tạm. Tình nguyện viên mang theo những chai nước sạch, tranh ảnh về vòng tuần hoàn nước, video mô phỏng quá trình lọc nước tự nhiên. Trẻ em vùng cao lần đầu tiên được nhìn thấy hình ảnh nước mưa chảy qua sông, qua đất rồi quay lại bầu trời – điều mà trước đây các em chỉ biết qua lời kể.</p>
<p>“Em không biết nước lại phải đi xa như vậy mới đến với mình” – một bé học sinh lớp 4 ở Đắk Nông ngạc nhiên chia sẻ. Những ánh mắt tò mò, háo hức ấy đã trở thành động lực để các bạn sinh viên tiếp tục mở rộng chương trình.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/nuoc-1.jpg" alt="Trẻ em vùng cao tham gia buổi học về nước sạch" />
  <figcaption>Các em nhỏ hào hứng quan sát thí nghiệm mô phỏng vòng tuần hoàn của nước.</figcaption>
</figure>

<h2>3. Từ bài học nhỏ đến dự án lớn</h2>
<p>Chỉ sau hai năm, chương trình đã phát triển thành mạng lưới tình nguyện viên trên khắp 12 tỉnh miền núi và ven biển. Mỗi nơi đến, các nhóm không chỉ mang theo tài liệu học mà còn xây dựng các bể lọc nước bằng vật liệu tự nhiên như cát, sỏi và than hoạt tính.</p>
<p>Những buổi sinh hoạt ngoài trời trở thành lớp học sinh động. Trẻ được thử lọc nước bẩn, đo độ trong bằng mắt, học cách tiết kiệm nước khi rửa tay hay tưới cây. Những kiến thức tưởng chừng nhỏ bé lại góp phần thay đổi nhận thức của hàng nghìn em nhỏ về tầm quan trọng của nước sạch.</p>

<h2>4. Khi nguồn nước trở thành câu chuyện của cộng đồng</h2>
<p>Chương trình không dừng lại ở học sinh. Từ năm 2018, dự án mở rộng ra các buổi tuyên truyền cho phụ huynh, giáo viên và người dân địa phương. Họ được hướng dẫn cách bảo vệ giếng nước, không xả rác xuống suối, và sử dụng nguồn nước hợp vệ sinh trong sinh hoạt.</p>
<p>“Trước đây chúng tôi cứ nghĩ nước trong suối là sạch, giờ mới biết cần đun sôi và lọc kỹ trước khi dùng”, chị H’Mai – một phụ huynh ở Gia Lai chia sẻ. Câu nói mộc mạc ấy cho thấy sức lan tỏa thực sự của chương trình: từ trẻ nhỏ đến người lớn, từ nhà trường ra cộng đồng.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/nuoc-2.jpg" alt="Sinh viên hướng dẫn cộng đồng sử dụng nước sạch" />
  <figcaption>Các tình nguyện viên hướng dẫn người dân cách lọc nước bằng vật liệu tự nhiên.</figcaption>
</figure>

<h2>5. Mười năm – những con số biết nói</h2>
<p>Tính đến năm 2025, chương trình đã tổ chức hơn <strong>350 buổi học tương tác</strong>, xây dựng <strong>75 hệ thống lọc nước quy mô nhỏ</strong> tại các điểm trường vùng cao, và tiếp cận hơn <strong>20.000 trẻ em</strong> ở khắp Việt Nam. Quan trọng hơn, hàng nghìn em nhỏ nay đã biết tiết kiệm nước, biết tắt vòi khi không sử dụng, và chia sẻ lại kiến thức cho bạn bè, người thân.</p>
<p>Nhiều trường tiểu học đã đưa nội dung bảo vệ nguồn nước vào các tiết sinh hoạt ngoại khóa, biến nó thành hoạt động thường niên gắn với ngày Môi trường Thế giới và ngày Nước Thế giới 22/3.</p>

<h2>6. Khi tri thức xanh chạm đến trái tim</h2>
<p>Không chỉ là những con số, hành trình ấy còn là câu chuyện cảm động về sự thay đổi. Bé Lò Thị Na – học sinh lớp 5 ở Sơn La – sau khi tham gia lớp học về nước đã quyết tâm trở thành kỹ sư môi trường. “Em muốn giúp bản em có nước sạch quanh năm” – cô bé nói với nụ cười hồn nhiên.</p>
<p>Chính từ những ước mơ giản dị ấy, chương trình đã truyền cảm hứng cho nhiều thế hệ trẻ hiểu rằng <em>một hành động nhỏ hôm nay có thể làm nên thay đổi lớn cho tương lai hành tinh</em>.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/nuoc-3.webp" alt="Trẻ em học cách bảo vệ nguồn nước" />
  <figcaption>Những nụ cười hồn nhiên trong lớp học “Em yêu nguồn nước” sau 10 năm chương trình được triển khai.</figcaption>
</figure>

<h2>7. Từ giáo dục đến hành động</h2>
<p>Sau mỗi buổi học, trẻ em được khuyến khích thực hiện “thử thách xanh”: giữ một chai nước trong một tuần mà không lãng phí, làm báo tường chủ đề nước, hay cùng bố mẹ dọn sạch suối đầu bản. Những hành động nhỏ nhưng đầy ý nghĩa đã khiến nhận thức về bảo vệ nguồn nước dần trở thành thói quen sống.</p>
<p>Không ít ngôi trường còn phát động phong trào “1 ngày không nhựa, 1 tuần tiết kiệm nước”, gắn giáo dục môi trường với thực hành cụ thể, giúp trẻ “học đi đôi với làm”.</p>

<h2>8. Lan tỏa ra ngoài biên giới</h2>
<p>Nhờ hiệu quả tích cực, “Nước cho em” đã được các tổ chức quốc tế như UNICEF, UNESCO và WaterAid quan tâm, hỗ trợ về tài liệu và kỹ thuật. Một số mô hình giáo dục về nước tại Việt Nam còn được chọn làm ví dụ điển hình trong hội nghị khu vực Đông Nam Á năm 2023.</p>
<p>Sự hợp tác này giúp trẻ em không chỉ được học về nước trong phạm vi địa phương, mà còn hiểu về mối liên kết toàn cầu – nơi mọi hành động bảo vệ môi trường đều có ảnh hưởng đến người khác ở một nơi xa xôi nào đó.</p>

<h2>9. Hành trình chưa dừng lại</h2>
<p>Bước sang năm thứ 10, nhóm tình nguyện đặt mục tiêu mở rộng chương trình đến 30 tỉnh thành, đồng thời phát triển tài liệu học trực tuyến để học sinh thành phố cũng có thể tham gia. Họ mong rằng việc giáo dục về nước không chỉ là hoạt động ngoại khóa, mà sẽ trở thành một phần chính thức trong chương trình giáo dục bền vững của quốc gia.</p>

<h2>Kết luận</h2>
<p>10 năm – một hành trình không dài so với lịch sử, nhưng đủ để chứng minh rằng giáo dục có thể thay đổi nhận thức và hành vi của cả một thế hệ. Mỗi giọt nước mà trẻ em biết trân trọng hôm nay là lời hứa cho một tương lai xanh hơn, sạch hơn. “Nước cho em – Tri thức cho tương lai” không chỉ là dự án về môi trường, mà còn là bài học về tình người, trách nhiệm và niềm tin rằng: <strong>chỉ khi hiểu được giá trị của nước, con người mới thật sự biết cách trân quý cuộc sống.</strong></p>



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


