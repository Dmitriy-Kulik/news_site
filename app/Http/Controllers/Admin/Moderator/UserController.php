<?php

namespace App\Http\Controllers\Admin\Moderator;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('admin.moderator.index', [
//            'comments' => Comment::paginate(5)
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        dd($user);

//        $c_all = Category::select('category_text')->get();
//        $t_all = Tag::select('tag_text')->get();
//        //dd($c_all);
//
//        $c = News::with('category') ->where('id', $news->id)->first();
//        $t = News::with('tag') ->where('id', $news->id)->first();
////        dd($c->category->first()->category_text);
//        //dd($t->tag->first()->tag_text);
//
////        dd($category_id);
//        return view('admin.news.edit', [
//            'news' => $news,
//            'c_all' => $c_all,
//            't_all' => $t_all,
//            'category' => $c->category->first()->category_text,
//            'tag' => $t->tag->first()->tag_text,
//        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
