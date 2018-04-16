<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Advert;

class CategoryController extends Controller
{
    public function index($id){
        $category = Category::with('news')->where('id', $id)->get();
        $adverts = Advert::paginate(8);

        return view('categories', [
            'category' => $category,
            'news' => $category[0],
            'adverts' => $adverts
        ]);
    }
}
