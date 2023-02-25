@extends('template.default')
{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($contact as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
@foreach ($contact as $list)
<!-- Contact Section-->
<header class="masthead bg-primary text-white text-center">
<section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ $list['lead']}}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    <img class="masthead-avatar mb-5" src="{{ $list['coffee_image'] }}" alt="..." />
                </div>
            </div>
        </section>
        </header>
        @endforeach
@endsection