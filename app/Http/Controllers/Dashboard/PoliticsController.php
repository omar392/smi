<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Politic;
use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    public function view(){
        $data['all_data'] = Politic::all();

        return view('dashboard.politics.view-politics',$data);
    }
    public function store(Request $request){
        $data = new Politic ();
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->politics_ar = $request->politics_ar;
        $data->politics_en = $request->politics_en;
        $data->save();
        return redirect()->route('politics.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Politic::find($id);
        return view('dashboard.politics.edit-politics',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Politic::find($id);
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->politics_ar = $request->politics_ar;
        $data->politics_en = $request->politics_en;
        $data->save();
        return redirect()->route('politics.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Politic::find($id);
        $data->delete();
        return redirect()->route('politics.view')->with('error','تم الحذف بنجاح ');
    }
}
