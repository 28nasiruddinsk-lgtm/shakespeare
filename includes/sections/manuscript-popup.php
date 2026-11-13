<!-- =========================================================
     SUBMIT MANUSCRIPT POPUP
     Opens from any button/link with class "js-manuscript-popup"
     or href="#manuscript-popup". Also opens by itself 1.5 s after the website loads (once per visit).
     Everything it needs (HTML, CSS, JS) is in this one file.
========================================================== -->
<style>
  .spm-popup{position:fixed;inset:0;z-index:2147483000;display:none;align-items:center;justify-content:center;padding:16px}
  .spm-popup.spm-open{display:flex}
  .spm-overlay{position:absolute;inset:0;background:rgba(0,0,0,.65)}
  .spm-box{position:relative;width:min(620px,100%);max-height:calc(100vh - 32px);overflow-y:auto;background:#fffdf8;border:1px solid rgba(201,170,106,.7);box-shadow:0 30px 90px rgba(0,0,0,.35);padding:40px 36px 32px}
  .spm-close{position:absolute;top:12px;right:12px;width:38px;height:38px;border:0;background:#043b24;color:#fff;font-size:26px;line-height:1;cursor:pointer}
  .spm-eyebrow{margin:0 0 10px;text-transform:uppercase;letter-spacing:.18em;font-size:12px;font-weight:800;color:#b8964f}
  .spm-box h2{margin:0;font-size:clamp(30px,4vw,44px);line-height:1.05}
  .spm-intro{margin:14px 0 22px;color:#555;font-size:15px;line-height:1.7}
  .spm-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
  .spm-box label{display:block;margin-bottom:14px}
  .spm-box label span{display:block;margin-bottom:6px;font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#1e2924}
  .spm-box input,.spm-box select,.spm-box textarea{width:100%;box-sizing:border-box;padding:12px 14px;border:1px solid #cfc8b8;background:#fff;font:inherit;font-size:15px;color:#1e2924}
  .spm-box input:focus,.spm-box select:focus,.spm-box textarea:focus{outline:2px solid #043b24;outline-offset:0;border-color:#043b24}
  .spm-hp{position:absolute!important;left:-9999px!important;width:1px;height:1px;opacity:0}
  .spm-submit{width:100%;min-height:50px;border:0;background:#043b24;color:#fff;font-size:13px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;cursor:pointer}
  .spm-submit:disabled{opacity:.7;cursor:wait}
  .spm-status{margin:12px 0 0;font-size:14px;min-height:20px}
  .spm-status.ok{color:#0a7a3d}.spm-status.err{color:#b3261e}
  body.spm-lock{overflow:hidden}
  @media(max-width:600px){.spm-box{padding:44px 20px 24px}.spm-row{grid-template-columns:1fr;gap:0}}
</style>

<div class="spm-popup" id="manuscript-popup" aria-hidden="true">
  <div class="spm-overlay" data-spm-close></div>
  <div class="spm-box" role="dialog" aria-modal="true" aria-labelledby="spm-title">
    <button type="button" class="spm-close" data-spm-close aria-label="Close">&times;</button>

    <p class="spm-eyebrow">Submit Your Manuscript</p>
    <h2 id="spm-title">Begin the Royal Review.</h2>
    <p class="spm-intro">Share your manuscript, book idea, or publishing goal. Our editorial team will review your project and guide you toward the right next step.</p>

    <form class="spm-form" action="submit-form.php" method="post">
      <input type="hidden" name="form_type" value="Manuscript Submission">
      <input class="spm-hp" type="text" name="hp_check" autocomplete="new-password" tabindex="-1" aria-hidden="true">

      <div class="spm-row">
        <label><span>Name</span><input type="text" name="name" placeholder="Your name" required></label>
        <label><span>Email</span><input type="email" name="email" placeholder="you@example.com" required></label>
      </div>

      <div class="spm-row">
        <label><span>Phone</span><input type="tel" name="phone" placeholder="+1 646 258 0616"></label>
        <label><span>Project Type</span>
          <select name="service">
            <option>Book Publishing</option>
            <option>Ghostwriting</option>
            <option>Editing</option>
            <option>Ebook Writing</option>
            <option>Children&#39;s Book</option>
          </select>
        </label>
      </div>

      <label><span>Manuscript Notes</span>
        <textarea name="message" rows="4" placeholder="Tell us about your genre, word count, goals, timeline, or publishing needs"></textarea>
      </label>

      <button type="submit" class="spm-submit">Send for Review</button>
      <p class="spm-status" role="status" aria-live="polite"></p>
    </form>
  </div>
</div>

<script>
(function () {
  var popup = document.getElementById('manuscript-popup');
  if (!popup) return;
  var form = popup.querySelector('.spm-form');
  var status = popup.querySelector('.spm-status');
  var btn = popup.querySelector('.spm-submit');

  function openPopup() {
    popup.classList.add('spm-open');
    popup.setAttribute('aria-hidden', 'false');
    document.body.classList.add('spm-lock');
    var first = popup.querySelector('input[name="name"]');
    if (first) setTimeout(function () { first.focus(); }, 50);
  }
  function closePopup() {
    popup.classList.remove('spm-open');
    popup.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('spm-lock');
  }
  window.openManuscriptPopup = openPopup;
  window.closeManuscriptPopup = closePopup;

  // Open on any Submit Manuscript button
  document.addEventListener('click', function (e) {
    var t = e.target.closest ? e.target.closest('.js-manuscript-popup, a[href="#manuscript-popup"], a[href$="#manuscript-popup"]') : null;
    if (!t) return;
    e.preventDefault();
    e.stopPropagation();
    openPopup();
  }, true);

  // Open by itself when the website loads (once per visit, so it doesn't reopen on every page)
  window.addEventListener('load', function () {
    try { if (sessionStorage.getItem('spm-auto-shown')) return; sessionStorage.setItem('spm-auto-shown', '1'); } catch (e) {}
    setTimeout(function () { if (!popup.classList.contains('spm-open')) openPopup(); }, 1500);
  });

  // Close: X button, dark background, Esc key
  popup.querySelectorAll('[data-spm-close]').forEach(function (el) {
    el.addEventListener('click', closePopup);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && popup.classList.contains('spm-open')) closePopup();
  });

  // Submit to submit-form.php without leaving the page
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!form.checkValidity()) { form.reportValidity(); return; }
    btn.disabled = true; btn.textContent = 'Sending...';
    status.className = 'spm-status'; status.textContent = '';

    fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'X-Requested-With': 'XMLHttpRequest' } })
      .then(function (r) { return r.json().then(function (d) { return { ok: r.ok && d.ok, msg: d.message }; }); })
      .then(function (res) {
        if (!res.ok) throw new Error(res.msg || 'Something went wrong. Please try again.');
        window.location.href = 'thank-you.php';
      })
      .catch(function (err) {
        status.className = 'spm-status err';
        status.textContent = err.message || 'Please call us at +1 646 258 0616.';
      })
      .then(function () { btn.disabled = false; btn.textContent = 'Send for Review'; });
  });
})();
</script>
