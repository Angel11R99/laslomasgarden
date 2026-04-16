<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preload" href="img/wlogo.svg" as="image" type="image/svg+xml" fetchpriority="high">
  <style>
    :root {
      --lls-bg: #ffffff;
      --lls-white: #ffffff;
      --lls-ink: #21523a;
      --lls-copy: #628271;
      --lls-green-900: #0b4f33;
      --lls-green-800: #0d673d;
      --lls-green-700: #129247;
      --lls-green-600: #19a950;
      --lls-green-gradient: linear-gradient(30deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
      --lls-shell: 1220px;
      --lls-section-space: clamp(4rem, 7vw, 6.5rem);
      --lls-card-radius: 22px;
      --lls-shadow-soft: 0 24px 50px rgba(20, 79, 54, 0.12);
      --lls-shadow-card: 0 18px 36px rgba(22, 79, 55, 0.1);
    }

    * {
      box-sizing: border-box;
    }

    *::before,
    *::after {
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
      line-height: 1.5;
    }

    img {
      display: block;
      max-width: 100%;
    }

    a {
      color: inherit;
    }

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
      /* Rectangular as requested */
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

    .lls-button:hover,
    .lls-button:focus-visible {
      transform: translateY(-2px);
      box-shadow: 0 15px 25px rgba(11, 79, 51, 0.2);
      opacity: 0.9;
    }

    .lls-button--outline {
      background: transparent;
      border: 1px solid var(--lls-white);
      color: var(--lls-white);
      box-shadow: none;
      max-width: 300px;
    }

    .lls-button--white {
      background: var(--lls-white);
      color: var(--lls-green-800);
      border: 1px solid var(--lls-white);
      box-shadow: none;
    }

    .lls-button--white:hover {
      background: transparent;
      color: var(--lls-white);
    }

    /* 1. Hero Redesign */
    .lls-hero-new {
      position: relative;
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
      width: 100%;
      overflow: hidden;
    }

    .lls-hero-new__media {
      height: min(100vh, 1070px);
      background: url("img/Master_Plan.webp") center / cover no-repeat;
    }

    .lls-hero-new__overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 2;
      pointer-events: none;
    }

    .lls-hero-new__overlay-inner {
      display: flex;
      justify-content: flex-end;
      padding-top: calc(var(--lls-header-overlay, 122px) + clamp(1rem, 2vw, 1.6rem));
    }

    .lls-hero-new__tagline {
      width: min(100%, 340px);
    }

    .lls-hero-new__tagline img {
      width: 100%;
      height: auto;
      filter: drop-shadow(0 12px 28px rgba(0, 0, 0, 0.28));
    }

    .lls-hero-new__bar {
      background: var(--lls-green-gradient);
      color: var(--lls-white);
      text-align: center;
      padding: clamp(3rem, 5vw, 4.5rem) 0;
      width: 100%;
    }

    .lls-hero-new__bar h1 {
      margin: 0;
      font-size: clamp(1.8rem, 3.2vw, 3rem);
      line-height: 1.12;
      font-weight: 500;
      max-width: 900px;
      margin-inline: auto;
      padding-inline: 1.2rem;
    }

    .lls-hero-new__bar p {
      margin: 1.2rem auto 2rem;
      max-width: 820px;
      opacity: 0.9;
      font-size: clamp(1rem, 1.1vw, 1.1rem);
      padding-inline: 1.2rem;
    }

    /* 2. Safety Section - FLUSH EDITION */
    .lls-safety {
      padding: 0;
      background: #fafcfb;
      width: 100%;
      overflow: hidden;
    }

    .lls-safety__grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: stretch;
      min-height: clamp(500px, 60vh, 800px);
    }

    .lls-safety__content {
      padding: var(--lls-section-space) clamp(2rem, 5vw, 5rem) var(--lls-section-space) clamp(1.5rem, 6vw, 8rem);
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #ffffff;
    }

    .lls-safety__content h2 {
      margin: 0 0 2.5rem;
      font-size: clamp(2.2rem, 3.5vw, 3.4rem);
      line-height: 1.08;
      color: var(--lls-green-800);
      font-weight: 600;
      max-width: 15ch;
    }

    .lls-safety__content h2 {
      margin: 0 0 2.5rem;
      font-size: clamp(2.2rem, 3.5vw, 3.4rem);
      line-height: 1.08;
      color: var(--lls-green-800);
      font-weight: 600;
      max-width: 15ch;
    }

    .lls-safety__list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: grid;
      gap: 2.2rem;
    }

    .lls-safety__item {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 1.2rem;
    }

    .lls-safety__num {
      color: var(--lls-green-600);
      font-size: 2.4rem;
      font-weight: 300;
      line-height: 1;
    }

    .lls-safety__title {
      margin: 0 0 0.4rem;
      font-size: 1.3rem;
      font-weight: 600;
      color: #3e5a4b;
    }

    .lls-safety__copy {
      margin: 0;
      color: var(--lls-copy);
      font-size: 1rem;
      line-height: 1.6;
      max-width: 60ch;
    }

    .lls-safety__media {
      position: relative;
    }

    .lls-safety__media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0;
    }

    /* 3. Intro Bar */
    .lls-intro-bar {
      background: var(--lls-green-gradient);
      color: var(--lls-white);
      text-align: center;
      padding: 3.5rem 1rem;
    }

    .lls-intro-bar h2 {
      margin: 0 0 0.6rem;
      font-size: clamp(1.8rem, 2.8vw, 2.5rem);
      font-weight: 500;
    }

    .lls-intro-bar p {
      margin: 0;
      opacity: 0.88;
      font-size: 1.1rem;
    }

    /* 4. Typologies (Rooms) */
    .lls-typologies {
      padding: clamp(2rem, 4vw, 3rem) 0 var(--lls-section-space);
      text-align: center;
      background: #ffffff;
    }

    .lls-branding {
      margin-bottom: 2rem;
    }

    .lls-branding img {
      width: min(320px, 70%);
      margin-inline: auto;
    }

    .lls-typologies__grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(380px, 520px));
      gap: 4rem 3rem;
      justify-content: center;
      padding-top: 1.5rem;
    }

    .lls-type-card {
      background: #f8f9fa;
      border-radius: 20px;
      overflow: visible;
      display: flex;
      flex-direction: column;
      position: relative;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(0, 0, 0, 0.03);
    }

    .lls-type-card__tag {
      position: absolute;
      top: -1.2rem;
      left: 50%;
      transform: translateX(-50%);
      background: var(--lls-green-800);
      color: var(--lls-white);
      padding: 0.7rem 2.4rem;
      border-radius: 10px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-size: 1.1rem;
      z-index: 10;
      white-space: nowrap;
    }

    .lls-type-card__media {
      background: linear-gradient(to bottom, #509ce9, #ffffff);
      padding: 2.5rem 1rem 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 20px 20px 0 0;
      overflow: hidden;
      height: 380px;
    }

    .lls-type-card__media img {
      width: 100%;
      height: auto;
      max-height: 420px;
      object-fit: cover;
      object-position: center;
    }

    .lls-type-card__img--sm {
      max-height: 300px !important;
      width: auto !important;
    }

    .lls-type-card__body {
      padding: 2.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      background: #f8f9fa;
    }

    .lls-type-card__list {
      margin: 0 0 2.5rem;
      padding: 0;
      list-style: none;
      display: flex;
      flex-direction: column;
      align-items: start;
      gap: 0.8rem;
    }

    .lls-type-card__list li {
      position: relative;
      padding-left: 2rem;
      color: #4a6356;
      font-weight: 500;
      font-size: 1.2rem;
    }

    .lls-type-card__list li::before {
      content: "✓";
      position: absolute;
      left: 0;
      color: #27ae60;
      font-weight: 900;
      font-size: 1.2rem;
    }

    .lls-type-card .lls-button {
      min-width: 160px;
      padding: 0.8rem 2rem;
      background: var(--lls-green-gradient);
      box-shadow: 0 4px 15px rgba(11, 79, 51, 0.2);
    }

    /* 5. Promotional CTA - FLUSH EDITION */
    .lls-promo {
      padding: 0;
      background: var(--lls-green-800);
      width: 100%;
      overflow: hidden;
    }

    .lls-promo__grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: stretch;
      max-width: none;
      margin: 0;
    }

    .lls-promo__content {
      background: var(--lls-green-gradient);
      padding: var(--lls-section-space) clamp(2rem, 5vw, 5rem) var(--lls-section-space) clamp(1.5rem, 6vw, 8rem);
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: var(--lls-white);
    }

    .lls-promo h3 {
      font-size: clamp(1.8rem, 2.8vw, 2.5rem);
      line-height: 1.3;
      font-weight: 400;
      margin: 0 0 2.2rem;
      max-width: 22ch;
    }

    @media (min-width: 2000px) {
      .lls-promo__content .lls-button {
        font-size: 1.3rem;
        padding: 1rem 2.8rem;
        white-space: nowrap;
      }
    }

    .lls-promo h3 strong {
      display: block;
      font-weight: 700;
      font-size: 1.1em;
    }

    .lls-promo__media {
      position: relative;
    }

    .lls-promo__media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0;
    }


    /* 6. Lifestyle / Amenities */
    .lls-lifestyle-new {
      padding: var(--lls-section-space) 0;
      text-align: center;
      background: #ffffff;
    }

    .lls-lifestyle-new__text {
      width: 100%;
      padding: 0 clamp(1rem, 4vw, 4rem);
    }

    .lls-lifestyle-new h2 {
      margin: 0 auto;
      font-size: clamp(2rem, 3.5vw, 3rem);
      color: var(--lls-green-800);
      max-width: 1100px;
      line-height: 1.1;
      font-weight: 700;
      text-wrap: balance;
    }

    .lls-lifestyle-new p {
      margin: 1.5rem auto 4rem;
      max-width: 900px;
      color: var(--lls-copy);
      font-size: 1.15rem;
      line-height: 1.6;
    }

    .lls-lifestyle-new__grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      width: 100%;
    }

    .lls-lifestyle-new__grid img {
      width: 100%;
      height: clamp(300px, 45vw, 700px);
      object-fit: cover;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }


    .lls-calc-header {
      padding: var(--lls-section-space) 0 0;
      background: var(--lls-white);
    }

    .lls-calc-section {
      padding: clamp(2rem, 4vw, 3.5rem) 0 var(--lls-section-space);
      background: #f1f7f4;
    }

    .lls-calc-title {
      text-align: center;
      margin-bottom: clamp(2.5rem, 5vw, 4rem);
      font-size: clamp(2.2rem, 3.5vw, 3.2rem);
      color: var(--lls-green-800);
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
      border-color: var(--lls-green-700);
    }

    .lls-calc-input-wrap span {
      color: var(--lls-green-700);
      font-weight: 700;
      margin-right: 0.4rem;
    }

    .lls-calc-input-wrap input {
      border: 0;
      padding: 1rem 0;
      width: 100%;
      font: inherit;
      color: var(--lls-ink);
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
      border: 3px solid var(--lls-green-700);
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .lls-calc-extra__header {
      background: var(--lls-green-800);
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
      box-shadow: var(--lls-shadow-soft);
      border: 1px solid var(--lls-line);
    }

    .lls-summary-row {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.2rem;
    }

    .lls-summary-label {
      color: var(--lls-copy);
      font-size: 0.94rem;
      font-weight: 600;
    }

    .lls-summary-val {
      font-weight: 700;
      font-size: 1.1rem;
    }

    .lls-summary-val--green {
      color: var(--lls-green-700);
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
      background: var(--lls-green-700);
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
      color: var(--lls-green-800);
      line-height: 1;
      margin-bottom: 1.8rem;
    }

    .lls-summary-foot {
      font-size: 0.85rem;
      color: var(--lls-copy);
      margin-top: 2rem;
      font-style: italic;
    }

    .lls-summary-extra-info {
      background: #f1fbf7;
      border-left: 4px solid var(--lls-green-600);
      padding: 1.2rem;
      margin-top: 1.5rem;
      border-radius: 0 8px 8px 0;
    }

    .lls-summary-extra-info h4 {
      margin: 0 0 0.5rem;
      color: var(--lls-green-800);
      font-size: 1rem;
    }

    .lls-summary-extra-info p {
      margin: 0;
      font-size: 0.95rem;
      line-height: 1.45;
    }

    #map_container {
      width: 100%;


      /* fondo suave */
      display: flex;
      justify-content: center;


    }

    #map_container img {
      width: 100%;


    }

    #map_container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .image_full {
      width: 100%;
    }

    @media (max-width: 960px) {

      .lls-hero-new__overlay-inner {
        justify-content: center;
        padding-top: calc(var(--lls-header-overlay, 122px) + 1rem);
      }

      .lls-hero-new__tagline {
        width: min(78vw, 320px);
      }

      .lls-safety__grid,
      .lls-calc-grid,
      .lls-promo__grid,
      .lls-typologies__grid,
      .lls-lifestyle-new__grid {
        grid-template-columns: 1fr;
      }

      .lls-promo__grid {
        border-radius: 0;
      }

      .lls-promo__content {
        padding: 3rem 1.5rem;
      }

      .lls-safety__grid {
        gap: 2.5rem;
      }
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <main class="lls-page">
    <!-- 1. Hero Content -->
    <section class="lls-hero-new">
      <div class="lls-hero-new__overlay" aria-hidden="true">
        <div class="lls-shell lls-hero-new__overlay-inner">
          <div class="lls-hero-new__tagline">
            <img src="img/Invest_in_Paradise.svg" alt="" loading="eager" decoding="async">
          </div>
        </div>
      </div>
      <div class="lls-hero-new__media" aria-label="Aerial view of Las Lomas Serenas project"></div>
      <div class="lls-hero-new__bar">
        <div class="lls-shell">
          <h1>A private residential destination shaped by climate, calm, and everyday beauty.</h1>
          <p>Las Lomas Serenas is a condominium development in Sosua, Puerto Plata, created for people who want more
            than a property. It is a place designed around warmth, ease, scenery, security, and a more generous rhythm
            of life on the North Coast of the Dominican Republic.</p>
          <a href="tourguiado" class="lls-button lls-button--white">3D TOUR</a>
        </div>
      </div>
    </section>

    <!-- 2. Safety & Well-being - UPDATED STRUCTURE -->
    <section class="lls-safety">
      <div class="lls-safety__grid">
        <div class="lls-safety__content">
          <h2>Where safety and well-being come first</h2>
          <ul class="lls-safety__list" aria-label="Project benefits">
            <li class="lls-safety__item">
              <span class="lls-safety__num">01</span>
              <div>
                <h3 class="lls-safety__title">24-Hour security</h3>
                <p class="lls-safety__copy">Designed for peace of mind, comfort, and a relaxed sense of home.</p>
              </div>
            </li>
            <li class="lls-safety__item">
              <span class="lls-safety__num">02</span>
              <div>
                <h3 class="lls-safety__title">Year-round tropical climate</h3>
                <p class="lls-safety__copy">Temperatures averaging between 75°F and 88°F invite outdoor living every
                  season.</p>
              </div>
            </li>
            <li class="lls-safety__item">
              <span class="lls-safety__num">03</span>
              <div>
                <h3 class="lls-safety__title">North Coast positioning</h3>
                <p class="lls-safety__copy">Beautifully placed in Puerto Plata's vibrant seaside environment, where
                  nature and convenience meet.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="lls-safety__media">
          <img src="img/front-green.webp" alt="Primary entrance of Las Lomas Serenas" loading="lazy">
        </div>
      </div>
    </section>

    <!-- 3. Intro Housing Bar -->
    <section class="lls-intro-bar">
      <div class="lls-shell">
        <h2>Find the perfect home for you and your lifestyle</h2>
        <p>Explore our 3 and 2 bedroom options, thoughtfully designed to match your lifestyle and provide
          comfort, space, and functionality in every detail</p>
      </div>
    </section>

    <!-- 4. Apartment Typologies -->
    <section class="lls-typologies" id="layouts">
      <div class="lls-shell">
        <div class="lls-branding">
          <img src="img/wlogo.svg" alt="Las Lomas Serenas Brand Mark" loading="lazy">
        </div>
        <div class="lls-typologies__grid">
          <article class="lls-type-card">
            <div class="lls-type-card__tag">3 Bedrooms</div>
            <div class="lls-type-card__media">
              <img src="img/3habitaciones.webp" alt="3 Bedroom Apartment Render" loading="lazy"
                class="lls-type-card__img--sm">
            </div>
            <div class="lls-type-card__body">
              <ul class="lls-type-card__list">
                <li>More comfort</li>
                <li>More indoor space</li>
                <li>Ideal for families</li>
                <li>Perfect for getting away</li>
              </ul>
              <a href="3-bedrooms" class="lls-button">See More</a>
            </div>
          </article>

          <article class="lls-type-card">
            <div class="lls-type-card__tag">2 Bedrooms</div>
            <div class="lls-type-card__media">
              <img src="img/2habitaciones.webp" alt="2 Bedroom Apartment Render" loading="lazy"
                class="lls-type-card__img--sm">
            </div>
            <div class="lls-type-card__body">
              <ul class="lls-type-card__list">
                <li>Functional</li>
                <li>Perfect for couples</li>
                <li>Natural environment</li>
                <li>Beautiful ocean view</li>
              </ul>
              <a href="2-bedrooms" class="lls-button">See More</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- 5. Promotional CTA -->
    <section class="lls-promo">
      <div class="lls-promo__grid">
        <div class="lls-promo__content">
          <h3><strong>Homes designed to make</strong> every moment unique, comfortable, and truly yours</h3>
          <a href="/contact-us" class="lls-button lls-button--outline">Request Information</a>
        </div>
        <div class="lls-promo__media">
          <img src="bbq_home.webp" alt="Family sharing a moment on the terrace" loading="lazy">
        </div>
      </div>
    </section>

    <!-- 6. Lifestyle / Amenities -->
    <section class="lls-lifestyle-new" id="lifestyle">
      <div class="lls-lifestyle-new__text">
        <h2>An active, social lifestyle designed around recreation, ease, and community.</h2>
        <p>Las Lomas Serenas is more than a place to own property. It is a place to move, connect, relax, and enjoy the
          rhythm of the North Coast from sports and wellness to family time and beautiful everyday moments.</p>
      </div>
      <div class="">
        <img src="img/sport_home.webp" class="image_full" alt="Project amenities sports court" loading="lazy">

      </div>
    </section>

    <section class="lls-lifestyle-new" style="padding-top:0px" >
      <div class="lls-lifestyle-new__text">
        <h2>The Art of Living Well</h2>
        <p>A perfect moment where laughter, sunshine, and relaxation come together, capturing the balance between joy
          and peace we all seek.</p>
      </div>
      <div class="">
        <img src="img/pool-family.webp" class="image_full" alt="Project amenities sports court" loading="lazy">

      </div>
    </section>


    <div class="lls-calc-header" id="contact" style="padding-top:0px;padding-bottom:70px;">
      <div class="lls-shell">
        <h2 class="lls-calc-title">Loan Calculator</h2>
      </div>
    </div>


    <!-- 7. Redesigned Simulator -->
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
              <div class="lls-summary-val lls-summary-val--green" id="mc-down-label" style="margin-bottom: 0.5rem">
                US$3,000 | 30.00%</div>
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
                    <input type="number" id="mc-extra-amount" value="0" min="0" step="50">
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

    <div class="lls-calc-header">
      <div class="lls-shell">
        <h2 class="lls-calc-title">Strategic Location</h2>
      </div>
    </div>
    <section id="map_container" style="padding-top:60px">
      <img src="img/Mapa.webp" alt="Mapa">
    </section>
  </main>


  <script>
    (function () {
      var priceInput = document.getElementById('mc-price');
      var bank = document.getElementById('mc-bank');
      var down = document.getElementById('mc-down');
      var term = document.getElementById('mc-term');
      var extraAmt = document.getElementById('mc-extra-amount');
      var extraFreq = document.getElementById('mc-extra-freq');
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

      priceInput.addEventListener('input', function () {
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
        var ea = (parseFloat(extraAmt.value) || 0);
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

      [bank, term, extraFreq].forEach(function (el) {
        if (el) el.addEventListener('change', calc);
      });

      [down, extraAmt].forEach(function (el) {
        if (el) el.addEventListener('input', calc);
      });

      var toggle = document.getElementById('mc-extra-toggle');
      var bodyExtra = document.getElementById('mc-extra-body');
      if (toggle) {
        toggle.addEventListener('click', function () {
          var open = bodyExtra.classList.toggle('open');
          toggle.querySelector('span').textContent = open ? '−' : '+';
        });
      }

      priceInput.value = '10,000';
      calc();
    })();
  </script>


  <?php include __DIR__ . '/components/footer.php'; ?>

</body>

</html>
