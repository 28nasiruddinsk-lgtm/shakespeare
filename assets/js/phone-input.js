// Flag + country dial code on every phone field (intl-tel-input), country picked from the visitor's IP.
(function () {
  if (!window.intlTelInput) return;

  var lookup; // one IP lookup per page, shared by every phone field
  function ipCountry() {
    return lookup || (lookup = fetch('https://get.geojs.io/v1/ip/country.json')
      .then(function (r) { return r.json(); })
      .then(function (d) { return (d.country || 'us').toLowerCase(); })
      .catch(function () { return 'us'; }));
  }

  var fields = [];
  document.querySelectorAll('input[type="tel"]').forEach(function (input) {
    input.removeAttribute('placeholder'); // the library shows an example number for the chosen country
    fields.push({
      input: input,
      iti: window.intlTelInput(input, {
        initialCountryLookup: ipCountry,
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
