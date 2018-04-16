<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller

{
    public function index()
    {
        return view('search');
    }
    public function search()
    {
        $tags = Tag::all();
        return response()->json(['tags' => $tags], 200);
    }
}
