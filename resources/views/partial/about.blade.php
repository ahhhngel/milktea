@extends('template.default')
{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($about as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
@foreach ($about as $list)
<!-- About Section-->
<header class="masthead bg-primary text-white text-center">
<section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">{{ $list['lead'] }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">{{ $list['desc'] }}</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">{{ $list['okay'] }}</p></div>
                </div>
            </div>
        </section>
        </header>
        @endforeach
@endsection