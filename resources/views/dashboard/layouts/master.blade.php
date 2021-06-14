<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - SMI Express </title>
    <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    <link rel="icon" type="image/png" href="{{asset('admin/assets/images/logo.png')}}"> 
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> 
</head>
<style>
    html {
	font-size: 16px;
}
body {
	font-size: 1rem;
	/* display: flex; */
	min-height: 100vh;
	margin: 0 auto;
	/* justify-content: center; */
	/* align-items: center; */
	flex-direction: column;
	color: rgb(20, 20, 28);
}
.input-preview {
	border-radius: 4px;
	width: 200px;
	height: 200px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	position: relative;
	transition: ease-in-out 750ms;
}
</style>
<body>
<div class="container-fluid">
    <!--Start header-->
    @include('dashboard.layouts.header')
    <!--/End header-->
    <!--Start body container section-->
    <div class="row container_section">
        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{asset('admin/assets/images/logo.png')}}">

                <h1 class="h3">SMI Express</h1>
                <p>                    
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">تسجيل الخروج
                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                </p>
            </div>
        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        @include('dashboard.layouts.sidebar')
        <!--/End side bar main menu-->

        <!--Start Main content container-->
        
                @yield('content')
          
    </div>
</div>
<script>
    const fileImage = document.querySelector(".input-preview__src");
    const filePreview = document.querySelector(".input-preview");
    fileImage.onchange = function () {
        const reader = new FileReader();
        reader.onload = function (e) {
            filePreview.style.backgroundImage = "url(" + e.target.result + ")";
            filePreview.classList.add("has-image");
        };
        reader.readAsDataURL(this.files[0]);
    };
</script>
<script type="text/javascript" src="{{asset('dashboard/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/js.js')}}"></script>
</body>

</html>