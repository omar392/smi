<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Common;
use App\Models\Inbox;
use App\Models\Subscripe;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function view(){

        $data['all_data'] = Common::all();
        return view('dashboard.inbox.view-inbox',$data);
    }
    public function delete($id){

        $data = Common::find($id);
        $data->delete();
        return redirect()->route('inbox.view')->with('error','تم الحذف بنجاح ');
    }
    // subscriptions
    public function views(){

        $data['all_data'] = Subscripe::all();
        return view('dashboard.subscripes.view-subscripes',$data);
    }
    public function deletes($id){

        $data = Subscripe::find($id);
        $data->delete();
        return redirect()->route('subscripes.view')->with('error','تم الحذف بنجاح ');
    }

}
