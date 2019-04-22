<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">
</head>
<body>
    <div class="container mt-4">
           <div class="row">
               <div class="col-3"></div>
               <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">Edit PostTags</div>
                    <div class="card-body shadow">
                        <form action="{{route('post.update',$poster->id)}}" method="post">
                            @csrf
                            @method('patch')
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$poster['title']}}">
                             </div>
                             <div class="form-group">
                                   <textarea  id="" cols="150" rows="10" class="form-control" name="body" placeholder="Enter your comment">{{$poster['body']}}</textarea>
                          </div>  
                          
                          {{-- check box --}}
                             <div class="form-check mr-4">
                                 <br>
                                 @foreach ($poster->tags as $item)
                                 <input type="checkbox" value="{{$item['id']}}" class="" name="checkbox[]"  checked ><label for="">{{$item['name']}}</label>
                                 @endforeach
  
                                 @foreach ($tag as $item)
                                 <input type="checkbox" value="{{$item->id}}" class="" name="checkbox[]" ><label for="">{{$item['name']}}</label>
                                 @endforeach
                               </div> 
                                <button class="btn btn-primary btn-block" type="submit">Save</button>
                        </form>
                    </div>
                </div>
               </div>
               <div class="col-3"></div>
           </div>
    </div>
</body>
</html>

