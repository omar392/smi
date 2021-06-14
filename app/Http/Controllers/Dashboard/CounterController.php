<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function view(){
        $data['all_data'] = Counter::all();

        return view('dashboard.counters.view-counters',$data);
    }
    public function store(Request $request){
        $data = new Counter ();
        $data->succeed = $request->succeed;
        $data->branches = $request->branches;
        $data->team = $request->team;
        $data->customers = $request->customers;
        $data->save();
        return redirect()->route('counters.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Counter::find($id);
        return view('dashboard.counters.edit-counters',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Counter::find($id);
        $data->succeed = $request->succeed;
        $data->branches = $request->branches;
        $data->team = $request->team;
        $data->customers = $request->customers;
        $data->save();
        return redirect()->route('counters.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Counter::find($id);
        $data->delete();
        return redirect()->route('counters.view')->with('error','تم الحذف بنجاح ');
    }
}
