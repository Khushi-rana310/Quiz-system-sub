<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/voler/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 06:25:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User Dashboard</title>
    <link rel="stylesheet" href={{ asset('user/css/bootstrap.css') }}>
    
    <link rel="shortcut icon" href={{ asset('user/images/favicon.svg') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('user/css/app.css') }}>
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">

                    <div class="text-center mb-5">
                        <img src={{ asset('user/images/favicon.svg') }} height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to Voler.</p>
                    </div>
                    <p>@if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                     @endif
                    </p>
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                        @if ($errors->has('login'))
                            <div class="alert alert-danger">
                                {{ $errors->first('login') }}
                            </div>
                        @endif
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username" name="email" value="{{ old('email') }}" required>
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" accept="" name="password" value="" required>
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-start">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                            {{-- <div class="float-end">
                                <a href="auth-register.html">Don't have an account?</a>
                            </div> --}}
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Submit</button>
                            
                        </div>
                    </form><a href="{{ '/' }}" class="btn btn-primary">Register</a>
                    {{-- <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src={{ asset('user/js/feather-icons/feather.min.js') }}></script>
    <script src={{ asset('user/js/app.js') }}></script>
    
    <script src={{ asset('user/js/main.js') }}></script>
</body>


<!-- Mirrored from zuramai.github.io/voler/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 06:25:48 GMT -->
</html>

