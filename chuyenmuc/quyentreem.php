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
  $guide_items = [
    ['href'=>'#', 'img'=>$base.'assets/camnangtichcuc.jpg',   'title'=>'Muốn cuộc sống con tích cực, cha mẹ phải là người thay đổi trước', 'meta'=>'Cẩm nang gia đình'],
    ['href'=>'#', 'img'=>$base.'assets/camnangnhutnhat.webp', 'title'=>'Những nguyên nhân trẻ nhút nhát cha mẹ không thể bỏ qua',           'meta'=>'Kỹ năng & Tâm lý'],
  ];
?>
<main id="main" class="page quyentreem">
  <div class="container page-inner">

    <!-- Cột trái: nội dung chính -->
    <article class="main-article">
      <header class="article-head">
        <h1>Toàn bộ quyền của trẻ em theo Luật Trẻ em 2016</h1>
        <p class="meta">
          Tham vấn bởi Luật sư <strong>Nguyễn Thụy Hân</strong><br>
          Chuyên viên pháp lý <strong>Dương Châu Thanh</strong>
        </p>
        <small>Nguồn: <a href="https://thuvienphapluat.vn/chinh-sach-phap-luat-moi/vn/ho-tro-phap-luat/tu-van-phap-luat/34629/toan-bo-quyen-cua-tre-em-theo-luat-tre-em-2016">Thư viện pháp luật</a></small>
      </header>

      <div class="article-body">
        <p>Quyền sống, quyền được bảo vệ để không bị bạo lực, bỏ rơi, bỏ mặc, quyền được chăm sóc sức khỏe,... là những quyền của trẻ em được quy định tại Luật Trẻ em 2016.</p>

        <h2>Toàn bộ quyền của trẻ em theo Luật Trẻ em 2016</h2>

        <h3>1. Quyền sống</h3>
        <p>Trẻ em có quyền được bảo vệ tính mạng, được bảo đảm tốt nhất các điều kiện sống và phát triển.</p>

        <h3>2. Quyền được khai sinh và có quốc tịch</h3>
        <p>Trẻ em có quyền được khai sinh, khai tử, có họ, tên, có quốc tịch; được xác định cha, mẹ, dân tộc, giới tính theo quy định của pháp luật.</p>

        <h3>3. Quyền được chăm sóc sức khỏe</h3>
        <p>Trẻ em có quyền được chăm sóc tốt nhất về sức khỏe, được ưu tiên tiếp cận, sử dụng dịch vụ phòng bệnh và khám bệnh, chữa bệnh.</p>

        <h3>4. Quyền được chăm sóc, nuôi dưỡng</h3>
        <p>Trẻ em có quyền được chăm sóc, nuôi dưỡng để phát triển toàn diện.</p>

        <h3>5. Quyền được giáo dục, học tập và phát triển năng khiếu</h3>
        <p>
          – Trẻ em có quyền được giáo dục, học tập để phát triển toàn diện và phát huy tốt nhất tiềm năng của bản thân.<br>
          – Trẻ em được bình đẳng về cơ hội học tập và giáo dục; được phát triển tài năng, năng khiếu, sáng tạo.
        </p>

        <h3>6. Quyền vui chơi, giải trí</h3>
        <p>Trẻ em có quyền vui chơi, giải trí; được bình đẳng về cơ hội tham gia các hoạt động văn hóa, nghệ thuật, thể dục, thể thao, du lịch phù hợp với độ tuổi.</p>

        <h3>7. Quyền giữ gìn, phát huy bản sắc</h3>
        <p>
          – Trẻ em có quyền được tôn trọng đặc điểm và giá trị riêng phù hợp với độ tuổi và văn hóa dân tộc; được thừa nhận các quan hệ gia đình.<br>
          – Trẻ em có quyền dùng tiếng nói, chữ viết, giữ gìn bản sắc, phát huy truyền thống văn hóa, phong tục, tập quán tốt đẹp của dân tộc mình.
        </p>

        <h3>8. Quyền tự do tín ngưỡng, tôn giáo</h3>
        <p>Trẻ em có quyền tự do tín ngưỡng, tôn giáo, theo hoặc không theo một tôn giáo nào và phải được bảo đảm an toàn, vì lợi ích tốt nhất của trẻ em.</p>

        <h3>9. Quyền về tài sản</h3>
        <p>Trẻ em có quyền sở hữu, thừa kế và các quyền khác đối với tài sản theo quy định của pháp luật.</p>

        <h3>10. Quyền bí mật đời sống riêng tư</h3>
        <p>
          – Trẻ em có quyền bất khả xâm phạm về đời sống riêng tư, bí mật cá nhân và bí mật gia đình vì lợi ích tốt nhất của trẻ em.<br>
          – Trẻ em được pháp luật bảo vệ danh dự, nhân phẩm, uy tín, bí mật thư tín, điện thoại, điện tín và các hình thức trao đổi thông tin riêng tư khác; được bảo vệ khỏi sự can thiệp trái pháp luật đối với thông tin riêng tư.
        </p>

        <h3>11. Quyền được sống chung với cha, mẹ</h3>
        <p>
          Trẻ em có quyền được sống chung với cha, mẹ; được cả cha và mẹ bảo vệ, chăm sóc và giáo dục, trừ trường hợp cách ly cha, mẹ theo quy định pháp luật hoặc vì lợi ích tốt nhất của trẻ em.<br>
          Khi phải cách ly cha, mẹ, trẻ em được trợ giúp để duy trì mối liên hệ và tiếp xúc với cha, mẹ, gia đình, trừ trường hợp không vì lợi ích tốt nhất của trẻ em.
        </p>

        <h3>12. Quyền được đoàn tụ, liên hệ và tiếp xúc với cha, mẹ</h3>
        <p>Trẻ em có quyền được biết cha đẻ, mẹ đẻ; được duy trì liên hệ khi cư trú khác quốc gia hoặc khi bị giam giữ, trục xuất; được tạo điều kiện thuận lợi xuất/nhập cảnh để đoàn tụ; được bảo vệ không bị đưa ra nước ngoài trái luật; được cung cấp thông tin khi cha, mẹ bị mất tích.</p>

        <h3>13. Quyền được chăm sóc thay thế và nhận làm con nuôi</h3>
        <p>Trẻ em được chăm sóc thay thế khi không còn cha mẹ; hoặc không thể sống cùng cha, mẹ; hoặc bị ảnh hưởng bởi thiên tai, thảm họa, xung đột vũ trang.</p>

        <h3>14. Quyền được bảo vệ để không bị xâm hại tình dục</h3>
        <p>Trẻ em có quyền được bảo vệ dưới mọi hình thức để không bị xâm hại tình dục.</p>

        <h3>15. Quyền được bảo vệ để không bị bóc lột sức lao động</h3>
        <p>Trẻ em có quyền được bảo vệ để không bị bóc lột sức lao động; không phải lao động trước tuổi, quá thời gian hoặc làm công việc nặng nhọc, độc hại, nguy hiểm.</p>

        <h3>16. Quyền được bảo vệ để không bị bạo lực, bỏ rơi, bỏ mặc</h3>
        <p>Trẻ em có quyền được bảo vệ dưới mọi hình thức để không bị bạo lực, bỏ rơi, bỏ mặc làm tổn hại đến sự phát triển toàn diện.</p>

        <h3>17. Quyền được bảo vệ để không bị mua bán, bắt cóc, đánh tráo, chiếm đoạt</h3>
        <p>Trẻ em có quyền được bảo vệ dưới mọi hình thức để không bị mua bán, bắt cóc, đánh tráo, chiếm đoạt.</p>

        <h3>18. Quyền được bảo vệ khỏi chất ma túy</h3>
        <p>Trẻ em có quyền được bảo vệ khỏi mọi hình thức sử dụng, sản xuất, vận chuyển, mua, bán, tàng trữ trái phép chất ma túy.</p>

        <h3>19. Quyền được bảo vệ trong tố tụng và xử lý vi phạm hành chính</h3>
        <p>Trẻ em được bảo đảm quyền bào chữa; được trợ giúp pháp lý; được trình bày ý kiến; không bị tước quyền tự do trái pháp luật; không bị tra tấn, truy bức, nhục hình.</p>

        <h3>20. Quyền được bảo vệ khi gặp thiên tai, thảm họa, ô nhiễm môi trường, xung đột vũ trang</h3>
        <p>Trẻ em có quyền được ưu tiên bảo vệ, trợ giúp để thoát khỏi tác động của thiên tai, thảm họa, ô nhiễm môi trường, xung đột vũ trang.</p>

        <h3>21. Quyền được bảo đảm an sinh xã hội</h3>
        <p>Trẻ em là công dân Việt Nam được bảo đảm an sinh xã hội theo quy định của pháp luật, phù hợp với điều kiện kinh tế – xã hội nơi sinh sống.</p>

        <h3>22. Quyền được tiếp cận thông tin và tham gia hoạt động xã hội</h3>
        <p>Trẻ em có quyền được tiếp cận thông tin đầy đủ, kịp thời, phù hợp; được tham gia hoạt động xã hội phù hợp với độ tuổi, mức độ trưởng thành.</p>

        <h3>23. Quyền được bày tỏ ý kiến và hội họp</h3>
        <p>Trẻ em có quyền bày tỏ ý kiến, nguyện vọng; được tự do hội họp theo quy định; ý kiến chính đáng được lắng nghe và phản hồi.</p>

        <h4>Quyền của trẻ em khuyết tật</h4>
        <p>Trẻ em khuyết tật được hưởng đầy đủ các quyền của trẻ em và quyền của người khuyết tật; được hỗ trợ, chăm sóc, giáo dục đặc biệt để phục hồi chức năng, phát triển khả năng tự lực và hòa nhập xã hội.</p>

        <h4>Quyền của trẻ em không quốc tịch, trẻ em lánh nạn, tị nạn</h4>
        <p>Trẻ em không quốc tịch, trẻ em lánh nạn, tị nạn được bảo vệ và hỗ trợ nhân đạo; được tìm kiếm cha, mẹ, gia đình theo quy định pháp luật Việt Nam và điều ước quốc tế liên quan.</p>

        <p><em>Căn cứ: Điều 12 đến Điều 36 Luật Trẻ em 2016.</em></p>

        <h3>Trẻ em là người dưới 16 tuổi</h3>
        <p>
          – Bảo đảm để trẻ em thực hiện đầy đủ quyền và bổn phận của mình.<br>
          – Không phân biệt đối xử với trẻ em.<br>
          – Bảo đảm lợi ích tốt nhất của trẻ em trong các quyết định liên quan.<br>
          – Tôn trọng, lắng nghe, xem xét, phản hồi ý kiến, nguyện vọng của trẻ em.<br>
          – Khi xây dựng chính sách, pháp luật tác động đến trẻ em, phải xem xét ý kiến của trẻ em và lồng ghép các mục tiêu, chỉ tiêu về trẻ em trong quy hoạch, kế hoạch phát triển.
        </p>

        <p><strong>→ Kết luận:</strong> Bảo vệ quyền trẻ em là trách nhiệm chung của toàn xã hội. Mỗi cá nhân, tổ chức và gia đình đều góp phần xây dựng một môi trường an toàn và lành mạnh cho trẻ.</p>
      </div>
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
  ['href'=>'../chuyenmuc/phongchongbaohanh.php', 'img'=>$base.'assets/cat2.png', 'title'=>'Bạo hành trẻ em: Thực trạng hiện nay và giải pháp khắc phục', 'meta'=>'Thực trạng bạo hành trẻ em hiện nay vẫn đang rất nhức nhối và không ngừng gia tăng. Trong đó có đến hơn 70% trường hợp bạo hành trẻ em diễn ra trong chính gia đình gây ra những hệ quả thương tâm. Cần đẩy mạnh các biện pháp bảo vệ trẻ em, nâng cao hình phạt với những kẻ bạo hành để sớm ngăn chặn vấn đề này.'],
  ['href'=>'../chuyenmuc/giaoducantoan.php', 'img'=>$base.'assets/cat3.png', 'title'=>'Giáo dục an toàn cho trẻ em.', 'meta'=>'Môi trường giáo dục an toàn là môi trường nuôi dưỡng, chăm sóc, giáo dục trong đó trẻ em được bảo vệ, được đối xử công bằng, nhân ái.'],
  ['href'=>'../chuyenmuc/honnhanvagd.php', 'img'=>$base.'assets/cat4.jpg', 'title'=>'Bảo vệ quyền trẻ em theo luật hôn nhân và gia đình', 'meta'=>'Một số vấn đề lý luận về bảo vệ quyền trẻ em theo luật hôn nhân và gia đình Việt Nam.'],
  ['href'=>'../chuyenmuc/chinhsachvahoatdong.php', 'img'=>$base.'assets/cat5.png', 'title'=>'Chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.', 'meta'=>'Giới thiệu các chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.'],
  ['href'=>'../chuyenmuc/antoanmang.php', 'img'=>$base.'assets/cat6.jpg', 'title'=>'Bảo vệ trẻ em trên không gian mạng', 'meta'=>'Bảo vệ trẻ em trên không gian mạng là một nhiệm vụ quan trọng, bao gồm việc áp dụng các quy định và biện pháp nhằm đảm bảo an toàn cho trẻ em khi sử dụng Internet và các dịch vụ trực tuyến.'],
];


render_highlight_section('Chuyên mục nổi bật', $highlight_items);
?>
<?php require_once __DIR__ . '/../th/footer.php'; ?>

