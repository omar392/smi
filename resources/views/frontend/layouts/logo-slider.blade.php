<div class="brand-area pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="brand-wrap owl-carousel owl-theme">
                @foreach ($customers as $customer)
                <div class="brand-item">
                    <a href="#">
                        <img src="{{ asset('upload/image/'.$customer->image) }}" style="width: 60px; height: 100px;" alt="Image">
                    </a>
                    <h5 style="font-family: cairo;">{{$customer->name}}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>