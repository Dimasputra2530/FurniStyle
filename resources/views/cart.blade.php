<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/cart.css">
    <script src="{{ asset('js/popupdetail.js') }}"></script>
</head>
<body>
    <div class="container py-4">
      <!-- Back Button -->
        <div class="mb-4">
        <a href="javascript:void(0)" onclick="goBack()" class="back-button">
            <i class="fas fa-arrow-left me-2"></i> Back
        </a>
    </div>

        
        <!-- Shopping Cart Title -->
        <h2 class="shopping-cart-title">Shopping Cart</h2>
        
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" class="search-input" placeholder="BERUBETTO CHAIR">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        
        <!-- LAMP Category -->
        <div class="product-container">
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="lampCategory">
                </div>
                <h5 class="category-title mb-0 ms-2">Lamp</h5>
            </div>
            
            <!-- Product Table Header -->
            <div class="row product-header d-none d-md-flex">
                <div class="col-md-6">Product</div>
                <div class="col-md-2 text-center">Unit Price</div>
                <div class="col-md-1 text-center">Quantity</div>
                <div class="col-md-2 text-center">Total Price</div>
                <div class="col-md-1 text-center">Active</div>
            </div>
            
            <!-- EGGHEAD LAMP -->
            <div class="row product-row">
                <!-- Product Info (Left Side) -->
                <div class="col-md-6 product-info d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="eggheadLamp">
                    </div>
                    <img src="{{ asset('/image shop/egghead-lamp.png') }}" alt="Egghead Lamp" class="product-image me-3">
                    <div>
                        <div class="product-name">EGGHEAD LAMP</div>
                        <div class="variation">Variation: Gray</div>
                    </div>
                </div>
                
                <!-- Unit Price -->
                <div class="col-md-2 text-md-center">
                    <div class="d-md-none text-secondary mb-1">Unit Price:</div>
                    <div class="price">$99</div>
                </div>
                
                <!-- Quantity Controls -->
                <div class="col-md-1 text-md-center quantity-controls">
                    <div class="d-md-none text-secondary mb-1">Quantity:</div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn-quantity">-</button>
                        <input type="text" class="quantity-input" value="2">
                        <button class="btn-quantity">+</button>
                    </div>
                </div>
                
                <!-- Total Price -->
                <div class="col-md-2 text-md-center product-price">
                    <div class="d-md-none text-secondary">Total:</div>
                    <div class="price">$198</div>
                </div>
                
                <!-- Hapus Button -->
                <div class="col-md-1 text-md-center">
                    <a href="#" class="btn-hapus">Hapus</a>
                    <div class="similar-products mt-1">similar products ▼</div>
                </div>
            </div>
            
            <!-- KUREHA CANDLE -->
            <div class="row product-row">
                <!-- Product Info (Left Side) -->
                <div class="col-md-6 product-info d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="kurehaCandle">
                    </div>
                    <img src="{{ asset('/image shop/kureha-candle.png') }}" alt="Kureha Candle" class="product-image me-3">
                    <div>
                        <div class="product-name">KUREHA CANDLE</div>
                        <div class="variation">Variation: Gold</div>
                    </div>
                </div>
                
                <!-- Unit Price -->
                <div class="col-md-2 text-md-center">
                    <div class="d-md-none text-secondary mb-1">Unit Price:</div>
                    <div class="price">$150</div>
                </div>
                
                <!-- Quantity Controls -->
                <div class="col-md-1 text-md-center quantity-controls">
                    <div class="d-md-none text-secondary mb-1">Quantity:</div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn-quantity">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="btn-quantity">+</button>
                    </div>
                </div>
                
                <!-- Total Price -->
                <div class="col-md-2 text-md-center product-price">
                    <div class="d-md-none text-secondary">Total:</div>
                    <div class="price">$150</div>
                </div>
                
                <!-- Hapus Button -->
                <div class="col-md-1 text-md-center">
                    <a href="#" class="btn-hapus">Hapus</a>
                    <div class="similar-products mt-1">similar products ▼</div>
                </div>
            </div>
            
            <!-- Promotion -->
            <div class="promotion-container">
                <i class="fas fa-ticket-alt promotion-icon"></i>
                <span class="voucher-text">discount vouchers available up to 50%</span>
                <a href="#" class="learn-more">Other Vouchers</a>
            </div>
            
            <!-- Shipping Promotion -->
            <div class="promotion-container">
                <i class="fas fa-truck promotion-icon"></i>
                <span class="voucher-text">Free Shipping up to $10 with min. spend $0; Free Shipping up to $500 with min. spend $300</span>
                <a href="#" class="learn-more">learn more</a>
            </div>
        </div>
        
        <!-- CHAIR Category -->
        <div class="product-container">
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="chairCategory">
                </div>
                <h5 class="category-title mb-0 ms-2">CHAIR</h5>
            </div>
            
            <!-- BERUBETTO CHAIR -->
            <div class="row product-row">
                <!-- Product Info (Left Side) -->
                <div class="col-md-6 product-info d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="berubettoChair">
                    </div>
                    <img src="{{ asset('/image shop/burebeto-chair.jpg') }}" alt="Berubetto Chair" class="product-image me-3">
                    <div>
                        <div class="product-name">BERUBETTO CHAIR</div>
                        <div class="variation">Variation: Brown</div>
                    </div>
                </div>
                
                <!-- Unit Price -->
                <div class="col-md-2 text-md-center">
                    <div class="d-md-none text-secondary mb-1">Unit Price:</div>
                    <div class="price">$139</div>
                </div>
                
                <!-- Quantity Controls -->
                <div class="col-md-1 text-md-center quantity-controls">
                    <div class="d-md-none text-secondary mb-1">Quantity:</div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn-quantity">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="btn-quantity">+</button>
                    </div>
                </div>
                
                <!-- Total Price -->
                <div class="col-md-2 text-md-center product-price">
                    <div class="d-md-none text-secondary">Total:</div>
                    <div class="price">$139</div>
                </div>
                
                <!-- Hapus Button -->
                <div class="col-md-1 text-md-center">
                    <a href="#" class="btn-hapus">Hapus</a>
                    <div class="similar-products mt-1">similar products ▼</div>
                </div>
            </div>
            
            <!-- Promotion -->
            <div class="promotion-container">
                <i class="fas fa-ticket-alt promotion-icon"></i>
                <span class="voucher-text">discount vouchers available up to 50%</span>
                <a href="#" class="learn-more">Other Vouchers</a>
            </div>
            
            <!-- Shipping Promotion -->
            <div class="promotion-container">
                <i class="fas fa-truck promotion-icon"></i>
                <span class="voucher-text">Free Shipping up to $10 with min. spend $0; Free Shipping up to $500 with min. spend $300</span>
                <a href="#" class="learn-more">learn more</a>
            </div>
        </div>
        
        <!-- SOFA Category -->
        <div class="product-container">
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sofaCategory">
                </div>
                <h5 class="category-title mb-0 ms-2">SOFA</h5>
            </div>
            
            <!-- KUZAN SOFA -->
            <div class="row product-row">
                <!-- Product Info (Left Side) -->
                <div class="col-md-6 product-info d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="kuzanSofa">
                    </div>
                    <img src="{{asset('/image shop/kuzan-sofa.png') }}" alt="Kuzan Sofa" class="product-image me-3">
                    <div>
                        <div class="product-name">KUZAN SOFA</div>
                        <div class="variation">Variation: Brown</div>
                    </div>
                </div>
                
                <!-- Unit Price -->
                <div class="col-md-2 text-md-center">
                    <div class="d-md-none text-secondary mb-1">Unit Price:</div>
                    <div class="price">$200</div>
                </div>
                
                <!-- Quantity Controls -->
                <div class="col-md-1 text-md-center quantity-controls">
                    <div class="d-md-none text-secondary mb-1">Quantity:</div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn-quantity">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="btn-quantity">+</button>
                    </div>
                </div>
                
                <!-- Total Price -->
                <div class="col-md-2 text-md-center product-price">
                    <div class="d-md-none text-secondary">Total:</div>
                    <div class="price">$200</div>
                </div>
                
                <!-- Hapus Button -->
                <div class="col-md-1 text-md-center">
                    <a href="#" class="btn-hapus">Hapus</a>
                    <div class="similar-products mt-1">similar products ▼</div>
                </div>
            </div>
            
            <!-- Promotion -->
            <div class="promotion-container">
                <i class="fas fa-ticket-alt promotion-icon"></i>
                <span class="voucher-text">discount vouchers available up to 50%</span>
                <a href="#" class="learn-more">Other Vouchers</a>
            </div>
            
            <!-- Shipping Promotion -->
            <div class="promotion-container">
                <i class="fas fa-truck promotion-icon"></i>
                <span class="voucher-text">Free Shipping up to $10 with min. spend $0; Free Shipping up to $500 with min. spend $300</span>
                <a href="#" class="learn-more">learn more</a>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="pagination-container">
            <a href="#" class="back-button">
                <i class="fas fa-arrow-left"></i>
            </a>
            
            <div class="dot-container">
                <span class="pagination-dot"></span>
                <span class="pagination-dot active"></span>
                <span class="pagination-dot"></span>
                <span class="pagination-dot"></span>
            </div>
            
            <a href="#" class="back-button">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- buat tombol back -->
    <script>
    function goBack() {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        // Fallback ke halaman default
        window.location.href = '/products';
    }
}
</script>
</body>
</html>