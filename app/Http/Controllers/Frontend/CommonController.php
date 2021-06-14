<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Common;
use App\Models\Social;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function contact(){
        $data['socials'] = Social::first();
        $data['aboutus'] = Aboutus::first();

        return view('frontend.contact.contact',$data);
    }
    public function sava(Request $request){
        $data = new Common();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        
        return redirect()->route('fronts.contact')->with('success','تم الإرسال بنجاح شكرا جزيلا لك سوف يصلك الرد قريبا');
    }
}
