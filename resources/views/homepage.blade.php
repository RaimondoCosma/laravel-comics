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
