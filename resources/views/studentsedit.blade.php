@extends('layouts.app')

@section('content')

  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit Students</h2><br/>
      <form method="post" action="{{action('StudentsController@update', $id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
          <div class="form-group col">
            <label for="Name">First Name:</label>
            <input type="text" class="form-control" name="firstname" value="{{$students->first_name}}">
          </div>
          <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="form-group col">
              <label for="Email">Last Name:</label>
              <input type="text" class="form-control" name="lastname" value="{{$students->last_name}}">
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="form-group col">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$students->email}}">
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="form-group col">
              <label for="Email">Phone Number:</label>
              <input type="text" class="form-control" name="phone" value="{{$students->phone}}">
            </div>
            <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="form-group col">
                <lable>Classes Name</lable>
                <select name="classesname">
                @foreach($classes as $classes)
                  <option value="{{$classes['id']}}">{{$classes['class_name']}}</option>
                  @endforeach
                </select>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
          <div class="form-group col" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
          <div class="col"></div>
        </div>

      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
  @endsection
