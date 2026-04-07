<style>
  .lls-footer {
    background: linear-gradient(135deg, #18bf97 0%, #0f8f6f 52%, #0a6f58 100%);
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
  .lls-footer-support-link:hover,
  .lls-footer-support-link:focus-visible,
  .lls-social-link:hover,
  .lls-social-link:focus-visible {
    opacity: 0.8;
  }

  .lls-social-row {
    display: flex;
    align-items: center;
    gap: 0.95rem;
  }

  .lls-social-link {
    color: #ffffff;
    width: 2rem;
    height: 2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: opacity 0.25s ease;
  }

  .lls-social-link svg {
    width: 1.95rem;
    height: 1.95rem;
    stroke: currentColor;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .lls-social-link.lls-social-facebook svg,
  .lls-social-link.lls-social-x svg {
    fill: currentColor;
    stroke: none;
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
      grid-template-columns: 1fr;
      gap: 1.6rem;
    }

    .lls-footer-follow {
      grid-column: auto;
    }

    .lls-social-row {
      gap: 0.78rem;
    }
  }
</style>

<footer class="lls-footer" id="contact">
  <div class="lls-footer-inner">
    <div>
      <h2 class="lls-footer-logo">
        <img src="img/logo.svg" alt="Las Lomas Serenas logo" width="527" height="170" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='img/logo-fallback.png';">
      </h2>
    </div>

    <section aria-label="Company links">
      <h3 class="lls-footer-title">Company</h3>
      <ul class="lls-footer-links">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/index.php#about">About Us</a></li>
        <li><a href="/index.php#complex">Complex</a></li>
        <li><a href="/index.php#contact">Contact</a></li>
      </ul>
    </section>

    <section aria-label="Support links">
      <h3 class="lls-footer-title">Support</h3>
      <a class="lls-footer-support-link" href="/index.php#contact">Get in Touch</a>
    </section>

    <section class="lls-footer-follow" aria-label="Follow us links">
      <h3 class="lls-footer-title">Follow Us</h3>
      <div class="lls-social-row">
        <a class="lls-social-link" href="https://wa.me/" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24"><path d="M20 12a8 8 0 0 1-11.8 7l-3.2 1 1-3.1A8 8 0 1 1 20 12z"></path><path d="M9.2 9.4c.3-.7.6-.7.9-.7h.5c.2 0 .4 0 .6.4.2.4.7 1.5.7 1.6.1.1.1.3 0 .4l-.3.5c-.1.1-.2.2-.1.4.1.2.4.7 1 1.1.7.6 1.4.8 1.6.9.2.1.3 0 .4-.1l.5-.5c.1-.1.3-.2.4-.1.2.1 1.2.6 1.4.8.2.1.3.2.3.4 0 .2-.1.9-.6 1.2-.5.4-1.1.4-1.3.3-.2 0-2-.7-3.4-2-1.6-1.5-2.1-3-2.3-3.3-.2-.3-.2-.7 0-1z"></path></svg>
        </a>
        <a class="lls-social-link" href="https://www.instagram.com" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.4" cy="6.6" r="0.9"></circle></svg>
        </a>
        <a class="lls-social-link lls-social-facebook" href="https://www.facebook.com" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24"><path d="M15 8h-2c-.7 0-1 .3-1 1v2h3l-.3 3H12v6h-3v-6H7v-3h2V8.9c0-2.3 1.3-3.9 3.9-3.9H15v3z"></path></svg>
        </a>
        <a class="lls-social-link lls-social-x" href="https://x.com" aria-label="X" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24"><path d="M4 4l6.5 8.4L4.6 20H7l4.7-5.4L15.9 20H20l-6.8-8.8L19.5 4h-2.4l-4 4.7L9.6 4H4z"></path></svg>
        </a>
      </div>
    </section>
  </div>
</footer>


