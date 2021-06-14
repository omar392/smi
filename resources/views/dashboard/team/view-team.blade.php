@extends('dashboard.layouts.master')
@section('pageTitle', 'أعضاء فريق العمل')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">فريق العمل</a></li>
                <li class="bring_right"><a href="">أعضاء فريق العمل</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض فريق العمل</h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة عضو فريق عمل</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة عميل جديد</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('team.store')}}" enctype="multipart/form-data">
                                @csrf
                                <label class="input-preview" for="img">أضف صورة
                                    <input class="input-preview__src" id="img" name="image" type="file"/>
                                  </label>
                                <div class="form-group">
                                    <label class="text-black font-w500">اسم العضو بالعربية</label>
                                    <input type="text" class="form-control" name="name_ar" placeholder="أدخل الاسم بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500"> Name En </label>
                                    <input type="text" class="form-control" name="name_en" placeholder="Enter Name En" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">اسم الوظيفة بالعربية</label>
                                    <input type="text" class="form-control" name="role_ar" placeholder="أدخل الوظيفة بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Job Name En </label>
                                    <input type="text" class="form-control" name="role_en" placeholder="Enter job En" required>
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
                        <td style="width: 15%" >الصورة</td>
                        <td>اسم العضو بالعربية</td>
                        <td> Name En</td>
                        <td>الوظيفة بالعربية</td>
                        <td> Job En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$team)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($team->image))?url('upload/image/'.$team->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$team->name_ar}}</td>
                        <td>{{$team->name_en}}</td>
                        <td>{{$team->role_ar}}</td>
                        <td>{{$team->role_en}}</td>
                        <td>
                            <a href="{{route('team.edit',$team->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('team.delete',$team->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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