<?php
// Handle survey submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['survey_submit'])) {
    header('Content-Type: application/json');

    try {
        $data = $_POST;
        unset($data['survey_submit']); // Remove the submit flag
        $data['timestamp'] = date('Y-m-d H:i:s');
        $data['ip'] = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        $file = __DIR__ . '/survey-responses.json';

        $existing = [];
        if (file_exists($file)) {
            $content = file_get_contents($file);
            if ($content) {
                $existing = json_decode($content, true);
                if (!is_array($existing)) {
                    $existing = [];
                }
            }
        }

        $existing[] = $data;

        $success = file_put_contents(
            $file,
            json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        if ($success !== false) {
            echo json_encode(['status' => 'ok', 'message' => 'Survey saved successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to save']);
        }

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }

    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Las Lomas Serenas</title>
  <script src="https://aframe.io/releases/1.6.0/aframe.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
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
      background:
        linear-gradient(to bottom, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.12)),
        url('./Master%20Plan%20%26%20Ocean%20(1).webp') center 35%/cover no-repeat;
      display: flex;
      align-items: flex-start;
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
    }

    .hero-copy h1 {
      font-size: clamp(1.8rem, 4.3vw, 3.7rem);
      line-height: 1.12;
      letter-spacing: 0.12em;
      color: var(--logo-green);
      font-weight: 500;
      text-transform: uppercase;
      text-shadow: 0 12px 36px rgba(0, 0, 0, 0.45);
      max-width: none;
      margin: 0 auto;
      white-space: nowrap;
      
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

    .tour-panel {
      position: absolute;
      left: 50%;
      bottom: 1rem;
      transform: translateX(-50%);
      z-index: 20;
      width: min(940px, calc(100% - 1.5rem));
      padding: 0.6rem;
      border-radius: 16px;
      background: rgba(10, 20, 17, 0.76);
      border: 1px solid rgba(255, 255, 255, 0.14);
      color: #fff;
      display: grid;
      gap: 0.5rem;
      backdrop-filter: blur(10px);
      box-shadow: 0 18px 40px rgba(0, 0, 0, 0.3);
    }

    .tour-panel h3 {
      color: #fff;
      font-size: 0.98rem;
      line-height: 1.2;
      font-weight: 600;
      padding: 0 0.2rem;
    }

    .tour-panel p,
    .tour-status {
      color: rgba(255, 255, 255, 0.82);
      font-size: 0.77rem;
      line-height: 1.35;
    }

    .tour-status {
      color: rgba(255, 255, 255, 0.92);
      font-weight: 600;
      font-size: 0.74rem;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 0 0.2rem;
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

    .tour-controls {
      position: static;
      transform: none;
      z-index: auto;
      width: 100%;
      display: grid;
      grid-template-columns: 52px 1fr 52px;
      gap: 0.6rem;
      align-items: center;
      padding: 0;
    }

    .tour-nav-btn,
    .tour-guide-btn,
    .tour-walk-btn {
      height: 44px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #fff;
      background: rgba(255, 255, 255, 0.08);
      cursor: pointer;
      font: inherit;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
    }

    .tour-nav-btn {
      font-size: 1.2rem;
    }

    .tour-nav-btn:disabled,
    .tour-guide-btn:disabled,
    .tour-walk-btn:disabled {
      opacity: 0.4;
      cursor: not-allowed;
    }

    .tour-scene-list {
      display: flex;
      gap: 0.5rem;
      overflow-x: auto;
      padding-bottom: 2px;
      scrollbar-width: thin;
    }

    .tour-scene-pill {
      padding: 0.55rem 0.65rem;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.88);
      line-height: 1.2;
      font-weight: 600;
      cursor: pointer;
      font: inherit;
      font-size: 0.78rem;
      white-space: nowrap;
    }

    .tour-scene-pill.active {
      background: linear-gradient(135deg, #2d7a52, #1a5f3a);
      color: #fff;
      border-color: transparent;
    }

    .tour-scene-pill.locked {
      background: rgba(255, 255, 255, 0.04);
      color: rgba(255, 255, 255, 0.42);
      border-color: rgba(255, 255, 255, 0.08);
      cursor: not-allowed;
    }

    .tour-stage {
      position: absolute;
      inset: 0;
      background: #000;
    }

    .tour-scene {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

    .tour-joystick {
      position: absolute;
      left: 1rem;
      bottom: 1rem;
      z-index: 20;
      width: 170px;
      display: none;
      grid-template-columns: repeat(3, 50px);
      grid-template-areas:
        '. up .'
        'left down right';
      gap: 10px;
      justify-items: center;
    }

    .tour-joystick.active {
      display: grid;
    }

    .tour-joy-btn {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      background: rgba(9, 18, 15, 0.8);
      color: #fff;
      font-size: 0.86rem;
      font-weight: 700;
      user-select: none;
      touch-action: none;
    }

    .tour-joy-btn[data-dir="forward"] { grid-area: up; }
    .tour-joy-btn[data-dir="left"] { grid-area: left; }
    .tour-joy-btn[data-dir="back"] { grid-area: down; }
    .tour-joy-btn[data-dir="right"] { grid-area: right; }

    .tour-joy-btn.active {
      background: rgba(212, 175, 55, 0.92);
    }

    footer {
      padding: 12px 0 26px;
      text-align: center;
      color: var(--muted);
      font-size: 0.82rem;
    }

    .a-enter-ar-button:active,
    .a-enter-ar-button:hover,
    .a-enter-vr-button:active,
    .a-enter-vr-button:hover {
      background-color: #0f4f40 !important;
    }

    @media (max-width: 960px) {
      .split,
      .housing .split,
      .gallery {
        grid-template-columns: 1fr;
      }

      .hero {
        min-height: 78vh;
        background-position: center 30%;
      }

      .hero-copy {
        padding-top: 44px;
      }

      .card-image,
      .gallery-item {
        min-height: 300px;
      }

      .floorplan {
        min-height: 430px;
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
      }

      .hero-copy {
        padding-top: 30px;
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
        width: min(132%, 760px);
      }

      .gallery-item {
        min-height: 260px;
      }

      .survey-modal-content {
        padding: 20px;
      }

      .tour-panel {
        left: 50%;
        bottom: 0.5rem;
        width: calc(100% - 1rem);
        padding: 0.55rem;
        gap: 0.4rem;
      }

      .tour-stage {
        min-height: 100%;
      }

      .tour-scene {
        height: 100%;
      }

      .tour-controls {
        grid-template-columns: 44px 1fr 44px;
        gap: 0.45rem;
      }

      .tour-guide-btn {
        display: none;
      }

      .tour-scene-pill {
        font-size: 0.74rem;
      }

      .tour-panel h3,
      .tour-status {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="hero-inner container">
      <nav class="nav">
        <div></div>
        <a href="#" class="logo" aria-label="Las Lomas Serenas">
          <img src="./Las%20Lomas%20logo.png" alt="Las Lomas Serenas" />
        </a>
        <a href="#" class="menu" aria-label="Abrir menú">
          <span>Menu</span>
          <span class="menu-icon"><span></span></span>
        </a>
      </nav>

      <div class="hero-copy">
        <h1>Caribbean Living, Every Day.</h1>
        <a href="#" class="hero-tour-link js-open-tour">Enter Guided 360 Tour</a>
      </div>
    </div>
  </header>

  <section class="intro section">
    <div class="container">
      <h2 class="section-title">A private residential destination shaped by climate, calm, and everyday beauty.</h2>
      <p class="section-text">
        Las Lomas Serenas is a condominium development in Sosúa, Puerto Plata, created for people who want more than a property. It is a place designed around warmth, ease, scenery, security, and a more generous rhythm of life on the North Coast of the Dominican Republic.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container split">
      <div class="card-image" aria-label="Lifestyle image"></div>

      <div class="content-block">
        <h2>A refined community with the feeling of a retreat.</h2>
        <p>
          Owned and operated by U.S. investors and entrepreneurs, Las Lomas Serenas blends everyday comfort with a destination lifestyle. The experience feels private and composed, while still connected to beaches, restaurants, sports, and the social energy of Sosúa.
        </p>

        <div class="feature-list">
          <article class="feature">
            <div class="feature-number">01</div>
            <div>
              <h3>24-hour security</h3>
              <p>Designed for peace of mind, comfort, and a relaxed sense of home.</p>
            </div>
          </article>

          <article class="feature">
            <div class="feature-number">02</div>
            <div>
              <h3>Year-round tropical climate</h3>
              <p>Temperatures averaging between 75°F and 88°F invite outdoor living every season.</p>
            </div>
          </article>

          <article class="feature">
            <div class="feature-number">03</div>
            <div>
              <h3>North Coast positioning</h3>
              <p>Beautifully placed in Puerto Plata’s vibrant seaside environment, where nature and convenience meet.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="housing section">
    <div class="container split">
      <div class="content-block">
        <h2>Homes designed to feel personal, spacious, and beautifully composed.</h2>
        <p>
          The development features 2- and 3-bedroom condominiums equipped with the comforts and conveniences people expect in a true home. The approach is warm, practical, and refined — ideal for full-time residents, seasonal owners, or investors.
        </p>

        <div class="feature-list">
          <article class="feature">
            <div class="feature-number">01</div>
            <div>
              <h3>2-bedroom residences</h3>
              <p>Flexible, elegant spaces for couples, part-time living, or those seeking a refined tropical base.</p>
            </div>
          </article>

          <article class="feature">
            <div class="feature-number">02</div>
            <div>
              <h3>3-bedroom residences</h3>
              <p>Spacious layouts that offer more room for family life, hosting, and long-term comfort.</p>
            </div>
          </article>

          <article class="feature">
            <div class="feature-number">03</div>
            <div>
              <h3>Everyday comfort</h3>
              <p>Layouts and living spaces conceived for ease, elegance, and the kind of home people genuinely want to return to.</p>
            </div>
          </article>
        </div>
      </div>

      <div class="floorplan" aria-label="Floor plan illustration">
        <img src="./casa3d.png" alt="3D floor plan" />
      </div>
    </div>
  </section>

  <section class="lifestyle section">
    <div class="container">
      <h2 class="section-title">An active, social lifestyle designed around recreation, ease, and community.</h2>
      <p class="section-text">
        Las Lomas Serenas is more than a place to own property. It is a place to move, connect, relax, and enjoy the rhythm of the North Coast — from sports and wellness to family time and beautiful everyday moments.
      </p>

      <div class="gallery">
        <div class="gallery-item" aria-label="Amenities"></div>
        <div class="gallery-item" aria-label="Pool lifestyle"></div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="cta-logo" aria-hidden="true">
        <img src="./Las%20Lomas%20logo.png" alt="" />
      </div>
      <h2>Own the lifestyle people travel to find.</h2>
      <div class="cta-actions">
        <a href="#" class="btn js-open-survey">Request Information</a>
        <a href="#" class="btn btn-outline js-open-tour">Open 360 Tour</a>
      </div>
      <p>
        A private residential experience on the North Coast of the Dominican Republic, shaped by climate, beauty, comfort, and long-term possibility.
      </p>
    </div>
  </section>

  <div id="surveyModal" class="survey-modal" aria-hidden="true">
    <div class="survey-modal-content" role="dialog" aria-modal="true" aria-labelledby="surveyTitle">
      <button class="survey-close" type="button" aria-label="Close survey">&times;</button>

      <label style="font-weight:600;">Language / Idioma</label>
      <select id="surveyLang">
        <option value="en">English</option>
        <option value="es">Espanol</option>
      </select>

      <h2 id="surveyTitle" data-en="Quick Housing Survey" data-es="Encuesta rapida de vivienda"></h2>
      <p data-en="May I ask you a few questions about a proposed affordable resort-style condominium project for this area."
         data-es="Puedo hacerle algunas preguntas sobre un proyecto de condominio estilo resort asequible propuesto para esta area."></p>

      <form id="surveyForm">
        <h3 data-en="Have you thought about having your own home?" data-es="Ha pensado en tener su propia vivienda?"></h3>
        <label><input type="radio" name="own_home" value="Yes" required><span data-en="Yes" data-es="Si"></span></label>
        <label><input type="radio" name="own_home" value="No"><span data-en="No" data-es="No"></span></label>

        <h3 data-en="What amenities are most important to you in a residential complex? (Select all that apply)"
            data-es="Que amenidades son mas importantes para usted en un complejo residencial? (Seleccione todas las que apliquen)"></h3>
        <label><input type="checkbox" name="amenities[]" value="24/7 Security"><span data-en="24/7 Security" data-es="Seguridad 24/7"></span></label>
        <label><input type="checkbox" name="amenities[]" value="Pool"><span data-en="Pool" data-es="Piscina"></span></label>
        <label><input type="checkbox" name="amenities[]" value="Gym"><span data-en="Gym" data-es="Gimnasio"></span></label>
        <label><input type="checkbox" name="amenities[]" value="Community room"><span data-en="Community room" data-es="Salon comunal"></span></label>
        <label><input type="checkbox" name="amenities[]" value="Basketball court"><span data-en="Basketball court" data-es="Cancha de baloncesto"></span></label>
        <label><input type="checkbox" name="amenities[]" value="Children's playground"><span data-en="Children's playground" data-es="Parque infantil"></span></label>

        <h3 data-en="Are there any other amenities that are important to you?" data-es="Hay otras amenidades que sean importantes para usted?"></h3>
        <input type="text" name="other_amenities" placeholder="">

        <h3 data-en="Which floor would you prefer to live on?" data-es="En que piso preferiria vivir?"></h3>
        <label><input type="radio" name="floor" value="1st Floor"><span data-en="1st Floor" data-es="1er Piso"></span></label>
        <label><input type="radio" name="floor" value="2nd Floor"><span data-en="2nd Floor" data-es="2do Piso"></span></label>
        <label><input type="radio" name="floor" value="3rd Floor"><span data-en="3rd Floor" data-es="3er Piso"></span></label>

        <h3 data-en="Would you be interested in a two-bedroom or three-bedroom apartment?"
            data-es="Le interesaria un apartamento de dos o tres habitaciones?"></h3>
        <label><input type="radio" name="bedrooms" value="Two bedrooms"><span data-en="Two bedrooms" data-es="Dos habitaciones"></span></label>
        <label><input type="radio" name="bedrooms" value="Three bedrooms"><span data-en="Three bedrooms" data-es="Tres habitaciones"></span></label>

        <h3 data-en="Can we contact you by WhatsApp or email with updates on the project?"
            data-es="Podemos contactarlo por WhatsApp o correo electronico con actualizaciones del proyecto?"></h3>
        <label><input type="radio" name="contact_permission" value="Yes"><span data-en="Yes" data-es="Si"></span></label>
        <label><input type="radio" name="contact_permission" value="No"><span data-en="No" data-es="No"></span></label>

        <h3 data-en="Contact Information" data-es="Informacion de contacto"></h3>
        <input type="text" name="name" placeholder="Name / Nombre" required>
        <input type="text" name="contact" placeholder="Email / WhatsApp" required>

        <button type="submit" data-en="Submit Survey" data-es="Enviar Encuesta"></button>
      </form>
    </div>
  </div>

  <div class="tour-modal" id="tourModal" aria-hidden="true">
    <div class="tour-shell" role="dialog" aria-modal="true" aria-labelledby="tourSceneTitle">
      <button class="tour-close" id="tourCloseBtn" type="button" aria-label="Close 360 tour">&times;</button>
      <div class="tour-panel">
        <h3 id="tourSceneTitle">Las Lomas 360 Experience</h3>
        <div class="tour-status" id="tourStatus">Scene 1 of 2</div>
        <div class="tour-controls">
          <button class="tour-nav-btn" id="tourPrevBtn" type="button" aria-label="Previous scene">&larr;</button>
          <div class="tour-scene-list" id="tourSceneList"></div>
          <button class="tour-nav-btn" id="tourNextBtn" type="button" aria-label="Next scene">&rarr;</button>
        </div>
      </div>
      <div class="tour-stage">
        <a-scene embedded vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false" renderer="colorManagement: true; antialias: true; precision: high" class="tour-scene" id="tourScene">
          <a-assets>
            <img id="tourAssetApartment" src="img/apartament360.png" alt="Apartment panorama">
            <img id="tourAssetApartmentMobile" src="img/apartament360-mobile.webp" alt="Apartment panorama mobile">
            <img id="tourAssetBedroom" src="img/bedroom360.png" alt="Bedroom panorama">
            <img id="tourAssetBedroomMobile" src="img/bedroom360-mobile.webp" alt="Bedroom panorama mobile">
            <img id="tourAssetKitchen" src="img/kitchen360.png" alt="Kitchen panorama">
            <img id="tourAssetKitchenMobile" src="img/kitchen360-mobile.webp" alt="Kitchen panorama mobile">
            <img id="tourAssetBalcony" src="img/balcon360.webp" alt="Balcony panorama">
            <img id="tourAssetBalconyMobile" src="img/balcon360.webp" alt="Balcony panorama mobile">
            <img id="tourAssetPool" src="img/Pool.webp" alt="Pool panorama">
            <img id="tourAssetPoolMobile" src="img/Pool.webp" alt="Pool panorama mobile">
          </a-assets>
          <a-entity camera look-controls wasd-controls="enabled: false; acceleration: 180" position="0 1.6 0">
            <a-entity cursor="rayOrigin: mouse" raycaster="objects: .tour-hotspot"></a-entity>
          </a-entity>
          <a-sky id="tourSky" src="#tourAssetBalconyMobile" rotation="0 -90 0"></a-sky>
          <a-entity id="tourHotspots"></a-entity>
        </a-scene>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">Las Lomas Serenas — Landing page concept</div>
  </footer>

  <script>
    const pageBody = document.body;

    const surveyModal = document.getElementById('surveyModal');
    const surveyForm = document.getElementById('surveyForm');
    const surveyCloseBtn = document.querySelector('.survey-close');
    const surveyLang = document.getElementById('surveyLang');
    const surveyButtons = document.querySelectorAll('.js-open-survey');

    function openSurvey() {
      if (!surveyModal) return;
      surveyModal.classList.add('active');
      surveyModal.setAttribute('aria-hidden', 'false');
      pageBody.style.overflow = 'hidden';
    }

    function closeSurvey() {
      if (!surveyModal) return;
      surveyModal.classList.remove('active');
      surveyModal.setAttribute('aria-hidden', 'true');
      pageBody.style.overflow = '';
    }

    if (surveyModal && !localStorage.getItem('surveyShown')) {
      window.setTimeout(() => {
        openSurvey();
        localStorage.setItem('surveyShown', 'true');
      }, 5000);
    }

    surveyButtons.forEach((button) => {
      button.addEventListener('click', (event) => {
        event.preventDefault();
        openSurvey();
      });
    });

    if (surveyCloseBtn) {
      surveyCloseBtn.addEventListener('click', closeSurvey);
    }

    if (surveyModal) {
      surveyModal.addEventListener('click', (event) => {
        if (event.target === surveyModal) {
          closeSurvey();
        }
      });
    }

    function setSurveyLanguage(lang) {
      document.querySelectorAll('[data-en]').forEach((element) => {
        element.textContent = element.dataset[lang] || element.dataset.en;
      });
    }

    if (surveyLang) {
      setSurveyLanguage('en');
      surveyLang.addEventListener('change', (event) => {
        setSurveyLanguage(event.target.value);
      });
    }

    if (surveyForm) {
      surveyForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        const data = new FormData(surveyForm);
        data.append('survey_submit', '1');

        try {
          const response = await fetch('survey-save.php', {
            method: 'POST',
            body: data
          });

          if (!response.ok) {
            throw new Error('HTTP ' + response.status);
          }

          const result = await response.json();
          if (result.status === 'ok') {
            alert('Thank you! Survey submitted successfully.');
            surveyForm.reset();
            closeSurvey();
          } else {
            alert('Error saving survey: ' + (result.message || 'Unknown error'));
          }
        } catch (error) {
          alert('Could not submit survey right now. Please try again.');
          console.error(error);
        }
      });
    }

    const tourScenes = [
      {
        id: 'balcony-panorama',
        title: 'Balcony',
        description: 'Balcony preview enabled for the current guided tour test.',
        guideTip: 'Test scene one: exterior view from the balcony.',
        image: 'img/balcon360.webp',
        mobileImage: 'img/balcon360.webp',
        rotation: '0 -90 0',
        hotspots: [
          { to: 'pool-panorama', label: 'Pool', position: '-1.42 0.12 -4.62' }
        ]
      },
      {
        id: 'pool-panorama',
        title: 'Pool',
        description: 'Pool preview enabled for the current guided tour test.',
        guideTip: 'Test scene two: amenity view from the pool area.',
        image: 'img/Pool.webp',
        mobileImage: 'img/Pool.webp',
        rotation: '0 -90 0',
        hotspots: [
          { to: 'balcony-panorama', label: 'Balcony', position: '1.18 0.10 -4.58' }
        ]
      },
      {
        id: 'apartment-locked',
        title: 'Apartment Overview',
        image: 'img/apartament360.webp',
        mobileImage: 'img/apartament360-mobile.webp',
        rotation: '0 -90 0',
        locked: true,
        hotspots: []
      },
      {
        id: 'bedroom-locked',
        title: 'Bedroom',
        image: 'img/bedroom360.png',
        mobileImage: 'img/bedroom360-mobile.webp',
        rotation: '0 -90 0',
        locked: true,
        hotspots: []
      },
      {
        id: 'kitchen-locked',
        title: 'Kitchen',
        image: 'img/kitchen360.png',
        mobileImage: 'img/kitchen360-mobile.webp',
        rotation: '0 -90 0',
        locked: true,
        hotspots: []
      }
    ];

    const tourModal = document.getElementById('tourModal');
    const tourCloseBtn = document.getElementById('tourCloseBtn');
    const tourScene = document.getElementById('tourScene');
    let tourSky = document.getElementById('tourSky');
    const tourHotspots = document.getElementById('tourHotspots');
    const tourCamera = tourScene ? tourScene.querySelector('[camera]') : null;
    const tourSceneTitle = document.getElementById('tourSceneTitle');
    const tourSceneDescription = document.getElementById('tourSceneDescription');
    const tourStatus = document.getElementById('tourStatus');
    const tourSceneList = document.getElementById('tourSceneList');
    const tourPrevBtn = document.getElementById('tourPrevBtn');
    const tourNextBtn = document.getElementById('tourNextBtn');
    const openTourButtons = document.querySelectorAll('.js-open-tour');
    const isMobileViewport = () => window.matchMedia('(max-width: 768px)').matches;

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

      (scene.hotspots || []).forEach((spot) => {
        const targetScene = getSceneById(spot.to);
        if (!targetScene || targetScene.locked) return;

        const [x, y, z] = spot.position.split(' ');
        const yFloat = (parseFloat(y) + 0.14).toFixed(3);
        const hotspotGroup = document.createElement('a-entity');
        hotspotGroup.setAttribute('position', spot.position);
        hotspotGroup.setAttribute('animation__float', 'property: position; dir: alternate; dur: 1100; easing: easeInOutSine; loop: true; to: ' + x + ' ' + yFloat + ' ' + z);

        const hotspot = document.createElement('a-entity');
        hotspot.classList.add('tour-hotspot');
        hotspot.setAttribute('geometry', 'primitive: cone; radiusBottom: 0.2; radiusTop: 0.04; height: 0.38');
        hotspot.setAttribute('rotation', '0 0 180');
        hotspot.setAttribute('material', 'color: #d4af37; emissive: #8f6a17; emissiveIntensity: 0.9; opacity: 0.97');
        hotspot.setAttribute('animation__pulse', 'property: scale; dir: alternate; dur: 780; easing: easeInOutSine; loop: true; to: 1.24 1.24 1.24');

        const hitArea = document.createElement('a-entity');
        hitArea.classList.add('tour-hotspot');
        hitArea.setAttribute('geometry', 'primitive: sphere; radius: 0.44');
        hitArea.setAttribute('material', 'opacity: 0.001; transparent: true');

        const goToTarget = () => {
          const targetIndex = tourScenes.findIndex((item) => item.id === spot.to);
          if (targetIndex >= 0) {
            setTourScene(targetIndex, true);
          }
        };

        hotspot.addEventListener('click', goToTarget);
        hitArea.addEventListener('click', goToTarget);

        const label = document.createElement('a-text');
        label.setAttribute('value', spot.label || targetScene.title);
        label.setAttribute('align', 'center');
        label.setAttribute('color', '#ffffff');
        label.setAttribute('width', '2.3');
        label.setAttribute('position', '0 0.34 0');
        label.setAttribute('side', 'double');

        hotspotGroup.appendChild(hitArea);
        hotspotGroup.appendChild(hotspot);
        hotspotGroup.appendChild(label);
        tourHotspots.appendChild(hotspotGroup);
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
          button.addEventListener('click', () => setTourScene(index, true));
        }
        tourSceneList.appendChild(button);
      });
    }

    function refreshSceneViewport() {
      if (!tourScene) return;
      if (typeof tourScene.resize === 'function') {
        tourScene.resize();
      }
      if (tourScene.renderer && typeof tourScene.renderer.setSize === 'function') {
        tourScene.renderer.setPixelRatio(window.devicePixelRatio || 1);
        tourScene.renderer.setSize(window.innerWidth, window.innerHeight, false);
      }
    }

    function replaceSkyTexture(source, rotation) {
      if (!tourScene || !tourSky) return;

      const newSky = document.createElement('a-sky');
      newSky.setAttribute('id', 'tourSky');
      newSky.setAttribute('src', source);
      newSky.setAttribute('rotation', rotation || '0 -90 0');
      newSky.setAttribute('material', 'shader: flat; side: back; fog: false');
      newSky.addEventListener('materialtextureloaded', (event) => {
        const texture = event && event.detail ? event.detail.texture : null;
        if (!texture || !tourScene || !tourScene.renderer || typeof THREE === 'undefined') return;

        texture.generateMipmaps = true;
        texture.minFilter = THREE.LinearMipmapLinearFilter;
        texture.magFilter = THREE.LinearFilter;
        texture.anisotropy = tourScene.renderer.capabilities.getMaxAnisotropy();
        texture.needsUpdate = true;
      }, { once: true });

      tourScene.replaceChild(newSky, tourSky);
      tourSky = newSky;
    }

    function setTourScene(index, announce = false) {
      if (!tourSky || index < 0 || index >= tourScenes.length) return;

      const scene = tourScenes[index];
      if (!scene || scene.locked) return;
      const availableScenePosition = availableTourIndexes.indexOf(index);

      activeTourIndex = index;
      renderSceneButtons();
      renderHotspots(scene);

      if (tourSceneTitle) tourSceneTitle.textContent = scene.title;
      if (tourStatus) {
        tourStatus.textContent = 'Scene ' + (availableScenePosition + 1) + ' of ' + availableTourIndexes.length;
      }

      setControlsDisabled(false);
      replaceSkyTexture(getSceneImage(scene), scene.rotation || '0 -90 0');
      if (tourCamera) {
        tourCamera.setAttribute('rotation', '0 0 0');
      }
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

      setTourScene(activeTourIndex, true);
    }

    function closeTour() {
      if (!tourModal) return;

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

    if (tourPrevBtn) {
      tourPrevBtn.addEventListener('click', () => {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const prevAvailableIndex = currentAvailableIndex > 0 ? currentAvailableIndex - 1 : availableTourIndexes.length - 1;
        setTourScene(availableTourIndexes[prevAvailableIndex], true);
      });
    }

    if (tourNextBtn) {
      tourNextBtn.addEventListener('click', () => {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const nextAvailableIndex = (currentAvailableIndex + 1) % availableTourIndexes.length;
        setTourScene(availableTourIndexes[nextAvailableIndex], true);
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
        setTourScene(availableTourIndexes[prevAvailableIndex], true);
      }
      if (event.key === 'ArrowRight') {
        const currentAvailableIndex = availableTourIndexes.indexOf(activeTourIndex);
        const nextAvailableIndex = (currentAvailableIndex + 1) % availableTourIndexes.length;
        setTourScene(availableTourIndexes[nextAvailableIndex], true);
      }
    });

    window.addEventListener('resize', () => {
      if (tourModal && tourModal.classList.contains('active')) {
        refreshSceneViewport();
        setTourScene(activeTourIndex, false);
      }
    });

    renderSceneButtons();
  </script>

</body>
</html>


