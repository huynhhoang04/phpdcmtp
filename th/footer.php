<?php
$offices = [
  [
    'title'   => 'TRỤ SỞ CHÍNH TẠI HÀ NỘI',
    'address' => 'Cung trăng',
    'phone'   => '0332945425',
    'email'   => 'tranphong@gmail.com',
    'website' => 'https://nganngan0210.github.io/kngannn/',
    'social'  => [
      ['type'=>'facebook','url'=>'https://www.facebook.com/tran.phong.341970?locale=vi_VN'],
      ['type'=>'youtube','url'=>'https://www.youtube.com/@Sontungmtp'],
    ]
  ],
  [
    'title'   => 'CƠ QUAN THƯỜNG TRỰC PHÍA NAM',
    'address' => 'Mặt trời',
    'phone'   => '0339925885',
    'email'   => 'dung5735330@gmail.com',
    'social'  => [
      ['type'=>'facebook','url'=>'https://www.facebook.com/suynhatvutrunay?locale=vi_VN'],
      ['type'=>'youtube','url'=>'https://www.youtube.com/@Sontungmtp'],
    ]
  ],
];
function e($s){ return htmlspecialchars($s,ENT_QUOTES,'UTF-8'); }
function iconSvg($type){
  if($type==='facebook'){
    return '<svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M22 12.06C22 6.51 17.52 2 12 2S2 6.51 2 12.06C2 17.06 5.66 21.2 10.44 22v-7.04H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.9h-2.34V22C18.34 21.2 22 17.06 22 12.06z"/></svg>';
  }
  if($type==='youtube'){
    return '<svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M23.5 6.2a3.03 3.03 0 0 0-2.13-2.14C19.6 3.5 12 3.5 12 3.5s-7.6 0-9.37.56A3.03 3.03 0 0 0 .5 6.2 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.8 3.03 3.03 0 0 0 2.13 2.14C4.4 20.5 12 20.5 12 20.5s7.6 0 9.37-.56a3.03 3.03 0 0 0 2.13-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.8zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/></svg>';
  }
  return '';
}
?>

<style>
  .contact-wrap{max-width:1280px;margin:0 auto;padding:24px 16px;}
  .office-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;}
  @media(max-width:900px){.office-grid{grid-template-columns:1fr;}}

  .office-card{
    background:#000;
    color:#fff;
    border-radius:8px;
    padding:22px;
  }
  .office-card h3{
    margin:0 0 14px;
    color:#fff;
    font-size:20px;
    font-weight:700;
    text-transform:uppercase;
    border-bottom:2px solid #fff;
    padding-bottom:6px;
    display:inline-block;
  }
  .office-card p{margin:6px 0; line-height:1.6}
  .office-card b.label{color:#fff; font-weight:700}
  .office-card a{color:#fff; text-decoration:underline}
  .office-card a:hover{color:#ccc}

  .social{margin-top:12px; display:flex; gap:10px}
  .social a{
    width:36px; height:36px;
    background:#111;
    display:flex; align-items:center; justify-content:center;
    border-radius:6px;
    transition:.2s;
  }
  .social a:hover{background:#333}
  .social svg{display:block}
</style>

<section class="contact-wrap">
  <div class="office-grid">
    <?php foreach($offices as $o): ?>
      <article class="office-card">
        <h3><?= e($o['title']) ?></h3>
        <p><b class="label">Địa chỉ:</b> <?= e($o['address']) ?></p>
        <p><b class="label">Điện thoại:</b> <?= e($o['phone']) ?></p>
        <?php if(!empty($o['email'])): ?>
          <p><b class="label">Email:</b> <a href="mailto:<?= e($o['email']) ?>"><?= e($o['email']) ?></a></p>
        <?php endif; ?>
        <?php if(!empty($o['website'])): ?>
          <p><b class="label">Website:</b> <a href="//<?= e($o['website']) ?>" target="_blank"><?= e($o['website']) ?></a></p>
        <?php endif; ?>
        <?php if(!empty($o['mag'])): ?>
          <p><b class="label">Tạp chí:</b> <a href="//<?= e($o['mag']) ?>" target="_blank"><?= e($o['mag']) ?></a></p>
        <?php endif; ?>

        <?php if(!empty($o['social'])): ?>
          <div class="social">
            <?php foreach($o['social'] as $s): ?>
              <a href="<?= e($s['url']) ?>" target="_blank" aria-label="<?= e($s['type']) ?>">
                <?= iconSvg($s['type']) ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </article>
    <?php endforeach; ?>
  </div>
</section>
