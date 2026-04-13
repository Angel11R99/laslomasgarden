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

    /* White sections — text + image side by side with shell */
    .rooms-section-white {
      padding: clamp(3rem, 6vw, 4.5rem) 0;
    }

    .rooms-section-white-inner {
      width: min(var(--lls-shell), calc(100% - 2.2rem));
      margin-inline: auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(2rem, 4vw, 4rem);
      align-items: center;
    }

    .rooms-section-white-inner.is-reverse .rooms-media {
      order: 2;
    }
    .rooms-section-white-inner.is-reverse .rooms-copy {
      order: 1;
    }

    .rooms-media {
      margin: 0;
      border-radius: 8px;
      overflow: hidden;
    }

    .rooms-media img {
      height: clamp(260px, 28vw, 380px);
      object-fit: cover;
    }

    .rooms-copy h2 {
      margin: 0 0 0.8rem;
      color: var(--lls-title);
      font-size: clamp(1.4rem, 2.2vw, 2rem);
      line-height: 1.15;
      font-weight: 600;
    }

    .rooms-copy p {
      margin: 0;
      font-size: clamp(0.93rem, 1vw, 1.02rem);
      line-height: 1.6;
      color: var(--lls-copy);
      max-width: 58ch;
    }

    .rooms-actions {
      margin-top: 1.2rem;
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.6rem;
    }

    .rooms-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 38px;
      padding: 0.45rem 1.2rem;
      text-decoration: none;
      font-family: inherit;
      font-size: 0.88rem;
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

    /* Green sections — full width, image + green text panel */
    .rooms-section-green {
      display: grid;
      grid-template-columns: 1fr 1fr;
      min-height: clamp(300px, 35vw, 460px);
    }

    .rooms-section-green .rooms-media {
      border-radius: 0;
    }

    .rooms-section-green .rooms-media img {
      height: 100%;
      min-height: clamp(300px, 35vw, 460px);
      object-fit: cover;
    }

    .rooms-green-copy {
      background: var(--lls-green-strip);
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: clamp(2.5rem, 5vw, 4rem) clamp(2rem, 5vw, 5rem);
    }

    .rooms-green-copy h2 {
      margin: 0 0 1rem;
      color: #ffffff;
      font-size: clamp(1.4rem, 2.2vw, 2rem);
      line-height: 1.2;
      font-weight: 600;
    }

    .rooms-green-copy p {
      margin: 0;
      font-size: clamp(0.93rem, 1vw, 1.02rem);
      line-height: 1.6;
      color: rgba(240, 255, 248, 0.92);
      max-width: 52ch;
    }

    .rooms-green-copy .rooms-actions {
      margin-top: 1.4rem;
    }

    .rooms-button.is-outline-white {
      background: transparent;
      color: #ffffff;
      border-color: rgba(255, 255, 255, 0.7);
    }

    /* ── Responsive ── */
    @media (max-width: 900px) {
      .rooms-section-white-inner {
        grid-template-columns: 1fr;
        width: min(var(--lls-shell), calc(100% - 1.4rem));
      }

      .rooms-section-white-inner.is-reverse .rooms-media,
      .rooms-section-white-inner.is-reverse .rooms-copy {
        order: initial;
      }

      .rooms-section-green {
        grid-template-columns: 1fr;
      }

      .rooms-section-green .rooms-media img {
        min-height: 260px;
        height: 260px;
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
        <figure class="rooms-media">
          <img src="img/rooms-kitchen.webp" alt="Contemporary kitchen" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-green-copy">
          <h2>Contemporary Kitchens Designed for Everyday Living</h2>
          <p>The kitchens in Las Lomas Serenas Type C executive apartments are designed to combine functionality with elevated design and high-quality materials. Thoughtfully planned layouts and refined finishes make preparing and serving meals both effortless and enjoyable.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-outline-white" href="#contact">Request Information</a>
            <a class="rooms-button is-outline-white" href="#contact">Contact US</a>
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
        <figure class="rooms-media">
          <img src="img/rooms-bathroom.webp" alt="Clean modern bathroom" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-green-copy">
          <h2>Clean Design Practical Comfort</h2>
          <p>The bathrooms in Las Lomas Serenas reflect a balance of sophistication, functionality, and modern design. Crafted with premium materials and refined finishes, these spaces offer an elevated level of comfort while maintaining practical ease of use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-outline-white" href="#contact">Request Information</a>
            <a class="rooms-button is-outline-white" href="#contact">Contact US</a>
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
