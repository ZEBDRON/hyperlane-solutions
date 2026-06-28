@if(request()->routeIs(['home', 'services']))
<div class="sticky-header-wrapper">
    <div id="topBanner" class="announcement-strip">
        <div class="announcement-strip-content">
            <span aria-hidden="true" class="announcement-icon">🔔</span>
            <p><strong>Announcement</strong> - We are now offering Facility maintenance solutions -</p>
            <a href="{{ route('facility-maintenance') }}" class="announcement-link">Learn more</a>
        </div>

        <button class="close-announcement" id="closeBannerBtn" aria-label="Close announcement">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<header class="site-header" @if(request()->routeIs(['home', 'services'])) id="top" @endif>
    <nav class="navbar" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="brand" aria-label="Hyperlane Solutions home">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Hyperlane Solutions logo" class="logo">
            <span class="brand-name">Hyperlane&nbsp;Solutions</span>
        </a>

        <button class="menu-toggle"
                aria-expanded="false"
                aria-label="Toggle menu"
                id="{{ request()->routeIs(['home', 'services']) ? 'menuButton' : 'menuButtonAbout' }}">
            <span class="hamburger"></span>
        </button>

        <ul class="nav-links"
            id="{{ request()->routeIs(['home', 'services']) ? 'navLinks' : 'navLinksAbout' }}">
            <li><a href="{{ route('about') }}">About</a></li>

            @if(request()->routeIs(['home', 'services']))
                <li><a href="#services">Services</a></li>
                <li><a href="#why">Why&nbsp;Hyperlane?</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#contact">Contact</a></li>
            @else
                <li><a href="{{ route('home') }}#services">Services</a></li>
                <li><a href="{{ route('home') }}#why">Why&nbsp;Hyperlane?</a></li>
                <li><a href="{{ route('home') }}#clients">Clients</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            @endif

            <li><a href="{{ route('careers') }}">Careers</a></li>
            <li><a href="{{ route('shuttle.booking') }}">Book Airport Shuttle</a></li>
            <li><a href="{{ route('portal') }}">Client Portal</a></li>
        </ul>
    </nav>
</header>

@if(request()->routeIs(['home', 'services']))
</div>
@endif