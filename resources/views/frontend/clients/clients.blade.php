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

@endsection
