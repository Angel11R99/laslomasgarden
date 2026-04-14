<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Lomas Serenas | Contact Us</title>
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lls-green: #089e67;
      --lls-green-deep: #067c56;
      --lls-green-800: #0a4f33;
      --lls-green-gradient: linear-gradient(135deg, #0a4f33 0%, #089e67 100%);
      --lls-title: #0a9a72;
      --lls-copy: #63706b;
      --lls-border: #d4ded9;
      --lls-shell: 1120px;
      --lls-section-space: clamp(4rem, 7vw, 6.5rem);
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
      margin: 0;
      font-family: "Outfit", "Segoe UI", Arial, sans-serif;
      background: #ffffff;
      color: var(--lls-copy);
    }

    .lls-shell {
      width: min(var(--lls-shell), calc(100% - 2rem));
      margin-inline: auto;
      padding-inline: 1rem;
    }

    /* ── Hero ── */
    .contact-hero {
      background: var(--lls-green-gradient);
      padding: clamp(6rem, 12vw, 10rem) 1rem clamp(4rem, 8vw, 7rem);
      text-align: center;
      color: #ffffff;
    }

    .contact-hero h1 {
      margin: 0 0 1rem;
      font-size: clamp(2rem, 4vw, 3.5rem);
      font-weight: 700;
      line-height: 1.15;
    }

    .contact-hero p {
      margin: 0 auto;
      max-width: 600px;
      font-size: clamp(1rem, 1.5vw, 1.2rem);
      opacity: 0.88;
      line-height: 1.6;
    }

    /* ── Form section ── */
    .contact-section {
      padding: var(--lls-section-space) 1rem;
      background: #f8f9fa;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: start;
    }

    @media (max-width: 860px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 2.5rem;
      }
    }

    /* ── Info column ── */
    .contact-info h2 {
      margin: 0 0 1rem;
      font-size: clamp(1.6rem, 2.5vw, 2.2rem);
      color: var(--lls-title);
      font-weight: 700;
    }

    .contact-info p {
      margin: 0 0 2rem;
      font-size: 1.05rem;
      line-height: 1.7;
      color: var(--lls-copy);
    }

    .contact-info__item {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      margin-bottom: 1.4rem;
    }

    .contact-info__icon {
      width: 44px;
      height: 44px;
      background: var(--lls-green-gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: #fff;
      font-size: 1.1rem;
    }

    .contact-info__label {
      font-weight: 600;
      color: var(--lls-green-800);
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      margin-bottom: 0.2rem;
    }

    .contact-info__value {
      color: var(--lls-copy);
      font-size: 1rem;
      line-height: 1.5;
    }

    /* ── Form card ── */
    .contact-form-card {
      background: #ffffff;
      border-radius: 20px;
      padding: clamp(2rem, 4vw, 3.5rem);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.07);
      border: 1px solid rgba(0,0,0,0.04);
    }

    .contact-form-card h3 {
      margin: 0 0 2rem;
      font-size: clamp(1.3rem, 2vw, 1.7rem);
      color: var(--lls-green-800);
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 1.4rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.4rem;
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--lls-green-800);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.85rem 1.1rem;
      border: 1.5px solid var(--lls-border);
      border-radius: 10px;
      font-family: inherit;
      font-size: 1rem;
      color: #333;
      background: #f8f9fa;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
      outline: none;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: var(--lls-green);
      box-shadow: 0 0 0 3px rgba(8, 158, 103, 0.12);
      background: #fff;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 130px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    @media (max-width: 500px) {
      .form-row { grid-template-columns: 1fr; }
    }

    .form-submit {
      width: 100%;
      padding: 1rem 2rem;
      background: var(--lls-green-gradient);
      color: #ffffff;
      border: none;
      border-radius: 10px;
      font-family: inherit;
      font-size: 1.1rem;
      font-weight: 600;
      letter-spacing: 0.03em;
      cursor: pointer;
      transition: opacity 0.2s ease, transform 0.2s ease;
      margin-top: 0.5rem;
    }

    .form-submit:hover {
      opacity: 0.9;
      transform: translateY(-1px);
    }

    /* ── Success message ── */
    .form-success {
      display: none;
      text-align: center;
      padding: 2rem;
    }

    .form-success__icon {
      width: 64px;
      height: 64px;
      background: var(--lls-green-gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.2rem;
      font-size: 1.8rem;
      color: #fff;
    }

    .form-success h4 {
      margin: 0 0 0.5rem;
      color: var(--lls-green-800);
      font-size: 1.4rem;
    }

    .form-success p {
      color: var(--lls-copy);
      font-size: 1rem;
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <main>

    <!-- Hero -->
    <section class="contact-hero">
      <h1>Contact Us</h1>
      <p>Our team is ready to help you find your ideal home at Las Lomas Serenas. Reach out and we'll get back to you shortly.</p>
    </section>

    <!-- Form + Info -->
    <section class="contact-section">
      <div class="lls-shell">
        <div class="contact-grid">

          <!-- Info -->
          <div class="contact-info">
            <h2>We'd love to hear from you</h2>
            <p>Whether you're looking for more details about our residences, pricing, or availability — our team is here to guide you every step of the way.</p>

            <div class="contact-info__item">
              <div class="contact-info__icon">📍</div>
              <div>
                <div class="contact-info__label">Location</div>
                <div class="contact-info__value">Las Lomas Serenas, North Coast, Dominican Republic</div>
              </div>
            </div>

            <div class="contact-info__item">
              <div class="contact-info__icon">📞</div>
              <div>
                <div class="contact-info__label">Phone</div>
                <div class="contact-info__value">+1 (809) 000-0000</div>
              </div>
            </div>

            <div class="contact-info__item">
              <div class="contact-info__icon">✉️</div>
              <div>
                <div class="contact-info__label">Email</div>
                <div class="contact-info__value">info@laslomasserenas.com</div>
              </div>
            </div>
          </div>

          <!-- Form -->
          <div class="contact-form-card">
            <h3>Send us a message</h3>
            <form id="contactForm" action="survey-save.php" method="POST" novalidate>
              <div class="form-row">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" id="first_name" name="first_name" placeholder="John" required>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" id="last_name" name="last_name" placeholder="Doe" required>
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="john@example.com" required>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="+1 (000) 000-0000">
              </div>

              <div class="form-group">
                <label for="interest">I'm interested in</label>
                <select id="interest" name="interest">
                  <option value="">Select an option</option>
                  <option value="2-bedrooms">2 Bedrooms</option>
                  <option value="3-bedrooms">3 Bedrooms</option>
                  <option value="general">General Information</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Tell us how we can help you..."></textarea>
              </div>

              <button type="submit" class="form-submit">Send Message</button>
            </form>

            <div class="form-success" id="formSuccess">
              <div class="form-success__icon">✓</div>
              <h4>Message sent!</h4>
              <p>Thank you for reaching out. We'll get back to you as soon as possible.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      this.style.display = 'none';
      document.getElementById('formSuccess').style.display = 'block';
    });
  </script>
</body>

</html>
