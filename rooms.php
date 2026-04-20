<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | Rooms</title>
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="/img/logo-fallback.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-green: #089e67;
      --lls-green-deep: #067c56;
      --lls-green-strip: linear-gradient(180deg, #14a866 0%, #0f8f53 100%);
      --lls-title: #0a9a72;
      --lls-copy: #63706b;
      --lls-shell: 1120px;
      --lls-card-shadow: 0 18px 38px rgba(31, 67, 57, 0.14);
      --lls-border: #d4ded9;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

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

    .rooms-hero {
      min-height: clamp(290px, 48vw, 430px);
      background-image: linear-gradient(to bottom, rgba(12, 76, 98, 0.36) 0%, rgba(12, 76, 98, 0.08) 55%, rgba(12, 76, 98, 0) 100%), url("img/rooms-hero-building.webp");
      background-position: center;
      background-size: cover;
    }

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
    }

    .rooms-intro p {
      margin: 0 auto;
      max-width: 920px;
      font-size: clamp(0.98rem, 1.15vw, 1.14rem);
      line-height: 1.5;
      color: rgba(240, 255, 248, 0.92);
    }

    .rooms-sections {
      padding: clamp(2rem, 4.8vw, 3.2rem) 0 clamp(3.2rem, 7.5vw, 4.8rem);
      display: grid;
      gap: clamp(2rem, 4vw, 2.9rem);
    }

    .rooms-section {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
      align-items: center;
      gap: clamp(1.2rem, 2.8vw, 2.5rem);
    }

    .rooms-section.is-reverse .rooms-section-media {
      order: 2;
    }

    .rooms-section.is-reverse .rooms-section-copy {
      order: 1;
    }

    .rooms-section-media {
      margin: 0;
      border-radius: 6px;
      overflow: hidden;
      box-shadow: var(--lls-card-shadow);
      background: #eaf2ed;
      min-height: clamp(188px, 22vw, 260px);
    }

    .rooms-section-media img {
      height: 100%;
      object-fit: cover;
    }

    .rooms-section-copy h2 {
      margin: 0 0 0.62rem;
      color: var(--lls-title);
      font-size: clamp(1.48rem, 2.25vw, 2.2rem);
      line-height: 1.1;
      font-weight: 600;
      letter-spacing: 0.01em;
    }

    .rooms-section-copy p {
      margin: 0;
      font-size: clamp(0.95rem, 1.03vw, 1.05rem);
      line-height: 1.52;
      color: var(--lls-copy);
      max-width: 62ch;
    }

    .rooms-actions {
      margin-top: 1rem;
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.62rem;
    }

    .rooms-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 38px;
      padding: 0.45rem 1.1rem;
      text-decoration: none;
      font-size: 0.9rem;
      line-height: 1;
      letter-spacing: 0.02em;
      border: 1px solid var(--lls-green);
      transition: opacity 0.2s ease;
    }

    .rooms-button:hover,
    .rooms-button:focus-visible {
      opacity: 0.82;
    }

    .rooms-button.is-solid {
      background: var(--lls-green);
      color: #ffffff;
    }

    .rooms-button.is-outline {
      background: transparent;
      color: var(--lls-green-deep);
      border-color: var(--lls-border);
    }

    @media (max-width: 900px) {
      .rooms-shell {
        width: min(var(--lls-shell), calc(100% - 1.4rem));
      }

      .rooms-section,
      .rooms-section.is-reverse {
        grid-template-columns: 1fr;
      }

      .rooms-section.is-reverse .rooms-section-media,
      .rooms-section.is-reverse .rooms-section-copy {
        order: initial;
      }

      .rooms-section-copy h2 {
        font-size: clamp(1.34rem, 5vw, 1.76rem);
      }
    }

    @media (max-width: 640px) {
      .rooms-page {
        padding-top: var(--lls-header-overlay, 132px);
      }

      .rooms-intro {
        padding: 2rem 0.8rem;
      }

      .rooms-button {
        width: 100%;
      }
    }
  </style>
</head>

<body class="page-rooms">
  <?php include __DIR__ . '/components/header.php'; ?>

  <main class="rooms-page">
    <section class="rooms-hero" aria-label="Las Lomas Serenas building"></section>

    <section class="rooms-intro" aria-labelledby="rooms-intro-title">
      <div class="rooms-shell">
        <h1 id="rooms-intro-title">Own the lifestyle people travel to find</h1>
        <p>The development features spacious 2- and 3-bedroom condominiums equipped with all the comforts and conveniences you would expect in your own home.</p>
      </div>
    </section>

    <section class="rooms-shell rooms-sections" aria-label="Room highlights">
      <article class="rooms-section">
        <figure class="rooms-section-media">
          <img src="img/rooms-living.webp" alt="Warm and relaxing living room" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Warm and Relaxing Living Spaces</h2>
          <p>The living areas at Las Lomas Serenas offer a more spacious and inviting environment, designed for enhanced comfort and everyday living. The open layout is complemented by abundant natural light, creating a bright, airy, and welcoming atmosphere.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>

      <article class="rooms-section is-reverse">
        <figure class="rooms-section-media">
          <img src="img/rooms-kitchen.webp" alt="Contemporary kitchen" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Contemporary Kitchens Designed for Everyday Living</h2>
          <p>The kitchens in Las Lomas Serenas Type C executive apartments are designed to combine functionality with elevated design and high-quality materials. Thoughtfully planned layouts and refined finishes make preparing and serving meals both effortless and enjoyable.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>

      <article class="rooms-section">
        <figure class="rooms-section-media">
          <img src="img/rooms-bedroom.webp" alt="Comfortable bedroom with natural light" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Comfortable &amp; Modern Bedrooms</h2>
          <p>The bedrooms in Las Lomas Serenas Type C executive apartments are designed to provide an elevated atmosphere of relaxation and comfort. Each space features clean lines, premium finishes, and carefully selected high-quality materials that enhance both elegance and tranquility.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>

      <article class="rooms-section is-reverse">
        <figure class="rooms-section-media">
          <img src="img/rooms-bathroom.webp" alt="Bathroom with clean design" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Clean Design Practical Comfort</h2>
          <p>The bathrooms in Las Lomas Serenas reflect a balance of sophistication, functionality, and modern design. Crafted with premium materials and refined finishes, these spaces offer an elevated level of comfort while maintaining practical ease of use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>

      <article class="rooms-section">
        <figure class="rooms-section-media">
          <img src="img/rooms-closet.webp" alt="Modern walk-in closet" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Comfortable &amp; Modern Closet</h2>
          <p>The bedrooms at Las Lomas Serenas are designed to provide a more spacious and serene atmosphere, focused on comfort and relaxation. With increased space and abundant natural light, the smart layout allows for greater comfort and flexibility in everyday use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>

      <article class="rooms-section is-reverse">
        <figure class="rooms-section-media">
          <img src="img/rooms-laundry.webp" alt="Laundry area" loading="lazy" decoding="async">
        </figure>
        <div class="rooms-section-copy">
          <h2>Every Detail Has a Reason</h2>
          <p>At Las Lomas Serenas, every space is designed with purpose. Our laundry areas combine clean design, efficiency, and modern comfort to support everyday living. Thoughtfully planned layouts and quality finishes create a practical, organized environment that is easy to maintain and comfortable to use.</p>
          <div class="rooms-actions">
            <a class="rooms-button is-solid" href="/contact-us">Request Information</a>
            <a class="rooms-button is-outline" href="/contact-us">Contact US</a>
          </div>
        </div>
      </article>
    </section>
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>
