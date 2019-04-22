
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
        <nav class="nav-wrapper red">
                <div class="container">
                    <a href="#" class="brand-logo">Laravel</a>
                    
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/service')}}">Service</a></li>
                        <li><a href="{{url('/customer')}}">customer</a></li>
                    </ul>
                </div>
    </nav>
</body>
</html>
