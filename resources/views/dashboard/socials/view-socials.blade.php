@extends('dashboard.layouts.master')
@section('pageTitle', 'مواقع التواصل الاجتماعى')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href=""> مواقع التواصل الاجتماعى </a></li>
                <li class="bring_right"><a href="">عرض المواقع</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل المواقع</h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة مواقع التواصل</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة مواقع</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('socials.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black font-w500"> فيس بوك </label>
                                    <input type="text" class="form-control" name="facebook" placeholder="فيس بوك " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">تويتر </label>
                                    <input type="text" class="form-control" name="twitter" placeholder="تويتر" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">انستجرام </label>
                                    <input type="text" class="form-control" name="instagram" placeholder="انستجرام" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">لينكد ان </label>
                                    <input type="text" class="form-control" name="linkedin" placeholder="لينكد ان " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500"> يوتيوب </label>
                                    <input type="text" class="form-control" name="youtube" placeholder=" يوتيوب " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500"> رقم الهاتف </label>
                                    <input type="text" class="form-control" name="phone" placeholder=" رقم الهاتف " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500"> البريد الالكترونى  </label>
                                    <input type="email" class="form-control" name="email" placeholder="البريد الالكترونى " required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">إضافة</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end add form  --}}
            <div class="wrap">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <tr>
                        <td>#</td>
                        <td>الفيس بوك</td>
                        <td>تويتر</td>
                        <td>الانستجرام</td>
                        <td>اللينكد ان</td>
                        <td>اليوتيوب</td>
                        <td>رقم الهاتف</td>
                        <td>البريد الالكترونى</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$socials)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$socials->facebook}}</td>
                        <td>{{$socials->twitter}}</td>
                        <td>{{$socials->instagram}}</td>
                        <td>{{$socials->linkedin}}</td>
                        <td>{{$socials->youtube}}</td>
                        <td>{{$socials->phone}}</td>
                        <td>{{$socials->email}}</td>
                        <td>
                            <a href="{{route('socials.edit',$socials->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('socials.delete',$socials->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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