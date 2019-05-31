<?php
  $routeName = Route::currentRouteName();
?>

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">حسام موسوی</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link @activeRoute('admin.dashboard') active @endactiveRoute">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    داشبورد
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview  @activeRoute('admin.educations.create','admin.educations.index') menu-open @endactiveRoute">
                  <a href="#" class="nav-link @activeRoute('admin.educations.create','admin.educations.index') active @endactiveRoute">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  مدارک
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.educations.index') }}" class="nav-link @activeRoute('admin.educations.index') active @endactiveRoute">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>مشاهده تمام مدارک</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.educations.create') }}" class="nav-link @activeRoute('admin.educations.create') active @endactiveRoute">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ساخت یک مدرک جدید</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>