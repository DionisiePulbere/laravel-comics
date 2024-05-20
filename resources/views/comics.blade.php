@extends('layouts.app')

@section('content')
<section class="poster">
    <div class="container d-flex flex-wrap justify-content-between">
        <div class="ms-badge">current series</div>
        @foreach ($comics as $comic)
            <div class="card" style="width: 200px;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $comic['series'] }}</p>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center container-fluid mb-4">
            <button class="btn btn-primary">load more</button>
        </div>
    </div>
</section>
<section class="marketing">
    <div class="container d-flex align-items-center justify-content-around py-5">

        @foreach ($icons as $icon)
        <div class="d-flex align-items-center ">
            <div><img src="{{ Vite::asset('resources/img/buy-' . $icon['src']) }}" alt="{{ $icon['text'] }}"></div>
            <div class="text ms-3">{{ $icon['text'] }}</div>
        </div>
        @endforeach
    </div>
</section>
@endsection