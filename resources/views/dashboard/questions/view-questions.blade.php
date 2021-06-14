@extends('dashboard.layouts.master')
@section('pageTitle', 'الأسئلة')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href=""> الأسئلة </a></li>
                <li class="bring_right"><a href="">عرض الأسئلة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل الأسئلة</h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة سؤال جديد</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة أسئلة جديدة</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('questions.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black font-w500">السؤال بالعربية </label>
                                    <input type="text" class="form-control" name="question_ar" placeholder="أدخل السؤال بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Question En </label>
                                    <input type="text" class="form-control" name="question_en" placeholder="Enter Question En" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الاجابة بالعربية</label>
                                    <textarea name="answer_ar" id="editor1"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Answer En ..</label>
                                    <textarea name="answer_en" id="editor"></textarea>
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
                        <td>السؤال بالعربية</td>
                        <td>Question En</td>
                        <td>الاجابة بالعربية</td>
                        <td>Answer En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$questions)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$questions->question_ar}}</td>
                        <td>{{$questions->question_en}}</td>
                        <td>{!! $questions->answer_ar !!}</td>
                        <td>{!! $questions->answer_en !!}</td>
                        <td>
                            <a href="{{route('questions.edit',$questions->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('questions.delete',$questions->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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