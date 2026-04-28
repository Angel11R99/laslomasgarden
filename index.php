<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | Home</title>
  <link rel="icon" href="img/shared/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="img/shared/logo-fallback.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preload" href="img/shared/wlogo.svg" as="image" type="image/svg+xml" fetchpriority="high">
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
      overflow-x: clip;
    }

    body {
      margin: 0;
      background: var(--lls-bg);
      color: var(--lls-ink);
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      line-height: 1.5;
      overflow-x: clip;
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
      background: url("img/shared/Master_Plan.webp") center / 100% 100% no-repeat;
      background-color: #f0f0f0;
    }

    .lls-hero-new__overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 2;
      pointer-events: none;
      display: none;
    }

    @media (max-width: 1100px) {
      .lls-hero-new__overlay {
        display: block;
      }
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
      grid-template-columns: 1fr 1fr;
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
      .lls-hero-new__media {
        height: 50vh;
        background-size: cover;
      }

      .lls-hero-new__overlay-inner {
        justify-content: center;
        padding-top: calc(88px + 8.5rem);
      }

      .lls-hero-new__tagline {
        width: min(70vw, 280px);
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

    /* ── Investment / Rental Income Calculator ── */
    /* Investment Calculator — currency selector */
    .ric-currency-wrap {
      margin-bottom: 1.8rem;
    }

    .ric-currency-label {
      font-size: 1.15rem;
      font-weight: 700;
      color: #1a3a28;
      margin: 0 0 0.75rem;
      letter-spacing: 0.01em;
    }

    .ric-currency-sel {
      display: flex;
      gap: 0.7rem;
    }

    .ric-currency-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 52px;
      height: 52px;
      border: 3px solid #c9e0d3;
      border-radius: 50%;
      background: #fff;
      cursor: pointer;
      font-size: 1.9rem;
      line-height: 1;
      padding: 0;
      transition: border-color 0.2s, box-shadow 0.2s, transform 0.15s;
    }

    .ric-currency-btn:hover {
      border-color: var(--lls-green-700);
      transform: scale(1.08);
    }

    .ric-currency-btn.ric-curr-active {
      border-color: var(--lls-green-700);
      box-shadow: 0 0 0 3px rgba(18,146,71,0.25);
      transform: scale(1.1);
    }

    /* Investment Calculator — expense list inside summary card */
    .ric-exp-list {
      margin: 0 0 1.4rem;
      border: 1px solid #e4ede8;
      border-radius: 8px;
      overflow: hidden;
    }

    .ric-exp-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.45rem 0.9rem;
      font-size: 0.88rem;
      color: var(--lls-copy);
      border-bottom: 1px solid #edf4f0;
    }

    .ric-exp-row:last-child { border-bottom: none; }

    .ric-exp-total {
      background: #f6faf8;
      font-weight: 700;
      color: var(--lls-ink);
    }

    .ric-red { color: #c0392b; font-weight: 600; }

    .ric-breakeven {
      background: #f1fbf7;
      border-left: 4px solid var(--lls-green-600);
      border-radius: 0 8px 8px 0;
      padding: 1rem 1rem 0.8rem;
      margin-top: 1.5rem;
    }

    .ric-breakeven__title {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--lls-green-800);
      margin-bottom: 0.6rem;
    }

    .ric-breakeven__row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.88rem;
      color: var(--lls-copy);
      padding: 0.2rem 0;
    }

    .ric-breakeven__row strong { color: #b7770d; }

    .ric-breakeven__row.ric-annual strong { color: var(--lls-green-700); }

    /* Net value color states */
    .lls-summary-monthly-val.ric-pos { color: var(--lls-green-800); }
    .lls-summary-monthly-val.ric-neg { color: #c0392b; }
    .lls-summary-monthly-val.ric-neutral { color: var(--lls-copy); }

    @media (max-width: 960px) {
      .ric-exp-list { margin-bottom: 1rem; }
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <main class="lls-page">
    <!-- 1. Hero Content -->
    <section class="lls-hero-new">
      <div class="lls-hero-new__media" aria-label="Aerial view of Las Lomas Serenas project"></div>
      <div class="lls-hero-new__overlay" aria-hidden="true">
        <div class="lls-hero-new__overlay-inner">
          <div class="lls-hero-new__tagline">
            <img src="img/home/Invest_in_Paradise.svg" alt="Invest in Paradise" loading="eager" decoding="async">
          </div>
        </div>
      </div>
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
          <img src="img/home/front-green.webp" alt="Primary entrance of Las Lomas Serenas" loading="lazy">
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
          <img src="img/shared/wlogo.svg" alt="Las Lomas Serenas Brand Mark" loading="lazy">
        </div>
        <div class="lls-typologies__grid">
          <article class="lls-type-card">
            <div class="lls-type-card__tag">3 Bedrooms</div>
            <div class="lls-type-card__media">
              <img src="img/home/3habitaciones.webp" alt="3 Bedroom Apartment Render" loading="lazy"
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
              <img src="img/home/2habitaciones.webp" alt="2 Bedroom Apartment Render" loading="lazy"
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
        <img src="img/home/sport_home.webp" class="image_full" alt="Project amenities sports court" loading="lazy">

      </div>
    </section>

    <section class="lls-lifestyle-new" style="padding-top:0px" >
      <div class="lls-lifestyle-new__text">
        <h2>The Art of Living Well</h2>
        <p>A perfect moment where laughter, sunshine, and relaxation come together, capturing the balance between joy
          and peace we all seek.</p>
      </div>
      <div class="">
        <img src="img/shared/pool-family.webp" class="image_full" alt="Project amenities sports court" loading="lazy">

      </div>
    </section>

    <!-- Investment / Rental Income Calculator -->
    <div class="lls-calc-header">
      <div class="lls-shell">
        <h2 class="lls-calc-title">Investment Calculator<br><span style="font-size:0.58em; font-weight:500; letter-spacing:0.03em; color:var(--lls-copy);">Rental Income Estimator</span></h2>
      </div>
    </div>

    <section class="lls-calc-section">
      <div class="lls-shell">
        <div class="lls-calc-grid">

          <!-- Left: Inputs -->
          <div class="lls-calc-form">

            <!-- Currency selector -->
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
              <label><span data-i18n="labelMortgage">Monthly Mortgage Payment</span> <span style="font-weight:400; font-size:0.85em; color:var(--lls-copy);" data-i18n="labelMortgageOpt">(optional)</span></label>
              <div class="lls-calc-input-wrap">
                <span id="ric-sym-mortgage">US$</span>
                <input type="number" id="ric-mortgage" value="0.00" min="0" step="0.01">
              </div>
            </div>

            <p data-i18n="disclaimer" style="font-size:0.75rem; color:var(--lls-copy); font-style:italic; line-height:1.5; margin-top:1rem;">&#9888; All figures are estimates based on market assumptions. Actual results may vary depending on occupancy, pricing, operating costs, taxes, and other factors.</p>
          </div>

          <!-- Right: Summary card -->
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
            <p id="ric-net-status" style="font-size:1.1rem; font-weight:700; font-style:italic; text-align:center; margin: -0.4rem 0 1.4rem; color:var(--lls-green-600);"></p>

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
              <div class="ric-breakeven__row ric-annual" style="border-top:1px solid #d4e8dd; margin-top:0.5rem; padding-top:0.5rem;">
                <span data-i18n="netAnnual">Net Annual Income (est.)</span>
                <strong id="ric-net-annual">—</strong>
              </div>
            </div>

            <p class="lls-summary-foot" data-i18n="footNote">* These amounts are estimates and are subject to change without notice.</p>
          </aside>

        </div>
      </div>
    </section>

  </main>

  <script>
    (function () {
      var currency = 'USD';
      var lang     = 'en';
      var RATE_DOP = 59;

      var T = {
        en: {
          chooseCurrency:         'Choose your currency',
          rentalInfo:             'Enter your rental information',
          labelPrice:             'Rental Price per Night',
          labelNights:            'Nights Rented per Month',
          labelMortgage:          'Monthly Mortgage Payment',
          labelMortgageOpt:       '(optional)',
          disclaimer:             '⚠ All figures are estimates based on market assumptions. Actual results may vary depending on occupancy, pricing, operating costs, taxes, and other factors.',
          occupancy:              'Occupancy Rate',
          grossIncome:            'Gross Monthly Income',
          hoaLabel:               'HOA (fixed)',
          utilitiesLabel:         'Utilities (est.)',
          cleaningLabel:          'Cleaning (est.)',
          platformLabel:          'Other / Platform (5%)',
          totalExpenses:          'Total Monthly Expenses',
          netMonthly:             'Your estimated net monthly income:',
          btnRequest:             'REQUEST INFORMATION',
          breakEvenTitle:         'Break-Even Analysis',
          minNights:              'Min. Nights to Break Even',
          minRate:                'Min. Nightly Rate',
          netAnnual:              'Net Annual Income (est.)',
          footNote:               '* These amounts are estimates and are subject to change without notice.',
          nightsSuffix:           'nights',
          statusProfit:           'Your property pays for itself and generates profit.',
          statusProfitNoMortgage: 'This rental generates profit every month.',
          statusLoss:             'Monthly expenses exceed rental income.',
        },
        es: {
          chooseCurrency:         'Elige tu divisa',
          rentalInfo:             'Ingresa tu información de renta',
          labelPrice:             'Precio por noche',
          labelNights:            'Noches rentadas por mes',
          labelMortgage:          'Pago mensual de hipoteca',
          labelMortgageOpt:       '(opcional)',
          disclaimer:             '⚠ Todas las cifras son estimaciones basadas en supuestos del mercado. Los resultados reales pueden variar según ocupación, precios, costos operativos, impuestos y otros factores.',
          occupancy:              'Tasa de ocupación',
          grossIncome:            'Ingreso bruto mensual',
          hoaLabel:               'HOA (fijo)',
          utilitiesLabel:         'Servicios (est.)',
          cleaningLabel:          'Limpieza (est.)',
          platformLabel:          'Otro / Plataforma (5%)',
          totalExpenses:          'Gastos mensuales totales',
          netMonthly:             'Tu ingreso neto mensual estimado:',
          btnRequest:             'SOLICITAR INFORMACIÓN',
          breakEvenTitle:         'Análisis de Punto de Equilibrio',
          minNights:              'Noches mín. para equilibrar',
          minRate:                'Tarifa mínima por noche',
          netAnnual:              'Ingreso neto anual (est.)',
          footNote:               '* Estas cifras son estimaciones y están sujetas a cambios sin previo aviso.',
          nightsSuffix:           'noches',
          statusProfit:           'Tu propiedad se paga sola y genera ganancias.',
          statusProfitNoMortgage: 'Esta renta genera ganancias cada mes.',
          statusLoss:             'Los gastos superan el ingreso por renta.',
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

      var HOA             = 200;
      var UTILS_AT_14     = 120;
      var UTILS_BASE_N    = 14;
      var CLEAN_PER_STAY  = 50;
      var NIGHTS_PER_STAY = 3.5;
      var PLATFORM_PCT    = 0.05;
      var DAYS_MONTH      = 30;

      function xRate()  { return currency === 'DOP' ? RATE_DOP : 1; }
      function symbol() { return currency === 'DOP' ? 'RD$' : 'US$'; }

      function fmt(usdVal) {
        var display = usdVal * xRate();
        return symbol() + Math.abs(display).toLocaleString('en-US', {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2
        });
      }

      function inputUSD(el) { return (parseFloat(el.value.replace(/,/g, '')) || 0) / xRate(); }

      function setLang(l) {
        lang = l;
        var t = T[l];
        document.querySelectorAll('[data-i18n]').forEach(function (el) {
          var key = el.getAttribute('data-i18n');
          if (t[key] !== undefined) el.textContent = t[key];
        });
      }

      function calc() {
        var t        = T[lang];
        var price    = inputUSD(priceEl);
        var nights   = parseFloat(nightsEl.value) || 0;
        var mortgage = inputUSD(mortgageEl);

        var occ   = nights / DAYS_MONTH;
        var gross = price * nights;

        var utils  = (UTILS_AT_14 / UTILS_BASE_N) * nights;
        var clean  = (CLEAN_PER_STAY / NIGHTS_PER_STAY) * nights;
        var other  = PLATFORM_PCT * price * nights;
        var opExp  = HOA + utils + clean + other;
        var totExp = mortgage + opExp;

        var net       = gross - totExp;
        var netAnnual = net * 12;

        var utilsPN  = UTILS_AT_14 / UTILS_BASE_N;
        var cleanPN  = CLEAN_PER_STAY / NIGHTS_PER_STAY;
        var otherPN  = PLATFORM_PCT * price;
        var netPerN  = price - utilsPN - cleanPN - otherPN;
        var fixedExp = mortgage + HOA;
        var beNights = netPerN > 0 ? Math.ceil(fixedExp / netPerN) : Infinity;
        var beRate   = nights > 0 ? totExp / (nights * (1 - PLATFORM_PCT)) : 0;

        var dash = '—';

        if (price <= 0 || nights <= 0) {
          document.getElementById('ric-occ').textContent        = dash;
          document.getElementById('ric-gross').textContent      = dash;
          document.getElementById('ric-hoa').textContent        = fmt(HOA);
          document.getElementById('ric-utils').textContent      = dash;
          document.getElementById('ric-clean').textContent      = dash;
          document.getElementById('ric-other').textContent      = dash;
          document.getElementById('ric-total-exp').textContent  = dash;
          document.getElementById('ric-bar').style.width        = '0%';
          document.getElementById('ric-net').textContent        = dash;
          document.getElementById('ric-net').className          = 'lls-summary-monthly-val ric-neutral';
          document.getElementById('ric-net-status').textContent = '';
          document.getElementById('ric-net-annual').textContent = dash;
          document.getElementById('ric-be-nights').textContent  = dash;
          document.getElementById('ric-be-rate').textContent    = dash;
          return;
        }

        document.getElementById('ric-occ').textContent       = (occ * 100).toFixed(1) + '%';
        document.getElementById('ric-gross').textContent     = fmt(gross);
        document.getElementById('ric-hoa').textContent       = fmt(HOA);
        document.getElementById('ric-utils').textContent     = fmt(utils);
        document.getElementById('ric-clean').textContent     = fmt(clean);
        document.getElementById('ric-other').textContent     = fmt(other);
        document.getElementById('ric-total-exp').textContent = fmt(totExp);

        var barPct = gross > 0 ? Math.min(100, (gross / (totExp || 1)) * 100) : 0;
        document.getElementById('ric-bar').style.width = barPct + '%';

        var netEl    = document.getElementById('ric-net');
        var statusEl = document.getElementById('ric-net-status');
        netEl.textContent = fmt(net);
        if (net > 0) {
          netEl.className      = 'lls-summary-monthly-val ric-pos';
          statusEl.textContent = mortgage > 0 ? t.statusProfit : t.statusProfitNoMortgage;
          statusEl.style.color = 'var(--lls-green-600)';
        } else if (net < 0) {
          netEl.className      = 'lls-summary-monthly-val ric-neg';
          statusEl.textContent = t.statusLoss;
          statusEl.style.color = '#c0392b';
        } else {
          netEl.className      = 'lls-summary-monthly-val ric-neutral';
          statusEl.textContent = '';
        }

        document.getElementById('ric-net-annual').textContent = fmt(netAnnual);
        document.getElementById('ric-be-nights').textContent  =
          isFinite(beNights) ? beNights + ' ' + t.nightsSuffix : '—';
        document.getElementById('ric-be-rate').textContent    = fmt(beRate);
      }

      window.ricSetCurrency = function (cur) {
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
