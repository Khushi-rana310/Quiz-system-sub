<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/adminhmd/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 05:31:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard | Admin</title>

  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="#" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title">Admin</span>
            <span class="brand-subtitle">{{ $admin_data->username}}</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link active" href="{{'admindashboard'}}" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link" href="#">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Users</span>
        </a>

        <a class="nav-link" href="{{'categories'}}">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">Create Category</span>
        </a> 
        <a class="nav-link" href="{{'categoryshow'}}">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">All Categories</span>
        </a>
        <a class="nav-link" href="{{ 'addquiz' }}">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Create Quiz</span>
        </a>        



        
      </nav>

      <!-- <div class="sidebar-user">
        <img class="avatar-md sidebar-user-avatar" src="{{ asset('admin/images/avatar/avatar.jpg') }}" alt="Admin Hasan">
        <strong>Admin Hasan</strong>
        <small>Active Workspace</small>
      </div> -->

      <!-- <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div> -->
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>


          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>


            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <img class="avatar-sm" src="{{ asset('admin/images/avatar/avatar.jpg') }}"> -->
                <span class="d-none d-sm-inline">{{$admin_data->username}}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <!-- <li><a class="dropdown-item" href="settings.html">Account settings</a></li> -->
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ 'admin_logout' }}">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>



@yield('content')



      
      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>Copyright 2026 kishh.  </span>
</div>
      </footer>
    </div>
  </div>

  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/main.js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/adminhmd/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 05:31:28 GMT -->
</html>
