

<?php $__env->startSection('title', 'Messages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h2>Edit permission</h2>
        <div class="lead">
            Editing permission.
        </div>

        <div class="container mt-4">

            <form method="POST" action="<?php echo e(route('permissions.update', $permission->id)); ?>">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?php echo e($permission->name); ?>" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    <?php if($errors->has('name')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Save permission</button>
                <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Natnael\Desktop\POS-Laravel\resources\views/permissions/edit.blade.php ENDPATH**/ ?>