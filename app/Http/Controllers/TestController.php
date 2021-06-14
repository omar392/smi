<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return view ('frontend.test');
    }
    public function ptest(Request $request){
        $data = new Income();
        //        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->age = $request->age;
        $data->save();
        return redirect()->route('test');
    }
}
