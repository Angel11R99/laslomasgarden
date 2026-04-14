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
      height: 100vh;
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
      <h2 class="pricing-title">2 BEDROOM - 84.3M²</h2>
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
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>
