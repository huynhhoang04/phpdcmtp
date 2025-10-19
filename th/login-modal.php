<!-- Login modal -->
<dialog id="loginModal" aria-labelledby="loginTitle">
  <form method="dialog" class="login-form">
    <h3 id="loginTitle">Đăng nhập quản trị</h3>
    <label for="email">Email</label>
    <input id="email" type="email" required placeholder="admin@example.com" />
    <label for="password">Mật khẩu</label>
    <input id="password" type="password" required placeholder="••••••••" />
    <menu>
      <button value="cancel" class="btn btn-outline">Hủy</button>
      <button value="login" class="btn">Đăng nhập</button>
    </menu>
  </form>
</dialog>