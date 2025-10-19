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
    ['href'=>'../tinhot/tinchichsach.php', 'img'=>$base.'assets/tintuchotthucday.webp',   'title'=>'Việt Nam thể hiện cam kết mạnh mẽ trong việc thúc đẩy quyền trẻ em', 'meta'=>'Tin chính sách'],
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
        <h1>Chương trình, chính sách và hoạt động bảo vệ quyền lợi trẻ em tại Việt Nam.</h1>
        <p class="meta">
          Nguồn: <a href="https://thuvienphapluat.vn/van-ban/Van-hoa-Xa-hoi/Quyet-dinh-23-QD-TTg-2021-phe-duyet-Chuong-trinh-hanh-dong-quoc-gia-vi-tre-em-2021-2030-461602.aspx"><strong>Thư viện pháp luật</strong></a><br>
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
        <p>Căn cứ Luật Tổ chức Chính phủ ngày 19 tháng 6 năm 2015; Luật sửa đổi, bổ sung một số điều của Luật Tổ chức Chính phủ và Luật Tổ chức chính quyền địa phương ngày 22 tháng 11 năm 2019;</p>
        <p>Căn cứ Luật Trẻ em ngày 05 tháng 4 năm 2016;</p>
        <p>Căn cứ Nghị quyết số 121/2020/QH14 ngày 19 tháng 6 năm 2020 của Quốc hội về tiếp tục tăng cường hiệu lực, hiệu quả việc thực hiện chính sách, pháp luật về phòng, chống xâm hại trẻ em;</p>
        <p>Căn cứ Nghị định số 56/2017/NĐ-CP ngày 09 tháng 5 năm 2017 của Chính phủ quy định chi tiết một số điều của Luật Trẻ em;</p>
        <p>Căn cứ Nghị định số 80/2017/NĐ-CP ngày 17 tháng 7 năm 2017 của Chính phủ quy định về môi trường giáo dục an toàn, lành mạnh, thân thiện, phòng, chống bạo lực học đường;</p>
        <p>Theo đề nghị của Bộ trưởng Bộ Lao động - Thương binh và Xã hội. Đưa ra <strong>QUYẾT ĐỊNH:</strong></p>
        <h2>Điều 1. Phê duyệt Chương trình hành động quốc gia vì trẻ em giai đoạn 2021 - 2030 (sau đây gọi tắt là Chương trình) với những nội dung sau:</h2>
        <h3>1.1 MỤC TIÊU</h3>
        <h4>1.1.1. Mục tiêu chung</h4>
        <p>Bảo đảm thực hiện các quyền trẻ em, phát triển toàn diện trẻ em nhằm đáp ứng yêu cầu xây dựng nguồn nhân lực có chất lượng cho phát triển kinh tế - xã hội và hội nhập quốc tế; tạo lập môi trường song an toàn, lành mạnh và thân thiện, góp phần hoàn thành các mục tiêu của Chương trình nghị sự 2030 vì sự phát triển bền vững.</p>
        <h4>1.1.2. Mục tiêu cụ thể</h4>
        <p>a) Mục tiêu 1: Về phát triển toàn diện trẻ em, chăm sóc sức khỏe, dinh dưỡng cho trẻ em</p>
        <p>- Chỉ tiêu 1: Tỷ lệ xã, phường, thị trấn đạt tiêu chuẩn phù hợp với trẻ em đạt 65% vào năm 2025 và 75% vào năm 2030.</p>
        <p>- Chỉ tiêu 2: Tỷ lệ trẻ em đến 8 tuổi được tiếp cận các dịch vụ hỗ trợ chăm sóc phát triển toàn diện đạt 90% vào năm 2025 và 95% vào năm 2030.</p>
        <p>- Chỉ tiêu 3: Giảm tỷ suất tử vong trẻ sơ sinh trên 1.000 trẻ đẻ sống dưới 9,5 vào năm 2025 và dưới 9 vào năm 2030; giảm tỷ suất tử vong của trẻ em dưới 1 tuổi trên 1.000 trẻ đẻ sống xuống 12,5 vào năm 2025 và 10 vào năm 2030; giảm tỷ suất tử vong trẻ em dưới 5 tuổi trên 1.000 trẻ đẻ sống dưới 18.5 vào năm 2025 và dưới 15 vào năm 2030.</p>
        <p>- Chỉ tiêu 4: Phấn đấu giảm tỷ lệ trẻ em dưới 5 tuổi bị suy dinh dưỡng thể cân nặng theo tuổi xuống dưới 9% vào năm 2025 và dưới 6% vào năm 2030; giảm tỷ lệ trẻ em dưới 5 tuổi bị suy dinh dưỡng thể chiều cao theo tuổi xuống 17% vào năm 2025 và dưới 15% vào năm 2030; giảm tỷ lệ trẻ dưới 5 tuổi bị suy dinh dưỡng thể béo phì xuống dưới 5% đối với nông thôn và dưới 10% đối với thành thị vào năm 2025 và năm 2030.</p>
        <p>- Chỉ tiêu 5: Tỷ lệ trẻ em dưới 1 tuổi được tiêm chủng đầy đủ 8 loại vắc xin đạt 97% vào năm 2025 và 98% vào năm 2030; 98% trẻ em dưới 5 tuổi được tiêm chủng đầy đủ các loại vắc xin vào năm 2030.</p>
        <p>- Chỉ tiêu 6: Tỷ lệ lây truyền HIV từ mẹ sang con là 2% vào năm 2030.</p>
        <p>- Chỉ tiêu 7: Phấn đấu 100% cơ sở giáo dục cho trẻ em có công trình vệ sinh vào năm 2025 và duy trì 100% đến năm 2030.</p>
         <figure class="article-image">
        <img src="<?= $base ?>assets/csvhd1.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>(Ảnh: Sưu tầm)</figcaption>
      </figure>
        <p>b) Mục tiêu 2: Về bảo vệ trẻ em</p>
        <p>- Chỉ tiêu 8: Giảm tỷ lệ trẻ em có hoàn cảnh đặc biệt trên tổng số trẻ em xuống dưới 6,5% vào năm 2025 và 6% vào năm 2030; 90% trẻ em có hoàn cảnh đặc biệt được chăm sóc, nuôi dưỡng, trợ giúp vào năm 2025 và 95% vào năm 2030.</p>
        <p>- Chỉ tiêu 9: Giảm tỷ lệ trẻ em bị xâm hại trên tổng số trẻ em xuống dưới 4,5% vào năm 2025 và xuống dưới 4% vào năm 2030.</p>
        <p>- Chỉ tiêu 10: Phấn đấu giảm tỷ lệ lao động trẻ em và người chưa thành niên từ 5 đến 17 tuổi xuống 4,9% vào năm 2025 và xuống 4,5% vào năm 2030.</p>
        <p>- Chỉ tiêu 11: Giảm tỷ suất trẻ em bị tai nạn thương tích xuống 550/100.000 trẻ em vào năm 2025 và 500/100.000 vào năm 2030: giảm tỷ suất trẻ em bị tử vong do tai nạn thương tích xuống còn 16/100.000 trẻ em vào năm 2025 và xuống còn 15/100.000 vào năm 2030.</p>
        <p>- Chỉ tiêu 12: Phấn đấu 100% trẻ em gặp thiên tai, thảm họa được cứu trợ, hỗ trợ kịp thời.</p>
        <p>- Chỉ tiêu 13: Từng bước xóa bỏ tình trạng tảo hôn, duy trì mức giảm số cuộc tảo hôn từ 2 đến 3% hằng năm giai đoạn từ năm 2025 đến năm 2030.</p>
        <p>- Chỉ tiêu 14: Tỷ lệ trẻ em dưới 5 tuổi được đăng ký khai sinh đạt 98,5% vào năm 2025, phấn đấu 100% vào năm 2030.</p>
        <p>c) Mục tiêu 3: Về giáo dục, văn hóa, vui chơi, giải trí cho trẻ em</p>
        <p>- Chỉ tiêu 15: Phấn đấu tỷ lệ trẻ em dưới 5 tuổi được phát triển phù hợp về sức khỏe, học tập và tâm lý xã hội đạt 99,1 % vào năm 2025 và 99,3% vào năm 2030.</p>
        <p>- Chỉ tiêu 16: Tỷ lệ huy động trẻ em 5 tuổi đi học mẫu giáo đạt 99,1% vào năm 2025 và 99,3% vào năm 2030.</p>
        <p>- Chỉ tiêu 17: Tỷ lệ trẻ em hoàn thành cấp tiểu học đạt 97% vào năm 2025 và đạt 99% vào năm 2030: phấn đấu giảm tỷ lệ trẻ em bỏ học bậc tiểu học dưới 0,12% vào năm 2025 và dưới 0,1 % vào năm 2030.</p>
        <p>- Chỉ tiêu 18: Tỷ lệ trẻ em hoàn thành cấp trung học cơ sở đạt 88% vào năm 2025 và đạt 93% vào năm 2030: phấn đấu giảm tỷ lệ trẻ em bỏ học cấp trung học cơ sở dưới 0,14% vào năm 2025 và dưới 0,05% vào năm 2030.</p>
        <p>- Chỉ tiêu 19: Phấn đấu 95% trường học có dịch vụ hỗ trợ tâm lý trẻ em vào năm 2025</p>
        <p>- Chỉ tiêu 20: Tỷ lệ trường học có cơ sở hạ tầng và tài liệu phù hợp với học sinh, sinh viên khuyết tật đạt 55% vào năm 2025 và 60% vào năm 2030: tỷ lệ trẻ em khuyết tật có nhu cầu học tập được tiếp cận giáo dục chuyên biệt, giáo dục hòa nhập và hỗ trợ phục hồi chức năng phù hợp đạt 80% vào năm 2025 và đạt 90% vào năm 2030.</p>
        <p>- Chỉ tiêu 21: Phấn đấu tỷ lệ các xã, phường, thị trấn có điểm văn hóa, vui chơi dành cho trẻ em đạt 40% vào năm 2025 và 45% vào năm 2030.</p>
        <p>d) Mục tiêu 4: Về sự tham gia của trẻ em vào các vấn đề về trẻ em</p>
        <p>- Chỉ tiêu 22: Phấn đấu 30% trẻ em từ 07 tuổi trở lên được hỏi ý kiến về các vấn đề của trẻ em với các hình thức phù hợp vào năm 2025 và 35% vào năm 2030./p>
        <p>- Chỉ tiêu 23: Phấn đấu 85% trẻ em được nâng cao nhận thức, năng lực về quyền tham gia của trẻ em vào năm 2025 và 90% vào năm 2030.</p>
        <p>- Chỉ tiêu 24: Tỷ lệ trẻ em từ 11 tuổi trở lên được tham gia vào các mô hình, hoạt động thúc đẩy quyền tham gia của trẻ em đạt 30% vào năm 2025 và 35% vào năm 2030.</p>
          <figure class="article-image">
        <img src="<?= $base ?>assets/csvhd2.webp" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>(Ảnh: Sưu tầm)</figcaption>
      </figure>
      <h3>2. NHIỆM VỤ VÀ GIẢI PHÁP</h3>
      <p>1. Tăng cường sự chỉ đạo, hướng dẫn, phối hợp của các bộ, ngành, địa phương đối với việc thực hiện các mục tiêu, chỉ tiêu của Chương trình</p>
      <p>a) Xây dựng chương trình, đề án, kế hoạch cụ thể để thực hiện các mục tiêu về trẻ em và các Quyết định của Thủ tướng Chính phủ ban hành chương trình, đề án, kế hoạch về trẻ em giai đoạn 2021 - 2025 và đến năm 2030.</p>
      <p>b) Bảo đảm việc lồng ghép các mục tiêu, chỉ tiêu về trẻ em trong kế hoạch phát triển kinh tế - xã hội 5 năm, hàng năm của bộ, ngành, địa phương và xác định cụ thể cơ chế, nguồn lực thực hiện.</p>
      <p>c) Người đứng đầu bộ, ngành, địa phương chịu trách nhiệm lãnh đạo, chỉ đạo việc thực hiện các chính sách, chương trình, kế hoạch, mục tiêu, chỉ tiêu về trẻ em và giải quyết các vấn đề về trẻ em thuộc lĩnh vực, phạm vi bộ, ngành, địa phương quản lý.</p>
      <p>2. Hoàn thiện pháp luật, chính sách bảo đảm thực hiện quyền trẻ em và giải quyết các vấn đề về trẻ em</p>
      <p>a) Nghiên cứu, bổ sung chính sách hỗ trợ chăm sóc, phát triển toàn diện trẻ em đến 8 tuổi, đặc biệt giai đoạn 36 tháng tuổi; các chính sách trợ giúp nhóm trẻ em có hoàn cảnh đặc biệt, trẻ em dân tộc thiểu số và miền núi, trẻ em trong các hộ gia đình nghèo, cận nghèo, trẻ em di cư và trong các gia đình công nhân tại các khu công nghiệp, trẻ em bị ảnh hưởng bởi thiên tai, dịch bệnh, thảm họa.</p>
      <p>b) Hoàn thiện pháp luật, chính sách về bảo vệ trẻ em, phòng, chống xâm hại trẻ em, tư pháp thân thiện với trẻ em và người chưa thành niên.</p>
      <p>3. Phát triển hệ thống dịch vụ đáp ứng thực hiện quyền trẻ em có sự lồng ghép và phối hợp giữa các dịch vụ y tế, giáo dục, tư pháp và các dịch vụ an sinh xã hội; ưu tiên hệ thống dịch vụ bảo vệ trẻ em</p>
      <p>a) Nghiên cứu, xây dựng và phát triển các mạng lưới, mô hình cung cấp dịch vụ bảo vệ, chăm sóc trẻ em có sự lồng ghép, phối hợp, chuyển tuyến liên ngành, liên cấp theo hình thức dịch vụ một cửa và các gói dịch vụ tiếp cận trẻ em, cha mẹ và người chăm sóc trẻ em tại gia đình và cộng đồng.</p>
      <p>b) Đào tạo, bồi dưỡng, phát triển đội ngũ nhân viên công tác xã hội chuyên nghiệp và kiêm nhiệm; đội ngũ cung cấp dịch vụ y tế, giáo dục, tư pháp, bảo vệ trẻ em và các dịch vụ an sinh xã hội khác.</p>
      <p>c) Duy trì, phát triển hệ thống cơ sở có chức năng, nhiệm vụ chuyên biệt cung cấp dịch vụ bảo vệ trẻ em ở cấp trung ương, cấp vùng và cấp tỉnh: duy trì và mở rộng hoạt động của các cơ sở có một phần chức năng, nhiệm vụ cung cấp dịch vụ bảo vệ trẻ em.</p>
      <p>4. Tăng cường truyền thông, giáo dục về kiến thức, kỹ năng thực hiện quyền, bổn phận của trẻ em; vận động xã hội thực hiện các mục tiêu về trẻ em và giải quyết các vấn đề về trẻ em</p>
      <p>a) Đa dạng sản phẩm và các hình thức truyền thông, giáo dục, vận động xã hội trên các phương tiện thông tin đại chúng, môi trường mạng và truyền thông trực tiếp đến gia đình, cơ sở giáo dục và cộng đồng</p>
      <p>b) Chú trọng truyền thông, giáo dục nâng cao kiến thức, kỹ năng thực hiện quyền trẻ em: chăm sóc, phát triển toàn diện trẻ em: tạo lập môi trường sống an toàn, thân thiện cho trẻ em; phòng, chống xâm hại trẻ em; bảo vệ trẻ em trong quá trình tố tụng, xử lý vi phạm hành chính; bảo vệ trẻ em trong thiên tai, thảm họa, dịch bệnh; phòng, chống tai nạn, thương tích trẻ em; thúc đẩy quyền tham gia của trẻ em vào các vấn đề của trẻ em.5. Bảo đảm nguồn lực thực hiện quyền trẻ em và các mục tiêu, chỉ tiêu về trẻ em; ưu tiên bố trí nguồn lực về bảo vệ trẻ em</p>
      <p>5. Bảo đảm nguồn lực thực hiện quyền trẻ em và các mục tiêu, chỉ tiêu về trẻ em; ưu tiên bố trí nguồn lực về bảo vệ trẻ em</p>
      <p>a) Hoàn thiện cơ cấu tổ chức và nhân lực để tăng cường hiệu lực, hiệu quả của công tác quản lý nhà nước về trẻ em; tăng cường phối hợp liên ngành; nâng cao năng lực đội ngũ cán bộ, công chức, viên chức làm việc trong các lĩnh vực bảo vệ, chăm sóc, giáo dục trẻ em; chú trọng ứng dụng công nghệ thông tin trong công tác quản lý điều hành, cung cấp dịch vụ thực hiện quyền trẻ em.</p>
      <figure class="article-image">
        <img src="<?= $base ?>assets/csvhd3.jpg" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>(Ảnh: Sưu tầm)</figcaption>
        </figure>
      <p>b) Phát triển mạng lưới, nâng cao năng lực người được giao làm công tác bảo vệ trẻ em các cấp: ban hành chính sách hỗ trợ người làm công tác bảo vệ trẻ em cấp xã và vận động nguồn lực để phát triển mạng lưới cộng tác viên bảo vệ trẻ em tại cơ sở, cộng đồng dân cư.</p>
      <p>c) Bộ, ngành và địa phương có trách nhiệm bố trí ngân sách để thực hiện các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của Chương trình; ưu tiên các mục tiêu, chỉ tiêu về bảo vệ trẻ em.</p>
      <p>6. Hội nhập và hợp tác quốc tế về quyền trẻ em, giải quyết các vấn đề về trẻ em mang tính toàn cầu và khu vực</p>
      <p>a) Chủ động tham gia các mạng lưới, phong trào toàn cầu và khu vực về quyền trẻ em.</p>
      <p>b) Tích cực trao đổi và áp dụng sáng tạo các giải pháp, kinh nghiệm, mô hình của các quốc gia, các tổ chức khu vực và quốc tế trong việc thực hiện quyền trẻ em, thực hiện các mục tiêu phát triển bền vững và giải quyết các vấn đề liên quan đến trẻ em.</p>
      <p>7. Vận động nguồn lực và sự tham gia của xã hội</p>
      <p>a) Chỉ đạo, hướng dẫn các cơ quan báo chí, tổ chức cá nhân hoạt động trên môi trường mạng ứng dụng công nghệ thông tin, truyền thông, vận động xã hội thực hiện các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của Chương trình; phổ biến kiến thức, kỹ năng về bảo vệ trẻ em, phòng ngừa xâm hại trẻ em trên môi trường mạng.<br>

b) Thực hiện các giải pháp bảo vệ trẻ em, thiết lập các kênh thông tin để tiếp nhận, phản ánh thông tin về bảo vệ trẻ em trên môi trường mạng; bảo đảm quyền bí mật đời sống riêng tư của trẻ em trong hoạt động thông tin, truyền thông.
<br>
c) Nghiên cứu đề xuất các chính sách và giải pháp về công nghệ thông tin để thúc đẩy thực hiện quyền trẻ em, hình thành văn hóa số cho trẻ em, bảo đảm sự an toàn cho trẻ em khi tham gia môi trường mạng; xây dựng, hướng dẫn, thực hiện và phát triển mô hình tăng cường năng lực của trẻ em tiếp cận cuộc cách mạng công nghiệp lần thứ tư.
<br>
d) Nâng cao năng lực cho đội ngũ phóng viên, biên tập viên các cơ quan báo chí về thực hiện quyền trẻ em trong hoạt động thông tin, truyền thông.</p>
    <p>8. Bộ Tài chính chủ trì, tổng hợp, trình cấp có thẩm quyền bố trí kinh phí thường xuyên thực hiện Chương trình trong dự toán ngân sách hàng năm của các bộ, ngành và địa phương theo quy định của Luật Ngân sách nhà.</p>
    <p>9. Các bộ, ngành căn cứ chức năng, nhiệm vụ và quyền hạn được giao có trách nhiệm đưa hoặc lồng ghép các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của Chương trình vào kế hoạch phát triển kinh tế - xã hội 5 năm, hằng năm của bộ, ngành; ban hành hoặc trình Thủ tướng Chính phủ ban hành chương trình, đề án, kế hoạch để giải quyết các vấn đề về trẻ em thuộc lĩnh vực quản lý; báo cáo kết quả thực hiện Chương trình gửi Bộ Lao động - Thương binh và Xã hội để tổng hợp, báo cáo Thủ tướng Chính phủ.</p>
    <p>10. Ủy ban nhân dân các tỉnh, thành phố trực thuộc trung ương</p>
    <p>a) Xây dựng, triển khai thực hiện chương trình, kế hoạch hành động vì trẻ em của địa phương giai đoạn 2021 - 2030 và đưa, lồng ghép các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của chương trình, kế hoạch vào kế hoạch phát triển kinh tế - xã hội 5 năm, hàng năm của địa phương.
<br>
b) Bố trí ngân sách thực hiện các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của chương trình, kế hoạch hành động vì trẻ em của địa phương; đối ứng ngân sách địa phương để thực hiện, nhân rộng các mô hình, giải pháp về thực hiện quyền trẻ em trong các chương trình, kế hoạch, dự án do nguồn ngân sách trung ương và viện trợ quốc tế hỗ trợ; rà soát, ưu tiên đầu tư ngân sách địa phương để duy trì, phát triển các cơ sở có chức năng, nhiệm vụ cung cấp dịch vụ bảo vệ trẻ em trên địa bàn.
<br>
c) Thường xuyên kiểm tra, thanh tra, rà soát việc bảo đảm môi trường sống an toàn, lành mạnh, thân thiện với trẻ em; phòng, chống xâm hại trẻ em và tai nạn, thương tích trẻ em; chỉ đạo xử lý nghiêm và kịp thời các vụ việc xâm hại trẻ em trên địa bàn.
<br>
d) Theo dõi, đánh giá việc thực hiện chương trình, kế hoạch hành động vì trẻ em của địa phương; sơ kết vào năm 2025 và tổng kết vào năm 2030 về kết quả thực hiện chương trình, kế hoạch gửi Bộ Lao động - Thương binh và Xã hội để tổng hợp, báo cáo Thủ tướng Chính phủ.</p>
<p>11. Đề nghị Ủy ban Trung ương Mặt trận Tổ quốc Việt Nam, Trung ương Đoàn Thanh niên Cộng sản Hồ Chí Minh, Trung ương Hội Liên hiệp Phụ nữ Việt Nam và các tổ chức thành viên của Mặt trận Tổ quốc Việt Nam, Hội Bảo vệ quyền trẻ em Việt Nam và các tổ chức xã hội trong phạm vi chức năng, nhiệm vụ của mình tham gia và vận động xã hội tham gia thực hiện các mục tiêu, chỉ tiêu, nhiệm vụ, giải pháp của Chương trình.</p>
<p><strong>Điều 3.</strong>Quyết định này có hiệu lực thi hành kể từ ngày ký ban hành.</p>
<p><strong>Điều 4.</strong>Các Bộ trưởng, Thủ trưởng cơ quan ngang bộ, Thủ trưởng cơ quan thuộc Chính phủ, Thủ trưởng các cơ quan, tổ chức liên quan, Chủ tịch Ủy ban nhân dân tỉnh, thành phố trực thuộc trung ương trách nhiệm thi hành Quyết định này.</p>
    <figure class="article-image">
        <img src="<?= $base ?>assets/csvhd4.webpy" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
        <figcaption>(Ảnh: Sưu tầm)</figcaption>
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


