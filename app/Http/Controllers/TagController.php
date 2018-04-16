<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Advert;
use App\Models\News;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($id){
        $news = Tag::with('news')->where('id', $id)->get();
        $adverts = Advert::paginate(8);

        return view('news_from_tags', [
            'tag' => $news[0],
            'adverts' => $adverts
        ]);
    }
}
