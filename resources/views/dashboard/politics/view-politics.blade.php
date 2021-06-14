@extends('dashboard.layouts.master')
@section('pageTitle', 'السياسات و الضوابط')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">السياسات و الضوابط</a></li>
                <li class="bring_right"><a href="">عرض السياسات و الضوابط</a></li>
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
                            <h5 class="modal-title">إضافة جديد</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('politics.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black font-w500">الاسم بالعربية </label>
                                    <input type="text" class="form-control" name="title_ar" placeholder="أدخل الاسم بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">name En </label>
                                    <input type="text" class="form-control" name="title_en" placeholder="Enter Name En" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الوصف بالعربية</label>
                                    <textarea name="politics_ar" id="editor1" name="politics_ar"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Description En ..</label>
                                    <textarea name="politics_en" id="editor" name="politics_en"></textarea>
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
                        <td>الاسم بالعربية</td>
                        <td>Name En</td>
                        <td>الوصف بالعربية</td>
                        <td>Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$politics)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$politics->title_ar}}</td>
                        <td>{{$politics->title_en}}</td>
                        <td>{!! $politics->politics_ar !!}</td>
                        <td>{!! $politics->politics_en !!}</td>
                        <td>
                            <a href="{{route('politics.edit',$politics->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('politics.delete',$politics->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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