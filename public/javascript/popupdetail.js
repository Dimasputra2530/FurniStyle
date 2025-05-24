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