<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['created_user_id', 'tag_text'];

    public function news(){
        return $this->belongsToMany('App\Models\News', 'news_tag');
//        , 'news_id', 'tag_id'
    }
}
