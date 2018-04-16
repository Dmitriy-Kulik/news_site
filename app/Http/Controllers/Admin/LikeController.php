<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class LikeController extends Controller
{
    public function write(Request $request){
        $mark = DB::table('comments_user')->where('id_comment', 1)->select('mark')->get();


        return view('components.mark', [
            'test' => $mark
        ]);

//        if($request->plus == 'plus'){
//
//        }
//        if($request->minus == 'minus'){
//
//        }
    }
}
