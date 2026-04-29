<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Investment Calculator | Vista Lomas</title>
  <link rel="icon" href="img/shared/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="manifest-investment.json">
  <link rel="apple-touch-icon" href="img/shared/logo-fallback.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-bg: #ffffff;
      --lls-white: #ffffff;
      --lls-ink: #21523a;
      --lls-copy: #628271;
      --lls-green-800: #0d673d;
      --lls-green-700: #129247;
      --lls-green-600: #19a950;
      --lls-green-gradient: linear-gradient(30deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
      --lls-shell: 1220px;
      --lls-shadow-soft: 0 24px 50px rgba(20, 79, 54, 0.12);
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; overflow-x: clip; }
    body {
      margin: 0;
      background: var(--lls-bg);
      color: var(--lls-ink);
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      line-height: 1.5;
      overflow-x: clip;
    }
    img { display: block; max-width: 100%; }
    a { color: inherit; }

    .lls-shell {
      width: min(var(--lls-shell), 100%);
      margin-inline: auto;
      padding-inline: 1rem;
    }

    .lls-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 0.8rem 2.2rem;
      border: 1px solid transparent;
      border-radius: 2px;
      background: var(--lls-green-gradient);
      color: var(--lls-white);
      font: inherit;
      font-size: 0.94rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-decoration: none;
      text-transform: uppercase;
      box-shadow: 0 10px 20px rgba(11, 79, 51, 0.15);
      transition: all 0.2s ease;
      cursor: pointer;
    }
    .lls-button:hover { transform: translateY(-2px); opacity: 0.9; }

    /* Page header banner */
    .calc-page-banner {
      background: var(--lls-green-gradient);
      color: #fff;
      text-align: center;
      padding: 3.5rem 1rem 3rem;
    }
    .calc-page-banner h1 {
      margin: 0 0 0.4rem;
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      line-height: 1.1;
    }
    .calc-page-banner p {
      margin: 0;
      font-size: 1.05rem;
      opacity: 0.88;
    }

    /* Calculator */
    .lls-calc-section {
      padding: clamp(2.5rem, 5vw, 4.5rem) 0 clamp(4rem, 7vw, 6rem);
      background: #f1f7f4;
    }

    .lls-calc-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: start;
    }

    .lls-calc-form h3 {
      margin: 0 0 1.5rem;
      font-size: 1.6rem;
      color: #1a3a28;
    }

    .lls-calc-field { margin-bottom: 1.8rem; }
    .lls-calc-field label {
      display: block;
      margin-bottom: 0.6rem;
      font-weight: 600;
      color: #3e5a4b;
    }

    .lls-calc-input-wrap {
      display: flex;
      align-items: center;
      background: #ffffff;
      border: 2px solid #c9e0d3;
      border-radius: 8px;
      padding: 0 1rem;
      transition: border-color 0.2s;
    }
    .lls-calc-input-wrap:focus-within { border-color: var(--lls-green-700); }
    .lls-calc-input-wrap span { color: var(--lls-green-700); font-weight: 700; margin-right: 0.4rem; }
    .lls-calc-input-wrap input {
      border: 0; padding: 1rem 0; width: 100%;
      font: inherit; color: var(--lls-ink); outline: none;
    }

    .lls-calc-summary {
      background: #ffffff;
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: var(--lls-shadow-soft);
      border: 1px solid #d4e8dd;
    }

    .lls-summary-row {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.2rem;
    }
    .lls-summary-label { color: var(--lls-copy); font-size: 0.94rem; font-weight: 600; }
    .lls-summary-val { font-weight: 700; font-size: 1.1rem; }
    .lls-summary-val--green { color: var(--lls-green-700); }

    .lls-summary-bar {
      height: 8px; background: #eee; border-radius: 99px; margin: 1.8rem 0; overflow: hidden;
    }
    .lls-summary-bar-fill { height: 100%; background: var(--lls-green-700); transition: width 0.3s; }

    .lls-summary-monthly-label { font-weight: 600; color: #3e5a4b; margin-bottom: 0.5rem; }
    .lls-summary-monthly-val {
      font-size: clamp(2.5rem, 4.5vw, 3.5rem);
      font-weight: 700; color: var(--lls-green-800);
      line-height: 1; margin-bottom: 1.8rem;
    }
    .lls-summary-foot { font-size: 0.85rem; color: var(--lls-copy); margin-top: 2rem; font-style: italic; }

    /* Currency selector */
    .ric-currency-wrap { margin-bottom: 1.8rem; }
    .ric-currency-label { font-size: 1.15rem; font-weight: 700; color: #1a3a28; margin: 0 0 0.75rem; }
    .ric-currency-sel { display: flex; gap: 0.7rem; }
    .ric-currency-btn {
      display: flex; align-items: center; justify-content: center;
      width: 52px; height: 52px; border: 3px solid #c9e0d3;
      border-radius: 50%; background: #fff; cursor: pointer;
      font-size: 1.9rem; line-height: 1; padding: 0;
      transition: border-color 0.2s, box-shadow 0.2s, transform 0.15s;
    }
    .ric-currency-btn.ric-curr-active {
      border-color: var(--lls-green-700);
      box-shadow: 0 0 0 3px rgba(18,146,71,0.25);
      transform: scale(1.1);
    }

    /* Expense list */
    .ric-exp-list { margin: 0 0 1.4rem; border: 1px solid #e4ede8; border-radius: 8px; overflow: hidden; }
    .ric-exp-row {
      display: flex; justify-content: space-between; align-items: center;
      padding: 0.45rem 0.9rem; font-size: 0.88rem; color: var(--lls-copy);
      border-bottom: 1px solid #edf4f0;
    }
    .ric-exp-row:last-child { border-bottom: none; }
    .ric-exp-total { background: #f6faf8; font-weight: 700; color: var(--lls-ink); }
    .ric-red { color: #c0392b; font-weight: 600; }

    .ric-breakeven {
      background: #f1fbf7; border-left: 4px solid var(--lls-green-600);
      border-radius: 0 8px 8px 0; padding: 1rem 1rem 0.8rem; margin-top: 1.5rem;
    }
    .ric-breakeven__title {
      font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em;
      text-transform: uppercase; color: var(--lls-green-800); margin-bottom: 0.6rem;
    }
    .ric-breakeven__row {
      display: flex; justify-content: space-between; align-items: center;
      font-size: 0.88rem; color: var(--lls-copy); padding: 0.2rem 0;
    }
    .ric-breakeven__row strong { color: #b7770d; }
    .ric-breakeven__row.ric-annual strong { color: var(--lls-green-700); }

    .lls-summary-monthly-val.ric-pos { color: var(--lls-green-800); }
    .lls-summary-monthly-val.ric-neg { color: #c0392b; }
    .lls-summary-monthly-val.ric-neutral { color: var(--lls-copy); }

    @media (max-width: 760px) {
      .lls-calc-grid { grid-template-columns: 1fr; }
      .ric-exp-list { margin-bottom: 1rem; }
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <div class="calc-page-banner">
    <h1>Investment Calculator</h1>
    <p>Rental Income Estimator — Vista Lomas</p>
  </div>

  <section class="lls-calc-section">
    <div class="lls-shell">
      <div class="lls-calc-grid">

        <!-- Left: Inputs -->
        <div class="lls-calc-form">
          <div class="ric-currency-wrap">
            <p class="ric-currency-label" data-i18n="chooseCurrency">Choose your currency</p>
            <div class="ric-currency-sel">
              <button class="ric-currency-btn ric-curr-active" id="ric-btn-usd" onclick="ricSetCurrency('USD')" title="USD – US Dollar">
                <img src="https://flagcdn.com/us.svg" alt="US Dollar" width="32" height="22" style="border-radius:3px;display:block;">
              </button>
              <button class="ric-currency-btn" id="ric-btn-dop" onclick="ricSetCurrency('DOP')" title="DOP – Dominican Peso">
                <img src="https://flagcdn.com/do.svg" alt="Dominican Peso" width="32" height="22" style="border-radius:3px;display:block;">
              </button>
            </div>
          </div>

          <h3 data-i18n="rentalInfo">Enter your rental information</h3>

          <div class="lls-calc-field">
            <label data-i18n="labelPrice">Rental Price per Night</label>
            <div class="lls-calc-input-wrap">
              <span id="ric-sym-price">US$</span>
              <input type="number" id="ric-price" value="0.00" min="0" step="0.01">
            </div>
          </div>

          <div class="lls-calc-field">
            <label data-i18n="labelNights">Nights Rented per Month</label>
            <div class="lls-calc-input-wrap">
              <input type="number" id="ric-nights" placeholder="0" min="1" max="30" step="1" style="padding-left:0.2rem;">
            </div>
          </div>

          <div class="lls-calc-field">
            <label><span data-i18n="labelMortgage">Monthly Mortgage Payment</span> <span style="font-weight:400;font-size:0.85em;color:var(--lls-copy);" data-i18n="labelMortgageOpt">(optional)</span></label>
            <div class="lls-calc-input-wrap">
              <span id="ric-sym-mortgage">US$</span>
              <input type="number" id="ric-mortgage" value="0.00" min="0" step="0.01">
            </div>
          </div>

          <p data-i18n="disclaimer" style="font-size:0.75rem;color:var(--lls-copy);font-style:italic;line-height:1.5;margin-top:1rem;">&#9888; All figures are estimates based on market assumptions. Actual results may vary depending on occupancy, pricing, operating costs, taxes, and other factors.</p>
        </div>

        <!-- Right: Summary -->
        <aside class="lls-calc-summary">
          <div class="lls-summary-row">
            <div>
              <div class="lls-summary-label" data-i18n="occupancy">Occupancy Rate</div>
              <div class="lls-summary-val" id="ric-occ">—</div>
            </div>
            <div style="text-align:right">
              <div class="lls-summary-label" data-i18n="grossIncome">Gross Monthly Income</div>
              <div class="lls-summary-val lls-summary-val--green" id="ric-gross">—</div>
            </div>
          </div>

          <div class="lls-summary-bar">
            <div class="lls-summary-bar-fill" id="ric-bar" style="width:0%"></div>
          </div>

          <div class="ric-exp-list">
            <div class="ric-exp-row"><span data-i18n="hoaLabel">HOA (fixed)</span><span class="ric-red" id="ric-hoa">$200.00</span></div>
            <div class="ric-exp-row"><span data-i18n="utilitiesLabel">Utilities (est.)</span><span class="ric-red" id="ric-utils">—</span></div>
            <div class="ric-exp-row"><span data-i18n="cleaningLabel">Cleaning (est.)</span><span class="ric-red" id="ric-clean">—</span></div>
            <div class="ric-exp-row"><span data-i18n="platformLabel">Other / Platform (5%)</span><span class="ric-red" id="ric-other">—</span></div>
            <div class="ric-exp-row ric-exp-total"><span data-i18n="totalExpenses">Total Monthly Expenses</span><span class="ric-red" id="ric-total-exp">—</span></div>
          </div>

          <div class="lls-summary-monthly-label" data-i18n="netMonthly">Your estimated net monthly income:</div>
          <div class="lls-summary-monthly-val ric-neutral" id="ric-net">—</div>
          <p id="ric-net-status" style="font-size:1.1rem;font-weight:700;font-style:italic;text-align:center;margin:-0.4rem 0 1.4rem;color:var(--lls-green-600);"></p>

          <button class="lls-button" style="width:100%" onclick="window.location='/contact-us'" data-i18n="btnRequest">REQUEST INFORMATION</button>

          <div class="ric-breakeven">
            <div class="ric-breakeven__title" data-i18n="breakEvenTitle">Break-Even Analysis</div>
            <div class="ric-breakeven__row">
              <span data-i18n="minNights">Min. Nights to Break Even</span>
              <strong id="ric-be-nights">—</strong>
            </div>
            <div class="ric-breakeven__row">
              <span data-i18n="minRate">Min. Nightly Rate</span>
              <strong id="ric-be-rate">—</strong>
            </div>
            <div class="ric-breakeven__row ric-annual" style="border-top:1px solid #d4e8dd;margin-top:0.5rem;padding-top:0.5rem;">
              <span data-i18n="netAnnual">Net Annual Income (est.)</span>
              <strong id="ric-net-annual">—</strong>
            </div>
          </div>

          <p class="lls-summary-foot" data-i18n="footNote">* These amounts are estimates and are subject to change without notice.</p>
        </aside>

      </div>
    </div>
  </section>

  <script>
    (function () {
      var currency = 'USD';
      var lang     = 'en';
      var RATE_DOP = 59;

      var T = {
        en: {
          chooseCurrency: 'Choose your currency', rentalInfo: 'Enter your rental information',
          labelPrice: 'Rental Price per Night', labelNights: 'Nights Rented per Month',
          labelMortgage: 'Monthly Mortgage Payment', labelMortgageOpt: '(optional)',
          disclaimer: '⚠ All figures are estimates based on market assumptions. Actual results may vary depending on occupancy, pricing, operating costs, taxes, and other factors.',
          occupancy: 'Occupancy Rate', grossIncome: 'Gross Monthly Income',
          hoaLabel: 'HOA (fixed)', utilitiesLabel: 'Utilities (est.)', cleaningLabel: 'Cleaning (est.)',
          platformLabel: 'Other / Platform (5%)', totalExpenses: 'Total Monthly Expenses',
          netMonthly: 'Your estimated net monthly income:', btnRequest: 'REQUEST INFORMATION',
          breakEvenTitle: 'Break-Even Analysis', minNights: 'Min. Nights to Break Even',
          minRate: 'Min. Nightly Rate', netAnnual: 'Net Annual Income (est.)',
          footNote: '* These amounts are estimates and are subject to change without notice.',
          nightsSuffix: 'nights', statusProfit: 'Your property pays for itself and generates profit.',
          statusProfitNoMortgage: 'This rental generates profit every month.',
          statusLoss: 'Monthly expenses exceed rental income.',
        },
        es: {
          chooseCurrency: 'Elige tu divisa', rentalInfo: 'Ingresa tu información de renta',
          labelPrice: 'Precio por noche', labelNights: 'Noches rentadas por mes',
          labelMortgage: 'Pago mensual de hipoteca', labelMortgageOpt: '(opcional)',
          disclaimer: '⚠ Todas las cifras son estimaciones basadas en supuestos del mercado.',
          occupancy: 'Tasa de ocupación', grossIncome: 'Ingreso bruto mensual',
          hoaLabel: 'HOA (fijo)', utilitiesLabel: 'Servicios (est.)', cleaningLabel: 'Limpieza (est.)',
          platformLabel: 'Otro / Plataforma (5%)', totalExpenses: 'Gastos mensuales totales',
          netMonthly: 'Tu ingreso neto mensual estimado:', btnRequest: 'SOLICITAR INFORMACIÓN',
          breakEvenTitle: 'Análisis de Punto de Equilibrio', minNights: 'Noches mín. para equilibrar',
          minRate: 'Tarifa mínima por noche', netAnnual: 'Ingreso neto anual (est.)',
          footNote: '* Estas cifras son estimaciones y están sujetas a cambios sin previo aviso.',
          nightsSuffix: 'noches', statusProfit: 'Tu propiedad se paga sola y genera ganancias.',
          statusProfitNoMortgage: 'Esta renta genera ganancias cada mes.',
          statusLoss: 'Los gastos superan el ingreso por renta.',
        }
      };

      var priceEl    = document.getElementById('ric-price');
      var nightsEl   = document.getElementById('ric-nights');
      var mortgageEl = document.getElementById('ric-mortgage');

      function fmtDecimalInput(el) {
        var val = parseFloat(el.value.replace(/,/g, '')) || 0;
        el.type = 'text';
        el.value = val.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
      }
      [priceEl, mortgageEl].forEach(function(el) {
        fmtDecimalInput(el);
        el.addEventListener('focus', function() {
          var raw = parseFloat(this.value.replace(/,/g, '')) || 0;
          this.type = 'number';
          this.value = raw || '';
          this.select();
        });
        el.addEventListener('blur', function() { fmtDecimalInput(this); });
      });

      var HOA = 200, UTILS_AT_14 = 120, UTILS_BASE_N = 14;
      var CLEAN_PER_STAY = 50, NIGHTS_PER_STAY = 3.5;
      var PLATFORM_PCT = 0.05, DAYS_MONTH = 30;

      function xRate()  { return currency === 'DOP' ? RATE_DOP : 1; }
      function symbol() { return currency === 'DOP' ? 'RD$' : 'US$'; }
      function fmt(v) {
        return symbol() + Math.abs(v * xRate()).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
      }
      function inputUSD(el) { return (parseFloat(el.value.replace(/,/g, '')) || 0) / xRate(); }

      function setLang(l) {
        lang = l;
        var t = T[l];
        document.querySelectorAll('[data-i18n]').forEach(function(el) {
          var key = el.getAttribute('data-i18n');
          if (t[key] !== undefined) el.textContent = t[key];
        });
      }

      function calc() {
        var t = T[lang];
        var price    = inputUSD(priceEl);
        var nights   = parseFloat(nightsEl.value) || 0;
        var mortgage = inputUSD(mortgageEl);
        var occ = nights / DAYS_MONTH;
        var gross = price * nights;
        var utils = (UTILS_AT_14 / UTILS_BASE_N) * nights;
        var clean = (CLEAN_PER_STAY / NIGHTS_PER_STAY) * nights;
        var other = PLATFORM_PCT * price * nights;
        var opExp = HOA + utils + clean + other;
        var totExp = mortgage + opExp;
        var net = gross - totExp;
        var netAnnual = net * 12;
        var utilsPN = UTILS_AT_14 / UTILS_BASE_N;
        var cleanPN = CLEAN_PER_STAY / NIGHTS_PER_STAY;
        var otherPN = PLATFORM_PCT * price;
        var netPerN = price - utilsPN - cleanPN - otherPN;
        var fixedExp = mortgage + HOA;
        var beNights = netPerN > 0 ? Math.ceil(fixedExp / netPerN) : Infinity;
        var beRate = nights > 0 ? totExp / (nights * (1 - PLATFORM_PCT)) : 0;
        var dash = '—';

        if (price <= 0 || nights <= 0) {
          ['ric-occ','ric-gross','ric-utils','ric-clean','ric-other','ric-total-exp','ric-net','ric-net-annual','ric-be-nights','ric-be-rate'].forEach(function(id) {
            document.getElementById(id).textContent = dash;
          });
          document.getElementById('ric-hoa').textContent = fmt(HOA);
          document.getElementById('ric-bar').style.width = '0%';
          document.getElementById('ric-net').className = 'lls-summary-monthly-val ric-neutral';
          document.getElementById('ric-net-status').textContent = '';
          return;
        }

        document.getElementById('ric-occ').textContent       = (occ * 100).toFixed(1) + '%';
        document.getElementById('ric-gross').textContent     = fmt(gross);
        document.getElementById('ric-hoa').textContent       = fmt(HOA);
        document.getElementById('ric-utils').textContent     = fmt(utils);
        document.getElementById('ric-clean').textContent     = fmt(clean);
        document.getElementById('ric-other').textContent     = fmt(other);
        document.getElementById('ric-total-exp').textContent = fmt(totExp);
        document.getElementById('ric-bar').style.width = Math.min(100, gross > 0 ? (gross / (totExp || 1)) * 100 : 0) + '%';

        var netEl    = document.getElementById('ric-net');
        var statusEl = document.getElementById('ric-net-status');
        netEl.textContent = fmt(net);
        if (net > 0) {
          netEl.className = 'lls-summary-monthly-val ric-pos';
          statusEl.textContent = mortgage > 0 ? t.statusProfit : t.statusProfitNoMortgage;
          statusEl.style.color = 'var(--lls-green-600)';
        } else if (net < 0) {
          netEl.className = 'lls-summary-monthly-val ric-neg';
          statusEl.textContent = t.statusLoss;
          statusEl.style.color = '#c0392b';
        } else {
          netEl.className = 'lls-summary-monthly-val ric-neutral';
          statusEl.textContent = '';
        }

        document.getElementById('ric-net-annual').textContent = fmt(netAnnual);
        document.getElementById('ric-be-nights').textContent  = isFinite(beNights) ? beNights + ' ' + t.nightsSuffix : '—';
        document.getElementById('ric-be-rate').textContent    = fmt(beRate);
      }

      window.ricSetCurrency = function(cur) {
        if (cur === currency) return;
        var oldRate = xRate();
        currency = cur;
        var newRate = xRate();
        if (priceEl.value)    priceEl.value    = ((parseFloat(priceEl.value)    / oldRate) * newRate).toFixed(2);
        if (mortgageEl.value) mortgageEl.value = ((parseFloat(mortgageEl.value) / oldRate) * newRate).toFixed(2);
        var sym = symbol();
        document.getElementById('ric-sym-price').textContent    = sym;
        document.getElementById('ric-sym-mortgage').textContent = sym;
        document.getElementById('ric-btn-usd').classList.toggle('ric-curr-active', cur === 'USD');
        document.getElementById('ric-btn-dop').classList.toggle('ric-curr-active', cur === 'DOP');
        setLang(cur === 'DOP' ? 'es' : 'en');
        calc();
      };

      priceEl.addEventListener('input', calc);
      nightsEl.addEventListener('input', calc);
      mortgageEl.addEventListener('input', calc);
      calc();
    })();
  </script>

  <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
