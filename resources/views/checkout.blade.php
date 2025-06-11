<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniStyle - Order</title>
    <link rel="stylesheet" href="/css/checkout.css">
</head>

<body>

    <!-- Order Page Content -->
    <main class="main-content">
        <div class="container">
            <div class="order-header">
                <h2>Detail Pesanan</h2>
                <p>Lengkapi informasi di bawah untuk menyelesaikan pesanan Anda</p>
            </div>

            <div class="order-content">
                <!-- Order Summary -->
                <div class="order-summary">
                    <!-- Ganti bagian Ringkasan Pesanan ini -->
                    <div class="order-summary">
                        <h3>Ringkasan Pesanan</h3>
                        <div id="checkout-items"></div>

                        <div class="order-total">
                            <div class="total-row">
                                <span>Subtotal:</span>
                                <span id="subtotal">Rp. 0</span>
                            </div>
                            <div class="total-row">
                                <span>Ongkir:</span>
                                <span id="shipping">Rp. 50.000</span>
                            </div>
                            <div class="total-row final">
                                <span>Total:</span>
                                <span id="total">Rp. 0</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-total">
                        <div class="total-row">
                            <!-- <span>Subtotal:</span> -->
                            <!-- <span>Rp. 500.000</span> -->
                        </div>
                        <div class="total-row">
                            <!-- <span>Ongkir:</span> -->
                            <!-- <span>Rp. 50.000</span> -->
                        </div>
                        <div class="total-row final">
                            <!-- <span>Total:</span>
                            <span>Rp. 550.000</span> -->
                        </div>
                    </div>
                </div>

                <!-- Order Form -->
                <div class="order-form">
                    <h3>Informasi Pengiriman</h3>
                    <form id="orderForm" action="{{ route('submit.order') }}" method="POST">
                        @csrf
                        <input type="hidden" name="products" id="productsInput">

                        <div class="form-group">
                            <label for="fullName">Nama Lengkap</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">No. Telepon</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <textarea id="address" name="address" rows="3" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">Kota</label>
                                <input type="text" id="city" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="postalCode">Kode Pos</label>
                                <input type="text" id="postalCode" name="postalCode" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="notes">Catatan (Opsional)</label>
                            <textarea id="notes" name="notes" rows="2"></textarea>
                        </div>

                        <div class="payment-section">
                            <h4>Metode Pembayaran</h4>
                            <div class="payment-options">
                                <label class="payment-option">
                                    <input type="radio" name="payment" value="transfer" checked>
                                    <span>Transfer Bank BCA : 2311103064 </span>
                                </label>
                                <label class="payment-option">
                                    <input type="radio" name="payment" value="cod">
                                    <span>Bayar di Tempat (COD)</span>
                                </label>

                                </label>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-secondary" onclick="history.back()">Kembali</button>
                            <button type="submit" class="btn-primary">Pesan Sekarang</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </main>

    <script>
        // Quantity control
        document.querySelectorAll('.qty-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const isPlus = this.classList.contains('plus');
                const qtySpan = this.parentNode.querySelector('.qty');
                let qty = parseInt(qtySpan.textContent);

                if (isPlus) {
                    qty++;
                } else if (qty > 1) {
                    qty--;
                }

                qtySpan.textContent = qty;
                updateTotal(qty);
            });
        });

        function updateTotal(qty) {
            const basePrice = 500000;
            const shipping = 50000;
            const subtotal = basePrice * qty;
            const total = subtotal + shipping;

            document.querySelector('.total-row:nth-child(1) span:last-child').textContent = 'Rp. ' + subtotal.toLocaleString('id-ID');
            document.querySelector('.total-row.final span:last-child').textContent = 'Rp. ' + total.toLocaleString('id-ID');
        }

        // Form submission
        document.getElementById('orderForm').addEventListener('submit', function() {
            const cart = JSON.parse(localStorage.getItem("cart") || "[]");

            document.getElementById('productsInput').value = JSON.stringify(cart);
        });

        function formatCurrency(num) {
            return 'Rp. ' + Number(num).toLocaleString('id-ID');
        }

        function renderCheckoutItems() {
            const cart = JSON.parse(localStorage.getItem("cart") || "[]");
            const container = document.getElementById("checkout-items");

            if (cart.length === 0) {
                container.innerHTML = '<p>Keranjang kosong.</p>';
                return;
            }

            let subtotal = 0;
            let html = '';

            cart.forEach(item => {
                const totalItemPrice = item.price * item.quantity;
                subtotal += totalItemPrice;

                html += `
                <div class="order-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="item-info">
                        <h4>${item.name}</h4>
                        <p>${formatCurrency(item.price)}</p>
                        <div>Qty: ${item.quantity}</div>
                    </div>
                </div>
            `;
            });

            container.innerHTML = html;
            document.getElementById("subtotal").textContent = formatCurrency(subtotal);
            document.getElementById("total").textContent = formatCurrency(subtotal + 50000); // Ongkir
        }

        document.addEventListener("DOMContentLoaded", renderCheckoutItems);
    </script>
</body>

</html>