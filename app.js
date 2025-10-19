/* ===============================
   APP.JS – BTAPPHP (gọn, ổn định)
   =============================== */

console.log('[app.js] loaded');

/* Base path (đọc từ <meta name="app-base"> nếu có) */
const APP_BASE = document.querySelector('meta[name="app-base"]')?.content || '/BTAPPHPP1/';

/* 1) Toggle mobile menu */
(() => {
  const t = document.querySelector('.nav-toggle');
  const m = document.querySelector('#menu');
  if (!t || !m) return;
  const mq = matchMedia('(max-width:640px)');
  const apply = () => {
    const ex = t.getAttribute('aria-expanded') === 'true';
    if (mq.matches) m.style.display = ex ? 'flex' : 'none';
    else { m.style.display = 'flex'; t.setAttribute('aria-expanded', 'false'); }
  };
  t.addEventListener('click', () => {
    t.setAttribute('aria-expanded', String(!(t.getAttribute('aria-expanded') === 'true')));
    apply();
  });
  mq.addEventListener?.('change', apply);
  apply();
})();

/* 2) Tra cứu (demo) */
(() => {
  const f = document.querySelector('.search');
  const out = document.querySelector('.search-results');
  if (!f || !out) return;
  f.addEventListener('submit', e => {
    e.preventDefault();
    const q = new FormData(f).get('q')?.toString().trim(); if (!q) return;
    const esc = s => s.replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
    out.innerHTML = `
      <div class="grid grid-3">
        ${[1,2,3].map(i=>`<article class="post"><h3>Kết quả cho “${esc(q)}” #${i}</h3><p>Mô tả ngắn...</p><a class="post-link" href="#">Xem chi tiết</a></article>`).join('')}
      </div>`;
  });
})();

/* 3) Gửi báo cáo -> API */
(() => {
  const frm = document.getElementById('reportForm');
  if (!frm) return;
  frm.addEventListener('submit', async e => {
    e.preventDefault();
    try {
      const res = await fetch(`${APP_BASE}api/report_create.php`, { method:'POST', body:new FormData(frm) });
      const data = await res.json();
      alert(data.ok ? 'Đã ghi nhận báo cáo. Cảm ơn bạn!' : (data.msg || 'Có lỗi xảy ra.'));
      if (data.ok) frm.reset();
    } catch { alert('Không gửi được báo cáo. Vui lòng thử lại.'); }
  });
})();

/* 4) Login modal */
(() => {
  const btn = document.getElementById('openLogin');
  const dlg = document.getElementById('loginModal');
  if (!btn || !dlg) return;
  btn.addEventListener('click', e => { e.preventDefault(); dlg.showModal(); });
  dlg.addEventListener('click', e => {
    const r = dlg.getBoundingClientRect();
    const inside = r.top <= e.clientY && e.clientY <= r.bottom && r.left <= e.clientX && e.clientX <= r.right;
    if (!inside) dlg.close();
  });
})();

/* 5) Kiến thức & Hướng dẫn: API + filter + search + saved */
(() => {
  const grid = document.querySelector('.kt-grid');
  const chipBar = document.querySelector('.chip-row') || document.querySelector('.kt-filters');
  const chips = chipBar ? chipBar.querySelectorAll('.chip2, .chip') : [];
  const qInput = document.getElementById('ktQuery');
  const ageSel = document.getElementById('ageRange');
  const moreBtn = document.getElementById('ktLoadMore');
  if (!grid) return;

  const LS_KEY = 'saved_posts';
  const getSaved = () => new Set(JSON.parse(localStorage.getItem(LS_KEY) || '[]'));
  const setSaved = s => localStorage.setItem(LS_KEY, JSON.stringify([...s]));
  const activeFilter = () => (document.querySelector('.chip2.active, .chip.active')?.dataset.filter) || 'all';
  const matchAge = (ageData, selected) => {
    if (!selected) return true;
    if (!ageData) return false;
    const [amin, amax] = selected.split('-').map(Number);
    const [bmin, bmax] = ageData.split('-').map(Number);
    return !(bmax < amin || bmin > amax);
  };
  const norm = s => (s||'').toLowerCase().trim();

  async function fetchAndRender(filter = 'all', q = '', page = 1) {
  try {
    const url = `${APP_BASE}api/posts_list.php?filter=${encodeURIComponent(filter)}&q=${encodeURIComponent(q)}&page=${page}`;
    const res = await fetch(url, { headers:{'Accept':'application/json'} });

    // Nếu lỗi HTTP: đừng đụng vào DOM, fallback client
    if (!res.ok) throw new Error('HTTP ' + res.status);

    const payload = await res.json();

    // Chấp nhận nhiều schema: [], {posts:[]}, {items:[]}, {data:[]}
    const items =
      Array.isArray(payload) ? payload :
      (Array.isArray(payload?.posts) ? payload.posts :
      (Array.isArray(payload?.items) ? payload.items :
      (Array.isArray(payload?.data)  ? payload.data  : [])));

    // KHÔNG ghi đè nếu API không có dữ liệu → giữ nguyên HTML hiện có
    if (!items.length) {
      console.warn('[KT] API không có dữ liệu, giữ nguyên nội dung hiện có.');
      return;
    }

    const saved = getSaved();
    grid.innerHTML = items.map(p => `
      <article class="post post-card" data-tags="${(p.tags||[]).join(' ')}" data-age="${p.age_range||''}">
        <figure class="post-thumb">
          <img src="${p.thumb || `${APP_BASE}assets/hero_placeholder.svg`}" alt="">
        </figure>
        <div class="post-body">
          <h3 class="post-title">${p.title || ''}</h3>
          <p class="post-excerpt">${p.excerpt || ''}</p>
          <ul class="post-meta">
            ${p.read_time_min ? `<li>⏱️ ${p.read_time_min} phút</li>` : ''}
            ${p.age_range ? `<li>👦 ${p.age_range}</li>` : ''}
            ${p.updated ? `<li>🗓️ Cập nhật: ${p.updated}</li>` : ''}
          </ul>
        </div>
        <footer class="post-foot">
          <a class="btn-link" href="bai-viet.php?slug=${encodeURIComponent(p.slug || '')}">Xem chi tiết</a>
          <button class="icon-btn" data-title="${p.title || ''}" aria-label="Lưu bài">${saved.has(p.title || '') ? '★' : '☆'}</button>
        </footer>
      </article>
    `).join('');

  } catch (err) {
    console.warn('[KT] Lỗi API, dùng clientFilter:', err?.message);
    // Fallback: lọc trên DOM sẵn có, KHÔNG xoá nội dung
    clientFilter(filter, q, ageSel?.value || '');
  }
}


  function clientFilter(filter = 'all', q = '', age = '') {
    const items = grid.querySelectorAll('.post');
    const qn = norm(q);
    let visible = 0;
    items.forEach(el => {
      const tags = (el.getAttribute('data-tags') || '').split(/\s+/);
      const ageData = el.getAttribute('data-age') || '';
      const text = norm(el.textContent);
      const okTag = filter === 'all' || tags.includes(filter);
      const okAge = matchAge(ageData, age);
      const okQ = !qn || text.includes(qn);
      const show = okTag && okAge && okQ;
      el.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    if (!visible && !grid.querySelector('.no-result')) {
      grid.insertAdjacentHTML('beforeend', `<p class="no-result" style="grid-column:1/-1;margin:8px 0 0;color:#6b6b6b">Chưa có bài phù hợp.</p>`);
    }
  }

  fetchAndRender();

  chips.forEach(ch => ch.addEventListener('click', () => {
    chips.forEach(c => { c.classList.remove('active'); c.setAttribute('aria-selected','false'); });
    ch.classList.add('active'); ch.setAttribute('aria-selected','true');
    fetchAndRender(ch.dataset.filter || 'all', qInput?.value || '');
  }));

  qInput?.addEventListener('input', e => {
    fetchAndRender(activeFilter(), e.target.value);
  });

  ageSel?.addEventListener('change', () => {
    clientFilter(activeFilter(), qInput?.value || '', ageSel.value || '');
  });

  document.addEventListener('click', e => {
    const btn = e.target.closest('.icon-btn');
    if (!btn || !grid.contains(btn)) return;
    const title = btn.dataset.title || btn.closest('.post')?.querySelector('h3')?.textContent?.trim();
    if (!title) return;
    const s = getSaved();
    if (s.has(title)) { s.delete(title); btn.textContent = '☆'; }
    else { s.add(title); btn.textContent = '★'; }
    setSaved(s);
  });

  moreBtn?.addEventListener('click', () => {
    alert('Demo: Gọi API phân trang để tải thêm bài.');
  });

  // Rating sao
  (function initRating(){
    const wrap = document.querySelector('#ratingBlock .stars');
    if (!wrap) return;
    const stars = [...wrap.querySelectorAll('.star')];
    const setUI = v => stars.forEach((s,i)=> s.classList.toggle('is-dim', i >= v));
    setUI(0);
    stars.forEach((btn, idx) => {
      const v = idx + 1;
      btn.addEventListener('mouseenter', ()=> setUI(v));
      btn.addEventListener('mouseleave', ()=> setUI(0));
      btn.addEventListener('click', () => {
        setUI(v);
        alert(`Cảm ơn bạn đã đánh giá ${v} ⭐`);
      });
    });
  })();
})();

/* Helper: cuộn mượt bằng rAF + easing */
const Smooth = (() => {
  // easeInOutCubic
  const ease = t => t < 0.5 ? 4*t*t*t : 1 - Math.pow(-2*t + 2, 3)/2;

  function toY(targetY, duration = 700) {
    const startY = window.scrollY || window.pageYOffset;
    const dist = targetY - startY;
    if (Math.abs(dist) < 2) return; // quá gần thì khỏi cuộn

    let start = null, rafId = null, cancelled = false;

    const stop = () => { cancelled = true; if (rafId) cancelAnimationFrame(rafId); };
    // Hủy animation nếu người dùng cuộn thủ công
    const onUserScroll = () => stop();
    window.addEventListener('wheel', onUserScroll, { passive: true, once: true });
    window.addEventListener('touchmove', onUserScroll, { passive: true, once: true });

    function step(ts) {
      if (cancelled) return;
      if (!start) start = ts;
      const t = Math.min((ts - start) / duration, 1);
      const y = startY + dist * ease(t);
      window.scrollTo(0, y);
      if (t < 1) rafId = requestAnimationFrame(step);
    }
    rafId = requestAnimationFrame(step);
  }

  // cuộn tới element với offset (bù header)
  function toEl(el, offset = 100, duration = 700) {
    const y = el.getBoundingClientRect().top + window.scrollY - (Number.isFinite(offset) ? offset : 100);
    toY(y, duration);
  }

  return { toY, toEl };
})();

/* 6) Smooth scroll anchor (hợp nhất, có offset header) */
(() => {
  const META_OFFSET = parseInt(document.querySelector('meta[name="anchor-offset"]')?.content || '', 10);
  const DEFAULT_OFFSET = Number.isFinite(META_OFFSET) ? META_OFFSET : 100;

  document.addEventListener('click', e => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;

    const id = a.getAttribute('href');
    if (!id || id === '#') return;

    // Link trong TOC để handler riêng ở #8
    if (a.closest('#toc')) return;

    const target = document.querySelector(id);
    if (!target) return;

    e.preventDefault();
    const perLinkOffset = parseInt(a.dataset.offset || '', 10);
    Smooth.toEl(target, Number.isFinite(perLinkOffset) ? perLinkOffset : DEFAULT_OFFSET, 700);
    history.pushState?.(null, '', id);
  });

  // (Tùy chọn) khi trang mở với hash, cuộn mượt sau khi DOM sẵn sàng
  window.addEventListener('load', () => {
    if (location.hash) {
      const el = document.querySelector(location.hash);
      if (el) Smooth.toEl(el, DEFAULT_OFFSET, 700);
    }
  });
})();

/* 7) News list demo (nếu có .news-list) */
(async function loadNews(){
  const container = document.querySelector('.news-list');
  if (!container) return;
  try {
    const res = await fetch(`${APP_BASE}api/posts_list.php?page_size=4`);
    const data = await res.json();
    if (!data || !data.posts) return;
    container.innerHTML = data.posts.map(p => `
      <article class="news-item">
        <img src="${p.thumb || `${APP_BASE}assets/noimg.png`}" alt="">
        <h4>${p.title}</h4>
      </article>
    `).join('');
  } catch {}
})();

/* 8) Table of Contents (TOC) tự động */
(() => {
  const article  = document.querySelector('.article-body');
  const listRoot = document.querySelector('#toc .toc-list');
  if (!article || !listRoot) return;

  const heads = [...article.querySelectorAll('h2, h3, h4')];
  console.log('[TOC] headings found =', heads.length);
  if (!heads.length) { listRoot.innerHTML = '<li>(Không tìm thấy tiêu đề)</li>'; return; }

  // Slugify bỏ luôn số đầu dòng kiểu "1.", "2)", "3 -", v.v.
  const slugify = s => s
    .replace(/^\s*\d+(?:[.)-])?\s*/u, '') // bỏ số thứ tự ở đầu
    .toLowerCase()
    .normalize('NFD')
    .replace(/[\u0300-\u036f]/g, '')
    .replace(/[^a-z0-9\s-]/g, '')
    .trim()
    .replace(/\s+/g, '-')
    .replace(/-+/g, '-');

  // Bỏ số thứ tự ở đầu tiêu đề khi hiển thị trong TOC
  const stripLeadingNums = (txt) => txt
    .replace(/^\s*(?:\d+(?:\.\d+)*)?(?:[.)])?\s*(?:[-\u2013\u2014:])?\s*/u, '')
    .trim();

  heads.forEach((h,i)=>{ if(!h.id) h.id = slugify(h.textContent) || ('muc-'+(i+1)); });

  const base = Math.min(...heads.map(h => +h.tagName[1]));
  const counters = [0,0,0,0,0,0];
  let currentLevel = base;
  let container = listRoot;

  const pushItem = (level, rawText, href) => {
    // Đi xuống/lên cấp
    while (currentLevel < level){
      const ol = document.createElement('ol');
      ol.className = 'toc-list';
      (container.lastElementChild || container).appendChild(ol);
      container = ol;
      currentLevel++;
    }
    while (currentLevel > level){
      container = container.parentElement.closest('ol') || listRoot;
      currentLevel--;
    }

    // Đánh số nội bộ (không render ra chữ)
    counters[level] = (counters[level]||0) + 1;
    for (let k = level+1; k < counters.length; k++) counters[k] = 0;

    // Lột số đầu tiêu đề khi hiển thị
    const cleanText = String(rawText).replace(
      /^\s*[\u200B-\u200D\uFEFF]*\d+(?:\.\d+)*\s*(?:[.)])?\s*(?:[-\u2013\u2014:])?\s*|^\s*[\u00A0]+/u,
      ''
    ).trim();

    const li = document.createElement('li');
    li.innerHTML = `<a href="#${href}">${cleanText}</a>`;
    container.appendChild(li);
  };

  heads.forEach(h => {
    const level = parseInt(h.tagName[1], 10);
    pushItem(level, h.textContent.trim(), h.id);
  });

  // === Handler click TOC dùng Smooth + offset (áp cho H2/H3/H4) ===
  const META_OFFSET_TOC = parseInt(document.querySelector('meta[name="anchor-offset"]')?.content || '', 10);
  const DEFAULT_OFFSET_TOC = Number.isFinite(META_OFFSET_TOC) ? META_OFFSET_TOC : 100;

  document.getElementById('toc')?.addEventListener('click', e => {
    const a = e.target.closest('a[href^="#"]'); if (!a) return;
    const id = a.getAttribute('href'); if (!id) return;
    const target = document.querySelector(id); if (!target) return;

    e.preventDefault();
    const perLinkOffset = parseInt(a.dataset.offset || '', 10); // <a data-offset="140">
    Smooth.toEl(target, Number.isFinite(perLinkOffset) ? perLinkOffset : DEFAULT_OFFSET_TOC, 700);
    history.pushState?.(null, '', id);
  });

  const toc = document.getElementById('toc');
  const btn = toc?.querySelector('.toc-toggle');
  btn?.addEventListener('click', () => {
    const body = toc.querySelector('.toc-body');
    const collapsed = body.style.display === 'none';
    body.style.display = collapsed ? '' : 'none';
    toc.setAttribute('aria-collapsed', collapsed ? 'false' : 'true');
    btn.setAttribute('aria-expanded', collapsed ? 'true' : 'false');
  });
})();
/* datlichhen.php */
/******************** CẤU HÌNH CHUYÊN GIA THEO DỊCH VỤ ********************/
/******************** CẤU HÌNH CHUYÊN GIA THEO DỊCH VỤ ********************/
const expertsByService = {
  'Tham vấn phụ huynh': [
    'Tiến Dũng (tham vấn phụ huynh)',
    'Lê Hòa (tham vấn phụ huynh)'
  ],
  'Tư vấn pháp lý cơ bản': [
    'Hữu Nam (pháp lý)'
  ],
  'Hỗ trợ sức khỏe tinh thần': [
    'Trần Phong (tâm lý)',
    'Đức Sơn (sức khỏe)'
  ],
  'Chương trình tại trường học': [
    'Kim Ngân (chương trình trường học)'
  ]
};

/******************** TIỆN ÍCH (TOAST) ********************/
const toast = document.getElementById('toast');
function showToast(text, type = 'ok') {
  if (!toast) return;
  toast.textContent = text;
  toast.className = 'toast show ' + (type === 'ok' ? 'ok' : 'err');
  setTimeout(() => toast.className = 'toast ' + (type === 'ok' ? 'ok' : 'err'), 2200);
}

/******************** PHẦN TỬ DOM ********************/
const form      = document.getElementById('bookingForm');
const serviceEl = document.getElementById('service');
const expertEl  = document.getElementById('expert');
const dateEl    = document.getElementById('date');
const grid      = document.getElementById('slotGrid');
const timeHidden= document.getElementById('timeHidden');

const s_service = document.getElementById('s_service');
const s_expert  = document.getElementById('s_expert');
const s_date    = document.getElementById('s_date');
const s_time    = document.getElementById('s_time');
const s_name    = document.getElementById('s_name'); // nếu không dùng vẫn OK

/******************** KHỞI TẠO: NGÀY HẸN ********************/
if (dateEl) {
  const today = new Date(); today.setHours(0,0,0,0);
  dateEl.min = today.toISOString().split('T')[0];
  dateEl.addEventListener('change', () => {
    if (!dateEl.value) return;
    const d = new Date(dateEl.value + 'T00:00:00');
    const day = d.getDay(); // 0=CN, 6=T7
    if (day === 0 || day === 6) {
      showToast('Vui lòng chọn ngày làm việc (Thứ 2–Thứ 6).', 'err');
      dateEl.value = '';
    }
    updateSummary();
  });
}

/******************** CHỌN GIỜ (CLICK CHẠY CHẮC CHẮN) ********************/
if (grid) {
  grid.addEventListener('click', (e) => {
    const btn = e.target.closest('.slot');
    if (!btn || btn.disabled) return;
    grid.querySelectorAll('.slot').forEach(b => b.setAttribute('aria-checked', 'false'));
    btn.setAttribute('aria-checked', 'true');
    timeHidden.value = btn.dataset.t || '';
    updateSummary();
  });
}

/******************** HÀM ĐỔ DỮ LIỆU CHUYÊN GIA ********************/
function populateExperts(serviceText) {
  if (!expertEl) return;

  // Xóa toàn bộ options hiện có
  expertEl.innerHTML = '';
  // Option mặc định
  const def = document.createElement('option');
  def.value = '';
  def.textContent = '— Chọn chuyên gia —';
  expertEl.appendChild(def);

  // Không chọn dịch vụ -> disable
  if (!serviceText) {
    expertEl.disabled = true;
    return;
  }

  const list = expertsByService[serviceText] || [];
  list.forEach(name => {
    const op = document.createElement('option');
    op.textContent = name;
    op.value = name;
    expertEl.appendChild(op);
  });

  expertEl.disabled = list.length === 0;
}

/******************** TÓM TẮT ********************/
function updateSummary() {
  if (s_service) s_service.textContent = serviceEl?.value || '—';
  if (s_expert)  s_expert.textContent  = expertEl?.value  || '—';
  if (s_date)    s_date.textContent    = dateEl?.value     || '—';
  if (s_time)    s_time.textContent    = timeHidden?.value || '—';
  if (s_name)    s_name.textContent    = '—';
}

/******************** LIÊN KẾT DỊCH VỤ -> CHUYÊN GIA ********************/
if (serviceEl) {
  serviceEl.addEventListener('input', () => {
    populateExperts(serviceEl.value);
    expertEl.value = '';
    updateSummary();
  });
}
if (expertEl) expertEl.addEventListener('input', updateSummary);
if (dateEl)   dateEl.addEventListener('input', updateSummary);

/******************** SUBMIT FORM (AJAX) ********************/
if (form) {
  form.addEventListener('submit', async (e) => {
    if (!form.checkValidity()) { e.preventDefault(); form.reportValidity(); return; }
    e.preventDefault();
    if (!timeHidden.value) { showToast('Vui lòng chọn giờ hẹn', 'err'); return; }

    try {
      const fd = new FormData(form);
      const res = await fetch(form.action, { method: 'POST', body: fd });
      const json = await res.json().catch(() => ({ ok: false, msg: 'Có lỗi máy chủ' }));
      showToast(json.msg || (json.ok ? 'Đặt lịch thành công!' : 'Không thể đặt lịch.'), json.ok ? 'ok' : 'err');

      if (json.ok) {
        form.reset();
        timeHidden.value = '';
        if (grid) grid.querySelectorAll('.slot').forEach(b => b.setAttribute('aria-checked', 'false'));
        populateExperts(''); // reset danh sách chuyên gia
        updateSummary();
      }
    } catch {
      showToast('Không thể kết nối máy chủ.', 'err');
    }
  });

  // Reset bằng nút "Xóa form"
  form.addEventListener('reset', () => {
    timeHidden.value = '';
    if (grid) grid.querySelectorAll('.slot').forEach(b => b.setAttribute('aria-checked', 'false'));
    populateExperts('');
    // đợi reset hoàn tất rồi cập nhật
    setTimeout(updateSummary, 0);
  });
}

/******************** KHỞI CHẠY BAN ĐẦU ********************/
populateExperts('');
updateSummary();
