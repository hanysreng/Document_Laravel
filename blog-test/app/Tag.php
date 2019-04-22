<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //many to many relationship between 
   public function posts(){
       return $this->belongsToMany(Post::class);
   }
}
