<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    
        @auth
        @if (Auth::user()->role == "visitor")
        <h1>{{Auth::user()->role}} IS LOGED IN</h1>
        @endif
        @if (Auth::user()->role == "admin")
            <h1>ADMIN IS LOGED IN</h1>
        @else
        {{-- <h1>USER IS LOGED IN</h1> --}}
        @endif
        
        @endauth
       
        
    <h1>
        {{$product_id}}
    </h1>
</body>
</html>