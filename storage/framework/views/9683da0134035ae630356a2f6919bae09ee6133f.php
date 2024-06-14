
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <tr>
        <thead>
            <th>
                id 
            </th>
            <th>
                email 
            </th>
            <th>
                password 
            </th>
        </thead>
       
    </tr>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td>
                <?php echo e($item->id); ?>

            </td>
            <td>
                <?php echo e($item->email); ?>

            </td>
            <td>
                <?php echo e($item->password); ?>

            </td>
            <td>
                
                <form method="POST" action="<?php echo e(route('student.destroy', $item->slug)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('Delete'); ?>
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
                
            </td>
            <td>
                <a href="<?php echo e(route('student.edit' ,$item->slug)); ?>" class="btn btn-danger">Edit</a>
                
                
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>data is empty</h1>
    <?php endif; ?>
    </tbody>
    
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-crude\Libarary_management\resources\views/user/index.blade.php ENDPATH**/ ?>