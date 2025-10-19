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
        <h1>Hành trình yêu thương – Tiếp sức cho trẻ em vượt khó</h1>
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
      <p>“Hành trình yêu thương – Tiếp sức cho trẻ em vượt khó” là một chương trình thiện nguyện đầy ý nghĩa, được tổ chức nhằm lan tỏa tinh thần nhân ái, sẻ chia và nâng đỡ những mảnh đời trẻ thơ còn gặp nhiều khó khăn trên khắp mọi miền đất nước. Từ những vùng cao xa xôi, nơi điều kiện học tập thiếu thốn, đến những khu phố nghèo nơi đô thị, hành trình ấy mang theo thông điệp: <em>“Không một em nhỏ nào bị bỏ lại phía sau”</em>.</p>

<h2>1. Ý nghĩa và mục tiêu của hành trình</h2>
<p>Chương trình được khởi xướng với mong muốn giúp đỡ những trẻ em có hoàn cảnh đặc biệt – các em mồ côi, khuyết tật, hoặc sống trong gia đình nghèo khó. Mỗi món quà, mỗi chuyến thăm đều không chỉ là sự hỗ trợ vật chất mà còn là nguồn động viên tinh thần to lớn giúp các em vươn lên trong học tập và cuộc sống.</p>
<p>Bên cạnh việc trao tặng quà và học bổng, chương trình còn hướng đến mục tiêu dài hạn: xây dựng môi trường giáo dục an toàn, tạo điều kiện để các em phát triển toàn diện cả về thể chất lẫn tinh thần. Từ đó, khơi dậy trong cộng đồng tinh thần trách nhiệm và lòng nhân ái với thế hệ tương lai của đất nước.</p>

<h2>2. Những chuyến đi gieo yêu thương</h2>
<p>Từ những ngày đầu, hành trình đã đi qua nhiều tỉnh thành trên cả nước – từ miền núi phía Bắc, miền Trung khô hạn cho đến vùng sông nước miền Tây. Mỗi nơi dừng chân đều là những câu chuyện cảm động về nghị lực vượt khó của các em nhỏ.</p>
<p>Những đôi dép nhựa đã mòn, những quyển vở cũ sờn gáy, hay ánh mắt háo hức khi nhận được bộ sách mới – tất cả đều khiến người tham gia xúc động. Không ít tình nguyện viên đã bật khóc khi nghe các em nói: “Con chỉ muốn được đi học mỗi ngày thôi ạ”.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/hanhtrinh-1.jpg" alt="Tình nguyện viên tặng quà cho trẻ em vùng cao" />
  <figcaption>Những phần quà giản dị nhưng chứa đựng tình yêu thương to lớn gửi đến các em nhỏ vùng cao.</figcaption>
</figure>

<h2>3. Trao học bổng – Tiếp sức đến trường</h2>
<p>Giáo dục luôn là chìa khóa mở ra tương lai tươi sáng cho trẻ em. Vì vậy, một phần quan trọng của chương trình là trao học bổng “Tiếp sức đến trường” cho học sinh nghèo hiếu học. Hàng trăm suất học bổng đã được trao tận tay, giúp các em có điều kiện mua sách vở, đồng phục và tiếp tục theo đuổi ước mơ.</p>
<p>Không chỉ dừng lại ở đó, chương trình còn hỗ trợ các trường học vùng sâu vùng xa xây dựng thư viện mini, trang bị bàn ghế, máy tính và thiết bị học tập cơ bản. Nhờ đó, hàng trăm học sinh nay đã có nơi học khang trang hơn, không còn phải ngồi trên nền đất lạnh giá mỗi mùa đông.</p>
<p>“Mỗi đứa trẻ đến trường là một tia sáng được thắp lên cho tương lai đất nước” – đó chính là kim chỉ nam của những người đồng hành cùng chương trình.</p>

<h2>4. Hành trình của sự kết nối và sẻ chia</h2>
<p>Điều đáng quý nhất trong “Hành trình yêu thương” không chỉ là giá trị vật chất mà còn là sự kết nối giữa con người với con người. Các doanh nghiệp, tổ chức, cá nhân và sinh viên tình nguyện đều cùng chung tay vì một mục tiêu duy nhất: mang nụ cười đến cho trẻ em.</p>
<p>Trên hành trình ấy, nhiều câu chuyện đẹp đã được viết nên. Có em nhỏ sau khi nhận được học bổng đã nỗ lực học giỏi, đỗ vào đại học và quay lại tham gia chương trình với vai trò tình nguyện viên. Cũng có doanh nghiệp sau mỗi chuyến đi đã quyết định tài trợ lâu dài cho các điểm trường khó khăn.</p>

<figure class="article-img">
  <img src="/btapphpp1/assets/hanhtrinh-2.jpg" alt="Hành trình yêu thương lan tỏa tinh thần nhân ái" />
  <figcaption>Những bàn tay nắm chặt, cùng lan tỏa tinh thần sẻ chia và yêu thương đến mọi miền Tổ quốc.</figcaption>
</figure>

<h2>5. Hỗ trợ tâm lý và phát triển kỹ năng cho trẻ</h2>
<p>Bên cạnh việc hỗ trợ học tập, chương trình còn quan tâm đến sức khỏe tinh thần của trẻ. Nhiều buổi sinh hoạt, giao lưu và trò chơi được tổ chức để giúp các em giải tỏa căng thẳng, tăng sự tự tin và khả năng giao tiếp.</p>
<p>Các chuyên gia tâm lý và tình nguyện viên thường xuyên tổ chức hoạt động “Lắng nghe cùng em”, nơi trẻ được chia sẻ những tâm sự, ước mơ, và khó khăn trong cuộc sống. Chính những khoảnh khắc đó giúp các em cảm nhận được rằng mình không bị lãng quên, rằng xã hội vẫn luôn có người sẵn sàng lắng nghe và giúp đỡ.</p>

<h2>6. Lan tỏa thông điệp nhân ái đến cộng đồng</h2>
<p>“Hành trình yêu thương” không chỉ dừng lại ở những chuyến đi mà còn là lời kêu gọi hành động cho toàn xã hội. Mỗi người đều có thể góp phần lan tỏa yêu thương – dù chỉ là chia sẻ một bài viết, ủng hộ một cuốn vở hay dành chút thời gian tham gia cùng chương trình.</p>
<p>Nhờ sức mạnh của mạng xã hội và truyền thông, ngày càng nhiều cá nhân, trường học và doanh nghiệp đã biết đến chương trình và chung tay góp sức. Những chiến dịch như “Áo ấm mùa đông”, “Tết cho em” hay “Cặp sách yêu thương” đã mang hàng ngàn phần quà đến tay trẻ em nghèo mỗi năm.</p>

<h2>7. Kết quả và hành trình phía trước</h2>
<p>Chỉ trong vài năm, chương trình đã giúp đỡ hàng chục ngàn trẻ em trên khắp cả nước. Hàng trăm điểm trường được tu sửa, hàng ngàn học sinh được hỗ trợ học bổng và dụng cụ học tập. Nhưng hơn cả con số, điều đọng lại là nụ cười rạng rỡ trên khuôn mặt các em – minh chứng cho niềm tin và hy vọng đang được thắp lên mỗi ngày.</p>
<p>Trong thời gian tới, chương trình sẽ tiếp tục mở rộng phạm vi hoạt động, đặc biệt là tại các vùng khó khăn và chịu ảnh hưởng bởi thiên tai. Các tổ chức xã hội, doanh nghiệp và tình nguyện viên vẫn đang ngày đêm miệt mài để hành trình yêu thương ấy không bao giờ dừng lại.</p>

<h2>Kết luận</h2>
<p>“Hành trình yêu thương – Tiếp sức cho trẻ em vượt khó” không chỉ là một chương trình thiện nguyện, mà là biểu tượng của tinh thần nhân văn, của sự đồng lòng và sẻ chia trong xã hội. Mỗi đóng góp, dù nhỏ bé, đều mang giá trị lớn lao khi được gửi đến đúng nơi cần. Bởi trong ánh mắt trong veo của trẻ thơ, mỗi món quà là một niềm tin, một hy vọng – rằng các em sẽ có cơ hội được học tập, được mơ ước và được sống trọn vẹn như bao bạn bè cùng trang lứa.</p>


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


