<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1> List Buah </h1>
    <h2>Total Buah:{{$total}}</h2>
    <ul>
        @foreach($buah as $b)
            <li>
                {{$b}}
            </li>
        @endforeach
    </ul>
</html>