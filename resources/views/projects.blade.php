<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projects</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layouts.base') 
    @section('content')
 
    <div>
        <h3 class="uppercase">{{ $projects->name }}</h3>
        <p>{{ $projects->email }}</p>
        <h1>{{$projects['content']}}</h1>
    </div>
    @endsection
</body>
</html>