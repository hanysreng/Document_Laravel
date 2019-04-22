<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    // 
  protected $fillable = ['user_id','phone','address'];
/** 
    * one to one relationship between user profile belogns to a user
*/
    public function user(){
        return $this->belognsTo(User::class);
    }
 
}
