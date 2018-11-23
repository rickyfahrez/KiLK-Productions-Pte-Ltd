<?php $__env->startSection('content'); ?>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    

  </head>
  <body>
    <div class="container">
    <br />
    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>
    <div class="row">

        <div class="col">
            
        </div>

        <div class="col">
            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('students/create')); ?>'" id="btn" style="float:right" type="submit">Add</button>
        </div>
        <a href="<?php echo e(URL::to('/generate-pdf')); ?>">Export PDF</a>

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
      
      <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <tr>
        <td><?php echo e($lists->class_name); ?></td>
        <td><?php echo e($lists->teacher); ?></td>
        <td><?php echo e($lists->student); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
  </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>