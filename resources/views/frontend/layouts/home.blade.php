@extends('frontend.layouts.master')
@section('content')
@include('frontend.layouts.sidebar')
<div class="search-wrap">
    <div class="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" class="form-control" placeholder="Type Here..." />
            <button type="submit" class="default-btn">
                Search
            </button>
        </form>
    </div>
</div>
@include('frontend.layouts.slider')
@include('frontend.layouts.logo-slider')
    {{-- services --}}
    <section class="service-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('message.best') }}</span>
                <h2 style="font-family: cairo;"> {{ __('message.bestlog') }} </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-home"></i>
                            <h3 style="font-family: cairo;"> {{ __('message.operations1') }} </h3>
                            <p>{{ __('message.operations') }}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="{{route('fronts.services')}}">
                                <h3 style="font-family: cairo;">{{ __('message.operations1') }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-package"></i>
                            <h3 style="font-family: cairo;">{{ __('message.operations2') }}</h3>
                            <p>{{ __('message.operations3') }}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="{{route('fronts.services')}}">
                                <h3 style="font-family: cairo;">{{ __('message.operations2') }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-home"></i>
                            <h3 style="font-family: cairo;"> {{ __('message.operations4') }} </h3>
                            <p>{{ __('message.operations5') }}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="{{route('fronts.services')}}">
                                <h3 style="font-family: cairo;">{{ __('message.operations4') }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-home"></i>
                            <h3 style="font-family: cairo;"> {{ __('message.operations6') }} </h3>
                            <p>{{ __('message.operations7') }}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="{{route('fronts.services')}}">
                                <h3 style="font-family: cairo;">{{ __('message.operations6') }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content-wrap">
                            <i class="icon flaticon-home"></i>
                            <h3 style="font-family: cairo;"> {{ __('message.operations8') }} </h3>
                            <p>{{ __('message.operations9') }}</p>
                        </div>
                        <div class="service-heading">
                            <a class="circle-read-more" href="{{route('fronts.services')}}">
                                <h3 style="font-family: cairo;">{{ __('message.operations8') }}</h3>
                                <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end services --}}

    {{-- who we are --}}
    <section class="about-area about-area-two about-area-four pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>{{ __('message.know') }}</span>
                        <p style="font-family: cairo;">{{ __('message.knows') }}
                        <p>
                            <a class="default-btn" href="{{route('fronts.aboutus')}}">
                                {{ __('message.aboutus') }}
                            </a>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="about-img">
                        <div class="about-history">
                            <div class="about-details">
                                <i class="flaticon-box"></i>
                                <span>{{ $counters->succeed }}</span>
                                <p>{{ __('message.succeed') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end who we are --}}

    {{-- counter --}}
    <section class="counter-area fun-blue-bg pt-100 pb-70" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-box"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $counters->succeed }}"></span> <span
                                class="traget"></span>
                        </h2>
                        <p>{{ __('message.succeed') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-planet-earth"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $counters->branches }}"></span> <span
                                class="traget"></span>
                        </h2>
                        <p>{{ __('message.branches') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-support"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $counters->team }}"></span> <span class="traget"></span>
                        </h2>
                        <p>{{ __('message.teamn') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-product-realise"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $counters->customers }}"></span> <span
                                class="traget"></span>
                        </h2>
                        <p>{{ __('message.customers') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end counter --}}
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

    {{-- mission & vission --}}
    <section class="choose-us-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('message.why') }}</span>
                <h2 style="font-family: cairo;">{{ __('message.best') }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 pr-0">
                    <div class="choose-img choose-img-four">
                    </div>
                </div>
                <div class="col-lg-8 pl-0">
                    <div class="choose-tab-wrap">
                        <h2 style="font-family: cairo;">{{ __('message.whybest') }}</h2>
                        <div class="tab quote-list-tab choose-tab">
                            <ul class="tabs">
                                <li>
                                    <a href="{{route('fronts.aboutus')}}">
                                        {{ __('message.mission') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('fronts.aboutus')}}">
                                        {{ __('message.vission') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('fronts.aboutus')}}">
                                        {{ __('message.goals') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('fronts.aboutus')}}">
                                        {{ __('message.who') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <p>{!! $aboutus->mission !!}</p>
                                    <a class="default-btn" href="{{route('fronts.aboutus')}}">
                                        {{ __('message.learn') }}
                                    </a>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->vission !!}</p>
                                    <a class="default-btn" href="{{route('fronts.aboutus')}}">
                                        {{ __('message.learn') }}
                                    </a>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->goals !!}</p>
                                    <a class="default-btn" href="{{route('fronts.aboutus')}}">
                                        {{ __('message.learn') }}
                                    </a>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->who !!}</p>
                                    <a class="default-btn" href="{{route('fronts.aboutus')}}">
                                        {{ __('message.learn') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end mission & vission --}}

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

    {{-- customer opinions slider --}}
    <section class="testimonials-three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ __('message.custop') }}</span>
                <h2 style="font-family: cairo;">{{ __('message.whcust') }}</h2>
            </div>
            <div class="row">
                <div class="testimonials-wrap-three owl-carousel owl-theme">
                    @foreach ($opinions as $opinion)
                        <div class="testimonials-content-three">
                            <div class="testimonials-top-content">
                                <img src="{{ asset('upload/image/' . $opinion->image) }}" style="height: 40px;"
                                    style="border-radius: 10%" alt="Image">
                                <h3 style="font-family: cairo;">{{ $opinion->name }}</h3>
                                <span>{{ $opinion->job }}</span>
                            </div>
                            <p>{!! $opinion->description !!}</p>
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- end customer opinions slider --}}

    {{-- location & contacts --}}
    <div class="contact-map-area">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463940.975703611!2d49.56642499699852!3d24.013341491705887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2ssa!4v1618222428921!5m2!1sar!2ssa"></iframe>
        </div>
    </div>
    {{-- end location & contacts --}}
@endsection
