

<?php $__env->startSection('title'); ?>
    Create Todo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form action="store-data" method="post" class="mt-4 p-4">
    <?php echo csrf_field(); ?>
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todotest\resources\views/create.blade.php ENDPATH**/ ?>