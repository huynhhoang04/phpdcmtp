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
<script src="<?= $base ?>app.js" defer></script>
<link rel="stylesheet" href="<?= $base ?>styles.css" />
<main id="main" class="page quyentreem">
  <div class="container page-inner">
    <!-- Cột trái: nội dung chính -->
    <article class="main-article">
      <header class="article-head">
        <h1>Bảo vệ quyền trẻ em theo luật hôn nhân và gia đình</h1>
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
        <p>Trẻ em là tương lai của dân tộc và là chủ nhân tương lai của đất nước. Việc bảo vệ, chăm sóc và giáo dục trẻ em được khẳng định nhất quán trong Hiến pháp và các đạo luật chuyên ngành của Việt Nam. Trong số đó, Luật Hôn nhân và Gia đình năm 2014 (sau đây viết tắt là Luật HNGĐ 2014) giữ vị trí trụ cột khi điều chỉnh quan hệ giữa cha mẹ và con, đặt ra nguyên tắc bảo đảm lợi ích tốt nhất của trẻ em trong mọi quyết định liên quan. Bài viết này hệ thống hóa và phân tích chi tiết các quy định pháp luật hiện hành theo bảy nội dung: (1) Cơ sở pháp lý; (2) Nguyên tắc bảo vệ; (3) Quyền của trẻ trong gia đình; (4) Nghĩa vụ của cha mẹ; (5) Bảo vệ khi cha mẹ ly hôn; (6) Cơ chế bảo vệ quyền trẻ em; (7) Kết luận.</p>
        <h2>1. Cơ sở pháp lý</h2>
        <p>Khung pháp luật về bảo vệ quyền trẻ em trong gia đình ở Việt Nam hiện nay gồm các văn bản sau:</p>
        <ul>
            <li><strong>Hiến pháp năm 2013:</strong> khẳng định Nhà nước, gia đình và xã hội có trách nhiệm bảo vệ, chăm sóc và giáo dục trẻ em; mọi trẻ em đều được bảo đảm các quyền cơ bản và được đối xử bình đẳng.</li>
            <li><strong>Luật HNGĐ 2014: </strong>quy định quyền, nghĩa vụ của cha mẹ và con; nguyên tắc giao con, nuôi dưỡng, cấp dưỡng; hạn chế quyền của cha mẹ; xác định cha, mẹ, con; nuôi con nuôi; mang thai hộ vì mục đích nhân đạo…</li>
            <li><strong>Luật Trẻ em 2016: </strong>quy định hệ thống quyền trẻ em (nhóm quyền sống còn, phát triển, bảo vệ và tham gia), cơ chế bảo vệ trẻ em theo ba cấp độ (phòng ngừa, hỗ trợ, can thiệp), trách nhiệm của cơ quan, tổ chức, cơ sở cung cấp dịch vụ bảo vệ trẻ em; thiết lập đường dây nóng quốc gia 111.</li>
            <li><strong>Luật Phòng, chống bạo lực gia đình năm 2022: </strong>điều chỉnh các hành vi bạo lực trong gia đình; thiết lập các biện pháp cấm tiếp xúc, tạm lánh, hỗ trợ khẩn cấp, tư vấn tâm lý… áp dụng với nạn nhân là trẻ em.</li>
            <li><strong>Bộ luật Dân sự 2015: </strong>quy định về năng lực hành vi của người chưa thành niên; đại diện theo pháp luật; giám hộ; quản lý tài sản của người chưa thành niên; bồi thường thiệt hại khi xâm phạm danh dự, nhân phẩm, sức khỏe của trẻ em.</li>
            <li><strong>Bộ luật Tố tụng Hình sự 2015, Bộ luật Hình sự 2015 (sửa đổi, bổ sung): </strong>quy định thủ tục tố tụng thân thiện đối với người dưới 18 tuổi; tội phạm xâm hại trẻ em; chính sách xử lý người chưa thành niên phạm tội; biện pháp bảo vệ người dưới 18 tuổi khi tham gia tố tụng.</li>
            <li><strong>Luật Nuôi con nuôi 2010: </strong>quy định điều kiện, trình tự, thủ tục nuôi con nuôi; bảo đảm lợi ích tốt nhất của người được nhận làm con nuôi.</li>
    </ul>
        <p>Các văn bản dưới luật có liên quan, ví dụ: Nghị định 56/2017/NĐ-CP quy định chi tiết Luật Trẻ em; Nghị định 130/2021/NĐ-CP về xử phạt vi phạm hành chính trong lĩnh vực bảo trợ, trợ giúp xã hội và trẻ em; nghị định, thông tư hướng dẫn về đăng ký hộ tịch, trợ giúp xã hội, dịch vụ bảo vệ trẻ em.</p>
        <p>Các văn bản trên tạo thành một chỉnh thể pháp lý liên thông: Luật HNGĐ 2014 điều chỉnh quan hệ gia đình; Luật Trẻ em 2016 thiết lập nguyên tắc và cơ chế bảo vệ theo cách tiếp cận quyền; các luật, bộ luật khác cung cấp công cụ dân sự, hành chính và hình sự để bảo đảm thực thi.</p>
        <h2>2. Nguyên tắc bảo vệ quyền trẻ em</h2>
        <p>Hệ thống pháp luật nêu rõ các nguyên tắc nền tảng sau đây khi xem xét, quyết định mọi vấn đề liên quan đến trẻ em:</p>
        <ul>
            <li>Lợi ích tốt nhất của trẻ em là ưu tiên hàng đầu: mọi quyết định của cha mẹ, người giám hộ, cơ quan tiến hành tố tụng, cơ quan quản lý nhà nước phải nhằm bảo đảm sự phát triển an toàn, lành mạnh và toàn diện của trẻ.</li>
            <li>Không phân biệt đối xử giữa các con: không phân biệt con ruột, con nuôi, con ngoài giá thú, con riêng; con trai, con gái; trẻ em khuyết tật, trẻ em dân tộc thiểu số…</li>
            <li>Tôn trọng, lắng nghe ý kiến của trẻ phù hợp với độ tuổi và mức độ trưởng thành: trẻ từ đủ 7 tuổi trở lên phải được hỏi ý kiến khi quyết định người trực tiếp nuôi dưỡng sau ly hôn; trong các vụ việc liên quan đến trẻ, ý kiến của trẻ là một nguồn thông tin quan trọng.</li>
            <li>Bảo đảm quyền được bảo vệ khỏi mọi hình thức bạo lực, xâm hại, bóc lột, bỏ rơi, bỏ mặc; bảo vệ đời sống riêng tư, danh dự, nhân phẩm và bí mật cá nhân của trẻ em.</li>
            <li>Kết hợp phòng ngừa sớm với can thiệp kịp thời, đa ngành: huy động hệ thống y tế, giáo dục, tư pháp, lao động – xã hội và chính quyền địa phương để phát hiện, đánh giá nguy cơ, lập kế hoạch hỗ trợ, theo dõi sau can thiệp.</li>
            <li>Trách nhiệm trước hết thuộc về gia đình; Nhà nước và xã hội hỗ trợ khi gia đình gặp khó khăn hoặc khi quyền trẻ bị xâm hại.</li>
            <li>Ưu tiên bảo vệ nhóm trẻ em có hoàn cảnh đặc biệt: trẻ em bị bạo lực, bị xâm hại tình dục, trẻ em khuyết tật, trẻ em không nơi nương tựa, trẻ em lao động sớm, trẻ em di cư…</li>
        </ul>
        <p>Các nguyên tắc này nhất quán với Công ước Liên Hợp Quốc về Quyền trẻ em (CRC) mà Việt Nam là thành viên, qua đó bảo đảm cách tiếp cận lấy trẻ em làm trung tâm trong hoạch định và thực thi chính sách.</p>
        <h2>3. Quyền của trẻ em trong gia đình</h2>
        <p>Trong môi trường gia đình, trẻ em được pháp luật ghi nhận và bảo đảm các quyền cốt lõi sau:</p>
        <ul>
            <li>Quyền được sống chung với cha mẹ và được bảo đảm môi trường gia đình an toàn, yêu thương, trừ trường hợp việc sống chung gây ảnh hưởng nghiêm trọng đến sự phát triển của trẻ.</li>
            <li>Quyền được chăm sóc, nuôi dưỡng, giáo dục, chăm sóc sức khỏe, học tập, vui chơi, giải trí, phát triển năng khiếu; được đăng ký khai sinh, có họ tên, quốc tịch, xác định cha, mẹ, con.</li>
            <li>Quyền được bảo vệ khỏi bạo lực gia đình, xâm hại tình dục, bóc lột lao động, mua bán, bỏ rơi, bỏ mặc và các hình thức đối xử tàn bạo, vô nhân đạo, hạ nhục.</li>
            <li>Quyền được tôn trọng danh dự, nhân phẩm, uy tín; được bảo đảm bí mật đời sống riêng tư, bí mật thư tín, điện thoại và các hình thức trao đổi thông tin phù hợp lứa tuổi.</li>
            <li>Quyền sở hữu, thừa kế, quyền có tài sản riêng phù hợp độ tuổi; quyền được quản lý tài sản theo quy định của pháp luật dân sự.</li>
            <li>Quyền tham gia ý kiến về những vấn đề liên quan đến bản thân và gia đình; ý kiến của trẻ được xem xét một cách nghiêm túc phù hợp với độ tuổi và mức trưởng thành.</li>
    </ul>
    <p>Những quyền này vừa mang tính nhân thân (gắn liền với con người) vừa mang tính tài sản; được bảo vệ bằng các cơ chế dân sự, hành chính và hình sự tùy theo tính chất, mức độ xâm hại.</p>
    <h2>4. Nghĩa vụ của cha mẹ đối với con</h2>
    <p>Luật HNGĐ 2014 xác định cha mẹ có nghĩa vụ và quyền đối với con một cách toàn diện, bao gồm:</p>
    <ul>
        <li>Chăm sóc, nuôi dưỡng, giáo dục con để phát triển toàn diện về thể chất, trí tuệ, đạo đức, tinh thần; tạo điều kiện cho con học tập, rèn luyện, vui chơi, tham gia hoạt động xã hội phù hợp lứa tuổi.</li>
        <li>Tôn trọng ý kiến, nguyện vọng chính đáng của con; không áp đặt, xúc phạm danh dự, nhân phẩm; không sử dụng các biện pháp trừng phạt thân thể hoặc tinh thần gây tổn hại cho trẻ.</li>
        <li>Đại diện theo pháp luật cho con chưa thành niên; quản lý tài sản của con theo đúng quy định; thực hiện giao dịch vì lợi ích của con và bảo vệ quyền, lợi ích hợp pháp của con trước cơ quan, tổ chức, cá nhân.</li>
        <li>Đăng ký khai sinh, bảo đảm quyền nhân thân cơ bản (họ tên, quốc tịch, xác định cha mẹ, nơi cư trú) cho con theo quy định về hộ tịch; tạo lập hồ sơ sức khỏe, giáo dục, bảo hiểm y tế cho con.</li>
        <li>Không lạm dụng sức lao động của con; không bắt con lao động nặng nhọc, độc hại, nguy hiểm hoặc công việc cản trở việc học; không xúi giục, ép buộc con vi phạm pháp luật.</li>
        <li>Thực hiện nghĩa vụ cấp dưỡng khi không sống chung hoặc khi pháp luật quy định; bảo đảm mức sống tối thiểu và các nhu cầu thiết yếu của con.</li>
        <li>Chủ động phối hợp với nhà trường, cơ sở y tế, cơ quan bảo vệ trẻ em để phòng ngừa, phát hiện và xử lý rủi ro đối với con.</li>
    </ul>
    <p>Trong trường hợp cha hoặc mẹ vi phạm nghiêm trọng nghĩa vụ đối với con (bạo lực, xâm hại, bỏ mặc, lối sống đồi trụy, xúi giục con vi phạm pháp luật…), Tòa án có thể quyết định **hạn chế quyền của cha, mẹ đối với con chưa thành niên** trong thời hạn nhất định nhằm bảo vệ trẻ.</p>
    <h2>5. Bảo vệ quyền trẻ em khi cha mẹ ly hôn</h2>
    <p>Khi ly hôn, lợi ích của con chưa thành niên là tiêu chí trung tâm để Tòa án quyết định các vấn đề về nuôi dưỡng, chăm sóc và cấp dưỡng. Các nội dung cốt lõi gồm:</p>
    <h3>5.1. Nguyên tắc giao con trực tiếp nuôi dưỡng</h3>
    <p>Tòa án xem xét toàn diện điều kiện vật chất (thu nhập, chỗ ở, điều kiện chăm sóc y tế, học tập) và điều kiện tinh thần (thời gian chăm sóc, mối quan hệ gắn bó, môi trường đạo đức, lịch sử chăm sóc) của mỗi bên cha, mẹ để quyết định. Trẻ từ **đủ 07 tuổi** trở lên phải được hỏi ý kiến và xem xét nguyện vọng. Đối với **trẻ dưới 36 tháng tuổi**, theo nguyên tắc chung sẽ giao cho mẹ trực tiếp nuôi, trừ trường hợp người mẹ không đủ điều kiện chăm sóc hoặc cha mẹ có thỏa thuận khác bảo đảm lợi ích tốt nhất của trẻ.</p>
    <h3>5.2. Nghĩa vụ cấp dưỡng của người không trực tiếp nuôi</h3>  
    <p>Cha hoặc mẹ không trực tiếp nuôi con phải cấp dưỡng cho đến khi con đủ 18 tuổi hoặc có khả năng tự lập; trường hợp con đã thành niên nhưng mất năng lực hành vi dân sự, không có khả năng lao động và không có tài sản để tự nuôi mình thì vẫn phải cấp dưỡng. Mức cấp dưỡng căn cứ vào **nhu cầu thiết yếu của con** và **khả năng thực tế** của người có nghĩa vụ; có thể thay đổi khi hoàn cảnh thay đổi. Phương thức cấp dưỡng có thể định kỳ hàng tháng, hàng quý, hàng năm hoặc một lần theo thỏa thuận hoặc quyết định của Tòa án.</p>
    <h3>5.3. Quyền thăm nom, chăm sóc, giám sát của người không trực tiếp nuôi</h3>
    <p>Người không trực tiếp nuôi con có quyền, đồng thời có nghĩa vụ, thăm nom và chăm sóc con mà không ai được cản trở. Nếu việc thăm nom bị lạm dụng (cản trở, kích động, gây ảnh hưởng xấu đến trẻ), Tòa án có thể **hạn chế quyền thăm nom**.</p>
    <h3>5.4. Thay đổi người trực tiếp nuôi con, thay đổi mức cấp dưỡng</h3>
    <p>Khi có căn cứ cho rằng người đang trực tiếp nuôi không còn đủ điều kiện bảo đảm lợi ích tốt nhất của trẻ (ví dụ bạo lực, nghiện ma túy, bỏ mặc, điều kiện sống suy giảm nghiêm trọng…) hoặc khi có thỏa thuận mới, các bên hoặc người thân thích, cơ quan có thẩm quyền có thể yêu cầu Tòa án **thay đổi người trực tiếp nuôi**. Tương tự, mức cấp dưỡng có thể được điều chỉnh khi thu nhập, nhu cầu của con hoặc khả năng của người cấp dưỡng thay đổi.</p>
    <h3>5.5. Biện pháp bảo vệ khẩn cấp và hạn chế quyền của cha, mẹ</h3>
    <p>Trong tình huống có nguy cơ bạo lực, xâm hại đối với trẻ, cơ quan có thẩm quyền có thể áp dụng biện pháp **cấm tiếp xúc**, cho trẻ **tạm lánh** tại nơi an toàn; Tòa án có thể quyết định **hạn chế quyền của cha, mẹ** theo thời hạn nhất định.</p>
    <p>Trong mọi trường hợp, sự phối hợp, tôn trọng lẫn nhau giữa cha mẹ sau ly hôn có ý nghĩa quyết định đối với sự ổn định tâm lý và phát triển của trẻ. Các thỏa thuận về lịch thăm nom, thông tin học tập – y tế, quyết định giáo dục… cần được lập thành văn bản rõ ràng để hạn chế xung đột.</p>
    <h2>6. Cơ chế bảo vệ quyền trẻ em</h2>
    <p>Để quyền trẻ em được bảo đảm trên thực tế, pháp luật thiết kế nhiều kênh và biện pháp bảo vệ đa tầng, bao gồm:</p>
    <h3>6.1. Cơ chế phòng ngừa sớm và hỗ trợ tại cộng đồng</h3>
    <p>Hệ thống cộng tác viên bảo vệ trẻ em, cán bộ lao động – thương binh và xã hội cấp xã, trường học, trạm y tế có trách nhiệm phát hiện sớm dấu hiệu nguy cơ (bạo lực, bỏ học, lao động sớm…), thực hiện đánh giá ban đầu, lập hồ sơ, giới thiệu dịch vụ và theo dõi sau can thiệp. Gia đình là chủ thể chính, được Nhà nước hỗ trợ khi cần.</p>
    <h3>6.2.Can thiệp bảo vệ trẻ em theo ba cấp độ</h3>
    <p>Theo Luật Trẻ em 2016, can thiệp gồm: (i) phòng ngừa; (ii) hỗ trợ; (iii) can thiệp. Biện pháp có thể là tư vấn, tham vấn tâm lý; trợ giúp pháp lý; trợ giúp xã hội khẩn cấp; đưa trẻ tới cơ sở trợ giúp xã hội/nhà tạm lánh; cấm tiếp xúc; chăm sóc thay thế (giám hộ, nuôi dưỡng tạm thời, nhận con nuôi…).</p>
    <h3>6.3. Kênh tiếp nhận thông tin, tố giác</h3>
    <p>Đường dây nóng quốc gia bảo vệ trẻ em **111**; cơ quan công an; Ủy ban nhân dân cấp xã; Phòng Lao động – Thương binh và Xã hội; nhà trường; tổ chức xã hội, đoàn thể. Bất cứ cá nhân nào cũng có quyền và nghĩa vụ thông báo khi phát hiện trẻ bị xâm hại hoặc có nguy cơ bị xâm hại.</p>
    <h3>6.4. Biện pháp dân sự, hành chính, hình sự</h3>
    <p>Tùy tính chất vụ việc, có thể yêu cầu Tòa án: (i) buộc chấm dứt hành vi xâm phạm; (ii) xin lỗi, cải chính; (iii) bồi thường thiệt hại vật chất, tinh thần; (iv) hạn chế quyền của cha, mẹ. Đồng thời, cơ quan quản lý nhà nước có thể xử phạt vi phạm hành chính đối với hành vi vi phạm quyền trẻ; trường hợp nghiêm trọng sẽ khởi tố hình sự.</p>
    <h3>6.5. Thủ tục tố tụng thân thiện với trẻ em</h3>
    <p>Các cơ quan tiến hành tố tụng áp dụng nguyên tắc thân thiện: lấy lời khai, hỏi cung phù hợp tâm lý lứa tuổi; có người đại diện, người bào chữa/trợ giúp pháp lý; hạn chế đối chất trực tiếp với người bị tình nghi; bảo mật danh tính và hình ảnh của trẻ.</p>
    <h3>6.6. Vai trò của nhà trường và cơ sở y tế</h3>
    <p>Trường học xây dựng môi trường an toàn, không bạo lực; quy trình phát hiện, báo cáo và hỗ trợ học sinh bị xâm hại; lồng ghép giáo dục kỹ năng sống, kỹ năng an toàn. Cơ sở y tế triển khai khám, điều trị, giám định; lập hồ sơ y tế; báo cáo kịp thời khi nghi ngờ xâm hại.</p>
    <h3>6.7. Cơ chế quốc tế và hợp tác</h3>
    <p>Việt Nam là thành viên Công ước Quyền trẻ em (CRC) và thực hiện chế độ báo cáo định kỳ; hợp tác với các tổ chức quốc tế và xã hội dân sự trong phòng, chống xâm hại, mua bán, bóc lột trẻ em; tăng cường dịch vụ công tác xã hội chuyên nghiệp.</p>
    <p>Tính hiệu quả của cơ chế bảo vệ phụ thuộc vào sự phối hợp liên ngành, nguồn lực (nhân sự công tác xã hội, dịch vụ tư vấn, nhà tạm lánh), truyền thông thay đổi hành vi và đặc biệt là năng lực làm cha mẹ tích cực trong mỗi gia đình.</p>
    <h2>7. Công tác tư tưởng</h2>
    <p>Bảo vệ quyền trẻ em theo Luật HNGĐ 2014 và các đạo luật liên quan không chỉ là vấn đề pháp lý mà còn là chuẩn mực đạo đức và văn hóa của xã hội Việt Nam. Việc vận dụng nhất quán nguyên tắc lợi ích tốt nhất của trẻ, tôn trọng tiếng nói của trẻ, bảo đảm môi trường gia đình an toàn sẽ quyết định chất lượng nguồn nhân lực và tương lai quốc gia.</p>
    <p>Để nâng cao hiệu quả thực thi, cần: (i) tăng cường truyền thông và giáo dục kỹ năng làm cha mẹ; (ii) mở rộng mạng lưới dịch vụ bảo vệ trẻ em tại cộng đồng; (iii) đào tạo chuyên sâu cho đội ngũ cán bộ bảo vệ trẻ em, điều tra viên, thẩm phán, giáo viên, nhân viên y tế; (iv) hoàn thiện cơ chế phối hợp và chia sẻ dữ liệu giữa các ngành; (v) bảo đảm kinh phí bền vững cho công tác phòng ngừa và can thiệp. Mỗi gia đình, trường học và cộng đồng cần chủ động tham gia, kịp thời thông báo khi phát hiện trẻ có nguy cơ bị xâm hại, cùng kiến tạo một hệ sinh thái bảo vệ trẻ em lấy trẻ làm trung tâm.</p>
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
  ['href'=>'../chuyenmuc/giaoducantoan.php', 'img'=>$base.'assets/cat3.png', 'title'=>'Giáo dục kĩ năng an toàn cho trẻ em.', 'meta'=>'Môi trường giáo dục an toàn là môi trường nuôi dưỡng, chăm sóc, giáo dục trong đó trẻ em được bảo vệ, được đối xử công bằng, nhân ái.'],
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


