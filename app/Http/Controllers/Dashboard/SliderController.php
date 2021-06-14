<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function view(){
        $data['all_data'] = Slider::all();

        return view('dashboard.sliders.view-sliders',$data);
    }
    public function store(Request $request){
        $data = new Slider ();
        // $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;
        $data->save();
        return redirect()->route('sliders.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Slider::find($id);
        return view('dashboard.sliders.edit-sliders',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Slider::find($id);
        // $data->updated_by = Auth::user()->id;
           if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/image/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;

     
        $data->save();
        return redirect()->route('sliders.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Slider::find($id);
        $data->delete();
        return redirect()->route('sliders.view')->with('error','تم الحذف بنجاح ');
    }
}
