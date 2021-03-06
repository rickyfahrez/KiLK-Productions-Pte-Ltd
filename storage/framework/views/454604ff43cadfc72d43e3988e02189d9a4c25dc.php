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
            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('classes/create')); ?>'" id="btn" style="float:right" type="submit">Add</button>
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
      
      <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $date=date('Y-m-d', $classes['date']);
        ?>
      <tr>
        <td><?php echo e($classes['id']); ?></td>
        <td><?php echo e($classes['class_name']); ?></td>
        
        <td><a href="<?php echo e(action('ClassesController@edit', $classes['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('ClassesController@destroy', $classes['id'])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
  </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>