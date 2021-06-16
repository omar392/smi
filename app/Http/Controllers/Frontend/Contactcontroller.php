<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function solution(Request $request){

        $data = new Solution();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('fronts.contact')->with('success',__('message.sendmessage'));
    }
}
