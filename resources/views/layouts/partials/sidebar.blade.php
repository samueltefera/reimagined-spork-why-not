<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('images/poslg.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        <script>
            console.log('Value of app.name:', '{{ config('app.name') }}');
        </script>
        
    </a>
	<!-- Log on to codeastro.com for more projects -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->getAvatar() }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->getFullname() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('home')
                <li class="nav-item has-treeview">
                    <a href="{{route('home')}}" class="nav-link {{ activeSegment('') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endcan
                @can('products.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products', 2) }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Products</p>
                    </a>
                </li>
                @endcan
                @can('customers.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers', 2) }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                @endcan
                @can('cart.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart', 2) }}">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Sale System</p>
                    </a>
                </li>
                @endcan
                @can('sales.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders', 2) }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Orders</p>
                    </a>
                </li>
                @endcan
                @can('settings.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings', 2) }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
                @endcan
                @can('roles.index')
                <li class="nav-item has-treeview">
                    <a href="{{ route('roles.index') }}" class="nav-link {{ activeSegment('roles', 1) }}">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Role Management</p>
                    </a>
                </li>
                @endcan
                @can('messages')
                <li class="nav-item">
                    <a href="{{route('messages')}}" class="nav-link {{ activeSegment('messages', 1) }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messages <span class="badge badge-danger unread-badge">{{ $unreadNotifications->count() }}</span></p>
                    </a>
                </li>
                @endcan
                
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div><!-- Log on to codeastro.com for more projects -->
    <!-- /.sidebar -->
</aside>
