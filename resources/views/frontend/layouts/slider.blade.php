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
                                <br><br>
                                @include('dashboard.layouts.flash-message')
                                <div class="tracking-body">
                                    <form class="tracking-wrap" method="POST" action="{{route('fronts.subscripe')}}">
                                        @csrf
                                        <input type="email" class="input-tracking"
                                            placeholder="{{__('message.email')}}" name="email" dir="auto">
                                        <button class="default-btn active" type="submit" value="submit">{{__('message.track')}}</button>
                                    </form>
                                </div>
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