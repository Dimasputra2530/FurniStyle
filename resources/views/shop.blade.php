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
    <script src="{{ asset('js/popupdetail.js') }}"></script>
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
                                    <img src="{{ asset('/image shop/burebeto-chair.jpg') }}"  alt="BERUBETTO CHAIR" class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <h5>BERUBETTO CHAIR</h5>
                                    <p class="price">$139</p>
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
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="pagination-container">
                        <div class="pagination">
                            <a href="#" class="prev-page"><i class="fas fa-arrow-left"></i></a>
                            <div class="page-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <a href="#" class="next-page"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
    
    // Add to Cart Button Animation
    document.querySelector('.btn-add-cart')?.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-check me-2"></i>Added';
        this.classList.add('added');
        
        // Reset after 2 seconds
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-shopping-cart me-2"></i>Add to Cart';
            this.classList.remove('added');
        }, 2000);
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
</body>
</html>