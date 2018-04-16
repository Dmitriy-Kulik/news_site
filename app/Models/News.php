<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['id_created_user', 'news_title', 'url_img_news', 'news_content', 'is_visible'];

    public function category(){
        return $this->belongsToMany('App\Models\Category', 'news_category');
//        return $this->belongsToMany('App\Models\Category', 'news_category', 'id_category', 'id_news');
    }
    public function tag(){
        return $this->belongsToMany('App\Models\Tag', 'news_tag');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_news');
    }
}
