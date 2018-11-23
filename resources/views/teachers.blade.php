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
            <button class="btn btn-primary" onclick="location.href='{{ url('teachers/create') }}'" id="btn" style="float:right" type="submit">Add</button>
        </div>
        

    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($teachers as $teachers)
      @php
        $date=date('Y-m-d', $teachers['date']);
        @endphp
      <tr>
        <td>{{$teachers['id']}}</td>
        <td>{{$teachers['first_name']}} {{$teachers['last_name']}}</td>
        
        <td><a href="{{action('TeachersController@edit', $teachers['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('TeachersController@destroy', $teachers['id'])}}" method="post">
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
