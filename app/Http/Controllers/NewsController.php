<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comment;
use App\Models\Users;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Advert;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index($id){
        $news = News::find($id);
        $tads = News::with('tag')->where('id', $id)->get();
		$adverts = Advert::paginate(8);

        $post = News::where('id', $id)->first();
        if($post) {
            $comments = $post->comments;
            $com = $comments->groupBy('id_comment');

        } else $com = false;

        $mark = DB::table('comments_user')->select('mark')->where('id_comment', 1)->first();

        return view('news', [
            'mark' => $mark->mark,
            'news' => $news,
            'tags' => $tads,
            'post' => $post,
            'com' => $com,
			'adverts' => $adverts
        ]);
    }
}

