<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function view(){
        $data['all_data'] = Aboutus::all();

        return view('dashboard.aboutus.view-aboutus',$data);
    }
    public function store(Request $request){
        $data = new Aboutus ();
        $data->who_ar = $request->who_ar;
        $data->who_en = $request->who_en;
        $data->vission_ar = $request->vission_ar;
        $data->vission_en = $request->vission_en;
        $data->mission_ar = $request->mission_ar;
        $data->mission_en = $request->mission_en;
        $data->goals_ar = $request->goals_ar;
        $data->goals_en = $request->goals_en;
        $data->save();
        return redirect()->route('aboutus.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Aboutus::find($id);
        return view('dashboard.aboutus.edit-aboutus',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Aboutus::find($id);
        $data->who_ar = $request->who_ar;
        $data->who_en = $request->who_en;
        $data->vission_ar = $request->vission_ar;
        $data->vission_en = $request->vission_en;
        $data->mission_ar = $request->mission_ar;
        $data->mission_en = $request->mission_en;
        $data->goals_ar = $request->goals_ar;
        $data->goals_en = $request->goals_en;
        $data->save();
        return redirect()->route('aboutus.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Aboutus::find($id);
        $data->delete();
        return redirect()->route('aboutus.view')->with('error','تم الحذف بنجاح ');
    }
}
