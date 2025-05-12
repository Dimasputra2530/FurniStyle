<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>FurniStyle - Design Your Space</title>
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Shop.html">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
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
                        <a href="#" class="icon-link">
                            <i class="fas fa-heart"></i>
                        </a>
                        <a href="#" class="icon-link cart-icon">
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

    <!-- main content -->
    <main>
        <!-- hero section -->
        <section id="hero" class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1>Design Your Space</h1>
                    <p>Find inspiration, quality furniture, and complete your dream home</p>   
                </div>
            </div>
        </section>

        <!-- shop by categorie section-->
        <section id="categories" class="section">
            <div class="container">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2 class="section-title">SHOP BY CATEGORY</h2>
                    <div class="content-right">
                        <p>Discover our beautiful collection of furniture to make your home unique and stylish</p>
                        <a href="#" class="view-all-link">VIEW ALL CATEGORIES <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="row categories-grid">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 4 (1).png') }}" alt="Living Room" class="img-fluid">
                            <div class="category-name">LIVING ROOM</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 6 (1).png') }}" alt="Kitchen" class="img-fluid">
                            <div class="category-name">KITCHEN</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 5 (1).png') }}" alt="Bedroom" class="img-fluid">
                            <div class="category-name">BEDROOM</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 9 (1).png') }}" alt="Home Office" class="img-fluid">
                            <div class="category-name">HOME OFFICE</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 8.png') }}" alt="Storage" class="img-fluid">
                            <div class="category-name">STORAGE</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="category-card">
                            <img src="{{ asset('image/Rectangle 9 (1).png') }}" alt="Utility" class="img-fluid">
                            <div class="category-name">UTILITY</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- top product section -->
        <section id="top-products" class="section">
            <div class="container">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2 class="section-title">TOP PRODUCTS</h2>
                    <a href="#" class="view-all-link">VIEW ALL PRODUCTS <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>

                <div class="row products-slider">
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/metin-ozer-20lYyolI8Ts-unsplash.jpg') }}" alt="Wooden Chair" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Wooden Chair</h3>
                                <div class="product-price">Rp 2.990.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/ansuman-mishra-5kza-6yGHnk-unsplash.jpg') }}" alt="Modern Sofa" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Modern Sofa</h3>
                                <div class="product-price">$599</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/annie-spratt-CpF8oOfwuoY-unsplash.jpg') }}" alt="Table Lamp" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Table Lamp</h3>
                                <div class="product-price">$129</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/cgxl-media-7_HUWOnPoA4-unsplash.jpg') }}" alt="Office Chair" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Office Chair</h3>
                                <div class="product-price">$249</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/Minimalist C-Shaped Sofa Side Table – Modern Space-Saving End Table for Living Rooms.jpg') }}" alt="Coffee Table" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Coffee Table</h3>
                                <div class="product-price">$349</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('image/How to Make DIY Floating Shelves for a Minimalist Home 🧰✨.jpg') }}" alt="Wall Shelf" class="img-fluid">
                                <div class="wishlist-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">Wall Shelf</h3>
                                <div class="product-price">$179</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- season section -->
        <section id="season" class="section">
            <div class="container">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2 class="section-title">SHOP THE SEASON</h2>
                    <a href="#" class="view-all-link">EXPLORE OUR COLLECTION <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>

                <div class="row season-showcase">
                    <div class="col-md-6 mb-4">
                        <div class="season-image-large">
                            <img src="{{ asset('image/spacejoy-umAXneH4GhA-unsplash.jpg') }}" alt="Living Room Season" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="season-image-large">
                            <img src="{{ asset('image/sven-brandsma-3hEGHI4b4gg-unsplash.jpg') }}" alt="Kitchen Season" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="season-navigation">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </section>

        <!-- about us section -->
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="section-title">ABOUT US</h2>
                        <p class="about-text">
                            At FurniStyle, we pride ourselves on creating beautiful living spaces that reflect your personal style and meet your functional needs. Our selection of high-quality furniture combines timeless design with innovative features, ensuring both aesthetic appeal and practical utility for your home.
                        </p>
                        <a href="#" class="button-outline">EXPLORE OUR STORY</a>
                    </div>
                    <div class="col-md-7">
                        <div class="about-image">
                            <img src="{{ asset('image/albero-furniture-bratislava-j59xzCv8Hos-unsplash.jpg') }}" alt="About FurniStyle" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- furnistyle section -->
        <section id="furnistyle" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="image-grid">
                            <div class="image-grid-item">
                                <img src="{{ asset('image/albero-furniture-bratislava-75yyUu7BVlo-unsplash.jpg') }}" alt="FurniStyle Interior 1" class="img-fluid">
                            </div>
                            <div class="image-grid-item">
                                <img src="{{ asset('image/albero-furniture-bratislava-xRuHNSq5rD0-unsplash.jpg') }}" alt="FurniStyle Interior 2" class="img-fluid">
                            </div>
                            <div class="image-grid-item">
                                <img src="{{ asset('image/albero-furniture-bratislava-u88zDvr5V6g-unsplash.jpg') }}" alt="FurniStyle Interior 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="furnistyle-content">
                            <h2 class="highlight-title">Furni<span>Style</span></h2>
                            <p class="highlight-text">
                                Crafting perfect ambiance with carefully designed furniture that transforms your home into a sanctuary of comfort and beauty. Our designs blend functionality with aesthetic appeal, creating spaces that are both practical and visually captivating.
                            </p>
                            <a href="#" class="explore-link">EXPLORE MORE <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- furniture to bring home to life section -->
        <section id="bring-home" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title">FURNITURE TO BRING HOME TO LIFE</h2>
                        <a href="#" class="button-filled">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq section -->
        <section id="faq" class="section faq-section">
            <div class="container">
                <h2 class="section-title">FREQUENTLY ASKED QUESTION</h2>
                
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            HOW TO ORDER
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>You can place an order through our website by selecting products, adding them to your cart, and proceeding to checkout. Alternatively, you can call our customer service line at 1-800-FURNISTYLE.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            HOW TO CHOOSE STYLES
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Browse our curated collections or use our style quiz to find furniture that matches your taste and needs. Our design consultants are also available to help.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            HOW PAYMENT WORKS?
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>We accept all major credit cards, PayPal, and offer financing options. Payment is processed securely at checkout.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            WHAT CAN I DO AFTER PAYMENT?
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>After payment, you'll receive an order confirmation with tracking information. You can track your order status in your account dashboard.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            HOW IS YOUR RETURN POLICY?
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>We offer a 30-day return policy for most items. Returns must be in original condition with packaging. Custom pieces may have different return policies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- newslatter section -->
        <section id="newsletter" class="section newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="newsletter-title">SUBSCRIBE TO<br>OUR NEWSLETTER</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter-form">
                            <input type="email" placeholder="YOUR EMAIL ADDRESS">
                            <button class="subscribe-btn">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">SHOP</h3>
                    <ul class="footer-links">
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Home Office</a></li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">LINKS</h3>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
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


<!-- sign up / sign in -->
<div class="modal fade auth-modal" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="row g-0">
                <div class="col-md-7">
                    <div class="auth-form-container">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="auth-title" id="authModalLabel">Create your account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <button class="btn btn-outline-secondary w-100 mb-4 google-btn">
                            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/icons/google.svg" alt="Google" width="20" height="20">
                            Login with Google
                        </button>
                        
                        <div class="divider">
                            <span>or</span>
                        </div>
                        
                        <form id="signupForm" class="mt-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="terms">
                                <label class="form-check-label" for="terms">
                                    I agree to all Terms, Privacy Policy and Fees
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Sign Up</button>
                        </form>
                        
                        <p class="text-center mt-4 mb-0">
                            Already have an account? <a href="#" id="toggleLoginForm" class="link-primary">Log in</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <div class="auth-image-container h-100">
                        <div class="auth-image-content text-white p-4 d-flex flex-column justify-content-end">
                            <h2 class="fs-4 mb-3">Discovering the Best<br>Furniture for Your Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- bootstrap js bundle sama popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- javascript kustom buat elemen interaktif -->
    <script>
 document.addEventListener('DOMContentLoaded', function() {
            // pilih ikon user di navbar
            const userIcon = document.querySelector('.profile-circle');
            
            // event listener buat tampilkan modal pas ikon user diklik
            userIcon.addEventListener('click', function(e) {
                e.preventDefault();
                const authModal = new bootstrap.Modal(document.getElementById('authModal'));
                authModal.show();
            });
            
            // toggle antara form Sign Up dan Login
            const toggleLink = document.getElementById('toggleLoginForm');
            toggleLink.addEventListener('click', function(e) {
                e.preventDefault();
                const authTitle = document.getElementById('authModalLabel');
                const signupForm = document.getElementById('signupForm');
                
                if (authTitle.innerText === 'Create your account') {
                    authTitle.innerText = 'Login to your account';
                    toggleLink.innerText = 'Sign up';
                    // ubah ke form login
                    signupForm.innerHTML = `
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                        </div>
                        <div class="mb-4 d-flex justify-content-end">
                            <a href="#" class="small">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Login</button>
                    `;
                } else {
                    authTitle.innerText = 'Create your account';
                    toggleLink.innerText = 'Log in';
                    // kembali ke form sign up
                    signupForm.innerHTML = `
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terms">
                            <label class="form-check-label" for="terms">
                                I agree to all Terms, Privacy Policy and Fees
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Sign Up</button>
                    `;
                }
            });
        });

        // javascript buat toggle accordion FAQ
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-question');
            
            faqItems.forEach(item => {
                item.addEventListener('click', function() {
                    const parent = this.parentElement;
                    parent.classList.toggle('active');
                    
                    const icon = this.querySelector('.faq-toggle i');
                    if (parent.classList.contains('active')) {
                        icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
                    } else {
                        icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
                    }
                });
            });
        });
    </script>
</body>
</html>