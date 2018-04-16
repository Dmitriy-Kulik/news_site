<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

        $comments = Comment::with('news')->get();

        return view('comments', [
            'comments' => $comments
        ]);
    }

    public function children(){
//        return
    }

    public function addComment(Request $request){

        return $request;

//        return redirect()->back();

    }
}
