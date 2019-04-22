


@extends('layout.app')
@section('content')

<div class="container mt-4">
   {{-- @if ($error->any())
   <div></div> --}}

    <div class="row">
       <div class="col-12 mt-4">
         <form action="{{url('stort')}}" method="POST">
            @csrf
               <div class="form-group">
                  <label >Title</label>
                  <input type="text" name="title"  class="form-control" placeholder="PostTitle" required>
                  
             
              {{-- <label >user Id</label>
              <input type="number" name="title"  class="form-control" placeholder="PostTitle" required> --}}
              
          </div> 
                <div class="form-group"> 
                      <label>Body</label>
                      <textarea name="body"  cols="100" rows="10" class="form-control"></textarea required>
                   </div>
{{-- 
                   @foreach ($PostTage as $item)
                      <input type="checkbox" nname="tag[]"  value="{{$item->id}}" checked><label for="">{{$item->name}}</label>
                   @endforeach
                   @foreach ($tageDiff as $item)
                   <input type="checkbox" nname="tag[]"  value="{{$item->id}}"><label for="">{{$item->name}}</label>
                   @endforeach
                   <br>
                   <br> --}}

                 <button type="submit" class="btn btn-primary" >CREATE</button>
          
          </form>
       </div>
    </div>
</div>
  
@endsection
