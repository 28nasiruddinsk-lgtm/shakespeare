// Flag + country dial code on every phone field (intl-tel-input), and a hidden "visitor_location"
// field (city, state/province, country) on every enquiry form, both from one IP lookup.
(function () {
  var lookup; // one IP lookup per page, shared by every field and form
  function geo() {
    return lookup || (lookup = fetch('https://get.geojs.io/v1/ip/geo.json')
      .then(function (r) { return r.json(); })
      .catch(function () { return {}; }));
  }

  // Hidden location field on the main site forms and the landing page forms.
  var forms = document.querySelectorAll('form[action$="submit-form.php"], form[action$="process_form.php"]');
  forms.forEach(function (form) {
    if (form.querySelector('input[name="visitor_location"]')) return;
    var hidden = document.createElement('input');
    hidden.type = 'hidden';
    hidden.name = 'visitor_location';
    form.appendChild(hidden);
  });
  if (forms.length) {
    geo().then(function (d) {
      var place = [d.city, d.region, d.country].filter(Boolean).join(', ');
      document.querySelectorAll('input[name="visitor_location"]').forEach(function (h) { h.value = place; });
    });
  }

  if (!window.intlTelInput) return;

  var fields = [];
  document.querySelectorAll('input[type="tel"]').forEach(function (input) {
    input.removeAttribute('placeholder'); // the library shows an example number for the chosen country
    fields.push({
      input: input,
      iti: window.intlTelInput(input, {
        initialCountryLookup: function () {
          return geo().then(function (d) { return (d.country_code || 'us').toLowerCase(); });
        },
        separateDialCode: true,
        countrySearch: true,
        countryOrder: ['us', 'gb', 'ca', 'au'],
      }),
    });
  });

  // The forms read the field during their own submit handlers, so for that moment the field holds the
  // full number with the country code (+923001234567); it goes back to what the visitor typed right after.
  document.addEventListener('submit', function (e) {
    fields.forEach(function (f) {
      if (!e.target.contains(f.input) || !f.input.value.trim()) return;
      var typed = f.input.value;
      f.input.value = f.iti.getNumber() || typed;
      setTimeout(function () { f.input.value = typed; }, 0);
    });
  }, true);
})();
