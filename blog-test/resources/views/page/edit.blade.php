


@extends('layout.app')
@section('content')

<div class="container mt-4">
   {{-- @if ($error->any())
   <div></div> --}}

     <div class="row">
        <div class="col-12 mt-4">
         <form action="{{url('update/'.$post->id)}}" method="POST">
            @csrf
             @method('PATCH')
               <div class="form-group">
                  <label >Title</label>
                  <input type="text" name="title"  class="form-control" placeholder="PostTitle" required value="{{$post->title}}">
              </div> 
                <div class="form-group"> 
                      <label>Body</label>
                      <textarea name="body"  cols="100" rows="10" class="form-control">{{$post->body}}</textarea required>
                   </div>
  
                 <button type="submit" class="btn btn-primary" >SAVE</button>
          
          </form>
        </div>
     </div>
</div>
  
@endsection
