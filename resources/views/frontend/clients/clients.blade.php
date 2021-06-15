@extends('frontend.layouts.master')
@section('pageTitle',__('message.opinion'))
@section('content')
@include('frontend.layouts.sidebar')

    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'style="background-image:url({{ asset('frontend/assets/img/choose-img-four.jpg') }});height: 500px;">
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h2 style="font-family: cairo;">{{ __('message.opinion') }}</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{route('fronts.index')}}">
                                    {{ __('message.home') }}
                                </a>
                            </li>
                            <li>{{ __('message.opinion') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <section class="testimonials-area fun-blue-bg ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('message.custop') }}</span>
                <h2 style="font-family: cairo;">{{ __('message.whcust') }}</h2>
            </div>
            <div class="row">
                <div class="testimonials-top-wrap owl-carousel owl-theme">
                    @foreach ($opinions as $opinion)
                    <div class="testimonials-wrap">
                        <img src="{{ asset('upload/image/' . $opinion->image) }}" style="border-radius: 50%" alt="Image">
                        <div class="testimonials-content">
                            <p>{!! $opinion->description !!}</p>
                            <h3 style="font-family: cairo;">{{ $opinion->name }}</h3>
                            <h3 style="font-family: cairo;">{{ $opinion->job }}</h3>
                            <ul>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
