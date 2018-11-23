<?php $__env->startSection('content'); ?>

  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Add New Teachers</h2><br/>
      <form method="post" action="<?php echo e(url('teachers')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        
        <div class="row">
          <div class="form-group col">
            <label for="Name">First Name:</label>
            <input type="text" class="form-control" name="firstname">
          </div>
          <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="form-group col">
              <label for="Email">Last Name:</label>
              <input type="text" class="form-control" name="lastname">
            </div>
            <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="form-group col">
              <label for="Number">Phone Number:</label>
              <input type="text" class="form-control" name="number">
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
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>