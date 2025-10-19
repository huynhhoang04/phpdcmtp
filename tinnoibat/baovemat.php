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
        <h1>7 Cách Bảo Vệ Mắt Không Bị Cận Cho Trẻ Em Thường Xuyên Tiếp Xúc Thiết Bị Điện Tử</h1>
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
       <p>Trong thời đại công nghệ phát triển mạnh mẽ, việc trẻ em tiếp xúc với điện thoại, máy tính bảng, tivi hay máy tính đã trở nên phổ biến. Tuy nhiên, việc sử dụng các thiết bị này trong thời gian dài mà không đúng cách đang khiến tỷ lệ trẻ bị cận thị tăng nhanh chóng. Theo thống kê của Bộ Y tế, có tới hơn 40% học sinh tiểu học tại các thành phố lớn mắc các tật khúc xạ về mắt. Vậy làm sao để bảo vệ đôi mắt sáng khỏe cho con trong khi việc học và giải trí đều gắn liền với màn hình điện tử? Bài viết dưới đây tổng hợp 7 cách khoa học và dễ thực hiện giúp cha mẹ đồng hành cùng con bảo vệ mắt hiệu quả.</p>

<h2>1. Giữ khoảng cách và tư thế đúng khi sử dụng thiết bị điện tử</h2>
<p>Khoảng cách hợp lý giữa mắt và màn hình là <strong>30–40cm</strong> đối với điện thoại hoặc máy tính bảng, và khoảng <strong>50–70cm</strong> với màn hình máy tính. Trẻ nên ngồi thẳng lưng, hai chân chạm đất, màn hình ngang tầm mắt để tránh cúi đầu quá thấp hoặc ngửa cổ quá cao.</p>
<p>Nhiều trẻ có thói quen nằm xem điện thoại hoặc dùng máy tính trong tư thế nghiêng người. Điều này khiến mắt phải điều tiết không đều, lâu dần gây mỏi mắt và tăng nguy cơ cận thị. Cha mẹ nên hướng dẫn và nhắc nhở trẻ ngồi học trên bàn có ghế phù hợp với chiều cao.</p>
<p><em>Lời khuyên:</em> Có thể dán một miếng giấy ghi “Giữ khoảng cách an toàn!” lên bàn học để trẻ tự nhắc mình mỗi khi sử dụng thiết bị.</p>

<h2>2. Bố trí ánh sáng học tập đầy đủ và dịu nhẹ</h2>
<p>Ánh sáng có vai trò cực kỳ quan trọng trong việc bảo vệ mắt. Học trong môi trường thiếu sáng buộc mắt phải điều tiết liên tục, trong khi ánh sáng quá mạnh lại gây chói và khô mắt.</p>
<p>Cha mẹ nên bố trí bàn học ở nơi có <strong>ánh sáng tự nhiên</strong> ban ngày và sử dụng <strong>đèn bàn LED ánh sáng trắng dịu</strong> khi học buổi tối. Nguồn sáng phải đến từ phía bên trái đối với trẻ thuận tay phải để tránh bóng che lên vở.</p>
<p>Ngoài ra, nên tránh để màn hình điện tử đối diện cửa sổ hoặc bóng đèn, vì phản chiếu sáng sẽ khiến mắt nhanh mỏi.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/baovemat-2.jpg" alt="Ánh sáng phù hợp khi học giúp bảo vệ mắt cho trẻ" />
  <figcaption>Trẻ nên học ở nơi có ánh sáng tự nhiên và ánh sáng đèn bàn dịu nhẹ, tránh bóng đổ.</figcaption>
</figure>

<h2>3. Dạy trẻ quy tắc “20-20-20” để mắt nghỉ ngơi hợp lý</h2>
<p>Ngồi học liên tục hàng giờ là nguyên nhân phổ biến khiến mắt trẻ bị khô, nhức và giảm thị lực. Cha mẹ nên dạy con quy tắc <strong>20-20-20</strong>: cứ mỗi 20 phút nhìn màn hình, hãy nhìn ra xa khoảng 20 feet (tức 6 mét) trong ít nhất 20 giây.</p>
<p>Việc nhìn ra xa giúp cơ mi thư giãn và phục hồi. Nếu có thể, nên cho trẻ đứng dậy đi lại, uống nước hoặc vươn vai sau mỗi giờ học để máu lưu thông tốt hơn.</p>
<p><em>Lời khuyên:</em> Có thể cài đặt ứng dụng nhắc nghỉ mắt hoặc hẹn giờ trong máy tính để trẻ hình thành thói quen này dễ dàng hơn.</p>

<h2>4. Tăng cường chớp mắt và sử dụng nước muối sinh lý</h2>
<p>Khi tập trung vào màn hình, trẻ thường quên chớp mắt, khiến nước mắt bốc hơi nhanh và mắt bị khô. Trung bình một người chớp mắt 15–20 lần mỗi phút, nhưng khi dùng điện thoại chỉ còn 5–6 lần.</p>
<p>Hãy nhắc con chớp mắt thường xuyên để làm ẩm giác mạc tự nhiên. Nếu mắt trẻ bị khô, rát hoặc đỏ, có thể nhỏ <strong>nước muối sinh lý 0,9%</strong> ngày 2–3 lần. Tuyệt đối không tự ý dùng thuốc nhỏ mắt có chứa corticoid nếu chưa có chỉ định của bác sĩ.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/baovemat-4.jpg" alt="Nhỏ nước muối sinh lý giúp giữ ẩm mắt cho trẻ" />
  <figcaption>Nhỏ nước muối sinh lý hàng ngày giúp mắt trẻ luôn ẩm và giảm khô rát.</figcaption>
</figure>

<h2>5. Giới hạn thời gian dùng thiết bị điện tử mỗi ngày</h2>
<p>Không nên để trẻ tiếp xúc màn hình quá lâu. Theo khuyến nghị của Tổ chức Y tế Thế giới (WHO):</p>
<ul>
  <li>Trẻ dưới 2 tuổi: <strong>Không nên dùng thiết bị điện tử</strong>.</li>
  <li>Trẻ từ 2–5 tuổi: <strong>Dưới 1 giờ mỗi ngày</strong>.</li>
  <li>Trẻ từ 6–12 tuổi: <strong>Tối đa 2 giờ mỗi ngày</strong>.</li>
</ul>
<p>Cha mẹ nên tạo thói quen cho con dùng thiết bị theo lịch cố định — ví dụ: chỉ xem hoạt hình 30 phút sau giờ học, hoặc dùng máy tính cho bài tập từ 7h đến 8h tối. Điều này vừa giúp bảo vệ mắt, vừa rèn tính kỷ luật.</p>
<p><em>Lưu ý:</em> Với trẻ học online, cần xen kẽ các hoạt động thể chất hoặc nhìn ra xa sau mỗi buổi học.</p>

<h2>6. Bổ sung thực phẩm tốt cho thị lực</h2>
<p>Chế độ dinh dưỡng ảnh hưởng trực tiếp đến sức khỏe đôi mắt. Các thực phẩm giàu <strong>vitamin A, C, E, lutein, zeaxanthin và omega-3</strong> giúp tăng cường võng mạc và ngăn ngừa cận thị học đường.</p>
<p>Cha mẹ nên bổ sung vào bữa ăn hàng ngày của trẻ các thực phẩm như cà rốt, bí đỏ, trứng gà, rau cải xanh, rau bina, cá hồi, cá thu, quả việt quất và trái cây tươi. Bên cạnh đó, trẻ cần uống đủ nước mỗi ngày để duy trì độ ẩm tự nhiên cho mắt.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/baovemat-6.jpg" alt="Thực phẩm tốt cho mắt như cà rốt, cá hồi, rau xanh" />
  <figcaption>Thực phẩm giàu vitamin A và omega-3 giúp đôi mắt sáng khỏe, chống khô và mỏi mắt.</figcaption>
</figure>

<p><em>Lời khuyên chuyên gia:</em> Bác sĩ nhãn khoa khuyến nghị nên cho trẻ uống sữa giàu DHA và ăn cá ít nhất 2–3 lần/tuần để bảo vệ võng mạc và giảm nguy cơ cận thị tiến triển nhanh.</p>

<h2>7. Khám mắt định kỳ và phát hiện sớm dấu hiệu bất thường</h2>
<p>Nhiều cha mẹ chỉ đưa con đi khám khi trẻ đã kêu nhìn mờ hoặc nhức đầu — lúc đó bệnh thường đã tiến triển. Trẻ em nên được kiểm tra mắt định kỳ <strong>6 tháng/lần</strong> để kịp thời phát hiện cận thị, loạn thị hoặc nhược thị.</p>
<p>Nếu trẻ có các biểu hiện như: nheo mắt khi nhìn xa, cúi sát khi đọc, nghiêng đầu khi xem tivi, than đau đầu hoặc mỏi mắt, cần đưa đi khám ngay. Việc phát hiện sớm giúp điều chỉnh bằng kính phù hợp, tránh tăng độ nhanh hoặc biến chứng sau này.</p>

<h2>Kết luận</h2>
<p>Bảo vệ đôi mắt cho trẻ em là một hành trình cần sự kiên trì của cả cha mẹ và con cái. Trong thời đại học tập trực tuyến và công nghệ phát triển, việc giáo dục trẻ ý thức bảo vệ mắt ngay từ nhỏ là vô cùng cần thiết. Chỉ với những điều chỉnh nhỏ trong sinh hoạt hằng ngày – như ngồi đúng tư thế, nghỉ mắt đúng cách, ăn uống lành mạnh – cha mẹ có thể giúp con duy trì đôi mắt sáng khỏe, tự tin khám phá thế giới.</p>


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


