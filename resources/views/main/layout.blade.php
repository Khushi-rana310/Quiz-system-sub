<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/learnhub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2026 09:24:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8" />
  <title>LearnHub Education</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('main/assets/images/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('main/assets/images/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('main/assets/images/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('main/assets/site.webmanifest') }}">

  <script type="module"  src="{{ asset('main/assets/js/index.js') }}"></script>
  <link rel="stylesheet"  href="{{ asset('main/assets/css/index.css') }}">
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand d-inline-flex gap-2 align-items-center lh-1" href="index.html">
        <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-book">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6l0 13" />
            <path d="M12 6l0 13" />
            <path d="M21 6l0 13" />
          </svg></span>
        <span class="fw-bold">LearnHub</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#courses" class="nav-link">Courses</a></li>
          <li class="nav-item"><a href="#mentor" class="nav-link">Mentor</a></li>
          <li class="nav-item"><a href="#group" class="nav-link">Group</a></li>
          <li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
          <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
        </ul>
        <div class="d-flex gap-3 align-items-center">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
          <a href="{{'admin_login'}}" class="btn btn-primary">Admin Login</a>
        </div>
      </div>
    </div>
  </nav>


@yield('content')

<footer class="pt-lg-13 bg-light py-8">
    <div class="container">
      <div class="row gy-8">
        <div class="col-md-4">
          <div class="">
            <a class="d-inline-flex gap-2 align-items-center lh-1" href="index.html">
              <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                  <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                  <path d="M3 6l0 13" />
                  <path d="M12 6l0 13" />
                  <path d="M21 6l0 13" />
                </svg></span>
              <span class="fw-bold">LearnHub</span>
            </a>
            <p class="mt-4 mb-6">Empowering millions of learners worldwide with industry-leading courses and expert
              mentors.</p>
            <div class="d-flex flex-column gap-2">
              <span class="d-flex align-items-center gap-2">
                <span class="text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                    <path d="M3 7l9 6l9 -6" />
                  </svg>

                </span>
                <span>hello@learnhub.com</span>

              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                  </svg>

                </span>
                <span>+1 (234) 567-890</span>
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                  </svg>

                </span>
                <span>San Francisco, CA</span>
              </span>
            </div>






          </div>

        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="">
                <h4 class="fs-5 mb-4">Product</h4>
                <ul class="list-unstyled lh-lg small">
                  <li><a href="#">Features</a>


                  </li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div>
                <h4 class="fs-5 mb-4">Company</h4>
                <ul class="list-unstyled lh-lg small">
                  <li><a href="#">About Us</a>


                  </li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Press</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div>
                <h4 class="fs-5 mb-4">Support</h4>
                <ul class="list-unstyled lh-lg small">
                  <li><a href="#">Help Center</a>


                  </li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div>
                <h4 class="fs-5 mb-4">Help Center</h4>
                <ul class="list-unstyled lh-lg small">
                  <li><a href="#">Web Development</a>


                  </li>
                  <li><a href="#">UI/UX Design</a></li>
                  <li><a href="#">Data Science</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

            </div>

          </div>

        </div>

      </div>
      <div class="border-top mt-8 pt-6 row small">
        <div class="col-12 d-flex flex-column flex-md-row justify-content-between">
          <div>
            <p>© 2026 LearnHub. All rights reserved. Design & Develop by <a href="https://codescandy.com/" class="link-primary" target="_blank">kapil</a> • 
            </p>
          </div>
          <div>
            <div class="">

              <a href="#" class="btn rounded-circle btn-light btn-icon btn-xs">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                  <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                </svg>

              </a>
              <a href="#" class="btn rounded-circle btn-light btn-icon btn-xs">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin ">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M8 11v5"></path>
                  <path d="M8 8v.01"></path>
                  <path d="M12 16v-5"></path>
                  <path d="M16 16v-3a2 2 0 1 0 -4 0"></path>
                  <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                </svg>

              </a>
              <a href="#" class="btn rounded-circle btn-light btn-icon btn-xs">

                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-brand-github ">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12 12 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                  </path>
                </svg>

              </a>
            </div>
          </div>

        </div>

      </div>

    </div>
  </footer>
  <!-- <div class="position-fixed  bottom-0 m-4">
    <a href="https://themewagon.com/themes/learnhub/" class="btn btn-dark" target="_blank"> Download Now</a>
  </div> -->


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-5">

        <div class="modal-body p-6">
          <div class=" mb-3">

            <div class="d-flex justify-content-between">
              <h1 class="card-title mb-5 h5">Create your account</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>

          <form class="mt-3">
            <div class="mb-3">
              <label for="fullName" class="form-label">Full name</label>
              <input id="fullName" type="text" class="form-control" placeholder="Jane Doe" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input id="email" type="email" class="form-control" placeholder="name@example.com" required>
              <div class="invalid-feedback">Please enter a valid email.</div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" type="password" class="form-control" placeholder="Create a password" required
                minlength="6">
              <div class="invalid-feedback">Please provide a password (min 6 characters).</div>
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm password</label>
              <input id="confirmPassword" type="password" class="form-control" placeholder="Repeat password" required>
              <div class="invalid-feedback">Passwords must match.</div>
            </div>

            <div class="mb-3 form-check">
              <input id="terms" class="form-check-input" type="checkbox" required>
              <label class="form-check-label small" for="terms">I agree to the <a href="#"
                  class="text-decoration-none">terms and privacy</a></label>
              <div class="invalid-feedback">You must agree before continuing.</div>
            </div>
            <div>

              <button class="btn btn-primary" type="submit">Sign up</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>







  <!-- Navbar End -->

  <!-- Bootstrap JS -->



</body>


<!-- Mirrored from themewagon.github.io/learnhub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2026 09:24:55 GMT -->
</html>
