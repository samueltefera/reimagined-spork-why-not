

<?php $__env->startSection('title', 'Messages'); ?>

<?php $__env->startSection('content'); ?>
    

    <div class="bg-light p-4 rounded">
        <h1>Roles</h1>
        <div class="lead">
            <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary btn-sm  ">Add Role</a>
            <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-primary btn-sm " >Manage permissions</a>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary btn-sm " >Manage Users</a>


        </div>
        
        <div class="mt-2">
            <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($role->id); ?></td>
                <td><?php echo e($role->name); ?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="<?php echo e(route('roles.show', $role->id)); ?>">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.edit', $role->id)); ?>">Edit</a>
                </td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <div class="d-flex">
            <?php echo $roles->links(); ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Natnael\Desktop\POS-Laravel\resources\views/roles/index.blade.php ENDPATH**/ ?>