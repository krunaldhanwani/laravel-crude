
<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('student.update',$data->slug)); ?>">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" value=<?php echo e($data->email); ?>>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label class="form-label" >Password</label>
      <input type="password" name="password" class="form-control" value="<?php echo e($data->password); ?>">
    </div>
     <input type="submit" value="Update" class="btn btn-primary">
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-crude\Libarary_management\resources\views/user/editform.blade.php ENDPATH**/ ?>