@extends('layouts.main')

@section('title-page')
    Collectibles
@endsection

@section('hero-content')
    <section class="hero" style="display: inline-block; max-height: 400px; width: 100%">
        <img style="height: 400px; width: 100%; object-fit: cover; object-position: top;"
            src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Hero">
    </section>
@endsection

@section('page-content')
    <section class="games-section pb-3">
        <h1 class="text-center py-5">Questa è la pagina COLLECTIBLES</h1>
    </section>
@endsection
