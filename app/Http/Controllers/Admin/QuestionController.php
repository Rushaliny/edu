<?php

namespace App\Http\Controllers\Admin;

use App\Models\Paper;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    //

    public function list($id){

        $questions  = Question::where('paperID',$id)->get();
        $paper      = Paper::find($id);
        return view('admin.questions.list',compact('questions','paper'));
    }

    public function add($id){

        $paper = Paper::find($id);
        return view('admin.questions.create',compact('paper'));
    }

    public function store(Request $request){

        $request->validate([
            'question_image'=>'mimes:jpg,jpeg,png|required|max:10240',
        ]);

        $question                   =   new Question;
        $question->paperID          =   $request->paperID;
        $question->question_number  =   $request->question_number;
        $question->answer           =   $request->answer;
        if($request->hasFile('question_image')){
            $completeFileName   = $request->file('question_image')->getClientOriginalName();
            $fileNameOnly       = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension          = $request->file('question_image')->getClientOriginalExtension();
            $compPic            = str_replace(' ', '_', $fileNameOnly).'-'. rand() .'_'.time().'.'.$extension;
            $path               = $request->file('question_image')->move('storage/site/question/question_image', $compPic);
            $updateIMG          = url('').'/storage/site/question/question_image/'.$compPic;
            $question->question_image = $updateIMG;
        }

        if($question->save()){
            if($request->button == 'create_new'){
                return redirect()->back()->with('message',"$request->paper_name Question Generated Successfully");
            }else{
                return redirect()->route('admin.question.list', $request->paperID)->with('message',"$request->paper_name Question Generated Successfully.");
            }
        }
    }

    public function edit($id){

        $question = Question::find($id);
        $paper = Paper::find($question->paperID);
        return view('admin.questions.edit',compact('question','paper'));
    }

    public function update(Request $request){

        $question                   =   Question::find($request->id);
        $question->paperID          =   $request->paperID;
        $question->question_number  =   $request->question_number;
        $question->answer           =   $request->answer;
        if($request->hasFile('question_image')){
            $request->validate([
                'question_image'=>'mimes:jpg,jpeg,png|required|max:10240',
            ]);
            $completeFileName   = $request->file('question_image')->getClientOriginalName();
            $fileNameOnly       = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension          = $request->file('question_image')->getClientOriginalExtension();
            $compPic            = str_replace(' ', '_', $fileNameOnly).'-'. rand() .'_'.time().'.'.$extension;
            $path               = $request->file('question_image')->move('storage/site/question/question_image', $compPic);
            $updateIMG          = url('').'/storage/site/question/question_image/'.$compPic;
            $question->question_image = $updateIMG;
        }

        if($question->save()){
            return redirect()->route('admin.question.list', $request->paperID)->with('message',"$request->paper_name Question Generated Successfully.");
        }
    }

    public function delete($id){
        $question = Question::find($id);
        if($question->delete()){
            return redirect()->route('admin.question.list',$question->paperID)->with("message","$question->paper_name has deleted successfully.");
        }
    }
}