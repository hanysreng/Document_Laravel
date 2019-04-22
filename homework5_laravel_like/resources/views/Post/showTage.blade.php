<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"
</head>
<body>
    <div class="container mt-4">
        <a href="{{Route('post.create')}}" class="btn btn-primary mb-4">Add Post</a>
        <div class="row">
                @foreach ($post as $item)
                <div class="col-lg-10 ">
                         <div class="card mt-4">
                             <div class="card-header text-center">{{$item['title']}}</div>
                               <div class="card-body">
                                   <p>{{$item['body']}}</p>
                                   
                                      {{-- <small class="text-left">Like :{{ $item->created_at->diffForHumans()}}</small> --}}
                                      {{-- <a href=""><i class="fas fa-thumbs-up"></i>3</a> --}}
                                </div>
                                <div class="card-footer  ">
                                    <form action="{{route('post.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                         <a href="{{route('post.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                         <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                      
                                      @foreach ( $item->tags()->pluck('name') as $value )
                                      <small class="color text-info float-right btn btn-sm"> {{$value}} </small>
                                      @endforeach
                                  </div>
                              </div>
                         </div>
                         <br>
                @endforeach
            </div>
        </div>
    </div>
        
</body>
</html>


