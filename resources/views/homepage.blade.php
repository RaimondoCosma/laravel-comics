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
    <section class="comics-section pb-3">
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
            <div class="text-center mt-5">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </section>

    <section class="more-info">
        <div class="container d-flex justify-content-between">
            <div class="cards">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="digital comics" /></a>
                <span>DIGITAL COMICS</span>
            </div>
            <div class="cards">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                        alt="dc merchandise" /></a>
                <span>DC MERCHANDISE</span>
            </div>
            <div class="cards">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="subscription" /></a>
                <span>SUBSCRIPTION</span>
            </div>
            <div class="cards">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="comic shop" /></a>
                <span>COMIC SHOP</span>
            </div>
            <div class="cards">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                        alt="dc power visa" /></a>
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>
@endsection
