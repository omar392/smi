    <header class="header-area-four fixed-top" style="height: 45px;">

        <div class="header-style-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="header-left-content">
                            <ul>
                                <li>
                                    <a href="tel:{{$socials->phone}}">
                                        <i class="bx bx-phone-call"></i>
                                        {{$socials->phone}}
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://{{$socials->email}}">
                                        <i class="bx bx-envelope"></i>
                                        <span class="__cf_email__">{{$socials->email}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="header-right-content">
                            <ul class="social-links">
                                <li>
                                    <a href="https://{{$socials->facebook}}">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://{{$socials->twitter}}">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://{{$socials->instagram}}">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://{{$socials->linkedin}}">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if($localeCode == LaravelLocalization::getCurrentLocale())
                                @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        class="nav-link"><img src="{{ asset('frontend/assets/img/flag/'.$properties['native'])  }}"
                                        style="width: 30px;height:30px;">
                                        </a>
                                    </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="prevoz-nav-style prevoz-nav-style-four">
            <div class="navbar-area">

                <div class="mobile-nav">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('frontend/assets/img/logo/Asset 4hdpi.png') }}" alt="Logo">
                    </a>
                </div>

                <div class="main-nav" style="height: 90px;">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('frontend/assets/img/logo/Asset 4hdpi.png') }}"
                                    style="width: 200px;height: 70px;" alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('fronts.index') }}" class="nav-link dropdown-toggle">
                                            {{ __('message.home') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.aboutus')}}" class="nav-link dropdown-toggle">
                                            {{ __('message.aboutus') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.services')}}" class="nav-link dropdown-toggle">
                                            {{ __('message.services') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.news')}}" class="nav-link dropdown-toggle">
                                            {{ __('message.news') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.team')}}" class="nav-link dropdown-toggle">
                                            {{ __('message.team') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.team')}}" class="nav-link">
                                            {{ __('message.pages') }}
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{route('fronts.clients')}}" class="nav-link">
                                                    {{ __('message.opinion') }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('fronts.politics')}}" class="nav-link">
                                                    {{ __('message.politics') }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('fronts.questions')}}" class="nav-link">
                                                    {{ __('message.questions') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.contact')}}" class="nav-link dropdown-toggle">
                                            {{ __('message.contact') }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="others-option">
                                    <button type="button" class="sidebar-menu" data-bs-toggle="modal"
                                        data-bs-target="#myModal2">
                                        <i class="flaticon-menu"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
