@extends('layouts.app')

@section('page-title', 'Home page')


@section('content')
    <div id="comics-content">
        <ul class="container">
            <div class="label">current series</div>
            @foreach ($comics as $comic)
                <li>
                    <div class="img-container"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></div>
                    <h3>{{ $comic['title'] }}</h3>
                </li>
            @endforeach

        </ul>
        <div class="btns-container">
            <button type="button" class="btn">load more</button>
        </div>

    </div>
@endsection
