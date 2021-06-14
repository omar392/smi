@extends('dashboard.layouts.master')
@section('pageTitle', 'العملاء')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل العميل</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('customers.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">                
                    <label class="input-preview" for="img">تعديل الصورة</label>
                    <input type="file" name="image"class="input-preview__src" id="img" style="height: unset;" src="{{asset('upload/image/'.$edit_data->image)}}" multiple>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العميل بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" value="{{$edit_data->name_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Customer Name En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0"value="{{$edit_data->name_en}}" required >
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