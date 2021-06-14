@extends('dashboard.layouts.master')
@section('content')
        <div class="main_content_container" style="background-color: #212121">
            <div class="main_container  main_menu_open">
              <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <div class="page_content">
                        <div class="quick_links text-center">
                            <h1 class="heading_title" style="color: #fff">الوصول السريع</h1>
                            <a href="{{route('fronts.index')}}" style="background-color: #c0392b">
                                <h4>استعراض الموقع</h4>
                            </a>
                            <a href="{{route('sliders.view')}}" style="background-color: #2980b9">
                                <h4>الشرائح (البنرات)</h4>
                            </a>
                            <a href="{{route('services.view')}}" style="background-color: #8e44ad">
                                <h4>الخدمات</h4>
                            </a>
                            <a href="{{route('questions.view')}}" style="background-color: #d35400">
                                <h4>الأسئلة الشائعة</h4>
                            </a>
                            <a href="{{route('socials.view')}}" style="background-color: #4109db">
                                <h4>مواقع التواصل</h4>
                            </a>
                            <a href="{{route('aboutus.view')}}" style="background-color: #2c3e50">
                                <h4>الرؤية و الرسالة</h4>
                            </a>
                            <a href="{{route('counters.view')}}" style="background-color: #d89e21">
                                <h4>عداد الموقع</h4>
                            </a>
                            <a href="{{route('customers.view')}}" style="background-color: #8b0e0e">
                                <h4>سجل العملاء</h4>
                            </a>
                            <a href="{{route('team.view')}}" style="background-color: #24228a">
                                <h4>فريق العمل</h4>
                            </a>
                            <a href="{{route('news.view')}}" style="background-color: #0130147c">
                                <h4>المدونة و الأخبار</h4>
                            </a>
                            <a href="{{route('opinions.view')}}" style="background-color: #e679207c">
                                <h4>أراء العملاء</h4>
                            </a>
                            <a href="{{route('politics.view')}}" style="background-color: #8f17177c">
                                <h4>السياسات و الضوابط</h4>
                            </a>
                            <a href="{{route('inbox.view')}}" style="background-color: #bd2c6fc4">
                                <h4>الرسائل الواردة</h4>
                            </a>
                        </div>
                        <div class="home_statics text-center">
                            <h1 class="heading_title" style="color: #fff">لوجو الشركة</h1>

                            <div style="width: 700px;">
                                {{-- <h3>إس إم أى <br> خدمات توصيل الطرود والبضائع <br> خدمات العمليات للمتاجر الإلكترونية|صناع الحلول</h3> --}}
                                <img src="{{asset('admin/assets/images/logo.png')}}" style="width: 200px;" >
                                <br>
                                <br>
                                <p>Copyright @2021 <a href="https://www.facebook.com/profile.php?id=100002626340909">omar asharf</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 