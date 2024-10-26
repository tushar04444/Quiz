<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Category;
use Carbon\carbon;
use Auth;
use Image;

class BackendController extends Controller
{
    function index(){
        $user = User::all();
        return view('backend.user',[
            'user'=>$user,
        ]);
    }
    
    
    function user_del($id){
        User::find($id)->delete();
        return back();
    }
    function ques(){
        $ques = Question::all();
        $category = Category::all();
        $user = User::all();
        return view('backend.question',[
            'ques'=>$ques,
            'category'=>$category,
        ]);
    }
    function ques_store(Request $request){
       $ques_id = Question::insertGetId([
        'ques_ban'=>$request->ques_ban,
        'ques'=>$request->ques,
        'category_id'=>$request->category_id,
        'opt_a'=>$request->opt_a,
        'opt_b'=>$request->opt_b,
        'opt_c'=>$request->opt_c,
        'opt_d'=>$request->opt_d,
        'answer'=>$request->answer,
        'added_by'=>Auth::id(),
        'created_at'=>Carbon::now(),
       ]);
       $ques_ban = $request->ques_ban;
       $extension = $ques_ban->getClientOriginalExtension();
       $ban_name = $ques_id.'.'.$extension;
       Image::make($ques_ban)->save(public_path('/upload/question/'.$ban_name));

       Question::find($ques_id)->update([
        'ques_ban'=>$ban_name,
       ]);
       return back();
    }

    function ques_delete($id){
        Question::find($id)->delete();
        return back();
    }


    //category
    function category(){
        $category = Category::all();
        return view('backend.category',[
            'category'=>$category,
        ]);
    }
    //category
    function category_store(Request $request){
        Category::insert([
            'category_name'=>$request->category_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('category_added', 'Category Added Successfully');
    }
}
