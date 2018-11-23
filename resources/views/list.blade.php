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
        <a href="{{ URL::to('/generate-pdf') }}">Export PDF</a>

    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Class Name</th>
        <th>Teacher</th>
        <th>Student</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($lists as $lists)
      
      <tr>
        <td>{{$lists->class_name}}</td>
        <td>{{$lists->teacher}}</td>
        <td>{{$lists->student}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
@endsection
