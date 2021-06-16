@extends('dashboard.layouts.master')
@section('pageTitle', 'الحسابات المشتركة فى الموقع')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الحسابات المشتركة فى الموقع</a></li>
                <li class="bring_right"><a href="">عرض الحسابات المشتركة فى الموقع</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الحسابات المشتركة فى الموقع</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td style="width: 40%">الايميل</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$subscripes)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$subscripes->email}}</td>
                        <td>
                            <a href="{{route('subscripes.delete',$subscripes->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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