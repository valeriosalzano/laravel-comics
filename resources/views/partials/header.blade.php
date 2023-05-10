<header>
    <nav class="container">
        <div class="img-container">
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo"></a>
        </div>

        <ul>
            @foreach (config('db.header_links') as $link)
                <li>
                    {{-- remember to insert route() later --}}
                    <a href="{{ $link['route'] }}">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>
