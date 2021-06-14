<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Aboutus;
use App\Models\Counter;
use App\Models\Customer;
use App\Models\Inbox;
use App\Models\News;
use App\Models\Opinion;
use App\Models\Politic;
use App\Models\Question;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Solution;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data['socials'] = Social::first();
        $data['sliders'] = Slider::all();
        $data['customers'] = Customer::all();
        $data['services'] = Service::all();
        $data['opinions'] = Opinion::all();
        $data['counters'] = Counter::first();
        $data['aboutus'] = Aboutus::first();
        
        return view('frontend.layouts.home',$data);
    }

    public function aboutus(){

        $data['socials'] = Social::first();
        $data['counters'] = Counter::first();
        $data['aboutus'] = Aboutus::first();

        return view('frontend.aboutus.aboutus',$data);
    }

    public function services(){

        $data['services'] = Service::all();
        $data['socials'] = Social::first();
        return view('frontend.services.services',$data);
    }

    public function news(){

        $data['socials'] = Social::first();
        $data['news'] = News::all();
        return view('frontend.news.news',$data);
    }

    public function team(){
        $data['socials'] = Social::first();
        $data['team']  = Team::all();
        return view('frontend.team.team',$data);
    }

    public function clients(){
        $data['socials'] = Social::first();
        $data['opinions']  = Opinion::all();
        return view('frontend.clients.clients',$data);
    }

    public function politics(){
        $data['socials'] = Social::first();
        $data['politics']  = Politic::all();
        return view('frontend.politics.politics',$data);
    }

    public function questions(){
        $data['socials'] = Social::first();
        $data['questions']  = Question::all();
        return view('frontend.questions.questions',$data);
    }

    public function contact(){
        $data['socials'] = Social::first();
        return view('frontend.contact.contact',$data);
    }

    public function storecontactus(Request $request){
        $data = new Inbox();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        
        $data->save();
        return redirect()->route('fronts.questions')->with('success','تم الإرسال بنجاح شكرا جزيلا لك سوف يصلك الرد قريبا');
        
    }
}
