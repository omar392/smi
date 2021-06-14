<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function view(){
        $data['all_data'] = Team::all();

        return view('dashboard.team.view-team',$data);
    }
    public function store(Request $request){
        $data = new Team ();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->role_ar = $request->role_ar;
        $data->role_en = $request->role_en;
        $data->save();
        return redirect()->route('team.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Team::find($id);
        return view('dashboard.team.edit-team',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Team::find($id);
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
        $data->role_ar = $request->role_ar;
        $data->role_en = $request->role_en;
        $data->save();
        return redirect()->route('team.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Team::find($id);
        $data->delete();
        return redirect()->route('team.view')->with('error','تم الحذف بنجاح ');
    }
}
