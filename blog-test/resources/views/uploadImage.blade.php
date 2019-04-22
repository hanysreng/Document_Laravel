

 <link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container mt-4">
  <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
     
            <div class="card">
                <div class="card-header text-center"><h3>Profile</h3></div>
                    <form  method="post" action="upload" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group text-center mt-3">
                       @if (Auth::user()->avatar != "")
                       <img src="{{url('storage/images/'.Auth::user()->avatar)}}" alt="" style="border-radius:60%; width:110px; height:90px;">
                      @else
                         <img src="{{url('storage/images/1.png')}}" alt="">
                         @endif
                      </div> 
                       <div class="form-group text-center">
                           <label for="avata">Upload image</label>
                           <input class="form-control-file" name="fileUpload" type="file">
                           <button class="btn btn-info" type="submit">submit</button>
                       </div> 
                </form>
         </div>
      </div>
      <div class="col-3"></div>
  </div>
</div>
  
