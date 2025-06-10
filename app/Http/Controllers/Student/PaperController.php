<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    //

    public function list(){
        $papers = Paper::all();
        return view('student.paper.list',compact('papers'));
    }

    public function exam($id){
        $paper = Paper::with('questions')->find($id);
        return $paper;
    }
}
