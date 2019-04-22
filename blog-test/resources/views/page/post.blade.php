

{{-- {{dd($data)}} --}}

@extends('layout.app')

@section('content')
  

<div class="container mt-4">
  {{-- if i use auth::check when someone not login it not show button Add New student --}}
 @if (Auth::check())
 <a href="{{'create'}}"><button class="btn btn-success ml-3">New POSt</button></a>
 @endif
   
    {{-- that you wan to alert message delete --}}
    @if(session('delete'))

    <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
      {{session('delete')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    @endif

      <div class="row">
        <div class="col-12 mt-4">
         <ul class="list-group">
           @foreach ($data as $value)
             <li class="list-group-item">
                   {{-- <small>{{$value->created_at}}</small> --}}
                   
                <small>{{$value->created_at->diffForHumans()}}</small>
                 <h3>{{$value['title']}}</h3>
                 <p>{{$value['body']}}</p>
                 {{-- {{dd($value->user)}} --}}

                 {{-- user take form user that I put relationship belorngTo in Model Post --}}
                 <p>By: {{$value->user->name}}</p>
                 {{-- when you use this @auth so if you not login it not show edit and delete button --}}
         @auth  
         {{-- the cord that you login so you can delet edit and create --}}
         @if (Auth::user()->id==$value->user_id)
         <a href="showEdit/{{$value['id']}}" class="right"><i class="material-icons">edit</i></a>
         <a href="#deleteModel" data-title="{{$value->title}}" data-toggle="modal" data-id="{{$value['id']}}" class="right text-danger"><i class="material-icons">delete</i></a> 
         @endif
         @endauth
                
             </li>
           @endforeach
       </ul>
        </div>
       
      </div>
</div>

@endsection


{{--model delete--}}
<div class="modal" tabindex="-1" role="dialog" id="deleteModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this Post?</p>
        <small id="postTitle"></small>
      </div>
      <form id="fdelete" action="#" method="POST">
        @csrf
        @method('DELETE')
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">YES</button>
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">NO</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script>
  $('#deleteModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) ;
  var id = button.data('id') ;
  var title = button.data('title'); 
  console.log('id'+id);

  var modal = $(this)
  modal.find('#postTitle').text(title)
  var url = "{{url('delete')}}/"+id;
  $('#fdelete').attr('action',url)

  })
</script>