<?php 
  // Header (đã nạp $base và styles chung)
  include __DIR__ . '/../th/banner.php'; 
  include __DIR__ . '/../th/header.php';
  // Component ô sidebar dùng chung
  require_once __DIR__ . '/../th/sidebar-box.php';
  
  // $base 
  $base = $base ?? '/btapphpp1/'; ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Giới thiệu | Protect Children</title>
<link rel="stylesheet" href="<?= $base ?>styles.css" />
<style>
  :root{ --brand:#e45a21; --bg:#fffaf7; --ink:#232325; --muted:#666; --bd:#eee; }
  body{margin:0;background:var(--bg);color:var(--ink);font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Arial}
  .container{max-width:1120px;margin:auto;padding:28px 20px}

  /* HERO */
  .hero{padding:34px 0 10px;text-align:center}
  .hero h1 {
  font-size: clamp(28px,5vw,44px);
  margin: 0 0 8px;
  font-weight: 800;
  letter-spacing: .2px;
  color: #e45a21; /* màu cam chủ đạo */
}

  .hero p.lead{max-width:900px;margin:8px auto 16px;color:#333;font-size:clamp(16px,2.2vw,20px);font-style:italic}
  .cta{display:inline-flex;align-items:center;gap:8px;background:var(--brand);color:#fff;
       padding:12px 18px;border-radius:12px;text-decoration:none;font-weight:700;
       box-shadow:0 8px 20px rgba(228,90,33,.25)}
  .cta:hover{filter:brightness(.96)}

  /* 4 CỤM ẢNH TRÒN */
  .feat-grid{display:grid;gap:24px;margin:28px auto;grid-template-columns:repeat(4,minmax(0,1fr))}
  .feat{background:#fff;border:1px solid var(--bd);border-radius:16px;padding:14px;text-align:center}
  .feat img{width:200px;max-width:80%;aspect-ratio:1/1;border-radius:50%;object-fit:cover;
            box-shadow:0 10px 24px rgba(0,0,0,.12)}
  .feat h3{margin:10px 0 6px;font-size:18px}
  .feat p{margin:0;color:var(--muted);font-size:14.5px}

  /* DẢI “SỨ MỆNH – GIÁ TRỊ – TÁC ĐỘNG” */
  .pill-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:18px 0}
  .pill{background:#fff;border:1px solid var(--bd);border-radius:14px;padding:14px}
  .pill strong{color:var(--brand)}
  .pill ul{margin:10px 0 0 18px;color:#444}

  /* CTA KHÓA BÀI TẬP (theo concept) */
  .card-cta{margin:28px 0;background:linear-gradient(180deg,#fff,#ffe9dd);
            border:1px solid #ffd3be;border-radius:16px;padding:18px;text-align:center}
  .card-cta h4{margin:0 0 6px}
  .btn-outline{display:inline-flex;align-items:center;gap:8px;border:2px solid var(--brand);
               color:var(--brand);padding:10px 16px;border-radius:12px;text-decoration:none;font-weight:700}
  .btn-outline:hover{background:#fff5ef}

  @media (max-width: 1024px){ .feat-grid{grid-template-columns:repeat(2,1fr)} .pill-3{grid-template-columns:1fr} }
  @media (max-width: 560px){ .feat-grid{grid-template-columns:1fr} }
</style>
</head>
<body>

<main id="main">
  <section class="container hero">
    <h1>Bảo vệ trẻ em</h1>
    <p class="lead">Không trẻ em nào phải chịu bạo lực, lạm dụng, bóc lột hay bỏ quên. Chúng tôi kiến tạo
      một môi trường an toàn và hòa nhập cho mọi trẻ em ở Việt Nam.</p>
  </section>

  <section class="container">
    <div class="feat-grid">
      <article class="feat">
        <img src="<?= $base ?>assets/chamsoc.webp" alt="Chăm sóc thay thế">
        <h3>Chăm sóc thay thế</h3>
        <p>Đảm bảo môi trường sống an toàn, yêu thương cho mọi trẻ.</p>
      </article>
      <article class="feat">
        <img src="<?= $base ?>assets/tuphap.jpg" alt="Tư pháp cho trẻ em">
        <h3>Tư pháp cho trẻ em</h3>
        <p>Tiếp cận công lý thân thiện, lấy lợi ích tốt nhất của trẻ làm trung tâm.</p>
      </article>
      <article class="feat">
        <img src="<?= $base ?>assets/baove.webp" alt="Bảo vệ khỏi bạo lực">
        <h3>Bảo vệ khỏi bạo lực</h3>
        <p>Phòng ngừa – phát hiện – hỗ trợ kịp thời các trường hợp xâm hại.</p>
      </article>
      <article class="feat">
        <img src="<?= $base ?>assets/congdong.webp" alt="Phát triển cộng đồng">
        <h3>Phát triển cộng đồng</h3>
        <p>Kết nối gia đình – nhà trường – xã hội để trẻ phát triển toàn diện.</p>
      </article>
    </div>

    <div class="pill-3">
      <div class="pill">
        <h3>🎯 <strong>Sứ mệnh</strong></h3>
        <ul>
          <li>Nâng cao nhận thức về quyền trẻ em & an toàn số.</li>
          <li>Kết nối mạng lưới hỗ trợ đa ngành.</li>
          <li>Cung cấp công cụ – tài liệu – kỹ năng ứng phó.</li>
        </ul>
      </div>
      <div class="pill">
        <h3>💎 <strong>Giá trị cốt lõi</strong></h3>
        <ul>
          <li>Lấy trẻ em làm trung tâm.</li>
          <li>Minh bạch, tôn trọng, hợp tác.</li>
          <li>Hành động kịp thời dựa trên bằng chứng.</li>
        </ul>
      </div>
      <div class="pill">
        <h3>📈 <strong>Tác động</strong></h3>
        <ul>
          <li>+5,000 phụ huynh/giáo viên được tập huấn.</li>
          <li>+120 tài liệu, infographic, công cụ số.</li>
          <li>Trực tiếp hỗ trợ >500 trường hợp/năm.</li>
        </ul>
      </div>
    </div>
  </section>
</main>

</body>
</html>
<?php require_once __DIR__ . '/../th/footer.php'; ?>