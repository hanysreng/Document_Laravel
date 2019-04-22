

@extends('layout.app')
@section('content')
  <div class="container mt-4">
     <div class="row">
         <div class="col-2"></div>
         <div class="col-8">
             <div class="card">
                 <div class="card-header text-center">Data Entry Officer</div>
                 <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Candidate Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Student</td>
                                <td>student@gmail.com</td>
                                <td>
                                    <i class="material-icons">check</i>
                                    <i class="material-icons">clear</i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hany</td>
                                <td>hany@gmail.com</td>
                                <td>
                                    <i class="material-icons">check</i>
                                    <i class="material-icons">clear</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                 </div>
             </div>
         </div>
         <div class="col-2"></div>
     </div>
  </div>
  
@endsection