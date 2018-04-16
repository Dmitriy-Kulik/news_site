<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['id_created_user', 'category_text',
                           'is_guest_news', 'is_only_moderated'];

    public function news()
    {
        return $this->belongsToMany('App\Models\News', 'news_category');
//        return $this->belongsToMany('App\Models\News', 'news_category' , 'id_news', 'id_category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_created_user');
    }
}
