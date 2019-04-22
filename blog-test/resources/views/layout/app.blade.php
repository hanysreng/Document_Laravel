

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
       {{-- {{style}} --}}
     

        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
   

    
</head>
<body>
    
    <div>
        @include('inc.navbar')
        
    </div>

    @yield('content')
    
    
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
</body>
</html>