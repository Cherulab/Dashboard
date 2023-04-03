<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Users</title>
</head>
<body>
    @extends('layouts.base') 
    @section('content')
    <h1>Users</h1>
    <table class="m-t-mt w-full">
        <thead class="text-justify">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="">
            @foreach($user as $users)
            <tr class="">
                <td>{{$users['id']}}</td>
                <td class="text-emerald-600">{{$users['name']}}</td>
                <td class="text-blue-800">{{$users['email']}}</td>
                <td class="text-red-700">{{$users['salary']}}</td>
                <td>{{$users['description']}}</td>
                <td><a href="{{route('viewuser', $users->id)}}" class="text-lime-600 hover:text-blue-600">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>