<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   static function hi(){
       return "Hi my friend";
   }
   static function last(){
       return Post::all()->last();   //implementation oy last nong 
   }
   public function user(){
       return $this->belongsTo(User::class);
   }

   //a post could have many tag
   public function tags(){
       return $this->belongsToMany(Tag::class);
   }
}
