@extends('dashboard.layouts.master')
@section('pageTitle', 'عداد العمليات')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل العداد</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('counters.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">العمليات الناجحة</label>
                    <input type="number" name="succeed" class="form-control" id="input0" value="{{$edit_data->succeed}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الفروع</label>
                    <input type="number"  name="branches" class="form-control" id="input0"value="{{$edit_data->branches}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">فريق العمل</label>
                    <input type="number"  name="team" class="form-control" id="input0"value="{{$edit_data->team}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">العملاء</label>
                    <input type="number"  name="customers" class="form-control" id="input0"value="{{$edit_data->customers}}" required >
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