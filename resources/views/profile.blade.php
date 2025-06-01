<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FurniStyle - Profil Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
  <!-- ===== HEADER ===== -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class="brand-text">FurniStyle</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/shop') }}">SHOP</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/layouts') }}">LAYOUTS</a></li>
          </ul>
          <div class="nav-icons d-flex align-items-center">
            <div class="search-box">
              <input type="text" placeholder="Search items...">
              <button><i class="fas fa-search"></i></button>
            </div>
            <a href="{{ url('/cart') }}" class="icon-link cart-icon">
              <i class="fas fa-shopping-cart"></i>
            </a>
            <a href="#" class="icon-link">
              <div class="profile-circle">
                <i class="fas fa-user"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
</body>
</html>
