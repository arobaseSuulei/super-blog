<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='super_blog';
    public $timestamps=false;
    protected $fillable=['title','content','cover','image'];
    //
}
