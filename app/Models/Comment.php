<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function children(){
        return $this->hasMany(self::class, 'id_comment');
    }

//    public function mark(){
//        return $this->hasOne('App\Models\Users');
//    }
}
