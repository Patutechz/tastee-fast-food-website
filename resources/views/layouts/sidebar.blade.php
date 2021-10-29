<aside class="main-sidebar sidebar-light-orange tt-bg-color elevation-3">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('avatar.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle">
        <span class="brand-text tt-font tt-text-white">Tastee</span>
    </a>
    <a href="index3.html" class="brand-link d-none justify-content-start align-items-center">
    <i class="brand-image img-circle fas fa-utensils"
         style="opacity: .8"></i>
    <span class="brand-text font-weight-light">Tastee</span>
  </a>

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-none">
        <div class="image">
          <img src="{{ asset('avatar.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Patrick Uche</a>
        </div>
      </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
