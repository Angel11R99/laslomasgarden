<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | 3 Bedrooms</title>
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-green: #089e67;
      --lls-green-deep: #067c56;
      --lls-green-gradient: linear-gradient(30deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
      --lls-title: #0a9a72;
      --lls-copy: #63706b;
      --lls-shell: 1220px;
      --lls-section-space: clamp(4rem, 7vw, 6.5rem);
      --lls-border: #d4ded9;
    }

    * { 
      box-sizing: border-box; 
      border-radius: 0 !important;
    }
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

    .lls-shell {
      width: min(var(--lls-shell), 100%);
      margin-inline: auto;
      padding-inline: 1.5rem;
    }

    .rooms-page {
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
    }

    /* ── Hero ── */
    .rooms-hero {
      height: 100vh;
      min-height: 500px;
      background-image: url("img/3habitaciones.webp");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    /* ── Intro strip ── */
    .rooms-intro {
      background: var(--lls-green-gradient);
      color: #f4fffa;
      text-align: center;
      padding: clamp(3rem, 6vw, 4.5rem) 1rem;
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
      font-size: clamp(1.05rem, 1.4vw, 1.25rem);
      font-weight: 700;
      letter-spacing: 0.06em;
      padding: 0.9rem 1rem;
      text-align: center;
    }

    .pricing-header-row td {
      color: var(--lls-title);
      font-weight: 700;
      font-size: clamp(1rem, 1.2vw, 1.15rem);
      letter-spacing: 0.04em;
      padding: 0.75rem 1rem;
      border-bottom: 1px solid #dde8e2;
    }

    .pricing-table tbody tr:not(.pricing-header-row) td {
      padding: 0.85rem 1rem;
      font-size: clamp(1rem, 1.15vw, 1.12rem);
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
      font-size: clamp(1rem, 1.1vw, 1.1rem);
      color: #333;
      text-align: center;
    }

    /* ── Sections ── */
    .rooms-sections {
      display: grid;
      gap: 0;
    }

    /* White sections — text + image side by side with shell */
    .rooms-section-white {
      padding: 0;
    }

    .rooms-section-white-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: stretch;
      width: 100%;
    }

    .rooms-section-white-inner.is-reverse .rooms-media {
      order: 2;
    }

    .rooms-section-white-inner.is-reverse .rooms-copy {
      order: 1;
    }

    .rooms-media {
      margin: 0;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .rooms-media img {
      width: 100%;
      height: 100%;
      min-height: clamp(400px, 45vw, 600px);
      object-fit: cover;
    }

    .rooms-copy {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: var(--lls-section-space) clamp(2rem, 8vw, 10rem);
    }

    .rooms-copy h2 {
      margin: 0 0 1.2rem;
      color: var(--lls-green-deep);
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      line-height: 1.1;
      font-weight: 700;
    }

    .rooms-copy p {
      margin: 0;
      font-size: clamp(1rem, 1.1vw, 1.15rem);
      line-height: 1.7;
      color: var(--lls-copy);
      max-width: 55ch;
    }

    .rooms-actions {
      margin-top: 2rem;
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .rooms-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 0.8rem 2.2rem;
      text-decoration: none;
      font-family: inherit;
      font-size: 0.94rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      border: 1px solid var(--lls-green);
      transition: all 0.2s ease;
    }

    .rooms-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .rooms-button.is-solid {
      background: var(--lls-green-gradient);
      color: #ffffff;
      border: none;
    }

    .rooms-button.is-outline {
      background: transparent;
      color: var(--lls-green-deep);
      border-color: var(--lls-green-deep);
    }

    .rooms-button.is-solid-white {
      background: #ffffff;
      color: var(--lls-green-deep);
      border: none;
    }

    .rooms-button.is-outline-white {
      background: transparent;
      color: #ffffff;
      border-color: #ffffff;
    }

    /* Green sections — Contained version matching index.php shell */
    .rooms-section-green {
      padding: 0;
      background: var(--lls-green-gradient);
    }

    .rooms-section-green-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: stretch;
      width: 100%;
    }

    .rooms-green-copy {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: var(--lls-section-space) clamp(2rem, 8vw, 10rem);
    }

    .rooms-green-copy h2 {
      margin: 0 0 1.2rem;
      color: #ffffff;
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      line-height: 1.1;
      font-weight: 700;
    }

    .rooms-green-copy p {
      margin: 0;
      font-size: clamp(1rem, 1.1vw, 1.15rem);
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.92);
      max-width: 55ch;
    }

    .rooms-green-copy .rooms-actions {
      margin-top: 2rem;
    }

    .rooms-button.is-outline-green {
      background: transparent;
      color: #ffffff;
      border-color: #ffffff;
    }

    /* ── Responsive ── */
    @media (max-width: 960px) {
      .rooms-section-white-inner,
      .rooms-section-green-inner {
        grid-template-columns: 1fr;
      }

      .rooms-section-white-inner.is-reverse .rooms-media,
      .rooms-section-white-inner.is-reverse .rooms-copy {
        order: initial;
      }
      
      .rooms-section-green .rooms-media {
        order: -1;
      }

      .rooms-copy,
      .rooms-green-copy {
        padding: 3.5rem 1.5rem;
      }

      .rooms-media img {
        height: 320px;
        min-height: 320px;
      }
    }

    @media (max-width: 640px) {
      .rooms-page {
        padding-top: var(--lls-header-overlay, 132px);
      }

      .rooms-intro { padding: 2rem 0.8rem; }

      .rooms-button { width: 100%; }
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
      <div class="lls-shell">
        <h1 id="rooms-intro-title">Own the lifestyle people travel to find</h1>
        <p>3-bedroom residences with contemporary design, efficient layouts, and welcoming environments that adapt to your way of living.</p>
        <a class="rooms-intro-btn" href="/tourguiado">3D TOUR</a>
      </div>
    </section>

    <!-- Pricing table -->
    <section class="pricing-section">
      <h2 class="pricing-title">3 BEDROOM - 110M²</h2>
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
              <td>137 m2 / 1474.66 sq. ft.</td>
              <td>$301,400</td>
            </tr>
            <tr>
              <td>2<sup>nd</sup> Floor</td>
              <td>115 m2 / 1237.85 sq. ft.</td>
              <td>$253,000</td>
            </tr>
            <tr>
              <td>3<sup>rd</sup> Floor</td>
              <td>115 m2 / 1237.85 sq. ft.</td>
              <td>$253,000</td>
            </tr>
            <tr>
              <td>4<sup>th</sup> Floor</td>
              <td>147 m2 / 1582.29 sq. ft.</td>
              <td>$323,400</td>
            </tr>
          </tbody>
        </table>
        <div class="pricing-notes">
          <p><strong>All condos on the 1<sup>st</sup> floor include a 29 m2 (312 sq. ft.) front yard patio.</strong></p>
          <p><strong>All condo on the 4<sup>th</sup> floor have a 20 m2 (215 sq. ft.) terrace.</strong></p>
          <p><strong>All condo purchases include a free parking space.</strong></p>
        </div>
      </div>
    </section>

    <!-- Room sections -->
    <div class="rooms-sections">

      <!-- Living — white, image right -->
      <div class="rooms-section-white">
        <div class="rooms-section-white-inner">
          <div class="rooms-copy">
            <h2>Warm and Relaxing Living Spaces</h2>
            <p>The living areas at Las Lomas Serenas offer a more spacious and inviting environment, designed for enhanced comfort and everyday living. The open layout is complemented by abundant natural light, creating a bright, airy, and welcoming atmosphere.</p>
            <div class="rooms-actions">
              <a class="rooms-button is-solid" href="#contact">Request Information</a>
              <a class="rooms-button is-outline" href="#contact">Contact US</a>
            </div>
          </div>
          <figure class="rooms-media">
            <img src="img/rooms-living.webp" alt="Warm and relaxing living room" decoding="async">
          </figure>
        </div>
      </div>

      <!-- Kitchen — green, image left -->
      <div class="rooms-section-green">
        <div class="rooms-section-green-inner">
          <figure class="rooms-media">
            <img src="img/rooms-kitchen.webp" alt="Contemporary kitchen" loading="lazy" decoding="async">
          </figure>
          <div class="rooms-green-copy">
            <h2>Contemporary Kitchens Designed for Everyday Living</h2>
            <p>The kitchens in Las Lomas Serenas Type C executive apartments are designed to combine functionality with elevated design and high-quality materials. Thoughtfully planned layouts and refined finishes make preparing and serving meals both effortless and enjoyable.</p>
            <div class="rooms-actions">
              <a class="rooms-button is-solid-white" href="#contact">Request Information</a>
              <a class="rooms-button is-outline-white" href="#contact">Contact US</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bedroom — white, image right -->
      <div class="rooms-section-white">
        <div class="rooms-section-white-inner">
          <div class="rooms-copy">
            <h2>Comfortable &amp; Modern Bedrooms</h2>
            <p>The bedrooms in Las Lomas Serenas are designed to provide an elevated atmosphere of relaxation and comfort. Each space features clean lines, premium finishes, and carefully selected high-quality materials that enhance both elegance and tranquility.</p>
            <div class="rooms-actions">
              <a class="rooms-button is-solid" href="#contact">Request Information</a>
              <a class="rooms-button is-outline" href="#contact">Contact US</a>
            </div>
          </div>
          <figure class="rooms-media">
            <img src="img/rooms-bedroom.webp" alt="Comfortable modern bedroom" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>

      <!-- Bathroom — green, image left -->
      <div class="rooms-section-green">
        <div class="rooms-section-green-inner">
          <figure class="rooms-media">
            <img src="img/rooms-bathroom.webp" alt="Clean modern bathroom" loading="lazy" decoding="async">
          </figure>
          <div class="rooms-green-copy">
            <h2>Clean Design Practical Comfort</h2>
            <p>The bathrooms in Las Lomas Serenas reflect a balance of sophistication, functionality, and modern design. Crafted with premium materials and refined finishes, these spaces offer an elevated level of comfort while maintaining practical ease of use.</p>
            <div class="rooms-actions">
              <a class="rooms-button is-solid-white" href="#contact">Request Information</a>
              <a class="rooms-button is-outline-white" href="#contact">Contact US</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Laundry — white, image right -->
      <div class="rooms-section-white">
        <div class="rooms-section-white-inner">
          <div class="rooms-copy">
            <h2>Every Detail Has a Reason</h2>
            <p>At Las Lomas Serenas, every space is designed with purpose. Our laundry areas combine clean design, efficiency, and modern comfort to support everyday living. Thoughtfully planned layouts and quality finishes create a practical, organized environment that is easy to maintain and comfortable to use.</p>
            <div class="rooms-actions">
              <a class="rooms-button is-solid" href="#contact">Request Information</a>
              <a class="rooms-button is-outline" href="#contact">Contact US</a>
            </div>
          </div>
          <figure class="rooms-media">
            <img src="img/rooms-laundry.webp" alt="Laundry area" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>

    </div>
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>