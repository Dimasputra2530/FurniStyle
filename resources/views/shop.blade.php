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
    <link rel="stylesheet" href="/css/shop.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <a class="nav-link" href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/shop') }}">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTION</a>
                        </li>
                    </ul>
                
                <div class="nav-icons d-flex align-items-center">
                    <div class="search-box">
                        <input type="text" placeholder="Search items...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <a href="{{ url('/cart') }}" class="icon-link cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#authModal">
                        <div class="profile-circle">
                            <i class="fas fa-user"></i>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Modal Login & Sign Up untuk Shop -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border-radius: 15px; overflow: hidden;">
      <div class="d-flex flex-row">
        <!-- Left: Form Area -->
        <div class="col-md-6 p-5">
          <div class="modal-header border-0 p-0 mb-3">
            <h5 class="modal-title fw-bold text-success" id="authModalLabel">Login to your account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <button class="btn btn-outline-secondary w-100 mb-3">
            <i class="bi bi-google me-2"></i> Login with Google
          </button>

          <div class="text-center my-2 text-muted">— or —</div>

          <!-- Form Sign Up -->
          <form id="form-signup" action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
              <label class="form-check-label" for="terms">
                I agree to all Terms, Privacy Policy and Fees
              </label>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
          </form>

          <!-- Form Login -->
          <form id="form-login" action="{{ route('login') }}" method="POST" class="d-none">
            @csrf
            <div class="mb-3">
              <label for="login-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="login-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
          </form>

          <div class="text-center mt-3">
            <small>Already have an account? <a href="#" id="toggleLoginForm">Sign up</a></small>
          </div>
        </div>

        <!-- Right: Image Area -->
        <div class="col-md-6 d-none d-md-block" style="background: url('/image/Rectangle 9 (1).png') center center / cover no-repeat;">
          <div class="h-100 d-flex align-items-center justify-content-center text-white p-4" style="background-color: rgba(0,0,0,0.4);">
            <h4 class="text-center">Discovering the Best Furniture for Your Home</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Main Content -->
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-lg-2 sidebar">
                <div class="sidebar-section">
                    <h3 class="sidebar-heading">MATERIAL</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#"><i class="fa-solid fa-tree"></i> Wood</a></li>
                        <li><a href="#"><i class="fa-solid fa-wine-glass"></i> Glass</a></li>
                        <li><a href="#"><i class="fa-solid fa-shirt"></i> Fabric</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <h3 class="sidebar-heading">PACKAGE</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#"><i class="fa-solid fa-tag"></i> BRAND</a></li>
                        <li><a href="#"><i class="fa-solid fa-bed"></i> Bedroom</a></li>
                        <li><a href="#"><i class="fa-solid fa-bath"></i> Bathroom</a></li>
                        <li><a href="#"><i class="fa-solid fa-kitchen-set"></i> Kitchen Sets</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <h3 class="sidebar-heading">CONTACT</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i> Email</a></li>
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
      <img src="{{ asset('/image shop/burebeto-chair.jpg') }}" alt="BERUBETTO CHAIR" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>BERUBETTO CHAIR</h5>
      <p class="price">$139</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('BERUBETTO CHAIR', 139, '{{ asset('/image shop/burebeto-chair.jpg') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 2 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/tola-sofa.jpg') }}" alt="TOLA SOFA" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>TOLA SOFA</h5>
      <p class="price">$645</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('TOLA SOFA', 645, '{{ asset('/image shop/tola-sofa.jpg') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 3 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/rirakuru-chair.png') }}" alt="RIRAKKUSU CHAIR" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>RIRAKKUSU CHAIR</h5>
      <p class="price">$344</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('RIRAKKUSU CHAIR', 344, '{{ asset('/image shop/rirakuru-chair.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 4 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/mokuzai-table.png') }}" alt="MOKUZAI TABLE" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>MOKUZAI TABLE</h5>
      <p class="price">$200</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('MOKUZAI TABLE', 200, '{{ asset('/image shop/mokuzai-table.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 5 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/ohara-lamp.png') }}" alt="OHARA LAMP" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>OHARA LAMP</h5>
      <p class="price">$99</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('OHARA LAMP', 99, '{{ asset('/image shop/ohara-lamp.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 6 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('image shop/mokuzai-chair.png') }}" alt="MOKUZAI TABLE" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>MOKUZAI TABLE</h5>
      <p class="price">$200</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('MOKUZAI TABLE', 200, '{{ asset('image shop/mokuzai-chair.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 7 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/egghead-lamp.png') }}" alt="EGGHEAD LAMP" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>EGGHEAD LAMP</h5>
      <p class="price">$99</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('EGGHEAD LAMP', 99, '{{ asset('/image shop/egghead-lamp.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 8 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/sakazuki-chair.png') }}" alt="SAKAZUKI SOFA" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>SAKAZUKI SOFA</h5>
      <p class="price">$250</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('SAKAZUKI SOFA', 250, '{{ asset('/image shop/sakazuki-chair.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 9 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/kureha-candle.png') }}" alt="KUREHA CANDLE" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>KUREHA CANDLE</h5>
      <p class="price">$150</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('KUREHA CANDLE', 150, '{{ asset('/image shop/kureha-candle.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 10 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/kuzan-sofa.png') }}" alt="KUZAN SOFA" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>KUZAN SOFA</h5>
      <p class="price">$200</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('KUZAN SOFA', 200, '{{ asset('/image shop/kuzan-sofa.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 11 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/inurashi-chair.png') }}" alt="INUARASHI CHAIR" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>INUARASHI CHAIR</h5>
      <p class="price">$130</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('INUARASHI CHAIR', 130, '{{ asset('/image shop/inurashi-chair.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- Product 12 -->
<div class="col-md-4 mb-4">
  <div class="product-card">
    <div class="product-image">
      <img src="{{ asset('/image shop/nekomomushi-chair.png') }}" alt="NEKOMAMUSHI CHAIR" class="img-fluid">
    </div>
    <div class="product-info">
      <h5>NEKOMAMUSHI CHAIR</h5>
      <p class="price">$150</p>
    </div>
    <div class="action-buttons">
      <button class="btn btn-add-cart"
              onclick="addToCart('NEKOMAMUSHI CHAIR', 150, '{{ asset('/image shop/nekomomushi-chair.png') }}')">
        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
      </button>
    </div>
  </div>
</div>


     <!-- Footer Section -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">FurniStyle</h3>
                    <p class="footer-text">
                        Beautiful furniture for beautiful homes. Quality design that lasts a lifetime.
                    </p>
                    <div class="social-links">
                        <a href="#" class="text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">SHOP</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="text-decoration-none">Living Room</a></li>
                        <li><a href="#" class="text-decoration-none">Kitchen</a></li>
                        <li><a href="#" class="text-decoration-none">Bedroom</a></li>
                        <li><a href="#" class="text-decoration-none">Home Office</a></li>
                        <li><a href="#" class="text-decoration-none">New Arrivals</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">LINKS</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="#" class="text-decoration-none">Privacy Policy</a></li>
                    </ul>
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
                    <div class="col-md-6 text-md-end">
                        <p class="made-by">MADE WITH LOVE</p>
                    </div>
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
                  <button class="btn btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Order Now</button>
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

// pop up detail produk
// Updated Product Modal JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Get all product cards
    const productCards = document.querySelectorAll('.product-card');
    
    // Product descriptions and features database
    const productData = {
        'BERUBETTO CHAIR': {
            category: 'Chair',
            description: 'The Berubetto Chair combines elegant simplicity with exceptional comfort. Crafted with premium materials and featuring a curved backrest, this chair provides optimal support for your back.',
            features: [
                'Curved ergonomic design',
                'Premium upholstery',
                'Solid wooden legs',
                'Weight capacity: 250 lbs'
            ]
        },
        'TOLA SOFA': {
            category: 'Sofa',
            description: 'The Tola Sofa redefines relaxation with its plush cushions and sophisticated silhouette. Perfect for family gatherings or quiet evenings.',
            features: [
                'Premium foam cushioning',
                'Stain-resistant fabric',
                'Solid hardwood frame',
                'Removable cushion covers'
            ]
        },
        'RIRAKKUSU CHAIR': {
            category: 'Chair',
            description: 'The Rirakkusu Chair exemplifies modern design with its lightweight steel frame and exceptional comfort. Perfect for both work and relaxation.',
            features: [
                'Lightweight steel construction',
                'Ergonomic backrest design',
                'Breathable fabric upholstery',
                'Non-marking floor protectors'
            ]
        },
        'MOKUZAI TABLE': {
            category: 'Table',
            description: 'The Mokuzai Table showcases the natural beauty of solid wood with its elegant grain patterns and sturdy construction. This versatile piece works perfectly as a dining table or workspace.',
            features: [
                'Solid wood construction',
                'Natural wood grain finish',
                'Protective clear coating',
                'Adjustable feet for stability'
            ]
        },
        'OHARA LAMP': {
            category: 'Lighting',
            description: 'The Ohara Lamp creates a warm, inviting ambiance with its soft, diffused lighting. Its modern design features clean lines and natural materials.',
            features: [
                'Warm LED lighting',
                'Natural linen shade',
                'Adjustable brightness',
                'Energy efficient design'
            ]
        },
        'MOKUZAI CHAIR': {
            category: 'Chair',
            description: 'The Mokuzai Chair pairs perfectly with its table counterpart, featuring the same attention to wood quality and craftsmanship. Its ergonomic design ensures comfort during long sitting periods.',
            features: [
                'Solid wood construction',
                'Contoured seat for comfort',
                'Reinforced joinery',
                'Stackable design for storage'
            ]
        },
        'EGGHEAD LAMP': {
            category: 'Lighting',
            description: 'The unique egg-shaped design of the Egghead Lamp creates a conversation piece that doubles as functional lighting. Its smooth, organic form diffuses light beautifully.',
            features: [
                'Ceramic egg-shaped base',
                'Touch-sensitive dimming',
                'Warm white LED bulb included',
                'Anti-tip weighted base'
            ]
        },
        'SAKAZUKI SOFA': {
            category: 'Sofa',
            description: 'The Sakazuki Sofa is designed for smaller living spaces without compromising on comfort or style. Its compact profile and clean lines make it perfect for apartments.',
            features: [
                'Space-saving design',
                'High-resilience foam cushions',
                'Stain-resistant upholstery',
                'Hidden storage under seat'
            ]
        },
        'KUREHA CANDLE': {
            category: 'Home Decor',
            description: 'The Kureha Candle collection brings tranquility to your home with long-lasting, natural fragrances. Each candle is hand-poured using premium soy wax and essential oils.',
            features: [
                'Natural soy wax blend',
                '50+ hour burn time',
                'Premium essential oil fragrance',
                'Reusable decorative container'
            ]
        },
        'KUZAN SOFA': {
            category: 'Sofa',
            description: 'The Kuzan Sofa embraces minimalist design principles while maximizing comfort. Its clean lines and low profile create a contemporary aesthetic that works in various interior styles.',
            features: [
                'Modular design options',
                'High-density foam cushioning',
                'Kiln-dried hardwood frame',
                'Stain-resistant performance fabric'
            ]
        },
        'INUARASHI CHAIR': {
            category: 'Chair',
            description: 'The Inuarashi Chair offers lightweight versatility without sacrificing style or comfort. Perfect for dining rooms and offices alike, this chair supports proper posture.',
            features: [
                'Reinforced polypropylene shell',
                'Contoured seat and back',
                'Stackable for storage',
                'UV-resistant for indoor/outdoor use'
            ]
        },
        'NEKOMAMUSHI CHAIR': {
            category: 'Chair',
            description: 'The Nekomamushi Chair is engineered for extended sitting comfort with its ergonomic design and supportive structure. Ideal for home offices and workspaces.',
            features: [
                'Adjustable height mechanism',
                'Lumbar support cushioning',
                'Breathable mesh backrest',
                '360° swivel capability'
            ]
        }
    };
    
    // Add click event to each product card
    productCards.forEach(card => {
        card.addEventListener('click', function() {
            // Get product details from the clicked card
            const productImage = this.querySelector('.product-image img').getAttribute('src');
            const productName = this.querySelector('.product-info h5').textContent;
            const productPrice = this.querySelector('.product-info .price').textContent;
            
            // Get specific product data from our database
            const productInfo = productData[productName] || {
                category: 'Furniture',
                description: 'High-quality furniture piece with exceptional design and comfort.',
                features: ['Premium materials', 'Ergonomic design', 'Easy assembly']
            };
            
            // Populate modal with product details
            document.getElementById('modalProductImage').src = productImage;
            document.getElementById('modalProductName').textContent = productName;
            document.getElementById('modalProductPrice').textContent = productPrice;
            document.getElementById('modalProductDescription').textContent = productInfo.description;
            document.getElementById('modalProductCategory').textContent = productInfo.category;
            
            // Clear and populate features list
            const featuresList = document.getElementById('modalProductFeatures');
            featuresList.innerHTML = '';
            productInfo.features.forEach(feature => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-check"></i> ${feature}`;
                featuresList.appendChild(li);
            });
            
            // Open the modal
            const productModal = new bootstrap.Modal(document.getElementById('productModal'));
            productModal.show();
        });
    });
    
    // Quantity selector functionality
    document.querySelector('.qty-btn.minus')?.addEventListener('click', function() {
        const input = this.nextElementSibling;
        let value = parseInt(input.value);
        if (value > 1) {
            input.value = value - 1;
        }
    });
    
    document.querySelector('.qty-btn.plus')?.addEventListener('click', function() {
        const input = this.previousElementSibling;
        let value = parseInt(input.value);
        input.value = value + 1;
    });
    
    // Add to Cart Button Animation for All Buttons
    document.querySelectorAll('.btn-add-cart').forEach(function(button) {
        button.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check me-2"></i>Added';
            this.classList.add('added');

            // Reset after 2 seconds
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-shopping-cart me-2"></i>Add to Cart';
                this.classList.remove('added');
            }, 2000);
        });
    });

    
    // Wishlist Button Toggle
    document.querySelector('.btn-wishlist')?.addEventListener('click', function() {
        const icon = this.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.replace('far', 'fas');
            this.style.color = '#ff5252';
        } else {
            icon.classList.replace('fas', 'far');
            this.style.color = '';
        }
    });
});

 </script>

<!-- BARU INI -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get CSRF token
    const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfMetaTag ? csrfMetaTag.content : '';

    // Fungsi adjustNavIcons (kalau kamu pakai ini)
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
    adjustNavIcons();
    window.addEventListener('resize', adjustNavIcons);

    // AJAX Function untuk Add to Cart
    f// Pastikan CSRF token tersedia
let csrfToken;
try {
    // Coba ambil dari meta tag
    const metaToken = document.querySelector('meta[name="csrf-token"]');
    if (metaToken) {
        csrfToken = metaToken.getAttribute('content');
    } else {
        // Alternatif: ambil dari form tersembunyi
        const hiddenInput = document.querySelector('input[name="_token"]');
        csrfToken = hiddenInput ? hiddenInput.value : '';
    }
} catch (error) {
    console.warn('CSRF token tidak ditemukan:', error);
    csrfToken = '';
}

// AJAX Function untuk Add to Cart
function addToCart(productData) {
    // Validasi input
    if (!productData.id) {
        throw new Error('Product ID is required');
    }

    if (!csrfToken) {
        throw new Error('CSRF token tidak tersedia');
    }

    const formData = new FormData();
    formData.append('product_id', productData.id);
    formData.append('product_name', productData.name);
    formData.append('product_price', productData.price);
    formData.append('quantity', productData.quantity || 1);
    formData.append('_token', csrfToken);

    return fetch('/cart/add', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        // Cek content type
        const contentType = response.headers.get('content-type');
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        // Pastikan response adalah JSON
        if (contentType && contentType.includes('application/json')) {
            return response.json();
        } else {
            // Jika bukan JSON, baca sebagai text untuk debugging
            return response.text().then(text => {
                console.warn('Response bukan JSON:', text);
                throw new Error('Server response bukan JSON yang valid');
            });
        }
    })
    .then(data => {
        console.log('Response berhasil:', data);
        
        if (data && data.success) {
            // Update cart count jika ada
            updateCartCount();
            return data;
        } else {
            throw new Error(data?.message || 'Gagal menambahkan produk ke keranjang');
        }
    })
    .catch(error => {
        console.error('Error dalam addToCart:', error);
        throw error;
    });
}

// Fungsi untuk reset button state
function resetButton(button, originalText) {
    button.innerHTML = originalText;
    button.disabled = false;
    button.classList.remove('loading', 'added');
}

// Fungsi untuk set loading state
function setLoadingState(button) {
    button.disabled = true;
    button.classList.add('loading');
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
}

// Fungsi untuk set success state
function setSuccessState(button, originalText) {
    button.innerHTML = '<i class="fas fa-check me-2"></i>Added';
    button.classList.remove('loading');
    button.classList.add('added');
    
    setTimeout(() => {
        resetButton(button, originalText);
    }, 2000);
}

// Event listener untuk tombol Add to Cart
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.btn-add-cart');
    
    if (addToCartButtons.length === 0) {
        console.warn('Tidak ada tombol .btn-add-cart ditemukan');
        return;
    }

    console.log(`Ditemukan ${addToCartButtons.length} tombol Add to Cart`);

    addToCartButtons.forEach(button => {
        // Simpan text original
        const originalText = button.innerHTML;
        
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior
            
            // Ambil data produk dari data attributes
            const productData = {
                id: this.dataset.id || this.getAttribute('data-id'),
                name: this.dataset.name || this.getAttribute('data-name'),
                price: this.dataset.price || this.getAttribute('data-price'),
                quantity: 1
            };
            
            console.log('Product data:', productData);
            
            if (!productData.id) {
                alert('Product ID tidak ditemukan');
                return;
            }

            if (!productData.name) {
                alert('Product name tidak ditemukan');
                return;
            }

            if (!productData.price) {
                alert('Product price tidak ditemukan');
                return;
            }

            // Set loading state
            setLoadingState(this);

            // Call AJAX function
            addToCart(productData)
                .then((data) => {
                    // Tampilkan pesan sukses
                    const message = data.message || `${productData.name} berhasil ditambahkan ke keranjang!`;
                    showNotification(message, 'success');
                    
                    // Set success state
                    setSuccessState(this, originalText);
                })
                .catch((error) => {
                    // Reset button state
                    resetButton(this, originalText);
                    
                    // Tampilkan error message
                    const errorMessage = `Gagal menambahkan ${productData.name} ke keranjang: ${error.message}`;
                    showNotification(errorMessage, 'error');
                });
        });
    });
});

// Tambahan: Fungsi untuk update cart count (jika ada)
function updateCartCount() {
    fetch('/cart/count', {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        const cartCountElement = document.querySelector('.cart-count');
        if (cartCountElement && data.count !== undefined) {
            cartCountElement.textContent = data.count;
            // Animasi cart count
            cartCountElement.style.transform = 'scale(1.2)';
            setTimeout(() => {
                cartCountElement.style.transform = 'scale(1)';
            }, 200);
        }
    })
    .catch(error => {
        console.warn('Gagal update cart count:', error);
    });
}

// Fungsi untuk menampilkan notifikasi
function showNotification(message, type = 'info') {
    // Cek apakah ada toast container
    let toastContainer = document.querySelector('.toast-container');
    
    if (!toastContainer) {
        // Buat toast container jika belum ada
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
        toastContainer.style.zIndex = '9999';
        document.body.appendChild(toastContainer);
    }

    // Buat toast element
    const toastId = 'toast-' + Date.now();
    const toastHTML = `
        <div id="${toastId}" class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    `;

    toastContainer.insertAdjacentHTML('beforeend', toastHTML);
    
    const toastElement = document.getElementById(toastId);
    
    // Jika Bootstrap toast tersedia
    if (typeof bootstrap !== 'undefined' && bootstrap.Toast) {
        const toast = new bootstrap.Toast(toastElement, {
            autohide: true,
            delay: 3000
        });
        toast.show();
        
        // Hapus element setelah selesai
        toastElement.addEventListener('hidden.bs.toast', () => {
            toastElement.remove();
        });
    } else {
        // Fallback jika Bootstrap tidak tersedia
        toastElement.style.display = 'block';
        setTimeout(() => {
            toastElement.style.opacity = '0';
            setTimeout(() => {
                toastElement.remove();
            }, 300);
        }, 3000);
    }
}

    // Wishlist Button Toggle (bisa banyak tombol)
    document.querySelectorAll('.btn-wishlist').forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.replace('far', 'fas');
                this.style.color = '#ff5252';
            } else {
                icon.classList.replace('fas', 'far');
                this.style.color = '';
            }
        });
    });

    // Toggle Login / Sign Up Form
    const toggleLoginForm = document.getElementById('toggleLoginForm');
    const formSignup = document.getElementById('form-signup');
    const formLogin = document.getElementById('form-login');
    const modalTitle = document.getElementById('authModalLabel');

    if (toggleLoginForm) {
        toggleLoginForm.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (formSignup.classList.contains('d-none')) {
                formSignup.classList.remove('d-none');
                formLogin.classList.add('d-none');
                modalTitle.textContent = 'Create your account';
                toggleLoginForm.textContent = 'Sign in';
                toggleLoginForm.previousSibling.textContent = 'Already have an account? ';
            } else {
                formLogin.classList.remove('d-none');
                formSignup.classList.add('d-none');
                modalTitle.textContent = 'Login to your account';
                toggleLoginForm.textContent = 'Sign up';
                toggleLoginForm.previousSibling.textContent = 'Don\'t have an account? ';
            }
        });
    }

    // Make addToCart function global
    window.addToCart = addToCart;
});

function addToCart(name, price, image) {
  const product = { name, price, image };
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(product);
  localStorage.setItem('cart', JSON.stringify(cart));
  alert(`${name} has been added to your cart!`);
}

</script>

<script>
  function addToCart(name, price, image) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Cek apakah item sudah ada
    const existing = cart.find(item => item.name === name);
    if (existing) {
      existing.quantity += 1;
    } else {
      cart.push({
        name: name,
        price: price,
        image: image,
        quantity: 1
      });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert("Produk ditambahkan ke keranjang!");
  }
</script>


</body>
</html>