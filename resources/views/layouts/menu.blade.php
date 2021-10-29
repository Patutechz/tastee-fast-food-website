<!-- need to remove -->
<li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt tt-text-white"></i>
            <p class="tt-text-white">
              Dashboard
            </p>
          </a>
        </li>
        
        <li class="nav-header" style="display: none;">Features</li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link dashboard-card-text">
            <i class="nav-icon fas fa-utensils tt-text-white"></i>
            <p class="tt-text-white">
              Food Menu
              <i class="right fas fa-angle-left tt-text-white"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.products.index')}}" class="nav-link submenu">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">View Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.products.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">New Product</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users tt-text-white"></i>
            <p class="tt-text-white">
              Customers
              <i class="right fas fa-angle-left tt-text-white"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.customers.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">View Customers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.customers.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">New Customer</p>
              </a>
            </li>
          </ul>
        </li>
    
    
    <li class="nav-item">
          <a href="{{ route('admin.orders.index')}}" class="nav-link">
            <i class="nav-icon fas fa-edit tt-text-white"></i>
            <p class="tt-text-white">
              Orders
            </p>
          </a>
        </li>
    
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog tt-text-white"></i>
            <p class="tt-text-white">
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.employees.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">View Employees</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.employees.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon tt-text-white"></i>
                <p class="tt-text-white">New Employee</p>
              </a>
            </li>
           
          </ul>
        </li>
    
    <li class="nav-item">
          <a href="{{ route('admin.users.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user-cog tt-text-white"></i>
            <p class="tt-text-white">
              Users
            </p>
          </a>
        </li>

