<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.css') }}">
    
    <link rel="stylesheet" href="{{ asset('user/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('user/images/favicon.svg') }}" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{ asset('user/images/logo.svg') }}" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                    
                    
                        <li class="sidebar-item active ">
                                <a href="index-2.html" class='sidebar-link'>
                                    <i data-feather="home" width="20"></i> 
                                    <span>Dashboard</span>
                                </a>
                                
                        </li>
                        
                        <li class="sidebar-item  has-sub">
                                <a href="{{ route('user.dashboard') }}" class='sidebar-link'>
                                    <i data-feather="triangle" width="20"></i> 
                                    <span>Quiz</span>
                                </a>
                                
                                <ul class="submenu ">
                                    @foreach($categories as $cat)
                                    <li><a href="{{ route('UserQuizlist',[$cat->id,$cat->name])}}">{{ $cat->name }} &nbsp;<span class="badge bg-secondary">{{ $cat->quizs_count}}</span></a></li>
                                    @endforeach
                                    
                                </ul>

                                <a href="{{ route('Quizdetails') }}" class='sidebar-link'>
                                    <i data-feather="triangle" width="20"></i> 
                                    <span>Quiz Details</span>
                                </a>                                
                                
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>



        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                {{-- <div class="d-none d-md-block d-lg-inline-block">{{ Session::get('users')->name }}</div> --}}
                                <div class="d-none d-md-block d-lg-inline-block">{{ session('users')->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ 'userlogout' }}"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
             @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by Khushi & Kapil</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{asset('user/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('user/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('user/js/app.js') }}"></script>
    <script src="{{ asset('user/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('user/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('user/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
