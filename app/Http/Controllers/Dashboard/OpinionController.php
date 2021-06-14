<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function view(){
        $data['all_data'] = Opinion::all();

        return view('dashboard.opinions.view-opinions',$data);
    }
    public function store(Request $request){
        $data = new Opinion ();
        // $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->job_ar = $request->job_ar;
        $data->job_en = $request->job_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;
        $data->save();
        return redirect()->route('opinions.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Opinion::find($id);
        return view('dashboard.opinions.edit-opinions',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Opinion::find($id);
        // $data->updated_by = Auth::user()->id;
           if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/image/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->job_ar = $request->job_ar;
        $data->job_en = $request->job_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;
        $data->save();
        return redirect()->route('opinions.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Opinion::find($id);
        $data->delete();
        return redirect()->route('opinions.view')->with('error','تم الحذف بنجاح ');
    }
}
