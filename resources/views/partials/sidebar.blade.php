<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="active"><a class="nav-link" href="#"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
    <li><a href="#"><i class="fa fa-book"></i> <span>Packages</span></a></li>
    <li class="menu-header">Users</li>
    <li><a class="nav-link" href=""><i class="fa fa-users"></i> <span>Users</span></a></li>
  </ul>
</aside>
