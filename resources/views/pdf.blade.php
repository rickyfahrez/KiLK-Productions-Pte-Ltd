<!DOCTYPE html>

<html>

<head>

	<title></title>

	<style type="text/css">

		table{

			width: 100%;

			border:1px solid black;

		}

		td, th{

			border:1px solid black;

		}

	</style>

</head>

<body>



<h2>List</h2>

<table>
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
</table>



</body>

</html>