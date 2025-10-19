<?php
// /auth/auth-pages.php
session_start();
// Nếu đã login thì không cho vào trang đăng nhập/đăng ký
if (isset($_SESSION['uid'])) {
  header('Location: ../index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Đăng nhập / Đăng ký</title>
  <style>
    :root{
      --bg:#fffaf5;
      --paper:#ffffff;
      --ink:#2b2b2b;
      --muted:#6b6b6b;
      --brand:#c24914;
      --brand-2:#f29f67;
      --accent:#4f8a8b;
      --radius:14px;
      --shadow:0 6px 24px rgba(0,0,0,.08);
      --danger:#dc2626;
      --ok:#16a34a;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0}
    body{
      font-family:Inter, system-ui, sans-serif;
      background:linear-gradient(180deg,var(--bg) 0%,#fff 100%);
      color:var(--ink);
    }
    .container{
      display:flex;align-items:center;justify-content:center;
      min-height:100vh;padding:40px 20px;
    }
    .card{
      display:grid;grid-template-columns:1fr 420px;
      width:960px;max-width:100%;
      background:var(--paper);border-radius:var(--radius);
      box-shadow:var(--shadow);overflow:hidden;
    }
    .info{
      padding:48px;
      background:linear-gradient(180deg,rgba(194,73,20,0.04),rgba(242,159,103,0.02));
      display:flex;flex-direction:column;gap:18px;
    }
    .brand{display:flex;align-items:center;gap:12px}
    .h1{font-size:20px;font-weight:700}
    .p-muted{color:var(--muted)}
    .form-wrap{padding:36px}
    .form{display:flex;flex-direction:column;gap:12px}
    .form h2{margin:0 0 6px 0}
    .form p.lead{margin:0;color:var(--muted)}
    .input{display:flex;flex-direction:column;gap:6px}
    .input label{font-size:13px;color:var(--muted)}
    .input input{
      padding:12px 14px;border-radius:10px;border:1px solid #eee;background:#fbfbfb;
      font-size:15px;outline:none;
    }
    .input input:focus{border-color:var(--accent);box-shadow:0 4px 16px rgba(79,138,139,0.08)}
    .btn{
      padding:12px 16px;border:none;border-radius:12px;
      background:linear-gradient(90deg,var(--brand),var(--brand-2));
      color:#fff;font-weight:700;cursor:pointer;
      box-shadow:0 8px 24px rgba(194,73,20,0.12);
      transition:transform .15s, opacity .15s;
    }
    .btn[disabled]{opacity:.6;cursor:not-allowed;transform:none!important}
    .btn:hover{transform:translateY(-2px)}
    .btn.ghost{
      background:transparent;border:1px solid rgba(194,73,20,.2);
      color:var(--brand);box-shadow:none;
    }
    .msg{padding:10px 12px;border-radius:10px;font-size:14px;display:none}
    .msg.err{background:#fee2e2;color:#991b1b;border:1px solid #fecaca}
    .msg.ok{background:#ecfdf5;color:#065f46;border:1px solid #a7f3d0}
    @media(max-width:900px){.card{grid-template-columns:1fr}.info{display:none}}
    @media(max-width:420px){.form-wrap{padding:20px}.input input{padding:10px}}
    /* ==== PASSWORD TOGGLE ==== */
.pw-wrap {
  position: relative;
  display: flex;
  align-items: center;
}
.toggle-pw {
  position: absolute;
  right: 12px;
  cursor: pointer;
  user-select: none;
  font-size: 18px;
  opacity: 0.6;
  transition: opacity .15s;
}
.toggle-pw:hover { opacity: 1; }
.password-field input {
  width: 100%;
  padding-right: 40px; /* chừa chỗ cho icon mắt */
}

  </style>
</head>
<body>
  <div class="container">
    <div class="card" id="auth-card">
      <div class="info">
        <div class="brand">
          <div>
            <div class="h1">🛡️ Protect Children</div>
            <div class="p-muted">Đăng nhập / Đăng ký</div>
          </div>
        </div>
        <p class="p-muted">Bảo vệ trẻ em. Bảo vệ tương lai.</p>
      </div>

      <div class="form-wrap">
        <!-- LOGIN -->
        <form class="form" id="login-form" autocomplete="on">
          <h2>Đăng nhập</h2>
          <p class="lead">Nhập email và mật khẩu</p>

          <div class="msg err" id="login-err"></div>

          <div class="input">
            <label for="login-email">Email</label>
            <input id="login-email" name="email" type="email" placeholder="example@mail.com" required />
          </div>
          <div class="input password-field">
  <label for="login-pass">Mật khẩu</label>
  <div class="pw-wrap">
    <input id="login-pass" name="password" type="password" placeholder="••••••••" required />
    <span class="toggle-pw" onclick="togglePw('login-pass', this)">👁️</span>
  </div>
</div>
          <div style="display:flex;gap:8px;margin-top:8px;align-items:center">
            <button type="submit" class="btn" id="btn-login">Đăng nhập</button>
            <button type="button" class="btn ghost" id="switch-register">Tạo tài khoản</button>
          </div>
        </form>

        <!-- REGISTER -->
        <form class="form" id="register-form" style="display:none" autocomplete="off">
          <h2>Đăng ký</h2>
          <p class="lead">Tạo tài khoản mới</p>

          <div class="msg err" id="reg-err"></div>
          <div class="msg ok" id="reg-ok"></div>

          <div class="input">
            <label for="reg-name">Họ & Tên</label>
            <input id="reg-name" name="name" type="text" placeholder="Nguyễn Văn A" required />
          </div>
          <div class="input">
            <label for="reg-email">Email</label>
            <input id="reg-email" name="email" type="email" placeholder="example@mail.com" required />
          </div>
          <div class="input password-field">
  <label for="reg-pass">Mật khẩu</label>
  <div class="pw-wrap">
    <input id="reg-pass" name="password" type="password" placeholder="••••••••" required />
    <span class="toggle-pw" onclick="togglePw('reg-pass', this)">👁️</span>
  </div>
</div>

<div class="input password-field">
  <label for="reg-pass2">Xác nhận mật khẩu</label>
  <div class="pw-wrap">
    <input id="reg-pass2" type="password" placeholder="••••••••" required />
    <span class="toggle-pw" onclick="togglePw('reg-pass2', this)">👁️</span>
  </div>
</div>

          <div style="display:flex;gap:8px;margin-top:8px;align-items:center">
            <button type="submit" class="btn" id="btn-register">Đăng ký</button>
            <button type="button" class="btn ghost" id="switch-login">Đã có tài khoản</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // ==== CẤU HÌNH ĐƯỜNG DẪN API (vì file nằm trong /auth/) ====
    const API_LOGIN    = '../api/auth_login.php';
    const API_REGISTER = '../api/auth_register.php';
    const HOME_URL     = '../index.php';

    // ==== CHUYỂN FORM ====
    const loginForm    = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    document.getElementById('switch-register').onclick = () => {
      loginForm.style.display = 'none';
      registerForm.style.display = 'flex';
      clearMsgs();
    };
    document.getElementById('switch-login').onclick = () => {
      registerForm.style.display = 'none';
      loginForm.style.display = 'flex';
      clearMsgs();
    };

    function clearMsgs(){
      for (const id of ['login-err','reg-err','reg-ok']) {
        const el = document.getElementById(id);
        if (el){ el.style.display='none'; el.textContent=''; }
      }
    }
    function showErr(id,msg){
      const el = document.getElementById(id);
      if (el){ el.textContent = msg || 'Có lỗi xảy ra'; el.style.display = 'block'; }
    }
    function showOk(id,msg){
      const el = document.getElementById(id);
      if (el){ el.textContent = msg || 'Thành công'; el.style.display = 'block'; }
    }

    // ==== ĐĂNG NHẬP ====
    loginForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      clearMsgs();

      const btn = document.getElementById('btn-login');
      btn.disabled = true; btn.textContent = 'Đang đăng nhập...';

      const email = document.getElementById('login-email').value.trim();
      const pass  = document.getElementById('login-pass').value;

      try{
        const res  = await fetch(API_LOGIN, {
          method: 'POST',
          headers: {'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'},
          body: new URLSearchParams({email, password: pass})
        });
        const data = await res.json();
        if (!res.ok || !data.ok) throw new Error(data.msg || 'Đăng nhập thất bại');
        // Thành công -> về trang chủ
        window.location.href = HOME_URL;
      }catch(err){
        showErr('login-err', err.message);
      }finally{
        btn.disabled = false; btn.textContent = 'Đăng nhập';
      }
    });

    // ==== ĐĂNG KÝ + TỰ ĐĂNG NHẬP ====
    registerForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      clearMsgs();

      const name  = document.getElementById('reg-name').value.trim();
      const email = document.getElementById('reg-email').value.trim();
      const pass  = document.getElementById('reg-pass').value;
      const pass2 = document.getElementById('reg-pass2').value;

      if (!name || !email || !pass) {
        showErr('reg-err','Vui lòng nhập đầy đủ thông tin');
        return;
      }
      if (pass !== pass2) {
        showErr('reg-err','Mật khẩu xác nhận không khớp');
        return;
      }

      const btn = document.getElementById('btn-register');
      btn.disabled = true; btn.textContent = 'Đang đăng ký...';

      try {
        // 1) Gọi API đăng ký
        const res = await fetch(API_REGISTER, {
          method:'POST',
          headers:{'Content-Type':'application/json; charset=UTF-8'},
          body: JSON.stringify({name, email, password: pass})
        });
        const data = await res.json();
        if (!data.ok) throw new Error(data.msg || 'Đăng ký thất bại');

        // 2) Tự động đăng nhập
        const resLogin = await fetch(API_LOGIN, {
          method: 'POST',
          headers: {'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'},
          body: new URLSearchParams({email, password: pass})
        });
        const dataLogin = await resLogin.json();
        if (!resLogin.ok || !dataLogin.ok) {
          // Nếu auto-login lỗi thì vẫn cho vào trang chủ, hoặc hiển thị thông báo và gợi ý đăng nhập lại
          showOk('reg-ok', 'Đăng ký thành công. Vui lòng đăng nhập.');
          registerForm.style.display='none';
          loginForm.style.display='flex';
          return;
        }

        // 3) Thành công -> về trang chủ
        window.location.href = HOME_URL;

      } catch(err){
        showErr('reg-err', err.message);
      } finally {
        btn.disabled = false; btn.textContent = 'Đăng ký';
      }
    });
    // ==== HIỂN THỊ / ẨN MẬT KHẨU ====
function togglePw(id, el) {
  const input = document.getElementById(id);
  if (!input) return;
  const showing = input.type === 'text';
  input.type = showing ? 'password' : 'text';
  el.textContent = showing ? '👁️' : '🙈';
}

  </script>
</body>
</html>
