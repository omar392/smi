<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Common;
use App\Models\Inbox;
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
}
