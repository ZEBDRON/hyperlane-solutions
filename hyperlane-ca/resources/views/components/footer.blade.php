<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} Hyperlane Solutions Ltd. &mdash; Terrace, BC</p>

        <nav class="footer-nav" aria-label="Footer navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}#services">Services</a>
            <a href="{{ route('home') }}#why">Why</a>
            <a href="{{ route('home') }}#clients">Clients</a>
            <a href="{{ route('careers') }}">Careers</a>
            <a href="{{ route('home') }}#contact">Contact</a>

            <a href="/shuttle">Book Airport Shuttle</a>
            <a href="/portal">Client Portal</a>
        </nav>
    </div>
</footer>

@vite('resources/js/app.js')