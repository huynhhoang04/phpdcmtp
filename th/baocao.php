<section id="baocao" class="section alt">
  <div class="container">
    <header class="section-head">
      <h2>Báo cáo vụ việc</h2>
      <p>Gửi thông tin an toàn, bảo mật. Hệ thống không công khai dữ liệu cá nhân.</p>
    </header>

    <form class="report-form" id="reportForm">
      <div class="grid grid-2">
        <div class="form-group">
          <label for="name">Họ tên (tuỳ chọn)</label>
          <input id="name" name="name" type="text" placeholder="Nguyễn Văn A" />
        </div>
        <div class="form-group">
          <label for="phone">Số điện thoại (tuỳ chọn)</label>
          <input id="phone" name="phone" type="tel" placeholder="09xx xxx xxx" />
        </div>
      </div>

      <div class="form-group">
        <label for="location">Địa điểm (tỉnh/thành, quận/huyện)</label>
        <input id="location" name="location" type="text" placeholder="Hà Nội, Quận Hoàn Kiếm" required />
      </div>

      <div class="form-group">
        <label for="type">Loại vụ việc</label>
        <select id="type" name="type" required>
          <option value="">-- Chọn --</option>
          <option>Bạo hành thể chất</option>
          <option>Bạo hành tinh thần</option>
          <option>Xâm hại</option>
          <option>Bỏ bê</option>
          <option>Khác</option>
        </select>
      </div>

      <div class="form-group">
        <label for="desc">Mô tả chi tiết</label>
        <textarea id="desc" name="desc" rows="5" placeholder="Mô tả ngắn gọn, rõ ràng những gì bạn biết" required></textarea>
      </div>

      <div class="form-group">
        <label for="files">Tệp đính kèm (nếu có)</label>
        <input id="files" name="files" type="file" multiple />
      </div>

      <div class="form-actions">
        <button type="submit" class="btn">Gửi báo cáo</button>
        <p class="form-note">Hoặc gọi <strong>111</strong> để được hỗ trợ ngay.</p>
      </div>
    </form>
  </div>
</section>