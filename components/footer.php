<style>
  .lls-footer {
      background: linear-gradient(90deg,
        #006837 0%,
        #006837 19.2053%,
        #22b573 42.4501%,
        #006837 73.3775%,
        #22b573 100%);
    color: #ffffff;
    padding: clamp(3rem, 6vw, 4.8rem) 0;
  }

  .lls-footer-inner {
    width: min(1240px, calc(100% - 3.2rem));
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.6fr 1fr 0.9fr 1fr;
    justify-content: space-between;
    gap: clamp(1.4rem, 3vw, 3rem);
    align-items: start;
  }

  .lls-footer-logo {
    margin: 0;
    display: inline-flex;
    align-items: center;
  }

  .lls-footer-logo img {
    width: clamp(230px, 19vw, 240px);
    height: auto;
    display: block;
    filter: brightness(0) invert(1);
  }

  .lls-footer-meta {
    display: contents;
  }

  .lls-footer-column {
    min-width: 0;
  }

  .lls-footer-title {
    margin: 0 0 0.82rem;
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(1.2rem, 1.55vw, 2rem);
    line-height: 1.1;
    font-weight: 500;
  }

  .lls-footer-links {
    margin: 0;
    padding: 0;
    list-style: none;
    display: grid;
    gap: 0.72rem;
  }

  .lls-footer-submenu {
    margin: 0.45rem 0 0;
    padding: 0 0 0 1.1rem;
    list-style: none;
    gap: 0.45rem;
    display: none;
  }

  .lls-footer-has-submenu.is-open > .lls-footer-submenu {
    display: grid;
  }

  .lls-footer-submenu-toggle {
    border: 0;
    padding: 0;
    background: transparent;
    color: #ffffff;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(1.02rem, 1.15vw, 1.45rem);
    line-height: 1.25;
    font-weight: 400;
    cursor: pointer;
    transition: opacity 0.25s ease;
    position: relative;
  }

  .lls-footer-submenu-toggle::after {
    content: none;
  }

  .lls-footer-submenu-toggle::before {
    content: "\25BE";
    position: absolute;
    top: 50%;
    left: -0.85rem;
    transform: translateY(-50%);
    font-size: 0.72em;
    line-height: 1;
    transition: transform 0.2s ease;
  }

  .lls-footer-has-submenu.is-open > .lls-footer-submenu-toggle::before {
    transform: translateY(-50%) rotate(180deg);
  }

  .lls-footer-submenu li {
    position: relative;
  }

  .lls-footer-submenu a {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: clamp(0.96rem, 1.05vw, 1.22rem);
    opacity: 0.9;
  }

  .lls-footer-links a,
  .lls-footer-support-link {
    color: #ffffff;
    text-decoration: none;
    font-family: "Outfit", "Segoe UI", Arial, sans-serif;
    font-size: clamp(1.02rem, 1.15vw, 1.45rem);
    line-height: 1.25;
    font-weight: 400;
    transition: opacity 0.25s ease;
  }

  .lls-footer-links a:hover,
  .lls-footer-links a:focus-visible,
  .lls-footer-submenu-toggle:hover,
  .lls-footer-submenu-toggle:focus-visible,
  .lls-footer-support-link:hover,
  .lls-footer-support-link:focus-visible,
  .lls-social-link:hover,
  .lls-social-link:focus-visible {
    opacity: 0.8;
  }

  .lls-social-row {
    display: flex;
    align-items: center;
    gap: 1.1rem;
  }

  .lls-social-link {
    color: #ffffff;
    width: 1.7rem;
    height: 1.7rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: opacity 0.25s ease;
  }

  .lls-social-link svg {
    width: 1.7rem;
    height: 1.7rem;
    stroke: currentColor;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }


  @media (max-width: 1080px) {
    .lls-footer-inner {
      grid-template-columns: 1.2fr 1fr 1fr;
    }

    .lls-footer-follow {
      grid-column: span 3;
    }
  }

  @media (max-width: 760px) {
    .lls-footer {
      padding: 2.4rem 0;
    }

    .lls-footer-inner {
      width: min(1240px, calc(100% - 1.6rem));
      grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
      gap: 1.4rem 1.2rem;
      align-items: start;
      justify-items: stretch;
      text-align: left;
    }

    .lls-footer-inner > div:first-child {
      grid-column: 1 / -1;
      justify-self: center;
    }

    .lls-footer-meta {
      grid-column: 1 / -1;
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
      gap: 1.4rem 1.2rem;
      width: 100%;
      align-items: start;
      padding: 0 0.8rem;
    }

    .lls-footer-logo {
      justify-content: center;
    }

    .lls-footer-column {
      text-align: center;
    }

    .lls-footer-follow {
      grid-column: 1 / -1;
      text-align: center;
    }

    .lls-footer-links {
      justify-items: center;
    }

    .lls-footer-submenu {
      margin-top: 0.35rem;
      padding-left: 0;
      justify-items: center;
    }

    .lls-footer-submenu-toggle::before {
      left: -0.7rem;
    }

    .lls-footer-support-link {
      display: inline-flex;
      justify-content: center;
    }

    .lls-social-row {
      justify-content: center;
      gap: 0.78rem;
    }
  }
</style>

<footer class="lls-footer" id="contact">
  <div class="lls-footer-inner">
    <div>
      <h2 class="lls-footer-logo">
        <img src="img/wlogo.svg" alt="Las Lomas Serenas logo" width="527" height="170" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='img/logo-fallback.png';">
      </h2>
    </div>

    <div class="lls-footer-meta">
      <section class="lls-footer-column" aria-label="Company links">
        <h3 class="lls-footer-title">Company</h3>
        <ul class="lls-footer-links">
          <li><a href="/">Home</a></li>
          <li class="lls-footer-has-submenu">
            <button class="lls-footer-submenu-toggle" type="button" aria-expanded="false" aria-controls="lls-footer-submenu">
              Complex
            </button>
            <ul class="lls-footer-submenu" id="lls-footer-submenu" hidden>
              <li><a href="/tourguiado">Tour</a></li>
              <li><a href="/rooms">Rooms</a></li>
            </ul>
          </li>
          <li><a href="/about-us">About Us</a></li>
          <li><a href="/index.php#contact">Contact</a></li>
        </ul>
      </section>

      <section class="lls-footer-column" aria-label="Support links">
        <h3 class="lls-footer-title">Support</h3>
        <a class="lls-footer-support-link" href="/index.php#contact">Get in Touch</a>
      </section>

      <section class="lls-footer-column lls-footer-follow" aria-label="Follow us links">
        <h3 class="lls-footer-title">Follow Us</h3>
        <div class="lls-social-row">
          <a class="lls-social-link" href="https://wa.me/" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
            <img src="img/whatsapp-svgrepo-com.svg" alt="WhatsApp" style="width:1.7rem;height:1.7rem;filter:brightness(0) invert(1);">
          </a>
          <a class="lls-social-link" href="https://www.instagram.com" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.4" cy="6.6" r="0.9" fill="currentColor" stroke="none"/></svg>
          </a>
          <a class="lls-social-link" href="https://www.facebook.com" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
            <img src="img/facebook-svgrepo-com.svg" alt="Facebook" style="width:1.7rem;height:1.7rem;filter:brightness(0) invert(1);">
          </a>
          <a class="lls-social-link" href="https://x.com" aria-label="X" target="_blank" rel="noopener noreferrer">
            <img src="img/x-social-media-logo-icon.svg" alt="X" style="width:1.7rem;height:1.7rem;filter:brightness(0) invert(1);">
          </a>
        </div>
      </section>
    </div>
  </div>
</footer>

<script>
  (function () {
    var footerSubmenuItem = document.querySelector('.lls-footer-has-submenu');
    if (!footerSubmenuItem) return;

    var footerToggle = footerSubmenuItem.querySelector('.lls-footer-submenu-toggle');
    var footerSubmenu = footerSubmenuItem.querySelector('.lls-footer-submenu');
    if (!footerToggle || !footerSubmenu) return;

    function setFooterSubmenuState(isOpen) {
      footerSubmenuItem.classList.toggle('is-open', isOpen);
      footerToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      if (isOpen) {
        footerSubmenu.removeAttribute('hidden');
      } else {
        footerSubmenu.setAttribute('hidden', '');
      }
    }

    setFooterSubmenuState(false);

    footerToggle.addEventListener('click', function () {
      var isOpen = footerSubmenuItem.classList.contains('is-open');
      setFooterSubmenuState(!isOpen);
    });
  })();
</script>


