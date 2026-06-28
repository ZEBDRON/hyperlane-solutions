<main class="page-content">
    <section class="hero" role="region" aria-label="Introductory image carousel">
      <div class="hero-slides" id="heroSlides">
        <img src="{{ asset('assets/images/hero1.png') }}" 
             alt="White delivery truck travelling through the mountains on a sunny day" 
             class="hero-img active"
             data-mobile-src="{{ asset('assets/images/hero-mobile.png') }}"> 
             
        <img src="{{ asset('assets/images/hero2.png') }}" alt="Pickup truck and van parked on a snowy road with mountains behind" class="hero-img">
        <div class="overlay"></div>
      </div>
      <div class="hero-content">
        <h1>Logistics,Transportation &amp; Deliveries&nbsp;— done right.</h1>
        <p class="subheading">Serving British Columbia, Alberta &amp; Yukon with hotshot deliveries, dedicated runs, pharmaceutical logistics and pilot car services.</p>
        <div class="cta-buttons">
          <a href="#contact" class="btn primary">Get&nbsp;a&nbsp;Quote</a>
          <a href="shuttle/index.php" class="btn secondary">Book&nbsp;Airport&nbsp;Shuttle</a>
        </div>
      </div>
      <div class="carousel-controls" aria-label="Carousel controls">
        <button class="carousel-dot active" data-index="0" aria-label="Show first image"></button>
        <button class="carousel-dot" data-index="1" aria-label="Show second image"></button>
        </div>
    </section>

    <section id="services" class="services" aria-labelledby="services-heading">
      <h2 id="services-heading">Our Services</h2>
      <p class="intro">From urgent hotshot freight to specialized medical transport and pilot escorts, Hyperlane delivers versatile solutions tailored to your needs.</p>
      
      <div class="services-grid">
        <a class="service-card service-link" href="services/hotshot-express-deliveries.html">
          <h3><span class="service-icon" aria-hidden="true">⚡</span> Hotshot &amp; Express Deliveries</h3>
          <p>Urgent, time‑sensitive freight delivered safely and on schedule — from express van runs to pickups, 5‑ton trucks or full tractor‑trailers.</p>
        </a>
        <a class="service-card service-link" href="services/dedicated-runs-contract-logistics.html">
          <h3><span class="service-icon" aria-hidden="true">🔁</span> Dedicated Runs &amp; Contract Logistics</h3>
          <p>Scheduled, recurring deliveries with pre‑planned timings and SLA accountability — across any fleet: sedan, SUV, pickup, cube van, 5‑ton or tractor‑trailer.</p>
        </a>
        <a class="service-card service-link" href="services/pharmaceutical-logistics.html">
          <h3><span class="service-icon" aria-hidden="true">❄️</span> Pharmaceutical Logistics</h3>
          <p>Secure, confidential medical deliveries with chain‑of‑custody and temperature‑controlled handling. Your sensitive packages are in safe hands.</p>
        </a>
        <a class="service-card service-link" href="services/pilot-car-escort-services.html">
          <h3><span class="service-icon" aria-hidden="true">🚨</span> Pilot Car &amp; Escort Services</h3>
          <p>Professional pilot car and escort support for oversized and over‑dimensional hauls — route scouting, communications and safety‑focused guidance.</p>
        </a>
        <a class="service-card service-link" href="services/shuttle-charter-transportation.html">
          <h3><span class="service-icon" aria-hidden="true">🚐</span> Shuttle &amp; Charter Transportation</h3>
          <p>Reliable, comfortable passenger transport for workforce movements, airport transfers, and private charters — tailored to your schedule. From daily crew shuttles to on-demand group travel, we ensure safe, punctual and professional service across all routes.</p>
        </a>
        <a class="service-card service-link" href="services/on-demand-custom-specialized-project-solutions.html">
          <h3><span class="service-icon" aria-hidden="true">🧩</span> On-Demand Custom &amp; Specialized Project Solutions</h3>
          <p>Flexible, project-driven solutions tailored to complex and non-standard requirements. From remote site support and multi-phase operations to urgent, high-priority assignments, Hyperlane adapts quickly to deliver precise execution, scalability, and full operational control.</p>
        </a>
        <a id="facility-nav-target" class="service-card service-link" href="{{ route('facility-maintenance') }}" style="scroll-margin-top: 100px;">
          <h3><span class="service-icon" aria-hidden="true">🏢</span> Facility Maintenance Solutions</h3>
          <p>Coordinated snow removal, landscaping, and janitorial services delivered through trusted regional partners.</p>
          <span style="display:inline-block; margin-top:1rem; font-weight:700; color:#063970; text-decoration:underline;">Learn more</span>
        </a>
      </div>

    </section>

    <section id="why" class="why parallax-section" aria-labelledby="why-heading">
      <div class="parallax-overlay"></div>
      <div class="why-container relative-z">
        <h2 id="why-heading" class="section-title-light">Why Hyperlane?</h2>
        <div class="why-glass-grid">
          
          <div class="glass-panel">
            <h3><span aria-hidden="true" class="icon-wrap-glass">🛡️</span> Safety &amp; Reliability</h3>
            <p>Our fleet exceeds NSC compliance and is maintained above industry standards—so you get fewer delays, safer deliveries and dependable performance every time.</p>
          </div>
          
          <div class="glass-panel">
            <h3><span aria-hidden="true" class="icon-wrap-glass">📍</span> Extensive Coverage</h3>
            <p>From BC’s coast to Alberta’s plains and the Yukon’s remote corridors, we deliver. Whether it’s an industrial site or a charter run in rugged terrain, we’ve got you covered.</p>
          </div>
          
          <div class="glass-panel">
            <h3><span aria-hidden="true" class="icon-wrap-glass">⏱️</span> 24/7 Dispatch &amp; Tracking</h3>
            <p>Live dispatch, route monitoring and emergency response mean your shipment stays visible and on schedule—day and night.</p>
          </div>
          
          <div class="glass-panel">
            <h3><span aria-hidden="true" class="icon-wrap-glass">🤝</span> Commitment to Your Success</h3>
            <p>We hold ourselves accountable. From start to finish, you’ll deal with one team delivering consistent service and the care your mission demands.</p>
          </div>

        </div>
      </div>
    </section>

    <section id="clients" class="clients-section bg-gray" aria-labelledby="clients-heading">
      <h2 id="clients-heading">Our Clients</h2>
      <p class="clients-subtitle">
        Trusted by leading organizations across aviation, mining, hospitality and energy.
      </p>

      <div class="clients-grid">
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/kica.png') }}" alt="KICA Contracting Ltd. logo" />
        </figure>
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/air-canada.png') }}" alt="Air Canada logo" />
        </figure>
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/westjet.png') }}" alt="WestJet logo" />
        </figure>
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/mustang-helicopters.jpg') }}" alt="Mustang Helicopters logo" />
        </figure>
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/skeena-gold-silver.png') }}" alt="Skeena Gold + Silver logo" />
        </figure>
        <figure class="client-logo">
          <img src="{{ asset('assets/images/clients/galore-creek.png') }}" alt="Galore Creek Mining Corporation (GCMC) logo" />
        </figure>
      </div>
    </section>

    <section id="contact" class="contact" aria-labelledby="contact-heading">
      <h2 id="contact-heading">Get in Touch</h2>
      <p class="intro">Tell us about your logistics or charter needs and we’ll respond within one business day.</p>
      <div class="contact-wrapper">
        <form action="contact.php" method="post" class="contact-form" novalidate>
          <div class="form-field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required aria-required="true">
          </div>
          <div class="form-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required aria-required="true">
          </div>
          <div class="form-field">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-field full-width">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required aria-required="true"></textarea>
          </div>
          <button type="submit" class="btn primary">Send Message</button>
          <p class="privacy-note">We respect your privacy. Your information will be used solely to respond to your inquiry.</p>
        </form>
        <div class="contact-info">
          <h3>Fast Contact</h3>
          <p><strong>Dispatch:</strong> 24/7</p>
          <p><strong>Phone:</strong> <a href="tel:+12509224620">+1 (250)&nbsp;922‑4620</a></p>
          <p><strong>Email:</strong> <a href="mailto:office@hyperlane.ca">office@hyperlane.ca</a></p>
          <p><strong>Service Area:</strong> BC • Alberta • Yukon</p>
        </div>
      </div>
    </section>
  </main>