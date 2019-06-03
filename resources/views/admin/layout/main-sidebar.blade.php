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
          <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"
            class="img-circle elevation-2" alt="User Image">
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
            <a href="{{ route('admin.dashboard') }}"
              class="nav-link @activeRoute('admin.dashboard') active @endactiveRoute">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                داشبورد
              </p>
            </a>
          </li>
          {{-- Educations --}}
          <li
            class="nav-item has-treeview  @activeRoute('admin.educations.create','admin.educations.index') menu-open @endactiveRoute">
            <a href="#"
              class="nav-link @activeRoute('admin.educations.create','admin.educations.index') active @endactiveRoute">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                مدارک
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.educations.index') }}"
                  class="nav-link @activeRoute('admin.educations.index') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مشاهده تمام مدارک</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.educations.create') }}"
                  class="nav-link @activeRoute('admin.educations.create') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ساخت یک مدرک جدید</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Educations --}}

          {{-- Teachers --}}
          <li
            class="nav-item has-treeview  @activeRoute('admin.teachers.create','admin.teachers.index','admin.teachers.edit') menu-open @endactiveRoute">
            <a href="#"
              class="nav-link @activeRoute('admin.teachers.create','admin.teachers.index','admin.teachers.edit') active @endactiveRoute">
              <i class="nav-icon fa fa-users"></i>
              <p>
                اساتید
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.teachers.index') }}"
                  class="nav-link @activeRoute('admin.teachers.index') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مشاهده تمام اساتید</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.teachers.create') }}"
                  class="nav-link @activeRoute('admin.teachers.create') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ساخت یک استاد جدید</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Teachers --}}

          {{-- Rooms --}}
          <li
            class="nav-item has-treeview  @activeRoute('admin.rooms.create','admin.rooms.index','admin.rooms.edit') menu-open @endactiveRoute">
            <a href="#"
              class="nav-link @activeRoute('admin.rooms.create','admin.rooms.index','admin.rooms.edit') active @endactiveRoute">
              <i class="nav-icon fa fa-building"></i>
              <p>
                اتاق ها
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rooms.index') }}"
                  class="nav-link @activeRoute('admin.rooms.index') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مشاهده تمام اتاق ها</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.rooms.create') }}"
                  class="nav-link @activeRoute('admin.rooms.create') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ساخت یک اتاق جدید</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- rooms --}}

          {{-- Rents --}}
          <li
            class="nav-item has-treeview  @activeRoute('admin.rents.create','admin.rents.index','admin.rents.edit') menu-open @endactiveRoute">
            <a href="#"
              class="nav-link @activeRoute('admin.rents.create','admin.rents.index','admin.rents.edit') active @endactiveRoute">
              <i class="nav-icon fa fa-clock-o"></i>
              <p>
                اجاره ها
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rents.index') }}"
                  class="nav-link @activeRoute('admin.rents.index') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مشاهده تمام اجاره ها</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.rents.create') }}"
                  class="nav-link @activeRoute('admin.rents.create') active @endactiveRoute">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>رزو کردن یک وقت جدید</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Rents --}}

          {{-- Excel --}}
          <li class="nav-item">
            <a href="{{ route('admin.excel.import.form') }}"
              class="nav-link @activeRoute('admin.excel.import.form') active @endactiveRoute">
              <i class="nav-icon fa fa-file-excel-o"></i>
              <p>
                Excel
              </p>
            </a>
          </li>
          {{-- Excel --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </div>
  <!-- /.sidebar -->
</aside>