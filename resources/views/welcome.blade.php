<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session Flash Message show</title>
</head>
<body>
    <h1>Flash Message Show !</h1>

    <h2>{{$value}}</h2> 

    @if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>

    @endif

</body>
</html>