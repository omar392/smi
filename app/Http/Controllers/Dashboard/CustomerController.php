<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function view(){
        $data['all_data'] = Customer::all();

        return view('dashboard.customers.view-customers',$data);
    }
    public function store(Request $request){
        $data = new Customer ();
        // $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->save();
        return redirect()->route('customers.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Customer::find($id);
        return view('dashboard.customers.edit-customers',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Customer::find($id);
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

     
        $data->save();
        return redirect()->route('customers.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect()->route('customers.view')->with('error','تم الحذف بنجاح ');
    }
}
