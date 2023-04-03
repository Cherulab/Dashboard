<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layouts.base') 
    @section('content')
    
<div class="grid h-screen place-items-center">

        @foreach ($projects as $project)
      <div class="relative h-80 w-[60%] overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
        
      </div>
      <h3 class="mt-6 text-sm text-gray-500">
        <p>{{ $project->company }}</p>
        <a href="{{route('userproject', $project->id)}}">
        
          
       {{ $project->project_name }}
        </a>
      </h3>
      <p class="text-base font-semibold text-gray-900">{{ $project->content }}</p>
      <a href="{{route('userproject', $project->id)}}" class="text-lime-600 hover:text-blue-600">View</a><br><br><br>
      
      
       @endforeach
   
</div>

@endsection
</body>
</html>