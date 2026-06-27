<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us – Hyperlane Solutions</title>
  <meta name="description" content="Learn about Hyperlane Solutions — our story, our mission and the team behind our reliable logistics and charter services in British Columbia, Alberta and Yukon.">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <nav class="navbar" aria-label="Main navigation">
      <a href="index.html" class="brand" aria-label="Hyperlane Solutions home">
        <img src="assets/logo.png" alt="Hyperlane Solutions logo" class="logo">
        <span class="brand-name">Hyperlane&nbsp;Solutions</span>
      </a>
      <button class="menu-toggle" aria-expanded="false" aria-label="Toggle menu" id="menuButtonAbout">
        <span class="hamburger"></span>
      </button>
      <ul class="nav-links" id="navLinksAbout">
        <li><a href="index.html#services">Services</a></li>
        <li><a href="index.html#why">Why Hyperlane?</a></li>
        <li><a href="index.html#clients">Clients</a></li>
        <li><a href="careers.html">Careers</a></li>
        <li><a href="index.html#contact">Contact</a></li>
        <li><a href="shuttle/index.php">Book Airport Shuttle</a></li>
          <li><a href="portal/index.php">Client Portal</a></li>
      </ul>
    </nav>
  </header>

  <main class="page-content">
    <section class="hero about-hero">
      <div class="hero-slides" id="aboutHeroSlides">
        <img src="assets/hero1.png" alt="Delivery truck driving along a scenic mountain road" class="hero-img active">
        <img src="assets/hero2.png" alt="Pickup truck and van parked on a snowy road" class="hero-img">
        <img src="assets/hero3.png" alt="Passenger coach bus on a mountain highway" class="hero-img">
        <img src="assets/hero4.png" alt="Delivery of medication at a client's doorstep" class="hero-img">
        <div class="overlay"></div>
      </div>
      <div class="hero-content">
        <h1>About Hyperlane Solutions</h1>
        <p class="subheading">Built on community spirit. Driven by service excellence.</p>
      </div>
      <div class="carousel-controls" aria-label="Carousel controls">
        <button class="carousel-dot active" data-index="0" aria-label="Show first image"></button>
        <button class="carousel-dot" data-index="1" aria-label="Show second image"></button>
        <button class="carousel-dot" data-index="2" aria-label="Show third image"></button>
        <button class="carousel-dot" data-index="3" aria-label="Show fourth image"></button>
      </div>
    </section>

    <section id="about" class="simple-story-section">
      <div class="simple-story-container">

        <h2>Our Story</h2>
        <p class="story-subtitle">From a Helping Hand to a Regional Lifeline</p>
        
        <p>Hyperlane Solutions began in Terrace, British Columbia, with a simple purpose: helping people. We delivered groceries, medications, and essentials to members of our community who depended on us — often in the toughest northern conditions.</p>
        
        <p>In those early days, we learned something that still defines us today: reliability is a form of respect. Showing up on time, every time, wasn’t just a task — it was a responsibility.</p>

        <h3>Trust That Built Momentum</h3>
        <p>As trust grew, so did we. What started as a small, community-focused effort quickly expanded through consistency and word of mouth. One vehicle became many. A handful of deliveries became structured operations. We didn’t grow by chance — we grew because people relied on us, and we delivered without compromise.</p>

        <h3>Built for Where It Matters Most</h3>
        <p>Operating across Western Canada requires more than movement — it requires discipline, adaptability, and an understanding of challenging environments. From remote corridors to time-sensitive operations, we’ve built our reputation on being dependable where others fall short. Our strength isn’t just in what we do — it’s in how we do it: with precision, accountability, and a commitment to getting it right the first time.</p>

        <h3>Our Purpose</h3>
        <p>Hyperlane represents what’s possible when service comes first. From a single route in Terrace to supporting operations across an entire region, our focus has never changed. We exist to deliver with purpose, to operate with integrity, and to ensure that every commitment we make is one we keep.</p>
        
        <div class="story-mission-statement-container">
          <div class="story-mission-statement">
            We don’t just move goods &amp; people — we move critical operations forward.
          </div>
        </div>

      </div>
    </section>

    <section id="team" class="team-section" aria-labelledby="team-heading">
      <div class="container">
        <h2 id="team-heading">Our Team</h2>
        <p class="team-intro">
          The people behind Hyperlane keep your operations moving—safely, reliably, and on time.
        </p>

        <div class="team-flex-layout">
          <article class="team-card-modern">
            <div class="team-img-modern">
              <img src="assets/team/naveen.jpg" alt="Naveen Mathew, CEO and Founder of Hyperlane Solutions" />
            </div>
            <h3>Naveen Mathew</h3>
            <p class="team-title-modern">CEO / Founder</p>
          </article>

          <article class="team-card-modern">
            <div class="team-img-modern">
              <img src="assets/team/christeen.jpg" alt="Christeen Bijo, Director of Procurement and Contracting at Hyperlane Solutions" />
            </div>
            <h3>Christeen Bijo</h3>
            <p class="team-title-modern">Director of Procurement and Contracting</p>
          </article>

          <article class="team-card-modern">
            <div class="team-img-modern">
              <img src="assets/team/kevin.jpg" alt="Kevin Mathew, VP Finance at Hyperlane Solutions" />
            </div>
            <h3>Kevin Mathew</h3>
            <p class="team-title-modern">VP, Finance</p>
          </article>

          <article class="team-card-modern">
            <div class="team-img-modern">
              <img src="assets/team/arjun.jpg" alt="Arjun Raj, Manager of Human Resources at Hyperlane Solutions" />
            </div>
            <h3>Arjun Raj</h3>
            <p class="team-title-modern">Manager, Human Resources</p>
          </article>
          
          <article class="team-card-modern">
            <div class="team-img-modern">
              <img src="assets/team/joby.jpg" alt="Joby Sunish, Logistics Coordinator at Hyperlane Solutions" />
            </div>
            <h3>Joby Sunish</h3>
            <p class="team-title-modern">Logistics Coordinator</p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-content">
      <p>&copy; <span id="yearAbout"></span> Hyperlane Solutions Ltd. — Terrace, BC</p>
      <nav class="footer-nav" aria-label="Footer navigation">
        <a href="index.html">Home</a>
        <a href="index.html#services">Services</a>
        <a href="index.html#why">Why</a>
        <a href="index.html#clients">Clients</a>
        <a href="careers.html">Careers</a>
        <a href="index.html#contact">Contact</a>
        <a href="shuttle/index.php">Book Airport Shuttle</a>
        <a href="portal/index.php">Client Portal</a>
      </nav>
    </div>
  </footer>

  <script src="script.js" defer></script>
  <script>
    document.getElementById('yearAbout').textContent = new Date().getFullYear();
  </script>
</body>
</html>