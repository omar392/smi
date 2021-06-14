@extends('dashboard.layouts.master')
@section('pageTitle', 'من نحن')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('aboutus.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">من نحن</label>
                    <textarea name="who_ar" id="editor1">{!! $edit_data->who_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Who's ..</label>
                    <textarea name="who_en" id="editor">{!! $edit_data->who_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الرؤية</label>
                    <textarea name="vission_ar" id="editor2">{!! $edit_data->vission_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor2' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Vission</label>
                    <textarea name="vission_en" id="editor3">{!! $edit_data->vission_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor3' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الرسالة</label>
                    <textarea name="mission_ar" id="editor4">{!! $edit_data->mission_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor4' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Mission</label>
                    <textarea name="mission_en" id="editor5">{!! $edit_data->mission_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor5' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاهداف</label>
                    <textarea name="goals_ar" id="editor6">{!! $edit_data->goals_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor6' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Goals</label>
                    <textarea name="goals_en" id="editor7">{!! $edit_data->goals_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor7' );
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