<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function view(){
        $data['all_data'] = News::all();

        return view('dashboard.news.view-news',$data);
    }
    public function store(Request $request){
        $data = new News ();
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
        return redirect()->route('news.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = News::find($id);
        return view('dashboard.news.edit-news',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =News::find($id);
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
        return redirect()->route('news.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = News::find($id);
        $data->delete();
        return redirect()->route('news.view')->with('error','تم الحذف بنجاح ');
    }
}
