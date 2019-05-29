<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [

    "type"
  ];

  function posts(){

    return $this->belongsToMany(Post::class);
  }
}
