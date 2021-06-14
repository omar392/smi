@extends('dashboard.layouts.master')
@section('pageTitle', 'من نحن')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href=""> من نحن </a></li>
                <li class="bring_right"><a href="">عرض القائمة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل القائمة</h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة جديدة</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('aboutus.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black font-w500">من نحن</label>
                                    <textarea name="who_ar" id="editor1"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Who's</label>
                                    <textarea name="who_en" id="editor"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الرؤية</label>
                                    <textarea name="vission_ar" id="editor2"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor2' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Vission</label>
                                    <textarea name="vission_en" id="editor3"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor3' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الرسالة</label>
                                    <textarea name="mission_ar" id="editor4"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor4' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Mission</label>
                                    <textarea name="mission_en" id="editor5"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor5' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الاهداف</label>
                                    <textarea name="goals_ar" id="editor6"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor6' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Goals</label>
                                    <textarea name="goals_en" id="editor7"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor7' );
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
                        <td>من نحن</td>
                        <td>Who's En</td>
                        <td>الرؤية</td>
                        <td>Vission</td>
                        <td>الرسالة</td>
                        <td>Mission</td>
                        <td>الاهداف</td>
                        <td>Goals</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$aboutus)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{!! $aboutus->who_ar !!}</td>
                        <td>{!! $aboutus->who_en !!}</td>
                        <td>{!! $aboutus->vission_ar !!}</td>
                        <td>{!! $aboutus->vission_en !!}</td>
                        <td>{!! $aboutus->mission_ar !!}</td>
                        <td>{!! $aboutus->mission_en !!}</td>
                        <td>{!! $aboutus->goals_ar !!}</td>
                        <td>{!! $aboutus->goals_en !!}</td>
                        <td>
                            <a href="{{route('aboutus.edit',$aboutus->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('aboutus.delete',$aboutus->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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