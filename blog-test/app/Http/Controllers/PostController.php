<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PostController extends Controller
{
  // middleware is the cord need to login 

  public function __construct(){
    $this->middleware('auth',['except'=>['post']]);
}
  public function post(){
    $data = \App\post::all();

      return view('page.post', compact('data'));

   
  }

  public function create(){
    return view("page.createPost");
}

public function stort(Request $reqeust){
  // message error

  // $reqeust->validate([
  //   'title'=>'required',
  //   'body'=>'required',
  //   ]);

  // return view("page.stort");
  // get data from the form submit via their name arrribute
 $title= $reqeust->title;
 $body=$reqeust->body;
 $id=$reqeust->id;

//  create post object
 $post = new \App\post;
//  assign data to post attributes
 $post->title= $title;
 $post->body=$body;
 $post->id=$id;
 $post->user_id = Auth::user()->id;
//  save or add post object into post table
 $post->save();
//  go to posts route
 return redirect('post');
}

public function showEdit($id){
  $post = \App\post::findOrFail($id);

  // if you not login you cannot edit post so need to use this cord
  
  if(Auth()->user()->id!==$post->user_id){
    return redirect('post')->with('delete','Unauthorized page');
  }
  // $allTage=Tag::all();
  // $postTages = $post->tags;
  // $tagsDiff= $allTage->diff($postTags);

  return view("page.edit",compact('post'));
}

public function update(Request $request, $id){
   $request->validate([
       'title'=>'required',
       'body'=>'required'
   ]);

  $post = \App\post::find($id);
  $post ->title = $request->get('title');
  $post ->body = $request->get('body');

  $post->save();
  return redirect('/post');
}

public function delete($id){
  $post =\App\post::findOrFail($id);
  $post->delete();
  return redirect('/post')->with('delete','Post is deleted');
}

}
