@extends('dashboard.layouts.master')
@section('pageTitle', 'الشرائح')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الشرائح المصورة </a></li>
                <li class="bring_right"><a href="">عرض الشرائح المصورة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل الشرائح المصورة </h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة شريحة جديدة</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة شريحة جديدة</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('sliders.store')}}" enctype="multipart/form-data">
                                @csrf
                                <label class="input-preview" for="img">أضف صورة
                                    <input class="input-preview__src" id="img" name="image" type="file"/>
                                  </label>
                                <div class="form-group">
                                    <label class="text-black font-w500">العنوان بالعربية </label>
                                    <input type="text" class="form-control" name="title_ar" placeholder="أدخل العنوان بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Title En </label>
                                    <input type="text" class="form-control" name="title_en" placeholder="Enter Title En" required>
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
                        <td>العنوان بالعربية</td>
                        <td>title En</td>
                        <td>الوصف بالعربية</td>
                        <td>Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$sliders)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($sliders->image))?url('upload/image/'.$sliders->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$sliders->title_ar}}</td>
                        <td>{{$sliders->title_en}}</td>
                        <td>{!! $sliders->description_ar !!}</td>
                        <td>{!! $sliders->description_en !!}</td>
                        <td>
                            <a href="{{route('sliders.edit',$sliders->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('sliders.delete',$sliders->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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