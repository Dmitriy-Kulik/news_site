<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'password', 'role', 'url_avatar'
    ];

    public function news()
    {
        return $this->hasMany('News', 'id_created_user');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'id_created_user');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'id_user');
    }

//    public function tag()
//    {
//        return $this->hasMany('Category', 'id_created_user');
//    }
}
