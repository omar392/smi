@extends('dashboard.layouts.master')
@section('pageTitle', 'السياسات و الضوابط')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل السياسات و الضوابط</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('politics.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم بالعربية</label>
                    <input type="text" name="title_ar" class="form-control" id="input0" value="{{$edit_data->title_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Name En </label>
                    <input type="text"  name="title_en" class="form-control" id="input0"value="{{$edit_data->title_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> الوصف بالعربية</label>
                    <textarea name="politics_ar" id="editor1">{!! $edit_data->politics_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Description En ..</label>
                    <textarea name="politics_en" id="editor">{!! $edit_data->politics_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-success">تعديل</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection