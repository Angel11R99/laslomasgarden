<style>
  :root {
    --lls-header-overlay: 122px;
  }

  .lls-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    background: transparent;
    border: 0;
    box-shadow: none;
  }

  .lls-header-inner {
    --lls-side-column: 520px;
    width: min(1280px, calc(100% - 2.4rem));
    margin: 0 auto;
    min-height: 122px;
    padding-top: 8px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 0;
    background: transparent;
  }

  .lls-header-spacer,
  .lls-header-right {
    width: var(--lls-side-column);
    flex: 0 0 var(--lls-side-column);
  }

  .lls-header-spacer {
    visibility: hidden;
    pointer-events: none;
  }

  .lls-header-center {
    flex: 0 0 auto;
    display: flex;
    justify-content: center;
    align-items: flex-start;
  }

  .lls-header-logo {
    display: inline-block;
    text-decoration: none;
  }

  .lls-header-logo img {
    width: clamp(230px, 20vw, 320px);
    height: auto;
    display: block;
  }

  .lls-header-right {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 22px;
    padding-top: 18px;
    text-align: right;
    white-space: nowrap;
  }

  .lls-nav-list {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    align-items: center;
    gap: 25px;
  }

  .lls-nav-list a {
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: 1.94vh;
    font-size: clamp(1rem, 1.02vw, 1.1rem);
    font-weight: 400;
    line-height: 1;
    text-decoration: none;
    white-space: nowrap;
  }

  .lls-nav-list a:hover,
  .lls-nav-list a:focus-visible,
  .lls-lang-btn:hover,
  .lls-lang-btn:focus-visible {
    opacity: 0.82;
  }

  .lls-nav-item-complex a::after {
    content: "\25BE";
    margin-left: 6px;
    font-size: 0.68em;
    vertical-align: middle;
  }

  .lls-lang-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    border: 1px solid #ffffff;
    padding: 5px 12px;
    border-radius: 4px;
    background: transparent;
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(0.96rem, 0.96vw, 1.04rem);
    font-weight: 400;
    line-height: 1;
    text-decoration: none;
    white-space: nowrap;
  }

  .lls-flag-es {
    width: 17px;
    height: 12px;
    border-radius: 1px;
    background: linear-gradient(to bottom, #c60b1e 0 25%, #ffc400 25% 75%, #c60b1e 75% 100%);
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.2);
    display: inline-block;
    flex: 0 0 auto;
  }

  @media (max-width: 1260px) {
    :root {
      --lls-header-overlay: 112px;
    }

    .lls-header-inner {
      --lls-side-column: 480px;
      min-height: 112px;
    }

    .lls-header-right {
      padding-top: 16px;
    }
  }

  @media (max-width: 1120px) {
    :root {
      --lls-header-overlay: 98px;
    }

    .lls-header-inner {
      --lls-side-column: 430px;
      min-height: 98px;
      padding-top: 6px;
    }

    .lls-header-logo img {
      width: clamp(200px, 22vw, 280px);
    }

    .lls-header-right {
      padding-top: 14px;
      gap: 16px;
    }

    .lls-nav-list {
      gap: 18px;
    }

    .lls-nav-list a,
    .lls-lang-btn {
      font-size: 0.92rem;
    }
  }

  @media (max-width: 960px) {
    :root {
      --lls-header-overlay: 78px;
    }

    .lls-header-inner {
      --lls-side-column: 0px;
      width: calc(100% - 1.4rem);
      min-height: 78px;
      padding-top: 6px;
      display: grid;
      grid-template-columns: 1fr;
      justify-items: center;
      gap: 0.7rem;
    }

    .lls-header-spacer {
      display: none;
    }

    .lls-header-right {
      width: auto;
      flex: 0 1 auto;
      justify-content: center;
      padding-top: 0;
      gap: 14px;
      text-align: center;
      flex-wrap: wrap;
    }

    .lls-nav-list {
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
    }
  }
</style>

<header class="lls-header" id="site-header">
  <div class="lls-header-inner">
    <div class="lls-header-spacer" aria-hidden="true"></div>

    <div class="lls-header-center">
      <a class="lls-header-logo" href="/index.php" aria-label="Las Lomas Serenas Home">
        <img src="/paginas/Logo%20Las%20Lomas%20Serenas.svg" alt="Las Lomas Serenas logo">
      </a>
    </div>

    <div class="lls-header-right">
      <nav class="lls-nav" aria-label="Main navigation">
        <ul class="lls-nav-list">
          <li><a href="/index.php">Home</a></li>
          <li class="lls-nav-item-complex"><a href="/index.php#complex">Complex</a></li>
          <li><a href="/index.php#contact">Contact Us</a></li>
          <li><a href="/index.php#about">About Us</a></li>
        </ul>
      </nav>

      <a class="lls-lang-btn" href="/index.php" aria-label="Selected language Spanish">
        <span class="lls-flag-es" aria-hidden="true"></span>
        <span>Spanish</span>
      </a>
    </div>
  </div>
</header>
