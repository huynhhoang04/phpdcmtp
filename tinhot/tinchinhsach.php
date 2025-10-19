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
        <h1>Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em</h1>
        <p class="meta">
          Nguồn: <a href="https://www.unicef.org/vietnam/vi/viet-nam-the-hien-cam-ket-manh-me-trong-viec-thuc-day-quyen-tre-em"><strong>UNICEF</strong></a><br>
        </p>
      </header>
      <div class="article-body">
        <p>Trao đổi với Tạp chí Trẻ em Việt Nam, bà Silvia Danailov - Trưởng đại diện UNICEF tại Việt Nam đã chia sẻ, đánh giá sâu sắc những nỗ lực của Việt Nam trong việc thể hiện cam kết mạnh mẽ và tầm nhìn xa đối với quyền, phúc lợi, sự phát triển và bảo vệ trẻ em.</p>
        <strong>Bà đánh giá như thế nào về việc thực hiện Công ước Quyền Trẻ em của Việt Nam kể từ khi phê chuẩn vào năm 1990?</strong>
        <p><strong>Bà Silvia Danailov:</strong>Quyết định của Việt Nam phê chuẩn Công ước Quyền Trẻ em (CRC) vào năm 1990 là một dấu mốc quan trọng - không chỉ đối với đất nước mà còn đối với cả khu vực.</p>
        <p>Việt Nam là quốc gia đầu tiên ở châu Á và là quốc gia thứ hai trên thế giới phê chuẩn công ước này, thể hiện cam kết mạnh mẽ và tầm nhìn xa đối với quyền, phúc lợi, sự phát triển và bảo vệ trẻ em.</p>
        <figure class="article-image">
        <img src="<?= $base ?>assets/tincs1.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption></figcaption>
        </figure>
        <p>Trong suốt 35 năm qua, Việt Nam đã có những bước tiến mạnh mẽ trong việc thực hiện quyền trẻ em. Tỷ lệ tử vong ở trẻ dưới 5 tuổi đã giảm mạnh, từ 52/1.000 trẻ vào năm 1990 xuống chỉ còn 16,9/1.000 vào năm 2024. Đây là một chỉ số mạnh mẽ cho thấy khả năng tiếp cận dịch vụ y tế và chăm sóc thai sản đã được cải thiện rõ rệt. <br>

Tương tự, tỷ lệ suy dinh dưỡng thấp còi ở trẻ dưới 5 tuổi đã giảm hơn một nửa, từ 44% năm 1990 xuống còn 18,2% vào năm 2023, phản ánh sự tiến bộ rõ rệt trong dinh dưỡng và chăm sóc trẻ thơ.
<br>
Tỷ lệ tiếp cận nước sạch và vệ sinh môi trường cũng đã tăng đáng kể - từ 45% và 29% vào năm 1990 lên 99% và 95% vào năm 2024. Đây không chỉ là những con số thống kê mà còn cho thấy sự tiến bộ thực sự, cụ thể trong cuộc sống hàng ngày của hàng triệu trẻ em.
<br>
Thông qua các khoản đầu tư bền vững, trẻ em ở Việt Nam ngày nay được bảo vệ tốt hơn trước tình trạng bạo lực, sao nhãng và xâm hại so với các thế hệ trước. Đại đa số trẻ em được học tiểu học và trung học cơ sở, được chăm sóc y tế và có tuổi thọ cao hơn thế hệ cha mẹ mình. Tất cả những điều này là thành tựu lớn đối với quyền trẻ em - bao gồm quyền được chăm sóc sức khỏe, dinh dưỡng, giáo dục, bảo vệ trẻ em và an sinh xã hội.
<br>
Bên cạnh việc cải thiện các dịch vụ chăm sóc và bảo vệ trẻ em, Việt Nam cũng đã có những bước tiến đáng kể trong việc hoàn thiện khung pháp lý và chính sách nhằm thúc đẩy quyền trẻ em. Luật Trẻ em được ban hành năm 2016, các sửa đổi quan trọng trong Luật Giáo dục và Luật Lao động, cùng với việc thông qua Luật Tư pháp Người chưa thành niên gần đây, tất cả đều phản ánh cam kết ngày càng rõ nét về pháp lý đối với quyền trẻ em. Việc thành lập Tòa Gia đình và Trẻ em, cũng như việc ban hành Nghị định về Công tác xã hội, là những ví dụ cụ thể cho thấy, Việt Nam đang lồng ghép việc bảo vệ trẻ em vào hệ thống tư pháp và an sinh xã hội.
<br>
Việc thành lập Ủy ban Quốc gia về Trẻ em và triển khai các Chương trình Hành động Quốc gia vì trẻ em cũng đã góp phần đảm bảo rằng, quyền trẻ em không chỉ là mong muốn, khát vọng, mà đang thực sự được triển khai thực tế trong nhiều lĩnh vực.</p>
        <strong>Bà có suy nghĩ gì về những thách thức trong việc thúc đẩy quyền trẻ em, đặc biệt đối với các nhóm trẻ em dễ bị tổn thương?</strong>
        <p><strong>Bà Silvia Danailov:</strong>iệt Nam đã đạt được nhiều kết quả rất đáng ghi nhận trong việc thúc đẩy quyền trẻ em, nhưng cũng cần nhìn nhận thẳng thắn rằng, vẫn còn nhiều thách thức. Năm ngoái, tôi đã có cơ hội đến thăm một số làng quê ở vùng sâu vùng xa, nơi bị ảnh hưởng bởi thiên tai, đặc biệt là những làng quê bị bão Yagi tàn phá nặng nề. Sau bão, nhiều gia đình mất nhà cửa, trường học bị tàn phá và không thể tiếp cận các dịch vụ thiết yếu. Trẻ em tại những khu vực này bị gián đoạn học tập, chăm sóc y tế bị hạn chế, dinh dưỡng thiếu hụt và thiếu nước sạch cũng như vệ sinh môi trường.</p>
        <p>Tuy nhiên, điều khiến tôi ấn tượng nhất giữa những khó khăn đó là sự kiên cường phi thường của những trẻ em và gia đình. Dù mất mát rất nhiều, họ vẫn không từ bỏ ý chí vươn lên để xây dựng lại cuộc sống.
<br>
Gần đây, tôi đã quay trở lại thăm một bản làng, nơi UNICEF hỗ trợ phục hồi sau bão. Tôi thực sự xúc động khi chứng kiến sự thay đổi: nhà cửa và trường học đã được sửa chữa, các dịch vụ thiết yếu như chăm sóc y tế, giáo dục, nước sạch và vệ sinh môi trường đã được khôi phục, và trẻ em đã nhận được hỗ trợ tâm lý xã hội để giúp các em vượt qua sang chấn. Niềm vui trong ánh mắt của các em - tiếng cười, sự hồn nhiên và cảm giác cuộc sống bình thường đã trở lại - là một lời nhắc nhở mạnh mẽ rằng, đó chính là những gì mà mỗi trẻ em đều xứng đáng được hưởng.
<br>
Những chuyến thăm này cho tôi thấy rõ thực tế vẫn còn rất nhiều việc cần phải làm. Trẻ em ở vùng sâu vùng xa và bị thiệt thòi vẫn cần được hỗ trợ để đảm bảo quyền của các em được thực hiện đầy đủ.
<br>
Tình trạng béo phì ở trẻ em cũng đang gia tăng, đặc biệt tại khu vực đô thị, với gần 2 triệu trẻ em được dự báo sẽ mắc béo phì vào năm 2030.
<br>
Đồng thời, bạo lực đối với trẻ em vẫn là một mối quan ngại dai dẳng, có tới 72% trẻ từ 1 đến 14 tuổi phải chịu các hình thức kỷ luật mang tính bạo lực tại gia đình.
<br>
Việt Nam cũng đang trên đà trở thành một “xã hội già hóa”, với tỷ lệ trẻ em từ 0-14 tuổi dự kiến sẽ giảm xuống còn khoảng 17% vào năm 2050. Trong khi đó, các công nghệ tiên phong như công nghệ kỹ thuật số và trí tuệ nhân tạo (AI) mang lại nhiều cơ hội mới nhưng cũng đặt trẻ em trước nguy cơ bị bóc lột và xâm hại trên môi trường mạng.
<br>
Những thách thức này có tính chất phức tạp, đan xen và đòi hỏi một cách tiếp cận toàn diện, liên ngành, trong đó quyền và nhu cầu của mỗi trẻ em – bất kể hoàn cảnh hay xuất thân - cần được đặt ở vị trí trung tâm của mọi nỗ lực phát triển quốc gia.</p>
<strong>Theo bà, Việt Nam cần thực hiện những gì để tiếp tục thúc đẩy mạnh mẽ việc thực hiện quyền trẻ em?</strong>
<p><strong>Bà Silvia Danailov:</strong>Việt Nam đã có những bước đi rất quan trọng, bao gồm việc tiếp thu các khuyến nghị mới nhất của Ủy ban Quyền Trẻ em của Liên Hợp Quốc và cam kết thực hiện các khuyến nghị này. Để có thể tiếp tục đà tiến bộ này, tôi xin nhấn mạnh bốn lĩnh vực ưu tiên sau:</p>
<p><strong>Chuyển đổi số:</strong>Cần thu hẹp khoảng cách số bằng cách mở rộng khả năng tiếp cận công nghệ và nâng cao năng lực sử dụng công nghệ số cho tất cả trẻ em. Đồng thời, cần bảo đảm môi trường số an toàn và thân thiện với trẻ em, bao gồm cập nhật pháp luật để bảo vệ trẻ em trước các rủi ro trên mạng và thúc đẩy phát triển các công cụ kỹ thuật số thân thiện với trẻ.</p>
<p><strong>Khả năng chống chịu với biến đổi khí hậu:</strong>Cần đầu tư vào hạ tầng và dịch vụ có khả năng chống chịu với các cú sốc môi trường. Điều này bao gồm xây dựng trường học và cơ sở y tế có tính chống chịu cao, thúc đẩy năng lượng xanh và tạo điều kiện cho trẻ em và thanh thiếu niên tham gia vào quá trình ra quyết định liên quan đến môi trường và khí hậu.</p>
<p><strong>Phát triển nguồn nhân lực:</strong>Trong bối cảnh dân số trẻ em đang giảm, việc đầu tư cho trẻ em, đặc biệt là nhóm em dễ bị tổn thương càng trở nên cấp thiết. Những khoản đầu tư này có ý nghĩa then chốt cho tăng trưởng và thịnh vượng lâu dài của Việt Nam.</p>
<p><strong>Bảo vệ trẻ em và dịch vụ xã hội:</strong> Cần củng cố hệ thống nhằm phòng ngừa bạo lực và đảm bảo mọi trẻ em được tiếp cận với chăm sóc sức khỏe có chất lượng, dinh dưỡng, giáo dục và bảo trợ xã hội. Xóa nghèo ở trẻ em và bảo đảm công bằng trong tiếp cận dịch vụ phải luôn là những ưu tiên hàng đầu.</p>
<figure class="article-image">
        <img src="<?= $base ?>assets/tincs2.webp" alt="">
        <figcaption></figcaption>
        </figure>
        <strong>Bà có thể chia sẻ thêm những định hướng hoặc sáng kiến cần thiết cho tương lai của Việt Nam trong việc thúc đẩy quyền trẻ em?</strong>
        <p><strong>Bà Silvia Danailov:</strong>Việt Nam có thể xây dựng một xã hội hòa nhập và có khả năng chống chịu tốt hơn cho các công dân nhỏ tuổi của mình. Để thực hiện đầy đủ quyền trẻ em cần có cách tiếp cận toàn diện, tôi cho rằng, cần đặc biệt phát triển các mô hình hợp tác công - tư, thúc đẩy vai trò của các tổ chức, doanh nghiệp tư nhân, qua đó sẽ có thêm những nguồn lực quan trọng dành cho trẻ em.</p>
        <p>UNICEF tự hào đã đồng hành cùng Việt Nam suốt 50 năm qua, ngay cả trước khi Công ước Quyền Trẻ em (CRC) được thông qua. Nhân dịp kỷ niệm 35 năm Việt Nam phê chuẩn CRC, chúng tôi một lần nữa khẳng định cam kết tiếp tục hỗ trợ Việt Nam trong giai đoạn phát triển mới. Với sự chung tay của Chính phủ, nhân dân, khu vực tư nhân, các đối tác trong và ngoài nước, cùng chính thanh thiếu niên và trẻ em, chúng ta có thể bảo đảm rằng mọi trẻ em tại Việt Nam không chỉ được sống còn mà còn được phát triển toàn diện.</p>




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
  ['href'=>'../tinhot/tinyte.php', 'img'=>$base.'assets/tintuchotyte.webp',        'title'=>'Thành phố HCM tăng cường bảo đảm nhi khoa',                           'meta'=>'Tin y tế'],
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


