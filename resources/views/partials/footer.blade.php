<footer>
    <section class="top">
        <div class="container">
            <ul>
                @foreach ($footers as $footer)
                <li>{{ $footer }}</li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="bottom">
        <div class="container d-flex justify-content-between">
            <button class="btn ms-btn my-5">sign-up NOW</button>
            <div class="my-5">
                <span>follow us</span>
                @foreach ($socials as $social)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-' . $social ) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</footer>