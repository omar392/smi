@extends('dashboard.layouts.master')
@section('pageTitle', 'الرسائل الواردة')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الرسائل والاستفسارات الواردة</a></li>
                <li class="bring_right"><a href="">عرض الرسائل  الواردة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الرسائل الواردة  من العملاء</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الاسم</td>
                        <td>الايميل</td>
                        <td>رقم الهاتف</td>
                        <td>عنوان الرسالة</td>
                        <td>محتوى الرسالة</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$contactus)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$contactus->name}}</td>
                        <td>{{$contactus->email}}</td>
                        <td>{{$contactus->phone}}</td>
                        <td>{{$contactus->subject}}</td>
                        <td>{{$contactus->message}}</td>
                        <td>
                            <a href="{{route('inbox.delete',$contactus->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                               data-placement="top" title="حذف"></a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!--/End Main content container-->
@endsection