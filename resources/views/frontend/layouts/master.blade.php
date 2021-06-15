<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.rtl.min.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl.css') }}">
    @endif

    <link rel="icon" type="image/png" href="{{ asset('admin/assets/images/logo.png') }}">

    <title>@yield('pageTitle') - {{__('message.smi')}} </title></head>
<style>
    body {
        font-family: 'Cairo';
    }
 
</style>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    @include('frontend.layouts.header')


    @yield('content')

    @include('frontend.layouts.footer')


    <div class="go-top">
        <i class='bx bx-chevrons-up bx-fade-up'></i>
        <i class='bx bx-chevrons-up bx-fade-up'></i>
    </div>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script data-cfasync="false" src="{{ asset('frontend/assets/email-decode.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>

    {{-- <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script> --}}

    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "",
                "borderRadius": "200",
                "marginLeft": "20",
                "marginBottom": "20",
                "marginRight": "20",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "SMI Express",
                "brandSubTitle": "يصلك الرد خلال اليوم",
                "brandImg": "http://smiexpress.com/assets/images/logo.png",
                "welcomeText": "أهلا بك \n كيف يمكننى مساعدتك؟",
                "messageText": "لدى إستفسار عن  ",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "+201067747215"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);

    </script>

</body>

</html>
