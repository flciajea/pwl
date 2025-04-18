<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mantis HTML Admin Template | Mantis Bootstrap 5 Admin Template</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template">
  <meta name="author" content="CodedThemes">

  <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

  <link href="{{ asset('assets/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
  <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>

<body class="landing-page">
  <!-- Pre-loader -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <!-- Header -->
  <header id="home">
    <nav class="navbar navbar-expand-md navbar-dark top-nav-collapse default">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/images/logo-white.svg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item pe-1">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" target="_blank" href="https://codedthemes.com/item/mantis-bootstrap-admin-dashboard/">Purchase Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-9 col-xl-6">
          <h1 class="mt-sm-3 text-white mb-4 f-w-600 wow fadeInUp" data-wow-delay="0.2s">
            Carefully Crafted for your <span class="text-primary">Caring React</span> Project
          </h1>
          <h5 class="mb-4 text-white opacity-75 wow fadeInUp" data-wow-delay="0.4s">
            Mantis React is a blazing-fast dashboard template built using the MUI React library.
          </h5>
          <div class="my-5 wow fadeInUp" data-wow-delay="0.6s">
            <a href="#" class="btn btn-outline-primary me-2">Explore Components</a>
            <a href="#" class="btn btn-primary"> <i class="ti ti-eye me-1"></i> Live Preview</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Ini bagian konten halaman -->
  <main>
    @yield('content')
  </main>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

  <script>
    let ost = 0;
    document.addEventListener('scroll', function () {
      let cOst = document.documentElement.scrollTop;
      if (cOst == 0) {
        document.querySelector(".navbar").classList.add("top-nav-collapse");
      } else if (cOst > ost) {
        document.querySelector(".navbar").classList.add("top-nav-collapse");
        document.querySelector(".navbar").classList.remove("default");
      } else {
        document.querySelector(".navbar").classList.add("default");
        document.querySelector(".navbar").classList.remove("top-nav-collapse");
      }
      if (cOst > 500) {
        document.querySelector(".pc-landing-custmizer")?.classList.add("active");
      } else {
        document.querySelector(".pc-landing-custmizer")?.classList.remove("active");
      }
      ost = cOst;
    });
  </script>
</body>

</html>
