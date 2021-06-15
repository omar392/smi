@extends('frontend.layouts.master')
@section('pageTitle',__('message.news'))

@section('content')
@include('frontend.layouts.sidebar')

<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{ asset('frontend/assets/img/coco.jpg') }});height: 500px;">
    <div class="container">
        <div class="page-title-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <br><br>
                    <h2 style="font-family: cairo;">{{__('message.news')}}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li>{{__('message.news')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @foreach ($news as $new)
                <div class="blog-details-desc">
                    <div class="article-image">
                        <h3 style="font-family: cairo;" >{{$new->title}}</h3>
                        <img src="{{ asset('upload/image/'.$new->image) }}" style="height: 500px;" alt="image">
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                        </div>
                        <h3 style="font-family: cairo;" >{{$new->title}}</h3>
                        <p>{!! $new->description !!}</p>
                        <br> <br> <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection