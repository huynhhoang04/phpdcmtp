<?php
include __DIR__ . "/th/banner.php"; 
include __DIR__ . "/th/header.php";
include __DIR__ . "/th/tintuc.php";
include __DIR__ . "/th/chuyenmuc.php";
include __DIR__ . "/th/kienthuc.php";
include __DIR__ . "/th/tracuu.php";
include __DIR__ . "/th/baocao.php";
include __DIR__ . "/th/lienhe.php";
include __DIR__ . "/th/footer.php";
include __DIR__ . "/th/login-modal.php";
?>
<script src="app.js"></script>
<!-- Floating Donate Button -->
<a href="/btapphpp1/quyengop/donate.php" class="donate-fab" title="Quyên góp ngay" aria-label="Quyên góp ngay">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26">
    <path d="M20.8 4.6c-1.6-1.6-4.2-1.6-5.8 0l-1 1-1-1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l6.8 6.8 6.8-6.8c1.6-1.6 1.6-4.2 0-5.8z"/>
  </svg>
</a>

<style>
.donate-fab {
  position: fixed;
  bottom: 26px;
  right: 26px;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f97316, #ea580c);
  border-radius: 50%;
  box-shadow: 0 6px 20px rgba(234, 88, 12, 0.35);
  text-decoration: none;
  transition: all 0.25s ease;
  z-index: 1000;
}
.donate-fab:hover {
  transform: scale(1.08) translateY(-2px);
  box-shadow: 0 10px 26px rgba(234, 88, 12, 0.45);
}
.donate-fab svg {
  animation: beat 1.6s ease-in-out infinite;
}
@keyframes beat {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.15); opacity: 0.9; }
}
</style>


</body>
</html>

