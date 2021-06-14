@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.sidebar')


<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <br>
                    <h2 style="font-family: cairo;">{{__('message.team')}}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li>{{__('message.team')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<section class="team-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>{{__('message.team')}}</span>
            <h2 style="font-family: cairo;"> {{__('message.specialist')}} </h2>
            <p>{{__('message.message')}}</p>
        </div>
        <div class="row">
            @foreach ($team as $teams)
            <div class="col-lg-4 col-sm-6">
                
                <div class="single-team">
                    <img src="{{ asset('upload/image/'.$teams->image) }}" alt="Image">
                    <div class="team-content">
                        <h3 style="font-family: cairo;">{{$teams->name}}</h3>
                        <span>{{$teams->role}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection