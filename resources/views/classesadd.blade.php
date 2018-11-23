@extends('layouts.app')

@section('content')

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Add New Classes</h2><br/>
      <form method="post" action="{{url('classes')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <div class="form-group col">
            <label for="Name">Class Name:</label>
            <input type="text" class="form-control" name="classesname">
          </div>
          <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="form-group col">
                <lable>Teachers Name: </lable>
                <select name="teachersname">
                @foreach($teachers as $teachers)
                  <option value="{{$teachers['id']}}">{{$teachers['first_name']}}</option>
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
