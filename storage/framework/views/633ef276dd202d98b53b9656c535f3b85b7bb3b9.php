<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('home')); ?>" class="brand-link">
        <img src="<?php echo e(asset('images/poslg.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
        <script>
            console.log('Value of app.name:', '<?php echo e(config('app.name')); ?>');
        </script>
        
    </a>
	<!-- Log on to codeastro.com for more projects -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(auth()->user()->getAvatar()); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->getFullname()); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(activeSegment('')); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('products.index')); ?>" class="nav-link <?php echo e(activeSegment('products', 2)); ?>">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('customers.index')); ?>" class="nav-link <?php echo e(activeSegment('customers', 2)); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('cart.index')); ?>" class="nav-link <?php echo e(activeSegment('cart', 2)); ?>">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Sale System</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('orders.index')); ?>" class="nav-link <?php echo e(activeSegment('orders', 2)); ?>">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('settings.index')); ?>" class="nav-link <?php echo e(activeSegment('settings',2)); ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo e(route('roles.index')); ?>" class="nav-link <?php echo e(activeSegment('roles')); ?>">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Role Management</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('messages')); ?>" class="nav-link <?php echo e(activeSegment('messages')); ?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messages <span class="badge badge-danger unread-badge"><?php echo e($unreadNotifications->count()); ?></span></p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                        <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">
                            <?php echo csrf_field(); ?>
                        </form>
                    </a>
                </li>
                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div><!-- Log on to codeastro.com for more projects -->
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\Users\Natnael\Desktop\POS-Laravel\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>