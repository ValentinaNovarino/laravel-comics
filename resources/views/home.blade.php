@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            <div class="section-title">
                <h2 class="uppercase">curent series</h2>
            </div>
            <div class="card-container">
                @foreach ($series as $element)
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $element['thumb']}}" alt="{{ $element['series']}}">
                        </div>
                        <div class="card-title">
                            <span class="uppercase">{{ $element['series']}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
