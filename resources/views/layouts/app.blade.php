<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_general_ci">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>صفحة وصلني</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="navbar-top-fixed.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
<body>
<div class="p-5 rounded">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid ">
    <a class="navbar-brand" href="waslni">وصلني</a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
      @guest
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="waslni">تسجيل الدخول</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">انشاء حساب</a>
        </li>
        @endguest

        @auth 
        <li class="nav-item">
        @csrf
        <a class="nav-link" href="{{ route('logout') }}">خروج</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('myaccount') }}">حسابي</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"> </script>
        @yield('content')
    </body>
</html>