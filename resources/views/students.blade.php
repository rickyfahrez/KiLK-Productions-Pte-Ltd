@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    

  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <div class="row">

        <div class="col">
            
        </div>

        <div class="col">
            <button class="btn btn-primary" onclick="location.href='{{ url('students/create') }}'" id="btn" style="float:right" type="submit">Add</button>
        </div>

    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($students as $students)
      
      <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->first_name}} {{$students->last_name}}</td>
        <td>{{$students->email}}</td>
        <td>{{$students->phone}}</td>
        
        
        
        
        
        <td></td>
        
        <td><a href="{{action('StudentsController@edit', $students['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('StudentsController@destroy', $students['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
@endsection
