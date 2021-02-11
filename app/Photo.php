<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        "title", "description","img","date","featured", "user_id"
    ];

    protected $hidden = [
        'created_at','updated_at', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
