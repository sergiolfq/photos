<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        "title", "description","img","date","featured", "user_id"
    ];
}
