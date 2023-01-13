@extends('layouts.main')
@section('title-page')
    Homepage
@endsection

@section('hero-content')
    <section class="hero" style="display: inline-block; max-height: 400px; width: 100%">
        <img style="height: 400px; width: 100%; object-fit: cover; object-position: top;"
            src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Hero">
    </section>
@endsection

@section('page-content')
    <section class="comics-section">
        <div class="container position-relative">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 comics-cards my-5">
                        <img class="comics-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <span class="text-white">{{ strtoupper($comic['series']) }}</span>
                    </div>
                @endforeach
            </div>
            <span class="current-series position-absolute text-white py-2 px-3">CURRENT SERIES</span>
        </div>
    </section>
@endsection
