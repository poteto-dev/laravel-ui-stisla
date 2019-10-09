<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ request()->is('back-office/dashboard') ? ' active' : '' }}"><a class="nav-link" href="{{ route('back-office.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
    @if(auth()->user()->can('package.manage'))
      <li class="{{ request()->is('back-office/package*') ? 'active' : '' }}"><a href="{{ route('back-office.package') }}"><i class="fa fa-book"></i> <span>Packages</span></a></li>
    @endif
    @if(auth()->user()->can('user.manage'))
      <li class="menu-header">Users</li>
      <li class="{{ false == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href=""><i class="fa fa-users"></i> <span>Users</span></a></li>
    @endif
  </ul>
</aside>
