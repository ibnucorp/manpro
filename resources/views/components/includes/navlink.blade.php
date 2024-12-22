<div class="navbar-nav w-100">
    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="{{ route('admin.daftar') }}" class="nav-item nav-link {{ request()->routeIs('admin.daftar') ? 'active' : '' }}"><i class="fa fa-list me-2"></i>Daftar Antrian</a>
</div>