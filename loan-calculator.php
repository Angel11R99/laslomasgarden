<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Calculator | Las Lomas Serenas</title>
  <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="img/logo-fallback.png">
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
      grid-template-columns: 1.2fr 0.8fr;
      gap: 3rem;
      align-items: start;
    }

    .lls-calc-form h3 { margin: 0 0 1.5rem; font-size: 1.6rem; color: #1a3a28; }
    .lls-calc-field { margin-bottom: 1.8rem; }
    .lls-calc-field label { display: block; margin-bottom: 0.6rem; font-weight: 600; color: #3e5a4b; }

    .lls-calc-input-wrap {
      display: flex; align-items: center; background: #ffffff;
      border: 2px solid #c9e0d3; border-radius: 8px; padding: 0 1rem; transition: border-color 0.2s;
    }
    .lls-calc-input-wrap:focus-within { border-color: var(--lls-green-700); }
    .lls-calc-input-wrap span { color: var(--lls-green-700); font-weight: 700; margin-right: 0.4rem; }
    .lls-calc-input-wrap input { border: 0; padding: 1rem 0; width: 100%; font: inherit; color: var(--lls-ink); outline: none; }

    .lls-calc-select {
      width: 100%; padding: 1rem; border: 2px solid #c9e0d3; border-radius: 8px;
      font: inherit; appearance: none;
      background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='7' viewBox='0 0 12 7'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2319a950' stroke-width='1.6' fill='none' stroke-linecap='round'/%3E%3C/svg%3E") right 1.2rem center no-repeat;
    }

    .lls-calc-slider {
      -webkit-appearance: none; width: 100%; height: 6px;
      background: #d4e8dd; border-radius: 99px; outline: none;
    }
    .lls-calc-slider::-webkit-slider-thumb {
      -webkit-appearance: none; width: 24px; height: 24px; background: #fff;
      border: 3px solid var(--lls-green-700); border-radius: 50%; cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .lls-calc-extra__header {
      background: var(--lls-green-800); color: #fff; padding: 0.8rem 1.2rem;
      border-radius: 6px; cursor: pointer; display: flex; justify-content: space-between;
      align-items: center; font-weight: 700; font-size: 0.9rem;
      text-transform: uppercase; letter-spacing: 0.04em;
    }
    .lls-calc-extra__body {
      padding: 1.5rem; background: #fff; border: 1px solid #d4e8dd;
      border-top: 0; border-radius: 0 0 6px 6px; display: none;
    }
    .lls-calc-extra__body.open { display: block; }

    .lls-calc-summary {
      background: #ffffff; padding: 2.5rem; border-radius: 16px;
      box-shadow: var(--lls-shadow-soft); border: 1px solid #d4e8dd;
    }

    .lls-summary-row { display: flex; justify-content: space-between; gap: 1rem; margin-bottom: 1.2rem; }
    .lls-summary-label { color: var(--lls-copy); font-size: 0.94rem; font-weight: 600; }
    .lls-summary-val { font-weight: 700; font-size: 1.1rem; }
    .lls-summary-val--green { color: var(--lls-green-700); }

    .lls-summary-bar { height: 8px; background: #eee; border-radius: 99px; margin: 1.8rem 0; overflow: hidden; }
    .lls-summary-bar-fill { height: 100%; background: var(--lls-green-700); transition: width 0.3s; }

    .lls-summary-monthly-label { font-weight: 600; color: #3e5a4b; margin-bottom: 0.5rem; }
    .lls-summary-monthly-val {
      font-size: clamp(2.5rem, 4.5vw, 3.5rem); font-weight: 700;
      color: var(--lls-green-800); line-height: 1; margin-bottom: 1.8rem;
    }
    .lls-summary-foot { font-size: 0.85rem; color: var(--lls-copy); margin-top: 2rem; font-style: italic; }

    .lls-summary-extra-info {
      background: #f1fbf7; border-left: 4px solid var(--lls-green-600);
      padding: 1.2rem; margin-top: 1.5rem; border-radius: 0 8px 8px 0;
    }
    .lls-summary-extra-info h4 { margin: 0 0 0.5rem; color: var(--lls-green-800); font-size: 1rem; }
    .lls-summary-extra-info p { margin: 0; font-size: 0.95rem; line-height: 1.45; }

    .lls-calc-summary-small { font-size: 0.88rem; color: #3e5a4b; }
    .lls-calc-summary-small p { margin: 0.25rem 0; }

    @media (max-width: 760px) {
      .lls-calc-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <div class="calc-page-banner">
    <h1>Loan Calculator</h1>
    <p>Estimate your monthly mortgage payment — Las Lomas Serenas</p>
  </div>

  <section class="lls-calc-section">
    <div class="lls-shell">
      <div class="lls-calc-grid">
        <div class="lls-calc-form">
          <h3>What is the price of the property you want to buy?</h3>

          <div class="lls-calc-field">
            <div class="lls-calc-input-wrap">
              <span>US$</span>
              <input type="text" id="mc-price" placeholder="10,000" inputmode="numeric" autocomplete="off">
            </div>
          </div>

          <div class="lls-calc-field">
            <label for="mc-bank">Select bank</label>
            <select id="mc-bank" class="lls-calc-select">
              <option value="12.00">Banreservas (12.00% Annual)</option>
              <option value="12.95">Asociacion Cibao (12.95% Annual)</option>
              <option value="13.00">BHD Leon (13.00% Annual)</option>
              <option value="13.50">Banco Popular (13.50% Annual)</option>
              <option value="11.50">Scotiabank (11.50% Annual)</option>
            </select>
          </div>

          <div class="lls-calc-field">
            <label>Down payment</label>
            <div class="lls-summary-val lls-summary-val--green" id="mc-down-label" style="margin-bottom:0.5rem">US$3,000 | 30.00%</div>
            <input type="range" id="mc-down" class="lls-calc-slider" min="10" max="80" value="30" step="1">
          </div>

          <div class="lls-calc-field">
            <label for="mc-term">Loan term</label>
            <select id="mc-term" class="lls-calc-select">
              <option value="10">10 years</option>
              <option value="15">15 years</option>
              <option value="20" selected>20 years</option>
              <option value="25">25 years</option>
              <option value="30">30 years</option>
            </select>
          </div>

          <div class="lls-calc-extra">
            <div class="lls-calc-extra__header" id="mc-extra-toggle">Extra payment scenario <span>+</span></div>
            <div class="lls-calc-extra__body" id="mc-extra-body">
              <div class="lls-calc-field">
                <label for="mc-extra-amount">Extra payment amount (US$)</label>
                <div class="lls-calc-input-wrap">
                  <input type="number" id="mc-extra-amount" value="0.00" min="0" step="0.01">
                </div>
              </div>
              <div class="lls-calc-field">
                <label for="mc-extra-freq">Frequency</label>
                <select id="mc-extra-freq" class="lls-calc-select">
                  <option value="12">Monthly</option>
                  <option value="4">Quarterly</option>
                  <option value="2" selected>Semiannual</option>
                  <option value="1">Annual</option>
                </select>
              </div>
              <div class="lls-calc-summary-small">
                <p>Extra frequency: <span id="mc-xpy">2</span>/year</p>
                <p>Annual extra: <span id="mc-xannual">US$0</span></p>
                <p>Monthly equiv: <span id="mc-xmonthly">US$0.00</span></p>
              </div>
            </div>
          </div>
        </div>

        <aside class="lls-calc-summary" id="mc-results-panel">
          <div class="lls-summary-row">
            <div>
              <div class="lls-summary-label">Down payment</div>
              <div class="lls-summary-val lls-summary-val--green" id="mc-res-down">US$3,000</div>
            </div>
            <div style="text-align:right">
              <div class="lls-summary-label">Loan amount</div>
              <div class="lls-summary-val" id="mc-res-loan">US$7,000</div>
            </div>
          </div>

          <div class="lls-summary-bar">
            <div class="lls-summary-bar-fill" id="mc-bar" style="width:30%"></div>
          </div>

          <div class="lls-summary-monthly-label">Your estimated monthly payment:</div>
          <div class="lls-summary-monthly-val" id="mc-monthly">US$80</div>

          <button class="lls-button" style="width:100%" onclick="window.location='/contact-us'">PRE-QUALIFY</button>

          <div id="mc-extra-block" style="display:none" class="lls-summary-extra-info">
            <h4>With extra payments</h4>
            <div class="lls-summary-monthly-val" id="mc-monthly-extra" style="font-size:2rem">US$0.00</div>
            <p id="mc-savings"></p>
            <p id="mc-interest-saved" style="font-weight:700;margin-top:0.5rem;"></p>
          </div>

          <p class="lls-summary-foot">* These amounts are estimates and are subject to change without notice.</p>
        </aside>
      </div>
    </div>
  </section>

  <script>
    (function() {
      var priceInput = document.getElementById('mc-price');
      var bank       = document.getElementById('mc-bank');
      var down       = document.getElementById('mc-down');
      var term       = document.getElementById('mc-term');
      var extraAmt   = document.getElementById('mc-extra-amount');
      var extraFreq  = document.getElementById('mc-extra-freq');

      function fmtDecimalInput(el) {
        var val = parseFloat(el.value.replace(/,/g, '')) || 0;
        el.type = 'text';
        el.value = val.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
      }
      fmtDecimalInput(extraAmt);
      extraAmt.addEventListener('focus', function() {
        var raw = parseFloat(this.value.replace(/,/g, '')) || 0;
        this.type = 'number';
        this.value = raw || '';
        this.select();
      });
      extraAmt.addEventListener('blur', function() { fmtDecimalInput(this); });
      var downLbl    = document.getElementById('mc-down-label');
      var resDown    = document.getElementById('mc-res-down');
      var resLoan    = document.getElementById('mc-res-loan');
      var bar        = document.getElementById('mc-bar');
      var monthly    = document.getElementById('mc-monthly');
      var xpy        = document.getElementById('mc-xpy');
      var xannual    = document.getElementById('mc-xannual');
      var xmonthly   = document.getElementById('mc-xmonthly');
      var extraBlock = document.getElementById('mc-extra-block');
      var monthlyExtra  = document.getElementById('mc-monthly-extra');
      var savings       = document.getElementById('mc-savings');
      var interestSaved = document.getElementById('mc-interest-saved');

      function fmt(n)  { return 'US$' + Math.round(n).toLocaleString('en-US'); }
      function fmt2(n) { return 'US$' + n.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }); }
      function parsePrice() { return parseFloat((priceInput.value || '').replace(/,/g, '')) || 0; }

      priceInput.addEventListener('input', function() {
        var raw = this.value.replace(/[^0-9]/g, '');
        this.value = raw ? parseInt(raw, 10).toLocaleString('en-US') : '';
        calc();
      });

      function calc() {
        var p  = parsePrice();
        var dp = (parseFloat(down.value) || 0) / 100;
        var r  = (parseFloat(bank.value) || 0) / 100 / 12;
        var n  = (parseInt(term.value, 10) || 0) * 12;
        var ea = (parseFloat(extraAmt.value.replace(/,/g, '')) || 0);
        var ef = (parseInt(extraFreq.value, 10) || 0);

        if (p <= 0) {
          downLbl.textContent = '—'; resDown.textContent = 'US$0';
          resLoan.textContent = 'US$0'; bar.style.width = '0%';
          monthly.textContent = 'US$0'; extraBlock.style.display = 'none';
          return;
        }

        var downAmt = p * dp;
        var loanAmt = p - downAmt;
        downLbl.textContent = fmt(downAmt) + ' | ' + (dp * 100).toFixed(2) + '%';
        resDown.textContent = fmt(downAmt);
        resLoan.textContent = fmt(loanAmt);
        bar.style.width = (dp * 100) + '%';

        var m = loanAmt > 0 && r > 0 && n > 0
          ? loanAmt * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1)
          : 0;
        monthly.textContent = fmt(m);

        var annualExtra  = ea * ef;
        var monthlyEquiv = annualExtra / 12;
        if (xpy)     xpy.textContent     = ef;
        if (xannual) xannual.textContent = fmt(annualExtra);
        if (xmonthly) xmonthly.textContent = fmt2(monthlyEquiv);

        if (ea > 0 && m > 0) {
          extraBlock.style.display = '';
          var effectiveMonthly = m + monthlyEquiv;
          monthlyExtra.textContent = fmt2(effectiveMonthly);

          var stdMonths = 0, stdInterest = 0, balStd = loanAmt;
          while (balStd > 0.01 && stdMonths < n * 2) {
            var intStd = balStd * r; stdInterest += intStd; balStd += intStd - m; stdMonths++;
          }
          var newMonths = 0, newInterest = 0, balExtra = loanAmt;
          while (balExtra > 0.01 && newMonths < n * 2) {
            var intExtra = balExtra * r; newInterest += intExtra; balExtra += intExtra - effectiveMonthly; newMonths++;
          }

          var monthsSaved  = Math.max(0, stdMonths - newMonths);
          var yearsSaved   = Math.floor(monthsSaved / 12);
          var remMonths    = monthsSaved % 12;
          var interestDiff = Math.max(0, stdInterest - newInterest);
          var timeText = [];
          if (yearsSaved > 0) timeText.push(yearsSaved + ' year' + (yearsSaved > 1 ? 's' : ''));
          if (remMonths > 0)  timeText.push(remMonths  + ' month' + (remMonths  > 1 ? 's' : ''));
          savings.textContent = timeText.length ? 'You will own your home ' + timeText.join(' and ') + ' sooner!' : '';
          interestSaved.textContent = interestDiff > 0 ? 'Projected interest savings: ' + fmt(interestDiff) : '';
        } else {
          extraBlock.style.display = 'none';
        }
      }

      [bank, term, extraFreq].forEach(function(el) { if (el) el.addEventListener('change', calc); });
      [down, extraAmt].forEach(function(el) { if (el) el.addEventListener('input', calc); });

      var toggle    = document.getElementById('mc-extra-toggle');
      var bodyExtra = document.getElementById('mc-extra-body');
      if (toggle) {
        toggle.addEventListener('click', function() {
          var open = bodyExtra.classList.toggle('open');
          toggle.querySelector('span').textContent = open ? '−' : '+';
        });
      }

      priceInput.value = '185,460';
      calc();
    })();
  </script>

  <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
