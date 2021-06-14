@extends('dashboard.layouts.master')
@section('pageTitle', 'العملاء')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">العملاء</a></li>
                <li class="bring_right"><a href="">عرض العملاء </a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل العملاء </h1>
            @include('dashboard.layouts.flash-message')
            <button type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"  data-toggle="modal" data-target="#addProjectSidebar" >إضافة عميل جديد</button>
            {{-- add form --}}
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">إضافة عميل جديد</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('customers.store')}}" enctype="multipart/form-data">
                                @csrf
                                <label class="input-preview" for="img">أضف صورة
                                    <input class="input-preview__src" id="img" name="image" type="file"/>
                                  </label>
                                <div class="form-group">
                                    <label class="text-black font-w500">اسم العميل بالعربية</label>
                                    <input type="text" class="form-control" name="name_ar" placeholder="أدخل الاسم بالعربية " required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Customer Name En </label>
                                    <input type="text" class="form-control" name="name_en" placeholder="Enter Name En" required>
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
                        <td style="width: 25%" >الصورة</td>
                        <td>اسم العميل بالعربية</td>
                        <td>Customer Name En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$customers)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($customers->image))?url('upload/image/'.$customers->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$customers->name_ar}}</td>
                        <td>{{$customers->name_en}}</td>
                        <td>
                            <a href="{{route('customers.edit',$customers->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="تعديل"></a>
                            <a href="{{route('customers.delete',$customers->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف"></a>
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