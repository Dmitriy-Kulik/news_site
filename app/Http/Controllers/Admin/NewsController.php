<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::with('tag')->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_text = Category::all();
        $tag_text = Tag::all();

        return view('admin.news.create', [
            'news' => [],
            'category_text' => $category_text,
            'tag_text' => $tag_text
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = Category::select('*')->where('category_text', $request->request->all()['category_text'])->first()->id;
        $tag_id = Tag::select('*')->where('tag_text', $request->request->all()['tag_text'])->first()->id;

        $news = News::create([
            'id_created_user' => Auth::user()->id,
            'news_title' => $request->request->all()['news_title'],
            'url_img_news' => $request->request->all()['url_img_news'],
            'news_content' => $request->request->all()['news_content'],
            'is_visible' => $request->request->all()['is_visible']
        ]);

        $news->category()->attach($category_id);
        $news->tag()->attach($tag_id);

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $c_all = Category::select('category_text')->get();
        $t_all = Tag::select('tag_text')->get();

        $c = News::with('category') ->where('id', $news->id)->first();
        $t = News::with('tag') ->where('id', $news->id)->first();

        return view('admin.news.edit', [
            'news' => $news,
            'c_all' => $c_all,
            't_all' => $t_all,
            'category' => $c->category->first()->category_text,
            'tag' => $t->tag->first()->tag_text,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $category_id = Category::select('*')->where('category_text', $request->request->all()['category_text'])->first()->id;
        $tag_id = Tag::select('*')->where('tag_text', $request->request->all()['tag_text'])->first()->id;

        $news->update([
            'news_title' => $request->request->all()['news_title'],
            'url_img_news' => $request->request->all()['url_img_news'],
            'news_content' => $request->request->all()['news_content'],
            'is_visible' => $request->request->all()['is_visible'],
        ]);

        $news->category()->sync($category_id);
        $news->tag()->sync($tag_id);

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
