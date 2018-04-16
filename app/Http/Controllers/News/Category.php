<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Category extends Controller
{
    public function index(){
        $category = DB::table('category')->get();
        return view('welcome', ['category' => $category]);
    }

    public function show($id){
        //return view('welcome', ['news' => News::findOrFail($id)]);
        //id_created_user 	category_text 	is_guest_news 	is_only_moderated 	created_at 	updated_at 	deleted_at
    }

    public function create(Request $req){
        $id_created_user = '1';
        $category_text = '';
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
