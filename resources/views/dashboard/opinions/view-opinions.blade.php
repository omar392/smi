@extends('dashboard.layouts.master')
@section('pageTitle', 'قالو عنا')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">قالو عنا </a></li>
                <li class="bring_right"><a href="">قالو عنا</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الكل </h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة  جديد</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة  جديد</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('opinions.store')}}" enctype="multipart/form-data">
                                @csrf
                                <label class="input-preview" for="img">أضف صورة
                                    <input class="input-preview__src" id="img" name="image" type="file"/>
                                  </label>
                                <div class="form-group">
                                    <label class="text-black font-w500">الاسم بالعربية </label>
                                    <input type="text" class="form-control" name="name_ar" placeholder="أدخل الاسم بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">name En </label>
                                    <input type="text" class="form-control" name="name_en" placeholder="Enter Name En" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الوظيفة بالعربية </label>
                                    <input type="text" class="form-control" name="job_ar" placeholder="أدخل الوظيفة بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Job En </label>
                                    <input type="text" class="form-control" name="job_en" placeholder="Enter Job En" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الوصف بالعربية</label>
                                    <textarea name="description_ar" id="editor1" name="description_ar"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Description En ..</label>
                                    <textarea name="description_en" id="editor" name="description_en"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor' );
                                    </script>
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
                        <td>الصورة</td>
                        <td>الاسم بالعربية</td>
                        <td>Name En</td>
                        <td>الوظيفة بالعربية</td>
                        <td>Job En</td>
                        <td>الوصف بالعربية</td>
                        <td>Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$opinions)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($opinions->image))?url('upload/image/'.$opinions->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$opinions->name_ar}}</td>
                        <td>{{$opinions->name_en}}</td>
                        <td>{{$opinions->job_ar}}</td>
                        <td>{{$opinions->job_en}}</td>
                        <td>{!! $opinions->description_ar !!}</td>
                        <td>{!! $opinions->description_en !!}</td>
                        <td>
                            <a href="{{route('opinions.edit',$opinions->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('opinions.delete',$opinions->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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