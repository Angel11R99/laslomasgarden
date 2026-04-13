<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | About Us</title>
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-white: #ffffff;
      --lls-page-background: #ffffff;
      --lls-heading: #00895d;
      --lls-copy: #00895d;
      --lls-card-shadow: 0 14px 28px rgba(28, 81, 65, 0.14);
      --lls-card-radius: 8px;
      --lls-shell: 1350px;
      --lls-green-background: linear-gradient(180deg, #18a362 0%, #0f8f53 100%);
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      background: var(--lls-page-background);
      color: var(--lls-copy);
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      line-height: 1.45;
    }

    img {
      display: block;
      max-width: 100%;
    }

    .about-page {
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
      padding-top: var(--lls-header-overlay, 122px);
    }

    .about-shell {
      width: min(var(--lls-shell), calc(100% - 2rem));
      margin-inline: auto;
    }

    .about-section {
      padding-top: 0;
      padding-right: 0;
      padding-bottom: 0;
      padding-left: 0;
    }

    .about-copy {
      margin: 0;
      font-size: clamp(1rem, 1.34vw, 1.17rem);
      font-weight: 400;
      line-height: 1.58;
      color: var(--lls-copy);
    }

    .about-hero {
      background: linear-gradient(90deg,
        #006837 0%,
        #006837 19.2053%,
        #22b573 42.4501%,
        #006837 73.3775%,
        #22b573 100%);
      padding: clamp(6.4rem, 2.5vw, 2rem) 1.5rem;
      text-align: center;
      margin-top: 0;
      margin-bottom: 3.5rem;
      width: 100%;
      border-radius: 0;
    }

    .about-hero .about-shell {
      width: min(1300px, calc(100% - 3rem));
    }

    .about-hero .about-copy {
      color: var(--lls-white);
      max-width: 100%;
      margin: 0 auto;
      font-size: clamp(1rem, 1.35vw, 1.15rem);
      line-height: 1.6;
      opacity: 0.95;
    }

    .about-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: clamp(1.2rem, 2vw, 1.9rem);
      align-items: end;
    }

    .about-card {
      margin: 0;
      border-radius: var(--lls-card-radius);
      overflow: hidden;
      background: transparent;
    }

    /* Keep spacing for the map card (second child) */
    .about-grid .about-card:nth-child(2) {
      margin-bottom: 3.5rem;
    }

    .about-card img {
      width: 100%;
      height: 100%;
      min-height: clamp(240px, 31vw, 364px);
      object-fit: contain;
    }

    .about-description {
      text-align: center;
      padding: clamp(3.2rem, 6vw, 4.6rem) 0 clamp(2rem, 4vw, 3rem);
    }

    .about-description .about-shell {
      width: min(1200px, calc(100% - 4rem));
    }

    .about-description .about-copy {
      max-width: 100%;
      margin: 0 auto;
      font-size: clamp(1rem, 1.3vw, 1.15rem);
      line-height: 1.7;
    }

    .about-description .about-cta {
      margin-top: 2rem;
    }

    .about-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 48px;
      padding: 0.68rem 1.8rem;
      border: 0;
      border-radius: 0;
      background: var(--lls-green-background);
      color: var(--lls-white);
      font-family: inherit;
      font-size: clamp(0.95rem, 1.08vw, 1.08rem);
      font-weight: 500;
      line-height: 1;
      letter-spacing: 0.02em;
      text-decoration: none;
      box-shadow: 0 10px 22px rgba(19, 131, 88, 0.22);
    }

    .about-company {
      padding-bottom: clamp(4.2rem, 8vw, 6.3rem);
    }

    .about-company-layout {
      display: grid;
      grid-template-columns: minmax(0, 1.02fr) minmax(0, 1fr);
      gap: clamp(1.6rem, 2.8vw, 2.8rem);
      align-items: center;
    }

    .about-company-copy {
      display: grid;
      gap: 1.55rem;
      align-content: center;
    }

    .about-company-logo {
      width: min(320px, 78%);
      margin: 0 auto 0.35rem;
    }

    .about-company-text {
      display: grid;
      gap: 1.25rem;
      text-align: left;
    }

    .about-company-image {
      margin: 0;
      border-radius: var(--lls-card-radius);
      overflow: hidden;
      background: transparent;
    }

    .about-company-image img {
      width: 100%;
      height: 100%;
      min-height: clamp(290px, 34vw, 420px);
      object-fit: cover;
    }

    @media (max-width: 900px) {
      .about-grid,
      .about-company-layout {
        grid-template-columns: 1fr;
      }

      .about-shell {
        width: min(var(--lls-shell), calc(100% - 1.4rem));
      }

      .about-company-copy {
        justify-items: center;
      }

      .about-company-text {
        text-align: center;
      }
    }

    @media (max-width: 640px) {
      .about-page {
        padding-top: var(--lls-header-overlay, 132px);
      }

      .about-hero {
        padding: 3.1rem 0;
      }

      .about-section {
        padding-top: 2.6rem;
      }

      .about-card img,
      .about-company-image img {
        min-height: 220px;
      }

      .about-button {
        width: 100%;
        max-width: 280px;
      }
    }
  </style>
</head>

<body class="page-about">
  <?php include __DIR__ . '/components/header.php'; ?>

  <main class="about-page">

    <section class="about-section" aria-label="About gallery">
      <div class="about-shell">
        <div class="about-grid">
          <figure class="about-card">
            <img src="img/ron_jan_ham.webp" alt="Residents enjoying time together at Las Lomas Serenas" loading="lazy" decoding="async">
          </figure>
          <figure class="about-card">
            <img src="img/mapa_recurso.webp" alt="Map of the Caribbean showing the Dominican Republic location" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>
    </section>

    <section class="about-hero" aria-labelledby="about-hero-text">
      <div class="about-shell">
        <p class="about-copy" id="about-hero-text">Las Lomas Serenas is a condominium development owned and operated by U.S. investors and entrepreneurs. It is located on the beautiful North Coast of the Dominican Republic, in the Province of Puerto Plata, in the vibrant seaside town of Sosúa.</p>
      </div>
    </section>

    <section class="about-section about-company" aria-labelledby="about-company-title">
      <div class="about-shell">
        <div class="about-company-layout">
          <div class="about-company-copy">
            <img class="about-company-logo" src="img/MaireniLogo.webp" alt="Maireni Bournigal & Co logo" loading="lazy" decoding="async">
            <div class="about-company-text" id="about-company-title">
              <p class="about-copy">Since 1985, Bournigal Construction has delivered premium residential developments, hotels, and industrial projects across the Dominican Republic with unmatched engineering precision.</p>
              <p class="about-copy">What sets us apart and has made us the number one construction company on the North Coast of the Dominican Republic for the last 40 years is our commitment to quality and client satisfaction.</p>
              <p class="about-copy">We are proud to be partnering with Las Lomas Serenas and we are committed to making this an exceptional facility for all its residents.</p>
            </div>
          </div>

          <figure class="about-company-image">
            <img src="img/MaireniRecurso.webp" alt="Construction team working on-site" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>

</body>

</html>
