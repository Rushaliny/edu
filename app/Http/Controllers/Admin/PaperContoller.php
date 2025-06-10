<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paper;
use Illuminate\Http\Request;

class PaperContoller extends Controller
{
    //
    public function list(){
        $papers = Paper::with('questions')->latest()->get();

        return view('admin.papers.list_paper',compact('papers'));
    }

    public function create(){
        return view('admin.papers.create_paper');
    }

    public function store(Request $request){
        //316 × 232
        $request->validate([
            'image'=>'mimes:jpg,jpeg,png|required|max:10240',
        ]);

        $new = new Paper;
        $new->paper_name = $request->paper_name;
        $new->year = $request->year;
        $new->subject = $request->subject;
        $new->status    = $request->status;
        if($request->hasFile('image')){
            $completeFileName = $request->file('image')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly).'-'. rand() .'_'.time().'.'.$extension;
            $path = $request->file('image')->move('storage/site/paper/image', $compPic);
            $updateIMG = url('').'/storage/site/paper/image/'.$compPic;
            $new->image = $updateIMG;
        }
        if($new->save()){
            return redirect()->route('admin.paper.list')->with('message',"$request->paper_name Successfully Created.");
        }

    }

    public function edit($id){
        $paper = Paper::find($id);
        return view('admin.papers.edit_paper', compact('paper'));
    }

    public function update(Request $request){


        $new                = Paper::find($request->id);
        $new->paper_name    = $request->paper_name;
        $new->year          = $request->year;
        $new->subject       = $request->subject;
        $new->status        = $request->status;
        if($request->hasFile('image')){
            $request->validate([
                'image'=>'mimes:jpg,jpeg,png|required|max:10240',
            ]);
            $completeFileName   = $request->file('image')->getClientOriginalName();
            $fileNameOnly       = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $compPic            = str_replace(' ', '_', $fileNameOnly).'-'. rand() .'_'.time().'.'.$extension;
            $path               = $request->file('image')->move('storage/site/paper/image', $compPic);
            $updateIMG          = url('').'/storage/site/paper/image/'.$compPic;
            $new->image         = $updateIMG;
        }
        if($new->save()){
            return redirect()->route('admin.paper.list')->with('message',"$request->paper_name Successfully Updated.");
        }
    }

    public function delete($id){
        $paper = Paper::with('questions')->find($id);
        if($paper){
            foreach($paper->questions as $key ){
                    $key->delete();
            }
            if($paper->delete()){
                return redirect()->route("admin.paper.list")->with("message","$paper->paper_name has deleted successfully.");
            }
        }

    }
}