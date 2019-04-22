

@extends('layout.app')
@section('content')

<div class="container mt-4">
  <h1>This is customer list pages</h1>
        <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            
                @foreach ($data as $item)
                 <tr>
                       @foreach ($item as $result)
                         <td>{{$result}}</td>
                       @endforeach
                 </tr>
                 @endforeach
            </table>
</div>

@endsection