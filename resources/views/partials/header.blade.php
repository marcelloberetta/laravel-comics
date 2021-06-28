<!--Header here -->

<header>
    <section class="container flex pad pad-bot">
        <a class="flex" href="{{ route('homepage') }}">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
        </a>

        <nav class="main-navigation">
            <ul>
                <li><a href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="{{ route('news') }}">NEWS</a></li>
            </ul>
        </nav>
    </section>
</header>