@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.sidebar')

<div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{ asset('admin/assets/images/logo.png') }})" >
    <div class="container" >
        <div class="page-title-content" >
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <h2 style="font-family: cairo;">{{__('message.contact')}}</h2>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{route('fronts.index')}}">
                                {{__('message.home')}}
                            </a>
                        </li>
                        <li>{{__('message.contact')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
@include('dashboard.layouts.flash-message')

<section class="address-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-address">
                    <i class='bx bx-phone-call'></i>
                    <h3 style="font-family: cairo;">{{__('message.contact')}}</h3>
                    <span>Talk to support</span>
                    <a href="tel:+6494461709">+800 603 6035</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-address">
                    <i class='bx bx-location-plus'></i>
                    <h3>Location</h3>
                    <span>Find where we are</span>
                    <p>3261 Anmoore Road, NY 11230</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-address">
                    <i class='bx bx-time'></i>
                    <h3>Meet Us</h3>
                    <span>Available Hours to meet</span>
                    <p>9:00 AM – 8:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map-area">
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463940.975703611!2d49.56642499699852!3d24.013341491705887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2ssa!4v1618222428921!5m2!1sar!2ssa"></iframe>
    </div>
</div>
<br>

<section class="faq-contact-area pb-100">
    <div class="container">
        <div class="ask-question">
            <div class="section-title">
                <h2>Ask Question</h2>
            </div>
            <form id="contactForm" method="POST" action="{{route('fronts.contact.sava')}}" enctype="multipart/form-data" >
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