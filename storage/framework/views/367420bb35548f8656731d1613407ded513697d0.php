

<?php $__env->startSection('title'); ?>
    Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($todos->name); ?></h5>
            <p class="card-text"><?php echo e($todos->description); ?>.</p>
            <a href="/edit/<?php echo e($todos->id); ?>"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/<?php echo e($todos->id); ?>"><span class="btn btn-danger">Delete</span></a>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todotest\resources\views/details.blade.php ENDPATH**/ ?>