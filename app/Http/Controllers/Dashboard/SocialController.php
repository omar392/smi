<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function view(){
        $data['all_data'] = Social::all();

        return view('dashboard.socials.view-socials',$data);
    }
    public function store(Request $request){
        $data = new Social ();
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->youtube = $request->youtube;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('socials.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Social::find($id);
        return view('dashboard.socials.edit-socials',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Social::find($id);
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->youtube = $request->youtube;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('socials.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Social::find($id);
        $data->delete();
        return redirect()->route('socials.view')->with('error','تم الحذف بنجاح ');
    }
}
