<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/cart.css">
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

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
                <input type="text" placeholder="Search items..." />
                <button><i class="fas fa-search"></i></button>
              </div>
              <a href="cart.html" class="icon-link cart-icon">
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

     <!-- Akhir Header -->
  <div class="container cart-container">
    <h2 class="mb-4">Your Shopping Cart</h2>
    <div id="cart-items"></div>
    <div class="cart-summary" id="cart-summary"></div>
  </div>

  <!-- Footer Section -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h3 class="footer-title">FurniStyle</h3>
            <p class="footer-text">
              Beautiful furniture for beautiful homes. Quality design that lasts
              a lifetime.
            </p>
            <div class="social-links">
              <a href="#" class="text-decoration-none"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#" class="text-decoration-none"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="#" class="text-decoration-none"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="#" class="text-decoration-none"
                ><i class="fab fa-pinterest-p"></i
              ></a>
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
              <li>
                <a href="#" class="text-decoration-none">Terms & Conditions</a>
              </li>
              <li>
                <a href="#" class="text-decoration-none">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h3 class="footer-title">CONTACT</h3>
            <ul class="footer-contact">
              <li>
                <i class="fas fa-map-marker-alt"></i> Jln. Pangeran 12,
                Purwokerto
              </li>
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

  <script>
    function formatCurrency(num) {
        return '$' + Number(num).toFixed(2);
    }

    function renderCart() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartContainer = document.getElementById('cart-items');
        const summaryContainer = document.getElementById('cart-summary');

        cartContainer.innerHTML = '';
        summaryContainer.innerHTML = '';

        if (cart.length === 0) {
            cartContainer.innerHTML = '<p class="empty-message">Your cart is currently empty.</p>';
            return;
        }

        let totalPrice = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            totalPrice += itemTotal;

            const itemHTML = `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.name}</div>
                        <div>Qty: ${item.quantity}</div>
                        <div class="cart-item-price">${formatCurrency(itemTotal)}</div>
                    </div>
                    <button class="btn btn-sm btn-danger" onclick="removeItem('${item.name}')">Remove</button>
                </div>
            `;

            cartContainer.innerHTML += itemHTML;
        });

        summaryContainer.innerHTML = `
            <h5>Total: ${formatCurrency(totalPrice)}</h5>
            <button class="btn-order-now" onclick="orderNow()">Order Now</button>
        `;
    }

    function removeItem(name) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = cart.filter(item => item.name !== name);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
    }

    function orderNow() {
        const cart = JSON.parse(localStorage.getItem("cart") || "[]");

        if (cart.length === 0) {
            alert("Keranjang kosong.");
            return;
        }

        console.log("Data cart yang dikirim:", cart);
        alert(JSON.stringify(cart));

        fetch("/orders", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ cart: cart })
        })
        .then(res => {
            if (!res.ok) {
                throw new Error("Server error");
            }
            return res.json();
        })
        .then(data => {
            alert(data.message);
            localStorage.removeItem("cart");
            location.reload();
        })
        .catch(err => {
            console.error(err);
            alert("Terjadi kesalahan saat mengirim pesanan.");
        });
    }

    document.addEventListener("DOMContentLoaded", renderCart);
</script>

</body>
</html>