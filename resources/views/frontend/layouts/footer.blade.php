<footer class="footer-top-area footer-top-area-four pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <img src="{{ asset('admin/assets/images/logo.png') }}" style="width: 250px;hieght: 150px;" alt="Image">
                    <p>{{__('message.foot')}}</p>
                    <ul class="social-link">
                        <li>
                            <a href="https://{{$socials->twitter}}">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$socials->facebook}}">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$socials->instagram}}">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$socials->linkedin}}">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$socials->youtube}}">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget" style="font-family: cairo;">
                    <h3 style="font-family: cairo;">{{ __('message.hpages') }}</h3>
                    <ul>
                        <li><a href="{{route('fronts.index')}}">{{ __('message.home') }}</a></li>
                        <li><a href="{{route('fronts.aboutus')}}">{{ __('message.aboutus') }}</a></li>
                        <li><a href="{{route('fronts.services')}}">{{ __('message.services') }}</a></li>
                        <li><a href="{{route('fronts.news')}}">{{ __('message.news') }}</a></li>
                        <li><a href="{{route('fronts.team')}}">{{ __('message.team') }}</a></li>
                        <li><a href="{{route('fronts.contact')}}">{{ __('message.contact') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3 style="font-family: cairo;">{{ __('message.pages') }}</h3>
                    <ul>
                        <li><a href="{{route('fronts.questions')}}">{{ __('message.questions') }}</a></li>
                        <li><a href="{{route('fronts.politics')}}">{{ __('message.politics') }}</a></li>
                        <li><a href="{{route('fronts.clients')}}">{{ __('message.opinion') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3 style="font-family: cairo;">{{ __('message.contact') }}</h3>
                    <p>{{ __('message.message') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>


<footer class="footer-bottom-area footer-bottom-area-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single-widget-bottom">
                    <p>
                        Copyright <i class="bx bx-copyright"></i> 2021 
                        <a href="https://www.facebook.com/profile.php?id=100002626340909" target="_blank">Omar Ashraf</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>