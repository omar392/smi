@extends('dashboard.layouts.master')
@section('pageTitle', 'مواقع التواصل الاجتاعى ')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل المواقع</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('socials.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الفيس بوك</label>
                    <input type="text" name="facebook" class="form-control" id="input0" value="{{$edit_data->facebook}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">تويتر </label>
                    <input type="text"  name="twitter" class="form-control" id="input0"value="{{$edit_data->twitter}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">انستجرام </label>
                    <input type="text"  name="instagram" class="form-control" id="input0"value="{{$edit_data->instagram}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">لينكد ان </label>
                    <input type="text"  name="linkedin" class="form-control" id="input0"value="{{$edit_data->linkedin}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">يوتيوب</label>
                    <input type="text"  name="youtube" class="form-control" id="input0"value="{{$edit_data->youtube}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الهاتف</label>
                    <input type="text"  name="phone" class="form-control" id="input0"value="{{$edit_data->phone}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">البريد الالكترونى</label>
                    <input type="email"  name="email" class="form-control" id="input0"value="{{$edit_data->email}}" required >
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