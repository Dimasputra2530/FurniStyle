 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FurniStyle - Design Your Space</title>
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/about.css">
    </head>
    <body>
        <!-- Header & Navigation -->
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
                            <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/about') }}">ABOUT</a>
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
        <main>
            <!-- About Header Section -->
            <section class="about-header text-center py-5">
                <div class="container">
                    <h1 class="display-4 fw-bold mb-4">ABOUT US.</h1>
                </div>
            </section>

            <!-- About Content Section -->
            <section class="about-content py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar mb-4">
                                <h5 class="sidebar-title">About us.</h5>
                                <ul class="sidebar-nav">
                                    <li><a href="#team">Our team.</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="about-story">
                                <p>FurniStyle is a leading online platform specializing in high quality furniture designed to enhance your living spaces. Our mission is to provide a diverse range of stylish, durable, and functional pieces that cater to modern lifestyles while reflecting timeless elegance. With a strong commitment to quality, we collaborate with skilled craftsmen and reputable manufacturers to ensure that every product meets our rigorous standards. Our collection spans various styles, from contemporary to classic, allowing you to find the perfect fit for your home.</p>
                                
                                <p>At FurniStyle, we believe that furniture is more than just functional, it is an expression of your personality. Our dedicated team, composed of creative designers and customer service professionals, is driven by a passion for innovation and client satisfaction. We strive to deliver not only exceptional products but also a seamless and enjoyable shopping experience. Transform your space with FurniStyle, where quality meets style.</p>
                            </div>

                            <!-- Image Section -->
                            <div class="office-img my-5">
                                <img src="{{ asset('image about/worker.jpg') }}" alt="Office Team Working" class="img-fluid rounded shadow">
                            </div>

                            <!-- Quote Section -->
                            <div class="quote-section row align-items-center my-5 gx-4">
                                <div class="col-md-6">
                                    <blockquote class="blockquote p-4 rounded bg-light">
                                        <p class="mb-0">"Our work does make sense only if it is a faithful witness of his time."</p>
                                        <footer class="blockquote-footer mt-3">Jean-Philippe Nuel, <cite title="Source Title">Director</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('image about/designer.jpg') }}" alt="Designer at Work" class="img-fluid rounded shadow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section -->
            <section id="team" class="team-section py-5 bg-light">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-md-5">
                            <div class="team-images">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <img src="{{ asset('image about/romy.jpg') }}" alt="Team Member 1" class="img-fluid rounded shadow team-img">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('image about/akmal.jpg') }}" alt="Team Member 2" class="img-fluid rounded shadow team-img">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('image about/fahri.jpg') }}" alt="Team Member 3" class="img-fluid rounded shadow team-img">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('image about/dimas.jpg') }}" alt="Team Member 4" class="img-fluid rounded shadow team-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="display-4 fw-bold mb-4">THE TEAM.</h2>
                            <p class="mb-4">At FurniStyle, our team is more than just a group of professionals; we are a community of passionate individuals dedicated to transforming spaces into stylish and comfortable environments. Our creative designers, skilled craftsmen, and customer service experts work hand in hand to deliver high quality furniture and a seamless shopping experience.</p>
                            <p class="mb-5">We believe that great design comes from collaboration and innovation. Our team continuously explores new trends and ideas to offer unique, timeless, and functional pieces that suit diverse tastes. At FurniStyle, we are not just building furniture, we are crafting experiences that make your house feel like home.</p>
                            
                            <!-- Stats Section -->
                            <div class="stats-section">
                                <div class="row text-center g-4">
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card p-3">
                                            <h3 class="fw-bold">600K+</h3>
                                            <p class="small text-muted">Designed With Sustainability At The Core</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card p-3">
                                            <h3 class="fw-bold">700K+</h3>
                                            <p class="small text-muted">Through Eco-Friendly Production Practices</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card p-3">
                                            <h3 class="fw-bold">1.2M</h3>
                                            <p class="small text-muted">Transformed With Custom-Made Furnishings</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card p-3">
                                            <h3 class="fw-bold">110+</h3>
                                            <p class="small text-muted">Delivered With Quality & Care</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Custom JS -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile Menu Toggle
                const navbarToggler = document.querySelector('.navbar-toggler');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                
                if (navbarToggler) {
                    navbarToggler.addEventListener('click', function() {
                        navbarCollapse.classList.toggle('show');
                    });
                }
                
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