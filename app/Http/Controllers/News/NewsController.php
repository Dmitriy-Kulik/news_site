<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\News;

class NewsController extends Controller
{

//    public function index(){
//        $news = DB::table('news')->get();
//        return view('welcome', ['news' => $news]);
////        return News::create([
////            'id',
////            'id_created_user',
////            'url_img_news',
////            'news_title',
////            'news_content',
////            'is_visible'
////        ]);
//    }



    public function show($id){
        //return view('welcome', ['news' => News::findOrFail($id)]);
    }

    public function create(Request $req){
        $id_created_user = '1';
        $url_img_news = 'http://m.inosmi.info/upload/editor/image/1_731.jpg';
        $title = $req->input('news_title');
        $is_visible = '1';
        $content = $req->input('news_content');
        $data = array('id_created_user' => $id_created_user, 'url_img_news' => $url_img_news, 'news_title' => $title, 'news_content' => $content, 'is_visible' => $is_visible);
        DB::table('news')->insert($data);

        return view('home');
    }

    public function update($id){
        //return view('welcome', ['news' => News::findOrFail($id)]);
    }

    public function delete($id){
        //return view('welcome', ['news' => News::findOrFail($id)]);
    }
}
