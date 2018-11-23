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
      
      <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <tr>
        <td><?php echo e($lists->class_name); ?></td>
        <td><?php echo e($lists->teacher); ?></td>
        <td><?php echo e($lists->student); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>



</body>

</html>