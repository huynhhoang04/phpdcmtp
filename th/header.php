<?php
// nạp config
$config = include __DIR__ . '/../config/config.php';
// BẮT BUỘC: đọc session để biết đã đăng nhập chưa
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// ưu tiên cookie nếu có (đã bấm bật/tắt trước đó)
$showHero = isset($_COOKIE['hero_enabled'])
  ? $_COOKIE['hero_enabled'] === '1'
  : (!empty($config['hero_enabled']));

// nếu có query ?hero=1|0 thì cập nhật cookie + giá trị hiện tại
if (isset($_GET['hero'])) {
    $val = ($_GET['hero'] === '1') ? '1' : '0';
    setcookie('hero_enabled', $val, time() + 86400*30, '/'); // nhớ 30 ngày
    $showHero = ($val === '1');
}

// base path để build URL tuyệt đối
$base = '/btapphpp1/';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bảo vệ quyền trẻ em Việt Nam</title>
  <meta name="description" content="Cổng thông tin nâng cao nhận thức, phòng chống bạo hành và giáo dục an toàn cho trẻ em tại Việt Nam." />
  <meta name="theme-color" content="#fffaf5" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="<?= $base ?>styles.css" />
  <meta name="app-base" content="<?= $base ?>">
</head>
<body>

<a class="skip-link" href="#main">Bỏ qua nội dung</a>

<header class="site-header">
  <div class="container header-inner">

    <a class="navbar-brand brand" href="<?= $base ?>index.php">
      <span class="logo-text">🛡️ Protect Children</span>
    </a>

    <nav class="nav" aria-label="Điều hướng chính">
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="menu" aria-label="Mở menu">☰</button>

      <!-- CHỈ 1 id="menu" -->
      <ul class="menu" id="menu">

        <!-- Dropdown: Giới thiệu -->
        <li class="dropdown" id="mm-gioithieu">
          <button class="menu-trigger" aria-expanded="false" aria-controls="panel-gioithieu">
            Giới thiệu <span class="caret" aria-hidden="true"></span>
          </button>
          <div class="dropdown-panel" id="panel-gioithieu" role="menu" aria-label="Giới thiệu">
            <div class="panel-grid">
              <a class="panel-item" href="<?= $base ?>gioithieu/gioithieu.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Chúng tôi làm gì?</strong><small>Giới thiệu về ProtectChildren.</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>gioithieu/gioithieu.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Chúng tôi làm gì?</strong><small>Giới thiệu về ProtectChildren.</small></span>
              </a>
            </div>
          </div>
        </li>

        <!-- Dropdown: Chuyên mục -->
        <li class="dropdown" id="mm-chuyenmuc">
          <button class="menu-trigger" aria-expanded="false" aria-controls="panel-chuyenmuc">
            Chuyên mục <span class="caret" aria-hidden="true"></span>
          </button>
          <div class="dropdown-panel" id="panel-chuyenmuc" role="menu" aria-label="Chuyên mục">
            <div class="panel-grid">
              <a class="panel-item" href="<?= $base ?>chuyenmuc/quyentreem.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Quyền trẻ em</strong><small>Toàn bộ quyền của trẻ em theo Luật Trẻ em 2016</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>chuyenmuc/phongchongbaohanh.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Phòng chống bạo hành</strong><small>Dấu hiệu &amp; kênh hỗ trợ</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>chuyenmuc/giaoducantoan.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Giáo dục kĩ năng an toàn</strong><small>12 kỹ năng cha mẹ nên dạy sớm</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>chuyenmuc/honnhanvagd.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Luật hôn nhân và gia đình</strong><small>Bảo vệ quyền trẻ em theo luật</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>chuyenmuc/chinhsachvahoatdong.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Chương trình, chính sách và hoạt động</strong><small>Bảo vệ quyền lợi trẻ em tại Việt Nam</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>chuyenmuc/antoanmang.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Bảo vệ trẻ em trên không gian mạng</strong><small>An toàn Internet &amp; dịch vụ trực tuyến</small></span>
              </a>
            </div>
          </div>
        </li>

        <!-- Dropdown: Kiến thức & Hướng dẫn -->
        <li class="dropdown" id="mm-kienthuc">
          <button class="menu-trigger" aria-expanded="false" aria-controls="panel-kienthuc">
            Kiến thức &amp; Hướng dẫn <span class="caret" aria-hidden="true"></span>
          </button>
          <div class="dropdown-panel" id="panel-kienthuc" role="menu" aria-label="Kiến thức &amp; Hướng dẫn">
            <div class="panel-grid">
              <a class="panel-item" href="<?= $base ?>index.php?kttag=xu-ly-tinh-huong#kienthuc" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Xử lý tình huống</strong><small>Sơ cứu &amp; phòng tránh</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>index.php?kttag=suc-khoe-tinh-than#kienthuc" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Sức khỏe tinh thần</strong><small>Hiểu &amp; hỗ trợ trẻ</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>index.php?kttag=phu-huynh-giao-vien#kienthuc" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Dành cho phụ huynh</strong><small>Cẩm nang &amp; bài học</small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>index.php?kttag=phu-huynh-giao-vien#kienthuc" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Dinh dưỡng</strong><small>Kiến thức cơ bản cho cha mẹ</small></span>
              </a>
            </div>
          </div>
        </li>

        <!-- Dropdown: Tin tức & Dữ liệu -->
        <li class="dropdown" id="mm-tintuc">
          <button class="menu-trigger" aria-expanded="false" aria-controls="panel-tintuc">
            Tin tức &amp; Dữ liệu <span class="caret" aria-hidden="true"></span>
          </button>
          <div class="dropdown-panel" id="panel-tintuc" role="menu" aria-label="Tin tức &amp; Dữ liệu">
            <div class="panel-grid">
              <a class="panel-item" href="<?= $base ?>tinhot/tinhothomnay.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Tin hot hôm nay</strong><small>Tin nổi bật ngày <?= date('d/m/Y') ?></small></span>
              </a>
              <a class="panel-item" href="<?= $base ?>tintonghop/tintonghop.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Tin tổng hợp</strong><small>Tất cả bài đã đăng</small></span>
              </a>
              <a class="panel-item" href="#" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Dữ liệu</strong><small>Thống kê &amp; báo cáo</small></span>
              </a>
            </div>
          </div>
        </li>

        <!-- Dropdown: Liên hệ & Báo cáo -->
        <li class="dropdown" id="mm-lienhe">
          <button class="menu-trigger" aria-expanded="false" aria-controls="panel-lienhe">
            Liên hệ &amp; Báo cáo <span class="caret" aria-hidden="true"></span>
          </button>
          <div class="dropdown-panel" id="panel-lienhe" role="menu" aria-label="Liên hệ &amp; Báo cáo">
            <div class="panel-grid">
              <a class="panel-item" href="lienhe/datlichhen.php" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Đặt lịch hẹn</strong><small>Kết nối trực tiếp với Protect Children</small></span>
              </a>
              <a class="panel-item" href="#baocao" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Báo cáo vụ việc</strong><small>Nếu thấy bạo hành/xâm hại hãy báo cho chúng tôi</small></span>
              </a>
              <a class="panel-item" href="https://www.facebook.com/tran.phong.341970" role="menuitem">
                <span class="ico">🟠</span>
                <span class="txt"><strong>Fanpage</strong><small>Trang chủ của Protect Children</small></span>
              </a>
            </div>
          </div>
        </li>

               <!-- Nút không phải dropdown -->
        <li><a class="btn btn-donate" href="<?= $base ?>quyengop/quyengop.php" aria-label="Quyên góp">Quyên góp</a></li>

        <?php if (!empty($_SESSION['uid'])): ?>
          <!-- ĐÃ ĐĂNG NHẬP: Hiển thị menu tài khoản -->
          <li class="dropdown" id="mm-user">
            <button class="menu-trigger" aria-expanded="false" aria-controls="panel-user">
              <img src="<?= $base ?>assets/avatar-default.jpg" alt="" style="width:24px;height:24px;border-radius:50%;vertical-align:middle;margin-right:6px;">
              <span><?= htmlspecialchars($_SESSION['name'] ?? 'Tài khoản', ENT_QUOTES, 'UTF-8') ?></span>
              <span class="caret" aria-hidden="true"></span>
            </button>
            <div class="dropdown-panel" id="panel-user" role="menu" aria-label="Tài khoản">
              <div class="panel-grid">
                <a class="panel-item" href="<?= $base ?>auth/profile.php" role="menuitem">
                  <span class="ico">👤</span>
                  <span class="txt"><strong>Hồ sơ</strong><small>Thông tin cá nhân</small></span>
                </a>
                <a class="panel-item" href="<?= $base ?>auth/logout.php" role="menuitem">
                  <span class="ico">↩️</span>
                  <span class="txt"><strong>Đăng xuất</strong><small>Thoát phiên</small></span>
                </a>
              </div>
            </div>
          </li>
        <?php else: ?>
          <!-- CHƯA ĐĂNG NHẬP: Hiển thị nút đăng nhập -->
          <li><a class="btn btn-outline" href="<?= $base ?>auth/auth-pages.php">Đăng nhập</a></li>
        <?php endif; ?>

        
        <!-- Tìm kiếm -->
        <li>
          <div class="header-search">
            <button id="searchToggle" class="search-btn" aria-label="Tìm kiếm"></button>
            <form id="searchForm" class="search-form" action="<?= $base ?>th/search.php" method="get">
              <input type="search" name="q" id="searchInput" placeholder="Tìm kiếm..." />
              <button type="submit" class="submit-btn" aria-label="Tìm kiếm"></button>
            </form>
          </div>
        </li>

      </ul>
    </nav>

    <div id="searchBar" class="search-bar" style="display:none;">
      <form action="<?= $base ?>index.php" method="get">
        <input type="hidden" name="page" value="tracuu" />
        <input type="search" name="q" placeholder="Nhập từ khóa tìm kiếm..." />
        <button type="submit">Tìm</button>
      </form>
    </div>

  </div>
</header>

<!-- JS: mobile nav + dropdown -->
<script>
(function(){
  const nav = document.querySelector('.nav');
  const toggle = document.querySelector('.nav-toggle');

  // Toggle menu mobile
  if (toggle && nav) {
    toggle.addEventListener('click', ()=>{
      const open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  // Dropdown chung
  const dropdowns = Array.from(document.querySelectorAll('.menu .dropdown'));
  function closeAll(except=null){
    dropdowns.forEach(dd=>{
      if (dd !== except){
        dd.classList.remove('is-open');
        dd.querySelector('.menu-trigger')?.setAttribute('aria-expanded','false');
      }
    });
  }
  dropdowns.forEach(dd=>{
    const trigger = dd.querySelector('.menu-trigger');
    trigger?.addEventListener('click', (e)=>{
      e.preventDefault(); e.stopPropagation();
      const openNow = !dd.classList.contains('is-open');
      closeAll();
      dd.classList.toggle('is-open', openNow);
      trigger.setAttribute('aria-expanded', openNow ? 'true' : 'false');
    });
  });

  document.addEventListener('click', (e)=>{
    const insideDropdown = e.target.closest('.menu .dropdown');
    if (!insideDropdown) closeAll();
    if (nav && nav.classList.contains('is-open') && !nav.contains(e.target)) {
      nav.classList.remove('is-open');
      toggle?.setAttribute('aria-expanded','false');
    }
  });

  document.addEventListener('keydown', (e)=>{ if (e.key === 'Escape') closeAll(); });
})();

// Tìm kiếm
const searchToggle = document.getElementById('searchToggle');
const searchForm   = document.getElementById('searchForm');
const searchInput  = document.getElementById('searchInput');
if (searchToggle && searchForm){
  searchToggle.addEventListener('click', () => {
    searchForm.classList.toggle('active');
    if (searchForm.classList.contains('active')) searchInput?.focus();
  });
  searchInput?.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') searchForm.submit();
  });
}
</script>

<script>
function updateDate() {
  const now = new Date();
  const formatted = now.toLocaleDateString('vi-VN', { day:'2-digit', month:'2-digit', year:'numeric' });
  const el = document.getElementById('realtime-date');
  if (el) el.textContent = `Tin tức nổi bật ngày ${formatted}`;
}
updateDate();
</script>
</body>
</html>
