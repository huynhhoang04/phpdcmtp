<section id="tintuc" class="section">
  <div class="container">
    <header class="section-head">
      <h2>Tin nổi bật</h2>
    </header>

    <style>
      /* ====== SCOPED CSS: chỉ tác động bên trong #tintuc ====== */
      #tintuc .tintuc-grid{display:grid;grid-template-columns:1.7fr 1.3fr;gap:24px;align-items:start}
      #tintuc .tintuc-feature .thumb{display:block;overflow:hidden;border-radius:8px}
      #tintuc .tintuc-feature .thumb img{width:100%;height:auto;display:block}
      #tintuc .tintuc-feature .body{margin-top:12px}
      #tintuc .tintuc-feature .title{font-size:1.25rem;line-height:1.4;margin:6px 0}
      #tintuc .tintuc-feature .title a{color:#0b4d6e;text-decoration:none}
      #tintuc .tintuc-feature .title a:hover{text-decoration:underline}
      #tintuc .tintuc-feature .desc{color:#444;margin:8px 0 0}

      #tintuc .tintuc-list{display:grid;grid-template-columns:1fr;gap:14px}
      #tintuc .tintuc-item{display:grid;grid-template-columns:120px 1fr;gap:12px;align-items:center}
      #tintuc .tintuc-item .thumb.sm{display:block;width:120px;height:80px;overflow:hidden;border-radius:6px}
      #tintuc .tintuc-item .thumb.sm img{width:100%;height:100%;object-fit:cover;display:block}
      #tintuc .tintuc-item .title.sm{font-size:.98rem;line-height:1.35;margin:0}
      #tintuc .tintuc-item .title.sm a{color:#0b4d6e;text-decoration:none}
      #tintuc .tintuc-item .title.sm a:hover{text-decoration:underline}

      #tintuc .tintuc-slider{position:relative;margin-top:26px}
      #tintuc .ts-viewport{overflow:hidden;border-radius:8px}
      #tintuc .ts-track{display:flex;gap:16px;padding:2px;scroll-behavior:smooth}
      #tintuc .ts-slide{flex:0 0 calc((100% - 32px)/3);display:block}
      #tintuc .ts-slide img{width:100%;height:160px;object-fit:cover;display:block;border-radius:8px}
      #tintuc .ts-nav{position:absolute;top:50%;transform:translateY(-50%);background:rgba(0,0,0,.5);color:#fff;border:0;width:36px;height:36px;border-radius:50%;cursor:pointer}
      #tintuc .ts-nav.prev{left:6px}
      #tintuc .ts-nav.next{right:6px}

      @media (max-width:1024px){
        #tintuc .tintuc-grid{grid-template-columns:1fr}
        #tintuc .ts-slide{flex:0 0 calc((100% - 16px)/2)}
      }
      @media (max-width:640px){
        #tintuc .tintuc-item{grid-template-columns:96px 1fr}
        #tintuc .tintuc-item .thumb.sm{width:96px;height:64px}
        #tintuc .tintuc-feature .title{font-size:1.1rem}
        #tintuc .ts-slide{flex:0 0 100%}
        #tintuc .ts-nav{display:none}
      }
    </style>

    <!-- Khối feature + list -->
    <div class="tintuc-grid">
      <!-- Tin lớn bên trái -->
      <article class="tintuc-feature">
      <a href="tinnoibat/baovemat.php" class="thumb">
          <!-- dùng ảnh sẵn trong assets để tránh 404 -->
          <img src="assets/tintuc7cachbaovemat.jpg" alt="Tin nổi bật" loading="lazy">
        </a>
        <div class="body">
          <h3 class="title"><a href="tinnoibat/baovemat.php">7 Cách Bảo Vệ Mắt Không Bị Cận Cho Trẻ Em Thường Xuyên Tiếp Xúc Thiết Bị Điện Tử</a></h3>
          <p class="desc">
            Bảo vệ mắt cho trẻ em là một vấn đề cực kỳ quan trọng trong thời đại công nghệ số hiện nay. 
            Trẻ em ngày nay tiếp xúc với các thiết bị điện tử như điện thoại di động, máy tính bảng, máy tính xách tay từ rất sớm. 
            Tuy nhiên, việc sử dụng thiết bị điện tử quá nhiều và không đúng cách có thể gây hại cho mắt của trẻ. 
          </p>
        </div>
      </article>

      <!-- 5 tin nhỏ bên phải -->
      <div class="tintuc-list">
        <article class="tintuc-item">
          <a href="tinnoibat/trungthu.php" class="thumb sm"><img src="assets/tintuctrungthu.webp" alt="" loading="lazy"></a>
          <h4 class="title sm"><a href="tinnoibat/trungthu.php">Mang Trung thu yêu thương đến cho hơn 500 trẻ em vùng xa</a></h4>
        </article>
        <article class="tintuc-item">
          <a href="tinnoibat/mauthuan.php" class="thumb sm"><img src="assets/tintuccachungxukhitredanhnhau.webp" alt="" loading="lazy"></a>
          <h4 class="title sm"><a href="tinnoibat/mauthuan.php">Trẻ nhỏ mâu thuẫn và cái "đầu nóng" của phụ huynh: Giáo dục nhân cách là vắc-xin cho văn hóa ứng xử</a></h4>
        </article>
        <article class="tintuc-item">
          <a href="tinnoibat/nguonnuoc.php" class="thumb sm"><img src="assets/tintuctimhiuevenguonnuoc.webp" alt="" loading="lazy"></a>
          <h4 class="title sm"><a href="tinnoibat/nguonnuoc.php">10 năm giúp trẻ em hiểu về nguồn nước</a></h4>
        </article>
        <article class="tintuc-item">
          <a href="tinnoibat/chienluoc.php" class="thumb sm"><img src="assets/tintuckyket.jpg" alt="" loading="lazy"></a>
          <h4 class="title sm"><a href="tinnoibat/chienluoc.php">Hội Bảo vệ quyền trẻ em Việt Nam ký kết hợp tác chiến lược bốn bên, chung tay vì sức khỏe trẻ em tại các địa bàn khó khăn
</a></h4>
        </article>
        <article class="tintuc-item">
          <a href="tinnoibat/yeuthuong.php" class="thumb sm"><img src="assets/tintuchanhtrinhvuotkho.jpg" alt="" loading="lazy"></a>
          <h4 class="title sm"><a href="tinnoibat/yeuthuong.php">Hành trình yêu thương – Tiếp sức cho trẻ em vượt khó</a></h4>
        </article>
      </div>
    </div>

    <!-- Slider ảnh phía dưới -->
    <div class="tintuc-slider" data-autoplay="true">
      <button class="ts-nav prev" aria-label="Trước">&#10094;</button>
      <div class="ts-viewport">
        <div class="ts-track">
          <a href="tinnoibat/baovemat.php" class="ts-slide"><img src="assets/tintuc7cachbaovemat.jpg" alt="Slide 1" loading="lazy"></a>
          <a href="tinnoibat/chienluoc.php" class="ts-slide"><img src="assets/tintuckyket.jpg" alt="Slide 2" loading="lazy"></a>
          <a href="tinnoibat/yeuthuong.php" class="ts-slide"><img src="assets/tintuchanhtrinhvuotkho.jpg" alt="Slide 3" loading="lazy"></a>
          <a href="tinnoibat/mauthuan.php" class="ts-slide"><img src="assets/tintuccachungxukhitredanhnhau.webp" alt="Slide 4" loading="lazy"></a>
          <a href="tinnoibat/nguonnuoc.php" class="ts-slide"><img src="assets/tintuctimhiuevenguonnuoc.webp" alt="Slide 5" loading="lazy"></a>
          <a href="tinnoibat/trungthu.php" class="ts-slide"><img src="assets/tintuctrungthu.webp" alt="Slide 6" loading="lazy"></a>
        </div>
      </div>
      <button class="ts-nav next" aria-label="Sau">&#10095;</button>
    </div>

<script>
(function () {
  function ready(fn){
    if (document.readyState === 'complete' || document.readyState === 'interactive') setTimeout(fn,0);
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    const slider   = document.querySelector('#tintuc .tintuc-slider');
    if (!slider) return;

    const viewport = slider.querySelector('.ts-viewport');   // <— scroller đúng
    const track    = slider.querySelector('.ts-track');
    const prev     = slider.querySelector('.ts-nav.prev');
    const next     = slider.querySelector('.ts-nav.next');

    function slideBy(dir){
      const vp = viewport.clientWidth;
      viewport.scrollBy({ left: dir * vp, behavior: 'smooth' }); // <— dùng viewport
    }

    prev && prev.addEventListener('click', () => slideBy(-1));
    next && next.addEventListener('click', () => slideBy(1));

    // Ẩn mũi tên nếu không cần cuộn
    function toggleArrows(){
      const need = track.scrollWidth > viewport.clientWidth + 2;
      [prev, next].forEach(btn => btn && (btn.style.display = need ? '' : 'none'));
    }
    window.addEventListener('resize', toggleArrows);
    toggleArrows();
  });
})();
</script>


