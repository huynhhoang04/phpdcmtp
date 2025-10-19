<?php
// /btapphpp1/quyengop/donate.php
ini_set('display_errors','1');
error_reporting(E_ALL);

$base = '/btapphpp1/';
$heroImg = $base.'assets/hero-child.jpg';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Donate for Children • Protect Children</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root{
  --brand:#00b3e6;
  --brand-2:#f97316;
  --ink:#0f172a; --muted:#64748b; --bg:#ffffff;
  --card:#fff; --border:#e5e7eb;
}
*{box-sizing:border-box}
html,body{margin:0;background:var(--bg);color:var(--ink);font-family:Inter,system-ui,Segoe UI,Arial,sans-serif}
a{text-decoration:none;color:inherit}

/* Header */
.header{
  position:sticky;top:0;z-index:30;background:#fff;border-bottom:1px solid #eee;
  display:flex;align-items:center;justify-content:space-between;padding:12px 5%;
}
.brand{display:flex;align-items:center;gap:6px;font-weight:700} /* <- gộp, giữ gap nhỏ */
.nav a{margin:0 10px;color:#334155;font-weight:500}
.nav a:hover{color:var(--brand-2)}

/* Layout split */
.shell{display:grid;grid-template-columns:520px 1fr;min-height:calc(100vh - 56px)}
@media(max-width: 980px){ .shell{grid-template-columns:1fr} }

/* Left panel (card form) */
.panel{display:flex;align-items:flex-start;justify-content:center;padding:28px}
.card{width:100%;max-width:520px;background:var(--card);border:1px solid var(--border);
  border-radius:16px;padding:22px;box-shadow:0 10px 30px rgba(2,6,23,.06)}
h1{margin:0 0 10px;font-size:28px;line-height:1.2}
.lead{margin:0 0 14px;color:var(--muted)}
.tabs{display:flex;gap:10px;margin:10px 0 14px}
.tab{border:2px solid transparent;background:#e8f7fc;color:#0369a1;
  padding:10px 14px;border-radius:12px;font-weight:700;cursor:pointer}
.tab.inactive{background:#f1f5f9;color:#475569}
.tab.active{border-color:#7dd3fc; box-shadow:0 4px 14px rgba(125,211,252,.35)}
.tab .heart{color:#ef4444}

/* Amount choices */
.amounts{display:flex;gap:10px;flex-wrap:wrap}
.choice{flex:1 1 46%;min-width:180px;border:1.5px solid var(--border);border-radius:12px;padding:12px;
  cursor:pointer;background:#fff;position:relative}
.choice.selected{border-color:#0ea5e9; box-shadow:0 4px 14px rgba(14,165,233,.25)}
.choice small{display:block;color:#64748b}
.choice strong{display:block;font-size:18px;margin-top:4px}
.otherWrap{display:flex;gap:10px;margin-top:10px}
.input{width:100%;padding:12px;border:1px solid var(--border);border-radius:12px}
textarea{width:100%;min-height:96px;padding:12px;border:1px solid var(--border);border-radius:12px;resize:vertical}
.row{display:grid;grid-template-columns:1fr 1fr;gap:10px}
@media(max-width:640px){ .row{grid-template-columns:1fr} }
.label{font-weight:600;margin:12px 0 6px}
.notice{margin-top:10px;background:#fff7ed;border:1px dashed #fdba74;color:#92400e;
  padding:10px;border-radius:10px}

/* Buttons */
.actions{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin-top:16px}
.btn{border:1px solid var(--border);background:#fff;padding:12px 14px;border-radius:12px;cursor:pointer;font-weight:700}
.btn:hover{transform:translateY(-1px);box-shadow:0 6px 14px rgba(0,0,0,.06)}
.btn-primary{background:var(--brand-2);border-color:#ea580c;color:#fff}
.btn-primary:hover{background:#ea580c}

/* Payment icons row */
.payicons{display:flex;gap:10px;align-items:center;margin-top:10px;opacity:.9}
.badge{height:20px;border:1px solid #e2e8f0;border-radius:6px;padding:2px 6px;font-size:12px;color:#475569;background:#fff}

/* Right hero */
.hero{position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;inset:0;background:
  radial-gradient(1200px 1200px at -10% -10%, rgba(255,255,255,.75), transparent 40%);}
.hero img{width:100%;height:100%;object-fit:cover;display:block}
.heroCaption{position:absolute;left:18px;bottom:18px;background:rgba(255,255,255,.85);
  padding:10px 14px;border-radius:12px;border:1px solid #e5e7eb;font-weight:600}

/* Hide global floating donate on this page if site has one */
.fab,.slogan{display:none!important}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <div class="brand"><span>🛡️ Protect Children</span></div>
  <div class="nav">
    <a href="<?= $base ?>index.php">Home</a>
    <a href="<?= $base ?>quyengop/danhsach.php">Donations</a>
  </div>
</div>

<div class="shell">
  <!-- LEFT: Card form -->
  <div class="panel">
    <div class="card">
      <h1>This month, choose to stand with children—every day.</h1>
      <p class="lead">Start your support to help us deliver life-saving supplies and protection for children in crisis-affected areas.</p>

      <!-- Tabs -->
      <div class="tabs">
        <button type="button" class="tab active" id="tabMonthly">Monthly Gift <span class="heart">♥</span></button>
        <button type="button" class="tab inactive" id="tabSingle">Single Gift</button>
      </div>

      <form id="donateForm" method="post" action="<?= $base ?>quyengop/save_donation.php" onsubmit="return handleSubmit()">
        <input type="hidden" name="frequency" id="frequency" value="monthly">
        <input type="hidden" name="amount_vnd" id="amount_vnd" value="">
        <input type="hidden" name="lang" value="en">

        <!-- AMOUNTS -->
        <div id="amountMonthly">
          <div style="color:#0891b2;font-weight:700;margin:6px 0 8px">Your monthly gift provides long-lasting change</div>
          <div class="amounts">
            <div class="choice" data-amount="1200000"><small>Per month</small><strong>₫1,200,000</strong></div>
            <div class="choice" data-amount="2000000"><small>Per month</small><strong>₫2,000,000</strong></div>
            <div class="choice" data-amount="2400000"><small>Per month</small><strong>₫2,400,000</strong></div>
            <div class="choice" id="otherMonthly">
              <small>Other</small>
              <strong>Enter amount</strong>
              <div class="otherWrap" style="margin-top:8px;display:none">
                <input class="input" type="number" min="1000" step="1000" id="otherMonthlyInput" placeholder="Other VND">
              </div>
            </div>
          </div>
        </div>

        <div id="amountSingle" style="display:none">
          <div style="color:#475569;font-weight:700;margin:6px 0 8px">Make a one-time life-saving gift</div>
          <div class="amounts">
            <div class="choice" data-amount="200000"><small>One time</small><strong>₫200,000</strong></div>
            <div class="choice" data-amount="500000"><small>One time</small><strong>₫500,000</strong></div>
            <div class="choice" data-amount="1000000"><small>One time</small><strong>₫1,000,000</strong></div>
            <div class="choice" id="otherSingle">
              <small>Other</small>
              <strong>Enter amount</strong>
              <div class="otherWrap" style="margin-top:8px;display:none">
                <input class="input" type="number" min="1000" step="1000" id="otherSingleInput" placeholder="Other VND">
              </div>
            </div>
          </div>
        </div>

        <!-- INFO -->
        <div class="row">
          <div>
            <div class="label">Full name *</div>
            <input class="input" type="text" name="full_name" required placeholder="e.g. Nguyen Van A">
          </div>
          <div>
            <div class="label">Email *</div>
            <input class="input" type="email" name="email" required placeholder="name@example.com">
          </div>
        </div>

        <div class="row" style="margin-top:10px">
          <div>
            <div class="label">Donate as anonymous?</div>
            <select class="input" name="anonymous">
              <option value="0">No — show my name</option>
              <option value="1">Yes — keep me anonymous</option>
            </select>
          </div>
          <div>
            <div class="label">Message (optional)</div>
            <input class="input" type="text" name="note" placeholder="A short message…">
          </div>
        </div>

        <div class="notice">
          Disasters strike without warning, but your support ensures we are ready—delivering urgent aid, food, and medical care within hours of a crisis. Your data is protected and used only for communication and receipts.
        </div>

        <div class="actions">
          <button class="btn btn-primary" type="submit">Donate now</button>
          <a class="btn" href="<?= $base ?>quyengop/danhsach.php">See donation list</a>
          <div class="payicons" aria-hidden="true">
            <span class="badge">VISA</span>
            <span class="badge">Mastercard</span>
            <span class="badge">Apple Pay</span>
            <span class="badge">GPay</span>
            <span class="badge">AMEX</span>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- RIGHT: Hero image -->
  <div class="hero">
    <img src="<?= htmlspecialchars($heroImg, ENT_QUOTES) ?>" alt="Children in need">
    <div class="heroCaption">Your kindness protects children.</div>
  </div>
</div>

<script>
// Tab switching
const tabMonthly = document.getElementById('tabMonthly');
const tabSingle  = document.getElementById('tabSingle');
const boxMonthly = document.getElementById('amountMonthly');
const boxSingle  = document.getElementById('amountSingle');
const frequency  = document.getElementById('frequency');
const amountEl   = document.getElementById('amount_vnd');

function setTab(type){
  const isMonthly = type==='monthly';
  frequency.value = type;
  tabMonthly.classList.toggle('active', isMonthly);
  tabMonthly.classList.toggle('inactive', !isMonthly);
  tabSingle.classList.toggle('active', !isMonthly);
  tabSingle.classList.toggle('inactive', isMonthly);
  boxMonthly.style.display = isMonthly ? '' : 'none';
  boxSingle.style.display  = isMonthly ? 'none' : '';
  clearSelection();
}
tabMonthly.addEventListener('click', ()=>setTab('monthly'));
tabSingle .addEventListener('click', ()=>setTab('single'));

// Choice selection
function clearSelection(){
  document.querySelectorAll('.choice').forEach(c=>c.classList.remove('selected'));
  document.querySelectorAll('#otherMonthly .otherWrap, #otherSingle .otherWrap').forEach(el=>el.style.display='none');
  amountEl.value = '';
}
document.querySelectorAll('.choice').forEach(c=>{
  if(c.id==='otherMonthly' || c.id==='otherSingle'){
    c.addEventListener('click', ()=>{
      clearSelection();
      c.classList.add('selected');
      c.querySelector('.otherWrap').style.display='flex';
      (c.querySelector('input')||{}).focus?.();
    });
  }else{
    c.addEventListener('click', ()=>{
      clearSelection();
      c.classList.add('selected');
      amountEl.value = c.dataset.amount || '';
    });
  }
});
// Keep amount when typing "Other"
document.getElementById('otherMonthlyInput')?.addEventListener('input', e=>amountEl.value = e.target.value);
document.getElementById('otherSingleInput')?.addEventListener('input', e=>amountEl.value = e.target.value);

// Submit validation
function handleSubmit(){
  const val = parseInt(amountEl.value||'0',10);
  if(!val || val<1000){
    alert('Please select or enter an amount (minimum 1,000 VND).');
    return false;
  }
  return true;
}
</script>
</body>
</html>
