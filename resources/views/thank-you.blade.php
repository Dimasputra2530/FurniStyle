<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - FurniStyle</title>
    <link rel="stylesheet" href="css/thank-you.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <main class="main">
        <div class="container">
            <div class="thank-you-card">
                <div class="success-icon">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="12" fill="#7CB342"/>
                        <path d="M8 12.5L10.5 15L16 9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <h1 class="title">Pesanan Berhasil Diterima!</h1>
                
                <p class="subtitle">Terima kasih telah berbelanja di FurniStyle</p>
                
                <div class="message">
                    <p>Kami akan segera memproses pesanan Anda dan menghubungi Anda untuk konfirmasi detail pengiriman.</p>
                </div>

                <div class="order-info">
                    <div class="info-item">
                        <span class="label">Status Pesanan:</span>
                        <span class="value">Sedang Diproses</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Estimasi Pengiriman:</span>
                        <span class="value">1-3 Hari Kerja</span>
                    </div>
                </div>

                <div class="actions">
                    <a href="{{ url('/home') }}" class="btn btn-primary">Kembali ke Beranda</a>
                    <a href="{{ url('/shop') }}" class="btn btn-secondary">Lanjut Belanja</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>