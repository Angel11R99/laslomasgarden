<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Lomas | Amenities</title>
    <link rel="icon" href="/img/shared/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="/img/shared/logo-fallback.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* 
     ==============================================================
     AMENITIES PAGE STYLES
     ==============================================================
  */

        :root {
            --lls-green-gradient: linear-gradient(30deg, #006837 0%, #006837 19.2053%, #22b573 42.4501%, #006837 73.3775%, #22b573 100%);
            --amenity-space: clamp(4rem, 8vw, 7.5rem);
            --amenity-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        }

        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        .amenities-page,
        .amenities-page * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .amenities-page .lls-shell {
            margin-inline: auto;
        }

        .amenities-page {
            margin-top: calc(-1 * var(--lls-header-overlay, 122px));
            padding-top: var(--lls-header-overlay, 122px);
            overflow-x: hidden;
            font-family: "Outfit", sans-serif;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        /* 1. Hero Section */
        .amenities-hero {
            width: 100%;
            margin: 0;
        }

        .amenities-hero__banner {
            background: var(--lls-green-gradient);
            color: var(--lls-white, #fff);
            text-align: center;
            padding: 1.2rem 1rem;
            position: relative;
            z-index: 10;
        }

        .amenities-hero__banner h1 {
            margin: 0;
            font-size: clamp(2.2rem, 2.5vw, 2.8rem);
            font-weight: 500;
            letter-spacing: 0.05em;
        }

        .amenities-hero__media {
            width: 100%;
            line-height: 0;
        }

        .amenities-hero__media img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* 2. Intro Strip */
        .amenities-intro {
            background: var(--lls-green-gradient);
            color: var(--lls-white, #fff);
            text-align: center;
            padding: clamp(4rem, 10vw, 8rem) 1rem;
            margin: 0;
        }

        .amenities-intro h2 {
            margin: 0 auto 1.5rem;
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
            line-height: 1.1;
            font-weight: 600;
            max-width: 40ch;
        }

        .amenities-intro p {
            margin: 0 auto;
            max-width: 900px;
            font-size: clamp(1.5rem, 1.2vw, 1.25rem);
            opacity: 0.9;
            line-height: 1.6;
            font-weight: 300;
        }

        .amenity-block {
            width: 100%;
            background: #f8f9fa;
            /* Subtle off-white/grey bg matching reference */
            margin: 60px 0px !important;
            padding: 0 !important;
            overflow: hidden;
        }

        .amenity-block__grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: stretch;
            max-height: 600px;
        }

        .amenity-block__media {
            position: relative;
            overflow: hidden;
        }

        .amenity-block__media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .amenity-block:hover .amenity-block__media img {
            transform: scale(1.03);
        }

        .amenity-block__content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: clamp(3rem, 7vw, 10rem) clamp(2rem, 10vw, 14rem);
        }

        .amenity-block__content h2 {
            font-size: clamp(2rem, 3.5vw, 3.2rem);
            color: #0b4f33;
            /* Darker green matching the target */
            margin: 0 0 2rem;
            line-height: 1.1;
            font-weight: 700;
        }

        .amenity-block__content p {
            color: var(--lls-copy, #628271);
            font-size: clamp(1rem, 1.1vw, 1.15rem);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 50ch;
        }

        .amenity-block__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1.2rem;
        }

        /* Variations */
        .amenity-block--reversed .amenity-block__grid {
            direction: rtl;
        }

        .amenity-block--reversed .amenity-block__content {
            direction: ltr;
        }

        .amenity-block--dark {
            background: var(--lls-green-gradient);
            color: var(--lls-white, #fff);
        }

        .amenity-block--dark .amenity-block__content h2 {
            color: var(--lls-white, #fff);
        }

        .amenity-block--dark .amenity-block__content p {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Button consistency with index.php */
        .amenities-page .lls-button {
                display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 22px;
    padding: 1.6rem 3.8rem;
    border: 1px solid transparent;
    border-radius: 1px;
    background: var(--lls-green-gradient);
    color: var(--lls-white, #fff);
    font-weight: 800;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: 1.2rem;
        }

        .amenities-page .lls-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            opacity: 0.95;
        }

        .amenities-page .lls-button--outline {
            background: transparent !important;
            border: 1px solid var(--lls-green-800, #0d673d) !important;
            color: var(--lls-green-800, #0d673d) !important;
        }

        /* Dark background button overrides */
        .amenities-page .amenity-block--dark .lls-button--white {
            background: var(--lls-white, #fff) !important;
            color: var(--lls-green-800, #0d673d) !important;
            border-color: var(--lls-white, #fff) !important;
        }

        .amenities-page .amenity-block--dark .lls-button--outline {
            border-color: var(--lls-white, #fff) !important;
            color: var(--lls-white, #fff) !important;
        }

        /* ── Room card: image full-width, text centered below ── */
        .room-card {
            margin-bottom: clamp(2.5rem, 5vw, 4rem);
        }

        .room-card-media {
            margin: 0;
            width: 100%;
            overflow: hidden;
        }

        .room-card-media img {
            width: 100%;
            /* height: clamp(420px, 60vw, 750px); */
            object-fit: cover;
            display: block;
        }

        .room-card-copy {
            text-align: center;
            padding: clamp(1.8rem, 3.5vw, 2.8rem) clamp(1.2rem, 8vw, 6rem);
            background: #ffffff;
        }

        .room-card-copy h2 {
            margin: 0 0 0.9rem;
            color: #0a9a72;
            font-size: clamp(1.8rem, 2.8vw, 2.8rem);
            line-height: 1.2;
            font-weight: 700;
        }

        .room-card-copy p {
            margin: 0 auto;
            max-width: 860px;
            font-size: clamp(1.15rem, 1.5vw, 1.35rem);
            line-height: 1.75;
            color: #63706b;
        }

        .room-card-actions {
            margin-top: 1.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.7rem;
        }

        .room-card-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 50px;
            padding: 0.75rem 2rem;
            text-decoration: none;
            font-family: inherit;
            font-size: 1.1rem;
            line-height: 1;
            letter-spacing: 0.02em;
            border: 1px solid #089e67;
            transition: opacity 0.2s ease;
        }

        .room-card-btn:hover { opacity: 0.82; }

        .room-card-btn.is-solid {
            background: #089e67;
            color: #ffffff;
        }

        .room-card-btn.is-outline {
            background: transparent;
            color: #067c56;
            border-color: #d4ded9;
        }

        /* Responsive */
        @media (max-width: 960px) {
            .amenity-block__grid {
                grid-template-columns: 1fr;
            }

            .amenity-block--reversed .amenity-block__grid {
                direction: ltr;
            }

            .amenity-block__media {
                height: 400px;
            }

            .amenity-block__content {
                padding: 4rem 1.5rem;
                text-align: center;
                align-items: center;
            }

            .amenity-block__actions {
                justify-content: center;
            }

            .amenity-block--reversed .amenity-block__media {
                order: -1;
            }
        }
    </style>
</head>

<body class="page-amenities">

    <?php include __DIR__ . '/components/header.php'; ?>

    <main class="amenities-page">

        <!-- 1. Hero Superior -->
        <section class="amenities-hero">
            <div class="amenities-hero__banner">
                <div class="lls-shell">
                    <h1>Private Resort Style Recreation Center</h1>
                </div>
            </div>
            <div class="amenities-hero__media">
                <img src="Amenities2.webp" alt="General view of Vista Lomas amenities" loading="lazy">
            </div>
        </section>

        <!-- 2. Franja descriptiva introductoria -->
        <section class="amenities-intro">
            <div class="lls-shell">
                <h2>Discover an Active Lifestyle Right at Home</h2>
                <p>
                    Our apartment complex offers more than just comfort—it delivers a dynamic living experience for everyone.
                    Enjoy modern sports facilities, including basketball and tennis courts, along with dedicated recreational
                    areas designed for playing dominoes and spending quality time with family and friends.
                </p>
            </div>
        </section>

        <!-- 3. Basketball Court -->
        <div class="room-card">
            <figure class="room-card-media">
                <img src="img/amenities/Basketball.webp" alt="Basketball Court at Vista Lomas" loading="lazy">
            </figure>
            <div class="room-card-copy">
                <h2>Basketball Court</h2>
                <p>Stay active and enjoy the game in our private basketball court. Whether for a friendly match or a solo practice session, this high-quality facility is available for residents who value healthy living and sports performance right at their doorstep.</p>
                <div class="room-card-actions">
                    <a href="/contact-us" class="room-card-btn is-solid">Request Information</a>
                    <a href="/contact-us" class="room-card-btn is-outline">Contact US</a>
                </div>
            </div>
        </div>

        <!-- 4. Padel Court -->
        <div class="room-card">
            <figure class="room-card-media">
                <img src="img/amenities/padel.webp" alt="Padel Court at Vista Lomas" loading="lazy">
            </figure>
            <div class="room-card-copy">
                <h2>Padel Court</h2>
                <p>Experience one of the fastest-growing sports in the world in our exclusive padel court. Designed with modern standards and premium surfaces, it provides the perfect setting for fun, competition, and socializing with friends and neighbors.</p>
                <div class="room-card-actions">
                    <a href="/contact-us" class="room-card-btn is-solid">Request Information</a>
                    <a href="/contact-us" class="room-card-btn is-outline">Contact US</a>
                </div>
            </div>
        </div>

        <!-- 5. A Space to Connect -->
        <div class="room-card">
            <figure class="room-card-media">
                <img src="img/shared/pool-family.webp" alt="Social gathering space at Vista Lomas" loading="lazy">
            </figure>
            <div class="room-card-copy">
                <h2>A Space to Connect</h2>
                <p>Our community spaces are designed for relaxation and connection. A comfortable gazebo and lounge area offer the perfect spot to sit back, relax, and share moments with loved ones, all while enjoying the beautiful tropical surroundings of the project.</p>
                <div class="room-card-actions">
                    <a href="/contact-us" class="room-card-btn is-solid">Request Information</a>
                    <a href="/contact-us" class="room-card-btn is-outline">Contact US</a>
                </div>
            </div>
        </div>

    </main>

    <?php include __DIR__ . '/components/footer.php'; ?>

</body>

</html>