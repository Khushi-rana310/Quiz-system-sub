<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/adminhmd/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 05:31:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body class="auth-body">
  <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
    <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
  </button>
  <main class="auth-page">
    <section class="auth-card">
      <a class="auth-brand" href="#"><span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span><span><small>Sign in to your admin workspace.</small></span></a>
      <!-- <div class="auth-visual"><img src="{{ asset('admin/images/png/dasher-ui-bootstrap-5.jpg') }}" alt="adminHMD dashboard interface"></div> -->
      <form class="needs-validation" method="post" action="/admin-login">
        @csrf
        <!-- <div class="mb-4">
          <p class="eyebrow mb-1">Secure Access</p>
          <h1 class="h3 mb-1">Login</h1>
          <p class="text-muted mb-0">Sign in to your admin workspace.</p>
        </div> -->
        @error('user')
        <div class="text-red">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" id="username" type="text" name="username">
            @error('username')
            <div class="text-red">{{$message}}</div>
            @enderror
            
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between">
            <label class="form-label" for="loginPassword">Password</label>
              <a class="small fw-semibold" href="forgot-password.html">Forgot?</a>
            </div>
            <input class="form-control" id="loginPassword" type="password"  name="password">
            @error('password')
            <div class="text-red">{{$message}}</div>
            @enderror
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button class="btn btn-primary w-100" type="submit"><i class="bi bi-box-arrow-in-right" aria-hidden="true"></i> Sign In</button>
      </form>
      
      <!-- <div class="auth-footer">New here? <a href="register.html">Create an account</a></div> -->
    </section>
  </main>

  <script src="{{ asset('admin/js/bootstrap.bundle.min..js') }}"></script>
  <script src="{{ asset('admin/js/main..js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/adminhmd/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2026 05:31:31 GMT -->
</html>
