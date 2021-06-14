<div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="index.html">
                            <img src="{{asset('admin/assets/images/logo.png')}}" alt="Logo">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus
                            eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore
                            voluptate, autem pariatur? Dicta pariatur.</p>
                    </div>
                    <div class="sidebar-modal-widget" style="font-family: cairo;" >
                        <h3 class="title" style="font-family: cairo;" >{{ __('message.hpages') }}</h3>
                        <ul>
                        <li><a href="#">{{ __('message.home') }}</a></li>
                        <li><a href="#">{{ __('message.aboutus') }}</a></li>
                        <li><a href="#">{{ __('message.services') }}</a></li>
                        <li><a href="#">{{ __('message.news') }}</a></li>
                        <li><a href="#">{{ __('message.team') }}</a></li>
                        <li><a href="#">{{ __('message.contact') }}</a></li>
                        <li><a href="#">{{ __('message.questions') }}</a></li>
                        <li><a href="#">{{ __('message.politics') }}</a></li>
                        <li><a href="#">{{ __('message.opinion') }}</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title" style="font-family: cairo;">{{ __('message.contact') }}</h3>
                        <ul class="social-list">
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
            </div>
        </div>
    </div>
</div>