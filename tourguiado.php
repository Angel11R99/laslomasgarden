
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vista Lomas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* [All your existing CSS from the original code goes here – unchanged] */
    :root {
      --green: #078a63;
      --green-dark: #04684b;
      --green-light: #13b98b;
      --logo-green: #0f4f40;
      --text: #17483b;
      --muted: #5b6f69;
      --bg: #f3f3f1;
      --white: #ffffff;
      --shadow: 0 10px 28px rgba(0, 0, 0, 0.1);
      --radius: 16px;
      --container: 1280px;
      --green-gradient: linear-gradient(135deg, #078a63 0%, #10ba88 45%, #04684b 100%);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Outfit', sans-serif;
      color: var(--text);
      line-height: 1.52;
      overflow-x: hidden;
    }

    img {
      max-width: 100%;
      display: block;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      width: min(100% - 40px, var(--container));
      margin: 0 auto;
    }

    .section {
      padding: 72px 0;
    }

    .section-title {
      font-size: clamp(1.7rem, 3vw, 2.55rem);
      line-height: 1.2;
      font-weight: 600;
      text-align: center;
      max-width: 980px;
      margin: 0 auto 14px;
    }

    .section-text {
      max-width: 940px;
      margin: 0 auto;
      text-align: center;
      font-size: 0.96rem;
      color: var(--muted);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 42px;
      padding: 0 18px;
      border-radius: 8px;
      background: var(--green);
      color: var(--white);
      font-weight: 500;
      font-size: 0.92rem;
      transition: 0.25s ease;
      border: 1px solid transparent;
    }

    .btn:hover {
      background: var(--green-dark);
      transform: translateY(-2px);
    }

    .hero {
      min-height: 100svh;
      position: relative;
      color: var(--white);
      
      display: flex;
      align-items: flex-start;
      overflow: hidden;
    }

    .hero.step-1 {
      container-type: inline-size;
     
      isolation: isolate;
    }

    .hero.step-1 .hero-inner.container {
      width: 100%;
      max-width: none;
      margin: 0;
      padding-inline: 0;
    }

    .hero.step-1 .hero-copy {
      display: none;
    }

    .hero.step-1 #svgContainer {
      position: relative;
      overflow: hidden;

    }

    .hero.step-1 #svgContainer svg {
      width: 100%;
      height: 100%;
      transform: scaleX(1.12) scaleY(0.9);
      transform-origin: center;
    }

    .hero-map-loading {
      position: absolute;
      inset: 0;
      z-index: 12;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      font-size: 0.86rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
      color: rgba(255, 255, 255, 0.95);
      background: rgba(7, 18, 14, 0.72);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }

    .hero-map-loading::before {
      content: '';
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255, 0.28);
      border-top-color: #13b98b;
      animation: spinLoader 0.8s linear infinite;
    }

    .hero-map-loading.hidden {
      display: none;
    }

    @keyframes spinLoader {
      to { transform: rotate(360deg); }
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: auto 0 0 0;
      height: 6px;
     
    }

    .hero-inner {
      width: 100%;
      min-height: 100svh;
      padding-top: 26px;
      position: relative;
      z-index: 1;
    }

    .nav {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 16px;
      color: rgba(255, 255, 255, 0.96);
      min-height: 56px;
      position: relative;
      z-index: 4;
      padding: 0 14px;
    }

    .nav > div {
      display: none;
    }

    .logo {
      margin: 0;
      text-align: center;
      color: #0f4f40;
      line-height: 1;
      width: clamp(190px, 24vw, 320px);
      transition: none;
    }

    .logo img {
      width: 100%;
      height: auto;
      transition: none;
      transform: none;
    }

    .logo strong {
      display: block;
      font-size: clamp(2rem, 4vw, 3.6rem);
      letter-spacing: 0.08em;
      font-weight: 500;
    }

    .logo span {
      display: block;
      margin-top: 8px;
      letter-spacing: 0.28em;
      font-size: clamp(0.85rem, 1.5vw, 1.5rem);
    }

    .menu {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.88rem;
      color: rgba(255, 255, 255, 0.96);
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      padding: 8px 10px;
      border-radius: 999px;
      background: rgba(6, 22, 18, 0.52);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .menu-icon {
      width: 18px;
      height: 12px;
      position: relative;
    }

    .menu-icon span,
    .menu-icon::before,
    .menu-icon::after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 1.5px;
      background: currentColor;
      border-radius: 10px;
    }

    .menu-icon span { top: 6px; }
    .menu-icon::before { top: 0; }
    .menu-icon::after { bottom: 0; }

    .hero-copy {
      text-align: center;
      padding-top: 42px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 18px;
      position: relative;
      z-index: 4;
      transition: opacity 0.32s ease, transform 0.32s ease;
    }

    .hero.is-front-view .hero-copy {
      opacity: 0;
      transform: translateY(-10px);
      pointer-events: none;
    }

    .hero-copy h1 {
      font-size: clamp(1.8rem, 4.3vw, 3.7rem);
      line-height: 1.12;
      letter-spacing: 0.12em;
      color: var(--logo-green);
      font-weight: 500;
      text-transform: uppercase;
      text-shadow: 0 12px 36px rgba(0, 0, 0, 0.45);
      max-width: min(92vw, 18ch);
      margin: 0;
      white-space: normal;
      text-wrap: balance;
      order: 2;
    }

    .hero-tour-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 44px;
      padding: 0 20px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid rgba(16, 63, 51, 0.14);
      color: var(--green-dark);
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.09em;
      text-transform: uppercase;
      box-shadow: 0 14px 34px rgba(7, 21, 17, 0.2);
      transition: transform 0.24s ease, box-shadow 0.24s ease;
      margin-top: 0;
      order: 1;
    }

    .hero-tour-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 20px 38px rgba(7, 21, 17, 0.28);
    }

    .hero-apartment-map {
      position: absolute;
      inset: 0;
      z-index: 2;
      pointer-events: auto;
      display: block;
      transform-origin: center center;
      transition: transform 0.85s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                  opacity 0.55s ease;
    }

    .hero-map-base {
      position: absolute;
      inset: 0;
      z-index: 0;
      width: 100%;
      height: 100%;
      display: block;
      background: url('img/tourguiado/SERENAS SITE.avif') center/100% 100% no-repeat;
    }

    .hero.step-1 .hero-apartment-map {
      animation: step1MapReveal 720ms cubic-bezier(0.22, 1, 0.36, 1) both;
    }

    #svgContainer {
      position: absolute;
      inset: 0;
      z-index: 1;
      width: 100%;
      height: 100%;
    }

    #svgContainer svg {
      width: 100%;
      height: 100%;
      display: block;
    }

    #svgContainer svg image {
      opacity: 0;
      pointer-events: all;
    }

    .hero.is-front-view .hero-apartment-map {
      transform: scale(1.13);
      opacity: 0;
      pointer-events: none;
    }

    .hero-site-svg {
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }

    /* ── Full-screen immersive view ── */
    .hero-front-view {
      position: fixed;
      inset: 0;
      z-index: 300;
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      overflow: hidden;
      transition: opacity 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                  visibility 0.55s;
    }

    .hero-front-view.active {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
    }

    .hero-front-view.step-2-focus {
      background: rgba(6, 14, 12, 0.46);
      backdrop-filter: blur(14px) brightness(0.7);
      -webkit-backdrop-filter: blur(14px) brightness(0.7);
    }

    .hero-front-view.layout-selection-focus {
      background: transparent;
      backdrop-filter: none;
      -webkit-backdrop-filter: none;
    }

    /* Image fills the whole screen, starts zoomed-in then settles */
    .hero-front-image {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0;
      border: none;
      box-shadow: none;
      transform: scale(1.09);
      opacity: 1;
      transition: transform 1.15s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                  opacity 0.4s ease;
    }

    .hero-front-view.active .hero-front-image {
      transform: scale(1);
    }

    .hero-front-image.is-switching {
      opacity: 0;
      transform: scale(1.04);
    }

    .hero-front-svg-stage {
      position: absolute;
      inset: 0;
      z-index: 0;
      display: none;
      transform: scale(1.09);
      transition: transform 1.15s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .hero-front-svg-stage.active {
      display: block;
    }

    .hero-front-view.active .hero-front-svg-stage {
      transform: scale(1);
    }

    .hero-front-svg-stage.is-step-2 {
      inset: clamp(10px, 1.8vw, 24px);
      transform: none;
      z-index: 2;
    }

    .hero-front-svg-stage.is-step-2.step2-animate {
      animation: step2PlanEntrance 560ms cubic-bezier(0.22, 1, 0.36, 1) both;
    }

    .hero-front-view.active .hero-front-svg-stage.is-step-2 {
      transform: none;
    }

    .hero-front-svg-stage svg {
      width: 100%;
      height: 100%;
      display: block;
    }

    .hero-front-svg-stage.is-two-rooms-layout svg {
      transform: translateY(-2.2%) scale(1.03);
      transform-origin: center top;
    }

    .hero-front-svg-stage [role="button"] {
      cursor: pointer;
      outline: none;
      -webkit-tap-highlight-color: transparent;
    }

    .hero-front-svg-stage [role="button"]:focus,
    .hero-front-svg-stage [role="button"]:active {
      outline: none;
    }

    .hero-front-area-tooltip {
      position: fixed;
      z-index: 520;
      pointer-events: none;
      opacity: 0;
      transform: translateY(6px);
      transition: opacity 160ms ease, transform 160ms ease;
      background: rgba(6, 18, 14, 0.9);
      color: #f1f8f4;
      border: 1px solid rgba(255, 255, 255, 0.24);
      border-radius: 999px;
      padding: 7px 12px;
      font-size: 0.72rem;
      font-weight: 600;
      letter-spacing: 0.04em;
      white-space: nowrap;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.24);
    }

    .hero-front-area-tooltip.visible {
      opacity: 1;
      transform: translateY(0);
    }

    @keyframes step2PlanEntrance {
      from {
        opacity: 0;
        transform: translateY(20px) scale(0.97);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .hero-front-svg-stage [data-front-nav],
    .hero-front-svg-stage [data-scene],
    .hero-front-svg-stage [id^="app"],
    .hero-front-svg-stage [id^="APP"],
    .hero-front-svg-stage #Balcon,
    .hero-front-svg-stage #LivingRoom,
    .hero-front-svg-stage #Dinning,
    .hero-front-svg-stage #Kitchen,
    .hero-front-svg-stage #BedRoom1,
    .hero-front-svg-stage #BedRoom2,
    .hero-front-svg-stage #BathRoom1,
    .hero-front-svg-stage #BathRoom2,
    .hero-front-svg-stage #Bath1,
    .hero-front-svg-stage #Bath2,
    .hero-front-svg-stage #WC,
    .hero-front-svg-stage #Closet,
    .hero-front-svg-stage #Laundry {
      cursor: pointer;
    }

    /* Dark gradient vignette at bottom for legibility */
    .hero-front-view::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to bottom,
        rgba(4, 14, 11, 0.08) 0%,
        transparent 35%,
        rgba(4, 14, 11, 0.72) 100%
      );
      pointer-events: none;
      z-index: 1;
    }

    .hero-front-view.step-2-focus::after {
      background: linear-gradient(
        to bottom,
        rgba(4, 12, 10, 0.42) 0%,
        rgba(4, 12, 10, 0.18) 32%,
        rgba(4, 12, 10, 0.58) 100%
      );
    }

    .hero-front-view.layout-selection-focus::after {
      background: none;
    }

    /* Controls slide up from bottom */
    .hero-front-controls {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      padding: clamp(20px, 3vw, 32px) clamp(20px, 5vw, 52px) clamp(24px, 4vw, 44px);
      color: #fff;
      transform: translateY(28px);
      opacity: 0;
      transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.25s,
                  opacity 0.7s ease 0.25s;
    }

    .hero-front-view.active .hero-front-controls {
      transform: translateY(0);
      opacity: 1;
    }

    .hero-front-title {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      z-index: 3;
      text-align: center;
      color: #fff;
      text-transform: uppercase;
      pointer-events: none;
      transition: top 0.4s ease, font-size 0.4s ease, font-weight 0.4s ease;
    }

    /* Paso 1 — ayuda discreta sin tapar los edificios */
    .hero-front-view.layout-selection-focus .hero-front-title {
      top: max(1.25rem, env(safe-area-inset-top));
      left: max(1.25rem, env(safe-area-inset-left));
      transform: none;
      display: inline-flex;
      align-items: center;
      min-height: 2.35rem;
      padding: 0 1rem;
      border-radius: 999px;
      border: 1px solid rgba(19, 185, 139, 0.38);
      background: rgba(5, 18, 14, 0.72);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      white-space: nowrap;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.22);
      text-shadow: none;
    }

    /* Paso 2 — esquina inferior derecha, espejo del botón */
    .hero-front-view.step-2-focus .hero-front-title {
      bottom: clamp(24px, 4vw, 44px);
      top: auto;
      left: auto;
      right: max(1rem, env(safe-area-inset-right));
      transform: none;
      text-align: right;
      font-size: 2.75rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-shadow: 0 2px 12px rgba(0,0,0,0.5);
    }

    .hero-front-view.step-2-focus .hero-front-controls {
      justify-content: flex-start;
    }

    .hero-front-close {
      flex-shrink: 0;
      border: 1px solid rgba(255, 255, 255, 0.55);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      color: #fff;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 10px 22px;
      cursor: pointer;
      transition: background-color 0.22s ease, transform 0.22s ease;
      text-align: center;
    }

    .hero-front-close:hover,
    .hero-front-close:focus-visible {
      background: rgba(255, 255, 255, 0.26);
      transform: translateY(-2px);
      outline: none;
    }

    /* Apartment hover & UX interaction signals */
    #svgContainer svg {
      overflow: visible;
    }

    #svgContainer [role="button"] {
      outline: none;
      -webkit-tap-highlight-color: transparent;
    }

    #svgContainer [role="button"]:focus,
    #svgContainer [role="button"]:active,
    #svgContainer [role="button"]:focus-visible {
      outline: none;
    }

    #svgContainer image[id^="app"],
    #svgContainer image[id^="APP"] {
      transition: filter 200ms ease-out, transform 200ms cubic-bezier(0.22, 1, 0.36, 1);
      transform-box: fill-box;
      transform-origin: 50% 50%;
    }

    @keyframes appAttentionPulse {
      0%, 100% { filter: none; }
      50%       { filter: brightness(1.09) drop-shadow(0 0 10px rgba(19, 185, 139, 0.72)); }
    }

    #svgContainer image.app-intro-pulse {
      animation: appAttentionPulse 1.7s ease-in-out 3 both;
    }

    .apt-tooltip {
      position: fixed;
      z-index: 500;
      background: rgba(5, 18, 14, 0.93);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(19, 185, 139, 0.45);
      color: #fff;
      padding: 7px 14px 8px;
      border-radius: 8px;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.09em;
      text-transform: uppercase;
      pointer-events: none;
      opacity: 0;
      transform: translateY(5px);
      transition: opacity 0.18s ease, transform 0.18s ease;
      white-space: nowrap;
      display: flex;
      align-items: center;
      gap: 7px;
    }

    .apt-tooltip.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .apt-tooltip-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #13b98b;
      flex-shrink: 0;
    }

    .hero-map-hint {
      display: flex;
      position: absolute;
      bottom: max(2.4rem, env(safe-area-inset-bottom));
      left: max(2.4rem, env(safe-area-inset-left));
      z-index: 10;
      align-items: center;
      gap: 12px;
      padding: 16px 32px;
      border-radius: 12px;
      background: rgba(7, 138, 99, 0.95);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.25);
      color: #ffffff;
      font-size: 1.1rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      pointer-events: none;
      white-space: nowrap;
      box-shadow: 0 10px 32px rgba(7, 138, 99, 0.35);
    }

    @keyframes hintFadeOut {
      to { opacity: 0; visibility: hidden; }
    }

    .hero-map-hint-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #13b98b;
      animation: hintDotPulse 1.1s ease-in-out infinite;
    }

    @keyframes hintDotPulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.65); }
    }

    @keyframes step1MapReveal {
      from {
        opacity: 0;
        transform: scale(1.035);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes tourShellEnter {
      from {
        opacity: 0;
        transform: perspective(1200px) rotateX(8deg) scale(0.96) translateY(24px);
      }
      to {
        opacity: 1;
        transform: perspective(1200px) rotateX(0deg) scale(1) translateY(0);
      }
    }

    @keyframes ambientDepth {
      0%, 100% { background-position: 0% 50%; }
      50%       { background-position: 100% 50%; }
    }

    @keyframes sceneNameFlip {
      from {
        opacity: 0;
        transform: perspective(400px) rotateX(-50deg) translateY(6px);
      }
      to {
        opacity: 1;
        transform: perspective(400px) rotateX(0deg) translateY(0);
      }
    }

    @media (prefers-reduced-motion: no-preference) {
      .tour-shell.is-entering {
        animation: tourShellEnter 0.58s cubic-bezier(0.22, 1, 0.36, 1) forwards;
      }
      .tour-room-label-text.updating {
        animation: sceneNameFlip 0.35s cubic-bezier(0.22, 1, 0.36, 1) forwards;
      }
    }

    .intro {
      background: var(--green-gradient);
      color: var(--white);
    }

    .intro .section-title,
    .intro .section-text {
      color: var(--white);
    }

    .split {
      display: grid;
      grid-template-columns: 1.12fr 1fr;
      gap: 42px;
      align-items: center;
    }

    .card-image {
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      min-height: clamp(420px, 48vw, 620px);
      background: url('./Familia%20en%20la%20terraza%202.webp') center/cover no-repeat;
    }

    .content-block h2 {
      font-size: clamp(1.55rem, 2.5vw, 2.25rem);
      line-height: 1.16;
      margin-bottom: 16px;
      color: var(--green-dark);
    }

    .content-block p {
      color: var(--muted);
      margin-bottom: 20px;
      font-size: 1rem;
      line-height: 1.62;
    }

    .feature-list {
      display: grid;
      gap: 12px;
    }

    .feature {
      display: grid;
      grid-template-columns: 42px 1fr;
      gap: 10px;
      align-items: start;
    }

    .feature-number {
      font-size: 1.35rem;
      line-height: 1;
      font-weight: 600;
      color: var(--green);
    }

    .feature h3 {
      font-size: 0.95rem;
      margin-bottom: 2px;
      color: var(--text);
    }

    .feature p {
      margin: 0;
      font-size: 0.86rem;
    }

    .housing {
      background: var(--green-gradient);
      color: var(--white);
    }

    .housing .split {
      grid-template-columns: 1.05fr 0.95fr;
    }

    .housing h2,
    .housing .feature h3,
    .housing .feature-number,
    .housing p {
      color: var(--white);
    }

    .floorplan {
      background: transparent;
      border-radius: 0;
      min-height: clamp(500px, 52vw, 740px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      position: relative;
      overflow: visible;
    }

    .floorplan::before {
      content: '';
      position: absolute;
      inset: 18px;
      border-radius: 22px;
      background:
        linear-gradient(90deg, rgba(214,194,150,0.55) 0 100%),
        repeating-linear-gradient(90deg, rgba(255,255,255,0.65) 0 14%, rgba(232,220,192,0.95) 14% 28%),
        repeating-linear-gradient(0deg, rgba(255,255,255,0.45) 0 14%, rgba(238,226,201,0.9) 14% 28%);
      opacity: 0;
      display: none;
    }

    .floorplan img {
      position: relative;
      z-index: 2;
      width: min(126%, 980px);
      max-width: none;
      height: auto;
      object-fit: contain;
    }

    .floorplan-grid {
      position: relative;
      z-index: 1;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
    }

    .room {
      background: rgba(255,255,255,0.88);
      border: 2px solid #ccb78f;
      border-radius: 16px;
      min-height: 92px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: 0.9rem;
      font-weight: 600;
      color: #7b5c29;
      padding: 10px;
    }

    .lifestyle {
      background: var(--bg);
    }

    .gallery {
      margin-top: 34px;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .gallery-item {
      min-height: clamp(360px, 42vw, 520px);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      background-size: cover;
      background-position: center;
    }

    .gallery-item:first-child {
      background-image: url('./Amenities2.webp');
    }

    .gallery-item:last-child {
      background-image: url('img/shared/pool-family.webp');
    }

    .cta {
      text-align: center;
      padding: 72px 0 58px;
    }

    .cta-logo {
      color: var(--green);
      line-height: 0.92;
      margin-bottom: 26px;
    }

    .cta-logo img {
      width: clamp(180px, 24vw, 300px);
      height: auto;
      margin: 0 auto;
    }

    .cta-logo strong {
      display: block;
      font-size: clamp(3rem, 8vw, 6.5rem);
      font-weight: 500;
      letter-spacing: 0.06em;
    }

    .cta-logo span {
      display: block;
      margin-top: 14px;
      font-size: clamp(1.5rem, 3vw, 3rem);
      letter-spacing: 0.22em;
    }

    .cta h2 {
      font-size: clamp(1.4rem, 2.4vw, 2rem);
      margin-bottom: 18px;
      color: var(--green-dark);
    }

    .cta p {
      max-width: 860px;
      margin: 18px auto 0;
      color: var(--muted);
      font-size: 0.9rem;
    }

    .cta-actions {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .btn-outline {
      background: transparent;
      color: var(--green-dark);
      border-color: var(--green-dark);
    }

    .btn-outline:hover {
      color: var(--white);
      background: var(--green-dark);
    }

    .survey-modal,
    .tour-modal {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.72);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 16px;
      z-index: 9999;
    }

    .survey-modal.active {
      display: flex;
    }

    .tour-modal {
      padding: 0;
      background: rgba(7, 14, 12, 0.94);
    }

    .tour-modal.active {
      display: block;
    }

    .survey-modal-content,
    .tour-shell {
      background: #fff;
      border-radius: 18px;
      width: min(100%, 980px);
      max-height: min(92vh, 980px);
      overflow-y: auto;
      box-shadow: 0 20px 44px rgba(0, 0, 0, 0.28);
      position: relative;
    }

    .survey-modal-content {
      width: min(100%, 760px);
      padding: 30px;
    }

    .survey-close,
    .tour-close {
      position: absolute;
      top: 12px;
      right: 16px;
      background: transparent;
      border: 0;
      font-size: 2rem;
      line-height: 1;
      cursor: pointer;
      color: #5b6f69;
    }

    .tour-close {
      top: 1rem;
      right: 1rem;
      top: max(1rem, env(safe-area-inset-top));
      right: max(1rem, env(safe-area-inset-right));
      z-index: 21;
      width: 2.8rem;
      height: 2.8rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(15, 27, 22, 0.7);
      color: #fff;
      font-size: 1.7rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);
    }

    .tour-back-plan {
      position: absolute;
      top: max(1rem, env(safe-area-inset-top));
      left: max(1rem, env(safe-area-inset-left));
      z-index: 21;
      min-height: 2.8rem;
      padding: 0 1rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.24);
      background: rgba(15, 27, 22, 0.72);
      color: #fff;
      font-size: 0.74rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      cursor: pointer;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transform-origin: left center;
      transition: background-color 0.22s ease, transform 0.2s ease;
    }

    .tour-back-plan:hover,
    .tour-back-plan:focus-visible {
      background: rgba(7, 138, 99, 0.72);
      outline: none;
      transform: perspective(400px) rotateY(-6deg) translateX(-2px);
    }

    .survey-modal h2 {
      color: var(--green-dark);
      margin-bottom: 10px;
      font-size: 1.7rem;
      line-height: 1.2;
    }

    .survey-modal h3 {
      margin: 20px 0 10px;
      font-size: 1.05rem;
      color: #1f4138;
    }

    .survey-modal p {
      color: var(--muted);
      margin-bottom: 12px;
    }

    .survey-modal label {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
      color: #234f43;
      font-size: 0.95rem;
    }

    .survey-modal input[type="radio"],
    .survey-modal input[type="checkbox"] {
      accent-color: var(--green);
    }

    .survey-modal input[type="text"],
    .survey-modal select {
      width: 100%;
      border: 1px solid #d6dfdc;
      border-radius: 10px;
      padding: 12px;
      font: inherit;
      color: #1e3c34;
    }

    .survey-modal button[type="submit"] {
      margin-top: 20px;
      width: 100%;
      border: 0;
      border-radius: 10px;
      min-height: 46px;
      background: var(--green-gradient);
      color: #fff;
      font: inherit;
      font-weight: 600;
      cursor: pointer;
    }

    .tour-shell {
      position: relative;
      width: 100%;
      height: 100%;
      max-height: none;
      border-radius: 0;
      overflow: visible;
      background:
        radial-gradient(ellipse at 30% 70%, rgba(7, 138, 99, 0.07) 0%, transparent 60%),
        radial-gradient(ellipse at 70% 30%, rgba(4, 104, 75, 0.05) 0%, transparent 50%),
        #070e0c;
      background-size: 200% 200%;
      animation: ambientDepth 12s ease infinite;
      box-shadow: none;
    }

    .tour-room-label {
      position: fixed;
      bottom: max(1.6rem, env(safe-area-inset-bottom, 1.6rem));
      left: 50%;
      transform: translateX(-50%);
      z-index: 20;
      display: inline-flex;
      align-items: center;
      gap: 0.55rem;
      padding: 0.45rem 0.6rem;
      border-radius: 999px;
      background: rgba(8, 18, 14, 0.72);
      border: 1px solid rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      color: #fff;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      box-shadow: 0 8px 24px rgba(0,0,0,0.35);
      max-width: min(88vw, 28rem);
      text-align: center;
      transform-style: preserve-3d;
      will-change: transform;
      transition: box-shadow 0.15s ease;
    }

    .tour-room-label-text {
      min-width: 0;
      max-width: min(62vw, 20rem);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .tour-scene-nav-btn {
      width: 2.05rem;
      height: 2.05rem;
      border: 0;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      line-height: 1;
      cursor: pointer;
      flex-shrink: 0;
      transition: background-color 0.2s ease, transform 0.12s ease, opacity 0.2s ease, box-shadow 0.12s ease;
    }

    .tour-scene-nav-btn:hover,
    .tour-scene-nav-btn:focus-visible {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-3px) translateZ(4px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
      outline: none;
    }

    .tour-scene-nav-btn:active {
      transform: translateY(1px) translateZ(-2px);
      box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    }

    .tour-scene-nav-btn:disabled {
      opacity: 0.45;
      cursor: default;
      transform: none;
      box-shadow: none;
    }

    .tour-hotspot-toggle {
      position: absolute;
      top: calc(max(1rem, env(safe-area-inset-top)) + 3.6rem);
      right: max(1rem, env(safe-area-inset-right));
      z-index: 21;
      min-height: 2.7rem;
      padding: 0 0.95rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.22);
      background: rgba(15, 27, 22, 0.72);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      cursor: pointer;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: background-color 0.22s ease, transform 0.18s ease, box-shadow 0.18s ease;
    }

    .tour-hotspot-toggle:hover,
    .tour-hotspot-toggle:focus-visible {
      background: rgba(7, 138, 99, 0.72);
      transform: translateY(-2px) translateZ(3px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.35);
      outline: none;
    }

    .tour-hotspot-toggle.is-off {
      display: none;
      background: rgba(45, 16, 16, 0.72);
      border-color: rgba(255, 255, 255, 0.16);
    }

    .tour-touch-hint {
      position: fixed;
      top: calc(max(1rem, env(safe-area-inset-top)) + 3.4rem);
      left: 50%;
      z-index: 23;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.55rem;
      padding: 0.7rem 0.9rem;
      border-radius: 999px;
      background: rgba(8, 18, 14, 0.78);
      border: 1px solid rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.26);
      color: #fff;
      font-size: 0.74rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      transform: translate(-50%, -10px);
      transition: opacity 0.24s ease, transform 0.24s ease, visibility 0.24s ease;
      max-width: min(92vw, 27rem);
      text-align: center;
    }

    .tour-touch-hint.show {
      opacity: 1;
      visibility: visible;
      transform: translate(-50%, 0);
    }

    .tour-touch-hint strong {
      color: #dff8ee;
      font-weight: 700;
    }

    .tour-touch-hint-divider {
      width: 0.3rem;
      height: 0.3rem;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.42);
      flex: 0 0 auto;
    }

    /* Overlay de transición tipo warp entre escenas */
    .tour-transition-overlay {
      position: absolute;
      inset: 0;
      z-index: 30;
      pointer-events: none;
      background: radial-gradient(circle at 50% 50%, rgba(10, 16, 14, 0.2) 0%, rgba(6, 12, 9, 0.88) 60%, rgba(4, 8, 6, 0.97) 100%);
      opacity: 0;
      clip-path: circle(0% at 50% 50%);
      transition: opacity 0.4s ease, clip-path 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      will-change: opacity, clip-path;
    }
    .tour-transition-overlay.fading {
      opacity: 1;
      clip-path: circle(80% at 50% 50%);
    }
    .tour-transition-overlay.releasing {
      opacity: 0;
      clip-path: circle(0% at 50% 50%);
      transition: opacity 0.5s ease, clip-path 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Ayudante de posición */
    .tour-pos-toggle {
      position: absolute;
      top: 1rem;
      left: 1rem;
      z-index: 25;
      width: 2.4rem;
      height: 2.4rem;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      background: rgba(8, 18, 14, 0.75);
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      backdrop-filter: blur(8px);
      display: none;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }
    .tour-pos-toggle:hover { background: rgba(7, 138, 99, 0.7); }
    .tour-pos-toggle.active { background: rgba(7, 138, 99, 0.85); border-color: #13b98b; }

    .tour-pos-debug {
      position: absolute;
      top: 1rem;
      left: 4rem;
      z-index: 25;
      display: none;
      align-items: center;
      gap: 10px;
      padding: 0.5rem 1rem;
      border-radius: 10px;
      background: rgba(8, 18, 14, 0.88);
      border: 1px solid rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(10px);
      color: #fff;
      font-size: 0.78rem;
      white-space: nowrap;
    }
    .tour-pos-debug.active { display: flex; }
    .tour-pos-debug code {
      font-family: monospace;
      background: rgba(255,255,255,0.1);
      padding: 2px 8px;
      border-radius: 5px;
      font-size: 0.82rem;
      letter-spacing: 0.04em;
      min-width: 110px;
      text-align: center;
    }
    .tour-pos-copy {
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid rgba(255,255,255,0.25);
      background: rgba(255,255,255,0.1);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 700;
      cursor: pointer;
      letter-spacing: 0.05em;
      transition: background 0.18s;
    }
    .tour-pos-copy:hover { background: rgba(7,138,99,0.6); }
    .tour-pos-fix {
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid rgba(255,200,80,0.35);
      background: rgba(200,140,0,0.25);
      color: #ffd966;
      font-size: 0.72rem;
      font-weight: 700;
      cursor: pointer;
      letter-spacing: 0.05em;
      transition: background 0.18s;
    }
    .tour-pos-fix:hover { background: rgba(200,140,0,0.55); }
    .tour-stage.pick-mode canvas { cursor: crosshair !important; }

    /* Mira/crosshair — visible solo cuando el ayudante está activo */
    .tour-crosshair {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 22;
      width: 28px;
      height: 28px;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.2s;
    }
    .tour-crosshair.active { opacity: 1; }
    .tour-crosshair::before,
    .tour-crosshair::after {
      content: '';
      position: absolute;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 2px;
    }
    /* línea horizontal */
    .tour-crosshair::before {
      width: 28px;
      height: 2px;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
    }
    /* línea vertical */
    .tour-crosshair::after {
      width: 2px;
      height: 28px;
      left: 50%;
      top: 0;
      transform: translateX(-50%);
    }

    .tour-feedback {
      position: absolute;
      inset: 0;
      z-index: 15;
      display: none;
      align-items: center;
      justify-content: center;
      min-height: 22px;
      padding: 1rem;
      text-align: center;
      font-size: 0.92rem;
      color: #fff;
      background: rgba(8, 18, 14, 0.9);
    }

    .tour-feedback.show {
      display: flex;
    }

    .tour-feedback.error {
      background: rgba(54, 19, 19, 0.58);
    }

    .tour-stage {
      position: absolute;
      inset: 0;
      background: #000;
      min-height: 100dvh;
      touch-action: none;
    }

    .tour-loading {
      position: absolute;
      inset: 0;
      z-index: 40;
      display: none;
      align-items: center;
      justify-content: center;
      gap: 12px;
      background: rgba(5, 12, 9, 0.72);
      color: #f0fff8;
      font-size: 0.86rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      pointer-events: none;
    }

    .tour-loading.active {
      display: none !important;
    }

    .tour-loading-spinner {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255, 0.32);
      border-top-color: #13b98b;
      animation: spinLoader 0.8s linear infinite;
      flex: 0 0 auto;
    }

    .tour-stage canvas {
      touch-action: none;
    }

    .tour-scene {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

 


    @media (max-width: 960px) {
      .split,
      .housing .split,
      .gallery {
        grid-template-columns: 1fr;
      }

      .hero {
        min-height: 100svh;
        background-position: center 30%;
      }

      .hero-inner {
        min-height: 100svh;
        padding-top: 18px;
      }

      .hero-copy {
        padding-top: 44px;
        padding-inline: 20px;
      }

      .hero-copy h1 {
        max-width: 14ch;
      }

      .hero-map-hint {
        max-width: min(92vw, 30rem);
        white-space: normal;
        text-align: center;
      }

      .hero-front-controls {
        padding: 12px 14px;
        flex-wrap: wrap;
      }

      .card-image,
      .gallery-item {
        min-height: 300px;
      }

      .floorplan {
        min-height: 430px;
      }

      .floorplan img {
        width: min(110%, 820px);
      }

      .tour-pos-debug {
        max-width: calc(100vw - 7rem);
        overflow-x: auto;
      }
    }

    @media (max-width: 768px) {
      .hero {
        min-height: 100svh;
      }

      .hero-inner.container {
        width: 100%;
        max-width: none;
        margin: 0;
      }

      .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: 3;
        background:
          linear-gradient(180deg, rgba(4, 18, 15, 0.18) 0%, rgba(4, 18, 15, 0.08) 28%, rgba(4, 18, 15, 0.48) 100%),
          linear-gradient(90deg, rgba(3, 11, 10, 0.16) 0%, rgba(3, 11, 10, 0) 42%, rgba(3, 11, 10, 0.12) 100%);
        pointer-events: none;
      }

      .hero-apartment-map {
        background-image: url('img/shared/Master_Plan.webp');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .hero-apartment-map::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 62%, rgba(255,255,255,0.02) 0%, rgba(4, 18, 15, 0.14) 68%, rgba(4, 18, 15, 0.28) 100%);
        pointer-events: none;
      }

      #svgContainer,
      .hero-map-hint {
        display: none;
      }

      .hero-copy {
        position: relative;
        z-index: 4;
      }

      .hero.step-1 .hero-copy {
        display: grid;
        position: absolute;
        inset: auto 0 clamp(18px, 4vw, 28px) 0;
        padding: 0 16px;
        justify-items: center;
        z-index: 5;
        pointer-events: none;
      }

      .hero.step-1 .hero-copy h1 {
        display: none;
      }

      .hero.step-1 .hero-tour-link {
        pointer-events: auto;
        margin-bottom: 600px;
      }

      .hero-copy h1 {
        color: #ffffff;
        text-shadow: 0 14px 36px rgba(0, 0, 0, 0.36);
      }

      .hero-tour-link {
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 16px 38px rgba(4, 18, 15, 0.22);
      }
    }

    @media (max-width: 640px) {
      .section {
        padding: 56px 0;
      }

      .container {
        width: min(100% - 18px, var(--container));
      }

      .hero-inner {
        padding-top: 16px;
        min-height: 100svh;
      }

      .nav {
        min-height: 50px;
        padding: 0 8px;
      }

      .menu {
        right: 4px;
      }

      .logo {
        width: clamp(170px, 58vw, 250px);
      }

      .logo strong {
        font-size: 1.8rem;
      }

      .logo span {
        letter-spacing: 0.16em;
      }

      .hero-copy h1 {
        letter-spacing: 0.02em;
        font-size: clamp(1.05rem, 5.3vw, 2.25rem);
        line-height: 1.08;
        max-width: 12ch;
      }

      .hero-copy {
        padding-top: 30px;
        gap: 12px;
      }

      .hero-tour-link {
        min-height: 42px;
        padding: 0 16px;
        font-size: 0.78rem;
        letter-spacing: 0.06em;
      }

      .hero-front-controls {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        padding: 16px 18px 28px;
      }

      .hero-front-close {
        width: 100%;
      }

      .hero-front-view.layout-selection-focus .hero-front-title {
        top: max(0.9rem, env(safe-area-inset-top));
        left: 50%;
        transform: translateX(-50%);
        width: auto;
        max-width: calc(100vw - 2rem);
        font-size: 0.68rem;
        white-space: nowrap;
      }

      .feature {
        grid-template-columns: 42px 1fr;
      }

      .feature-number {
        font-size: 1.2rem;
      }

      .floorplan-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .floorplan {
        min-height: 360px;
      }

      .floorplan img {
        width: 100%;
        max-width: 100%;
      }

      .gallery-item {
        min-height: 260px;
      }

      .survey-modal-content {
        padding: 20px;
      }

      .tour-room-label {
        font-size: 0.74rem;
        gap: 0.35rem;
        padding: 0.35rem 0.45rem;
        bottom: max(0.75rem, env(safe-area-inset-bottom));
        max-width: calc(100vw - 5.5rem);
      }

      .tour-room-label-text {
        max-width: calc(100vw - 10.5rem);
      }

      .tour-scene-nav-btn {
        width: 1.9rem;
        height: 1.9rem;
        font-size: 0.92rem;
      }

      .tour-touch-hint {
        top: calc(max(0.85rem, env(safe-area-inset-top)) + 3rem);
        width: calc(100vw - 1.4rem);
        border-radius: 18px;
        padding: 0.7rem 0.8rem;
        gap: 0.45rem;
        font-size: 0.7rem;
        line-height: 1.35;
        flex-wrap: wrap;
      }

      .tour-close {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 1.5rem;
      }

      .tour-back-plan {
        min-height: 2.5rem;
        font-size: 0.68rem;
        padding: 0 0.82rem;
      }

      .tour-hotspot-toggle {
        top: calc(max(0.85rem, env(safe-area-inset-top)) + 3rem);
        right: max(0.85rem, env(safe-area-inset-right));
        min-height: 2.45rem;
        padding: 0 0.78rem;
        font-size: 0.64rem;
      }

      .tour-pos-toggle {
        width: 2.2rem;
        height: 2.2rem;
        top: max(0.85rem, env(safe-area-inset-top));
        left: max(0.85rem, env(safe-area-inset-left));
      }

      .tour-pos-debug {
        top: auto;
        left: 50%;
        bottom: calc(max(0.75rem, env(safe-area-inset-bottom)) + 3.6rem);
        transform: translateX(-50%);
        width: calc(100vw - 1.5rem);
        max-width: 28rem;
        padding: 0.7rem 0.8rem;
        gap: 0.6rem;
        justify-content: center;
        flex-wrap: wrap;
        white-space: normal;
      }

      .tour-pos-debug code {
        min-width: 0;
        width: 100%;
      }

      .tour-pos-copy,
      .tour-pos-fix {
        min-height: 2rem;
      }

      .tour-stage {
        min-height: 100%;
      }

      .tour-scene {
        height: 100%;
      }

      .apt-tooltip {
        display: none;
      }
    }

    @media (max-width: 420px) {
      .container {
        width: min(100% - 14px, var(--container));
      }

      .hero-copy {
        padding-inline: 12px;
      }

      .hero-copy h1 {
        font-size: clamp(0.96rem, 6vw, 1.5rem);
        max-width: 11ch;
      }

      .section-title {
        font-size: 1.45rem;
      }

      .section-text,
      .content-block p,
      .cta p {
        font-size: 0.92rem;
      }

      .tour-room-label {
        font-size: 0.68rem;
        letter-spacing: 0.07em;
      }

      .tour-touch-hint {
        font-size: 0.67rem;
        padding: 0.65rem 0.75rem;
      }
    }

    @media (hover: none), (pointer: coarse) {
      .apt-tooltip {
        display: none !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero.step-1 .hero-apartment-map {
        animation: none;
      }
    }

    /* Ocultar botón A-Frame VR (inútil, confunde) */
    .a-enter-vr-button {
      display: none !important;
    }

    /* ═══════════════════════════════════════════════
       TOUR CTA MODAL — Initial Choice
       ═══════════════════════════════════════════════ */

    .tour-cta-modal {
      position: fixed;
      inset: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 1;
      visibility: visible;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .tour-cta-modal[aria-hidden="true"] {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    .tour-cta-backdrop {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(7,138,99,0.35) 0%, rgba(4,104,75,0.25) 100%);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    .tour-cta-content {
      position: relative;
      z-index: 2;
      background: linear-gradient(135deg, #fff 0%, #f8faf9 100%);
      border-radius: 24px;
      padding: clamp(32px, 5vw, 60px);
      max-width: min(92vw, 720px);
      box-shadow: 0 25px 80px rgba(0,0,0,0.2);
      text-align: center;
      animation: ctaSlideIn 0.5s ease;
    }

    @keyframes ctaSlideIn {
      from {
        opacity: 0;
        transform: scale(0.92) translateY(20px);
      }
      to {
        opacity: 1;
        transform: scale(1) translateY(0);
      }
    }

    .tour-cta-title {
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      font-weight: 700;
      color: #17483b;
      margin-bottom: 8px;
      letter-spacing: -0.02em;
    }

    .tour-cta-subtitle {
      font-size: clamp(0.9rem, 2vw, 1.1rem);
      color: #5b6f69;
      margin-bottom: 40px;
      font-weight: 400;
    }

    .tour-cta-buttons {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(16px, 3vw, 24px);
      margin-bottom: 24px;
    }

    .tour-cta-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 12px;
      padding: clamp(20px, 4vw, 32px);
      border: 2px solid #e0e5e2;
      border-radius: 16px;
      background: #fff;
      cursor: pointer;
      transition: all 0.25s ease;
      font-family: inherit;
    }

    .tour-cta-btn:hover {
      border-color: var(--green-light);
      background: linear-gradient(135deg, #f0fdf8 0%, #f8fdf9 100%);
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(7,138,99,0.15);
    }

    .tour-cta-btn:active {
      transform: translateY(-2px);
    }

    .tour-cta-btn-guide {
      border-color: var(--green);
    }

    .tour-cta-btn-guide:hover {
      border-color: var(--green-light);
      background: linear-gradient(135deg, #e8fdf5 0%, #f0fdf8 100%);
    }

    .tour-cta-btn-explore:hover {
      border-color: var(--green);
    }

    .tour-cta-btn-icon {
      font-size: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .tour-cta-btn-title {
      font-size: clamp(0.95rem, 2vw, 1.1rem);
      font-weight: 700;
      color: #17483b;
      display: block;
    }

    .tour-cta-btn-desc {
      font-size: 0.8rem;
      color: #5b6f69;
      font-weight: 400;
      display: block;
    }

    .tour-cta-close {
      position: absolute;
      top: clamp(16px, 3vw, 24px);
      right: clamp(16px, 3vw, 24px);
      width: 40px;
      height: 40px;
      border: 0;
      background: transparent;
      color: #5b6f69;
      font-size: 1.6rem;
      cursor: pointer;
      border-radius: 8px;
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .tour-cta-close:hover {
      background: rgba(7,138,99,0.1);
      color: #17483b;
    }

    @media (max-width: 640px) {
      .tour-cta-buttons {
        grid-template-columns: 1fr;
      }
      .tour-cta-content {
        padding: 24px;
      }
    }

    /* ═══════════════════════════════════════════════
       MODO CINE — Cinematic Overlay System
       ═══════════════════════════════════════════════ */

    /* Letterbox bars — 8% top + 8% bottom = 2.39:1 ratio */
    .cine-letterbox {
      position: absolute;
      left: 0; right: 0;
      height: 8%;
      background: #000;
      z-index: 50;
      pointer-events: none;
      transition: opacity 0.6s ease;
      opacity: 0;
    }
    .cine-letterbox-top    { top: 0; }
    .cine-letterbox-bottom { bottom: 0; }

    .tour-shell.cine-active .cine-letterbox { opacity: 1; }

    /* Story segments bar — thin line at very top */
    .cine-story-bar {
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      z-index: 51;
      display: flex;
      gap: 2px;
      padding: 0 4px;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    .tour-shell.cine-active .cine-story-bar { opacity: 1; }

    .cine-story-seg {
      flex: 1;
      height: 3px;
      background: rgba(255,255,255,0.28);
      border-radius: 2px;
      overflow: hidden;
      position: relative;
    }
    .cine-story-seg-fill {
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 0%;
      background: #fff;
      border-radius: 2px;
      transition: none;
    }
    .cine-story-seg.done .cine-story-seg-fill   { width: 100%; }
    .cine-story-seg.active .cine-story-seg-fill { width: var(--seg-pct, 0%); }

    /* Cinema controls bar — bottom overlay */
    .cine-controls-bar {
      position: fixed;
      bottom: 0; left: 0; right: 0;
      z-index: 52;
      padding: 0 16px max(16px, env(safe-area-inset-bottom, 16px)) 16px;
      background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 100%);
      display: flex;
      flex-direction: column;
      gap: 8px;
      opacity: 0;
      pointer-events: none;
      transform: translateY(10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .cine-controls-bar.visible {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0);
    }
    .tour-shell:not(.cine-active) .cine-controls-bar { display: none; }

    /* Progress / scrubber row */
    .cine-progress-row {
      display: flex;
      align-items: center;
      gap: 10px;
      width: 100%;
    }
    .cine-scrubber-wrap {
      flex: 1;
      position: relative;
      height: 4px;
      background: rgba(255,255,255,0.28);
      border-radius: 4px;
      cursor: pointer;
    }
    .cine-scrubber-fill {
      position: absolute;
      left: 0; top: 0; bottom: 0;
      background: #fff;
      border-radius: 4px;
      pointer-events: none;
    }
    .cine-chapter-marker {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 8px; height: 8px;
      border-radius: 50%;
      background: rgba(255,255,255,0.65);
      border: 1.5px solid rgba(255,255,255,0.9);
      cursor: pointer;
      z-index: 2;
      transition: transform 0.15s ease, background 0.15s ease;
    }
    .cine-chapter-marker:hover {
      transform: translate(-50%, -50%) scale(1.6);
      background: #fff;
    }
    .cine-chapter-tooltip {
      position: absolute;
      bottom: 16px;
      transform: translateX(-50%);
      background: rgba(0,0,0,0.85);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      padding: 4px 8px;
      border-radius: 5px;
      white-space: nowrap;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.15s ease;
      backdrop-filter: blur(4px);
    }
    .cine-chapter-marker:hover .cine-chapter-tooltip { opacity: 1; }

    .cine-time-display {
      color: rgba(255,255,255,0.85);
      font-size: 0.72rem;
      font-weight: 600;
      letter-spacing: 0.04em;
      white-space: nowrap;
      min-width: 72px;
      text-align: right;
    }

    /* Buttons row */
    .cine-btn-row {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .cine-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px; height: 36px;
      border: 0;
      background: transparent;
      color: #fff;
      font-size: 1.1rem;
      cursor: pointer;
      border-radius: 6px;
      transition: background 0.15s ease, transform 0.1s ease;
      flex-shrink: 0;
    }
    .cine-btn:hover { background: rgba(255,255,255,0.15); }
    .cine-btn:active { transform: scale(0.92); }
    .cine-btn:disabled { opacity: 0.38; pointer-events: none; }
    .cine-btn-mute { margin-left: auto; }
    .cine-btn-fs   { }

    /* Lower-third scene title card */
    .cine-title-card {
      position: absolute;
      left: 24px;
      bottom: calc(8% + 70px);
      z-index: 53;
      pointer-events: none;
      opacity: 0;
      transform: translateY(8px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .cine-title-card.show {
      opacity: 1;
      transform: translateY(0);
    }
    .cine-title-card-label {
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      margin-bottom: 3px;
    }
    .cine-title-card-name {
      font-size: clamp(1.15rem, 2.5vw, 1.7rem);
      font-weight: 600;
      color: #fff;
      text-shadow: 0 2px 14px rgba(0,0,0,0.55);
      letter-spacing: 0.04em;
    }
    .cine-title-card-bar {
      width: 36px; height: 2px;
      background: var(--green-light, #13b98b);
      margin-top: 6px;
      border-radius: 2px;
    }

    /* Full-overlay intro card — first scene only */
    .cine-intro-card {
      position: absolute;
      inset: 0;
      z-index: 54;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      pointer-events: none;
      background: rgba(0,0,0,0.48);
      opacity: 0;
      transition: opacity 0.8s ease;
    }
    .cine-intro-card.show { opacity: 1; }

    .cine-intro-title {
      font-size: clamp(1.6rem, 4vw, 2.6rem);
      font-weight: 600;
      color: #fff;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-shadow: 0 4px 24px rgba(0,0,0,0.6);
      margin-bottom: 10px;
    }
    .cine-intro-subtitle {
      font-size: clamp(0.8rem, 1.5vw, 1rem);
      font-weight: 400;
      color: rgba(255,255,255,0.72);
      letter-spacing: 0.18em;
      text-transform: uppercase;
    }

    /* Hero cinema CTA button */
    .cine-hero-play-btn {
      position: absolute;
      bottom: clamp(40px, 8vw, 80px);
      left: 50%;
      transform: translateX(-50%);
      z-index: 5;
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 14px 28px;
      background: rgba(5, 14, 11, 0.82);
      border: 1px solid rgba(255,255,255,0.3);
      border-radius: 999px;
      color: #fff;
      font-family: inherit;
      font-size: 0.92rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 16px 40px rgba(0,0,0,0.38);
      transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
      white-space: nowrap;
    }
    .cine-hero-play-btn:hover {
      background: rgba(7,138,99,0.75);
      transform: translateX(-50%) translateY(-3px);
      box-shadow: 0 22px 48px rgba(0,0,0,0.48);
    }
    .cine-hero-play-btn-icon {
      width: 32px; height: 32px;
      border-radius: 50%;
      background: rgba(255,255,255,0.14);
      border: 1px solid rgba(255,255,255,0.35);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.9rem;
      flex-shrink: 0;
    }

    /* Hide room label in cinema mode */
    .tour-shell.cine-active .tour-room-label { display: none; }

  </style>
</head>
<body>
  <header class="hero step-1">
    <div class="hero-inner container">
      <nav class="nav">
        <div></div>
        <!-- <a href="#" class="logo" aria-label="Vista Lomas">
          <img src="./Las%20Lomas%20logo.png" alt="Vista Lomas" />
        </a> -->
        <!-- <a href="#" class="menu" aria-label="Abrir menú">
          <span>Menu</span>
          <span class="menu-icon"><span></span></span>
        </a> -->
      </nav>

      <div class="hero-copy">
        <h1>Caribbean Living, Every Day.</h1>
        <a href="#" class="hero-tour-link js-open-tour">Tour Virtual 360°</a>
      </div>

      <!-- SVG Container – replace the example SVG with your actual apartment map SVG -->
      <div class="hero-apartment-map" aria-label="Mapa interactivo de apartamentos">
        <div class="hero-map-base" aria-hidden="true"></div>
        <div class="hero-map-hint" aria-hidden="true"><span class="hero-map-hint-dot"></span>TAP TO EXPLORE</div>

        <div id="svgContainer">
          <div class="hero-map-loading" id="heroMapLoading">Loading units...</div>
          <!-- SVG is loaded dynamically from:                                  -->
          <!-- img/tourguiado/SERENAS SITE LAND reduce.svg                                 -->
        </div>
      </div>

      <div class="hero-front-view" id="heroFrontView" aria-hidden="true">
        <img class="hero-front-image" id="heroFrontImage" src="img/tourguiado/Serenasconbalcon.svg" alt="Unit with 3 rooms">
        <div class="hero-front-svg-stage" id="heroFrontSvgStage" aria-hidden="true"></div>
        <div class="hero-front-area-tooltip" id="heroFrontAreaTooltip" aria-hidden="true"></div>
        <span class="hero-front-title" id="heroFrontTitle">Unit with 3 rooms</span>
        <div class="hero-front-controls">
          <button class="hero-front-close" id="heroFrontClose" type="button">Return to the master plan</button>
        </div>
      </div>

      <!-- Cinema CTA — opens tour directly in auto-play mode -->
      <!-- <button type="button" class="cine-hero-play-btn" id="cineHeroPlayBtn">
        <span class="cine-hero-play-btn-icon">▶</span>
        <span>Iniciar Tour</span>
      </button> -->
    </div>

  <div class="apt-tooltip" id="aptTooltip" aria-hidden="true"><span class="apt-tooltip-dot"></span><span id="aptTooltipText"></span></div>
  </header>

  <!-- Tour CTA Modal — Initial choice -->
  <div class="tour-cta-modal" id="tourCtaModal" aria-hidden="false">
    <div class="tour-cta-backdrop" id="tourCtaBackdrop"></div>
    <div class="tour-cta-content">
      <h1 class="tour-cta-title">¿Qué deseas hacer?</h1>
      <p class="tour-cta-subtitle">Explora Vista Lomas de tu forma preferida</p>

      <div class="tour-cta-buttons">
        <button type="button" class="tour-cta-btn tour-cta-btn-guide" id="tourCtaGuideBtn">
          <span class="tour-cta-btn-icon">▶</span>
          <span class="tour-cta-btn-title">Ver Recorrido Guiado</span>
          <span class="tour-cta-btn-desc">Experiencia cinematográfica de 1 minuto</span>
        </button>

        <button type="button" class="tour-cta-btn tour-cta-btn-explore" id="tourCtaExploreBtn">
          <span class="tour-cta-btn-icon">🔍</span>
          <span class="tour-cta-btn-title">Explorar por tu cuenta</span>
          <span class="tour-cta-btn-desc">Navega libremente a tu ritmo</span>
        </button>
      </div>

      <button type="button" class="tour-cta-close" id="tourCtaCloseBtn" aria-label="Cerrar">✕</button>
    </div>
  </div>

  <!-- The rest of your sections remain exactly the same -->
  <div class="tour-modal" id="tourModal" aria-hidden="true">
    <div class="tour-shell" role="dialog" aria-modal="true" aria-labelledby="tourSceneTitle">
      <button class="tour-back-plan" id="tourBackPlanBtn" type="button">Back to plan</button>
      <button class="tour-close" id="tourCloseBtn" type="button" aria-label="Close 360 tour">&times;</button>
      <button class="tour-hotspot-toggle" id="tourHotspotToggle" type="button" aria-pressed="true">Hide hotspots</button>
      <div class="tour-room-label">
        <button class="tour-scene-nav-btn" id="tourPrevBtn" type="button" aria-label="Previous 360 view">&#8249;</button>
        <span class="tour-room-label-text" id="tourSceneTitle">Balcón</span>
        <button class="tour-scene-nav-btn" id="tourNextBtn" type="button" aria-label="Next 360 view">&#8250;</button>
      </div>
      <div class="tour-touch-hint" id="tourTouchHint" aria-hidden="true">
        <strong>1 dedo</strong> para mover
        <span class="tour-touch-hint-divider" aria-hidden="true"></span>
        <strong>2 dedos</strong> para zoom
      </div>

      <!-- Overlay negro para transición de caminar -->
      <div class="tour-transition-overlay" id="tourTransitionOverlay"></div>

      <!-- Ayudante de posición (solo para editar hotspots) -->
      <div class="tour-crosshair" id="tourCrosshair"></div>
      <button class="tour-pos-toggle" id="tourPosToggle" title="Ayuda posición">⊕</button>
      <div class="tour-pos-debug" id="tourPosDebug">
        <span>Clic o mira →</span>
        <code id="tourPosDisplay">— — —</code>
        <button class="tour-pos-fix" id="tourPosFixBtn" title="Fijar coordenada del centro de pantalla">Fijar aquí</button>
        <button class="tour-pos-copy" id="tourPosCopyBtn">Copiar</button>
      </div>

      <div class="tour-stage">
        <div class="tour-loading" id="tourLoading" aria-hidden="true">
          <span class="tour-loading-spinner" aria-hidden="true"></span>
          <span id="tourLoadingText">Loading 360...</span>
        </div>
        <a-scene embedded vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false" renderer="colorManagement: true; antialias: true; precision: high" loading-screen="enabled: false" class="tour-scene" id="tourScene">
          <a-entity camera="fov: 80" look-controls="touchEnabled: false; mouseEnabled: true; magicWindowTrackingEnabled: false" wasd-controls="enabled: false; acceleration: 180" position="0 1.6 0">
            <a-entity cursor="rayOrigin: mouse" raycaster="objects: .tour-hotspot"></a-entity>
          </a-entity>
          <a-sky id="tourSky" visible="false" rotation="0 -90 0" radius="30"></a-sky>
          <a-sky id="tourSkyBlend" visible="false" rotation="0 -90 0" radius="29.8"></a-sky>
          <a-entity id="tourHotspots"></a-entity>

          <!-- Pin de posición (modo clic) — aparece en la esfera donde se hizo clic -->
          <a-entity id="tourClickPin" visible="false">
            <a-sphere radius="0.22" material="color: #00ff88; emissive: #00cc66; emissiveIntensity: 1; opacity: 0.95; transparent: true"
              animation="property: scale; dir: alternate; dur: 900; easing: easeInOutSine; loop: true; to: 1.45 1.45 1.45"></a-sphere>
          </a-entity>
        </a-scene>
      </div>

      <!-- ── MODO CINE overlays ── -->

      <!-- Story bar (12 segments) -->
      <div class="cine-story-bar" id="cineStoryBar" aria-hidden="true">
        <!-- 12 segments injected by JS -->
      </div>

      <!-- Letterbox bars -->
      <div class="cine-letterbox cine-letterbox-top"    aria-hidden="true"></div>
      <div class="cine-letterbox cine-letterbox-bottom" aria-hidden="true"></div>

      <!-- Intro title card (first scene only) -->
      <div class="cine-intro-card" id="cineIntroCard" aria-hidden="true">
        <div class="cine-intro-title">Vista Lomas</div>
        <div class="cine-intro-subtitle">Tour Virtual —</div>
      </div>

      <!-- Lower-third scene title card -->
      <div class="cine-title-card" id="cineTitleCard" aria-hidden="true">
        <div class="cine-title-card-label">Vista Lomas — Tour Virtual</div>
        <div class="cine-title-card-name" id="cineTitleCardName">Balcony</div>
        <div class="cine-title-card-bar"></div>
      </div>

      <!-- Video-style controls bar -->
      <div class="cine-controls-bar" id="cineControlsBar" aria-label="Cinema controls">
        <!-- Scrubber row -->
        <div class="cine-progress-row">
          <div class="cine-scrubber-wrap" id="cineScrubberWrap" role="slider"
               aria-label="Scene progress" aria-valuemin="0" aria-valuemax="11" aria-valuenow="0">
            <div class="cine-scrubber-fill" id="cineScrubberFill"></div>
            <!-- Chapter markers injected by JS -->
          </div>
          <div class="cine-time-display" id="cineTimeDisplay">0:00 / 1:00</div>
        </div>
        <!-- Button row -->
        <div class="cine-btn-row">
          <button class="cine-btn" id="cineSkipBackBtn"  type="button" aria-label="Previous scene">&#9198;</button>
          <button class="cine-btn" id="cinePlayPauseBtn" type="button" aria-label="Pause">&#9646;&#9646;</button>
          <button class="cine-btn" id="cineSkipFwdBtn"   type="button" aria-label="Next scene">&#9197;</button>
          <button class="cine-btn cine-btn-mute" id="cineMuteBtn" type="button" aria-label="Mute (no audio)" disabled>&#128266;</button>
          <button class="cine-btn cine-btn-fs"   id="cineFsBtn"   type="button" aria-label="Fullscreen">&#x26F6;</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    // ================================
    // Hero map click handling (inline SVG)
    // ================================

    // Caché de SVGs en memoria.
    // _svgFetching guarda el promise en vuelo para no lanzar fetches duplicados
    // mientras el archivo aún está descargando.
    const _svgCache = new Map();
    const _svgFetching = new Map();
    function fetchSvgCached(url) {
      if (_svgCache.has(url)) return Promise.resolve(_svgCache.get(url));
      if (_svgFetching.has(url)) return _svgFetching.get(url);
      const promise = fetch(url)
        .then((r) => r.text())
        .then((text) => { _svgCache.set(url, text); _svgFetching.delete(url); return text; })
        .catch((err) => { _svgFetching.delete(url); throw err; });
      _svgFetching.set(url, promise);
      return promise;
    }

    // Inicia precarga en background de un SVG sin bloquear nada.
    function prefetchSvgBackground(url) {
      if (_svgCache.has(url) || _svgFetching.has(url)) return;
      fetchSvgCached(url);
    }

    const pageBody = document.body;
    const heroRoot = document.querySelector('.hero');
    const heroFrontView = document.getElementById('heroFrontView');
    const heroFrontImage = document.getElementById('heroFrontImage');
    const heroFrontSvgStage = document.getElementById('heroFrontSvgStage');
    const heroFrontAreaTooltip = document.getElementById('heroFrontAreaTooltip');
    const heroFrontTitle = document.getElementById('heroFrontTitle');
    const heroFrontClose = document.getElementById('heroFrontClose');

    const heroApartmentViews = {
      'with-balcony': {
        title: 'Unit with 3 rooms',
        image: 'img/tourguiado/TipoA/TipoABG.svg',
        interactive: true,
        step2Svg: 'img/tourguiado/masterplan3room.svg'
      },
      'without-balcony': {
        title: 'Unit with 2 rooms',
        image: 'img/tourguiado/TipoB/Tipo Bg.svg',
        interactive: true,
        step2Svg: 'img/tourguiado/masterplan2room.svg'
      }
    };

    let activePlanViewKey = 'without-balcony';
    let selectedBuildingNum = '';

    const THREE_ROOM_BUILDINGS = new Set([
      '1','2','3','4','11','12','13','15','17','19','21','23','26','29','31'
    ]);

    const BUILDING_NUMBER_MAP = {
      'app1':    '21', 'app2-T':  '19', 'app3':    '17', 'app4-T':  '15',
      'app5':    '13', 'app6-T':  '11', 'app7-T':  '3',  'app8':    '2',
      'app9-T':  '1',  /* app10 eliminado */
      'app11-T': '22', 'app12-T': '20', 'app13':   '18', 'app14-T': '16',
      'app15':   '14', 'app16-T': '12', 'app17':   '4',  'app18-T': '5',
      'app19':   '6',  'app20-T': '8',  'app21-T': '7',  'app22':   '9',
      'app23':   '25', 'app24':   '28', 'app25-T': '10', 'app26-T': '24',
      'app27':   '23', 'app28':   '26', 'app29-T': '27', 'app30':   '30',
      'app31-T': '29', 'app32-T': '31', 'app33':   '32', 'app34-T': '33'
    };

    const APP_UNIT_LETTERS = {
      // Formato TipoB/Tipo Bg.svg - IDs directos (letra única A-K)
      'A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E',
      'F': 'F', 'G': 'G', 'H': 'H', 'I': 'I', 'J': 'J', 'K': 'K',
      // Formato TipoABG.svg (3 rooms) - IDs directos
      // Mismo formato, mantener compatibilidad
      // Formato legacy Serenas2rooms.svg (App-1…App-10)
      'App-1': 'G', 'App-2': 'H',
      'App-3': 'E', 'App-4': 'F',
      'App-5': 'C', 'App-6': 'D',
      'App-7': 'A', 'App-8': 'B',
      'App-9': 'I', 'App-10': 'J'
    };

    const masterplanSceneById = {
      // masterplan2room (2 bedrooms) IDs: Balcon, LivingRoom, Dinning, Kitchen, BedRoom1, BedRoom2, BathRoom1, BathRoom2, Closet, Laundry
      balcon: 'balcon-exterior',
      livingroom: 'sala',
      dinning: 'comedor',
      dining: 'comedor',
      kitchen: 'cocina',
      bedroom1: 'dormitorio-principal',
      bedroom2: 'dormitorio-a',
      bathroom1: 'bano-principal',
      bathroom2: 'bano-2',
      closet: 'wc',
      wc: 'wc',
      toilet: 'wc',
      laundry: 'pasillo-2',
      // masterplan3room (3 bedrooms) IDs from SVG: Balcon, Living, Dinning, Kitchen, BedRoom, BedRoom-2, BedRoom2, Bath1, Bath2, Closet, Laundry
      living: 'sala',
      dinning: 'comedor',
      kitchen: 'cocina',
      bedroom: 'dormitorio-principal',
      bedroom2: 'dormitorio-a',
      'bedroom-2': 'dormitorio-b',
      bath1: 'bano-principal',
      bath2: 'bano-2',
      closet: 'wc',
      wc: 'wc',
      toilet: 'wc',
      laundry: 'pasillo-2'
    };

    function getStep2MasterplanSvg(viewKey) {
      const view = heroApartmentViews[viewKey];
      return view && view.step2Svg ? view.step2Svg : 'img/tourguiado/masterplan2room.svg';
    }

    function revealHeroFrontView() {
      if (!heroRoot || !heroFrontView) return;
      heroRoot.classList.add('is-front-view');
      document.body.style.overflow = 'hidden';

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          heroFrontView.classList.add('active');
          heroFrontView.setAttribute('aria-hidden', 'false');
        });
      });
    }

    function normalizeSceneLookupKey(value) {
      return String(value || '').toLowerCase().replace(/[^a-z0-9\-]+/g, '');
    }

    function resolveTourSceneId(candidate) {
      const raw = String(candidate || '').trim();
      if (!raw) return '';

      const directMatch = getSceneById(raw);
      if (directMatch) return directMatch.id;

      const normalized = normalizeSceneLookupKey(raw);
      const mapped = masterplanSceneById[normalized];
      if (!mapped) return '';

      const mappedScene = getSceneById(mapped);
      return mappedScene ? mappedScene.id : '';
    }

    function makeSvgElementButton(node, onActivate) {
      if (!node || typeof onActivate !== 'function') return;
      node.setAttribute('tabindex', '0');
      node.setAttribute('role', 'button');
      node.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        onActivate(node);
        if (typeof node.blur === 'function') node.blur();
      });
      node.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          e.stopPropagation();
          onActivate(node);
          if (typeof node.blur === 'function') node.blur();
        }
      });
    }

    function createSvgInteractiveTarget(node) {
      if (!node) return null;

      const isImageNode = String(node.tagName || '').toLowerCase() === 'image';
      if (!isImageNode) {
        return { targetNode: node, visualNode: node };
      }

      const parentNode = node.parentNode;
      if (!parentNode) {
        return { targetNode: node, visualNode: node };
      }

      const ns = 'http://www.w3.org/2000/svg';
      const wrapper = document.createElementNS(ns, 'g');
      const originalTransform = node.getAttribute('transform') || '';
      const existingWrapper = parentNode.tagName && String(parentNode.tagName).toLowerCase() === 'g' && parentNode.getAttribute('data-interactive-wrapper') === 'true';

      node.style.transition = 'filter 200ms ease-out, transform 200ms cubic-bezier(0.22, 1, 0.36, 1)';
      node.style.transformBox = 'fill-box';
      node.style.transformOrigin = '50% 50%';

      if (existingWrapper) {
        return { targetNode: parentNode, visualNode: node };
      }

      wrapper.setAttribute('data-interactive-wrapper', 'true');
      if (originalTransform) wrapper.setAttribute('transform', originalTransform);
      node.removeAttribute('transform');
      parentNode.insertBefore(wrapper, node);
      wrapper.appendChild(node);

      return { targetNode: wrapper, visualNode: node };
    }

    function bindStep1LikeHover(targetNode, visualNode, unitLabel, options = {}) {
      if (!targetNode || !visualNode) return;

      const tooltip = document.getElementById('aptTooltip');
      const tooltipText = document.getElementById('aptTooltipText');
      const disableScale = Boolean(options.disableScale);
      const hoverFilter = disableScale
        ? 'brightness(1.06) drop-shadow(0 0 8px rgba(19,185,139,0.6))'
        : 'brightness(1.1) drop-shadow(0 0 10px rgba(19,185,139,0.78)) drop-shadow(0 0 22px rgba(19,185,139,0.32))';

      const showHover = (e) => {
        visualNode.style.transform = disableScale ? '' : 'scale(1.025)';
        visualNode.style.filter = hoverFilter;
        if (unitLabel && tooltip && tooltipText) {
          tooltipText.textContent = unitLabel;
          tooltip.style.left = ((e ? e.clientX : 0) + 16) + 'px';
          tooltip.style.top  = ((e ? e.clientY : 0) - 42) + 'px';
          tooltip.classList.add('visible');
        }
      };

      const moveTooltip = (e) => {
        if (unitLabel && tooltip) {
          tooltip.style.left = (e.clientX + 16) + 'px';
          tooltip.style.top  = (e.clientY - 42) + 'px';
        }
      };

      const hideHover = () => {
        visualNode.style.transform = '';
        visualNode.style.filter = '';
        if (tooltip) tooltip.classList.remove('visible');
      };

      targetNode.addEventListener('mouseenter', showHover);
      targetNode.addEventListener('mousemove', moveTooltip);
      targetNode.addEventListener('mouseleave', hideHover);
      targetNode.addEventListener('focus', showHover);
      targetNode.addEventListener('blur', hideHover);
    }

    function setupInteractiveNoBalcony(svgText, viewKey) {
      if (!heroFrontSvgStage) return false;
      activePlanViewKey = viewKey || activePlanViewKey;
      heroFrontSvgStage.innerHTML = svgText;
      heroFrontSvgStage.classList.remove('is-step-2');
      heroFrontSvgStage.classList.toggle('is-two-rooms-layout', viewKey === 'without-balcony');
      heroFrontView?.classList.remove('step-2-focus');
      heroFrontView?.classList.add('layout-selection-focus');
      const inlineSvg = heroFrontSvgStage.querySelector('svg');
      if (!inlineSvg) return false;

      inlineSvg.setAttribute('preserveAspectRatio', 'xMidYMid slice');
      if (heroFrontTitle) heroFrontTitle.textContent = 'Select a unit layout';
      if (heroFrontClose) heroFrontClose.textContent = 'Return to site map';

      const currentViewKey = viewKey;
      const openStep2 = () => {
        fetchSvgCached(getStep2MasterplanSvg(currentViewKey))
          .then((nextSvgText) => {
            setupMasterplan2RoomStep(nextSvgText, currentViewKey);
          });
      };

      let hotspots = inlineSvg.querySelectorAll('[data-front-nav], [id^="app"], [id^="APP"], [id^="App"]');
      if (!hotspots.length) {
        // Formato nuevo: IDs de letra única A-K (TipoB.svg y TipoABG.svg)
        hotspots = Array.from(inlineSvg.querySelectorAll('[id]')).filter(n => /^[A-K]$/.test(n.id));
      }

      hotspots.forEach((node) => {
        if (/^(Layer_1|Capa_1|Layer)$/i.test(node.id)) return;
        const interactiveNodes = createSvgInteractiveTarget(node);
        if (!interactiveNodes) return;
        const letter = APP_UNIT_LETTERS[node.id];
        const unitLabel = letter ? (selectedBuildingNum ? selectedBuildingNum + '-' + letter : letter) : '';
        bindStep1LikeHover(interactiveNodes.targetNode, interactiveNodes.visualNode, unitLabel, {
          disableScale: viewKey === 'without-balcony'
        });
        makeSvgElementButton(interactiveNodes.targetNode, openStep2);
      });

      return true;
    }

    function setupMasterplan2RoomStep(svgText, viewKey) {
      if (!heroFrontSvgStage) return false;
      activePlanViewKey = viewKey || activePlanViewKey;
      heroFrontSvgStage.innerHTML = svgText;
      heroFrontSvgStage.classList.add('is-step-2');
      heroFrontSvgStage.classList.remove('is-two-rooms-layout');
      heroFrontSvgStage.classList.remove('step2-animate');
      void heroFrontSvgStage.offsetWidth;
      heroFrontSvgStage.classList.add('step2-animate');
      heroFrontView?.classList.add('step-2-focus');
      heroFrontView?.classList.remove('layout-selection-focus');
      const inlineSvg = heroFrontSvgStage.querySelector('svg');
      if (!inlineSvg) return false;

      inlineSvg.setAttribute('preserveAspectRatio', 'xMidYMid meet');
      if (heroFrontTitle) heroFrontTitle.textContent = 'Click on the area you want to see';
      if (heroFrontClose) heroFrontClose.textContent = 'Back to layout';

      const sceneNodes = inlineSvg.querySelectorAll('[id]');
      sceneNodes.forEach((node) => {
        if (/^(Layer_1|Capa_1|Layer|Background)$/i.test(node.id)) return;
        const sceneId = resolveTourSceneId(node.getAttribute('data-scene') || node.id || '');
        if (!sceneId) return;

        const targetScene = getSceneById(sceneId);
        const areaLabel = targetScene ? targetScene.title : sceneId;
        node.setAttribute('aria-label', areaLabel);

        const hideAreaHint = () => {
          if (!heroFrontAreaTooltip) return;
          heroFrontAreaTooltip.classList.remove('visible');
          heroFrontAreaTooltip.setAttribute('aria-hidden', 'true');
          heroFrontAreaTooltip.textContent = '';
        };

        const placeAreaHint = (x, y) => {
          if (!heroFrontAreaTooltip) return;
          heroFrontAreaTooltip.textContent = areaLabel;
          heroFrontAreaTooltip.style.left = (x + 16) + 'px';
          heroFrontAreaTooltip.style.top = (y - 40) + 'px';
          heroFrontAreaTooltip.classList.add('visible');
          heroFrontAreaTooltip.setAttribute('aria-hidden', 'false');
        };

        node.addEventListener('mouseenter', (e) => {
          placeAreaHint(e.clientX, e.clientY);
        });

        node.addEventListener('mousemove', (e) => {
          placeAreaHint(e.clientX, e.clientY);
        });

        node.addEventListener('mouseleave', hideAreaHint);

        node.addEventListener('focus', () => {
          const rect = node.getBoundingClientRect();
          placeAreaHint(rect.left + rect.width / 2, rect.top + rect.height / 2);
        });

        node.addEventListener('blur', hideAreaHint);

        makeSvgElementButton(node, () => {
          hideHeroFrontView();
          window.setTimeout(() => openTourAtScene(sceneId), 120);
        });
      });

      return true;
    }

    function showHeroFrontView(viewKey) {
      const view = heroApartmentViews[viewKey];
      if (!view || !heroRoot || !heroFrontView || !heroFrontImage) return;
      activePlanViewKey = viewKey;

      if (heroFrontTitle) heroFrontTitle.textContent = view.title;

      if (view.interactive && heroFrontSvgStage) {
        fetchSvgCached(view.image)
          .then((svgText) => {
            const ok = setupInteractiveNoBalcony(svgText, viewKey);
            if (ok) {
              heroFrontImage.style.display = 'none';
              heroFrontSvgStage.classList.add('active');
              heroFrontSvgStage.setAttribute('aria-hidden', 'false');
              revealHeroFrontView();
              return;
            }
            heroFrontSvgStage.classList.remove('active');
            heroFrontSvgStage.setAttribute('aria-hidden', 'true');
          })
          .catch(() => {
            heroFrontSvgStage.classList.remove('active');
            heroFrontSvgStage.classList.remove('is-two-rooms-layout');
            heroFrontSvgStage.setAttribute('aria-hidden', 'true');
            heroFrontView.classList.remove('layout-selection-focus');
            heroFrontView.classList.remove('step-2-focus');
            heroFrontImage.style.display = '';
            heroFrontImage.src = view.image;
            heroFrontImage.alt = view.title;
            revealHeroFrontView();
          });
        return;
      }

      heroFrontSvgStage?.classList.remove('active');
      heroFrontSvgStage?.classList.remove('is-step-2');
      heroFrontSvgStage?.classList.remove('is-two-rooms-layout');
      heroFrontView.classList.remove('layout-selection-focus');
      heroFrontView.classList.remove('step-2-focus');
      heroFrontSvgStage?.setAttribute('aria-hidden', 'true');
      if (heroFrontSvgStage) heroFrontSvgStage.innerHTML = '';
      heroFrontImage.style.display = '';

      const img = new Image();
      img.src = view.image;
      const reveal = () => {
        heroFrontImage.src = view.image;
        heroFrontImage.alt = view.title;
        revealHeroFrontView();
      };
      if (img.complete && img.naturalWidth > 0) {
        reveal();
      } else {
        img.onload = reveal;
        img.onerror = reveal;
      }
    }

    function hideHeroFrontView() {
      if (!heroRoot || !heroFrontView) return;
      heroFrontView.classList.remove('active');
      heroFrontView.setAttribute('aria-hidden', 'true');
      if (heroFrontSvgStage) {
        heroFrontSvgStage.classList.remove('active');
        heroFrontSvgStage.classList.remove('is-step-2');
        heroFrontSvgStage.classList.remove('is-two-rooms-layout');
        heroFrontSvgStage.classList.remove('step2-animate');
        heroFrontSvgStage.setAttribute('aria-hidden', 'true');
        heroFrontSvgStage.innerHTML = '';
      }
      if (heroFrontAreaTooltip) {
        heroFrontAreaTooltip.classList.remove('visible');
        heroFrontAreaTooltip.setAttribute('aria-hidden', 'true');
        heroFrontAreaTooltip.textContent = '';
      }
      if (heroFrontTitle) heroFrontTitle.textContent = '';
      heroFrontView.classList.remove('layout-selection-focus');
      heroFrontView.classList.remove('step-2-focus');
      if (heroFrontImage) heroFrontImage.style.display = '';
      document.body.style.overflow = '';

      // Let overlay fade out before reversing map zoom
      setTimeout(() => heroRoot.classList.remove('is-front-view'), 420);
    }

    const fallbackApartmentIds = [
      'app1', 'app2-T', 'app3', 'app4-T', 'app5', 'app6-T', 'app7-T', 'app8', 'app9-T', 'app10',
      'app11-T', 'app12-T', 'app13', 'app14-T', 'app15', 'app16-T', 'app17', 'app18-T', 'app19', 'app20-T',
      'app21-T', 'app22', 'app23', 'app24', 'app25-T', 'app26-T', 'app27', 'app28', 'app29-T', 'app30',
      'app31-T', 'app32-T', 'app33', 'app34-T'
    ];

    const MAP_HOTSPOT_CONFIG = {
      entrance: {
        label: 'entrance',
        sceneId: 'balcon-exterior'
      },
      pool: {
        label: 'pool',
        sceneId: 'balcon-exterior'
      },
      basketball: {
        label: 'basketball',
        sceneId: 'balcon-exterior'
      },
      padel: {
        label: 'padel',
        sceneId: 'balcon-exterior'
      },
      shofoball: {
        label: 'shofoball',
        sceneId: 'balcon-exterior'
      }
    };

    function getApartmentElements(svgContainer) {
      if (!svgContainer) return [];

      const identifiedUnits = Array.from(
        svgContainer.querySelectorAll('[id^="app"], [id^="APP"], [data-unit-id]')
      );
      const hotspotNodes = Array.from(svgContainer.querySelectorAll('[id]')).filter((node) => {
        const nodeId = String(node.getAttribute('id') || '').toLowerCase();
        return !!MAP_HOTSPOT_CONFIG[nodeId];
      });

      if (identifiedUnits.length || hotspotNodes.length) {
        return Array.from(new Set([...identifiedUnits, ...hotspotNodes]));
      }

      const imageUnits = Array.from(svgContainer.querySelectorAll('svg image')).filter((node) => {
        const name = String(node.getAttribute('data-name') || '').toLowerCase();
        return name !== 'land';
      });

      if (imageUnits.length !== fallbackApartmentIds.length) return [];

      imageUnits.forEach((node, index) => {
        const fallbackId = fallbackApartmentIds[index];
        node.setAttribute('data-unit-id', fallbackId);
        if (!node.getAttribute('id')) {
          node.setAttribute('id', fallbackId);
        }
      });

      return imageUnits;
    }

    // Attach click handlers to all elements with ID starting with "app"
    function initSvgApartmentClicks() {
      const svgContainer = document.querySelector('#svgContainer');
      if (!svgContainer) return;

      const tooltip = document.getElementById('aptTooltip');
      const tooltipText = document.getElementById('aptTooltipText');

      const apartmentElements = getApartmentElements(svgContainer);
      if (!apartmentElements.length) return;

      // Intro attention pulse — staggered so units glow one by one
      apartmentElements.forEach((el, i) => {
        setTimeout(() => el.classList.add('app-intro-pulse'), 700 + i * 55);
      });

      apartmentElements.forEach(element => {
        const id = element.getAttribute('data-unit-id') || element.getAttribute('id') || '';
        const normalizedId = String(id).toLowerCase();
        const hotspotConfig = MAP_HOTSPOT_CONFIG[normalizedId] || null;
        const isApartmentUnit = /^app\d+/i.test(id);

        // Ocultar y saltar app10 (eliminado del plan real)
        if (/^app10$/i.test(id)) {
          element.style.display = 'none';
          element.style.pointerEvents = 'none';
          return;
        }

        const realNum = isApartmentUnit ? (BUILDING_NUMBER_MAP[id] || id.replace(/[^0-9]/g, '')) : '';
        const viewKey = THREE_ROOM_BUILDINGS.has(realNum) ? 'with-balcony' : 'without-balcony';
        const apartmentLabel = isApartmentUnit
          ? (viewKey === 'with-balcony' ? '3 Rooms' : '2 Rooms')
          : (hotspotConfig ? hotspotConfig.label : 'Hotspot');

        // Wrap <image> in a <g> that takes the positioning transform.
        // The <image> is left with no transform so CSS scale works from its center.
        const ns = 'http://www.w3.org/2000/svg';
        const g = document.createElementNS(ns, 'g');
        const origTransform = element.getAttribute('transform') || '';
        g.setAttribute('transform', origTransform);
        element.removeAttribute('transform');
        element.parentNode.insertBefore(g, element);
        g.appendChild(element);

        g.style.cursor = 'pointer';
        g.setAttribute('role', 'button');
        g.setAttribute('tabindex', '0');
        if (isApartmentUnit) {
          g.setAttribute('aria-label', 'Building ' + realNum + ' · ' + apartmentLabel);
        } else {
          g.setAttribute('aria-label', apartmentLabel);
        }

        g.addEventListener('mouseenter', (e) => {
          // Precarga en hover — da tiempo al fetch antes del clic sin desperdiciar ancho de banda
          if (isApartmentUnit) {
            const prefetchView = heroApartmentViews[viewKey];
            if (prefetchView) {
              fetchSvgCached(prefetchView.image);
              fetchSvgCached(prefetchView.step2Svg);
            }
          }
          element.style.transform = 'scale(1.025)';
          element.style.filter = 'brightness(1.1) drop-shadow(0 0 10px rgba(19,185,139,0.78)) drop-shadow(0 0 22px rgba(19,185,139,0.32))';
          if (!tooltip || !tooltipText) return;
          tooltipText.textContent = isApartmentUnit
            ? ('Building ' + realNum + '  ·  ' + apartmentLabel + ' ')
            : apartmentLabel;
          tooltip.style.left = (e.clientX + 16) + 'px';
          tooltip.style.top  = (e.clientY - 42) + 'px';
          tooltip.classList.add('visible');
        });
        g.addEventListener('mousemove', (e) => {
          if (tooltip) {
            tooltip.style.left = (e.clientX + 16) + 'px';
            tooltip.style.top  = (e.clientY - 42) + 'px';
          }
        });
        g.addEventListener('mouseleave', () => {
          element.style.transform = '';
          element.style.filter = '';
          if (tooltip) tooltip.classList.remove('visible');
        });

        const openUnit = () => {
          if (isApartmentUnit) {
            selectedBuildingNum = realNum;
            showHeroFrontView(viewKey);
            return;
          }

          const targetSceneId = hotspotConfig && hotspotConfig.sceneId
            ? resolveTourSceneId(hotspotConfig.sceneId)
            : '';
          if (targetSceneId) {
            openTourAtScene(targetSceneId);
          }
        };
        g.addEventListener('click', openUnit);
        g.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openUnit();
          }
        });
      });
    }

    function loadInteractiveHeroMap() {
      const svgContainer = document.querySelector('#svgContainer');
      const shouldUseMobileMasterPlan = window.matchMedia('(max-width: 768px)').matches;
      if (svgContainer && !shouldUseMobileMasterPlan) {
        if (svgContainer.dataset.loaded === 'true' || svgContainer.dataset.loading === 'true') return;
        svgContainer.dataset.loading = 'true';

        fetch('img/tourguiado/SERENAS%20SITE%20LAND%20reduce.svg')
          .then(r => r.text())
          .then(svgText => {
            svgContainer.innerHTML = svgText;
            const loadedSvg = svgContainer.querySelector('svg');
            if (loadedSvg) {
              loadedSvg.setAttribute('preserveAspectRatio', 'xMidYMid slice');
            }
            svgContainer.dataset.loading = 'false';
            svgContainer.dataset.loaded = 'true';
            const loadingEl = document.getElementById('heroMapLoading');
            if (loadingEl) loadingEl.classList.add('hidden');
            initSvgApartmentClicks();

            // Mapa visible → iniciar descarga de los SVGs de layout en background.
            // requestIdleCallback garantiza que no compite con nada crítico.
            const startBgPrefetch = () => {
              Object.values(heroApartmentViews).forEach((v) => {
                prefetchSvgBackground(v.image);
                prefetchSvgBackground(v.step2Svg);
              });
            };
            if ('requestIdleCallback' in window) {
              window.requestIdleCallback(startBgPrefetch, { timeout: 3000 });
            } else {
              setTimeout(startBgPrefetch, 1500);
            }
          })
          .catch(() => {
            svgContainer.dataset.loading = '';
          });
      } else if (svgContainer) {
        svgContainer.innerHTML = '';
      }
    }

    // Load overlay after first render so the hero image appears immediately
    document.addEventListener('DOMContentLoaded', () => {
      requestAnimationFrame(() => {
        if ('requestIdleCallback' in window) {
          window.requestIdleCallback(loadInteractiveHeroMap, { timeout: 1200 });
        } else {
          setTimeout(loadInteractiveHeroMap, 180);
        }
      });
    });

    // Hero close button — si estamos en step 2 vuelve al step 1, si no cierra todo
    if (heroFrontClose) {
      heroFrontClose.addEventListener('click', () => {
        const inStep2 = heroFrontSvgStage && heroFrontSvgStage.classList.contains('is-step-2');
        if (inStep2) {
          showHeroFrontView(activePlanViewKey);
        } else {
          hideHeroFrontView();
        }
      });
    }
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && heroFrontView && heroFrontView.classList.contains('active')) {
        const inStep2 = heroFrontSvgStage && heroFrontSvgStage.classList.contains('is-step-2');
        if (inStep2) {
          showHeroFrontView(activePlanViewKey);
        } else {
          hideHeroFrontView();
        }
      }
    });

    // 360 Tour code (unchanged from original)
    // ─────────────────────────────────────────────────────────────────
    // Posiciones calculadas con fórmula de mapeo equirectangular:
    //   x = -sin(ángulo_rad) × 5 ,  z = -cos(ángulo_rad) × 5
    //   ángulo = (posición_horizontal_en_imagen%) × 3.6°
    // Con sky rotation '0 -90 0': borde izquierdo de la imagen = frente (-Z)
    // ─────────────────────────────────────────────────────────────────
    const tourScenes = [
      {
        id: 'balcon-exterior',
        title: 'Balcony',
        image: 'img/tourguiado/renders/exteriores/SERENAS_BALCONY%20360%20-%2033B.webp',
        mobileImage: 'img/tourguiado/renders/exteriores/SERENAS_BALCONY%20360%20-%2033B.webp',
        rotation: '0 -90 0',
        hotspots: [
          { to: 'sala', label: 'Living Room', position: '0 0 4' }
        ]
      },
      {
        id: 'sala',
        title: 'Living Room',
        image: 'img/tourguiado/renders/interiores/Sala.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Sala.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Pasillo: arco/puerta visible en borde izquierdo (~3%) → casi al frente
       { to: 'pasillo', label: 'Door', position: '-4.2 0.2 2.3' },
          // Comedor: mesa de comedor visible al (~24%) → a la izquierda
          { to: 'comedor', label: 'Dining Room', position: '-3.2 0.6 -3.5' },
          // Balcón: puerta/cortinas con luz natural (~72%) → a la derecha
          { to: 'balcon-exterior', label: 'Balcony', position: '3.4 0.4 3.4' },
          { to: 'pasillo-2', label: 'Hallway', position: '0 1.7 -4.5' }
        ]
      },
      {
        id: 'comedor',
        title: 'Dining Room',
        image: 'img/tourguiado/renders/interiores/Comedor.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Comedor.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Cocina: zona de cocina visible al (~8%) → adelante-izquierda
          { to: 'cocina', label: 'Kitchen', position: '-3.3 0.6 3.4' },
          // Sala: apertura hacia sala/living visible al (~70%) → derecha-detrás
          { to: 'sala', label: 'Living Room', position: '0.1 0.7 -4.7' }
        ]
      },
      {
        id: 'cocina',
        title: 'Kitchen',
        image: 'img/tourguiado/renders/interiores/Cocina.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Cocina.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Comedor: arco/apertura hacia comedor visible al (~48%) → detrás
          { to: 'comedor', label: 'Dining Room', position: '-2.5 0.6 -4' }
        ]
      },
      {
        id: 'pasillo',
        title: 'Door',
        image: 'img/tourguiado/renders/interiores/Pasillo.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Pasillo.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Dormitorio Principal: arco abierto grande (~3-5%) → casi al frente
          { to: 'dormitorio-principal', label: 'Master Bedroom', position: '-4.8 -0.6 0.2' },
          // Pasillo 2: rama lateral del corredor (~20%) → izquierda-adelante
      
          // Sala: apertura hacia sala/comedor visible (~60%) → derecha-detrás
          { to: 'sala', label: 'Living Room', position: '3 0 4' },
            { to: 'comedor', label: 'Dining Room', position: '2.9 0.3 -3.8' },
          // Balcón: puerta/cortinas con luz natural (~72%) → a la derecha
          { to: 'balcon-exterior', label: 'Balcony', position: '2 0.2 4.4' },
          { to: 'pasillo-2', label: 'Hallway', position: '4.5 0.8 -1.5' }
        ]
      },
      {
        id: 'dormitorio-principal',
        title: 'Master Bedroom',
        image: 'img/tourguiado/renders/interiores/Dormitorio%20principal.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Dormitorio%20principal.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Pasillo: puerta de salida al pasillo (~5%) → casi al frente-izquierda
          { to: 'pasillo', label: 'Hallway', position: '-1.2 0.1 4.7' },
          // Baño: puerta del baño en suite visible (~72%) → a la derecha
        
           { to: 'wc', label: 'WC', position: '3.5 -0.4 3.3' }
        ]
      },
      {
        id: 'bano-principal',
        title: 'Master Bathroom',
        image: 'img/tourguiado/renders/interiores/Baño.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Baño.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta de regreso al dormitorio principal (~5%) → casi al frente
          { to: 'dormitorio-principal', label: 'Bedroom', position: '-0.8 -1 4.6' }
        ]
      },
      {
        id: 'dormitorio-a',
        title: 'Bedroom A',
        image: 'img/tourguiado/renders/interiores/Dormitorio%20A.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Dormitorio%20A.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta al pasillo 2 visible (~10%) → adelante-izquierda
          { to: 'pasillo-2', label: 'Hallway', position: '-4.3 0.5 -2' }
        ]
      },
      {
        id: 'pasillo-2',
        title: 'Hallway 2',
        image: 'img/tourguiado/renders/interiores/Pasillo2.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Pasillo2.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Dormitorio B: puerta lateral izquierda (~3%) → casi al frente
          { to: 'dormitorio-b', label: 'Bedroom B', position: '4.3 -1.4 1.7' },
          // Dormitorio A: segunda puerta izquierda (~18%) → izquierda-adelante
          { to: 'dormitorio-a', label: 'Bedroom A', position: '-4.1 -1.9 -1.8' },
          // Pasillo 1 / Sala: apertura central hacia área social (~43%) → izquierda-detrás
          { to: 'pasillo', label: 'Hallway', position: '2.5 -1.7 -3.7' },
          // Baño 2: puerta derecha (~72%) → derecha-detrás
          { to: 'bano-2', label: 'Bathroom 2', position: '-0.7 -2 4.3' },
          // WC: puerta extremo derecho (~88%) → derecha-adelante
          { to: 'wc', label: 'WC', position: '4.4 -1.5 1.5' }
        ]
      },
      {
        id: 'dormitorio-b',
        title: 'Bedroom B',
        image: 'img/tourguiado/renders/interiores/Dormitorio%20B.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Dormitorio%20B.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta al pasillo 2 (~17%) → izquierda-adelante
          { to: 'pasillo-2', label: 'Hallway 2', position: '-4.4 0 -2.4' }
        ]
      },
      {
        id: 'bano-2',
        title: 'Bathroom 2',
        image: 'img/tourguiado/renders/interiores/Baño%202.webp',
        mobileImage: 'img/tourguiado/renders/interiores/Baño%202.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta abierta hacia pasillo 2 (~30%) → izquierda-detrás
          { to: 'pasillo-2', label: 'Hallway 2', position: '-1 -1.4 -4.5' }
        ]
      },
      {
        id: 'wc',
        title: 'WC',
        image: 'img/tourguiado/renders/interiores/WC.webp',
        mobileImage: 'img/tourguiado/renders/interiores/WC.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta de regreso al pasillo 2 (~40%) → izquierda-detrás
          { to: 'pasillo-2', label: 'Hallway 2', position: '1.4 -1.2 -4.4' },
          { to: 'dormitorio-principal', label: 'Room', position: '-1.2 -1.1 4.5' },
            { to: 'bano-principal', label: 'Bathroom', position: '-4.6 -1.3 0.4' }
        ]
      }
    ];

    const tourModal = document.getElementById('tourModal');
    const tourBackPlanBtn = document.getElementById('tourBackPlanBtn');
    const tourCloseBtn = document.getElementById('tourCloseBtn');
    const tourScene = document.getElementById('tourScene');
    let tourSky = document.getElementById('tourSky');
    let tourSkyBlend = document.getElementById('tourSkyBlend');
    const tourHotspots = document.getElementById('tourHotspots');
    const tourCamera = tourScene ? tourScene.querySelector('[camera]') : null;
    const tourSceneTitle = document.getElementById('tourSceneTitle');
    const tourStatus = document.getElementById('tourStatus');
    const tourSceneList = document.getElementById('tourSceneList');
    const tourPrevBtn = document.getElementById('tourPrevBtn');
    const tourNextBtn = document.getElementById('tourNextBtn');
    const tourHotspotToggle = document.getElementById('tourHotspotToggle');
    const tourTransitionOverlay = document.getElementById('tourTransitionOverlay');
    const tourPosToggle = document.getElementById('tourPosToggle');
    const tourPosDebug = document.getElementById('tourPosDebug');
    const tourPosDisplay = document.getElementById('tourPosDisplay');
    const tourPosCopyBtn = document.getElementById('tourPosCopyBtn');
    const tourPosFixBtn  = document.getElementById('tourPosFixBtn');
    const tourTouchHint = document.getElementById('tourTouchHint');
    const tourLoadingOverlay = document.getElementById('tourLoading');
    const tourLoadingText = document.getElementById('tourLoadingText');
    const openTourButtons = document.querySelectorAll('.js-open-tour');
    const isMobileViewport = () => window.matchMedia('(max-width: 768px)').matches;
    const isTouchViewport = () => window.matchMedia('(hover: none), (pointer: coarse)').matches;
    let isTransitioning = false;
    const SCENE_BLEND_SWAP_DELAY = 120;
    const SCENE_BLEND_TOTAL_DURATION = 800;
    const SCENE_MOVE_SWAP_DELAY = 260;
    const SCENE_MOVE_CAMERA_RESET_DELAY = 180;
    const SCENE_MOVE_TOTAL_DURATION = 980;
    const DEFAULT_TOUR_FOV = 80;
    const MIN_TOUR_FOV = 45;
    const MAX_TOUR_FOV = 95;
    const PINCH_ZOOM_STRENGTH = 0.68;
    const TOUCH_LOOK_SENSITIVITY = 0.0028;
    const MAX_TOUR_PITCH = (Math.PI / 2) - 0.08;
    let areTourHotspotsVisible = false;
    const TOUCH_HINT_STORAGE_KEY = 'tour-touch-hint-seen';
    let tourTouchHintTimeout = null;
    let tourTouchHintShowTimeout = null;
    let tourLoadingToken = 0;
    let tourEngineLoadPromise = null;
    let tourInteractionHandlersReady = false;

    const availableTourIndexes = tourScenes
      .map((scene, index) => scene.locked ? null : index)
      .filter((index) => index !== null);

    let activeTourIndex = availableTourIndexes[0] || 0;

    const tourSceneImagesByLayout = {
      'with-balcony': {
        sala: 'img/tourguiado/renders/interiores/360%20Tipo%20A/Sala-Comedor.webp',
        comedor: 'img/tourguiado/renders/interiores/360%20Tipo%20A/Sala-Comedor.webp',
        cocina: 'img/tourguiado/renders/interiores/360%20Tipo%20A/Cocina.webp',
        pasillo: 'img/tourguiado/renders/interiores/360%20Tipo%20A/Pasillo.webp',
        'dormitorio-principal': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Dormitorio%20principal.webp',
        'bano-principal': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Ba%C3%B1o.webp',
        'dormitorio-a': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Dormitorio%20A.webp',
        'pasillo-2': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Pasillo.webp',
        'dormitorio-b': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Dormitorio%20B.webp',
        'bano-2': 'img/tourguiado/renders/interiores/360%20Tipo%20A/Ba%C3%B1o%202.webp',
        wc: 'img/tourguiado/renders/interiores/360%20Tipo%20A/WC.webp'
      },
      'without-balcony': {
        sala: 'img/tourguiado/renders/interiores/360%20Tipo%20B/Sala.webp',
        comedor: 'img/tourguiado/renders/interiores/360%20Tipo%20B/Comedor.webp',
        pasillo: 'img/tourguiado/renders/interiores/360%20Tipo%20B/Pasillo.webp',
        'dormitorio-principal': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Dormitorio%201.webp',
        'bano-principal': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Ba%C3%B1o%201.webp',
        'dormitorio-a': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Dormitorio%202.webp',
        'pasillo-2': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Pasillo.webp',
        'dormitorio-b': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Dormitorio%202.webp',
        'bano-2': 'img/tourguiado/renders/interiores/360%20Tipo%20B/Ba%C3%B1o%202.webp'
      }
    };

    function getSceneImage(scene) {
      if (!scene) return '';
      const layoutImages = tourSceneImagesByLayout[activePlanViewKey] || null;
      if (layoutImages && layoutImages[scene.id]) return layoutImages[scene.id];
      return isMobileViewport() ? (scene.mobileImage || scene.image) : scene.image;
    }

    function getSceneById(id) {
      return tourScenes.find((scene) => scene.id === id) || null;
    }

    function getTourThreeCamera() {
      if (tourCamera && typeof tourCamera.getObject3D === 'function') {
        return tourCamera.getObject3D('camera');
      }
      return tourScene && tourScene.camera ? tourScene.camera : null;
    }

    function getTourLookControls() {
      return tourCamera && tourCamera.components ? tourCamera.components['look-controls'] : null;
    }

    function ensureTourEngineLoaded() {
      if (!tourScene) return Promise.reject(new Error('Tour scene not found'));

      const waitForScene = () => new Promise((resolve) => {
        const finish = () => {
          if (!tourInteractionHandlersReady) {
            setupClickPositionPicker();
            setupTouchZoom();
            tourInteractionHandlersReady = true;
          }
          resolve();
        };

        if (tourScene.hasLoaded) {
          finish();
          return;
        }

        tourScene.addEventListener('loaded', finish, { once: true });
      });

      if (window.AFRAME) return waitForScene();

      if (!tourEngineLoadPromise) {
        tourEngineLoadPromise = new Promise((resolve, reject) => {
          const existingScript = document.querySelector('script[data-tour-aframe="true"]');
          const script = existingScript || document.createElement('script');

          script.addEventListener('load', () => waitForScene().then(resolve), { once: true });
          script.addEventListener('error', reject, { once: true });

          if (!existingScript) {
            script.src = 'https://aframe.io/releases/1.6.0/aframe.min.js';
            script.async = true;
            script.dataset.tourAframe = 'true';
            document.head.appendChild(script);
          }
        });
      }

      return tourEngineLoadPromise;
    }

    function syncTourCameraRotation() {
      const lookControls = getTourLookControls();
      if (!lookControls || !lookControls.pitchObject || !lookControls.yawObject || !tourCamera) return;

      const pitchDeg = lookControls.pitchObject.rotation.x * (180 / Math.PI);
      const yawDeg = lookControls.yawObject.rotation.y * (180 / Math.PI);
      tourCamera.setAttribute('rotation', `${pitchDeg} ${yawDeg} 0`);
    }

    function setTourRotation(pitchDeg, yawDeg) {
      const lookControls = getTourLookControls();
      const pitchRad = (Number(pitchDeg) || 0) * (Math.PI / 180);
      const yawRad = (Number(yawDeg) || 0) * (Math.PI / 180);

      if (lookControls && lookControls.pitchObject && lookControls.yawObject) {
        lookControls.pitchObject.rotation.x = pitchRad;
        lookControls.yawObject.rotation.y = yawRad;
      }
      if (tourCamera) {
        tourCamera.setAttribute('rotation', `${Number(pitchDeg) || 0} ${Number(yawDeg) || 0} 0`);
      }
    }

    function setTourFov(nextFov) {
      const camera3D = getTourThreeCamera();
      const clampedFov = Math.max(MIN_TOUR_FOV, Math.min(MAX_TOUR_FOV, Number(nextFov) || DEFAULT_TOUR_FOV));
      if (tourCamera) {
        tourCamera.setAttribute('camera', 'fov', clampedFov);
      }
      if (camera3D) {
        camera3D.fov = clampedFov;
        camera3D.updateProjectionMatrix();
      }
    }

    function resetTourZoom() {
      setTourFov(DEFAULT_TOUR_FOV);
    }

    function hideTourTouchHint() {
      if (tourTouchHintShowTimeout) {
        window.clearTimeout(tourTouchHintShowTimeout);
        tourTouchHintShowTimeout = null;
      }
      if (tourTouchHintTimeout) {
        window.clearTimeout(tourTouchHintTimeout);
        tourTouchHintTimeout = null;
      }
      if (!tourTouchHint) return;
      tourTouchHint.classList.remove('show');
      tourTouchHint.setAttribute('aria-hidden', 'true');
    }

    function showTourTouchHint() {
      if (!tourTouchHint || !isTouchViewport() || posDebugActive) return;
      try {
        if (window.sessionStorage && sessionStorage.getItem(TOUCH_HINT_STORAGE_KEY) === '1') return;
      } catch (error) {
        // Ignore storage access issues and still show the hint.
      }

      try {
        if (window.sessionStorage) sessionStorage.setItem(TOUCH_HINT_STORAGE_KEY, '1');
      } catch (error) {
        // Ignore storage access issues.
      }

      if (tourTouchHintShowTimeout) {
        window.clearTimeout(tourTouchHintShowTimeout);
      }
      if (tourTouchHintTimeout) {
        window.clearTimeout(tourTouchHintTimeout);
      }

      tourTouchHintShowTimeout = window.setTimeout(() => {
        if (!tourTouchHint) return;
        tourTouchHint.classList.add('show');
        tourTouchHint.setAttribute('aria-hidden', 'false');
        tourTouchHintTimeout = window.setTimeout(hideTourTouchHint, 3600);
      }, 260);
    }

    function setControlsDisabled(disabled) {
      if (tourPrevBtn) tourPrevBtn.disabled = disabled;
      if (tourNextBtn) tourNextBtn.disabled = disabled;
      if (tourHotspotToggle) tourHotspotToggle.disabled = disabled;
      if (!tourSceneList) return;
      tourSceneList.querySelectorAll('button').forEach((button) => {
        button.disabled = disabled || button.classList.contains('locked');
      });
    }

    function updateHotspotToggleUi() {
      if (!tourHotspotToggle) return;
      const isVisible = areTourHotspotsVisible;
      tourHotspotToggle.textContent = isVisible ? 'Hide hotspots' : 'Show hotspots';
      tourHotspotToggle.setAttribute('aria-pressed', isVisible ? 'true' : 'false');
      tourHotspotToggle.classList.toggle('is-off', !isVisible);
    }

    function renderHotspots(scene) {
      if (!tourHotspots) return;
      tourHotspots.innerHTML = '';
      if (!areTourHotspotsVisible) {
        tourHotspots.setAttribute('visible', 'false');
        return;
      }
      tourHotspots.setAttribute('visible', 'true');

      (scene.hotspots || []).forEach((spot) => {
        const targetScene = getSceneById(spot.to);
        if (!targetScene || targetScene.locked) return;

        const parts = String(spot.position || '').trim().split(/\s+/).map(parseFloat);
        const hx = Number.isFinite(parts[0]) ? parts[0] : 0;
        const hy = Number.isFinite(parts[1]) ? parts[1] : 0;
        const hz = Number.isFinite(parts[2]) ? parts[2] : -1;

        let fx;
        let fy;
        let fz;

        if (Math.abs(hy) > 0.001) {
          // Nuevo modo: conserva la dirección 3D completa (yaw + pitch)
          // para que coincida con el pin/crosshair al fijar coordenadas.
          const dist3 = Math.sqrt(hx * hx + hy * hy + hz * hz) || 1;
          const scale3 = 2.6 / dist3;
          fx = hx * scale3;
          fy = hy * scale3;
          fz = hz * scale3;
        } else {
          // Modo legacy: hotspots antiguos con y=0 se anclan al suelo.
          const dist = Math.sqrt(hx * hx + hz * hz) || 1;
          const scale = 2.6 / dist;
          fx = hx * scale;
          fz = hz * scale;
          fy = -1.55; // nivel del suelo (cámara en y=1.6)
        }

        // Ángulo de rotación del grupo → apunta hacia el destino
        const groupAngle = Math.atan2(hx, -hz) * (180 / Math.PI);

        // Ángulo del texto → siempre mira hacia la cámara (origen 0,1.6,0)
        const textAngle = Math.atan2(-fx, -fz) * (180 / Math.PI);

        const goToTarget = () => {
          if (posDebugActive) return; // modo clic activo: no navegar
          const targetIndex = tourScenes.findIndex((item) => item.id === spot.to);
          if (targetIndex >= 0) walkToScene(targetIndex, spot.position);
        };

        // ── Hotspot estilo Google Earth (beacon brillante) ──
        const group = document.createElement('a-entity');
        group.setAttribute('position', `${fx.toFixed(3)} ${fy} ${fz.toFixed(3)}`);
        group.setAttribute('rotation', `0 ${groupAngle.toFixed(1)} 0`);
        group.setAttribute('animation__float', 'property: position; dir: alternate; dur: 1400; easing: easeInOutSine; loop: true; to: ' + fx.toFixed(3) + ' ' + (fy + 0.05).toFixed(3) + ' ' + fz.toFixed(3));

        // Glow base suave (sin disco oscuro)
        const groundGlow = document.createElement('a-circle');
        groundGlow.setAttribute('radius', '0.3');
        groundGlow.setAttribute('rotation', '-90 0 0');
        groundGlow.setAttribute('position', '0 0.008 0');
        groundGlow.setAttribute('material', 'color: #dff3ff; opacity: 0.16; transparent: true; shader: flat; side: double; depthWrite: false');

        // Anillo exterior con pulso
        const pulseRing = document.createElement('a-ring');
        pulseRing.setAttribute('radius-inner', '0.18');
        pulseRing.setAttribute('radius-outer', '0.24');
        pulseRing.setAttribute('rotation', '-90 0 0');
        pulseRing.setAttribute('position', '0 0.012 0');
        pulseRing.setAttribute('material', 'color: #ffffff; opacity: 0.55; transparent: true; shader: flat; side: double; depthWrite: false');
        pulseRing.setAttribute('animation__scale', 'property: scale; dir: normal; dur: 1350; easing: easeOutCubic; loop: true; from: 1 1 1; to: 1.95 1.95 1.95');
        pulseRing.setAttribute('animation__fade', 'property: material.opacity; dir: normal; dur: 1350; easing: easeOutCubic; loop: true; from: 0.58; to: 0');
        pulseRing.classList.add('tour-hotspot');
        pulseRing.addEventListener('click', goToTarget);

        // Núcleo del pin
        const core = document.createElement('a-sphere');
        core.setAttribute('radius', '0.14');
        core.setAttribute('position', '0 0.34 0');
        core.setAttribute('material', 'color: #f4fbff; opacity: 0.96; transparent: true; shader: flat; side: double; depthWrite: false');
        core.setAttribute('animation__bob', 'property: position; dir: alternate; dur: 980; easing: easeInOutSine; loop: true; to: 0 0.43 0');
        core.classList.add('tour-hotspot');
        core.addEventListener('click', goToTarget);

        // Tallo de anclaje al suelo
        const stem = document.createElement('a-cylinder');
        stem.setAttribute('radius', '0.018');
        stem.setAttribute('height', '0.28');
        stem.setAttribute('position', '0 0.15 0');
        stem.setAttribute('material', 'color: #ffffff; opacity: 0.48; transparent: true; shader: flat; depthWrite: false');

        // Brillo interno (detalle)
        const spark = document.createElement('a-sphere');
        spark.setAttribute('radius', '0.04');
        spark.setAttribute('position', '-0.03 0.36 0.1');
        spark.setAttribute('material', 'color: #ffffff; opacity: 0.9; transparent: true; shader: flat; depthWrite: false');
        spark.setAttribute('animation__twinkle', 'property: material.opacity; dir: alternate; dur: 520; easing: easeInOutSine; loop: true; to: 0.35');

        // Zona de click invisible (esfera amplia)
        const hitArea = document.createElement('a-sphere');
        hitArea.setAttribute('radius', '0.58');
        hitArea.setAttribute('position', '0 0.3 0');
        hitArea.setAttribute('material', 'opacity: 0.001; transparent: true');
        hitArea.classList.add('tour-hotspot');
        hitArea.addEventListener('click', goToTarget);

        group.appendChild(groundGlow);
        group.appendChild(pulseRing);
        group.appendChild(stem);
        group.appendChild(core);
        group.appendChild(spark);
        group.appendChild(hitArea);
        tourHotspots.appendChild(group);

        // ── Etiqueta del nombre (fuera del grupo, mira siempre a la cámara) ──
        const labelWrapper = document.createElement('a-entity');
        labelWrapper.setAttribute('position', `${fx.toFixed(3)} ${(fy + 1.05).toFixed(3)} ${fz.toFixed(3)}`);
        labelWrapper.setAttribute('rotation', `0 ${textAngle.toFixed(1)} 0`);

        const label = document.createElement('a-text');
        label.setAttribute('value', spot.label || targetScene.title);
        label.setAttribute('align', 'center');
        label.setAttribute('color', '#ffffff');
        label.setAttribute('width', '2.5');
        label.setAttribute('side', 'double');
        label.setAttribute('wrap-count', '18');

        labelWrapper.appendChild(label);
        tourHotspots.appendChild(labelWrapper);
      });
    }

    function renderSceneButtons() {
      if (!tourSceneList) return;
      tourSceneList.innerHTML = '';

      tourScenes.forEach((scene, index) => {
        const button = document.createElement('button');
        const isLocked = Boolean(scene.locked);
        button.type = 'button';
        button.className = 'tour-scene-pill' + (index === activeTourIndex ? ' active' : '') + (isLocked ? ' locked' : '');
        button.textContent = scene.title + (isLocked ? ' - Locked' : '');
        button.setAttribute('aria-label', isLocked ? scene.title + ' locked' : 'Open ' + scene.title);
        button.disabled = isLocked;
        if (!isLocked) {
          button.addEventListener('click', () => runSceneBlendTransition(index, true));
        }
        tourSceneList.appendChild(button);
      });
    }

    function refreshSceneViewport() {
      if (!tourScene || !tourScene.renderer) return;
      try {
        if (typeof tourScene.resize === 'function') {
          tourScene.resize();
        }
        if (typeof tourScene.renderer.setSize === 'function') {
          tourScene.renderer.setPixelRatio(window.devicePixelRatio || 1);
          tourScene.renderer.setSize(window.innerWidth, window.innerHeight, false);
        }
      } catch (e) {
        // Renderer not fully initialized yet — safe to ignore
      }
    }

    function setSkyMaterial(targetSky, opacity, transparent) {
      if (!targetSky) return;
      targetSky.setAttribute(
        'material',
        'shader: flat; side: back; fog: false; transparent: ' + (transparent ? 'true' : 'false') + '; opacity: ' + opacity
      );
    }

    function beginTourLoading(message = 'Loading 360...') {
      if (!tourLoadingOverlay) return 0;
      tourLoadingToken += 1;
      if (tourLoadingText) tourLoadingText.textContent = message;
      tourLoadingOverlay.classList.add('active');
      tourLoadingOverlay.setAttribute('aria-hidden', 'false');
      return tourLoadingToken;
    }

    function endTourLoading(token) {
      if (!tourLoadingOverlay) return;
      if (token && token !== tourLoadingToken) return;
      tourLoadingOverlay.classList.remove('active');
      tourLoadingOverlay.setAttribute('aria-hidden', 'true');
    }

    function replaceSkyTexture(source, rotation, options = {}) {
      if (!tourScene || !tourSky || !tourSkyBlend) return;

      const crossfade = Boolean(options.crossfade);
      const fadeDuration = Number(options.fadeDuration) > 0 ? Number(options.fadeDuration) : 320;
      const loadingToken = beginTourLoading('Loading scene...');
      const activeSky = tourSky;
      const incomingSky = tourSkyBlend;

      // Preload image into memory first to avoid any flash/halo during swap
      const preloader = new Image();
      preloader.crossOrigin = 'anonymous';
      preloader.onload = () => {
        if (!activeSky || !incomingSky) return;

        const applyTextureSettings = (targetSky) => (event) => {
          const texture = event && event.detail ? event.detail.texture : null;
          if (texture && tourScene && tourScene.renderer && typeof THREE !== 'undefined') {
            texture.generateMipmaps = true;
            texture.minFilter = THREE.LinearMipmapLinearFilter;
            texture.magFilter = THREE.LinearFilter;
            texture.anisotropy = tourScene.renderer.capabilities.getMaxAnisotropy();
            texture.needsUpdate = true;
          }
        };

        if (crossfade) {
          incomingSky.setAttribute('visible', 'true');
          incomingSky.setAttribute('rotation', rotation || '0 -90 0');
          incomingSky.setAttribute('src', source);
          incomingSky.removeAttribute('animation__skyfadein');
          incomingSky.removeAttribute('animation__skyfadeout');
          activeSky.removeAttribute('animation__skyfadein');
          activeSky.removeAttribute('animation__skyfadeout');
          setSkyMaterial(incomingSky, 0, true);
          setSkyMaterial(activeSky, 1, true);
          incomingSky.addEventListener('materialtextureloaded', applyTextureSettings(incomingSky), { once: true });
          incomingSky.setAttribute(
            'animation__skyfadein',
            'property: material.opacity; from: 0; to: 1; dur: ' + fadeDuration + '; easing: linear'
          );
          activeSky.setAttribute(
            'animation__skyfadeout',
            'property: material.opacity; from: 1; to: 0; dur: ' + fadeDuration + '; easing: linear'
          );

          window.setTimeout(() => {
            activeSky.removeAttribute('animation__skyfadein');
            activeSky.removeAttribute('animation__skyfadeout');
            incomingSky.removeAttribute('animation__skyfadein');
            incomingSky.removeAttribute('animation__skyfadeout');
            activeSky.setAttribute('visible', 'false');
            setSkyMaterial(activeSky, 0, true);
            setSkyMaterial(incomingSky, 1, false);
            tourSky = incomingSky;
            tourSkyBlend = activeSky;
            endTourLoading(loadingToken);
          }, fadeDuration + 40);
        } else {
          activeSky.setAttribute('visible', 'true');
          activeSky.setAttribute('rotation', rotation || '0 -90 0');
          activeSky.setAttribute('src', source);
          activeSky.removeAttribute('animation__skyfadein');
          activeSky.removeAttribute('animation__skyfadeout');
          activeSky.addEventListener('materialtextureloaded', applyTextureSettings(activeSky), { once: true });
          setSkyMaterial(activeSky, 1, false);

          incomingSky.removeAttribute('animation__skyfadein');
          incomingSky.removeAttribute('animation__skyfadeout');
          incomingSky.setAttribute('visible', 'false');
          setSkyMaterial(incomingSky, 0, true);
          window.setTimeout(() => endTourLoading(loadingToken), 80);
        }
      };
      preloader.onerror = () => {
        if (!tourSky || !tourSkyBlend) return;
        tourSky.setAttribute('visible', 'true');
        tourSky.setAttribute('rotation', rotation || '0 -90 0');
        tourSky.setAttribute('src', source);
        tourSky.removeAttribute('animation__skyfadein');
        tourSky.removeAttribute('animation__skyfadeout');
        setSkyMaterial(tourSky, 1, false);
        tourSkyBlend.removeAttribute('animation__skyfadein');
        tourSkyBlend.removeAttribute('animation__skyfadeout');
        tourSkyBlend.setAttribute('visible', 'false');
        setSkyMaterial(tourSkyBlend, 0, true);
        endTourLoading(loadingToken);
      };
      preloader.src = source;
    }

    function setTourScene(index, announce = false, options = {}) {
      if (!tourSky || index < 0 || index >= tourScenes.length) return;

      const scene = tourScenes[index];
      if (!scene || scene.locked) return;
      const availableScenePosition = availableTourIndexes.indexOf(index);
      const preserveCamera = Boolean(options.preserveCamera);
      const crossfadeSky = Boolean(options.crossfadeSky);
      const keepControlsDisabled = Boolean(options.keepControlsDisabled);
      const skyFadeDuration = Number(options.skyFadeDuration) > 0 ? Number(options.skyFadeDuration) : 320;

      activeTourIndex = index;
      renderSceneButtons();
      renderHotspots(scene);

      if (tourSceneTitle) {
        tourSceneTitle.classList.remove('updating');
        void tourSceneTitle.offsetWidth;
        tourSceneTitle.textContent = scene.title;
        tourSceneTitle.classList.add('updating');
      }
      if (tourStatus) {
        tourStatus.textContent = 'Scene ' + (availableScenePosition + 1) + ' of ' + availableTourIndexes.length;
      }

      if (!keepControlsDisabled) {
        setControlsDisabled(false);
      }
      replaceSkyTexture(getSceneImage(scene), scene.rotation || '0 -90 0', {
        crossfade: crossfadeSky,
        fadeDuration: skyFadeDuration
      });
      resetTourZoom();
      if (tourCamera && !preserveCamera) {
        setTourRotation(-30, 0);
      }
      // Esconder pin de posición al cambiar escena
      const clickPin = document.getElementById('tourClickPin');
      if (clickPin) clickPin.setAttribute('visible', 'false');
      if (tourPosDisplay) tourPosDisplay.textContent = '— — —';
    }

    function runSceneBlendTransition(targetIndex, announce = false) {
      if (isTransitioning || targetIndex === activeTourIndex) return;
      if (targetIndex < 0 || targetIndex >= tourScenes.length) return;

      const targetScene = tourScenes[targetIndex];
      if (!targetScene || targetScene.locked) return;

      isTransitioning = true;
      setControlsDisabled(true);
      if (tourHotspots) tourHotspots.setAttribute('visible', 'false');

      if (tourCamera) {
        tourCamera.removeAttribute('animation__move');
        tourCamera.removeAttribute('animation__continue');
      }

      window.setTimeout(() => {
        setTourScene(targetIndex, announce, {
          crossfadeSky: true,
          skyFadeDuration: 640,
          keepControlsDisabled: true
        });
      }, SCENE_BLEND_SWAP_DELAY);

      window.setTimeout(() => {
        if (tourHotspots) tourHotspots.setAttribute('visible', areTourHotspotsVisible ? 'true' : 'false');
        setControlsDisabled(false);
        isTransitioning = false;
      }, SCENE_BLEND_TOTAL_DURATION);
    }

    function runSceneMoveAndBlendTransition(targetIndex, hotspotPosition, announce = false) {
      if (isTransitioning || targetIndex === activeTourIndex) return;
      if (targetIndex < 0 || targetIndex >= tourScenes.length) return;

      const targetScene = tourScenes[targetIndex];
      if (!targetScene || targetScene.locked) return;

      if (!tourCamera) {
        runSceneBlendTransition(targetIndex, announce);
        return;
      }

      isTransitioning = true;
      setControlsDisabled(true);
      if (tourHotspots) tourHotspots.setAttribute('visible', 'false');

      let dirX = 0;
      let dirZ = -1;
      if (hotspotPosition) {
        const parts = hotspotPosition.split(/\s+/).map(parseFloat);
        const hx = Number.isFinite(parts[0]) ? parts[0] : 0;
        const hz = Number.isFinite(parts[2]) ? parts[2] : -1;
        const dist = Math.sqrt(hx * hx + hz * hz) || 1;
        dirX = hx / dist;
        dirZ = hz / dist;
      }

      const travelDistance = 6.5;
      const phase1X = (dirX * travelDistance).toFixed(3);
      const phase1Z = (dirZ * travelDistance).toFixed(3);

      tourCamera.removeAttribute('animation__move');
      tourCamera.removeAttribute('animation__continue');
      tourCamera.setAttribute('position', '0 1.6 0');
      tourCamera.setAttribute('animation__move',
        'property: position; from: 0 1.6 0; to: ' + phase1X + ' 1.6 ' + phase1Z + '; dur: 460; easing: easeOutCubic'
      );

      window.setTimeout(() => {
        setTourScene(targetIndex, announce, {
          preserveCamera: true,
          crossfadeSky: true,
          skyFadeDuration: 680,
          keepControlsDisabled: true
        });

        window.setTimeout(() => {
          if (!isTransitioning) return;
          tourCamera.removeAttribute('animation__move');
          tourCamera.removeAttribute('animation__continue');
          tourCamera.setAttribute('position', '0 1.6 0');
        }, SCENE_MOVE_CAMERA_RESET_DELAY);
      }, SCENE_MOVE_SWAP_DELAY);

      window.setTimeout(() => {
        tourCamera.removeAttribute('animation__move');
        tourCamera.removeAttribute('animation__continue');
        tourCamera.setAttribute('position', '0 1.6 0');
        if (tourHotspots) tourHotspots.setAttribute('visible', areTourHotspotsVisible ? 'true' : 'false');
        setControlsDisabled(false);
        isTransitioning = false;
      }, SCENE_MOVE_TOTAL_DURATION);
    }

    // Cambio entre escenas con movimiento corto + dissolve real entre panoramas.
    function walkToScene(targetIndex, hotspotPosition) {
      runSceneMoveAndBlendTransition(targetIndex, hotspotPosition, false);
    }

    function openTourAtScene(sceneId) {
      const target = getSceneById(sceneId);
      if (target) {
        const targetIndex = tourScenes.findIndex((scene) => scene.id === target.id);
        if (targetIndex >= 0) activeTourIndex = targetIndex;
      }
      openTour();
    }

    function openStep2MasterplanOverlay() {
      if (!heroFrontView || !heroFrontSvgStage || !heroFrontImage) return;

      heroFrontImage.style.display = 'none';
      heroFrontSvgStage.classList.add('active');
heroFrontSvgStage.setAttribute('aria-hidden', 'false');
      revealHeroFrontView();

      const step2Svg = getStep2MasterplanSvg(activePlanViewKey);
      fetchSvgCached(step2Svg)
        .then((svgText) => {
          const ok = setupMasterplan2RoomStep(svgText, activePlanViewKey);
          if (!ok) hideHeroFrontView();
        })
        .catch(() => {
          hideHeroFrontView();
        });
    }

    function openTour(event) {
      if (event) event.preventDefault();
      if (!tourModal) return;

      tourModal.classList.add('active');
      tourModal.setAttribute('aria-hidden', 'false');
      pageBody.style.overflow = 'hidden';

      const tourShell = tourModal.querySelector('.tour-shell');
      if (tourShell) {
        tourShell.classList.remove('is-entering');
        void tourShell.offsetWidth;
        tourShell.classList.add('is-entering');
      }

      beginTourLoading('Loading 360...');

      ensureTourEngineLoaded()
        .then(() => {
          if (!tourModal || !tourModal.classList.contains('active')) return;

          if (tourScene && typeof tourScene.play === 'function') {
            tourScene.play();
          }
          window.requestAnimationFrame(refreshSceneViewport);
          resetTourZoom();
          showTourTouchHint();

          if (tourTransitionOverlay) {
            tourTransitionOverlay.classList.remove('fading', 'releasing');
          }
          if (tourSky) {
            tourSky.removeAttribute('animation__skyfadein');
            tourSky.removeAttribute('animation__skyfadeout');
            tourSky.setAttribute('visible', 'true');
            setSkyMaterial(tourSky, 1, false);
          }
          if (tourSkyBlend) {
            tourSkyBlend.removeAttribute('animation__skyfadein');
            tourSkyBlend.removeAttribute('animation__skyfadeout');
            tourSkyBlend.setAttribute('visible', 'false');
            setSkyMaterial(tourSkyBlend, 0, true);
          }
          isTransitioning = false;
          updateHotspotToggleUi();

          setTourScene(activeTourIndex, true);
        })
        .catch(() => {
          if (tourLoadingText) tourLoadingText.textContent = 'Could not load 360 tour.';
        });
    }

    function closeTour() {
      if (!tourModal) return;

      hideTourTouchHint();
      tourModal.classList.remove('active');
      tourModal.setAttribute('aria-hidden', 'true');
      pageBody.style.overflow = '';

      if (tourScene && typeof tourScene.pause === 'function') {
        tourScene.pause();
      }
      endTourLoading(tourLoadingToken);
    }

    openTourButtons.forEach((button) => {
      button.addEventListener('click', openTour);
    });

    if (tourCloseBtn) {
      tourCloseBtn.addEventListener('click', closeTour);
    }

    if (tourBackPlanBtn) {
      tourBackPlanBtn.addEventListener('click', () => {
        closeTour();
        openStep2MasterplanOverlay();
      });
    }

    if (tourPrevBtn) {
      tourPrevBtn.addEventListener('click', () => {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const prevAvailableIndex = currentAvailableIndex > 0 ? currentAvailableIndex - 1 : availableTourIndexes.length - 1;
        runSceneBlendTransition(availableTourIndexes[prevAvailableIndex], true);
      });
    }

    if (tourNextBtn) {
      tourNextBtn.addEventListener('click', () => {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const nextAvailableIndex = (currentAvailableIndex + 1) % availableTourIndexes.length;
        runSceneBlendTransition(availableTourIndexes[nextAvailableIndex], true);
      });
    }

    if (tourHotspotToggle) {
      updateHotspotToggleUi();
      tourHotspotToggle.addEventListener('click', () => {
        areTourHotspotsVisible = !areTourHotspotsVisible;
        updateHotspotToggleUi();
        const currentScene = tourScenes[activeTourIndex];
        if (currentScene) renderHotspots(currentScene);
      });
    }

    if (tourModal) {
      tourModal.addEventListener('click', (event) => {
        if (event.target === tourModal) {
          closeTour();
        }
      });
    }

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        closeTour();
        closeSurvey();
      }

      if (!tourModal || !tourModal.classList.contains('active')) return;

      if (event.key === 'ArrowLeft') {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const prevAvailableIndex = currentAvailableIndex > 0 ? currentAvailableIndex - 1 : availableTourIndexes.length - 1;
        runSceneBlendTransition(availableTourIndexes[prevAvailableIndex], true);
      }
      if (event.key === 'ArrowRight') {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const nextAvailableIndex = (currentAvailableIndex + 1) % availableTourIndexes.length;
        runSceneBlendTransition(availableTourIndexes[nextAvailableIndex], true);
      }
    });

    window.addEventListener('resize', () => {
      if (tourModal && tourModal.classList.contains('active')) {
        refreshSceneViewport();
        setTourScene(activeTourIndex, false);
      }
    });

    renderSceneButtons();

    // ── Ayudante de posición ──
    // Muestra en tiempo real las coordenadas hacia donde mira la cámara.
    // Úsalo para saber qué posición poner en cada hotspot.
    const tourCrosshair = document.getElementById('tourCrosshair');
    const tourStage = document.querySelector('.tour-stage');
    let posDebugActive = false;

    function setupTouchZoom() {
      let pinchStartDistance = 0;
      let pinchStartFov = DEFAULT_TOUR_FOV;
      let touchLookActive = false;
      let lastTouchX = 0;
      let lastTouchY = 0;

      const trySetup = () => {
        const canvas = tourScene && tourScene.canvas;
        if (!canvas || canvas.dataset.touchZoomReady === 'true') return;
        canvas.dataset.touchZoomReady = 'true';

        const getTouchDistance = (touches) => {
          if (!touches || touches.length < 2) return 0;
          const dx = touches[0].clientX - touches[1].clientX;
          const dy = touches[0].clientY - touches[1].clientY;
          return Math.hypot(dx, dy);
        };

        canvas.addEventListener('touchstart', (event) => {
          if (event.touches.length === 1) {
            touchLookActive = true;
            lastTouchX = event.touches[0].clientX;
            lastTouchY = event.touches[0].clientY;
            return;
          }

          touchLookActive = false;
          if (event.touches.length !== 2) return;
          pinchStartDistance = getTouchDistance(event.touches);
          const camera3D = getTourThreeCamera();
          pinchStartFov = camera3D && Number.isFinite(camera3D.fov) ? camera3D.fov : DEFAULT_TOUR_FOV;
        }, { passive: true });

        canvas.addEventListener('touchmove', (event) => {
          if (event.touches.length === 1 && touchLookActive) {
            event.preventDefault();
            hideTourTouchHint();

            const lookControls = getTourLookControls();
            const currentTouch = event.touches[0];
            const deltaX = currentTouch.clientX - lastTouchX;
            const deltaY = currentTouch.clientY - lastTouchY;

            lastTouchX = currentTouch.clientX;
            lastTouchY = currentTouch.clientY;

            if (lookControls && lookControls.pitchObject && lookControls.yawObject) {
              lookControls.yawObject.rotation.y -= deltaX * TOUCH_LOOK_SENSITIVITY;
              lookControls.pitchObject.rotation.x = Math.max(
                -MAX_TOUR_PITCH,
                Math.min(MAX_TOUR_PITCH, lookControls.pitchObject.rotation.x - (deltaY * TOUCH_LOOK_SENSITIVITY))
              );
              syncTourCameraRotation();
            }
            return;
          }

          if (event.touches.length !== 2 || !pinchStartDistance) return;
          event.preventDefault();
          hideTourTouchHint();
          const currentDistance = getTouchDistance(event.touches);
          if (!currentDistance) return;
          const zoomRatio = pinchStartDistance / currentDistance;
          setTourFov(pinchStartFov * Math.pow(zoomRatio, PINCH_ZOOM_STRENGTH));
        }, { passive: false });

        canvas.addEventListener('wheel', (event) => {
          if (!tourModal || !tourModal.classList.contains('active')) return;
          event.preventDefault();
          hideTourTouchHint();
          const camera3D = getTourThreeCamera();
          const currentFov = camera3D && Number.isFinite(camera3D.fov) ? camera3D.fov : DEFAULT_TOUR_FOV;
          const wheelDelta = event.deltaY * (event.deltaMode === 1 ? 12 : 1);
          setTourFov(currentFov + wheelDelta * 0.035);
        }, { passive: false });

        const clearPinch = () => {
          pinchStartDistance = 0;
          touchLookActive = false;
        };

        canvas.addEventListener('touchend', clearPinch, { passive: true });
        canvas.addEventListener('touchcancel', clearPinch, { passive: true });
      };

      if (tourScene) {
        if (tourScene.hasLoaded) {
          trySetup();
        } else {
          tourScene.addEventListener('loaded', trySetup, { once: true });
        }
      }
    }

    // ── Clic para colocar pin de posición ──
    function setupClickPositionPicker() {
      const trySetup = () => {
        const canvas = tourScene && tourScene.canvas;
        if (!canvas) return;

        canvas.addEventListener('click', (e) => {
          if (!posDebugActive) return;

          const threeCamera = tourScene.camera;
          if (!threeCamera || typeof THREE === 'undefined') return;

          const rect = canvas.getBoundingClientRect();
          const ndcX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
          const ndcY = -((e.clientY - rect.top) / rect.height) * 2 + 1;

          const raycaster = new THREE.Raycaster();
          threeCamera.updateMatrixWorld(true); // asegurar matriz actualizada
          raycaster.setFromCamera({ x: ndcX, y: ndcY }, threeCamera);

          // Intersectar con la esfera del sky para obtener
          // la dirección exacta del clic.
          const sphere = new THREE.Sphere(new THREE.Vector3(0, 0, 0), 4.7);
          const hitPoint = new THREE.Vector3();
          if (!raycaster.ray.intersectSphere(sphere, hitPoint)) return;

          // Escalar a vector editable para hotspots (manteniendo dirección 3D).
          const dirLen = Math.sqrt(
            hitPoint.x * hitPoint.x + hitPoint.y * hitPoint.y + hitPoint.z * hitPoint.z
          ) || 0.01;
          const sc = 4.8 / dirLen;
          const px = parseFloat((hitPoint.x * sc).toFixed(1));
          const py = parseFloat((hitPoint.y * sc).toFixed(1));
          const pz = parseFloat((hitPoint.z * sc).toFixed(1));

          // Pin visual: misma dirección que la coordenada mostrada,
          // para que coincida con la ubicación final del hotspot.
          const pin = document.getElementById('tourClickPin');
          if (pin) {
            pin.setAttribute('visible', 'true');
            pin.setAttribute('position',
              px.toFixed(2) + ' ' + py.toFixed(2) + ' ' + pz.toFixed(2));
          }

          // Coordenada reportada: dirección 3D completa para hotspot.
          if (tourPosDisplay) tourPosDisplay.textContent = px + ' ' + py + ' ' + pz;
        });
      };

      if (tourScene) {
        if (tourScene.hasLoaded) { trySetup(); }
        else { tourScene.addEventListener('loaded', trySetup); }
      }
    }

    if (tourPosToggle) {
      tourPosToggle.addEventListener('click', () => {
        posDebugActive = !posDebugActive;
        tourPosToggle.classList.toggle('active', posDebugActive);
        if (tourPosDebug) tourPosDebug.classList.toggle('active', posDebugActive);
        if (tourCrosshair) tourCrosshair.classList.toggle('active', posDebugActive);
        if (tourStage) tourStage.classList.toggle('pick-mode', posDebugActive);

        if (!posDebugActive) {
          const pin = document.getElementById('tourClickPin');
          if (pin) pin.setAttribute('visible', 'false');
          if (tourPosDisplay) tourPosDisplay.textContent = '— — —';
        }
      });
    }

    if (tourPosFixBtn) {
      tourPosFixBtn.addEventListener('click', () => {
        if (!tourCamera) return;
        const rot = tourCamera.getAttribute('rotation');
        if (!rot) return;
        // Dirección 3D completa donde mira la cámara (yaw + pitch)
        const yRad = (rot.y || 0) * Math.PI / 180;
        const xRad = (rot.x || 0) * Math.PI / 180;
        const dirX =  Math.sin(yRad) * Math.cos(xRad);
        const dirY = -Math.sin(xRad);
        const dirZ = -Math.cos(yRad) * Math.cos(xRad);
        const r = 4.7;
        // Pin visual: en la esfera, exactamente donde mira la cámara
        const pin = document.getElementById('tourClickPin');
        if (pin) {
          pin.setAttribute('visible', 'true');
          pin.setAttribute('position',
            (dirX * r).toFixed(2) + ' ' + (dirY * r).toFixed(2) + ' ' + (dirZ * r).toFixed(2));
        }
        // Coordenada: dirección 3D completa para hotspot
        const dirLen = Math.sqrt(dirX * dirX + dirY * dirY + dirZ * dirZ) || 0.01;
        const sc = 4.8 / dirLen;
        const px = parseFloat((dirX * sc).toFixed(1));
        const py = parseFloat((dirY * sc).toFixed(1));
        const pz = parseFloat((dirZ * sc).toFixed(1));
        const posStr = px + ' ' + py + ' ' + pz;
        if (tourPosDisplay) tourPosDisplay.textContent = posStr;
      });
    }

    if (tourPosCopyBtn) {
      tourPosCopyBtn.addEventListener('click', () => {
        const text = tourPosDisplay ? tourPosDisplay.textContent.trim() : '';
        if (!text || text === '— — —') return;
        navigator.clipboard.writeText(text).catch(() => {});
        tourPosCopyBtn.textContent = '✓ Copiado';
        setTimeout(() => { tourPosCopyBtn.textContent = 'Copiar'; }, 1400);
      });
    }

    // Mouse-tilt 3D en el room label (solo dispositivos con puntero fino)
    (function initRoomLabelTilt() {
      const label = document.querySelector('.tour-room-label');
      if (!label || !window.matchMedia('(pointer: fine)').matches) return;

      let isHovering = false;
      const STRENGTH = 10;
      const PERSPECTIVE = 600;

      label.addEventListener('mouseenter', () => { isHovering = true; });
      label.addEventListener('mouseleave', () => {
        isHovering = false;
        label.style.transform = 'translateX(-50%)';
      });
      label.addEventListener('mousemove', (e) => {
        if (!isHovering) return;
        const rect = label.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const rx = ((e.clientY - cy) / (rect.height / 2)) * -STRENGTH;
        const ry = ((e.clientX - cx) / (rect.width / 2)) * STRENGTH;
        label.style.transform = `translateX(-50%) perspective(${PERSPECTIVE}px) rotateX(${rx}deg) rotateY(${ry}deg)`;
      });
    })();

    // ════════════════════════════════════════════════════════════
    //  TOUR CTA MODAL — Initial Choice Handler
    // ════════════════════════════════════════════════════════════

    const tourCtaModal = document.getElementById('tourCtaModal');
    const tourCtaGuideBtn = document.getElementById('tourCtaGuideBtn');
    const tourCtaExploreBtn = document.getElementById('tourCtaExploreBtn');
    const tourCtaCloseBtn = document.getElementById('tourCtaCloseBtn');

    function closeCtaModal() {
      if (tourCtaModal) {
        tourCtaModal.setAttribute('aria-hidden', 'true');
      }
    }

    if (tourCtaGuideBtn) {
      tourCtaGuideBtn.addEventListener('click', () => {
        closeCtaModal();
        window.setTimeout(() => {
          activeTourIndex = 0;
          openTour();
          ensureTourEngineLoaded().then(() => {
            window.setTimeout(() => {
              startCinemaMode();
            }, 900);
          });
        }, 300);
      });
    }

    if (tourCtaExploreBtn) {
      tourCtaExploreBtn.addEventListener('click', () => {
        closeCtaModal();
      });
    }

    if (tourCtaCloseBtn) {
      tourCtaCloseBtn.addEventListener('click', closeCtaModal);
    }

    // ════════════════════════════════════════════════════════════
    //  MODO CINE — Cinema Mode Engine
    // ════════════════════════════════════════════════════════════

    const CINE_SCENE_DURATION   = 5000;
    const CINE_ROTATION_SPEED   = 0.006;
    const CINE_CONTROLS_TIMEOUT = 3000;
    const CINE_TITLE_SHOW_MS    = 2500;
    const CINE_TITLE_FADE_MS    = 500;
    const CINE_INTRO_SHOW_MS    = 2800;
    const CINE_TOTAL_SCENES     = 12;

    let cinemaModeActive    = false;
    let cinemaPaused        = false;
    let cineSceneTimer      = null;
    let cineRAFHandle       = null;
    let cineLastRAFTime     = 0;
    let cineElapsedMs       = 0;
    let cineTitleTimeout    = null;
    let cineControlsTimeout = null;
    let cineUserInteracting = false;

    const cineStoryBar     = document.getElementById('cineStoryBar');
    const cineIntroCard    = document.getElementById('cineIntroCard');
    const cineTitleCard    = document.getElementById('cineTitleCard');
    const cineTitleCardName= document.getElementById('cineTitleCardName');
    const cineControlsBar  = document.getElementById('cineControlsBar');
    const cineScrubberWrap = document.getElementById('cineScrubberWrap');
    const cineScrubberFill = document.getElementById('cineScrubberFill');
    const cineTimeDisplay  = document.getElementById('cineTimeDisplay');
    const cinePlayPauseBtn = document.getElementById('cinePlayPauseBtn');
    const cineSkipBackBtn  = document.getElementById('cineSkipBackBtn');
    const cineSkipFwdBtn   = document.getElementById('cineSkipFwdBtn');
    const cineMuteBtn      = document.getElementById('cineMuteBtn');
    const cineFsBtn        = document.getElementById('cineFsBtn');
    const cineHeroPlayBtn  = document.getElementById('cineHeroPlayBtn');
    const tourShellEl      = document.querySelector('.tour-shell');

    function cineInitStoryBar() {
      if (!cineStoryBar) return;
      cineStoryBar.innerHTML = '';
      tourScenes.forEach((scene, i) => {
        const seg = document.createElement('div');
        seg.className = 'cine-story-seg';
        seg.id = 'cineSeg' + i;
        const fill = document.createElement('div');
        fill.className = 'cine-story-seg-fill';
        seg.appendChild(fill);
        cineStoryBar.appendChild(seg);
      });
    }

    function cineInitChapterMarkers() {
      if (!cineScrubberWrap) return;
      cineScrubberWrap.querySelectorAll('.cine-chapter-marker').forEach(el => el.remove());
      tourScenes.forEach((scene, i) => {
        const pct = (i / (tourScenes.length - 1)) * 100;
        const marker = document.createElement('div');
        marker.className = 'cine-chapter-marker';
        marker.style.left = pct + '%';
        const tooltip = document.createElement('div');
        tooltip.className = 'cine-chapter-tooltip';
        tooltip.textContent = scene.title;
        marker.appendChild(tooltip);
        marker.addEventListener('click', (e) => {
          e.stopPropagation();
          cineJumpToScene(i);
        });
        cineScrubberWrap.appendChild(marker);
      });
    }

    function cineUpdateStoryBar(sceneIdx, pct) {
      tourScenes.forEach((_, i) => {
        const seg = document.getElementById('cineSeg' + i);
        if (!seg) return;
        const fill = seg.querySelector('.cine-story-seg-fill');
        seg.classList.remove('done', 'active');
        if (i < sceneIdx) {
          seg.classList.add('done');
        } else if (i === sceneIdx) {
          seg.classList.add('active');
          seg.style.setProperty('--seg-pct', pct + '%');
          if (fill) fill.style.width = pct + '%';
        } else {
          if (fill) fill.style.width = '0%';
        }
      });
    }

    function cineUpdateScrubber(sceneIdx, pct) {
      const totalProgress = ((sceneIdx + pct / 100) / tourScenes.length) * 100;
      if (cineScrubberFill) cineScrubberFill.style.width = totalProgress + '%';

      const totalSeconds = Math.floor((totalProgress / 100) * 60);
      const mm = Math.floor(totalSeconds / 60);
      const ss = String(totalSeconds % 60).padStart(2, '0');
      if (cineTimeDisplay) cineTimeDisplay.textContent = mm + ':' + ss + ' / 1:00';

      if (cineScrubberWrap) cineScrubberWrap.setAttribute('aria-valuenow', sceneIdx);
    }

    function cineRotationTick(timestamp) {
      if (!cinemaModeActive || cinemaPaused || cineUserInteracting) {
        cineLastRAFTime = 0;
        cineRAFHandle = window.requestAnimationFrame(cineRotationTick);
        return;
      }

      if (cineLastRAFTime === 0) cineLastRAFTime = timestamp;
      const delta = timestamp - cineLastRAFTime;
      cineLastRAFTime = timestamp;

      cineElapsedMs += delta;

      const lookControls = getTourLookControls();
      if (lookControls && lookControls.yawObject) {
        lookControls.yawObject.rotation.y -= CINE_ROTATION_SPEED * delta * (Math.PI / 180);
        syncTourCameraRotation();
      }

      const pct = Math.min((cineElapsedMs / CINE_SCENE_DURATION) * 100, 100);
      cineUpdateStoryBar(activeTourIndex, pct);
      cineUpdateScrubber(activeTourIndex, pct);

      cineRAFHandle = window.requestAnimationFrame(cineRotationTick);
    }

    function startCinemaMode() {
      if (!tourModal || !tourModal.classList.contains('active')) return;
      cinemaModeActive = true;
      cinemaPaused = false;
      cineElapsedMs = 0;

      if (tourShellEl) tourShellEl.classList.add('cine-active');

      cineInitStoryBar();
      cineInitChapterMarkers();
      cineUpdatePlayPauseBtn();

      if (tourBackPlanBtn) tourBackPlanBtn.style.opacity = '0';
      if (tourHotspotToggle) tourHotspotToggle.style.opacity = '0';

      cineShowControls();

      if (activeTourIndex === 0) {
        cineShowIntroCard();
      }

      cineShowTitleCard(tourScenes[activeTourIndex]);

      cineScheduleNextScene();

      cineLastRAFTime = 0;
      if (cineRAFHandle) window.cancelAnimationFrame(cineRAFHandle);
      cineRAFHandle = window.requestAnimationFrame(cineRotationTick);
    }

    function stopCinemaMode() {
      cinemaModeActive = false;
      cinemaPaused = false;
      cineElapsedMs = 0;

      if (cineSceneTimer)    { window.clearTimeout(cineSceneTimer); cineSceneTimer = null; }
      if (cineRAFHandle)     { window.cancelAnimationFrame(cineRAFHandle); cineRAFHandle = null; }
      if (cineTitleTimeout)  { window.clearTimeout(cineTitleTimeout); cineTitleTimeout = null; }
      if (cineControlsTimeout) { window.clearTimeout(cineControlsTimeout); cineControlsTimeout = null; }

      if (tourShellEl) tourShellEl.classList.remove('cine-active');
      if (cineTitleCard) cineTitleCard.classList.remove('show');
      if (cineIntroCard) cineIntroCard.classList.remove('show');
      if (cineControlsBar) cineControlsBar.classList.remove('visible');

      if (tourBackPlanBtn) tourBackPlanBtn.style.opacity = '';
      if (tourHotspotToggle) tourHotspotToggle.style.opacity = '';
    }

    function pauseCinemaMode() {
      if (!cinemaModeActive || cinemaPaused) return;
      cinemaPaused = true;
      if (cineSceneTimer) { window.clearTimeout(cineSceneTimer); cineSceneTimer = null; }
      cineUpdatePlayPauseBtn();
      cineShowControls();
    }

    function resumeCinemaMode() {
      if (!cinemaModeActive || !cinemaPaused) return;
      cinemaPaused = false;
      cineLastRAFTime = 0;
      const remaining = Math.max(0, CINE_SCENE_DURATION - cineElapsedMs);
      cineSceneTimer = window.setTimeout(cineAdvanceScene, remaining);
      cineUpdatePlayPauseBtn();
    }

    function cineJumpToScene(idx) {
      if (idx < 0 || idx >= tourScenes.length) return;
      if (cineSceneTimer) { window.clearTimeout(cineSceneTimer); cineSceneTimer = null; }
      cineElapsedMs = 0;
      cineLastRAFTime = 0;
      runSceneBlendTransition(idx, false);
      cineUpdateStoryBar(idx, 0);
      cineUpdateScrubber(idx, 0);
      if (!cinemaPaused) cineScheduleNextScene();
      window.setTimeout(() => cineShowTitleCard(tourScenes[idx]), 500);
    }

    function cineAdvanceScene() {
      const nextIdx = (activeTourIndex + 1) % tourScenes.length;
      cineElapsedMs = 0;
      cineLastRAFTime = 0;
      runSceneBlendTransition(nextIdx, false);
      window.setTimeout(() => cineShowTitleCard(tourScenes[nextIdx]), 500);
      if (!cinemaPaused) cineScheduleNextScene();
    }

    function cineScheduleNextScene() {
      if (cineSceneTimer) window.clearTimeout(cineSceneTimer);
      cineSceneTimer = window.setTimeout(cineAdvanceScene, CINE_SCENE_DURATION);
    }

    function cineShowTitleCard(scene) {
      if (!cineTitleCard || !cineTitleCardName) return;
      if (cineTitleTimeout) { window.clearTimeout(cineTitleTimeout); cineTitleTimeout = null; }
      cineTitleCardName.textContent = scene ? scene.title : '';
      cineTitleCard.classList.add('show');
      cineTitleTimeout = window.setTimeout(() => {
        cineTitleCard.classList.remove('show');
      }, CINE_TITLE_SHOW_MS);
    }

    function cineShowIntroCard() {
      if (!cineIntroCard) return;
      cineIntroCard.classList.add('show');
      window.setTimeout(() => {
        cineIntroCard.classList.remove('show');
      }, CINE_INTRO_SHOW_MS);
    }

    function cineShowControls() {
      if (!cineControlsBar) return;
      cineControlsBar.classList.add('visible');
      if (cineControlsTimeout) window.clearTimeout(cineControlsTimeout);
      cineControlsTimeout = window.setTimeout(() => {
        if (!cinemaPaused) cineControlsBar.classList.remove('visible');
      }, CINE_CONTROLS_TIMEOUT);
    }

    function cineUpdatePlayPauseBtn() {
      if (!cinePlayPauseBtn) return;
      cinePlayPauseBtn.innerHTML    = cinemaPaused ? '&#9654;' : '&#9646;&#9646;';
      cinePlayPauseBtn.setAttribute('aria-label', cinemaPaused ? 'Play' : 'Pause');
    }

    if (cinePlayPauseBtn) {
      cinePlayPauseBtn.addEventListener('click', () => {
        if (cinemaPaused) resumeCinemaMode();
        else pauseCinemaMode();
      });
    }

    if (cineSkipBackBtn) {
      cineSkipBackBtn.addEventListener('click', () => {
        const prevIdx = ((activeTourIndex - 1) + tourScenes.length) % tourScenes.length;
        cineJumpToScene(prevIdx);
      });
    }

    if (cineSkipFwdBtn) {
      cineSkipFwdBtn.addEventListener('click', () => {
        const nextIdx = (activeTourIndex + 1) % tourScenes.length;
        cineJumpToScene(nextIdx);
      });
    }

    if (cineScrubberWrap) {
      cineScrubberWrap.addEventListener('click', (e) => {
        const rect = cineScrubberWrap.getBoundingClientRect();
        const pct  = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
        const totalScenes = tourScenes.length;
        const sceneIdx = Math.min(totalScenes - 1, Math.floor(pct * totalScenes));
        cineJumpToScene(sceneIdx);
      });
    }

    if (cineFsBtn) {
      cineFsBtn.addEventListener('click', () => {
        if (!document.fullscreenElement) {
          document.documentElement.requestFullscreen && document.documentElement.requestFullscreen();
        } else {
          document.exitFullscreen && document.exitFullscreen();
        }
      });
    }

    if (tourShellEl) {
      const onInteractionStart = () => {
        if (!cinemaModeActive) return;
        cineUserInteracting = true;
        if (cineSceneTimer) { window.clearTimeout(cineSceneTimer); cineSceneTimer = null; }
        cineShowControls();
      };
      const onInteractionEnd = () => {
        if (!cinemaModeActive) return;
        cineUserInteracting = false;
        if (!cinemaPaused) cineScheduleNextScene();
      };
      const onMouseMove = () => {
        if (!cinemaModeActive) return;
        cineShowControls();
      };

      tourShellEl.addEventListener('mousedown',   onInteractionStart,  { passive: true });
      tourShellEl.addEventListener('touchstart',  onInteractionStart,  { passive: true });
      tourShellEl.addEventListener('mouseup',     onInteractionEnd,    { passive: true });
      tourShellEl.addEventListener('touchend',    onInteractionEnd,    { passive: true });
      tourShellEl.addEventListener('mousemove',   onMouseMove,         { passive: true });
    }

    if (cineHeroPlayBtn) {
      cineHeroPlayBtn.addEventListener('click', () => {
        activeTourIndex = 0;
        openTour();
        ensureTourEngineLoaded().then(() => {
          window.setTimeout(() => {
            startCinemaMode();
          }, 900);
        });
      });
    }

    if (tourCloseBtn) {
      tourCloseBtn.addEventListener('click', () => {
        stopCinemaMode();
      });
    }

    if (tourModal) {
      tourModal.addEventListener('click', (e) => {
        if (e.target === tourModal) {
          stopCinemaMode();
        }
      });
    }
  </script>

</body>
</html>
