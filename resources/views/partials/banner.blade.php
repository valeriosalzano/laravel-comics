<div id="banner">
    <nav class="container">
      <ul>
        @foreach (config('db.banner_items') as $item )
        <li>
          <a href="#">
            <img src="{{ Vite::asset('resources/img/'.$item['image']) }}" alt="{{$item['title'].' image'}}">
            <span>
              {{ $item['title'] }}
            </span>
          </a>
        </li>
        @endforeach
      </ul>

    </nav>
  </div>