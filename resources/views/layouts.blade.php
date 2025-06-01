<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FurniStyle - Design Your Space</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  
</head>
<body>
    <!-- header & navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span class="brand-text">FurniStyle</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/home') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/layouts') }}">LAYOUTS</a>
                        </li>
                    </ul>
                    
                    <div class="nav-icons d-flex align-items-center">
                        <div class="search-box">
                            <input type="text" placeholder="Search items...">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        </a>
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


  <!-- Room Images Grid -->
  <main class="container my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
      <div class="col room-item">
        <img src="{{ asset('/image layouts/layout1.jpg') }}" alt="Room 1" class="img-fluid rounded">
      </div>
      <div class="col-sm-12 col-md-6 room-item">
        <img src="{{ asset('/image layouts/layout2.jpg') }}" alt="Room 2" class="img-fluid rounded">
      </div>
      <div class="col-sm-12 col-md-6 room-item">
        <img src="{{ asset('/image layouts/layout3.jpg') }}" alt="Room 2" class="img-fluid rounded">
      </div>
      <div class="col-sm-12 col-md-6 room-item">
        <img src="{{ asset('/image layouts/layout4.jpg') }}" alt="Room 2" class="img-fluid rounded">
      </div>
      <div class="col-sm-12 col-md-6 room-item">
        <img src="{{ asset('/image layouts/layout5.jpg') }}" alt="Room 2" class="img-fluid rounded">
      </div>
       <div class="col-sm-12 col-md-6 room-item">
        <img src="{{ asset('/image layouts/layout6.jpg') }}" alt="Room 2" class="img-fluid rounded">
      </div>
    </div>
  </main>

    <!-- footer section -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">FurniStyle</h3>
                    <p class="footer-text">
                        Beautiful furniture for beautiful homes. Quality design that lasts a lifetime.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/furnistyle.idn?igsh=M2RoNmZiM3FtaDlx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">SHOP</h3>
                    <ul class="footer-links">
                    <li><a href="{{ url('/livingroom') }}">Living Room</a></li>
                    <li><a href="{{ url('/kitchen') }}">Kitchen</a></li>
                    <li><a href="{{ url('/bedroom') }}">Bedroom</a></li>
                    <li><a href="{{ url('/storage') }}">Storage</a></li>
                    <li><a href="{{ url('/laundry') }}">Laundry</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">LINKS</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-title">CONTACT</h3>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i> Jln. Pangeran 12, Purwokerto</li>
                        <li><i class="fas fa-phone"></i> +62 878-1765-3570</li>
                        <li><i class="fas fa-envelope"></i> furnistyleidn@gmail.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright">© 2025 FurniStyle. All Rights Reserved.</p>
                    </div>
            </div>
        </div>
    </footer>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
