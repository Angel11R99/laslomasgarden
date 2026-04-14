<?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_home = ($current_page == 'index.php' || $current_page == '' || $current_page == 'index');
?>
<style>
  :root {
    --lls-header-overlay: 122px;
  }

  .lls-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    max-width: 100%;
    background: rgba(10, 94, 56, 0.84);
    backdrop-filter: blur(7px) saturate(135%);
    -webkit-backdrop-filter: blur(7px) saturate(135%);
    box-shadow: 0 10px 30px rgba(5, 53, 31, 0.16);
    border: 0;
    transition: background-color 0.28s ease, backdrop-filter 0.28s ease, -webkit-backdrop-filter 0.28s ease, box-shadow 0.28s ease;
  }

  .lls-header.is-home:not(.is-scrolled) {
    background: transparent;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
    box-shadow: none;
  }


  .lls-header-inner {
    width: min(1280px, calc(100% - 2.4rem));
    margin: 0 auto;
    min-height: 104px;
    padding-top: 6px;
    padding-inline: clamp(0.75rem, 1.8vw, 1.5rem);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1.25rem;
    background: transparent;
    transition: min-height 0.28s ease, padding-top 0.28s ease, padding-bottom 0.28s ease, gap 0.28s ease;
  }

  .lls-header-spacer,
  .lls-header-right {
    flex: 0 0 auto;
  }

  .lls-header-spacer {
    display: none;
  }

  .lls-header-center {
    flex: 0 0 auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-top: 0;
    min-width: 0;
  }

  .lls-header-logo {
    display: inline-block;
    text-decoration: none;
    width: clamp(148px, 12vw, 190px);
    opacity: 1;
    transform: translateY(0);
    transform-origin: center top;
    will-change: transform, opacity;
    transition: opacity 0.22s ease, transform 0.28s ease, width 0.28s ease;
  }

  .lls-header.is-home .lls-header-logo {
    width: clamp(164px, 14.5vw, 228px);
  }


  .lls-header-logo img {
    width: 100%;
    height: auto;
    display: block;
  }

  .lls-header-right {
    display: flex;
    flex: 1 1 auto;
    justify-content: flex-end;
    align-items: center;
    gap: 18px;
    padding-top: 0;
    text-align: right;
    white-space: nowrap;
    min-height: 64px;
    width: auto;
    transition: padding-top 0.28s ease, padding-bottom 0.28s ease, min-height 0.28s ease, transform 0.28s ease, opacity 0.22s ease;
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
    opacity: 1;
    transform: translateY(5px) scale(0.78);
    pointer-events: auto;
  }

  .lls-header.is-compact .lls-header-right {
    padding-top: 0;
    padding-bottom: 0;
    min-height: 64px;
    align-items: center;
    transform: none;
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

  .lls-has-submenu {
    position: relative;
  }

  .lls-submenu-toggle {
    border: 0;
    padding: 0;
    background: transparent;
    color: inherit;
    font: inherit;
    line-height: inherit;
    cursor: pointer;
    white-space: nowrap;
  }

  .lls-nav-item-complex > .lls-submenu-toggle {
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(0.92rem, 0.95vw, 1rem);
    font-weight: 400;
    line-height: 1;
    text-decoration: none;
  }

  .lls-nav-item-complex > .lls-submenu-toggle::after {
    content: "\25BE";
    margin-left: 6px;
    font-size: 0.68em;
    vertical-align: middle;
    transition: transform 0.2s ease;
  }

  .lls-has-submenu.is-open > .lls-submenu-toggle::after {
    transform: rotate(180deg);
  }

  .lls-submenu {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .lls-nav-item-complex > .lls-submenu {
    position: absolute;
    top: calc(100% + 0.7rem);
    left: 50%;
    min-width: 148px;
    padding: 0.45rem 0;
    border-radius: 12px;
    background: rgba(8, 78, 47, 0.96);
    box-shadow: 0 18px 32px rgba(9, 43, 33, 0.18);
    transform: translateX(-50%);
    display: none;
    z-index: 1003;
  }

  .lls-nav-item-complex.is-open > .lls-submenu {
    display: block;
  }

  .lls-nav-item-complex > .lls-submenu a {
    display: block;
    padding: 0.55rem 1rem;
    text-align: left;
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


  .lls-header-right {
    display: flex;
    flex: 1 1 auto;
    justify-content: flex-end;
    align-items: center;
    gap: 18px;
    padding-top: 0;
    padding-left: clamp(0.6rem, 1.2vw, 1rem);
    text-align: right;
    white-space: nowrap;
    min-height: 64px;
    width: auto;
    transition: padding-top 0.28s ease, padding-bottom 0.28s ease, min-height 0.28s ease, transform 0.28s ease, opacity 0.22s ease, padding-left 0.28s ease;
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

  .lls-menu-toggle,
  .lls-mobile-menu {
    display: none;
  }

  @media (max-width: 1260px) {
    :root {
      --lls-header-overlay: 112px;
    }

    .lls-header-inner {
      min-height: 98px;
    }

    .lls-header-right {
      padding-top: 0;
      transform: none;
    }
  }

  @media (max-width: 1120px) {
    :root {
      --lls-header-overlay: 98px;
    }

    .lls-header-inner {
      min-height: 90px;
      padding-top: 4px;
    }

    .lls-header-right {
      padding-top: 0;
      gap: 12px;
      transform: none;
    }

    .lls-nav-list {
      gap: 14px;
    }

    .lls-nav-list a,
    .lls-lang-btn {
      font-size: 0.84rem;
    }

    .lls-header-right {
      padding-left: 0.2rem;
    }

  }

  @media (max-width: 1180px) {
    :root {
      --lls-header-overlay: 132px;
    }


    .lls-header-inner {
      width: calc(100% - 1.4rem);
      min-height: 78px;
      padding-top: 6px;
      display: grid;
      grid-template-columns: 1fr;
      justify-items: center;
      gap: 0.7rem;
    }

    .lls-header-center {
      padding-top: 0;
    }

    .lls-header-logo {
      width: clamp(148px, 26vw, 190px);
    }

    .lls-header-right {
      width: auto;
      flex: 0 1 auto;
      justify-content: center;
      padding-top: 0;
      padding-left: 0;
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

    .lls-header.is-compact .lls-header-right {
      min-height: 64px;
      align-items: center;
    }

  }

  @media (max-width: 960px) {
    :root {
      --lls-header-overlay: 132px;
    }

    .lls-header-inner {
      width: calc(100% - 1.4rem);
      min-height: 78px;
      padding-top: 6px;
      display: grid;
      grid-template-columns: 1fr;
      justify-items: center;
      gap: 0.7rem;
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

    .lls-header-right {
      padding-left: 0;
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
      opacity: 1;
      transform: translateY(5px) scale(0.78);
      pointer-events: auto;
    }

    .lls-header.is-compact .lls-header-right {
      min-height: 64px;
      align-items: center;
    }
  }

  @media (max-width: 768px) {
    :root {
      --lls-header-overlay: 88px;
    }

    .lls-header {
      overflow: visible;
    }

    .lls-header-inner {
      width: calc(100% - 1rem);
      max-width: 100%;
      min-width: 0;
      min-height: 84px;
      padding-top: 0.4rem;
      padding-bottom: 0.4rem;
      padding-inline: 0.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.75rem;
      transition: min-height 0.28s ease, padding-top 0.28s ease, padding-bottom 0.28s ease, gap 0.28s ease;
    }

    .lls-header-spacer {
      display: none;
    }

    .lls-header-center {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      min-width: 0;
      max-width: 132px;
      overflow: hidden;
    }

    .lls-header-logo {
      width: clamp(104px, 28vw, 128px);
      opacity: 1;
      transform: none;
      pointer-events: auto;
    }

    .lls-header-right {
      width: auto;
      max-width: none;
      min-width: 48px;
      min-height: 48px;
      padding-top: 0;
      padding-right: 0;
      transform: none;
      justify-content: flex-end;
      align-items: center;
      gap: 0;
      flex-wrap: nowrap;
      overflow: visible;
      transition: padding-right 0.28s ease, transform 0.28s ease, opacity 0.22s ease;
    }

    .lls-nav,
    .lls-lang-btn {
      display: none;
    }

    .lls-menu-toggle {
      display: inline-flex;
      flex: 0 0 48px;
      align-self: center;
      margin-right: 0;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border: 1px solid rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      background: rgba(11, 96, 57, 0.5);
      color: #ffffff;
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      font-size: 1.65rem;
      line-height: 1;
      cursor: pointer;
      position: relative;
      z-index: 1002;
    }

    .lls-menu-toggle span {
      display: block;
      line-height: 1;
    }

    .lls-menu-toggle:hover,
    .lls-menu-toggle:focus-visible {
      background: rgba(11, 96, 57, 0.68);
      outline: none;
    }


    .lls-header-inner {
      width: calc(100% - 1rem);
      min-height: 84px;
      padding-top: 0.4rem;
      padding-bottom: 0.4rem;
      padding-inline: 0.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.75rem;
    }

    .lls-header-center {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      min-width: 0;
      max-width: 132px;
      overflow: hidden;
      padding-top: 0;
    }

    .lls-header-logo {
      width: clamp(104px, 28vw, 128px);
    }

    .lls-header-right {
      width: auto;
      min-width: 48px;
      min-height: 48px;
      padding-top: 0;
      padding-left: 0;
      padding-right: 0;
      justify-content: flex-end;
      align-items: center;
      gap: 0;
      text-align: right;
      flex-wrap: nowrap;
      transform: none;
    }


    .lls-header.is-scrolled .lls-header-inner,
    .lls-header.is-compact .lls-header-inner {
      width: calc(100% - 1rem);
      min-height: 60px;
      padding-top: 0.3rem;
      padding-bottom: 0.3rem;
      gap: 0.75rem;
      justify-content: space-between;
    }

    .lls-header.is-scrolled .lls-header-right,
    .lls-header.is-compact .lls-header-right {
      width: auto;
      max-width: none;
      min-width: 48px;
      min-height: 48px;
      padding-right: 0;
    }

    .lls-mobile-menu {
      width: calc(100% - 2rem);
      max-width: 100%;
      min-width: 0;
      margin: 0 auto;
      padding: 0.9rem 1rem 1rem;
      border-radius: 18px;
      background: rgba(8, 78, 47, 0.97);
      backdrop-filter: blur(7px) saturate(132%);
      -webkit-backdrop-filter: blur(7px) saturate(132%);
      box-shadow: 0 18px 32px rgba(9, 43, 33, 0.18);
      position: relative;
      z-index: 1001;
    }

    .lls-mobile-menu.is-open {
      display: block;
    }

    .lls-mobile-nav-list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.2rem;
    }

    .lls-mobile-nav-list a,
    .lls-mobile-nav-list .lls-submenu-toggle,
    .lls-mobile-lang {
      display: block;
      width: 100%;
      max-width: 100%;
      padding: 0.82rem 0;
      color: #ffffff;
      text-decoration: none;
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      font-size: 1rem;
      line-height: 1.3;
      border-bottom: 1px solid rgba(255, 255, 255, 0.14);
      overflow-wrap: anywhere;
    }

    .lls-mobile-nav-list li:last-child a,
    .lls-mobile-lang {
      border-bottom: 0;
    }

    .lls-mobile-nav-item-complex > .lls-submenu-toggle {
      text-align: left;
    }

    .lls-mobile-nav-item-complex > .lls-submenu-toggle::after {
      content: "\25BE";
      margin-left: 0.45rem;
      font-size: 0.72em;
      vertical-align: middle;
      transition: transform 0.2s ease;
    }

    .lls-mobile-nav-item-complex.is-open > .lls-submenu-toggle::after {
      transform: rotate(180deg);
    }

    .lls-mobile-nav-item-complex > .lls-submenu {
      display: none;
      padding-left: 1rem;
    }

    .lls-mobile-nav-item-complex.is-open > .lls-submenu {
      display: block;
    }

    .lls-mobile-nav-item-complex > .lls-submenu a {
      padding-top: 0.72rem;
      padding-bottom: 0.72rem;
      font-size: 0.96rem;
    }

    .lls-mobile-lang {
      display: inline-flex;
      align-items: center;
      gap: 0.55rem;
      padding-bottom: 0;
    }

    .lls-header.is-scrolled .lls-header-inner,
    .lls-header.is-compact .lls-header-inner {
      justify-content: space-between;
      min-height: 60px;
      padding-top: 0.3rem;
      padding-bottom: 0.3rem;
      gap: 0.75rem;
    }

    .lls-header.is-scrolled .lls-header-right,
    .lls-header.is-compact .lls-header-right {
      width: auto;
      min-width: 48px;
      min-height: 48px;
      padding-right: 0;
      justify-content: flex-end;
    }


    .lls-header.is-scrolled .lls-header-logo,
    .lls-header.is-compact .lls-header-logo {
      opacity: 1;
      transform: translateY(5px) scale(0.78);
      pointer-events: auto;
    }

  }
</style>

<header class="lls-header <?php echo $is_home ? 'is-home' : ''; ?>" id="site-header">
  <div class="lls-header-inner">
    <div class="lls-header-spacer" aria-hidden="true"></div>

    <div class="lls-header-center">
      <a class="lls-header-logo" href="/" aria-label="Las Lomas Serenas Home">
        <img src="img/wlogo.svg" alt="Las Lomas Serenas logo" width="527" height="170" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.src='img/logo-fallback.png';">
      </a>
    </div>

    <div class="lls-header-right">
      <button class="lls-menu-toggle" id="lls-menu-toggle" type="button" aria-expanded="false" aria-controls="lls-mobile-menu" aria-label="Open navigation menu">
        <span aria-hidden="true">☰</span>
      </button>

      <nav class="lls-nav" aria-label="Main navigation">
        <ul class="lls-nav-list">
          <li><a href="/">Home</a></li>
          <li class="lls-nav-item-complex lls-has-submenu">
            <button class="lls-submenu-toggle" type="button" aria-expanded="false" aria-controls="lls-desktop-submenu">
              Residence
            </button>
            <ul class="lls-submenu" id="lls-desktop-submenu" hidden>
              <li><a href="/tourguiado">Tour</a></li>
              <li><a href="/2-bedrooms">2 Bedrooms</a></li>
              <li><a href="/3-bedrooms">3 Bedrooms</a></li>
            </ul>
          </li>
          <li><a href="/amenities">Amenities</a></li>
          <!-- <li><a href="/contact-us">Contact Us</a></li> -->
          <li><a href="/about-us">About Us</a></li>
        </ul>
      </nav>

      <a class="lls-lang-btn" href="/index.php" aria-label="Selected language Spanish">
        <span class="lls-flag-es" aria-hidden="true"></span>
        <span>Spanish</span>
      </a>
    </div>
  </div>

  <div class="lls-mobile-menu" id="lls-mobile-menu" hidden>
    <nav class="lls-mobile-nav" aria-label="Mobile navigation">
      <ul class="lls-mobile-nav-list">
        <li><a href="/">Home</a></li>
        <li class="lls-mobile-nav-item-complex lls-has-submenu">
          <button class="lls-submenu-toggle" type="button" aria-expanded="false" aria-controls="lls-mobile-submenu">
            Residence
          </button>
          <ul class="lls-submenu" id="lls-mobile-submenu" hidden>
            <li><a href="/tourguiado">Tour</a></li>
            <li><a href="/2-bedrooms">2 Bedrooms</a></li>
            <li><a href="/3-bedrooms">3 Bedrooms</a></li>
          </ul>
        </li>
        <li><a href="/amenities">Amenities</a></li>
        <li><a href="/about-us">About Us</a></li>
      </ul>
    </nav>

    <a class="lls-mobile-lang" href="/index.php" aria-label="Selected language Spanish">
      <span class="lls-flag-es" aria-hidden="true"></span>
      <span>Spanish</span>
    </a>
  </div>
</header>

<script>
  (function () {
    var header = document.getElementById('site-header');
    if (!header) return;
    var menuToggle = document.getElementById('lls-menu-toggle');
    var mobileMenu = document.getElementById('lls-mobile-menu');
    var submenuItems = header.querySelectorAll('.lls-has-submenu');
    var previousScrolled = null;
    var previousCompact = null;
    var debounceTimer = null;

    function debounce(fn, delay) {
      return function () {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(fn, delay);
      };
    }

    function syncHeaderOverlay() {
      var headerHeight = Math.ceil(header.getBoundingClientRect().height) + 1;
      document.documentElement.style.setProperty('--lls-header-overlay', headerHeight + 'px');
    }

    function isMobileViewport() {
      return window.matchMedia('(max-width: 768px)').matches;
    }

    function setMobileMenuState(isOpen) {
      if (!menuToggle || !mobileMenu) return;
      menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
      mobileMenu.classList.toggle('is-open', isOpen);
      if (isOpen) {
        mobileMenu.removeAttribute('hidden');
      } else {
        mobileMenu.setAttribute('hidden', '');
      }
      syncHeaderOverlay();
    }

    function setSubmenuState(submenuItem, isOpen) {
      if (!submenuItem) return;
      var toggle = submenuItem.querySelector('.lls-submenu-toggle');
      var submenu = submenuItem.querySelector('.lls-submenu');
      if (!toggle || !submenu) return;
      submenuItem.classList.toggle('is-open', isOpen);
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      if (isOpen) {
        submenu.removeAttribute('hidden');
      } else {
        submenu.setAttribute('hidden', '');
      }
      syncHeaderOverlay();
    }

    function closeSubmenus(exceptItem) {
      submenuItems.forEach(function (submenuItem) {
        if (submenuItem !== exceptItem) {
          setSubmenuState(submenuItem, false);
        }
      });
    }

    function updateHeaderGlass() {
      var isScrolled = window.scrollY > 12;
      var isMobile = isMobileViewport();
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
        syncHeaderOverlay();
      }
    }

    // Debounced versions
    var debouncedUpdateHeaderGlass = debounce(updateHeaderGlass, 10);
    var debouncedSyncHeaderOverlay = debounce(syncHeaderOverlay, 10);

    // Observa cambios en el tamaño del header
    if (window.ResizeObserver) {
      var resizeObserver = new ResizeObserver(function () {
        syncHeaderOverlay();
        updateHeaderGlass();
      });
      resizeObserver.observe(header);
    }

    // Sincroniza al hacer scroll, resize, load, y visibilidad
    updateHeaderGlass();
    syncHeaderOverlay();
    window.addEventListener('scroll', debouncedUpdateHeaderGlass, { passive: true });
    window.addEventListener('resize', function () {
      debouncedUpdateHeaderGlass();
      debouncedSyncHeaderOverlay();
      if (!isMobileViewport()) {
        setMobileMenuState(false);
      }
    });
    window.addEventListener('load', syncHeaderOverlay);
    document.addEventListener('visibilitychange', function () {
      if (!document.hidden) {
        syncHeaderOverlay();
        updateHeaderGlass();
      }
    });
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(syncHeaderOverlay);
    }
    // Sincroniza después de saltos bruscos de scroll
    window.setTimeout(function () {
      syncHeaderOverlay();
      updateHeaderGlass();
    }, 100);

    submenuItems.forEach(function (submenuItem) {
      var toggle = submenuItem.querySelector('.lls-submenu-toggle');
      if (!toggle) return;
      setSubmenuState(submenuItem, false);
      toggle.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var isOpen = submenuItem.classList.contains('is-open');
        closeSubmenus(submenuItem);
        setSubmenuState(submenuItem, !isOpen);
      });
    });

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', function () {
        if (!isMobileViewport()) return;
        var isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        setMobileMenuState(!isOpen);
      });

      mobileMenu.addEventListener('click', function (event) {
        var target = event.target;
        if (target && target.closest('a')) {
          closeSubmenus();
          setMobileMenuState(false);
        }
      });

      document.addEventListener('click', function (event) {
        if (!header.contains(event.target)) {
          closeSubmenus();
        }
        if (!isMobileViewport()) return;
        if (!header.contains(event.target)) {
          setMobileMenuState(false);
        }
      });

      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
          closeSubmenus();
          setMobileMenuState(false);
        }
      });
    }
  })();
</script>
