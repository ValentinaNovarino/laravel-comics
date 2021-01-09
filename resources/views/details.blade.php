@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="comic-thumb">
        <div class="container-xs">
            <div class="thumb-container">
                <div class="thumb-wrapper">
                    <span class="type uppercase">{{ $comic['type'] }}</span>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span class="gallery uppercase">View Gallery</span>
                </div>
            </div>
        </div>
    </section>
@endsection
