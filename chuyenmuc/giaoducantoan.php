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
    ['href'=>'../tinhot/tinucyte.php', 'img'=>$base.'assets/tintuchotyte.webp',        'title'=>'Thành phố HCM tăng cường bảo đảm nhi khoa',                           'meta'=>'Tin y tế'],
    ['href'=>'../tinhot/tinuc.php', 'img'=>$base.'assets/tintuchotmxhchotre.webp',  'title'=>'Úc cấm trẻ dưới 16 tuổi lên mạng xã hội, song lại "chừa" kẽ hở nguy hiểm', 'meta'=>'An toàn số'],
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
        <h1>12 Kỹ năng an toàn cho trẻ cha mẹ nhất định phải dạy từ sớm</h1>
        <p class="meta">
          Nguồn: <a href="https://vinwonders.com/vi/wonderpedia/news/ky-nang-an-toan-cho-be-mam-non/"><strong>VinWonders</strong></a><br>
        </p>
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
        <p>Kỹ năng an toàn cho bé là những kiến thức và hành động cơ bản giúp trẻ biết cách đối phó và phòng tránh các tình huống nguy hiểm. Những kỹ năng này không chỉ giúp trẻ tự bảo vệ mình mà còn giúp xây dựng sự tự tin và sẵn sàng đối mặt với thách thức từ môi trường xung quanh.</p>

        <h2>1. Kỹ năng an toàn cho bé là gì?</h2>
        <p>Kỹ năng an toàn cho bé là bộ các biện pháp, kiến thức và hành động mà trẻ em học để bảo vệ bản thân và tránh các tình huống nguy hiểm. Những kỹ năng này bao gồm sự nhận biết nguy cơ, cách ứng phó với tình huống khẩn cấp, biết cách giao tiếp và yêu cầu sự giúp đỡ từ người lớn khi cần, cũng như thực hiện các hành động đúng cách để đảm bảo an toàn cho bản thân và những người xung quanh. Kỹ năng an toàn giúp trẻ trở nên tự tin hơn trong việc khám phá thế giới xung quanh mình và giảm thiểu nguy cơ các tai nạn hoặc tình huống không mong muốn.</p>
      <figure class="article-image">
        <img src="<?= $base ?>assets/knat1.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Dạy bé cách bảo vệ bản thân khi gặp hỏa hoạn (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h2>2. Tầm quan trọng của kỹ năng an toàn cho trẻ em</h2>
      <p>Kỹ năng an toàn cho trẻ em đóng vai trò quan trọng trong việc bảo vệ họ khỏi nguy hiểm. Những kỹ năng này giúp trẻ tự tin hơn khi khám phá thế giới, phát triển tư duy cảnh giác, và hình thành thói quen an toàn hàng ngày. Nhờ kỹ năng này, trẻ có khả năng tự bảo vệ và ngày càng tự tin, giúp cả phụ huynh và người chăm sóc yên tâm hơn. Tự quản lý rủi ro cũng giúp trẻ phát triển sự độc lập và tự tin trong việc đối mặt với thách thức.</p>
      <h2>3. Kỹ năng an toàn cho bé giúp bố mẹ cực yên tâm</h2>
      <p>Dưới đây là 12 kỹ năng an toàn bố mẹ nên dạy trẻ từ sớm để bảo vệ trẻ khỏi nguy hiểm và bố mẹ có thể yên tâm hơn khi không ở cạnh trẻ.</p>
      <h3>3.1. Kỹ năng bảo vệ bản thân trước hoả hoạn, các thiết bị nguy hiểm</h3>
      <p>Kỹ năng bảo vệ bản thân trước hỏa hoạn và các thiết bị nguy hiểm là một phần quan trọng của việc giảm nguy cơ và đối phó với tình huống khẩn cấp. Bố mẹ hãy dạy cho trẻ cách sử dụng khăn ẩm để che mặt, tìm lối thoát gần nhất và thông báo tình hình cho những người xung quanh. </p>
        <figure class="article-image">
        <img src="<?= $base ?>assets/knat2.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Dạy bé cách bảo vệ bản thân khi gặp hỏa hoạn (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.2. Kỹ năng vui chơi an toàn</h3>
      <p>
        Việc giáo dục kỹ năng an toàn cho bé khi vui chơi là cực kỳ quan trọng. Cha mẹ có thể dặn dò con rằng không nên chơi ngoài đường lớn để tránh nguy cơ va chạm với xe cộ hoặc bị tổn thương khi vấp ngã. Cùng với đó, họ có thể hướng dẫn con biết cách chọn nơi chơi an toàn, tránh những trò chơi có nguy cơ gây nguy hiểm. Ngoài ra, hạn chế tham gia các trò chơi mạo hiểm như leo trèo hoặc nhảy từ nơi cao xuống để đảm bảo sự an toàn và tránh nguy cơ chấn thương cho con.
      </p>
              <figure class="article-image">
        <img src="<?= $base ?>assets/knat3.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Vui chơi sao cho an toàn cũng là kỹ năng sống an toàn cho bé (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.3. Kỹ năng sử dụng điện một cách an toàn</h3>
      <p>Khi sử dụng điện, cha mẹ cần hướng dẫn con thực hiện những nguyên tắc an toàn như không chơi gần ổ điện và dây điện, không đặt tay vào ổ cắm điện. Đồng thời, cha mẹ cần đặt ổ điện xa tầm tay con, cất gọn thiết bị điện, rút phích cắm khi không dùng, theo dõi đặc biệt trẻ nhỏ, và thường xuyên kiểm tra dây điện và thiết bị để đảm bảo an toàn cho con.</p>
            <figure class="article-image">
        <img src="<?= $base ?>assets/knat4.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Kỹ năng an toàn cho trẻ khi ở nhà (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.4. Kỹ năng an toàn cho bé khi bị lạc</h3>
      <p>Kỹ năng an toàn cho bé khi bị lạc là một phần quan trọng để giúp trẻ tự bảo vệ mình trong tình huống khẩn cấp. Cha mẹ hãy dạy con nhớ số điện thoại và các thông tin về bố mẹ, người thân. Hướng dẫn trẻ khi bị lạc tìm một người lớn, như nhân viên bảo vệ hoặc cảnh sát, để được giúp đỡ liên lạc với bố mẹ.</p>
      <h3>3.5. Kỹ năng an toàn giao thông cho trẻ mầm non</h3>
      <p>Bố mẹ có thể dạy trẻ nhận biết các biển báo giao thông cơ bản, hướng dẫn qua đường ở chỗ có vạch dành riêng cho người đi bộ, và tạo thói quen nhìn sang trái – phải trước khi băng qua đường. Trẻ cần được hướng dẫn giữ tay và đi cùng người lớn khi ở nơi có xe cộ, cũng như học cách dừng lại và ngừng chơi khi thấy xe đang đến gần.</p>
      <h3>3.6. Kỹ năng phòng chống sự xâm hại về thân thể</h3>
      <p>Bố mẹ cần dạy trẻ nhận biết sự không phù hợp trong hành vi của người khác và biết cách nói “không” mạnh mẽ nếu gặp tình huống không an toàn. Hướng dẫn trẻ biết tìm đến và tin tưởng vào những người có thể giúp đỡ như phụ huynh, giáo viên. </p>
           <figure class="article-image">
        <img src="<?= $base ?>assets/knat5.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Dạy trẻ biết cách tìm sự giúp đỡ từ những người tin tưởng khi bị xâm phạm (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.7. Kỹ năng nhận biết môi trường an toàn</h3>
      <p>Kỹ năng nhận biết môi trường an toàn là quá trình giúp trẻ hiểu biết và tự tin trong việc xác định nơi an toàn để học tập và chơi đùa. Bố mẹ nên chỉ cho con biết tránh xa những khu vực nguy hiểm như đá, hố sâu, công trường, nơi có nhiều xe cộ. Đồng thời, dạy con tránh xa những loài động vật có thể nguy hiểm để đảm bảo an toàn tối đa khi bố mẹ không bên cạnh.</p>
      <h3>3.8. Kỹ năng an toàn cho trẻ em khi gặp người lạ</h3>
      <p>Kỹ năng an toàn cho bé khi gặp người lạ là vô cùng quan trọng. Cha mẹ cần dạy trẻ không bao giờ đi theo người lạ khi không có sự giám sát của họ. Trẻ cần hiểu rằng có những người có thể giả danh hoặc sử dụng chiêu trò như đồ ăn, đồ chơi để thu hút sự chú ý của trẻ. Quan trọng nhất, cha mẹ nên tạo cho trẻ sự nhận thức về nguy cơ và luôn khuyến khích trẻ tìm người lớn để giúp đỡ.</p>
        <figure class="article-image">
        <img src="<?= $base ?>assets/knat6.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Dạy trẻ tuyệt đối không nhận quà từ người lạ (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.9. Kỹ năng xử trí khi gặp chó dữ</h3>
      <p>Kỹ năng xử trí khi gặp chó dữ giúp trẻ biết cách đối phó an toàn. Trẻ nên tránh chơi với chó lạ, đặc biệt là khi chó không đeo rọ mõm. Bố mẹ dạy bé không nên đánh chó mà thay vào đó, trẻ nên sử dụng vật gì đó để đánh lạc hướng chó, đồng thời cố gắng giữ bình tĩnh và không hoảng sợ la hét để tránh làm cho chó trở nên hung hãn hơn. Nếu có thể, hãy nhanh chóng nhờ sự giúp đỡ của người lớn.</p>
      <h3>3.10. Kỹ năng ứng xử, phòng chống hành vi bạo lực cho bé</h3>
      <p>Kỹ năng ứng xử và phòng chống hành vi bạo lực giúp trẻ phát triển một thái độ tôn trọng và không bạo lực. Cha mẹ cần mẫu mực trong cách họ xử lý xung đột, để trẻ học cách giải quyết vấn đề một cách văn minh. Dạy trẻ cách thể hiện cảm xúc bằng cách nói chuyện thay vì sử dụng bạo lực, và khuyến khích trẻ tìm kiếm sự trợ giúp từ người lớn nếu gặp vấn đề khó khăn. Hơn nữa, việc dạy con các giá trị như lòng khoan dung và hòa bình sẽ giúp trẻ hiểu rằng bạo lực không phải là lựa chọn đúng đắn.</p>
      <figure class="article-image">
        <img src="<?= $base ?>assets/knat7.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Bảo vệ con, dạy con phòng chống bạo lực ngay từ những hành vi cư xử trong gia đình (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>3.11. Kỹ năng bơi lội an toàn và phòng chống đuối nước</h3>
      <p>Kỹ năng bơi lội an toàn và phòng chống đuối nước là rất quan trọng để bảo vệ trẻ em khi tiếp xúc với môi trường nước. Cha mẹ nên đưa con tham gia lớp học bơi để học các kỹ thuật bơi cơ bản, cách đảm bảo an toàn khi ở gần nước và hướng dẫn trẻ biết cách đối phó khi gặp tình huống đuối nước.</p>
      <h3>3.12. Kỹ năng nhờ sự giúp đỡ từ mọi người xung quanh</h3>
      <p>Kỹ năng an toàn cho bé từ việc nhờ sự giúp đỡ của mọi người xung quanh là điều trẻ cần biết để tạo môi trường an toàn và phát triển tốt hơn. Cha mẹ nên khuyến khích trẻ luôn mở lòng và biết cách xin giúp đỡ từ người lớn khi gặp khó khăn. Điều này giúp trẻ học hỏi và phát triển không chỉ kiến thức mà còn tinh thần hợp tác và kỹ năng giao tiếp.</p>
      <figure class="article-image">
        <img src="<?= $base ?>assets/knat8.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Dạy trẻ biết tìm kiếm sự giúp đỡ (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h2>4. Cách rèn luyện kỹ năng an toàn cho trẻ em</h2>
      <p>Bố mẹ có thể cùng con rèn luyện kỹ năng an toàn cho bé với những cách sau:</p>
      <h3>4.1. Dạy trẻ quy tắc PANTS, 5 ngón tay</h3>
      <p>PANTS là một quy tắc an toàn cho bé bố mẹ cần dạy. Đây là một phương pháp giảng dạy về sự riêng tư và bảo vệ cơ thể cho trẻ em. Mỗi chữ cái trong “PANTS” đại diện cho một khía cạnh quan trọng:</p>
      <ul>
        <li><strong>Privates:</strong> Giúp trẻ hiểu rằng có những phần cơ thể riêng tư không ai nên chạm vào.</li>
        <li><strong>Always:</strong> Trẻ nên biết rằng họ có quyền kiểm soát cơ thể của mình và nếu có ai muốn chạm vào phải hỏi sự cho phép của trẻ.</li>
        <li><strong>No:</strong> Dạy trẻ rằng nếu họ không đồng ý, thì không ai có quyền ép buộc hoặc bắt trẻ làm gì đó mà chúng không muốn.</li>
        <li><strong>Talk:</strong> Khuyến khích trẻ chia sẻ với người lớn nếu họ có bất kỳ bí mật nào gây cho chúng cảm giác không vui hoặc không thoải mái.</li>
        <li><strong>Speak:</strong> Trẻ nên biết rằng nếu họ cảm thấy không an toàn hoặc không thoải mái, trẻ nên tìm kiếm sự giúp đỡ từ người lớn mà họ tin tưởng.</li>
      </ul>
      <figure class="article-image">
        <img src="<?= $base ?>assets/knat9.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Quy tắc giúp bé bảo vệ bản thân (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <p>Ngoài PANTS, quy tắc 5 ngón tay cũng rất quan trọng để hình thành kỹ năng an toàn cho bé. Quy tắc 5 ngón tay là một hướng dẫn giúp trẻ hiểu và nhớ về cách đối xử với người khác, đặc biệt trong các tình huống liên quan đến sự riêng tư và an toàn của chính mình. </p>
      <ul>
        <li><strong>Ngón cái:</strong> Ngón cái tượng trưng cho hành động ôm, hôn, mà chỉ dành cho những người mà trẻ tin tưởng và có quan hệ thân thiết, như cha mẹ, ông bà, anh chị em trong gia đình.</li>
        <li><strong>Ngón trỏ:</strong> Ngón trỏ thể hiện việc thể hiện tình cảm với bạn bè, thầy cô, họ hàng thông qua việc khoác vai, nắm tay hoặc những cử chỉ thân thiết nhưng không quá riêng tư.</li>
        <li><strong>Ngón giữa:</strong> Ngón giữa đại diện cho những người chỉ quen biết và không thân thiết. Ở đây, trẻ chỉ nên nói chuyện, bắt tay mà không nên thể hiện những hành động thân mật như ôm hay hôn.</li>
        <li><strong>Ngón áp út:</strong> Ngón áp út tượng trưng cho việc giữ khoảng cách hoặc cúi chào với những người lạ hoặc môi trường không quen thuộc.</li>
        <li><strong>NNgón út:</strong> Ngón út cho thấy trẻ nên biết từ chối những hành vi làm cho họ khó chịu, sợ hãi, và biết cách xua tay. Điều này bao gồm việc biết nói “không” khi cảm thấy không thoải mái.</li>
      </ul>
      <h3>4.2. Thường xuyên nói chuyện với con trẻ</h3>
      <p>Thường xuyên nói chuyện với con trẻ là cách quan trọng để rèn luyện kỹ năng an toàn cho bé. Việc tạo cơ hội thảo luận giúp trẻ hiểu rõ hơn về tình huống thực tế và cách bảo vệ mình, cũng như tạo niềm tin và sự thoải mái cho việc chia sẻ và hỏi về mọi thứ.</p>
      <figure class="article-image">
        <img src="<?= $base ?>assets/knat10.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Thường xuyên trò chuyện, trở thành người bạn tin cậy của con (Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>4.3. Tạo tình huống thực tế cho trẻ rèn phản xạ và cách xử trí</h3>
      <p>Tạo tình huống thực tế là một cách hiệu quả để rèn kỹ năng phản xạ và xử trí của trẻ. Bố mẹ có thể tạo những tình huống mô phỏng, ví dụ như khi gặp người lạ hay tình huống an toàn khi đi qua đường. Khi trẻ đối mặt với các tình huống này, các bé sẽ học cách phản ứng và áp dụng những kỹ năng an toàn đã học. Điều này giúp trẻ tự tin hơn và sẵn sàng đối mặt với thực tế khi cần.</p>
      <p>Ngoài những cách trên, bố mẹ có thể đồng hành cùng con trên hành trình rèn luyện kỹ năng mềm qua những chuyến đi du lịch. Du lịch không chỉ là cơ hội để trải nghiệm những điều mới mẻ mà còn giúp bé cải thiện, nâng cao kỹ năng mềm. Đi du lịch thử thách giúp bé rèn luyện kỹ năng an toàn và nhiều kỹ năng mềm khác.</p>
         <figure class="article-image">
        <img src="<?= $base ?>assets/knat11.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>Vui chơi thỏa thích, rèn kỹ năng mềm (Ảnh: Sưu tầm)</figcaption>
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
  ['href'=>'../chuyenmuc/honnhanvagd.php', 'img'=>$base.'assets/cat4.jpg', 'title'=>'Bảo vệ quyền trẻ em theo luật hôn nhân và gia đình', 'meta'=>'Một số vấn đề lý luận về bảo vệ quyền trẻ em theo luật hôn nhân và gia đình Việt Nam.'],
  ['href'=>'../chuyenmuc/chinhsachvahoatdong.php', 'img'=>$base.'assets/cat5.png', 'title'=>'Chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.', 'meta'=>'Giới thiệu các chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.'],
  ['href'=>'../chuyenmuc/antoanmang.php', 'img'=>$base.'assets/cat6.jpg', 'title'=>'Bảo vệ trẻ em trên không gian mạng', 'meta'=>'Bảo vệ trẻ em trên không gian mạng là một nhiệm vụ quan trọng, bao gồm việc áp dụng các quy định và biện pháp nhằm đảm bảo an toàn cho trẻ em khi sử dụng Internet và các dịch vụ trực tuyến.'],
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


