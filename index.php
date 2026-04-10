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
      --lls-lifestyle-content: 86%;
      --lls-font-sizes: clamp(1.7rem, 2.72vw, 3.4rem);
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
      line-height: 1.45;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .lls-container {
      width: min(var(--lls-lifestyle-content), calc(100% - 2.6rem));
      margin-inline: auto;
      max-width: 100%;
    }

    .lls-hero {
      position: relative;
      margin-top: calc(-1 * var(--lls-header-overlay, 122px));
      padding-top: var(--lls-header-overlay, 122px);
      min-height: 1150px;
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
      padding: 4.9rem 0 5.5rem;
      width: 100%;
    }

    .lls-amenities-shell {
      display: grid;
      grid-template-columns: minmax(360px, 47vw) minmax(0, 1fr);
      align-items: stretch;
      gap: 0;
      width: 100%;
      max-width: 100%;
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
      font-size: var(--lls-font-sizes);
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
      max-width: 100%;
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
      font-size: var(--lls-font-sizes);
      line-height: 1.08;
      font-weight: 500;
      letter-spacing: 0.01em;
      max-width: 25.6ch;
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
      overflow: hidden;
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
      margin-top: 7rem;
      margin-bottom: 5rem;
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
      gap: 3rem;
    }

    .lls-lifestyle-grid img {
      width: 100%;
      border-radius: 6px;
      box-shadow: 0 13px 24px rgba(23, 50, 52, 0.16);
      object-fit: cover;
      height: clamp(340px, 32vw, 460px);
    }

    .lls-brand {
      text-align: center;
      margin-top: 5rem;
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
      font-weight: lighter;
    }

    .lls-brand-image {
      width: min(900px, 100%);
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

    /* ── Mortgage Calculator ── */
    .lls-mortgage {
      padding: 5rem 0 5.5rem;
      background: #f2faf5;
    }

    .lls-mortgage-inner {
      width: min(1260px, calc(100% - 3rem));
      margin-inline: auto;
    }

    .lls-mortgage-title {
      font-size: clamp(1.1rem, 1.55vw, 1.5rem);
      font-weight: 600;
      color: #1a3a28;
      margin: 0 0 1rem;
      white-space: normal;
      text-wrap: balance;
    }

    .lls-mortgage-price-field {
      display: flex;
      align-items: center;
      border: 2px solid #19a950;
      border-radius: 8px;
      padding: 0.9rem 1.2rem;
      background: #fff;
      margin-bottom: 0;
      gap: 0.5rem;
    }

    .lls-mortgage-price-field span {
      color: #19a950;
      font-weight: 700;
      font-size: 1.15rem;
      white-space: nowrap;
    }

    .lls-mortgage-price-field input {
      border: none;
      outline: none;
      font-family: inherit;
      font-size: 1.15rem;
      color: #1a3a28;
      background: transparent;
      width: 100%;
      min-width: 0;
    }

    .lls-mortgage-body {
      display: grid;
      grid-template-columns: 1.25fr 1fr;
      gap: 4rem;
      align-items: start;
    }

    .lls-mortgage-controls {
      display: flex;
      flex-direction: column;
      gap: 1.8rem;
    }

    .lls-mortgage-field label {
      display: block;
      font-size: 1rem;
      font-weight: 600;
      color: #2d4a39;
      margin-bottom: 0.55rem;
    }

    .lls-mortgage-field select {
      width: 100%;
      padding: 0.8rem 2.6rem 0.8rem 1rem;
      border: 2px solid #b5d9c4;
      border-radius: 8px;
      background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='7' viewBox='0 0 12 7'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2319a950' stroke-width='1.6' fill='none' stroke-linecap='round'/%3E%3C/svg%3E") right 1rem center no-repeat;
      appearance: none;
      font-family: inherit;
      font-size: 1.05rem;
      color: #1a3a28;
      cursor: pointer;
    }

    .lls-mortgage-field select:focus {
      outline: none;
      border-color: #19a950;
    }

    .lls-downpayment-value {
      color: #19a950;
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.65rem;
    }

    .lls-mortgage-slider {
      -webkit-appearance: none;
      appearance: none;
      width: 100%;
      height: 7px;
      border-radius: 4px;
      background: #b5d9c4;
      outline: none;
      cursor: pointer;
    }

    .lls-mortgage-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #fff;
      border: 3px solid #19a950;
      box-shadow: 0 3px 8px rgba(25,169,80,0.3);
      cursor: pointer;
    }

    .lls-mortgage-slider::-moz-range-thumb {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #fff;
      border: 3px solid #19a950;
      box-shadow: 0 3px 8px rgba(25,169,80,0.3);
      cursor: pointer;
    }

    .lls-mortgage-results {
      background: #fff;
      border: 2px solid #c2e0cc;
      border-radius: 14px;
      padding: 2.8rem 2.8rem 2.2rem;
      box-shadow: 0 10px 28px rgba(15, 80, 50, 0.09);
      min-width: 0;
    }

    .lls-mortgage-split {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.6rem;
      margin-bottom: 1.2rem;
      align-items: start;
    }

    .lls-mortgage-split-label {
      font-size: 1.05rem;
      font-weight: 600;
      color: #4a6a58;
      margin-bottom: 0.4rem;
    }

    .lls-mortgage-split-value {
      font-size: clamp(1.05rem, 1.4vw, 1.35rem);
      font-weight: 700;
      white-space: normal;
      overflow-wrap: anywhere;
      word-break: break-word;
    }

    .lls-mortgage-split-value.green { color: #0d8f53; }
    .lls-mortgage-split-value.dark  { color: #1a3a28; }

    .lls-mortgage-bar {
      height: 10px;
      border-radius: 5px;
      background: #c8ddd0;
      margin-bottom: 1.8rem;
      overflow: hidden;
    }

    .lls-mortgage-bar-fill {
      height: 100%;
      background: #19a950;
      border-radius: 5px;
      transition: width 0.3s ease;
    }

    .lls-mortgage-monthly-label {
      font-size: 1.1rem;
      font-weight: 600;
      color: #4a6a58;
      margin-bottom: 0.5rem;
    }

    .lls-mortgage-monthly-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .lls-mortgage-monthly-amount {
      font-size: clamp(2.2rem, 3.6vw, 3.2rem);
      font-weight: 700;
      color: #0d8f53;
      letter-spacing: -0.01em;
      min-width: 0;
      max-width: 100%;
      flex: 1 1 320px;
      line-height: 1.08;
      overflow-wrap: anywhere;
      word-break: break-word;
    }

    .lls-mortgage-precalify {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 1rem 1.9rem;
      border-radius: 50px;
      background: var(--lls-green-background);
      color: #fff;
      font-family: inherit;
      font-size: 1.05rem;
      font-weight: 700;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      border: none;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 6px 16px rgba(13,105,88,0.3);
      transition: opacity 0.2s;
      white-space: nowrap;
      flex: 0 0 auto;
      max-width: 100%;
    }

    .lls-mortgage-precalify:hover { opacity: 0.88; }

    .lls-mortgage-disclaimer {
      margin-top: 1rem;
      font-size: 0.85rem;
      color: #8aab98;
    }

    .lls-mortgage-extra-header {
      background: #0d8f53;
      color: #fff;
      font-weight: 700;
      font-size: 0.95rem;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 0.75rem 1.1rem;
      border-radius: 8px;
      margin-top: 0.4rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      user-select: none;
    }

    .lls-mortgage-extra-header::after {
      content: '+';
      font-size: 1.4rem;
      font-weight: 400;
      line-height: 1;
      transition: transform 0.25s ease;
    }

    .lls-mortgage-extra-header.open::after {
      transform: rotate(45deg);
    }

    .lls-mortgage-extra-body {
      display: none;
      flex-direction: column;
      gap: 1.8rem;
      overflow: hidden;
    }

    .lls-mortgage-extra-body.open {
      display: flex;
    }

    .lls-mortgage-extra-summary {
      border: 2px solid #c2e0cc;
      border-radius: 10px;
      overflow: hidden;
    }

    .lls-mes-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.75rem 1.1rem;
      font-size: 1rem;
      color: #2d4a39;
      border-bottom: 1px solid #e0f0e8;
    }

    .lls-mes-row:last-child { border-bottom: none; }

    .lls-mes-row span:last-child {
      font-weight: 700;
      color: #0d8f53;
    }

    .lls-mortgage-with-extra { margin-top: 1.4rem; }

    .lls-mwe-divider {
      height: 2px;
      background: #c2e0cc;
      margin-bottom: 1.1rem;
    }

    .lls-mwe-amount {
      font-size: clamp(1.7rem, 2.7vw, 2.4rem) !important;
      color: #0d8f53 !important;
      margin-bottom: 0.5rem;
    }

    .lls-mwe-savings {
      font-size: 1.1rem;
      color: #0d8f53;
      font-weight: 600;
      line-height: 1.5;
    }

    .lls-mwe-interest-saved {
      font-size: 1.35rem;
      color: #0b6e40;
      font-weight: 700;
      margin-top: 0.6rem;
      padding: 0.85rem 1.1rem;
      background: #e8f8ee;
      border-left: 4px solid #19a950;
      border-radius: 0 6px 6px 0;
      line-height: 1.5;
      overflow-wrap: anywhere;
      word-break: break-word;
    }

    @media (max-width: 760px) {
      .lls-mortgage {
        padding: 3.6rem 0 4rem;
      }

      .lls-mortgage-inner {
        width: calc(100% - 2rem);
      }

      .lls-mortgage-body {
        grid-template-columns: 1fr;
        gap: 1.6rem;
      }

      .lls-mortgage-controls {
        gap: 1.25rem;
      }

      .lls-mortgage-results {
        padding: 1.5rem 1.2rem 1.35rem;
      }

      .lls-mortgage-split {
        grid-template-columns: 1fr;
        gap: 0.95rem;
      }

      .lls-mortgage-monthly-row {
        flex-direction: column;
        align-items: stretch;
      }

      .lls-mortgage-precalify {
        width: 100%;
        padding: 0.95rem 1.25rem;
      }

      .lls-mortgage-monthly-amount {
        font-size: clamp(1.95rem, 9vw, 2.7rem);
      }

      .lls-mes-row {
        gap: 0.6rem;
        align-items: flex-start;
      }

      .lls-mwe-interest-saved {
        font-size: 1.05rem;
      }
    }

    @media (max-width: 768px) {
      :root {
        --lls-mobile-shell: calc(100% - 2rem);
      }

      .lls-hero-content,
      .lls-container,
      .lls-layouts .lls-container,
      .lls-amenities-shell,
      .lls-lifestyle,
      .lls-mortgage-inner,
      .lls-amenities-shell,
      .lls-copy,
      .lls-layouts article,
      .lls-layout-image,
      .lls-lifestyle-grid,
      .lls-brand-image,
      .lls-mortgage-controls,
      .lls-mortgage-results,
      .lls-mortgage-split > div {
        min-width: 0;
        max-width: 100%;
      }

      .lls-hero-content,
      .lls-container,
      .lls-layouts .lls-container,
      .lls-amenities-shell,
      .lls-lifestyle,
      .lls-mortgage-inner {
        width: var(--lls-mobile-shell);
        margin-inline: auto;
      }

      .lls-amenities {
        padding: 3.2rem 0 3.6rem;
      }

      .lls-copy,
      .lls-layouts article {
        padding-left: 10%;
        padding-right: 10%;
      }

      .lls-lifestyle {
        padding-top: 2.4rem;
        padding-bottom: 2.4rem;
      }

      .lls-lifestyle h3 {
        margin-top: 0;
        margin-bottom: 1.6rem;
      }

      .lls-lifestyle p {
        margin-bottom: 1.4rem;
      }

      .lls-benefit-item > div,
      .lls-layout-list li > div {
        min-width: 0;
      }

      .lls-intro h2,
      .lls-copy h3,
      .lls-layouts h3,
      .lls-lifestyle h3,
      .lls-mortgage-title,
      .lls-mortgage-split-value,
      .lls-mwe-interest-saved {
        overflow-wrap: anywhere;
      }

      .lls-mortgage-split-value {
        white-space: normal;
      }
    }

    @media (max-width: 640px) {
      html,
      body {
        width: 100%;
        max-width: 100%;
      }

      body > * {
        max-width: 100%;
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

      .lls-amenities-shell,
      .lls-layouts .lls-grid-main,
      .lls-lifestyle-grid,
      .lls-mortgage-body {
        width: 100%;
        max-width: 100%;
      }

      .lls-layout-image,
      .lls-image-main,
      .lls-brand-image {
        width: 100%;
        max-width: 100%;
      }

      .lls-mortgage-title {
        font-size: 1.1rem;
      }

      .lls-mortgage-price-field {
        padding: 0.9rem 1.1rem;
      }

      .lls-mortgage-price-field span,
      .lls-mortgage-price-field input,
      .lls-mortgage-field select {
        font-size: 1rem;
      }

      .lls-mortgage-field select {
        padding: 0.9rem 2.8rem 0.9rem 1rem;
      }

      .lls-mortgage-controls {
        padding-inline: 0.2rem;
      }

      .lls-mortgage-extra-header {
        padding: 0.8rem 0.95rem;
        font-size: 0.88rem;
        letter-spacing: 0.04em;
      }

      .lls-mes-row {
        flex-direction: column;
      }

      .lls-mortgage-disclaimer {
        font-size: 0.8rem;
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
      <img src="img/pool-family.webp" alt="Family pool and relaxation lifestyle" loading="lazy" decoding="async">
    </div>
  </section>

  <!-- Mortgage Calculator -->
  <section class="lls-mortgage" id="calculator">
    <div class="lls-mortgage-inner">
      <div class="lls-mortgage-body">
        <div class="lls-mortgage-controls">
          <p class="lls-mortgage-title">What is the price of the property you want to buy?</p>

          <div class="lls-mortgage-price-field">
            <span>US$</span>
            <input type="text" id="mc-price" value="" inputmode="numeric" placeholder="100,000" autocomplete="off" aria-label="Property price">
          </div>
          <div class="lls-mortgage-field">
            <label for="mc-bank">Select bank</label>
            <select id="mc-bank">
              <option value="12.95">Asociación Cibao (12.95% Annual)</option>
              <option value="12.00">Banreservas (12.00% Annual)</option>
              <option value="13.00">BHD León (13.00% Annual)</option>
              <option value="13.50">Banco Popular (13.50% Annual)</option>
              <option value="11.50">Scotiabank (11.50% Annual)</option>
            </select>
          </div>

          <div class="lls-mortgage-field">
            <label>Down payment</label>
            <div class="lls-downpayment-value" id="mc-down-label">—</div>
            <input type="range" class="lls-mortgage-slider" id="mc-down" min="10" max="80" value="30" step="1" aria-label="Down payment percentage">
          </div>

          <div class="lls-mortgage-field">
            <label for="mc-term">Loan term</label>
            <select id="mc-term">
              <option value="10">10 years</option>
              <option value="15">15 years</option>
              <option value="20" selected>20 years</option>
              <option value="25">25 years</option>
              <option value="30">30 years</option>
            </select>
          </div>

          <!-- Extra Payment -->
          <div class="lls-mortgage-extra-header" id="mc-extra-toggle">Extra Payment Scenario</div>
          <div class="lls-mortgage-extra-body" id="mc-extra-body">
            <div class="lls-mortgage-field">
              <label for="mc-extra-amount">Extra Payment Amount</label>
              <div class="lls-mortgage-price-field" style="margin-bottom:0">
                <span>US$</span>
                <input type="number" id="mc-extra-amount" value="0" min="0" step="50" aria-label="Extra payment amount">
              </div>
            </div>
            <div class="lls-mortgage-field">
              <label for="mc-extra-freq">Frequency</label>
              <select id="mc-extra-freq">
                <option value="12">Monthly</option>
                <option value="4">Quarterly</option>
                <option value="2" selected>Semiannual</option>
                <option value="1">Annual</option>
              </select>
            </div>
            <div class="lls-mortgage-extra-summary" id="mc-extra-summary">
              <div class="lls-mes-row"><span>Extra Payments per Year</span><span id="mc-xpy">2</span></div>
              <div class="lls-mes-row"><span>Annual Extra Amount</span><span id="mc-xannual">US$0</span></div>
              <div class="lls-mes-row"><span>Monthly Equivalent Extra</span><span id="mc-xmonthly">US$0.00</span></div>
            </div>
          </div>
        </div>

        <div class="lls-mortgage-results" id="mc-results-panel" style="display:none">
          <div class="lls-mortgage-split">
            <div>
              <div class="lls-mortgage-split-label">Down payment</div>
              <div class="lls-mortgage-split-value green" id="mc-res-down"></div>
            </div>
            <div>
              <div class="lls-mortgage-split-label">Loan amount</div>
              <div class="lls-mortgage-split-value dark" id="mc-res-loan"></div>
            </div>
          </div>

          <div class="lls-mortgage-bar">
            <div class="lls-mortgage-bar-fill" id="mc-bar" style="width:0%"></div>
          </div>

          <div class="lls-mortgage-monthly-label">Your estimated monthly payment:</div>
          <div class="lls-mortgage-monthly-row">
            <div class="lls-mortgage-monthly-amount" id="mc-monthly"></div>
            <a class="lls-mortgage-precalify" href="#contact">Pre-Qualify</a>
          </div>

          <div class="lls-mortgage-with-extra" id="mc-extra-block" style="display:none">
            <div class="lls-mwe-divider"></div>
            <div class="lls-mortgage-monthly-label">With extra payments — effective monthly total:</div>
            <div class="lls-mortgage-monthly-amount lls-mwe-amount" id="mc-monthly-extra">US$936</div>
            <div class="lls-mwe-savings" id="mc-savings"></div>
            <div class="lls-mwe-interest-saved" id="mc-interest-saved"></div>
          </div>

          <p class="lls-mortgage-disclaimer">* These amounts are estimates and are subject to change without notice.</p>
        </div>
      </div>
    </div>
  </section>

  <script>
  (function() {
    var priceInput = document.getElementById('mc-price');
    var price      = { get value() { return priceInput.value.replace(/,/g, ''); } };

    // Format price input with commas as the user types
    priceInput.addEventListener('input', function() {
      var raw    = this.value.replace(/[^0-9]/g, '');
      var cursor = this.selectionStart;
      var prev   = this.value.length;
      if (raw === '') { this.value = ''; return; }
      var num    = parseInt(raw, 10);
      this.value = num.toLocaleString('en-US');
      // Adjust cursor position after comma insertion
      var diff = this.value.length - prev;
      this.setSelectionRange(cursor + diff, cursor + diff);
    });
    var bank       = document.getElementById('mc-bank');
    var down       = document.getElementById('mc-down');
    var term       = document.getElementById('mc-term');
    var extraAmt   = document.getElementById('mc-extra-amount');
    var extraFreq  = document.getElementById('mc-extra-freq');

    var downLbl    = document.getElementById('mc-down-label');
    var resDown    = document.getElementById('mc-res-down');
    var resLoan    = document.getElementById('mc-res-loan');
    var bar        = document.getElementById('mc-bar');
    var monthly    = document.getElementById('mc-monthly');
    var xpy        = document.getElementById('mc-xpy');
    var xannual    = document.getElementById('mc-xannual');
    var xmonthly   = document.getElementById('mc-xmonthly');
    var extraBlock = document.getElementById('mc-extra-block');
    var monthlyExtra = document.getElementById('mc-monthly-extra');
    var savings       = document.getElementById('mc-savings');
    var interestSaved = document.getElementById('mc-interest-saved');
    var resultsPanel  = document.getElementById('mc-results-panel');

    function fmt(n) {
      return 'US$' + Math.round(n).toLocaleString('en-US');
    }
    function fmt2(n) {
      return 'US$' + n.toLocaleString('en-US', {minimumFractionDigits:2, maximumFractionDigits:2});
    }

    function amortMonths(principal, monthlyRate, months) {
      if (principal <= 0 || months <= 0) return 0;
      if (monthlyRate === 0) return months;
      var bal = principal, m = 0;
      while (bal > 0.01 && m < months * 2) {
        bal = bal * (1 + monthlyRate) - (arguments[3] || 0);
        m++;
      }
      return m;
    }

    function calc() {
      var p   = parseFloat(price.value) || 0;
      var dp  = parseFloat(down.value) / 100;
      var r   = parseFloat(bank.value) / 100 / 12;
      var n   = parseInt(term.value) * 12;
      var ea  = parseFloat(extraAmt.value) || 0;
      var ef  = parseInt(extraFreq.value);

      // Hide everything until the user enters a price
      if (p <= 0) {
        resultsPanel.style.display = 'none';
        downLbl.textContent = '—';
        return;
      }
      resultsPanel.style.display = '';

      var downAmt  = p * dp;
      var loanAmt  = p - downAmt;
      var pct      = (dp * 100).toFixed(2);
      var loanPct  = (100 - dp * 100).toFixed(0);

      downLbl.textContent = fmt(downAmt) + ' | ' + pct + '%';
      resDown.textContent = fmt(downAmt) + ' | ' + pct + '%';
      resLoan.textContent = fmt(loanAmt) + ' | ' + loanPct + '%';
      bar.style.width     = (dp * 100) + '%';

      var m = 0;
      if (loanAmt > 0 && r > 0 && n > 0) {
        m = loanAmt * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
      }
      monthly.textContent = fmt(m);

      // Extra payment summary
      var annualExtra   = ea * ef;
      var monthlyEquiv  = annualExtra / 12;
      xpy.textContent      = ef;
      xannual.textContent  = fmt(annualExtra);
      xmonthly.textContent = fmt2(monthlyEquiv);

      if (ea > 0 && m > 0) {
        extraBlock.style.display = '';
        var effectiveMonthly = m + monthlyEquiv;
        monthlyExtra.textContent = fmt2(effectiveMonthly);

        // Simulate standard amortization (total interest without extra)
        var stdMonths = 0, stdInterest = 0, balStd = loanAmt;
        while (balStd > 0.01 && stdMonths < n * 2) {
          var intCharge = balStd * r;
          stdInterest += intCharge;
          balStd = balStd + intCharge - m;
          stdMonths++;
        }

        // Simulate amortization with extra payments
        var newMonths = 0, newInterest = 0, balExtra = loanAmt;
        while (balExtra > 0.01 && newMonths < n * 2) {
          var intChargeX = balExtra * r;
          newInterest += intChargeX;
          balExtra = balExtra + intChargeX - effectiveMonthly;
          newMonths++;
        }

        var monthsSaved   = Math.max(0, stdMonths - newMonths);
        var yearsSaved    = Math.floor(monthsSaved / 12);
        var remMonths     = monthsSaved % 12;
        var interestDiff  = Math.max(0, stdInterest - newInterest);

        var savingsTxt = '';
        if (yearsSaved > 0 || remMonths > 0) {
          var timeParts = '';
          if (yearsSaved > 0) timeParts += yearsSaved + ' year' + (yearsSaved > 1 ? 's' : '');
          if (yearsSaved > 0 && remMonths > 0) timeParts += ' and ';
          if (remMonths > 0) timeParts += remMonths + ' month' + (remMonths > 1 ? 's' : '');
          savingsTxt = 'You\'ll own your home ' + timeParts + ' sooner!';
        }
        savings.textContent = savingsTxt;

        interestSaved.textContent = interestDiff > 0
          ? 'You\'re saving ' + fmt(interestDiff) + ' in interest!'
          : '';
      } else {
        extraBlock.style.display = 'none';
      }
    }

    [priceInput, extraAmt].forEach(function(el){ el.addEventListener('input', calc); });
    [bank, term, extraFreq].forEach(function(el){ el.addEventListener('change', calc); });
    down.addEventListener('input', calc);
    calc();

    // Toggle extra payment section
    var toggle = document.getElementById('mc-extra-toggle');
    var body   = document.getElementById('mc-extra-body');
    toggle.addEventListener('click', function() {
      var isOpen = body.classList.contains('open');
      body.classList.toggle('open', !isOpen);
      toggle.classList.toggle('open', !isOpen);
    });
  })();
  </script>

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






