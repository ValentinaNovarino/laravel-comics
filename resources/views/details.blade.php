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
    <section id="info">
        <div class="container-xs">
            <div class="comic-info">
                <h1 class="uppercase">{{ $comic['title'] }}</h1>
                <div class="availability-container">
                    <div class="price">
                        <span>U.S. Price:</span>
                        <span class="comic-price">{{ $comic['price'] }}</span>
                    </div>
                    <div class="availability">
                        <span class="comic-availability uppercase">Available</span>
                    </div>
                    <div class="check">
                        <span>Check Avalibality</span>
                    </div>
                </div>
                <div class="description-container">
                    <p class="comic-description">
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="comic-adv">
                <h5 class="uppercase">Advertisement</h5>
                <img src="{{ asset('images/adv.jpg') }}" alt="adv">

            </div>
        </div>
    </section>
@endsection
