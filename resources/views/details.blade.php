@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="thumb">
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
    <section id="details">
        <div class="container-xs">
            <div class="talent">
                <h2>Talent</h2>
                <ul>
                    <li>
                        <span class="detail-label">Art by:</span>
                        <span class="data">
                            @foreach ($comic['artists'] as $artistName)
                                <a href="#">{{ $artistName }}</a>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">Written by:</span>
                        <span class="data">
                            @foreach ($comic['writers'] as $writerName)
                                <a href="#">{{ $writerName }}</a>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <ul>
                    <li>
                        <span class="detail-label">Series:</span>
                        <span class="data">
                            <a href="#" class="uppercase">
                                {{ $comic['series'] }}
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">Price:</span>
                        <span class="data">{{ $comic['price'] }}</span>
                    </li>
                    <li>
                        <span class="detail-label">On Sale Date:</span>
                        <span class="data">
                            {{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="pane-shop">
        <div class="container-xs">
            <div class="icon-box-container">
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Digital Comics</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Shop DC</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Comic Shop Locator</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Subscriptions</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
