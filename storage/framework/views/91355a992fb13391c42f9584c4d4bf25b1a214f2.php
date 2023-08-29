


<?php $__env->startSection('title', 'Messages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h1 class="mb-4">Messages</h1>

        <div class="messages mt-4">
            <?php $__currentLoopData = $unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-primary">
                    <p><?php echo e($notification->data['data']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Natnael\Desktop\POS-Laravel\resources\views/messages/index.blade.php ENDPATH**/ ?>