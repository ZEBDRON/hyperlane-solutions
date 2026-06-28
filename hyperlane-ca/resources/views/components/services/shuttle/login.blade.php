<section class="auth-card">
    <h1>Sign in</h1>

    <p>
        Use this for passenger dashboard, hotel/corporate accounts,
        drivers, dispatchers, and Super Admin.
    </p>

    @if(session('error'))
        <div class="flash error">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="flash error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('shuttle.login') }}">
        @csrf

        <label>
            Email Address
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </label>

        <label>
            Password
            <input
                type="password"
                name="password"
                required
            >
        </label>

        <button class="btn primary wide" type="submit">
            Sign in
        </button>
    </form>

    <div class="hint-box">
        <strong>First-time passenger?</strong>
        You do not need to sign up first.
        Start with
        <a href="{{ route('shuttle.service') }}">
            Book Airport Shuttle
        </a>;
        your account will be created automatically after checkout.
    </div>
</section>