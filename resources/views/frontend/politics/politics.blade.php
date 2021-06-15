@extends('frontend.layouts.master')
@section('pageTitle',__('message.politics'))

@section('content')
@include('frontend.layouts.sidebar')

<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'style="background-image:url({{ asset('frontend/assets/img/about-img-two.jpg') }});height: 500px;">
    <div class="container">
        <div class="page-title-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <br><br>
                    <h2 style="font-family: cairo;">{{ __('message.politics') }}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li>{{ __('message.politics') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="privacy-policy ptb-100">
    <div class="container">
        @foreach ($politics as $politic)
        <div class="single-privacy">
            <h3 class="mt-0" style="font-family: cairo;">{{$politic->title}}</h3>
            <p>{!! $politic->politics !!}</p>     
        </div>
        @endforeach
    </div>
</section>

@endsection