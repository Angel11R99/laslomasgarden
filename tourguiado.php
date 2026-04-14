
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Las Lomas Serenas</title>
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
      background: var(--bg);
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
      background:
        radial-gradient(circle at 50% 8%, color-mix(in oklab, #ffffff 68%, #c9e8df 32%) 0%, transparent 52%),
        linear-gradient(180deg, #f6f7f5 0%, #ecf2ef 48%, #dde9e4 100%);
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
      background: #dce9e4;
    }

    .hero.step-1 #svgContainer svg {
      transform: scaleX(1.12) scaleY(0.9);
      transform-origin: center;
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: auto 0 0 0;
      height: 6px;
      background: linear-gradient(90deg, var(--green-dark), var(--green-light));
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
      padding-top: 62px;
      display: grid;
      gap: 14px;
      justify-items: center;
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
      margin: 0 auto;
      white-space: normal;
      text-wrap: balance;
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
      transform-origin: center center;
      transition: transform 0.85s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                  opacity 0.55s ease;
    }

    .hero.step-1 .hero-apartment-map {
      animation: step1MapReveal 720ms cubic-bezier(0.22, 1, 0.36, 1) both;
    }

    #svgContainer {
      width: 100%;
      height: 100%;
    }

    #svgContainer svg {
      width: 100%;
      height: 100%;
      display: block;
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
      font-size: clamp(0.9rem, 1.6vw, 1.2rem);
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      text-shadow: 0 2px 12px rgba(0,0,0,0.5);
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

    #svgContainer image[id^="app"],
    #svgContainer image[id^="APP"] {
      transition: filter 0.3s ease, transform 0.3s cubic-bezier(0.34,1.56,0.64,1);
      transform-box: fill-box;
      transform-origin: 50% 50%;
    }

    @keyframes appAttentionPulse {
      0%, 100% { filter: none; }
      50%       { filter: brightness(1.11) drop-shadow(0 0 10px rgba(210, 168, 24, 0.75)); }
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
      border: 1px solid rgba(210, 168, 24, 0.45);
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
      background: #d4a81c;
      flex-shrink: 0;
    }

    .hero-map-hint {
      display:none;
      position: absolute;
      bottom: clamp(16px, 3vw, 32px);
      left: 50%;
      transform: translateX(-50%);
      z-index: 10;
      display: flex;
      align-items: center;
      gap: 9px;
      padding: 9px 20px;
      border-radius: 999px;
      background: rgba(5, 18, 14, 0.82);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(210, 168, 24, 0.38);
      color: rgba(255, 255, 255, 0.92);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      pointer-events: none;
      white-space: nowrap;
      animation: hintFadeOut 1.2s ease 5.5s forwards;
    }

    @keyframes hintFadeOut {
      to { opacity: 0; visibility: hidden; }
    }

    .hero-map-hint-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #d4a81c;
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
      background-image: url('./pool%20family.webp');
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
    }

    .tour-back-plan:hover,
    .tour-back-plan:focus-visible {
      background: rgba(7, 138, 99, 0.72);
      outline: none;
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
      overflow: hidden;
      background: rgba(7, 14, 12, 0.94);
      box-shadow: none;
    }

    .tour-room-label {
      position: absolute;
      bottom: max(1.6rem, env(safe-area-inset-bottom));
      left: 50%;
      transform: translateX(-50%);
      z-index: 20;
      padding: 0.55rem 1.4rem;
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
      white-space: nowrap;
      pointer-events: none;
      box-shadow: 0 8px 24px rgba(0,0,0,0.35);
      max-width: min(88vw, 28rem);
      text-align: center;
    }

    .tour-touch-hint {
      position: absolute;
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

    /* Overlay de transición tipo blend suave entre escenas */
    .tour-transition-overlay {
      position: absolute;
      inset: 0;
      z-index: 30;
      pointer-events: none;
      background: radial-gradient(circle at 50% 50%, rgba(10, 16, 14, 0.34) 0%, rgba(8, 13, 11, 0.7) 70%, rgba(6, 9, 8, 0.94) 100%);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      opacity: 0;
      transition: opacity 0.46s ease;
      will-change: opacity;
    }
    .tour-transition-overlay.fading {
      opacity: 1;
    }
    .tour-transition-overlay.releasing {
      opacity: 0;
      transition: opacity 0.58s ease;
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

    .tour-stage canvas {
      touch-action: none;
    }

    .tour-scene {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

    footer {
      padding: 12px 0 26px;
      text-align: center;
      color: var(--muted);
      font-size: 0.82rem;
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
        background-image: url('img/Master_Plan.webp');
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

      .hero-front-title {
        max-width: 100%;
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
        padding: 0.45rem 0.9rem;
        bottom: max(0.75rem, env(safe-area-inset-bottom));
        max-width: calc(100vw - 5.5rem);
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


  </style>
</head>
<body>
  <header class="hero step-1">
    <div class="hero-inner container">
      <nav class="nav">
        <div></div>
        <!-- <a href="#" class="logo" aria-label="Las Lomas Serenas">
          <img src="./Las%20Lomas%20logo.png" alt="Las Lomas Serenas" />
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
        <div class="hero-map-hint" aria-hidden="true"><span class="hero-map-hint-dot"></span>Select a unit</div>
        
        <div id="svgContainer">
          <!-- ================================================================ -->
          <!-- PLACE YOUR FULL SVG CONTENT HERE (replacing the example below)  -->
          <!-- Make sure each apartment element has an ID starting with "app"   -->
          <!-- e.g., app1-T, app2, app3-T, app4, etc.                          -->
          <!-- ================================================================ -->
        </div>
      </div>

      <div class="hero-front-view" id="heroFrontView" aria-hidden="true">
        <img class="hero-front-image" id="heroFrontImage" src="img/Serenasconbalcon.svg" alt="Unit with 3 rooms">
        <div class="hero-front-svg-stage" id="heroFrontSvgStage" aria-hidden="true"></div>
        <div class="hero-front-area-tooltip" id="heroFrontAreaTooltip" aria-hidden="true"></div>
        <div class="hero-front-controls">
          <span class="hero-front-title" id="heroFrontTitle">Unit with 3 rooms</span>
          <button class="hero-front-close" id="heroFrontClose" type="button">Return to the master plan</button>
        </div>
      </div>
    </div>

  <div class="apt-tooltip" id="aptTooltip" aria-hidden="true"><span class="apt-tooltip-dot"></span><span id="aptTooltipText"></span></div>
  </header>

  <!-- The rest of your sections remain exactly the same -->
  <div class="tour-modal" id="tourModal" aria-hidden="true">
    <div class="tour-shell" role="dialog" aria-modal="true" aria-labelledby="tourSceneTitle">
      <button class="tour-back-plan" id="tourBackPlanBtn" type="button">Back to plan</button>
      <button class="tour-close" id="tourCloseBtn" type="button" aria-label="Close 360 tour">&times;</button>
      <div class="tour-room-label">
        <span id="tourSceneTitle">Balcón</span>
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

      <script src="https://aframe.io/releases/1.6.0/aframe.min.js"></script>
      <div class="tour-stage">
        <a-scene embedded vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false" renderer="colorManagement: true; antialias: true; precision: high" class="tour-scene" id="tourScene">
          <a-assets>
            <img id="tourAssetBalcon" src="img/Renders%20360/Exteriores/SERENAS_BALCONY%20360%20-%2033B.webp" alt="Balcón exterior">
            <img id="tourAssetSala" src="img/Renders%20360/Interiores/Sala.webp" alt="Sala">
            <img id="tourAssetComedor" src="img/Renders%20360/Interiores/Comedor.webp" alt="Comedor">
            <img id="tourAssetCocina" src="img/Renders%20360/Interiores/Cocina.webp" alt="Cocina">
            <img id="tourAssetPasillo" src="img/Renders%20360/Interiores/Pasillo.webp" alt="Pasillo">
            <img id="tourAssetPasillo2" src="img/Renders%20360/Interiores/Pasillo2.webp" alt="Pasillo 2">
            <img id="tourAssetDormPrincipal" src="img/Renders%20360/Interiores/Dormitorio%20principal.webp" alt="Dormitorio Principal">
            <img id="tourAssetDormA" src="img/Renders%20360/Interiores/Dormitorio%20A.webp" alt="Dormitorio A">
            <img id="tourAssetDormB" src="img/Renders%20360/Interiores/Dormitorio%20B.webp" alt="Dormitorio B">
            <img id="tourAssetBano" src="img/Renders%20360/Interiores/Baño.webp" alt="Baño Principal">
            <img id="tourAssetBano2" src="img/Renders%20360/Interiores/Baño%202.webp" alt="Baño 2">
            <img id="tourAssetWC" src="img/Renders%20360/Interiores/WC.webp" alt="WC">
          </a-assets>
          <a-entity camera="fov: 80" look-controls="touchEnabled: false; mouseEnabled: true; magicWindowTrackingEnabled: false" wasd-controls="enabled: false; acceleration: 180" position="0 1.6 0">
            <a-entity cursor="rayOrigin: mouse" raycaster="objects: .tour-hotspot"></a-entity>
          </a-entity>
          <a-sky id="tourSky" src="img/Renders%20360/Exteriores/SERENAS_BALCONY%20360%20-%2033B.webp" rotation="0 -90 0" radius="30"></a-sky>
          <a-sky id="tourSkyBlend" visible="false" rotation="0 -90 0" radius="29.8"></a-sky>
          <a-entity id="tourHotspots"></a-entity>

          <!-- Pin de posición (modo clic) — aparece en la esfera donde se hizo clic -->
          <a-entity id="tourClickPin" visible="false">
            <a-sphere radius="0.22" material="color: #00ff88; emissive: #00cc66; emissiveIntensity: 1; opacity: 0.95; transparent: true"
              animation="property: scale; dir: alternate; dur: 900; easing: easeInOutSine; loop: true; to: 1.45 1.45 1.45"></a-sphere>
          </a-entity>
        </a-scene>
      </div>
    </div>
  </div>


  <script>
    // ================================
    // Hero map click handling (inline SVG)
    // ================================
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
        image: 'img/Serenas3rooms.svg',
        interactive: true,
        step2Svg: 'img/masterplan3room.svg'
      },
      'without-balcony': {
        title: 'Unit with 2 rooms',
        image: 'img/Serenas2rooms.svg',
        interactive: true,
        step2Svg: 'img/masterplan2room.svg'
      }
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
      laundry: 'pasillo-2'
    };

    function getStep2MasterplanSvg(viewKey) {
      const view = heroApartmentViews[viewKey];
      return view && view.step2Svg ? view.step2Svg : 'img/masterplan2room.svg';
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
      });
      node.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          e.stopPropagation();
          onActivate(node);
        }
      });
    }

    function setupInteractiveNoBalcony(svgText, viewKey) {
      if (!heroFrontSvgStage) return false;
      heroFrontSvgStage.innerHTML = svgText;
      heroFrontSvgStage.classList.remove('is-step-2');
      heroFrontView?.classList.remove('step-2-focus');
      const inlineSvg = heroFrontSvgStage.querySelector('svg');
      if (!inlineSvg) return false;

      inlineSvg.setAttribute('preserveAspectRatio', 'xMidYMid slice');
      if (heroFrontTitle) heroFrontTitle.textContent = 'Select unit layout';

      const currentViewKey = viewKey;
      const openStep2 = () => {
        fetch(getStep2MasterplanSvg(currentViewKey))
          .then((r) => r.text())
          .then((nextSvgText) => {
            setupMasterplan2RoomStep(nextSvgText);
          });
      };

      let hotspots = inlineSvg.querySelectorAll('[data-front-nav], [id^="app"], [id^="APP"]');
      if (!hotspots.length) hotspots = inlineSvg.querySelectorAll('[id]');

      hotspots.forEach((node) => {
        if (node.id === 'Layer_1') return;
        makeSvgElementButton(node, openStep2);
      });

      return true;
    }

    function setupMasterplan2RoomStep(svgText) {
      if (!heroFrontSvgStage) return false;
      heroFrontSvgStage.innerHTML = svgText;
      heroFrontSvgStage.classList.add('is-step-2');
      heroFrontSvgStage.classList.remove('step2-animate');
      void heroFrontSvgStage.offsetWidth;
      heroFrontSvgStage.classList.add('step2-animate');
      heroFrontView?.classList.add('step-2-focus');
      const inlineSvg = heroFrontSvgStage.querySelector('svg');
      if (!inlineSvg) return false;

inlineSvg.setAttribute('preserveAspectRatio', 'xMidYMid meet');
      if (heroFrontTitle) heroFrontTitle.textContent = 'Select area to start 360 tour';

      const sceneNodes = inlineSvg.querySelectorAll('[id]');
      sceneNodes.forEach((node) => {
        if (node.id === 'Layer_1' || node.id === 'Background') return;
        const sceneId = resolveTourSceneId(node.getAttribute('data-scene') || node.id || '');
        if (!sceneId) return;

        const targetScene = getSceneById(sceneId);
        const areaLabel = targetScene ? targetScene.title : sceneId;
        node.setAttribute('aria-label', areaLabel);

        const hideAreaHint = () => {
          if (!heroFrontAreaTooltip) return;
          heroFrontAreaTooltip.classList.remove('visible');
          heroFrontAreaTooltip.setAttribute('aria-hidden', 'true');
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

      if (heroFrontTitle) heroFrontTitle.textContent = view.title;

      if (view.interactive && heroFrontSvgStage) {
        fetch(view.image)
          .then((r) => r.text())
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
            heroFrontSvgStage.setAttribute('aria-hidden', 'true');
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
        heroFrontSvgStage.classList.remove('step2-animate');
        heroFrontSvgStage.setAttribute('aria-hidden', 'true');
        heroFrontSvgStage.innerHTML = '';
      }
      if (heroFrontAreaTooltip) {
        heroFrontAreaTooltip.classList.remove('visible');
        heroFrontAreaTooltip.setAttribute('aria-hidden', 'true');
      }
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
      'app31-T', 'app32', 'app33', 'app34-T'
    ];

    function getApartmentElements(svgContainer) {
      if (!svgContainer) return [];

      const identifiedUnits = Array.from(
        svgContainer.querySelectorAll('[id^="app"], [id^="APP"], [data-unit-id]')
      );
      if (identifiedUnits.length) return identifiedUnits;

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
        const viewKey = /-T$/i.test(id) ? 'with-balcony' : 'without-balcony';
        const apartmentLabel = viewKey === 'with-balcony' ? '3 Rooms' : '2 Rooms';
        const unitNum = id.replace(/[^0-9]/g, '');

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
        g.setAttribute('aria-label', 'Apartamento ' + id + ' ' + apartmentLabel);

        g.addEventListener('mouseenter', (e) => {
          element.style.transform = 'scale(1.04)';
          element.style.filter = 'brightness(1.13) drop-shadow(0 0 12px rgba(210,168,24,0.85)) drop-shadow(0 0 28px rgba(210,168,24,0.38))';
          if (!tooltip || !tooltipText) return;
          tooltipText.textContent = 'Unit ' + unitNum + '  ·  ' + apartmentLabel + '  →';
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

        const openUnit = () => showHeroFrontView(viewKey);
        g.addEventListener('click', openUnit);
        g.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openUnit();
          }
        });
      });
    }

    // Load SVG externally then init interactions
    document.addEventListener('DOMContentLoaded', () => {
      const svgContainer = document.querySelector('#svgContainer');
      const shouldUseMobileMasterPlan = window.matchMedia('(max-width: 768px)').matches;
      if (svgContainer && !shouldUseMobileMasterPlan) {
        fetch('img/plano-interactivo.min.svg')
          .then(r => r.text())
          .then(svgText => {
            svgContainer.innerHTML = svgText;
            const loadedSvg = svgContainer.querySelector('svg');
            if (loadedSvg) {
              loadedSvg.setAttribute('preserveAspectRatio', 'xMidYMid slice');
            }
            initSvgApartmentClicks();
          });
      } else if (svgContainer) {
        svgContainer.innerHTML = '';
      }
    });

    // Hero close button
    if (heroFrontClose) {
      heroFrontClose.addEventListener('click', hideHeroFrontView);
    }
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && heroFrontView && heroFrontView.classList.contains('active')) {
        hideHeroFrontView();
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
        image: 'img/Renders%20360/Exteriores/SERENAS_BALCONY%20360%20-%2033B.webp',
        mobileImage: 'img/Renders%20360/Exteriores/SERENAS_BALCONY%20360%20-%2033B.webp',
        rotation: '0 -90 0',
        hotspots: [
          { to: 'sala', label: 'Living Room', position: '0 0 4' }
        ]
      },
      {
        id: 'sala',
        title: 'Living Room',
        image: 'img/Renders%20360/Interiores/Sala.webp',
        mobileImage: 'img/Renders%20360/Interiores/Sala.webp',
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
        image: 'img/Renders%20360/Interiores/Comedor.webp',
        mobileImage: 'img/Renders%20360/Interiores/Comedor.webp',
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
        image: 'img/Renders%20360/Interiores/Cocina.webp',
        mobileImage: 'img/Renders%20360/Interiores/Cocina.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Comedor: arco/apertura hacia comedor visible al (~48%) → detrás
          { to: 'comedor', label: 'Dining Room', position: '-2.5 0.6 -4' }
        ]
      },
      {
        id: 'pasillo',
        title: 'Door',
        image: 'img/Renders%20360/Interiores/Pasillo.webp',
        mobileImage: 'img/Renders%20360/Interiores/Pasillo.webp',
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
        image: 'img/Renders%20360/Interiores/Dormitorio%20principal.webp',
        mobileImage: 'img/Renders%20360/Interiores/Dormitorio%20principal.webp',
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
        image: 'img/Renders%20360/Interiores/Baño.webp',
        mobileImage: 'img/Renders%20360/Interiores/Baño.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta de regreso al dormitorio principal (~5%) → casi al frente
          { to: 'dormitorio-principal', label: 'Bedroom', position: '-0.8 -1 4.6' }
        ]
      },
      {
        id: 'dormitorio-a',
        title: 'Bedroom A',
        image: 'img/Renders%20360/Interiores/Dormitorio%20A.webp',
        mobileImage: 'img/Renders%20360/Interiores/Dormitorio%20A.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta al pasillo 2 visible (~10%) → adelante-izquierda
          { to: 'pasillo-2', label: 'Hallway', position: '-4.3 0.5 -2' }
        ]
      },
      {
        id: 'pasillo-2',
        title: 'Hallway 2',
        image: 'img/Renders%20360/Interiores/Pasillo2.webp',
        mobileImage: 'img/Renders%20360/Interiores/Pasillo2.webp',
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
         
        ]
      },
      {
        id: 'dormitorio-b',
        title: 'Bedroom B',
        image: 'img/Renders%20360/Interiores/Dormitorio%20B.webp',
        mobileImage: 'img/Renders%20360/Interiores/Dormitorio%20B.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta al pasillo 2 (~17%) → izquierda-adelante
          { to: 'pasillo-2', label: 'Hallway 2', position: '-4.4 0 -2.4' }
        ]
      },
      {
        id: 'bano-2',
        title: 'Bathroom 2',
        image: 'img/Renders%20360/Interiores/Baño%202.webp',
        mobileImage: 'img/Renders%20360/Interiores/Baño%202.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta abierta hacia pasillo 2 (~30%) → izquierda-detrás
          { to: 'pasillo-2', label: 'Hallway 2', position: '-1 -1.4 -4.5' }
        ]
      },
      {
        id: 'wc',
        title: 'WC',
        image: 'img/Renders%20360/Interiores/WC.webp',
        mobileImage: 'img/Renders%20360/Interiores/WC.webp',
        rotation: '0 -90 0',
        hotspots: [
          // Puerta de regreso al pasillo 2 (~40%) → izquierda-detrás
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
    const tourTransitionOverlay = document.getElementById('tourTransitionOverlay');
    const tourPosToggle = document.getElementById('tourPosToggle');
    const tourPosDebug = document.getElementById('tourPosDebug');
    const tourPosDisplay = document.getElementById('tourPosDisplay');
    const tourPosCopyBtn = document.getElementById('tourPosCopyBtn');
    const tourPosFixBtn  = document.getElementById('tourPosFixBtn');
    const tourTouchHint = document.getElementById('tourTouchHint');
    const openTourButtons = document.querySelectorAll('.js-open-tour');
    const isMobileViewport = () => window.matchMedia('(max-width: 768px)').matches;
    const isTouchViewport = () => window.matchMedia('(hover: none), (pointer: coarse)').matches;
    let isTransitioning = false;
    const SCENE_BLEND_SWAP_DELAY = 120;
    const SCENE_BLEND_TOTAL_DURATION = 900;
    const SCENE_MOVE_SWAP_DELAY = 320;
    const SCENE_MOVE_CAMERA_RESET_DELAY = 220;
    const SCENE_MOVE_TOTAL_DURATION = 1180;
    const DEFAULT_TOUR_FOV = 80;
    const MIN_TOUR_FOV = 45;
    const MAX_TOUR_FOV = 95;
    const PINCH_ZOOM_STRENGTH = 0.78;
    const TOUCH_LOOK_SENSITIVITY = 0.0032;
    const MAX_TOUR_PITCH = (Math.PI / 2) - 0.08;
    const ENABLE_TOUR_HOTSPOTS = false;
    const TOUCH_HINT_STORAGE_KEY = 'tour-touch-hint-seen';
    let tourTouchHintTimeout = null;
    let tourTouchHintShowTimeout = null;

    const availableTourIndexes = tourScenes
      .map((scene, index) => scene.locked ? null : index)
      .filter((index) => index !== null);

    let activeTourIndex = availableTourIndexes[0] || 0;

    function getSceneImage(scene) {
      if (!scene) return '';
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
      if (!tourSceneList) return;
      tourSceneList.querySelectorAll('button').forEach((button) => {
        button.disabled = disabled || button.classList.contains('locked');
      });
    }

    function renderHotspots(scene) {
      if (!tourHotspots) return;
      tourHotspots.innerHTML = '';
      if (!ENABLE_TOUR_HOTSPOTS) {
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

    function replaceSkyTexture(source, rotation, options = {}) {
      if (!tourScene || !tourSky || !tourSkyBlend) return;

      const crossfade = Boolean(options.crossfade);
      const fadeDuration = Number(options.fadeDuration) > 0 ? Number(options.fadeDuration) : 320;
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

      if (tourSceneTitle) tourSceneTitle.textContent = scene.title;
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
        setTourRotation(0, 0);
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
          skyFadeDuration: 760,
          keepControlsDisabled: true
        });
      }, SCENE_BLEND_SWAP_DELAY);

      window.setTimeout(() => {
        if (tourHotspots) tourHotspots.setAttribute('visible', 'true');
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
          skyFadeDuration: 820,
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
        if (tourHotspots) tourHotspots.setAttribute('visible', 'true');
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

      const step2Svg = getStep2MasterplanSvg('without-balcony');
      fetch(step2Svg)
        .then((r) => r.text())
        .then((svgText) => {
          const ok = setupMasterplan2RoomStep(svgText);
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

      setTourScene(activeTourIndex, true);
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

    setupClickPositionPicker();
    setupTouchZoom();

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
  </script>

</body>
</html>
