<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preload" href="img/logo.svg" as="image" type="image/svg+xml" fetchpriority="high">
  <style>
    :root {
      --lls-bg: #ffffff;
      --lls-white: #ffffff;
      --lls-ink: #336243;
      --lls-copy: #6f887d;
      --lls-emerald-900: #0b4f33;
      --lls-emerald-800: #0d673d;
      --lls-emerald-700: #129247;
      --lls-emerald-600: #19a950;
      --lls-hero-line: #5ccc81;
      --lls-gold-100: #f6e9c9;
      --lls-green-background: linear-gradient(180deg, #18a362 0%, #0f8f53 100%);
      --lls-hero-title-top-desktop: clamp(20px, 24vh, 24px);
      --lls-hero-title-top-mobile: clamp(24px, 20vh, 46px);
      --lls-shell: 1240px;
      --lls-content: 1120px;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      background: var(--lls-bg);
      color: var(--lls-ink);
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      line-height: 1.45;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .lls-container {
      width: min(var(--lls-content), calc(100% - 2.6rem));
      margin-inline: auto;
    }

    .lls-hero {
      position: relative;
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
      padding-top: var(--lls-header-overlay, 122px);
      min-height: 650px;
      background-image: url("img/Master_Plan.webp");
      background-size: cover;
      background-position: center 28%;
      border-bottom: 0;
      overflow: hidden;
    }

    .lls-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(9, 95, 127, 0.48) 0%, rgba(7, 88, 118, 0.15) 19%, rgba(7, 88, 118, 0) 58%);
      pointer-events: none;
    }

    .lls-hero::after {
      content: none;
    }

    .lls-hero-content {
      position: relative;
      z-index: 2;
      width: min(var(--lls-shell), calc(100% - 2.4rem));
      margin: 0 auto;
    }

    .lls-hero h1 {
      position: absolute;
      top: var(--lls-hero-title-top-desktop);
      left: 50%;
      transform: translateX(-50%);
      margin: 0;
      width: calc(100% - 2rem);
      text-align: center;
      color: #0b4f44;
      font-size: clamp(1rem, 3.95vw, 2.86rem);
      font-weight: 600;
      letter-spacing: clamp(0.23em, 0.65vw, 0.42em);
      text-transform: uppercase;
      text-shadow: 0 2px 14px rgba(0, 0, 0, 0.18);
    }

    .lls-intro {
      background: var(--lls-green-background);
      color: #f0fffb;
      text-align: center;
      padding: 4.25rem 1.2rem 4.35rem;
    }

    .lls-intro h2 {
      margin: 0 0 0.7rem;
      font-size: clamp(1.7rem, 2.35vw, 2.7rem);
      line-height: 1.15;
      font-weight: 600;
    }

    .lls-intro p {
      margin: 0 auto;
      max-width: 940px;
      font-size: clamp(0.98rem, 1.05vw, 1.15rem);
      line-height: 1.48;
      color: rgba(238, 255, 248, 0.88);
    }

    .lls-amenities {
      padding: 2.9rem 0 2.5rem;
      width: 100%;
    }

    .lls-amenities-shell {
      display: grid;
      grid-template-columns: minmax(360px, 47vw) minmax(0, 1fr);
      align-items: stretch;
      gap: 0;
      width: 100%;
    }

    .lls-image-main {
      margin: 0;
      border-radius: 0 30px 30px 0;
      overflow: hidden;
      box-shadow: 0 20px 34px rgba(34, 63, 67, 0.14);
      height: 100%;
    }

    .lls-image-main img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      min-height: 100%;
    }

    .lls-copy {
      padding: 0 clamp(2rem, 8vw, 10rem) 0 clamp(2rem, 4vw, 4.2rem);
      max-width: 980px;
      align-self: center;
    }

    .lls-copy h3 {
      margin: 0 0 1.2rem;
      color: #006847;
      font-size: clamp(2rem, 3.2vw, 4rem);
      line-height: 1.08;
      font-weight: 500;
      letter-spacing: 0.005em;
    }

    .lls-copy>p {
      margin: 0 0 2rem;
      color: #535f61;
      font-size: clamp(1rem, 1.15vw, 1.25rem);
      line-height: 1.7;
      max-width: 62ch;
    }

    .lls-benefit-list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: grid;
      gap: 1.1rem;
    }

    .lls-benefit-item {
      display: grid;
      grid-template-columns: 2.8rem 1fr;
      gap: 1rem;
      align-items: start;
    }

    .lls-benefit-number {
      color: #119273;
      font-size: clamp(2rem, 2.2vw, 2.8rem);
      line-height: 0.95;
      font-weight: 300;
      letter-spacing: 0.01em;
    }

    .lls-benefit-title {
      margin: 0 0 0.2rem;
      color: #485355;
      font-size: clamp(1.12rem, 1.35vw, 1.56rem);
      line-height: 1.25;
      font-weight: 400;
    }

    .lls-benefit-copy {
      margin: 0;
      color: #576264;
      font-size: clamp(0.98rem, 1.05vw, 1.15rem);
      line-height: 1.48;
      font-weight: 300;
    }

    .lls-grid-main {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(2rem, 4vw, 3.7rem);
      align-items: center;
    }

    .lls-layouts {
      background: var(--lls-green-background);
      color: #f6fffc;
      padding: 1.1rem 0 0.9rem;
      overflow: hidden;
    }

    .lls-layouts .lls-container {
      width: min(1460px, calc(100% - 2.4rem));
    }

    .lls-layouts .lls-grid-main {
      grid-template-columns: minmax(650px, 1.15fr) minmax(460px, 0.85fr);
      gap: clamp(0.9rem, 1.9vw, 2rem);
      align-items: center;
    }

    .lls-layouts article {
      justify-self: start;
      max-width: 800px;
      padding-left: clamp(0.1rem, 0.8vw, 0.6rem);
      padding-right: 0;
    }

    .lls-layouts h3 {
      margin: 0 0 0.85rem;
      color: #ffffff;
      font-size: clamp(2rem, 3.2vw, 4rem);
      line-height: 1.08;
      font-weight: 500;
      letter-spacing: 0.01em;
      max-width: 20.6ch;
    }

    .lls-layouts p {
      margin: 0 0 1.1rem;
      max-width: 72.5ch;
      color: rgba(242, 255, 250, 0.92);
      font-size: clamp(1rem, 1.15vw, 1.25rem);
      line-height: 1.7;
    }

    .lls-layout-list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: grid;
      gap: 0.58rem;
    }

    .lls-layout-list li {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 0.72rem;
      align-items: start;
    }

    .lls-layout-number {
      color: rgba(205, 255, 236, 0.9);
      font-size: clamp(2rem, 2.2vw, 2.8rem);
      line-height: 0.95;
      font-weight: 300;
      letter-spacing: 0.02em;
      min-width: 2.2ch;
    }

    .lls-layout-title {
      margin: 0 0 0.1rem;
      color: #ffffff;
      font-size: clamp(1.12rem, 1.35vw, 1.56rem);
      font-weight: 400;
      line-height: 1.25;
      letter-spacing: 0.01em;
    }

    .lls-layout-copy {
      margin: 0;
      color: rgba(241, 255, 250, 0.88);
      font-size: clamp(0.98rem, 1.05vw, 1.15rem);
      line-height: 1.48;
    }

    .lls-layout-image {
      max-width: 980px;
      width: 100%;
      margin: 0;
      filter: drop-shadow(0 22px 26px rgba(2, 66, 51, 0.35));
      justify-self: end;
      transform: translateX(28px);
    }

    .lls-layout-image img {
      width: 100%;
      max-width: 980px;
    }

    .lls-lifestyle {
      text-align: center;
      padding: 2.65rem 0 2.55rem;
    }

    .lls-lifestyle h3 {
      margin: 0;
      color: #006847;
      font-size: clamp(1.5rem, 2.4vw, 3rem);
      line-height: 1.08;
      font-weight: 500;
    }

    .lls-lifestyle p {
      margin: 0.68rem auto 1.16rem;
      max-width: 940px;
      color: #88a1a3;
      font-size: clamp(1rem, 1.15vw, 1.25rem);
      line-height: 1.7;
    }

    .lls-lifestyle-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.84rem;
    }

    .lls-lifestyle-grid img {
      width: 100%;
      border-radius: 6px;
      box-shadow: 0 13px 24px rgba(23, 50, 52, 0.16);
      object-fit: cover;
      height: clamp(240px, 26vw, 360px);
    }

    .lls-brand {
      text-align: center;
      padding: 0.65rem 0 2.65rem;
    }

    .lls-brand-mark {
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .lls-brand-mark img {
      width: min(240px, 92%);
      height: auto;
      display: block;
    }

    .lls-brand h4 {
      margin: 1.05rem 0 1rem;
      color: #006847;
      font-size: clamp(1.7rem, 2.35vw, 2.7rem);
      font-weight: 500;
    }

    .lls-brand-image {
      width: min(760px, 100%);
      margin: 0 auto;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 18px 30px rgba(28, 58, 60, 0.16);
    }

    .lls-brand-caption {
      margin: 0.65rem auto 1rem;
      max-width: 720px;
      color: #95a6a8;
      font-size: clamp(1rem, 1.15vw, 1.25rem);
      line-height: 1.7;
    }

    .lls-cta {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 48px;
      padding: 0 1.4rem;
      border-radius: 3px;
      background: var(--lls-green-background);
      color: #ffffff;
      text-decoration: none;
      text-transform: uppercase;
      font-size: clamp(0.95rem, 1.02vw, 1.1rem);
      letter-spacing: 0.1em;
      font-weight: 700;
      box-shadow: 0 11px 19px rgba(13, 105, 88, 0.28);
    }

    .lls-cta:hover,
    .lls-cta:focus-visible {
      color: #fff6df;
      border-color: #fff6df;
    }

    @media (max-width: 940px) {
      .lls-container {
        width: min(var(--lls-content), calc(100% - 1.5rem));
      }

      .lls-hero {
        min-height: 480px;
      }

      .lls-grid-main,
      .lls-lifestyle-grid {
        grid-template-columns: 1fr;
      }

      .lls-layouts {
        padding: 1.5rem 0 1.4rem;
      }

      .lls-layouts .lls-container {
        width: min(1260px, calc(100% - 2rem));
      }

      .lls-layouts .lls-grid-main {
        grid-template-columns: 1fr;
        gap: 1.2rem;
      }

      .lls-layouts article {
        max-width: none;
        padding: 0;
      }

      .lls-layout-image {
        max-width: 760px;
        justify-self: center;
        transform: none;
      }

      .lls-amenities-shell {
        grid-template-columns: 1fr;
        gap: 1.3rem;
      }

      .lls-copy {
        padding: 0 min(7vw, 2rem);
      }

      .lls-copy h3 {
        font-size: clamp(2rem, 6.8vw, 3.3rem);
      }

      .lls-copy>p {
        font-size: 1rem;
      }

      .lls-lifestyle-grid img {
        height: clamp(220px, 46vw, 320px);
      }

      .lls-image-main {
        max-width: 860px;
        margin: 0 auto;
      }
    }

    @media (max-width: 640px) {
      .lls-hero-content {
        width: calc(100% - 1.4rem);
      }

      .lls-hero::after {
        top: 72px;
      }

      .lls-hero h1 {
        top: var(--lls-hero-title-top-mobile);
        letter-spacing: 0.17em;
        font-size: clamp(0.78rem, 4.2vw, 4.05rem);
      }

      .lls-intro {
        padding-top: 1.72rem;
        padding-bottom: 1.76rem;
      }

      .lls-benefit-item {
        grid-template-columns: 2.2rem 1fr;
        gap: 0.75rem;
      }

      .lls-image-main img {
        min-height: 320px;
      }

      .lls-image-main {
        border-radius: 0 22px 22px 0;
      }

      .lls-lifestyle-grid img {
        height: clamp(180px, 52vw, 260px);
      }
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <section class="lls-hero">
    <div class="lls-hero-content">
      <h1>Caribbean Living, Every Day.</h1>
    </div>
  </section>

  <section class="lls-intro" id="about">
    <h2>A private residential destination shaped by<br>climate, calm, and everyday beauty.</h2>
    <p>Las Lomas Serenas is a condominium development in Sosua, Puerto Plata, created for people who want more than a
      property. It is a place designed around warmth, ease, scenery, security, and a more generous rhythm of life on the
      North Coast of the Dominican Republic.</p>
  </section>

  <section class="lls-amenities" id="complex">
    <div class="lls-amenities-shell">
      <figure class="lls-image-main">
        <img src="Familia en la terraza 2.webp" alt="Residents enjoying terrace amenities at Las Lomas Serenas" loading="lazy" decoding="async">
      </figure>

      <article class="lls-copy">
        <h3>A refined community with<br>the feeling of a retreat.</h3>
        <p>Owned and operated by U.S. investors and entrepreneurs, Las Lomas Serenas blends everyday comfort with a
          destination lifestyle. The experience feels private and composed, while still connected to beaches,
          restaurants, sports, and the social energy of Sosua.</p>

        <ol class="lls-benefit-list" aria-label="Community benefits">
          <li class="lls-benefit-item">
            <span class="lls-benefit-number">01</span>
            <div>
              <h4 class="lls-benefit-title">24-hour security</h4>
              <p class="lls-benefit-copy">Designed for peace of mind, comfort, and a relaxed sense of home.</p>
            </div>
          </li>
          <li class="lls-benefit-item">
            <span class="lls-benefit-number">02</span>
            <div>
              <h4 class="lls-benefit-title">Year-round tropical climate</h4>
              <p class="lls-benefit-copy">Temperatures averaging between 75°F and 88°F invite outdoor living every
                season.</p>
            </div>
          </li>
          <li class="lls-benefit-item">
            <span class="lls-benefit-number">03</span>
            <div>
              <h4 class="lls-benefit-title">North Coast positioning</h4>
              <p class="lls-benefit-copy">Beautifully placed in Puerto Plata's vibrant seaside environment, where nature
                and convenience meet.</p>
            </div>
          </li>
        </ol>
      </article>
    </div>
  </section>

  <section class="lls-layouts" id="layouts">
    <div class="lls-container lls-grid-main">
      <article>
        <h3>Homes designed to feel personal,<br>spacious, and beautifully composed.</h3>
        <p>The development features 2- and 3-bedroom condominiums equipped with the comforts and conveniences people
          expect in a true home. The approach is warm, practical, and refined, ideal for full-time residents, seasonal
          owners, or investors.</p>
        <ul class="lls-layout-list">
          <li>
            <span class="lls-layout-number">01</span>
            <div>
              <h4 class="lls-layout-title">2-bedroom residences</h4>
              <p class="lls-layout-copy">Flexible, elegant spaces for couples, part-time living, or those seeking a
                refined tropical base.</p>
            </div>
          </li>
          <li>
            <span class="lls-layout-number">02</span>
            <div>
              <h4 class="lls-layout-title">3-bedroom residences</h4>
              <p class="lls-layout-copy">Spacious layouts that offer more room for family life, hosting, and long-term
                comfort.</p>
            </div>
          </li>
          <li>
            <span class="lls-layout-number">03</span>
            <div>
              <h4 class="lls-layout-title">Everyday comfort</h4>
              <p class="lls-layout-copy">Layouts and living spaces conceived for ease, elegance, and the kind of home
                people genuinely want to return to.</p>
            </div>
          </li>
        </ul>
      </article>

      <figure class="lls-layout-image">
        <img src="casa3d.webp" alt="3D apartment layouts with 2 and 3 bedroom options" loading="lazy" decoding="async">
      </figure>
    </div>
  </section>

  <section class="lls-lifestyle lls-container" id="lifestyle">
    <h3>An active, social lifestyle designed<br>around recreation, ease, and community.</h3>
    <p>Las Lomas Serenas is more than a place to own property. It is a place to move, connect, relax, and enjoy the
      rhythm of the North Coast from sports and wellness to family time and beautiful everyday moments.</p>
    <div class="lls-lifestyle-grid">
      <img src="Amenities2.webp" alt="Lifestyle amenities and sports spaces" loading="lazy" decoding="async">
      <img src="pool family.webp" alt="Family pool and relaxation lifestyle" loading="lazy" decoding="async">
    </div>
  </section>

  <section class="lls-brand lls-container">
    <h2 class="lls-brand-mark">
      <img src="img/logo.svg" alt="Las Lomas Serenas logo" width="527" height="170" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='img/logo-fallback.png';">
    </h2>
    <h4>Own the lifestyle people travel to find.</h4>
    <figure class="lls-brand-image">
      <img src="img/front-green.webp" alt="Las Lomas Serenas main entrance" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='paginas/Front Green.webp';">
    </figure>
    <p class="lls-brand-caption">A private residential experience on the North Coast of the Dominican Republic, designed
      around climate, beauty, comfort, and long-term possibility.</p>
    <a class="lls-cta" href="#contact">Request Information</a>
  </section>

  <?php include __DIR__ . '/components/footer.php'; ?>

</body>

</html>






