<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnistyle - Design Your Space</title>
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- custom CSS -->
    <script src="{{ asset('js/popupdetail.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/material-category.css') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">
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

    <!-- Main Content -->
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-lg-2 sidebar">
                <div class="sidebar-section">
                    <h3 class="sidebar-heading">MATERIAL</h3>
                    <ul class="sidebar-menu">
                        <li><a href="{{ url('wood-shop') }}" class="active"><i class="fa-solid fa-tree"></i> Wood</a></li>
                        <li><a href="{{ url('glass-shop') }}"><i class="fa-solid fa-wine-glass"></i> Glass</a></li>
                        <li><a href="{{ url('fabric-shop') }}"><i class="fa-solid fa-shirt"></i> Fabric</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <h3 class="sidebar-heading">CATEGORY</h3>
                    <ul class="sidebar-menu">
                        <li><a href="{{ url('livingroom') }}"><i class="fa-solid fa-couch"></i> Living Room</a></li>
                        <li><a href="{{ url('kitchen') }}"><i class="fa-solid fa-utensils"></i> Kitchen</a></li>
                        <li><a href="{{ url('bedroom') }}"><i class="fa-solid fa-bed"></i> Bedroom</a></li>
                        <li><a href="{{ url('homeoffice') }}"><i class="fa-solid fa-laptop-house"></i> Home Office</a></li>
                        <li><a href="{{ url('storage') }}"><i class="fa-solid fa-boxes-stacked"></i> Storage</a></li>
                        <li><a href="{{ url('laundry') }}"><i class="fa-solid fa-soap"></i> Laundry</a>
                    </ul>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="col-lg-10">
                <div class="container product-grid">
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="{{ asset('/image material/wood1.jpg') }}" alt="MAKARIZO CHAIR" class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <h5>MAKARIZO CHAIR</h5>
                                    <p class="price">$139</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="{{ asset('/image material/wood2.jpg') }}" alt="TOLA SOFA" class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <h5>NIXE TABLE</h5>
                                    <p class="price">$645</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="{{ asset('/image material/wood3.jpg') }}" alt="RIRAKKUSU CHAIR" class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <h5>SUAN CHAIR</h5>
                                    <p class="price">$344</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="{{ asset('/image material/wood4.jpg') }}" alt="MOKUZAI TABLE" class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <h5>OYA CHAIR</h5>
                                    <p class="price">$200</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <li><a href="{{ url('/homeoffice') }}">Home Office</a></li>
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


<!-- Updated Product Modal - Smaller & Modern -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <span class="product-category" id="modalProductCategory">Chair</span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="container-fluid">
          <div class="row">
            <!-- Product Image Column -->
            <div class="col-md-5 p-0">
              <div class="product-modal-image">
                <div class="product-tag">New</div>
                <img src="" id="modalProductImage" alt="Product Image" class="img-fluid">
              </div>
            </div>
            
            <!-- Product Details Column -->
            <div class="col-md-7 py-2 px-4 product-details-column">
              <h3 id="modalProductName" class="product-modal-title"></h3>
              
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="rating-count">4.8 (24 reviews)</span>
              </div>
              
              <div class="product-modal-price">
                <h4 id="modalProductPrice"></h4>
              </div>
              
              <div class="product-description">
                <p id="modalProductDescription"></p>
              </div>
              
              <div class="product-features">
                <h5>Features</h5>
                <ul id="modalProductFeatures" class="features-list">
                  <!-- Features will be populated by JS -->
                </ul>
              </div>
              
              <div class="product-actions">
                <div class="quantity-selector">
                  <button class="qty-btn minus"><i class="fas fa-minus"></i></button>
                  <input type="number" min="1" value="1" class="qty-input">
                  <button class="qty-btn plus"><i class="fas fa-plus"></i></button>
                </div>
                
                <div class="action-buttons">
                  <button class="btn btn-add-cart"><i></i>Order Now</button>
                  <button class="btn btn-wishlist"><i class="fas fa-shopping-cart"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
        // JavaScript for HomeLoft Website

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });
    }
    
    // Product Hover Effect
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.product-image img').style.transform = 'scale(1.05)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.product-image img').style.transform = 'scale(1)';
        });
    });
    
    // Pagination Dots
    const dots = document.querySelectorAll('.dot');
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            // Remove active class from all dots
            dots.forEach(d => d.classList.remove('active'));
            
            // Add active class to clicked dot
            this.classList.add('active');
            
            // Here you could add logic to change page content
            console.log('Switched to page:', index + 1);
        });
    });
    
    // Search Box Focus Effect
    const searchInput = document.querySelector('.search-box input');
    
    if (searchInput) {
        searchInput.addEventListener('focus', function() {
            this.style.width = '220px';
            this.style.borderColor = 'var(--primary)';
            this.style.boxShadow = '0 0 5px rgba(90, 125, 47, 0.2)';
        });
        
        searchInput.addEventListener('blur', function() {
            if (this.value === '') {
                this.style.width = '200px';
                this.style.borderColor = 'var(--border-color)';
                this.style.boxShadow = 'none';
            }
        });
    }
    
    // Responsive Nav Icons
    function adjustNavIcons() {
        const navIcons = document.querySelector('.nav-icons');
        const searchBox = document.querySelector('.search-box');
        
        if (window.innerWidth < 992) {
            if (navIcons && searchBox) {
                searchBox.style.display = 'none';
            }
        } else {
            if (navIcons && searchBox) {
                searchBox.style.display = 'block';
            }
        }
    }
    
    // Run on page load
    adjustNavIcons();
    
    // Run on window resize
    window.addEventListener('resize', adjustNavIcons);
});


    </script>
</body>
</html>