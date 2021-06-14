<section class="prevoz-slider-area prevoz-slider-area-four">
    <div class="prevoz-slider-style owl-carousel owl-theme">
        @foreach ($sliders as $slider)
        <div class="prevoz-slider-item" style="background-image:url({{ asset('upload/image/'.$slider->image) }})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="prevoz-slider-text one">
                            <h1 style="font-family: cairo;">{{$slider->title}}</h1>
                            <p style="font-family: cairo;">{!! $slider->description !!}</p>
                            <div class="slider-btn">
                                <a class="default-btn active" href="{{route('fronts.services')}}">
                                    {{ __('message.services') }}
                                </a>
                                <a class="default-btn white" href="{{route('fronts.contact')}}">
                                    {{ __('message.contact') }}
                                </a>
                            </div>
                        </div>
                        <div class="lines">
                            <div class="line-three"></div>
                            <div class="line-three"></div>
                            <div class="line-three"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>