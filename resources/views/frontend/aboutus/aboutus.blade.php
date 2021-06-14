
@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.sidebar')

<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <h2 style="font-family: cairo;">{{__('message.aboutus')}}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li> {{__('message.aboutus')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- mission & vission --}}
    <section class="choose-us-area pb-100">
        <div class="container">
            <div class="section-title">
                <br>
                <br>
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
                                    <a href="#">
                                        {{ __('message.mission') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        {{ __('message.vission') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        {{ __('message.goals') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        {{ __('message.who') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <p>{!! $aboutus->mission !!}</p>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->vission !!}</p>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->goals !!}</p>
                                </div>
                                <div class="tabs_item">
                                    <p>{!! $aboutus->who !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end mission & vission --}}

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
    
@endsection