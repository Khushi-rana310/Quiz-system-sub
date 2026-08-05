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
            <div class="card py-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Reset Password</h3>
                        <p>Please reset your password.</p>
                    </div>
                    <form action="/reset_pwd" method="POST">
                        @csrf   
                        <input type="hidden" value="{{ $email }}"  name="user_email">
                        <div class="form-group">
                            <label for="first-name-column">Password</label>
                            <input type="password" id="first-name-column" class="form-control" name="password" value="" required>
                        </div>
                        @error('password')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="first-name-column">Confirm Password</label>
                            <input type="password" id="first-name-column" class="form-control" name="password_confirmation" value="" required>
                        </div>                        
                         @error('password_confirmation')
                         <div>{{ $message }}</div>
                         @enderror
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Submit</button>
                        </div>
                    </form>
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




   




