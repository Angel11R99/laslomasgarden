<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | 2 Bedrooms</title>
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-green: #089e67;
      --lls-green-deep: #067c56;
      --lls-green-strip: linear-gradient(90deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
      --lls-title: #0a9a72;
      --lls-copy: #63706b;
      --lls-shell: 1120px;
      --lls-border: #d4ded9;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
      margin: 0;
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      background: #ffffff;
      color: var(--lls-copy);
      line-height: 1.45;
    }

    img {
      display: block;
      width: 100%;
      max-width: 100%;
    }

    .rooms-page {
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
      padding-top: var(--lls-header-overlay, 122px);
    }

    .rooms-shell {
      width: min(var(--lls-shell), calc(100% - 2.2rem));
      margin-inline: auto;
    }

    /* ── Hero ── */
    .rooms-hero {
      height: 90vh;
      min-height: 500px;
      background-image: url("img/hero2bedroom.webp");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    /* ── Intro strip ── */
    .rooms-intro {
      background: var(--lls-green-strip);
      color: #f4fffa;
      text-align: center;
      padding: clamp(2.2rem, 6vw, 3.2rem) 1rem;
    }

    .rooms-intro h1 {
      margin: 0 0 0.55rem;
      font-size: clamp(1.72rem, 3.4vw, 2.85rem);
      line-height: 1.15;
      font-weight: 600;
      color: #ffffff;
    }

    .rooms-intro p {
      margin: 0 auto 1.4rem;
      max-width: 780px;
      font-size: clamp(0.98rem, 1.15vw, 1.14rem);
      line-height: 1.5;
      color: rgba(240, 255, 248, 0.92);
    }

    .rooms-intro-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 40px;
      padding: 0.5rem 2rem;
      border: 2px solid #ffffff;
      background: transparent;
      color: #ffffff;
      font-family: inherit;
      font-size: 0.95rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      text-transform: uppercase;
      transition: background 0.2s, color 0.2s;
    }

    .rooms-intro-btn:hover {
      background: #ffffff;
      color: var(--lls-green-deep);
    }

    /* ── Sections ── */
    .rooms-sections {
      display: grid;
      gap: 0;
    }

    /* ── Room card: image full-width, text centered below ── */
    .room-card {
      margin-bottom: clamp(2.5rem, 5vw, 4rem);
    }

    .room-card-media {
      margin: 0;
      width: 100%;
      overflow: hidden;
    }

    .room-card-media img {
      width: 100%;
      /*height: clamp(300px, 42vw, 560px);*/
      object-fit: cover;
      display: block;
    }

    .room-card-copy {
      text-align: center;
      padding: clamp(1.8rem, 3.5vw, 2.8rem) clamp(1.2rem, 8vw, 6rem);
      background: #ffffff;
    }

    .room-card-copy h2 {
      margin: 0 0 0.9rem;
      color: var(--lls-title);
      font-size: clamp(1.5rem, 2.3vw, 2.2rem);
      line-height: 1.2;
      font-weight: 700;
    }

    .room-card-copy p {
      margin: 0 auto;
      max-width: 980px;
      font-size: clamp(1.1rem, 1.4vw, 1.25rem);
      line-height: 1.7;
      color: var(--lls-copy);
      text-wrap: balance;
    }

    @media (min-width: 1920px) {
      .room-card-copy p {
        max-width: 60%;
      }
    }

    .rooms-actions {
      margin-top: 1.4rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.7rem;
    }

    .rooms-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 48px;
      padding: 0.7rem 2rem;
      text-decoration: none;
      font-family: inherit;
      font-size: 1.05rem;
      line-height: 1;
      letter-spacing: 0.02em;
      border: 1px solid var(--lls-green);
      transition: opacity 0.2s ease;
    }

    .rooms-button:hover { opacity: 0.82; }

    .rooms-button.is-solid {
      background: var(--lls-green);
      color: #ffffff;
    }

    .rooms-button.is-outline {
      background: transparent;
      color: var(--lls-green-deep);
      border-color: var(--lls-border);
    }

    /* ── Pricing table ── */
    .pricing-section {
      padding: clamp(3rem, 6vw, 4.5rem) 1rem;
      text-align: center;
      background: #ffffff;
    }

    .pricing-title {
      margin: 0 0 1.8rem;
      color: var(--lls-title);
      font-size: clamp(1.5rem, 2.5vw, 2.2rem);
      font-weight: 700;
      letter-spacing: 0.04em;
    }

    .pricing-wrap {
      width: min(820px, 100%);
      margin-inline: auto;
    }

    .pricing-table {
      width: 100%;
      border-collapse: collapse;
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    }

    .pricing-table thead th {
      background: var(--lls-title);
      color: #ffffff;
      font-size: clamp(1.2rem, 1.6vw, 1.45rem);
      font-weight: 700;
      letter-spacing: 0.06em;
      padding: 0.9rem 1rem;
      text-align: center;
    }

    .pricing-header-row td {
      color: var(--lls-title);
      font-weight: 700;
      font-size: clamp(1.1rem, 1.4vw, 1.3rem);
      letter-spacing: 0.04em;
      padding: 0.75rem 1rem;
      border-bottom: 1px solid #dde8e2;
    }

    .pricing-table tbody tr:not(.pricing-header-row) td {
      padding: 0.85rem 1rem;
      font-size: clamp(1.1rem, 1.3vw, 1.25rem);
      color: #444;
      border-bottom: 1px solid #edf2ef;
      text-align: center;
    }

    .pricing-table tbody tr:not(.pricing-header-row):last-child td {
      border-bottom: none;
    }

    .pricing-notes {
      margin-top: 1.8rem;
      display: grid;
      gap: 0.4rem;
    }

    .pricing-notes p {
      margin: 0;
      font-size: clamp(1.1rem, 1.25vw, 1.2rem);
      color: #333;
      text-align: center;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
      .room-card-media img {
        height: clamp(220px, 55vw, 360px);
      }

      .room-card-copy {
        padding: 1.6rem 1rem;
      }
    }

    @media (max-width: 640px) {
      .rooms-page {
        padding-top: var(--lls-header-overlay, 132px);
      }

      .rooms-intro { padding: 2rem 0.8rem; }

      .rooms-button { width: 100%; }
    }

    /* ── Loan Calculator ── */
    .lls-shell {
      width: min(1120px, 100%);
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
      background: linear-gradient(30deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
      color: #ffffff;
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

    .lls-button:hover,
    .lls-button:focus-visible {
      transform: translateY(-2px);
      box-shadow: 0 15px 25px rgba(11, 79, 51, 0.2);
      opacity: 0.9;
    }

    .lls-calc-header {
      padding: clamp(4rem, 7vw, 6.5rem) 0 0;
      background: #ffffff;
    }

    .lls-calc-section {
      padding: clamp(2rem, 4vw, 3.5rem) 0 clamp(4rem, 7vw, 6.5rem);
      background: #f1f7f4;
    }

    .lls-calc-title {
      text-align: center;
      margin-bottom: clamp(2.5rem, 5vw, 4rem);
      font-size: clamp(2.2rem, 3.5vw, 3.2rem);
      color: #0d673d;
      font-weight: 700;
      line-height: 1.1;
    }

    .lls-calc-grid {
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 3rem;
      align-items: start;
    }

    .lls-calc-form h3 {
      margin: 0 0 1.5rem;
      font-size: 1.6rem;
      color: #1a3a28;
    }

    .lls-calc-field {
      margin-bottom: 1.8rem;
    }

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

    .lls-calc-input-wrap:focus-within {
      border-color: #129247;
    }

    .lls-calc-input-wrap span {
      color: #129247;
      font-weight: 700;
      margin-right: 0.4rem;
    }

    .lls-calc-input-wrap input {
      border: 0;
      padding: 1rem 0;
      width: 100%;
      font: inherit;
      color: #21523a;
      outline: none;
    }

    .lls-calc-select {
      width: 100%;
      padding: 1rem;
      border: 2px solid #c9e0d3;
      border-radius: 8px;
      font: inherit;
      appearance: none;
      background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='7' viewBox='0 0 12 7'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2319a950' stroke-width='1.6' fill='none' stroke-linecap='round'/%3E%3C/svg%3E") right 1.2rem center no-repeat;
    }

    .lls-calc-slider {
      -webkit-appearance: none;
      width: 100%;
      height: 6px;
      background: #d4e8dd;
      border-radius: 99px;
      outline: none;
    }

    .lls-calc-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 24px;
      height: 24px;
      background: #fff;
      border: 3px solid #129247;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .lls-calc-extra__header {
      background: #0d673d;
      color: #fff;
      padding: 0.8rem 1.2rem;
      border-radius: 6px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 700;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    .lls-calc-extra__body {
      padding: 1.5rem;
      background: #fff;
      border: 1px solid #d4e8dd;
      border-top: 0;
      border-radius: 0 0 6px 6px;
      display: none;
    }

    .lls-calc-extra__body.open {
      display: block;
    }

    .lls-calc-summary {
      background: #ffffff;
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: 0 24px 50px rgba(20, 79, 54, 0.12);
      border: 1px solid #d4e8dd;
    }

    .lls-summary-row {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.2rem;
    }

    .lls-summary-label {
      color: #63706b;
      font-size: 0.94rem;
      font-weight: 600;
    }

    .lls-summary-val {
      font-weight: 700;
      font-size: 1.1rem;
    }

    .lls-summary-val--green {
      color: #129247;
    }

    .lls-summary-bar {
      height: 8px;
      background: #eee;
      border-radius: 99px;
      margin: 1.8rem 0;
      overflow: hidden;
    }

    .lls-summary-bar-fill {
      height: 100%;
      background: #129247;
      transition: width 0.3s;
    }

    .lls-summary-monthly-label {
      font-weight: 600;
      color: #3e5a4b;
      margin-bottom: 0.5rem;
    }

    .lls-summary-monthly-val {
      font-size: clamp(2.5rem, 4.5vw, 3.5rem);
      font-weight: 700;
      color: #0d673d;
      line-height: 1;
      margin-bottom: 1.8rem;
    }

    .lls-summary-foot {
      font-size: 0.85rem;
      color: #63706b;
      margin-top: 2rem;
      font-style: italic;
    }

    .lls-summary-extra-info {
      background: #f1fbf7;
      border-left: 4px solid #19a950;
      padding: 1.2rem;
      margin-top: 1.5rem;
      border-radius: 0 8px 8px 0;
    }

    .lls-summary-extra-info h4 {
      margin: 0 0 0.5rem;
      color: #0d673d;
      font-size: 1rem;
    }

    .lls-summary-extra-info p {
      margin: 0;
      font-size: 0.95rem;
      line-height: 1.45;
    }

    .lls-calc-summary-small {
      font-size: 0.88rem;
      color: #3e5a4b;
    }

    .lls-calc-summary-small p {
      margin: 0.25rem 0;
    }

    @media (max-width: 960px) {
      .lls-calc-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body class="page-rooms">
  <?php include __DIR__ . '/components/header.php'; ?>

  <main class="rooms-page">

    <!-- Hero -->
    <section class="rooms-hero" aria-label="Las Lomas Serenas building"></section>

    <!-- Intro strip -->
    <section class="rooms-intro" aria-labelledby="rooms-intro-title">
      <div class="rooms-shell">
        <h1 id="rooms-intro-title">Own the lifestyle people travel to find</h1>
        <p>2-bedroom residences with contemporary design, efficient layouts, and welcoming environments that adapt to your way of living.</p>
        <a class="rooms-intro-btn" href="/tourguiado">3D TOUR</a>
      </div>
    </section>

    <!-- Pricing table -->
    <section class="pricing-section">
      <h2 class="pricing-title">2 BEDROOM - 84.3 m² (907 sq. ft.)</h2>
      <div class="pricing-wrap">
        <table class="pricing-table">
          <thead>
            <tr>
              <th colspan="3">PRICES FOR UNFURNISHED CONDOS</th>
            </tr>
          </thead>
          <tbody>
            <tr class="pricing-header-row">
              <td>FLOOR</td>
              <td>AREA</td>
              <td>PRICE</td>
            </tr>
            <tr>
              <td>1<sup>st</sup> Floor</td>
              <td>101.3 m2 / 1,090 sq. ft.</td>
              <td>$188,860</td>
            </tr>
            <tr>
              <td>2<sup>nd</sup> Floor</td>
              <td>84.3 m2 / 907 sq. ft.</td>
              <td>$185,460</td>
            </tr>
            <tr>
              <td>3<sup>rd</sup> Floor</td>
              <td>84.3 m2 / 907 sq. ft.</td>
              <td>$185,460</td>
            </tr>
            <tr>
              <td>4<sup>th</sup> Floor</td>
              <td>107.3 m2 / 1154 sq. ft.</td>
              <td>$189,900</td>
            </tr>
          </tbody>
        </table>
        <div class="pricing-notes">
          <p><strong>All condos on the 1<sup>st</sup> floor include a 17 m2 (183 sq. ft.) back yard patio.</strong></p>
          <p><strong>All condos on the 4<sup>th</sup> floor include a 23 m2 (247 sq. ft.)</strong></p>
          <p><strong>All condo purchases include a free parking space.</strong></p>
        </div>
      </div>
    </section>

    <!-- Room sections -->
    <div class="rooms-sections">

      <div class="room-card">
        <figure class="room-card-media">
          <img src="img/2-Bed-IMG/Living-1.webp" alt="Warm and relaxing living room" decoding="async">
        </figure>
        <div class="room-card-copy">
          <h2>Warm and Relaxing Living Spaces</h2>
          <p>The living areas at Las Lomas Serenas offer a more spacious and inviting environment, designed for enhanced comfort and everyday living. The open layout is complemented by abundant natural light, creating a bright, airy, and welcoming atmosphere.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </div>

      <div class="room-card">
        <figure class="room-card-media">
          <img src="img/2-Bed-IMG/Kitchen-2.webp" alt="Contemporary kitchen" loading="lazy" decoding="async">
        </figure>
        <div class="room-card-copy">
          <h2>Contemporary Kitchens Designed for Everyday Living</h2>
          <p>The kitchens in Las Lomas Serenas are designed to combine functionality with elevated design and high-quality materials. Thoughtfully planned layouts and refined finishes make preparing and serving meals both effortless and enjoyable.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </div>

      <div class="room-card">
        <figure class="room-card-media">
          <img src="img/2-Bed-IMG/Bedroom-3.webp" alt="Comfortable modern bedroom" loading="lazy" decoding="async">
        </figure>
        <div class="room-card-copy">
          <h2>Comfortable &amp; Modern Bedrooms</h2>
          <p>The bedrooms in Las Lomas Serenas are designed to provide an elevated atmosphere of relaxation and comfort. Each space features clean lines, premium finishes, and carefully selected high-quality materials that enhance both elegance and tranquility.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </div>

      <div class="room-card">
        <figure class="room-card-media">
          <img src="img/2-Bed-IMG/BathRoom-4.webp" alt="Clean modern bathroom" loading="lazy" decoding="async">
        </figure>
        <div class="room-card-copy">
          <h2>Clean Design Practical Comfort</h2>
          <p>The bathrooms in Las Lomas Serenas reflect a balance of sophistication, functionality, and modern design. Crafted with premium materials and refined finishes, these spaces offer an elevated level of comfort while maintaining practical ease of use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </div>

      <div class="room-card">
        <figure class="room-card-media">
          <img src="img/2-Bed-IMG/Laundry-5.webp" alt="Laundry area" loading="lazy" decoding="async">
        </figure>
        <div class="room-card-copy">
          <h2>Every Detail Has a Reason</h2>
          <p>At Las Lomas Serenas, every space is designed with purpose. Our laundry areas combine clean design, efficiency, and modern comfort to support everyday living. Thoughtfully planned layouts and quality finishes create a practical, organized environment that is easy to maintain and comfortable to use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </div>

    </div>

    <div class="lls-calc-header">
      <div class="lls-shell">
        <h2 class="lls-calc-title">Loan Calculator</h2>
      </div>
    </div>

    <!-- Loan Calculator -->
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
              <div class="lls-summary-val lls-summary-val--green" id="mc-down-label" style="margin-bottom: 0.5rem">US$3,000 | 30.00%</div>
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
              <div style="text-align: right">
                <div class="lls-summary-label">Loan amount</div>
                <div class="lls-summary-val" id="mc-res-loan">US$7,000</div>
              </div>
            </div>

            <div class="lls-summary-bar">
              <div class="lls-summary-bar-fill" id="mc-bar" style="width: 30%"></div>
            </div>

            <div class="lls-summary-monthly-label">Your estimated monthly payment:</div>
            <div class="lls-summary-monthly-val" id="mc-monthly">US$80</div>

            <button class="lls-button" style="width: 100%">PRE-QUALIFY</button>

            <div id="mc-extra-block" style="display: none" class="lls-summary-extra-info">
              <h4>With extra payments</h4>
              <div class="lls-summary-monthly-val" id="mc-monthly-extra" style="font-size: 2rem">US$0.00</div>
              <p id="mc-savings"></p>
              <p id="mc-interest-saved" style="font-weight: 700; margin-top: 0.5rem;"></p>
            </div>

            <p class="lls-summary-foot">* These amounts are estimates and are subject to change without notice.</p>
          </aside>
        </div>
      </div>
    </section>
  </main>

  <script>
    (function() {
      var priceInput = document.getElementById('mc-price');
      var bank = document.getElementById('mc-bank');
      var down = document.getElementById('mc-down');
      var term = document.getElementById('mc-term');
      var extraAmt = document.getElementById('mc-extra-amount');
      var extraFreq = document.getElementById('mc-extra-freq');

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

      var downLbl = document.getElementById('mc-down-label');
      var resDown = document.getElementById('mc-res-down');
      var resLoan = document.getElementById('mc-res-loan');
      var bar = document.getElementById('mc-bar');
      var monthly = document.getElementById('mc-monthly');
      var xpy = document.getElementById('mc-xpy');
      var xannual = document.getElementById('mc-xannual');
      var xmonthly = document.getElementById('mc-xmonthly');
      var extraBlock = document.getElementById('mc-extra-block');
      var monthlyExtra = document.getElementById('mc-monthly-extra');
      var savings = document.getElementById('mc-savings');
      var interestSaved = document.getElementById('mc-interest-saved');

      function fmt(n) {
        return 'US$' + Math.round(n).toLocaleString('en-US');
      }

      function fmt2(n) {
        return 'US$' + n.toLocaleString('en-US', {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2
        });
      }

      function parsePrice() {
        return parseFloat((priceInput.value || '').replace(/,/g, '')) || 0;
      }

      priceInput.addEventListener('input', function() {
        var raw = this.value.replace(/[^0-9]/g, '');
        if (!raw) {
          this.value = '';
          calc();
          return;
        }
        this.value = parseInt(raw, 10).toLocaleString('en-US');
        calc();
      });

      function calc() {
        var p = parsePrice();
        var dp = (parseFloat(down.value) || 0) / 100;
        var r = (parseFloat(bank.value) || 0) / 100 / 12;
        var n = (parseInt(term.value, 10) || 0) * 12;
        var ea = (parseFloat(extraAmt.value.replace(/,/g, '')) || 0);
        var ef = (parseInt(extraFreq.value, 10) || 0);

        if (p <= 0) {
          downLbl.textContent = '—';
          resDown.textContent = 'US$0';
          resLoan.textContent = 'US$0';
          bar.style.width = '0%';
          monthly.textContent = 'US$0';
          extraBlock.style.display = 'none';
          return;
        }

        var downAmt = p * dp;
        var loanAmt = p - downAmt;
        var pct = (dp * 100).toFixed(2);
        downLbl.textContent = fmt(downAmt) + ' | ' + pct + '%';
        resDown.textContent = fmt(downAmt);
        resLoan.textContent = fmt(loanAmt);
        bar.style.width = (dp * 100) + '%';

        var m = 0;
        if (loanAmt > 0 && r > 0 && n > 0) {
          m = loanAmt * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
        }
        monthly.textContent = fmt(m);

        var annualExtra = ea * ef;
        var monthlyEquiv = annualExtra / 12;
        if (xpy) xpy.textContent = ef;
        if (xannual) xannual.textContent = fmt(annualExtra);
        if (xmonthly) xmonthly.textContent = fmt2(monthlyEquiv);

        if (ea > 0 && m > 0) {
          extraBlock.style.display = '';
          var effectiveMonthly = m + monthlyEquiv;
          monthlyExtra.textContent = fmt2(effectiveMonthly);

          var stdMonths = 0,
            stdInterest = 0,
            balStd = loanAmt;
          while (balStd > 0.01 && stdMonths < n * 2) {
            var intStd = balStd * r;
            stdInterest += intStd;
            balStd = balStd + intStd - m;
            stdMonths++;
          }

          var newMonths = 0,
            newInterest = 0,
            balExtra = loanAmt;
          while (balExtra > 0.01 && newMonths < n * 2) {
            var intExtra = balExtra * r;
            newInterest += intExtra;
            balExtra = balExtra + intExtra - effectiveMonthly;
            newMonths++;
          }

          var monthsSaved = Math.max(0, stdMonths - newMonths);
          var yearsSaved = Math.floor(monthsSaved / 12);
          var remMonths = monthsSaved % 12;
          var interestDiff = Math.max(0, stdInterest - newInterest);
          var timeText = [];
          if (yearsSaved > 0) timeText.push(yearsSaved + ' year' + (yearsSaved > 1 ? 's' : ''));
          if (remMonths > 0) timeText.push(remMonths + ' month' + (remMonths > 1 ? 's' : ''));
          savings.textContent = timeText.length ? 'You will own your home ' + timeText.join(' and ') + ' sooner!' : '';
          interestSaved.textContent = interestDiff > 0 ? 'Projected interest savings: ' + fmt(interestDiff) : '';
        } else {
          extraBlock.style.display = 'none';
        }
      }

      [bank, term, extraFreq].forEach(function(el) {
        if (el) el.addEventListener('change', calc);
      });

      [down, extraAmt].forEach(function(el) {
        if (el) el.addEventListener('input', calc);
      });

      var toggle = document.getElementById('mc-extra-toggle');
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
