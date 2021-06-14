@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.sidebar')


<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <br>
                    <h2 style="font-family: cairo;">{{__('message.questions')}}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li>{{__('message.questions')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@include('dashboard.layouts.flash-message')


<section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="pumpkin-color">{{__('message.questions')}}</span>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="questions-bg-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    @foreach ($questions as $question)
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <span>*</span>
                                            {{$question->question}}
                                        </a>
                                        <p class="accordion-content">{!! $question->answer !!}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq-contact-area pb-100">
    <div class="container">
        <div class="ask-question">
            <div class="section-title">
                <h2>Ask Question</h2>
            </div>
            <form id="contactForm" method="POST" action="{{route('storecontactus')}}" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="Please enter your name" placeholder="Your Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="phone" id="phone_number" required
                                data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="msg_subject" class="form-control" required
                                data-error="Please enter your subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn btn-two">
                            <span class="label">Send Message</span>
                            <i class='bx bx-plus'></i>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection