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
        <h1>Bảo vệ trẻ em trên không gian mạng</h1>
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
        <p>Không gian mạng, Internet đã và đang trở thành một phần 
không thể tách rời của cuộc sống, đặc biệt đối với trẻ em là những 
đối tượng đang sử dụng công nghệ vào trong học tập và sinh hoạt 
hàng ngày. Theo báo cáo của Tổng cục Thống kê, tới hết năm 2023, 
dân số Việt Nam đạt khoảng 100,3 triệu người, trẻ em chiếm gần 1/4 
dân số, trong đó 2/3 trẻ em có thể tiếp cận thiết bị kết nối Internet. 
Cũng số liệu Trung tâm quốc gia về trẻ theo em mất tích và bị bóc lột 
(NCMEC), năm 2023  có khoảng 533.236 báo cáo về hình ảnh/video 
xâm hại tình dục trẻ   em trên mạng liên quan tới  Việt Nam - đứng 
thứ 3 trong ASEAN, sau Indonesia và Phillipine. Thực tế đó cho thấy, 
không gian mạng đang có ảnh hưởng quan trọng đối với sự phát 
triển của trẻ em.</p>
<p> Đối với trẻ em, đối tượng chưa có đầy đủ kiến thức, kỹ năng, kinh 
nghiệm khi tham gia hoạt động trên môi trường mạng sẽ đối mặt với 
rất nhiều rủi ro như: (1) Tiếp cận với những nội dung độc hại (bạo lực, 
khiêu dâm,…) làm lệch lạc suy nghĩ, lối sống, sự phát triển; (2) Bị phát 
tán thông tin riêng tư, thông tin cá nhân của trẻ; (3) Bị bắt nạt trực 
tuyến; (4) Sử dụng quá mức và nghiện Internet; (5) Bị lôi kéo, dụ dỗ, 
quấy rối, lừa đảo, dọa nạt, tống tiền, ép tham gia các hoạt động phi 
pháp, mại dâm, bị xâm hại tình dục,…<br>
 Ngày 01/6/2021, Thủ tướng Chính phủ đã ban hành Quyết định 
số 830/QĐ-TTg phê duyệt Chương trình “Bảo vệ và hỗ trợ trẻ em 
tương tác lành mạnh, sáng tạo trên môi trường mạng giai đoạn 2021 – 2025”. Chương trình có “mục tiêu kép” gồm: (1) Bảo vệ bí mật đời 
sống riêng tư và ngăn chặn, xử lý các hành vi lợi dụng môi trường 
mạng để xâm hại trẻ em, trong đó đặc biệt chú trọng đến việc trang 
bị cho trẻ em kiến thức, kỹ năng phù hợp theo từng lứa tuổi để trẻ em 
tự nhận biết và có khả năng tự bảo vệ mình trên môi trường mạng. 
(2) Duy trì một môi trường mạng lành mạnh, phát triển hệ sinh thái 
các sản phẩm, ứng dụng Việt cho trẻ em học tập, kết nối, giải trí một 
cách sáng tạo. <br>
Cục An toàn thông tin đã phối hợp với các cơ quan, đơn vị và các 
chuyên gia trong công tác bảo vệ trẻ em biên soạn, xuất bản cuốn 
sách: “Bộ cẩm nang về bảo vệ trẻ em trên không gian mạng” nhằm 
mục đích cung cấp những kiến thức cơ bản, cốt lõi theo từng nhóm 
tuổi phù hợp để trẻ em tự bảo vệ bản thân và phụ huynh cùng tham gia bảo vệ con em mình sinh hoạt trên môi trường mạng.</p>
<p>Bộ cẩm nang được biên soạn gồm có 5 phần: </p>
<p>	- Phần I: Cẩm nang chung - Cung cấp các thông tin cơ bản về 
Internet, lợi ích, rủi ro trên môi trường mạng với trẻ em, một số khái 
niệm về bảo vệ trẻ em trên môi trường mạng; hướng dẫn cách thức 
phản ánh khi phát hiện nội dung độc hại, nội dung không phù hợp 
đối với trẻ em. <br>
	- Phần II: Cẩm nang cho trẻ dưới 6 tuổi - Giai đoạn ươm mầm: 
Đây là lứa tuổi trẻ em mới bắt đầu tiếp cận với Internet dưới sự hướng 
dẫn hỗ trợ của cha mẹ, thầy cô. Phần nội dung này chủ yếu để hướng 
dẫn cho cha mẹ, thầy cô cách để hướng dẫn ban đầu cho trẻ em 
tham gia môi trường mạng. <br>
	- Phần III: Cẩm nang cho trẻ từ 6 tới 11 tuổi - Giai đoạn phát 
triển: Đây là lứa tuổi trẻ em đã bắt đầu học tập và tìm hiểu tương tác 
trên môi trường mạng trong một giới hạn nhất định, bắt đầu hình 
thành các kỹ năng số. Phần nội dung này gồm các hướng dẫn dành 
cho trẻ em hình thành các kỹ năng ban đầu và hướng dẫn, lời khuyên 
dành cho phụ huynh để hỗ trợ con một cách hiệu quả. <br>
	- Phần IV: Cẩm nang cho trẻ từ 11 tới 16 tuổi - Giai đoạn tiền 
trưởng thành: Đây là lứa tuổi trẻ em đã bắt đầu sử dụng Internet 
một cách độc lập. Phần nội dung chính vì thế sẽ bao gồm các hướng 
dẫn cụ thể cho trẻ em trong hình thành các kỹ năng cụ thể sử dụng 
Internet an toàn, lành mạnh và có trách nhiệm. <br>
	- Phần V: Một số công cụ, phần mềm hỗ trợ bảo vệ trẻ em trên 
môi trường mạng.<br>
 Hy vọng rằng, với những kiến thức và kỹ năng cơ bản này sẽ 
giúp cho phụ huynh, người chăm sóc trẻ và trẻ em có thể tự tin tham 
gia môi trường mạng an toàn. </p>
<h2>PHẦN 1: Cẩm nang chung</h2>
<h3>1.1. TỔNG QUAN INTERNET</h3>
<strong>1.1.1. Internet và các đặc tính </strong>
<p> Internet là một hệ thống thông tin toàn cầu có thể được truy cập 
công cộng gồm các mạng máy tính được liên kết với nhau. Internet 
có thể kết nối bởi máy tính, điện thoại thông minh, máy tính bảng, ...</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm1.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption> Biểu đồ 1: 6 đặc tính của Internet</figcaption>
</figure>
<strong> 1.1.2. Tình hình sử dụng Internet tại Việt Nam</strong>
<p>- Tình hình sử dụng Internet tại Việt Nam:</p>
<p>Theo số liệu thống kê của We are Social, tính tới QI/2024, số lượng 
người dùng Internet ở Việt Nam là 78,44 triệu người, tăng 0,6% so 
với năm 2023 (chiếm 79,1% dân số); số người sử dụng mạng xã hội 
ở Việt Nam là gần 72.7 triệu người, tăng gần 6.5 triệu người trong 
vòng 1 năm (tương đương 73,3% dân số). Với con số này, Việt Nam 
là quốc gia có lượng người dùng Internet cao trên toàn thế giới. 
Người dùng Việt Nam dành trung bình 6 giờ 18 phút mỗi ngày để 
tham gia các hoạt động liên quan tới Internet và tỉ lệ người dùng 
Internet ở Việt Nam sử dụng Internet hàng ngày lên tới 94%, trong 
đó có trẻ em. </p>
<p>- Tình hình sử dụng Internet của Trẻ em</p>
<p> Nghiên cứu “Tiếng nói trẻ em Việt Nam” năm 2024 của Viện 
Nghiên cứu Quản lý phát triển bền vững (MSD) và Tổ chức Cứu trợ 
trẻ em quốc tế cho thấy bên cạnh các môi trường gia đình, trường 
học  và cộng đồng, môi trường mạng đang ngày càng có vai trò 
quan trọng đối với trẻ em.  <br>
Cụ thể, theo kết quả khảo sát, có tới 83,9% trẻ em tham gia khảo 
sát có sử dụng điện thoại, và tỷ lệ sử dụng mạng xã hội là 86,1%. 
97% trẻ em tham gia khảo sát sử dụng điện thoại từ 1 giờ/ ngày, 
trong đó gần 27% sử dụng tới 5 giờ/ngày. Mục đích sử dụng lớn 
nhất là giải trí, chiếm tới 86%; trong khi tỷ lệ sử dụng cho học tập, 
tìm kiếm thông tin, giao lưu kết bạn lần lượt là 75%, trên 66% và 
trên 57%.   <br>
Một điểm đáng mừng của kết quả khảo sát Tiếng nói trẻ em Việt 
Nam 2024 là tỷ lệ trẻ em đã được học những nội dung/kĩ năng để 
bảo vệ bản thân trên môi trường mạng là khá cao. Các nội dung 
quan trọng đều có tỷ lệ trên 70%. Nội dung về phòng ngừa bắt nạt 
qua mạng xã hội thấp nhất cũng đạt 63.4%.   <br>
Tuy nhiên, tỷ lệ trẻ em tự học các kiến thức này qua mạng xã 
hội lại có tỷ lệ cao nhất trong các kênh thông tin. Đây có thể vừa là 
một điều tích cực, nhưng cũng hàm chứa nhiều rủi ro xuất phát từ 
việc là điều hạn chế vì lúc này nhận thức của trẻ em còn chưa đầy 
đủ, cũng như những thông tin, kiến thức trên mạng xã hội luôn 
luôn cần kiểm chứng về độ chính xác. Do đó, 
cần tăng cường các kênh thông tin khác, 
nhất là các thông tin từ trường học, 
vì hiện còn khá thấp, chỉ đạt 56%. 
Ngoài ra, cha mẹ cũng cần nâng 
cao kĩ năng về an toàn mạng để 
có thể đồng hành và hỗ trợ con 
mình trong tiến trình này, vì hơn 
một nửa trẻ tham gia khảo sát tìm 
hiểu kiến thức qua cha mẹ.</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm2.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption> Biểu đồ 2: Tỷ lệ mục đích sử dụng Internet của trẻ em (Nguồn: MSD)</figcaption>
</figure>
<p>- Mục đích trẻ sử dụng internet</p>
<p> a) Tiếp cận thông tin, kiến thức, học tập<br>
 Trẻ em sử dụng Internet để tiếp cận, tìm kiếm thông tin kiến thức 
phục vụ học tập. Thông qua các trang web tìm kiếm thông tin trên 
Internet như Google, Bing có thể cung cấp cho trẻ em bất kỳ một 
thông tin nào mà người học mong muốn. <br>
b) Kết nối, giao tiếp và chia sẻ
 Trẻ em có thể sử dụng Internet để gửi mail, trò chuyện, kết nối bạn 
bè trên các trang mạng xã hội hoặc tham gia các lớp học trực tuyến. 
c) Phát triển bản thân<br>
 Internet hỗ trợ trẻ em sáng tạo với vô vàn kiến thức có thể học 
tập như: lập trình, chơi các loại nhạc cụ, làm đồ chơi, nhảy múa, học 
nấu ăn…, tìm kiếm thông tin cần thiết không bị giới hạn thời gian và 
không gian, khám phá và trải nghiệm nhiều kiến thức, lĩnh vực mới.  
d) Giải trí<br>
 Thông qua Internet, trẻ em có thêm nhiều nội dung giải trí như: trò 
chơi điện tử trực tuyến, các trang tin tức giải trí, phim trực tuyến ...</p>
<h3>1.2. Bảo vệ trẻ em trên môi trường mạng</h3>
<strong>1.2.1. Rủi ro trên môi trường mạng với trẻ em</strong>
<p>Rủi ro đối với trẻ em trên môi trường mạng là những yếu tố, hành 
vi tiêu cực, những nguy cơ mà trẻ em có thể gặp phải khi tham gia 
hoạt động trên môi trường mạng có khả năng tác động, gây tổn hại 
về thể chất, tình cảm, tâm lý, danh dự, nhân phẩm, quyền riêng tư 
của trẻ em khi tham gia hoạt động trên môi trường mạng.<br>
 Tương ứng với 6 đặc tính của Internet, người dùng, bao gồm cả trẻ 
em có thể tận hưởng các lợi ích hoặc có thể phải gặp phải các rủi ro 
trên môi trường mạng.<br>
 Ví dụ với đặc tính Ẩn danh của Internet, bất kỳ ai cũng có thể đăng 
ký tài khoản trên mạng và che giấu danh tính thật của mình. Chính vì 
thế, trẻ em có thể bị rủi ro kết bạn với người xấu mà không biết hoặc 
bị kẻ ẩn danh nói xấu, bắt nạt trực tuyến. Một ví dụ khác với đặc tính 
Nguồn thông tin, bất kỳ ai cũng có thể đăng tải và chia sẻ thông tin, 
chính vì thế, nguồn thông tin có thể không chính xác, hoặc tin giả 
khiến các người dùng trẻ tuổi của chúng ta chưa 
biết phân biệt. Ngoài ra, với đặc tính Vĩnh viễn, 
một khi các thông tin đã được đăng tải trên 
môi trường mạng, kể cả sau đó có bị xóa đi, 
các thông tin sẽ tồn tại vĩnh viễn. Chính vì 
thế, thông tin xấu về trẻ, sai lệch hoặc bị bắt 
nạt, hình ảnh nhạy cảm, ... một khi bị đưa lên 
mạng sẽ vẫn tồn tại dưới một dạng thức nào đó 
trên môi trường mạng.<br>
Môi trường mạng có rất nhiều rủi ro 
tương ứng với các đặc tính của Internet, và 
luôn phát triển theo hướng nghiêm trọng 
và không lường hết được. Qua thống kê 
khảo sát và các kinh nghiệm, 
trẻ em thường gặp trên môi trường mạng bao 
gồm:
 Tiếp cận thông tin không phù hợp, nội dung 
độc hại (bạo lực, thù địch, nội dung cực đoan, 
khiêu dâm, nội dung chưa xác thực từ các 
ứng dụng/công cụ AI…);<br>
 Bị rò rỉ, lộ lọt thông tin bí mật đời sống 
riêng tư, bí mật cá nhân của trẻ em; đăng tải 
bí mật đời sống riêng tư, bí mật cá nhân 
của trẻ em mà chưa được sự đồng ý của 
cha, mẹ, người chăm sóc trẻ em và trẻ 
em theo quy định của pháp luật; <br>- Bắt nạt trực tuyến (hay còn gọi là “Bắt nạt trên mạng”)</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm3.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>- Sử dụng quá mức gây nghiện (Nghiện Game, nghiện Internet, 
nghiện mạng xã hội</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm4.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>- Bị lôi kéo, dụ dỗ, quấy rối, lừa đảo, dọa nạt, tống tiền, ép tham gia 
các hoạt động phi pháp, mại dâm, bị xâm hại tình dục:</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm5.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p> Báo cáo Tiếng nói trẻ em Việt Nam của MSD chỉ ra các rủi ro mà trẻ 
em nhận thấy hay gặp nhất là các rủi ro liên quan đến bị lộ thông tin 
cá nhân, nghiện mạng xã hội, bị nhắn tin hoặc quấy rối qua tin nhắn, 
bị kết bạn xấu, ...</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm6.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p> Ngoài ra, lưu ý rằng một khi trẻ em hay bất kỳ người dùng nào sử 
dụng Internet, tức là đã tham gia vào một xã hội, có danh tính số và 
dấu chân kỹ thuật số.  <br>
Danh tính số là những thứ cho người khác biết bạn là ai, là những 
thứ đặc biệt phân biệt bạn với những người khác, bao gồm:<br>
- Thông tin cá nhân: Họ tên, ngày tháng năm sinh, số điện thoại, 
địa chỉ nhà, địa chỉ email,...
<br>- Tính cách.
<br>- Tín ngưỡng.
<br>- Những thứ mà bạn theo đuổi.
<br>- Sở thích riêng của bản thân.
<br>-...</p>
<p> Tất cả những thứ đó khi được đưa lên mạng Internet hoặc là đăng 
lên, chia sẻ lên mạng Internet, mạng xã hội,... tạo thành danh tính số.<br>
 Dấu chân kỹ thuật số là dấu vết người dùng để lại khi sử dụng 
Internet, như tin nhắn, email, hình ảnh và trò chuyện trực tuyến và 
hiện lên với mọi người dùng mạng. Giống như chúng ta đi để lại dấu 
chân, dấu chân kỹ thuật số khiến người khác có thể lần theo dấu vết 
của bạn.<br>
 Chính vì thế, việc danh tính số và dấu chân kỹ thuật số sẽ có thể 
quyết định trẻ em khi lên môi trường mạng sẽ có danh tính và dấu 
chân kỹ thuật số tích cực hay tiêu cực đồng thời có thể dễ gặp các rủi 
ro trên môi trường mạng hay không.</p>
<strong>1.2.2. Biện pháp bảo vệ trẻ em trên môi trường mạng</strong>
<p> Bảo vệ trẻ em trên môi trường mạng là thực hiện các biện pháp và 
hành động phù hợp để bảo đảm trẻ em được sử dụng môi trường 
mạng an toàn, lành mạnh, cụ thể:<br>
 - Phòng ngừa: Tuyên truyền, nâng cao nhận thức, trang bị kiến 
thức về bảo vệ trẻ em, xây dựng môi trường an toàn, giảm nguy cơ 
trẻ em bị xâm hại;
<br>- Hỗ trợ: Kịp thời phát hiện, giảm, loại bỏ nguy cơ gây tổn hại cho 
trẻ em; 
<br>- Can thiệp: Ngăn chặn hành vi xâm hại, chăm sóc phục hồi, tái hòa 
nhập cộng đồng.</p>
<strong> 1.2.3. Mạng lưới ứng cứu, bảo vệ trẻ em trên môi trường mạng</strong>
<p> Mạng lưới ứng cứu, bảo vệ trẻ em trên môi trường mạng (Viet 
Nam’s Network for Child Online Protection (VN-COP)) là tổ chức phối 
hợp liên ngành giúp Bộ trưởng Bộ Thông tin và Truyền thông tăng 
cường hiệu lực, hiệu quả quản lý nhà nước và kết quả thực thi các 
nhiệm vụ phòng, chống xâm hại trẻ em trên môi trường mạng, góp 
phần nâng cao nhận thức xã hội và tạo lập một môi trường mạng an 
toàn, lành mạnh cho trẻ em.<br>
 Cục An toàn thông tin - Bộ Thông tin và Truyền thông là cơ quan 
điều phối Mạng lưới. <br>
Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam (VNCERT/ 
CC) là cơ quan thường trực của Ban điều hành Mạng lưới.<br>
 Hotline: 0796863111.<br>
 Website: https://vn-cop.vn/</p>
 <strong>1.2.4. Mạng lưới có các chức năng, nhiệm vụ như sau:</strong>
 <p>1. 
Đẩy mạnh truyền thông, góp phần nâng cao nhận thức xã hội 
về hoạt động bảo vệ trẻ em trên môi trường mạng.<br>
 2. 
Tiếp nhận phản ánh, thu thập thông tin về các hành vi xâm 
hại trẻ em trên môi trường mạng. <br>
3. 
Tổng hợp, phân loại và điều phối các thành viên Mạng lưới xử lý 
các phản ánh, thông tin về hành vi xâm hại trẻ em trên môi trường mạng.<br>
 4. 
Thúc đẩy xây dựng hệ sinh thái các sản phẩm, nội dung lành 
mạnh, sáng tạo cho trẻ em trên môi trường mạng.<br>
 5. 
Tổ chức các hoạt động nâng cao năng lực, tập huấn, chia 
sẻ kinh nghiệm, hướng dẫn các biện pháp bảo vệ trẻ em trên môi 
trường mạng.<br>
 6. 
Ban hành, phổ biến và vận động thực hiện Bộ Quy tắc ứng xử, 
bảo vệ trẻ em trên môi trường mạng.<br>
 7. 
Kết nối với các mạng lưới bảo vệ trẻ em quốc tế nhằm nâng 
cao hình ảnh Việt Nam trong hoạt động bảo vệ trẻ em trên môi 
trường mạng.<br>
 8. 
Tư vấn, đề xuất chính sách, quy định về bảo vệ trẻ em trên 
môi trường mạng cho các cơ quan nhà nước có thẩm quyền.</p>
<strong>1.2.5. Tổng đài điện thoại Quốc gia Bảo vệ Trẻ em (số 111)</strong>
<p> Tổng đài điện thoại Quốc gia Bảo vệ Trẻ em là dịch vụ công đặc 
biệt thành lập theo quy định của Luật trẻ em năm 2016, chịu sự quản 
lý của Trung tâm Tư vấn và Dịch vụ Truyền Thông thuộc Cục Trẻ em - 
Bộ Lao động Thương binh và Xã hội, thực hiện các nhiệm vụ:<br>
 1. Bộ Lao động - Thương binh và Xã hội tiếp nhận thông báo, tố 
giác từ cơ quan, tổ chức, cơ sở giáo dục, gia đình, cá nhân qua điện 
thoại. <br>
2. Liên hệ với các cá nhân, cơ quan, tổ chức có liên quan hoặc 
có thẩm quyền; khai thác thông tin trên phương tiện thông tin đại 
chúng, môi trường mạng về nguy cơ, hành vi xâm hại trẻ em để 
kiểm tra thông tin, thông báo, tố giác ban đầu.<br>
 3. Chuyển, cung cấp thông tin, thông báo, tố giác hoặc giới thiệu 
trẻ em có nguy cơ hoặc bị xâm hại, trẻ em có hoàn cảnh đặc biệt, 
cha, mẹ, người chăm sóc trẻ em tới các cơ quan, tổ chức, cá nhân 
có thẩm quyền, chức năng bảo vệ trẻ em.<br>
 4. Phối hợp với các cơ quan, tổ chức, cá nhân, cơ sở cung cấp 
dịch vụ bảo vệ trẻ em, cá nhân có thẩm quyền, chức năng bảo vệ 
trẻ em trong phạm vi toàn quốc để đáp ứng việc tiếp nhận, trao 
đổi, xác minh thông tin, thông báo, tố giác về trẻ em bị xâm hại 
hoặc có nguy cơ bị bạo lực, bóc lột, bỏ rơi.<br>
 5. Hỗ trợ người làm công tác bảo vệ trẻ em cấp xã trong việc xây 
dựng, thực hiện kế hoạch hỗ trợ, can thiệp đối với từng trường hợp 
trẻ em bị xâm hại hoặc có nguy cơ bị bạo lực, bóc lột, bỏ rơi; theo 
dõi, đánh giá việc xây dựng và thực hiện kế hoạch này.<br>
 6. Tư vấn tâm lý, pháp luật, chính sách cho trẻ em, cha, mẹ, thành 
viên gia đình, người chăm sóc trẻ em.<br>
 7. Lưu trữ, phân tích, tổng hợp thông tin để cung cấp, thông tin, 
thông báo, tố giác khi có yêu cầu của các cơ quan, tổ chức, cá nhân 
có thẩm quyền, đối với vụ việc xâm hại trẻ em và các cơ sở cung 
cấp dịch vụ bảo vệ trẻ em; thực hiện báo cáo định kỳ, đột xuất cho 
cơ quan quản lý nhà nước về trẻ em và các cơ quan khác có thẩm 
quyền, trách nhiệm về bảo vệ trẻ em</p>
<strong>1.2.6. Cách thức phản ánh nội dung độc hại, hành vi xâm hại 
trẻ em trên môi trường mạng</strong>
<p> Ngay khi phát hiện nội dung độc hại, hành vi xâm hại đối với trẻ 
em trên kmôi trường mạng, người phát hiện cần thực hiện phản 
ánh ngay tới các đầu mối tiếp nhận cụ thể như sau:</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm7.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<strong> 1.2.7. Các quy tắc ứng xử cơ bản bảo vệ trẻ em trên môi 
trường mạng</strong>
<p> Quy tắc ứng xử chung trên môi trường mạng:<br> 
1. Tuân thủ pháp luật Việt Nam về bảo vệ trẻ em, tôn trọng 
quyền và lợi ích hợp pháp của trẻ em, không gây tổn hại cho trẻ 
em trên nguyên tắc vì lợi ích tốt nhất của trẻ em.<br> 
 2. Ứng xử lành mạnh, tích cực, phù hợp với văn hóa, thuần 
phong mỹ tục của Việt Nam và phù hợp với độ tuổi trẻ em trên 
môi trường mạng.<br> 
 3. Không sử dụng các hình ảnh và bí mật đời sống riêng tư, bí 
mật cá nhân của trẻ em mà chưa được sự đồng ý của trẻ, cha, mẹ 
và người chăm sóc trẻ em; không sử dụng các hình ảnh và thông 
tin cá nhân của trẻ em cho các mục đích ảnh hưởng tới sự an toàn, 
phát triển lành mạnh của trẻ em.<br> 
 4. Tích cực phối hợp với các cơ quan, tổ chức về bảo vệ trẻ em 
để ngăn chặn nội dung độc hại đối với trẻ em, xử lý các hành vi 
xâm hại trẻ em.</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm8.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>5. Khi nghi ngờ hoặc phát hiện các hành vi xâm hại trẻ em, nội 
dung độc hại đối với trẻ em cần khẩn trương phản ánh, tố giác tới 
một trong các cơ quan được đề cập tại mục 1.2.5 (trang 17,18).</p>
<figure class="article-image">
    <b><i style="color: red;">Quy tắc ứng xử của trẻ em trên môi trường mạng:</i></b>
<img src="<?= $base ?>assets/atm9.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<figure class="article-image">
    <b><i style="color: red;">Quy tắc ứng xử của phụ huynh trên môi trường mạng:</i></b>
<img src="<?= $base ?>assets/atm10.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<h2> PHẦN 2: GIAI ĐOẠN ƯƠM MẦM (Trẻ em từ 0 - 6 tuổi) </h2>
<h3>2.1. Tâm sinh lý của trẻ ở độ tuổi 0 - dưới 6 tuổi</h3>
<strong> 2.1.1. Giai đoạn 0 – dưới 3 tuổi</strong>
<p>Ở giai đoạn này, trẻ em không cần và không nên tiếp xúc với các 
thiết bị kỹ thuật số dù với bất kỳ lý do gì. Đây là giai đoạn trẻ cần 
được sự quan tâm, yêu thương, tương tác thực tế, để phát triển 
ngôn ngữ, giao tiếp, vận động. Việc tiếp xúc thiết bị công nghệ 
giai đoạn này có thể gây ra hiện tượng mất cân bằng trong quá 
trình phát triển trí não của trẻ nhỏ. Trẻ tiếp cận nhiều thiết bị điện 
tử, tiếp xúc mạng quá sớm trong giai đoạn này có thể bị chậm 
phát triển ngôn ngữ, có các vấn đề về khả năng tập trung và phản 
xạ khi lớn lên.</p>
<strong> 2.1.2. Giai đoạn 3 – dưới 6 tuổi</strong>
<p> Trong giai đoạn 3 – dưới 6 tuổi, trẻ khám phá thế giới xung 
quanh một cách nhanh chóng, tiếp xúc với xung quanh bằng các 
giác quan khác nhau, phát triển ngôn ngữ. Trẻ thích thú trong các 
hoạt động trò chơi, khám phá thế giới xung quanh và đặt các câu 
hỏi tại sao và bắt đầu đưa ra các ý kiến. Giai đoạn này cái tôi của 
trẻ được hình thành, trong quan hệ tình cảm trẻ tiến tới nhận ra vị 
trí của mình với mọi người. Đây được coi là độ tuổi vàng để phát 
triển trí tuệ, kỹ năng cho trẻ. Vì vậy, để trẻ phát triển toàn diện và 
vượt bậc trong giai đoạn này, người lớn cần nhiều thời gian tổ 
chức các hoạt động vui chơi, khám phá môi trường xung quanh 
thay vì việc dành thời gian cho trẻ tiếp xúc quá nhiều với các thiết 
bị công nghệ</p>
<strong> 2.2. Những lưu ý dành cho trẻ khi gặp rủi ro</strong>
<p>Trẻ em mẫu giáo thường gặp 2 loại rủi ro chính:</p>
<p> 1. Tiếp cận thông tin không phù hợp, nội dung độc hại 
Những rủi ro này bao gồm:<br>
 - Những nội dung khiến trẻ cảm thấy bất an, sợ hãi, hoang 
mang. Ví dụ: phim hoạt hình có nội dung ma quái, chém giết hay 
khiêu dâm, hình ảnh tàn ác với động vật hoặc các nội dung chỉ 
thích hợp cho trẻ lớn hơn.<br>
- Trẻ em bắt chước theo các hướng dẫn tiêu cực gây tổn hại cho 
bản thân và/hoặc làm tổn thương người khác. Ví dụ: bắt chước các 
trò chơi, thử thách nguy hiểm như trốn vào tủ lạnh, máy giặt, treo 
cổ, ... hay phá hủy trò chơi, ứng dụng của người khác tạo nên, ...</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm11.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p> 2. Rò rỉ, lộ, mất thông tin </p>
<p>Trẻ bị rò rỉ, lộ thông tin cá nhân do thói quen của bố mẹ hoặc 
người thân vô tình đăng tải thông tin bí mật riêng tư, bí mật đời 
sống cá nhân của trẻ mà chưa được phép; hoặc trẻ chấp nhận một 
cách vô thức vào các giao dịch hợp đồng trên mạng một cách 
không công bằng, hoặc chấp nhận các điều kiện mà trẻ không 
biết hoặc không hiểu. Ví dụ: trẻ có thể click (nhấp) vào đồng ý cho 
phép doanh nghiệp hay chủ các trang mạng truy cập vào dữ liệu 
của thiết bị trẻ đang sử dụng, hoặc gửi tới trẻ, gia đình các tài liệu 
không phù hợp.</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm12.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<strong>2.3. Kỹ năng trẻ cần có</strong>
<p> Kỹ năng lắng nghe và làm theo hướng dẫn – Kỹ năng báo 
cáo <br>
 Ở giai đoạn này, trẻ nên nghe theo mọi sự chỉ dẫn của cha mẹ 
và người chăm sóc trẻ. Tuyệt đối không được tự ý sử dụng, tham 
gia vào môi trường Internet một cách độc lập. Vì ở giai đoạn này 
trẻ chưa có nhiều nhận thức về các mối nguy hiểm đang rình rập 
trên môi trường mạng, do đó phụ huynh và người chăm sóc trẻ 
sẽ là người hướng dẫn và đồng hành cùng con để khám phá môi 
trường mạng trong giai đoạn này</p>
<strong> 2.4. Những lưu ý dành cho phụ huynh và người chăm sóc trẻ 
để giáo dục trẻ ở độ tuổi dưới 6 tuổi</strong>
<p> Ở độ tuổi này, trẻ chưa nên sử dụng Internet một cách độc lập. 
Chúng tôi khuyến cáo trong giai đoạn này, cha mẹ nên cùng trẻ 
xem các chương trình hoặc đảm bảo rằng những tương tác trên 
mạng và các chương trình trẻ xem đều nằm trong tầm mắt của bố 
mẹ, tránh tình trạng trẻ thoát khỏi tài khoản hoặc chẳng may các 
chương trình chặn, lọc của ứng dụng không đảm bảo, trẻ gặp phải 
các chương trình không phù hợp. <br>
Chúng tôi khuyến nghị các kỹ năng sau cho trẻ nhỏ và phụ 
huynh cần được quan tâm:  </p>
<p>a. Thiết lập tài khoản cho trẻ và xác định danh tính số của trẻ 
    <br>- Trẻ em giai đoạn này bố mẹ có thể giúp lập các tài khoản trên 
mạng và kết nối với tài khoản của bố mẹ qua các chức năng kết 
nối theo dõi của phụ huynh. Việc lập tài khoản và khai báo độ tuổi 
của trẻ sẽ giúp các ứng dụng này phân loại và cung cấp nội dung 
phù hợp cho trẻ, cha mẹ cũng có thể thảo luận và cùng con xác 
định danh sách các chương trình mà con có thể xem phù hợp với sở thích của trẻ. Cha mẹ hãy giúp trẻ nhận thức rằng đây là tài 
khoản của con để tăng tính sở hữu của trẻ, đảm bảo trẻ sẽ truy cập 
khi sử dụng Internet.</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm13.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>- Thiết lập một thư mục có dấu trang cho các ứng dụng hoặc 
trang web yêu thích của con để con có thể dễ dàng tìm thấy 
chúng. Phụ huynh có thể thiết lập các thư mục và dấu trang trên 
tất cả các thiết bị mà con bạn sử dụng. Nếu con có thêm chương 
trình nào muốn xem, hãy cùng thảo luận với cha mẹ. Phụ huynh 
cũng có thể kiểm tra xem các trò chơi, trang web và chương trình 
Tivi có phù hợp với trẻ em hay không thông qua các bài đánh giá 
trên Common Sense Media</p>
<figure class="article-image">
<figcaption><b><i style="color:red">Cha mẹ tuyệt đối không lập cho con các tài khoản trên các 
ứng dụng khi con chưa đủ tuổi bằng cách khai báo sai tuổi 
hoặc sử dụng các thiết bị/tài khoản của bố mẹ để truy cập</i></b></figcaption>
</figure>
<p>b. Quản lý thời gian tiếp xúc với màn hình 
<br>Trẻ em độ tuổi 0-3 không nên tiếp xúc với màn hình dù là Tivi 
hay xem/chơi các chương trình trên Internet, trẻ từ 3-6 tuổi không 
nên tiếp xúc với màn hình dù là Tivi hay xem/chơi các chương trình 
trên Internet quá 1 giờ/ngày. Cha mẹ có thể cài đặt các ứng dụng 
để đảm bảo thời gian con xem không quá 1 giờ. Lưu ý rằng khi 
cài đặt thời gian, cha mẹ cũng nên giải thích trước với con để con 
hiểu rằng chỉ nên xem các chương trình này dưới 1 giờ/ngày để 
đảm bảo sức khoẻ cho con, kết thúc hoạt động này còn rất nhiều 
các hoạt động thú vị khác mà con có thể tham gia. Để tránh trẻ mè 
nheo, đòi hỏi và có thể khóc, sốc, khi kết thúc chương trình một 
cách đột ngột khi hết thời gian, cha mẹ có thể thông báo cho trẻ 
trước khi kết thúc chương trình từ 15 phút, 10 phút hoặc 5 phút 
để trẻ chuẩn bị chuyển trạng thái. Việc giúp trẻ tự giác trong việc 
thành lập thói quen giờ giấc, nền nếp sẽ giúp ích rất nhiều khi trẻ 
sử dụng Internet độc lập hơn ở các độ tuổi lớn hơn.</p>
<p> c. Quản lý an toàn thông tin và quyền riêng tư <br>
Tài khoản của trẻ cần được cài đặt ở chế độ riêng tư, có thể hạn 
chế các nội dung và tương tác từ người lạ. Ngoài ra, phụ huynh có 
thể cài đặt về thời gian cũng như theo dõi dấu chân kỹ thuật số 
của trẻ, những hoạt động của trẻ trên môi trường mạng.<br> 
Kiểm tra cài đặt quyền riêng tư, sử dụng kiểm soát của phụ huynh, 
chặn mua hàng trong ứng dụng, tắt tùy chọn thanh toán bằng một cú 
nhấp chuột và dịch vụ định vị trên thiết bị và đồ chơi có kết nối Internet 
của bạn. Hạn chế các chức năng của máy ảnh và video quảng cáo - hãy 
thận trọng với các ứng dụng có các nhân vật trong phim hoặc các sản 
phẩm nổi tiếng, vì các ứng dụng này thường quảng cáo tiêu dùng và 
các sản phẩm cụ thể. Ngoài ra, hãy đọc và kiểm tra các điều khoản và 
điều kiện xem liệu các ứng dụng có thu thập dữ liệu không. <br>
Tìm hiểu cách thức để báo cáo, chặn, ...</p>
<p> d. Quản lý hành vi rủi ro <br>
Phụ huynh có thể bắt đầu giải thích cho con mình rằng có nội 
dung tốt và xấu trên Internet, bao gồm cả nội dung không đúng 
sự thật. Khuyến khích con nói chuyện với cha mẹ nếu chúng thấy 
điều gì đó khiến các con khó chịu, sợ hãi hoặc lo lắng. Ví dụ, cha 
mẹ có thể nói: “Một số video trên Internet có thể gây khó chịu 
hoặc đáng sợ. Hãy nói cho bố/mẹ biết nếu con thấy điều gì đó 
khiến con sợ hãi hoặc khiến con không vui nhé!”</p>
<p> e. Định hướng cho trẻ các nội dung phù hợp <br>
 Hãy chú ý tới độ tuổi của trẻ để định hướng cho con xem/chơi 
các chương trình có nội dung tốt, phù hợp với độ tuổi, sở thích, sự 
phát triển tâm sinh lý của trẻ, ngoài tránh rủi ro, cũng có thể quan 
tâm cả đến việc trẻ có thể xem các chương trình vô ích, mất thời 
gian như quảng cáo – tuy có thể không có hại một cách rõ ràng 
nhưng cũng không có lợi cho sự phát triển của trẻ. <br>
 Đây là các nội dung giúp cho trẻ học hỏi và phát triển, các ứng 
dụng hoặc trò chơi có chất lượng tốt cho trẻ có thể:</p>
<p>- Khuyến khích trẻ phát triển ngôn ngữ. Ví dụ: học thêm ngoại 
ngữ là tiếng Anh qua các chương trình, ứng dụng tiếng Anh dành 
cho trẻ mẫu giáo; học các bài hát; luyện cách phát âm, ... <br>
- Khuyến khích trẻ sáng tạo, giải quyết vấn đề. Ví dụ: hướng 
dẫn trẻ vẽ tranh, xây dựng các cốt truyện, câu đố, phân biệt cách 
xử lý tình huống khi gặp các vấn đề như tai nạn thương tích trẻ 
nhỏ, phòng tránh xâm hại trẻ em, ... <br>
- Khám phá: Khám phá các sở thích của trẻ như vẽ tranh, thiết 
kế thời trang, chơi một nhạc cụ, lập trình, lắp ráp, các môn STEM 
hoặc thí nghiệm an toàn với trẻ nhỏ, ...</p>
<p> f. Những lưu ý khác với cha mẹ khi đồng hành cùng con độ 
tuổi dưới 6 tuổi<br>
- Hãy hướng dẫn trẻ không nên click/nhấp chuột vào các quảng 
cáo hay các thông báo lạ trên mạng mà hãy cho bố mẹ biết khi 
có bất kỳ bất thường nào xảy ra. Hãy cho trẻ biết rằng có nhiều 
trò chơi và ứng dụng có tính năng mua hàng trong ứng dụng 
cho những thứ như trang phục nhân vật và cấp độ mới, hãy nói 
với con “Trò chơi có thể đòi hỏi con mua thứ này thứ kia, nhưng 
chúng mình chưa có tiền, cũng chưa biết tiêu tiền, nên chúng ta 
không click chuột vào các đề nghị con mua váy công chúa hay 
robot hay gì đó nhé! Nếu con thấy nó hiện lên màn hình, hãy tới 
nói với bố mẹ”. <br>
- Noi gương: đảm bảo rằng cả cha mẹ và các thành viên khác 
trong gia đình – ví dụ anh chị lớn hơn cũng đều tuân theo các quy 
tắc an toàn Internet ở trong gia đình, ví dụ về quy tắc giờ giấc sử 
dụng hoặc hành vi, chương trình xem theo độ tuổi. <br>
- Cha mẹ nên lập 1 kế hoạch giáo dục trẻ em về các kiến thức an 
toàn trên mạng Internet bao gồm các nội dung chính như: phân 
biệt nội dung tốt xấu, không click chuột vào các đường link lạ, xử 
lý tình huống khi con xem phải các nội dung khiến con lo sợ, bối 
rối, ... Hãy cùng lên mạng với con, chơi với con, bình luận và chia 
sẻ về các nội dung và cảm xúc về các chương trình con đã xem, đặt 
ra các tình huống, yêu cầu con chỉ cho bạn cách chơi 1 trò chơi mà 
con yêu thích, ... để con cảm thấy có không gian chia sẻ thoải mái. 
Hãy chắc chắn rằng con sẽ nói lại ngay với bố mẹ những cảm xúc 
của con khi xem/chơi trên Internet. Nếu con xem phải các chương 
trình không phù hợp, hãy an ủi con và hướng dẫn con, đừng đổ lỗi 
và mắng trẻ khiến trẻ chưa hiểu được vấn đề và sẽ không dám tìm 
kiếm sự trợ giúp của bố mẹ khi cần.</p>
<h2> PHẦN 3: GIAI ĐOẠN PHÁT TRIỂN(Trẻ em từ 6 - dưới 11 tuổi)</h2>
<h3>3.1. Tâm sinh lý của trẻ ở độ tuổi 6 - dưới 11 tuổi</h3>
<p> Hoạt động chủ yếu của trẻ ở giai đoạn này là học tập, bắt đầu 
có tư duy, trẻ phát triển ngôn ngữ vượt trội. Đây cũng là độ tuổi 
hình thành nếp sống, thói quen, những hành vi có ý thức, tuân thủ 
theo các quy định tại gia đình, nhà trường, xã hội. Từ quan hệ ruột 
thịt, trẻ đã bắt đầu dần dần chuyển sang các mối quan hệ xã hội. 
Trẻ có sự thay đổi môi trường sống, không phải chỉ là môi trường 
gia đình quen thuộc như trước đây mà còn tiếp xúc với thầy cô, 
bạn bè. <br>
Ở độ tuổi này, trẻ cũng có nhu cầu độc lập lớn hơn trong việc 
sử dụng Internet, bắt đầu nhận định về sự riêng tư, có khả năng 
để học tập và nhận định phân biệt đúng và sai, an toàn và không 
an toàn. Trẻ vẫn có nhu cầu hỗ trợ và hướng dẫn, nhận lời khuyên 
từ cha mẹ về các vấn đề mà trẻ gặp phải trong cuộc sống hay trên 
môi trường mạng.</p>
<h3>3.2. Những lưu ý dành cho trẻ khi gặp rủi ro và cách phòng 
tránh</h3>
<p> Ở độ tuổi này trẻ có thể gặp một hoặc một số rủi ro sau khi tham 
gia môi trường mạng. Khi gặp các rủi ro này, hãy áp dụng một số 
biện pháp phòng tránh được gợi ý dưới dây:</p>
<p>a. Rò rỉ, lộ lọt thông tin cá nhân</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm14.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>b. Tiếp cận các thông tin không phù hợp, nội dung độc hại</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm15.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>c. Bị kết bạn xấu</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm16.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p> d. Bắt nạt trực tuyến <br>
 “Bắt nạt trực tuyến” là hành vi quấy rối, đe dọa hoặc làm nhục người 
khác diễn ra trên môi trường mạng. Bắt nạt trực tuyến có thể xảy ra 
thông qua tin nhắn, các ứng dụng trên mạng, mạng xã hội, diễn đàn 
hoặc các trò chơi trực tuyến nơi mọi người có thể xem, tham gia hoặc 
chia sẻ nội dung.</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm17.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<p>e. Bị xâm hại tình dục trên không gian mạng (môi trường 
mạng)</p>
<figure class="article-image">
<img src="<?= $base ?>assets/atm18.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<h3>3.3. Kỹ năng trẻ cần có</h3>
<figure class="article-image">
<img src="<?= $base ?>assets/atm19.png" alt="Trẻ em bị bạo hành cần được bảo vệ khẩn cấp.">
<figcaption></figcaption>
</figure>
<h3>3.4. Những lưu ý dành cho phụ huynh cần nắm để giáo dục 
trẻ ở độ tuổi từ 6 - dưới 11 tuổi</h3>
<p> Nói về việc sử dụng Internet và các rủi ro trực tuyến với 
con: <br>
 Trẻ em ở độ tuổi này đã bắt đầu có khả năng học tập, ghi nhớ và 
dần hình thành các kỹ năng tư duy, kỹ năng xử lý tình huống rồi 
nên cha mẹ hãy sẵn sàng nói chuyện cởi mở với con cái về việc sử 
dụng Internet. <br>
Đồng hành trên Internet với con từ sớm, bạn có cơ hội cùng 
giáo viên hướng dẫn con cách sử dụng Internet cũng như các rủi 
ro con có thể gặp phải, hướng dẫn, giải thích cho con. Đối với các 
bạn nhỏ trên 9 tuổi, cha mẹ có thể giao cho con các bài tập tìm 
hiểu về rủi ro trên mạng Internet và cách phòng tránh để thuyết 
trình, chia sẻ/dạy lại cha mẹ, như vậy các con có thể tự tìm hiểu, và 
làm chủ kiến thức của mình. <br>
Cha mẹ hãy kể với con cách bạn sử dụng Internet, lợi ích và rủi 
ro, các trải nghiệm vui và cả không vui để giúp con cảm thấy rằng 
con có thể chia sẻ với cha mẹ về những gì con trải nghiệm không 
tốt trên mạng. <br>
Hãy cho con biết không phải tất cả các thông tin trực tuyến 
đều đúng và hữu ích, khuyến khích con đặt câu hỏi, cùng con đặt 
ra các tình huống và cùng bố mẹ tìm cách giải quyết giúp tăng 
cường tư duy phản biện, và kỹ năng xử lý tình huống của con khi 
có các rủi ro xảy ra.</p>
<p>Hướng dẫn và áp dụng các phương pháp phòng tránh 
rủi ro Internet cho trẻ em được mô tả trong mục 3.2  
<br> Xây dựng một kế hoạch sử dụng Internet an toàn trong 
gia đình <br>
 Đó có thể là bản thỏa thuận để mọi thành viên trong gia đình 
tuân thủ về các điều khoản như: <br>
- Không tiết lộ các thông tin cá nhân của mình cũng như của bố 
mẹ cho bất kỳ ai;<br>
- Không chia sẻ ảnh, video clip của bản thân và gia đình cho bất 
cứ ai nếu chưa có sự cho phép của bố mẹ. Bố mẹ cũng không được 
chia sẻ hình ảnh, thông tin của con, dù là khoe bảng thành tích 
của con nếu không có sự cho phép của con; <br>
- Con sẽ nói với bố mẹ ngay lập tức nếu có điều gì khiến con cảm 
thấy kỳ lạ, lo lắng, khó chịu. Bố mẹ sẽ không trách mắng, đổ lỗi 
cho con mà sẽ nghiêm túc cùng con tìm hiểu chuyện gì đã xảy ra, 
nguyên nhân và giải pháp;<br>
- Con sẽ chia sẻ với bố mẹ danh mục các chương trình con muốn 
xem, danh sách bạn bè con muốn kết bạn. Bố mẹ hãy đảm bảo sẽ 
tôn trọng bạn bè và các sở thích của con, hỗ trợ tư vấn cho con về 
các chương trình phù hợp với con;<br> 
- Quy định thời gian sử dụng Internet của con và bố mẹ là: Sử 
dụng bao lâu? Vào lúc nào? <br>
- Không sử dụng Internet khi đang ăn hoặc trong phòng ngủ, khi 
đang nói chuyện và chơi với nhau;<br>
- Các điều khoản khác có sự thảo luận và nhất trí của tất cả các 
thành viên trong gia đình.<br>
 Bản kế hoạch/cam kết này nên được cả trẻ và bố mẹ ký nhận, 
dán tại nơi sử dụng Internet của gia đình và được theo dõi việc 
thực hiện. Cha mẹ hãy đảm bảo làm gương cho trẻ nếu muốn trẻ 
có thể xây dựng các thói quen sử dụng Internet hợp lý, an toàn.
</p>
<p>Cài một số ứng dụng để hạn chế, theo dõi, giám sát trẻ <br>
 Phụ huynh có thể cài đặt một số ứng dụng để hạn chế, theo 
dõi, giám sát trẻ (tham khảo các ứng dụng được đề cập tại Phần 5) 
nhưng tốt nhất không nên bí mật theo dõi trẻ - điều này sẽ khiến 
con nghĩ rằng bạn không tin tưởng con. <br>
Tốt hơn hết nên nói chuyện cởi mở về việc sử dụng Internet của 
riêng bạn và khuyến khích con bạn làm điều tương tự, nếu cài đặt 
các ứng dụng, hãy cho con biết và nhận được sự đồng ý của con. 
Hãy cho con biết nếu cần cài đặt, đó là vì bạn đang nỗ lực giúp con an toàn. Tuy nhiên, đối với trẻ trên 9 tuổi, cha mẹ thay vì cài 
đặt, giám sát nên hướng dẫn trẻ tự bảo vệ bản thân, bởi nếu trẻ 
muốn tránh sự giám sát của cha mẹ, trẻ có thể học cách gỡ hoặc 
vô hiệu hóa các ứng dụng cha mẹ cài đặt hoặc không sử dụng 
máy tính, tài khoản bố mẹ cài đặt mà lập tài khoản mới, sử dụng 
thiết bị công nghệ khác ở trường hoặc của bạn bè mà không cho 
cha mẹ biết.</p>
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


