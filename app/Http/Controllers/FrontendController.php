<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class FrontendController extends Controller
{
    function index(){
        $ques = Question::all();
        return view('frontend.index',[
            'ques'=>$ques,
        ]);
    }
}
