@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.sidebar')

    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <br><br>
                        <h2 style="font-family: cairo;">{{ __('message.services') }}</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{ route('fronts.index') }}">
                                    {{ __('message.home') }}
                                </a>
                            </li>
                            <li>{{ __('message.services') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    {{-- slider services --}}
    <section class="our-project-area pb-100">
        <div class="container-fluid p-0">
            <div class="section-title">
                <span>{{ __('message.smi') }}</span>
                <h2 style="font-family: cairo">{{ __('message.services') }}</h2>
            </div>
            <div class="project-main-wrap owl-carousel owl-theme">
                @foreach ($services as $service)
                    <div class="single-project">
                        <img src="{{ asset('upload/image/' . $service->image) }}" style="height: 400px;" alt="Image">
                        <div class="project-content">
                            <div class="project-content-wrap">
                                <h3 style="font-family: cairo;">{{ $service->title }}</h3>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end slider services --}}

    {{-- services --}}
    <section class="service-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('message.best') }}</span>
                <h2 style="font-family: cairo;"> {{ __('message.bestlog') }} </h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-home"></i>
                            <h3 style="font-family: cairo;"> {{ $service->title }} </h3>
                            <p>{!! $service->description !!}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="#">
                                <h3 style="font-family: cairo;">{{ $service->title }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end services --}}

    {{-- keep your safe --}}
    <section class="began-area began-area-three began-area-four">
        <div class="container-fluid p-0">
            <div class="began-top-wrap">
                <div class="row">
                    <div class="col-lg-5 pr-0">
                        <div class="begans-bg">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-0">
                        <div class="began-wrap">
                            <h2 style="font-family: cairo;">{{ __('message.keep') }}</h2>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-fast-delivery"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.real') }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-lock"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.security') }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-stopwatch"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.fast') }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-payment-method"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.pay') }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-warehouse"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.support') }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-distribution"></i>
                                        <h3 style="font-family: cairo;">{{ __('message.storage') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end keep your safe --}}

@endsection
