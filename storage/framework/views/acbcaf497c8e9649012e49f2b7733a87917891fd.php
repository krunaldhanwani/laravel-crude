
<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('student.store')); ?>">
    <?php echo csrf_field(); ?> 
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" >
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label class="form-label" >Password</label>
      <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-crude\Libarary_management\resources\views/user/create.blade.php ENDPATH**/ ?>