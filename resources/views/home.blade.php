<!DOCTYPE html>
<html lang="en, id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniStyle - Design Your Space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <img src="{{ asset('image/erasebg-transformed (2).png') }}" alt="Furniture">
</head>
<body>
    <header>
        <div class="hero">
            <div class="navbar">
                <div class="logo"><a href="">Furni<span>Style.</span></a></div>
                <ul class="links">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#sale">Sale</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="nav-icons">
                    <a href="#" class="icon-btn"><i class="fa-solid fa-user"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="content-hero">
                <h1>Design Your <span>Space</span></h1>
                <p>Bringing Your Dream Space to Life with Style and Comfort</p>
            </div>

            <div class="dropdown-menu">
                <li><a href="#hero">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#sale">Sale</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown-icons">
                    <a href="#" class="icon-btn"><i class="fa-solid fa-user"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </div>
        </div>
    </header>

    <!-- Shop By Category Section -->
    <section id="shop" class="shop-categories">
        <div class="container">
            <h2 class="section-title">SHOP BY CATEGORY</h2>
            <div class="categories-grid">
                <div class="category-item living-room">
                    <img src="/image/Rectangle 4.png" alt="Living Room">
                    <div class="category-label">LIVING ROOM</div>
                </div>
                <div class="category-item kitchen">
                    <img src="/image/Rectangle 6.png" alt="Kitchen">
                    <div class="category-label">KITCHEN</div>
                </div>
                <div class="category-item office">
                    <img src="/image/Rectangle 9.png" alt="Office">
                    <div class="category-label">OFFICE</div>
                </div>
                <div class="category-item bedroom">
                    <img src="/image/Rectangle 5.png" alt="Bedroom">
                    <div class="category-label">BEDROOM</div>
                </div>
                <div class="category-item laundry">
                    <img src="/image/Rectangle 7.png" alt="Laundry">
                    <div class="category-label">LAUNDRY</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Products Section -->
    <section class="top-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">TOP PRODUCTS</h2>
                <a href="#" class="explore-link">EXPLORE COLLECTION →</a>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-07_08-41-15-819 1.png" alt="Chair">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Chair</h3>
                        <p class="product-price">$149</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-37-50-496 1.png" alt="Sofa">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Sofa</h3>
                        <p class="product-price">$399</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-05_08-23-29-935 1.png" alt="Lamp">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Lamp</h3>
                        <p class="product-price">$89</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-34-00-527 1.png" alt="Modern Chair">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Chair</h3>
                        <p class="product-price">$249</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-27-53-954 1.png" alt="Table">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Table</h3>
                        <p class="product-price">$129</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop The Season Section -->
    <section id="sale" class="shop-season">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">SHOP THE SEASON</h2>
                <a href="#" class="explore-link">EXPLORE ALL ITEMS →</a>
            </div>
            <div class="season-grid">
                <div class="season-item">
                    <img src="image/spacejoy-IH7wPsjwomc-unsplash 1.png" alt="Seasonal Living Room">
                </div>
                <div class="season-item">
                    <img src="image/josh-hemsley-7QOKbETFg94-unsplash 1.png" alt="Seasonal Kitchen">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about-us">
        <div class="container">
            <div class="about-container">
                <div class="about-text-box">
                    <h2 class="about-title">ABOUT US</h2>
                    <p>At Furniture you will find well-designed furniture, home décor and accessories that are functional and affordable. We have everything from kitchens and mattresses to a large selection of modern bedroom furniture, sofas and more.</p>
                    <div class="explore-link-container">
                        <span class="explore-text">EXPLORE COLLECTION</span>
                        <a href="#" class="explore-button">→</a>
                    </div>
                </div>
                <div class="about-image">
                    <img src="image/john-tuesday-9K9mzLxOuXg-unsplash.jpg" alt="Modern Interior">
                </div>
                <div class="bottom-images">
                    <div class="lamp-image">
                        <img src="image/robby-mccullough-BiOE7iBX9M8-unsplash 1.png" alt="Modern Lamp">
                    </div>
                    <div class="brand-description">
                        <div class="brand-name">
                            <h2>Furni<span class="style-text">Style</span></h2>
                        </div>
                        <p>Realize your dream home furniture with the help of personalized furniture design and innovative products tailored to your style, space, and budget.</p>
                        <p>Whether you're furnishing a new home, renovating an existing space, the process of selecting perfect furniture pieces can be both enjoyable and challenging.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW TO ORDER</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW TO CHOOSE FINISH</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>WHAT PAYMENT METHODS YOU ACCEPT?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW LONG DOES DELIVERY TAKE?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>WHAT IS YOUR RETURN POLICY?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2 class="newsletter-title">SUBSCRIBE TO OUR NEWSLETTER</h2>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-links">
                <div class="footer-col">
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Laundry</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <ul>
                        <li>info@furnistyle.com</li>
                        <li>+1 (800) 123-4567</li>
                        <li>123 Design Street</li>
                        <li>New York, NY 10001</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 FurniStyle. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for dropdown menu functionality -->
    <script>
        const toggleBtn = document.querySelector('.toggle-btn');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        toggleBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('open');
        });
    </script>
</body>
</html>