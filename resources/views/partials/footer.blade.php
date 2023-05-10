<div id="footer">
    <div class="container">
        <nav>
            @foreach (config('db.footer_menus') as $menu)
                <ul>
                    @foreach ($menu as $link)
                        <li>
                            @if ($loop->first)
                                <h3>{{ $link['title'] }}</h3>
                            @else
                                <a href="#">{{ $link['title'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endforeach

        </nav>
        <img id="footer-bg-logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}">
    </div>
</div>
<div id="footer-banner">
    <div class="container">
        <nav>
            <a class="call-to-action" href="#">sign-up now!</a>
            <div class="social-container">
                <p>follow us</p>
                <ul>
                    @foreach (config('db.social_icons') as $icon)
                        <li>
                            <a href="#"><img src="{{ Vite::asset('resources/img/' . $icon['image']) }}"
                                    alt="{{ $icon['name'] }}"></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>
