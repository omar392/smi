<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function view(){
        $data['all_data'] = Question::all();

        return view('dashboard.questions.view-questions',$data);
    }
    public function store(Request $request){
        $data = new Question ();
        $data->question_ar = $request->question_ar;
        $data->question_en = $request->question_en;
        $data->answer_ar = $request->answer_ar;
        $data->answer_en = $request->answer_en;
        $data->save();
        return redirect()->route('questions.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Question::find($id);
        return view('dashboard.questions.edit-questions',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Question::find($id);
        $data->question_ar = $request->question_ar;
        $data->question_en = $request->question_en;
        $data->answer_ar = $request->answer_ar;
        $data->answer_en = $request->answer_en;
        $data->save();
        return redirect()->route('questions.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Question::find($id);
        $data->delete();
        return redirect()->route('questions.view')->with('error','تم الحذف بنجاح ');
    }
}
