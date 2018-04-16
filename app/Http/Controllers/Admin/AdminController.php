<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminController extends Controller
{
    public function admin_panel(){

        return view('admin.index', [
            'categories' => Category::count(),
            'news' => News::count(),
            'users' => User::count(),
            'tags' => Tag::count()
        ]);
    }
}
