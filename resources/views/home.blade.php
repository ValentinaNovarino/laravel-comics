@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($series as $element)
            <div class="card">
                <img src="{{ $element['thumb']}}" alt="{{ $element['series']}}">
                <span>{{ $element['series']}}</span>
            </div>
        @endforeach
    </div>
@endsection
