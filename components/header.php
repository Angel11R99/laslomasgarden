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
    transition: background-color 0.28s ease, backdrop-filter 0.28s ease, -webkit-backdrop-filter 0.28s ease;
  }

  .lls-header.is-scrolled {
    background: rgba(17, 115, 127, 0.28);
    backdrop-filter: blur(10px) saturate(140%);
    -webkit-backdrop-filter: blur(10px) saturate(140%);
  }

  .lls-header-inner {
    --lls-side-column: 520px;
    width: min(1280px, calc(100% - 2.4rem));
    margin: 0 auto;
    min-height: 104px;
    padding-top: 6px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 0;
    background: transparent;
    transition: none;
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
    padding-top: 10px;
  }

  .lls-header-logo {
    display: inline-block;
    text-decoration: none;
    width: clamp(164px, 14.5vw, 228px);
    opacity: 1;
    transform: translateY(0);
    transform-origin: center top;
    will-change: transform, opacity;
    transition: opacity 0.22s ease, transform 0.28s ease;
  }

  .lls-header-logo img {
    width: 100%;
    height: auto;
    display: block;
  }

  .lls-header-right {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 18px;
    padding-top: 14px;
    text-align: right;
    white-space: nowrap;
    min-height: 64px;
    transform: translateX(1rem);
    transition: none;
  }

  .lls-header.is-compact .lls-header-inner {
    min-height: 78px;
    padding-top: 0;
    align-items: center;
  }

  .lls-header.is-compact .lls-header-center {
    align-items: center;
    padding-top: 0;
  }

  .lls-header.is-compact .lls-header-logo {
    opacity: 0;
    transform: translateY(-8px) scale(0.94);
    pointer-events: none;
  }

  .lls-header.is-compact .lls-header-right {
    padding-top: 0;
    padding-bottom: 0;
    min-height: 64px;
    align-items: center;
    transform: translateX(1rem);
  }

  .lls-nav-list {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    align-items: center;
    gap: 22px;
  }

  .lls-nav-list a {
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(0.92rem, 0.95vw, 1rem);
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
    padding: 4px 10px;
    border-radius: 4px;
    background: transparent;
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(0.88rem, 0.9vw, 0.96rem);
    font-weight: 400;
    line-height: 1;
    text-decoration: none;
    white-space: nowrap;
  }

  body.page-about .lls-header:not(.is-scrolled) .lls-nav-list a,
  body.page-about .lls-header:not(.is-scrolled) .lls-nav-item-complex a::after {
    color: #00895d;
  }

  body.page-about .lls-header:not(.is-scrolled) .lls-lang-btn {
    color: #00895d;
    border-color: #00895d;
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
      min-height: 98px;
    }

    .lls-header-right {
      padding-top: 12px;
      transform: translateX(0.7rem);
    }
  }

  @media (max-width: 1120px) {
    :root {
      --lls-header-overlay: 98px;
    }

    .lls-header-inner {
      --lls-side-column: 430px;
      min-height: 90px;
      padding-top: 4px;
    }

    .lls-header-right {
      padding-top: 10px;
      gap: 12px;
      transform: translateX(0.45rem);
    }

    .lls-nav-list {
      gap: 14px;
    }

    .lls-nav-list a,
    .lls-lang-btn {
      font-size: 0.84rem;
    }
  }

  @media (max-width: 960px) {
    :root {
      --lls-header-overlay: 132px;
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
      transform: none;
    }

    .lls-nav-list {
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .lls-header.is-compact .lls-header-inner {
      min-height: 78px;
      padding-top: 6px;
      gap: 0.7rem;
      align-items: flex-start;
    }

    .lls-header.is-compact .lls-header-logo {
      opacity: 0;
      transform: translateY(-8px) scale(0.94);
      pointer-events: none;
    }

    .lls-header.is-compact .lls-header-right {
      min-height: 64px;
      align-items: center;
    }
  }
</style>

<header class="lls-header" id="site-header">
  <div class="lls-header-inner">
    <div class="lls-header-spacer" aria-hidden="true"></div>

    <div class="lls-header-center">
      <a class="lls-header-logo" href="/" aria-label="Las Lomas Serenas Home">
        <img src="img/logo.svg" alt="Las Lomas Serenas logo" width="527" height="170" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.src='img/logo-fallback.png';">
      </a>
    </div>

    <div class="lls-header-right">
      <nav class="lls-nav" aria-label="Main navigation">
        <ul class="lls-nav-list">
          <li><a href="/">Home</a></li>
          <li><a href="/tourguiado">Tour</a></li>
          <li class="lls-nav-item-complex"><a href="/index.php#complex">Complex</a></li>
          <li><a href="/rooms">Rooms</a></li>
          <li><a href="/index.php#contact">Contact Us</a></li>
          <li><a href="/about-us">About Us</a></li>
        </ul>
      </nav>

      <a class="lls-lang-btn" href="/index.php" aria-label="Selected language Spanish">
        <span class="lls-flag-es" aria-hidden="true"></span>
        <span>Spanish</span>
      </a>
    </div>
  </div>
</header>

<script>
  (function () {
    var header = document.getElementById('site-header');
    if (!header) return;
    var previousScrolled = null;
    var previousCompact = null;

    function syncHeaderOverlay() {
      var headerHeight = Math.ceil(header.getBoundingClientRect().height) + 1;
      document.documentElement.style.setProperty('--lls-header-overlay', headerHeight + 'px');
    }

    function updateHeaderGlass() {
      var isScrolled = window.scrollY > 12;
      var isMobile = window.matchMedia('(max-width: 960px)').matches;
      var compactEnterThreshold = 82;
      var compactExitThreshold = 42;
      var compactBase = previousCompact ? compactExitThreshold : compactEnterThreshold;
      var isCompact = !isMobile && window.scrollY > compactBase;

      if (previousScrolled !== isScrolled) {
        header.classList.toggle('is-scrolled', isScrolled);
        previousScrolled = isScrolled;
      }

      if (previousCompact !== isCompact) {
        header.classList.toggle('is-compact', isCompact);
        previousCompact = isCompact;
      }
    }

    updateHeaderGlass();
    syncHeaderOverlay();
    window.addEventListener('scroll', updateHeaderGlass, { passive: true });
    window.addEventListener('resize', function () {
      updateHeaderGlass();
      syncHeaderOverlay();
    });
    window.addEventListener('load', syncHeaderOverlay);
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(syncHeaderOverlay);
    }
  })();
</script>
