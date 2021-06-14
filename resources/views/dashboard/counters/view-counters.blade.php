@extends('dashboard.layouts.master')
@section('pageTitle', 'عداد العمليات')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href=""> عداد العمليات </a></li>
                <li class="bring_right"><a href="">عرض العداد</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض العداد</h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة للعداد</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة للعداد</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('counters.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black font-w500">العمليات الناجحة</label>
                                    <input type="number" class="form-control" name="succeed" placeholder="عدد العمليات الناجحة" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">عدد الفروع</label>
                                    <input type="number" class="form-control" name="branches" placeholder="عدد الفروع" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">العمليات الناجحة</label>
                                    <input type="number" class="form-control" name="team" placeholder="عدد فريق العمل" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">العمليات الناجحة</label>
                                    <input type="number" class="form-control" name="customers" placeholder="عدد  العملاء" required>
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
                        <td style="width: 20%">العمليات الناجحة</td>
                        <td>عدد الفروع</td>
                        <td>عدد فريق العمل</td>
                        <td> عدد العملاء</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$counters)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$counters->succeed}}</td>
                        <td>{{$counters->branches}}</td>
                        <td>{{$counters->team}}</td>
                        <td>{{$counters->customers}}</td>
                        <td>
                            <a href="{{route('counters.edit',$counters->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('counters.delete',$counters->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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