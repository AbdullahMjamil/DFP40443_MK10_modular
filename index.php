<?php
session_start();

$menu = $_GET['menu'] ?? 'utama';

require 'data/products.php';

if ($menu === 'utama') {
    $products = [
        ['id' => 1, 'nama' => 'Kuih Semperit', 'gambar' => 'kuih_semperit.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 17.00, 'besar' => 34.00]],
        ['id' => 2, 'nama' => 'Biskut Mazola', 'gambar' => 'biskut_mazola.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 20.00, 'besar' => 40.00]],
        ['id' => 3, 'nama' => 'Buah Pinggang', 'gambar' => 'buah_pinggang.jpg', 'harga' => ['pek_mini' => 2.00, 'kecil' => 22.00, 'besar' => 44.00]],
        ['id' => 4, 'nama' => 'Tart Nanas', 'gambar' => 'tart_nanas.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 25.00, 'besar' => 50.00]],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biskut Klasik - Utama</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">
        <style>
            .page-body { font-family: 'Questrial', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; min-height: 100vh; display: flex; flex-direction: column; box-sizing: border-box; }
            .container { max-width: 1200px; margin: 0 auto; flex: 1; width: 100%; }
            .header-wrapper { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background-color: #333; padding: 20px; border-radius: 8px; }
            .site-title { font-family: 'Imperial Script', cursive; font-size: 4.5rem; color: #fff; margin: 0; padding: 0; line-height: 1; }
            .nav-menu { display: flex; gap: 20px; align-items: center; }
            .nav-link { text-decoration: none; color: #fff; font-weight: normal; font-size: 1.4rem; }
            .nav-link:hover { color: #e44d26; }
            .nav-link.active { color: #e44d26; border-bottom: 2px solid #e44d26; }
            .page-title { color: #333; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-align: center; }
            .gallery-row { display: flex; justify-content: center; gap: 20px; margin-top: 30px; flex-wrap: wrap; }
            .gallery-thumb { width: 150px; height: auto; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
            .instructions-section { margin-top: 40px; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
            .instructions-section h3 { margin-top: 0; color: #c63816; font-size: 1.5rem; }
            .instructions-section p { line-height: 1.7; color: #555; max-width: 800px; margin-left: auto; margin-right: auto; font-size: 1.1rem; }
            .main-footer { background-color: #333; text-align: center; margin-top: 30px; color: #fff; padding: 20px; border-radius: 8px; }
            @media print { .header-wrapper, .main-footer, .action-buttons, .nav-menu { display: none !important; } .page-body { background-color: #fff; padding: 0; } .container { width: 100%; max-width: 100%; margin: 0; } }
        </style>
    </head>
    <body class="page-body">
        <div class="container">
            <div class="header-wrapper">
                <h2 class="site-title">Biskut Klasik</h2>
                <nav class="nav-menu">
                    <a href="index.php?menu=utama" class="nav-link active">Utama</a>
                    <a href="index.php?menu=tempah" class="nav-link">Tempah</a>
                    <a href="index.php?menu=invois" class="nav-link">Invois</a>
                </nav>
            </div>
            <h1 class="page-title">Selamat Datang</h1>
            <div class="gallery-row">
                <?php foreach ($products as $produk): ?>
                    <img src="gambar/<?= htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama']) ?>" class="gallery-thumb">
                <?php endforeach; ?>
            </div>
            <div class="instructions-section">
                <h3>Cara Membuat Tempahan</h3>
                <p>
                    Selamat datang ke Biskut Klasik! Untuk membuat tempahan, sila ikuti langkah-langkah mudah ini. Mula-mula, klik pada menu <strong>Tempah</strong> di bahagian atas. Isikan kuantiti biskut yang anda inginkan dan masukkan nama anda, kemudian klik butang <strong>Teruskan</strong>. Invois akan dipaparkan secara automatik. Sila klik butang <strong>Cetak</strong> untuk mencetak invois tersebut. Invois ini perlu diserahkan kepada kami semasa membuat tempahan. Bayaran boleh dibuat secara tunai atau imbasan Kod QR semasa hari pengambilan tempahan. Terima kasih!
                </p>
            </div>
        </div>
        <footer class="main-footer">&copy; 2026 Sabri bin Saep</footer>
    </body>
    </html>
    <?php
} elseif ($menu === 'tempah') {
    $products = [
        ['id' => 1, 'nama' => 'Kuih Semperit', 'gambar' => 'kuih_semperit.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 17.00, 'besar' => 34.00]],
        ['id' => 2, 'nama' => 'Biskut Mazola', 'gambar' => 'biskut_mazola.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 20.00, 'besar' => 40.00]],
        ['id' => 3, 'nama' => 'Buah Pinggang', 'gambar' => 'buah_pinggang.jpg', 'harga' => ['pek_mini' => 2.00, 'kecil' => 22.00, 'besar' => 44.00]],
        ['id' => 4, 'nama' => 'Tart Nanas', 'gambar' => 'tart_nanas.png', 'harga' => ['pek_mini' => 2.00, 'kecil' => 25.00, 'besar' => 50.00]],
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pelanggan = isset($_POST['nama_pelanggan']) ? htmlspecialchars(trim($_POST['nama_pelanggan'])) : "Pelanggan";
        $tempahan_input = isset($_POST['tempahan']) ? $_POST['tempahan'] : [];
        $item_tempahan = [];
        $jumlah_besar = 0;

        foreach ($tempahan_input as $produk_id => $saiz_list) {
            $produk_detail = null;
            foreach ($products as $p) {
                if ($p['id'] == $produk_id) {
                    $produk_detail = $p;
                    break;
                }
            }
            if ($produk_detail) {
                foreach ($saiz_list as $saiz => $kuantiti) {
                    $kuantiti = (int)$kuantiti;
                    if ($kuantiti > 0) {
                        if (isset($produk_detail['harga'][$saiz])) {
                            $harga_seunit = $produk_detail['harga'][$saiz];
                            $jumlah_harga = $kuantiti * $harga_seunit;
                            $item_tempahan[] = [
                                'nama_produk' => $produk_detail['nama'],
                                'saiz' => ucwords(str_replace('_', ' ', $saiz)),
                                'harga_seunit' => $harga_seunit,
                                'kuantiti' => $kuantiti,
                                'jumlah_harga' => $jumlah_harga
                            ];
                            $jumlah_besar += $jumlah_harga;
                        }
                    }
                }
            }
        }

        if ($jumlah_besar == 0) {
            echo "<script>alert('Sila pilih sekurang-kurangnya satu jenis biskut sebelum meneruskan tempahan.'); window.location.href='index.php?menu=tempah';</script>";
            exit();
        }

        $_SESSION['invois_data'] = [
            'no_invois' => 'INV-' . rand(10000, 99999),
            'nama_pelanggan' => $nama_pelanggan,
            'tarikh' => date("d/m/Y"),
            'items' => $item_tempahan,
            'jumlah_besar' => $jumlah_besar
        ];

        $invois = $_SESSION['invois_data'];
        ?>
        <!DOCTYPE html>
        <html lang="ms">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Biskut Klasik - Invois Tempahan</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">
            <style>
                .page-body { font-family: 'Questrial', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; min-height: 100vh; display: flex; flex-direction: column; box-sizing: border-box; }
                .container { max-width: 1200px; margin: 0 auto; flex: 1; width: 100%; }
                .header-wrapper { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background-color: #333; padding: 20px; border-radius: 8px; }
                .site-title { font-family: 'Imperial Script', cursive; font-size: 4.5rem; color: #fff; margin: 0; padding: 0; line-height: 1; }
                .nav-menu { display: flex; gap: 20px; align-items: center; }
                .nav-link { text-decoration: none; color: #fff; font-weight: normal; font-size: 1.4rem; }
                .nav-link:hover { color: #e44d26; }
                .nav-link.active { color: #e44d26; border-bottom: 2px solid #e44d26; }
                .page-title { color: #333; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-align: center; }
                .invoice-box { background-color: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin-top: 20px; max-width: 800px; margin-left: auto; margin-right: auto; }
                .invoice-header { display: flex; justify-content: space-between; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 2px solid #f0f0f0; }
                .invoice-info { font-size: 1.1rem; color: #333; line-height: 1.5; }
                .invoice-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
                .invoice-table th, .invoice-table td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
                .invoice-table th { background-color: #f9f9f9; font-weight: bold; color: #555; }
                .invoice-table td { color: #333; font-size: 1.05rem; }
                .invoice-table .text-right { text-align: right; }
                .invoice-table .text-center { text-align: center; }
                .invoice-table .total-label-cell { text-align: right; font-weight: bold; font-size: 1.2rem; padding-right: 20px; }
                .invoice-table .total-amount-cell { font-weight: bold; font-size: 1.4rem; color: #28a745; text-align: right; }
                .invoice-note { text-align: center; color: #777; margin-bottom: 30px; font-style: italic; border-top: 1px solid #eee; padding-top: 20px; }
                .action-buttons { text-align: center; }
                .print-btn { background-color: #333; color: #fff; border: none; padding: 12px 30px; font-size: 1.1rem; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; }
                .print-btn:hover { background-color: #555; }
                .main-footer { background-color: #333; text-align: center; margin-top: 30px; color: #fff; padding: 20px; border-radius: 8px; }
                @media print { .header-wrapper, .main-footer, .action-buttons, .nav-menu { display: none !important; } .page-body { background-color: #fff; padding: 0; } .container { width: 100%; max-width: 100%; margin: 0; } .invoice-table, .invoice-table th, .invoice-table td { border: 2px solid #000 !important; } .invoice-box { box-shadow: none; border: none; padding: 0; margin: 0; width: 100%; max-width: 100%; } }
            </style>
        </head>
        <body class="page-body">
            <div class="container">
                <div class="header-wrapper">
                    <h2 class="site-title">Biskut Klasik</h2>
                    <nav class="nav-menu">
                        <a href="index.php?menu=utama" class="nav-link">Utama</a>
                        <a href="index.php?menu=tempah" class="nav-link">Tempah</a>
                        <a href="index.php?menu=invois" class="nav-link active">Invois</a>
                    </nav>
                </div>
                <h1 class="page-title">Invois Tempahan Biskut Klasik</h1>
                <div class="invoice-box">
                    <div class="invoice-header">
                        <div class="invoice-info">
                            <strong>Kepada:</strong><br>
                            <?= htmlspecialchars($invois['nama_pelanggan']) ?>
                        </div>
                        <div class="invoice-info" style="text-align: right;">
                            <strong>No. Invois:</strong> <?= $invois['no_invois'] ?><br>
                            <strong>Tarikh:</strong> <?= $invois['tarikh'] ?>
                        </div>
                    </div>
                    <table class="invoice-table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Saiz</th>
                                <th class="text-right">Harga</th>
                                <th class="text-center">Kuantiti</th>
                                <th class="text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($invois['items'])): ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tiada item tempahan.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($invois['items'] as $item): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($item['nama_produk']) ?></td>
                                        <td><?= htmlspecialchars($item['saiz']) ?></td>
                                        <td class="text-right">RM <?= number_format($item['harga_seunit'], 2) ?></td>
                                        <td class="text-center"><?= $item['kuantiti'] ?></td>
                                        <td class="text-right">RM <?= number_format($item['jumlah_harga'], 2) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="total-label-cell">Jumlah Besar</td>
                                <td class="total-amount-cell">RM <?= number_format($invois['jumlah_besar'], 2) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="invoice-note">
                        <p>* Sila cetak invois ini dan serahkan semasa mengambil tempahan.</p>
                        <p>* Bayaran boleh dibuat secara tunai atau imbas Kod QR semasa pengambilan.</p>
                    </div>
                    <div class="action-buttons">
                        <button onclick="window.print()" class="print-btn">Cetak Invois</button>
                    </div>
                </div>
            </div>
            <footer class="main-footer">&copy; 2026 Sabri bin Saep</footer>
        </body>
        </html>
        <?php
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biskut Klasik - Borang Tempahan</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">
        <style>
            .page-body { font-family: 'Questrial', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; min-height: 100vh; display: flex; flex-direction: column; box-sizing: border-box; }
            .container { max-width: 1200px; margin: 0 auto; flex: 1; width: 100%; }
            .header-wrapper { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background-color: #333; padding: 20px; border-radius: 8px; }
            .site-title { font-family: 'Imperial Script', cursive; font-size: 4.5rem; color: #fff; margin: 0; padding: 0; line-height: 1; }
            .nav-menu { display: flex; gap: 20px; align-items: center; }
            .nav-link { text-decoration: none; color: #fff; font-weight: normal; font-size: 1.4rem; }
            .nav-link:hover { color: #e44d26; }
            .nav-link.active { color: #e44d26; border-bottom: 2px solid #e44d26; }
            .page-title { color: #333; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-align: center; }
            .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 20px; }
            .product-card { background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; }
            .product-image { width: 100%; height: 200px; object-fit: contain; border-radius: 5px; margin-bottom: 15px; }
            .product-name { margin-top: 0; }
            .product-option { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #f0f0f0; }
            .product-option:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
            .option-label { display: flex; flex-direction: column; cursor: pointer; }
            .option-name { font-weight: normal; color: #333; font-size: 17px; }
            .option-price { color: #e44d26; font-weight: normal; font-size: 16px; margin-top: 2px; }
            .qty-input { width: 60px; padding: 5px; text-align: center; border: 1px solid #ccc; border-radius: 4px; }
            .form-group { margin-bottom: 15px; }
            .input-label { display: block; margin-bottom: 5px; font-weight: normal; font-size: 1.1rem; }
            .checkout-section { background-color: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 25px; margin-top: 40px; max-width: 550px; margin-left: auto; margin-right: auto; }
            .total-display { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 20px; }
            .total-display .total-label { font-size: 1.2em; color: #555; }
            .total-display .total-amount { font-size: 2em; font-weight: normal; color: #28a745; }
            .checkout-section .form-group { margin-bottom: 20px; }
            .checkout-input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 16px; }
            .checkout-button { width: 100%; background-color: #e44d26; color: white; padding: 15px; border: none; border-radius: 5px; cursor: pointer; font-size: 20px; font-weight: normal; transition: background-color 0.2s; }
            .checkout-button:hover { background-color: #c63816; }
            .main-footer { background-color: #333; text-align: center; margin-top: 30px; color: #fff; padding: 20px; border-radius: 8px; }
            @media print { .header-wrapper, .main-footer, .action-buttons, .nav-menu { display: none !important; } .page-body { background-color: #fff; padding: 0; } .container { width: 100%; max-width: 100%; margin: 0; } }
        </style>
    </head>
    <body class="page-body">
        <div class="container">
            <div class="header-wrapper">
                <h2 class="site-title">Biskut Klasik</h2>
                <nav class="nav-menu">
                    <a href="index.php?menu=utama" class="nav-link">Utama</a>
                    <a href="index.php?menu=tempah" class="nav-link active">Tempah</a>
                    <a href="index.php?menu=invois" class="nav-link">Invois</a>
                </nav>
            </div>
            <h1 class="page-title">Borang Tempahan</h1>
            <form action="" method="POST">
                <div class="product-grid">
                    <?php foreach ($products as $produk): ?>
                        <div class="product-card">
                            <img src="gambar/<?= htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama']) ?>" class="product-image">
                            <h3 class="product-name"><?= htmlspecialchars($produk['nama']) ?></h3>
                            <?php foreach ($produk['harga'] as $saiz_key => $harga): ?>
                                <div class="product-option">
                                    <label for="produk_<?= $produk['id'] ?>_<?= $saiz_key ?>" class="option-label">
                                        <span class="option-name"><?= htmlspecialchars(ucwords(str_replace('_', ' ', $saiz_key))) ?></span>
                                        <span class="option-price">RM <?= number_format($harga, 2) ?></span>
                                    </label>
                                    <input type="number" id="produk_<?= $produk['id'] ?>_<?= $saiz_key ?>" name="tempahan[<?= $produk['id'] ?>][<?= $saiz_key ?>]" min="0" value="0" data-price="<?= $harga ?>" class="qty-input">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="checkout-section">
                    <div class="total-display">
                        <span class="total-label">Jumlah Harga:</span>
                        <span class="total-amount" id="total-price">RM 0.00</span>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="input-label">Nama Penuh Anda:</label>
                        <input type="text" id="nama" name="nama_pelanggan" placeholder="Contoh: Ali Bin Abu" required class="checkout-input">
                    </div>
                    <button type="submit" class="checkout-button">Teruskan</button>
                </div>
            </form>
        </div>
        <footer class="main-footer">&copy; 2026 Sabri bin Saep</footer>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const quantityInputs = document.querySelectorAll('.qty-input');
                const totalPriceEl = document.getElementById('total-price');
                const form = document.querySelector('form');
                function calculateTotal() {
                    let total = 0;
                    quantityInputs.forEach(input => {
                        let quantity = parseInt(input.value, 10);
                        if (isNaN(quantity) || quantity < 0) { quantity = 0; }
                        const price = parseFloat(input.dataset.price) || 0;
                        if (quantity > 0) { total += quantity * price; }
                    });
                    const formatter = new Intl.NumberFormat('ms-MY', { style: 'currency', currency: 'MYR' });
                    totalPriceEl.textContent = formatter.format(total);
                }
                quantityInputs.forEach(input => {
                    input.addEventListener('input', calculateTotal);
                    input.addEventListener('blur', function () {
                        const value = parseFloat(this.value);
                        if (!isNaN(value) && value > 0) { this.value = Math.round(value); } else { this.value = 0; }
                        calculateTotal();
                    });
                });
                if (form) {
                    form.addEventListener('submit', function(e) {
                        let total = 0;
                        quantityInputs.forEach(input => {
                            let quantity = parseInt(input.value, 10);
                            const price = parseFloat(input.dataset.price) || 0;
                            if (!isNaN(quantity) && quantity > 0) { total += quantity * price; }
                        });
                        if (total === 0) { e.preventDefault(); alert('Sila pilih sekurang-kurangnya satu jenis biskut sebelum meneruskan tempahan.'); }
                    });
                }
            });
        </script>
    </body>
    </html>
    <?php
} elseif ($menu === 'invois') {
    if (!isset($_SESSION['invois_data'])) {
        echo "<script>
                alert('Invois belum ada kerana belum ada tempahan.');
                window.location.href = 'index.php?menu=tempah';
              </script>";
        exit();
    }
    $invois = $_SESSION['invois_data'];
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biskut Klasik - Invois Tempahan</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">
        <style>
            .page-body { font-family: 'Questrial', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; min-height: 100vh; display: flex; flex-direction: column; box-sizing: border-box; }
            .container { max-width: 1200px; margin: 0 auto; flex: 1; width: 100%; }
            .header-wrapper { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background-color: #333; padding: 20px; border-radius: 8px; }
            .site-title { font-family: 'Imperial Script', cursive; font-size: 4.5rem; color: #fff; margin: 0; padding: 0; line-height: 1; }
            .nav-menu { display: flex; gap: 20px; align-items: center; }
            .nav-link { text-decoration: none; color: #fff; font-weight: normal; font-size: 1.4rem; }
            .nav-link:hover { color: #e44d26; }
            .nav-link.active { color: #e44d26; border-bottom: 2px solid #e44d26; }
            .page-title { color: #333; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-align: center; }
            .invoice-box { background-color: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin-top: 20px; max-width: 800px; margin-left: auto; margin-right: auto; }
            .invoice-header { display: flex; justify-content: space-between; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 2px solid #f0f0f0; }
            .invoice-info { font-size: 1.1rem; color: #333; line-height: 1.5; }
            .invoice-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
            .invoice-table th, .invoice-table td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
            .invoice-table th { background-color: #f9f9f9; font-weight: bold; color: #555; }
            .invoice-table td { color: #333; font-size: 1.05rem; }
            .invoice-table .text-right { text-align: right; }
            .invoice-table .text-center { text-align: center; }
            .invoice-table .total-label-cell { text-align: right; font-weight: bold; font-size: 1.2rem; padding-right: 20px; }
            .invoice-table .total-amount-cell { font-weight: bold; font-size: 1.4rem; color: #28a745; text-align: right; }
            .invoice-note { text-align: center; color: #777; margin-bottom: 30px; font-style: italic; border-top: 1px solid #eee; padding-top: 20px; }
            .action-buttons { text-align: center; }
            .print-btn { background-color: #333; color: #fff; border: none; padding: 12px 30px; font-size: 1.1rem; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; }
            .print-btn:hover { background-color: #555; }
            .main-footer { background-color: #333; text-align: center; margin-top: 30px; color: #fff; padding: 20px; border-radius: 8px; }
            @media print { .header-wrapper, .main-footer, .action-buttons, .nav-menu { display: none !important; } .page-body { background-color: #fff; padding: 0; } .container { width: 100%; max-width: 100%; margin: 0; } .invoice-table, .invoice-table th, .invoice-table td { border: 2px solid #000 !important; } .invoice-box { box-shadow: none; border: none; padding: 0; margin: 0; width: 100%; max-width: 100%; } }
        </style>
    </head>
    <body class="page-body">
        <div class="container">
            <div class="header-wrapper">
                <h2 class="site-title">Biskut Klasik</h2>
                <nav class="nav-menu">
                    <a href="index.php?menu=utama" class="nav-link">Utama</a>
                    <a href="index.php?menu=tempah" class="nav-link">Tempah</a>
                    <a href="index.php?menu=invois" class="nav-link active">Invois</a>
                </nav>
            </div>
            <h1 class="page-title">Invois Tempahan Biskut Klasik</h1>
            <div class="invoice-box">
                <div class="invoice-header">
                    <div class="invoice-info">
                        <strong>Kepada:</strong><br>
                        <?= htmlspecialchars($invois['nama_pelanggan']) ?>
                    </div>
                    <div class="invoice-info" style="text-align: right;">
                        <strong>No. Invois:</strong> <?= $invois['no_invois'] ?><br>
                        <strong>Tarikh:</strong> <?= $invois['tarikh'] ?>
                    </div>
                </div>
                <table class="invoice-table">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Saiz</th>
                            <th class="text-right">Harga</th>
                            <th class="text-center">Kuantiti</th>
                            <th class="text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($invois['items'])): ?>
                            <tr>
                                <td colspan="5" class="text-center">Tiada item tempahan.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($invois['items'] as $item): ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['nama_produk']) ?></td>
                                    <td><?= htmlspecialchars($item['saiz']) ?></td>
                                    <td class="text-right">RM <?= number_format($item['harga_seunit'], 2) ?></td>
                                    <td class="text-center"><?= $item['kuantiti'] ?></td>
                                    <td class="text-right">RM <?= number_format($item['jumlah_harga'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="total-label-cell">Jumlah Besar</td>
                            <td class="total-amount-cell">RM <?= number_format($invois['jumlah_besar'], 2) ?></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="invoice-note">
                    <p>* Sila cetak invois ini dan serahkan semasa mengambil tempahan.</p>
                    <p>* Bayaran boleh dibuat secara tunai atau imbas Kod QR semasa pengambilan.</p>
                </div>
                <div class="action-buttons">
                    <button onclick="window.print()" class="print-btn">Cetak Invois</button>
                </div>
            </div>
        </div>
        <footer class="main-footer">&copy; 2026 Sabri bin Saep</footer>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu tidak ditemukan</title>
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">
        <style>
            .page-body { font-family: 'Questrial', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; min-height: 100vh; display: flex; flex-direction: column; box-sizing: border-box; }
            .container { max-width: 1200px; margin: 0 auto; flex: 1; width: 100%; text-align: center; padding-top: 50px; }
            .main-footer { background-color: #333; text-align: center; margin-top: 30px; color: #fff; padding: 20px; border-radius: 8px; }
        </style>
    </head>
    <body class="page-body">
        <div class="container">
            <h1>Menu tidak ditemukan</h1>
            <p>Maaf, halaman yang anda cari tidak wujud.</p>
            <a href="index.php?menu=utama">Kembali ke Utama</a>
        </div>
        <footer class="main-footer">&copy; 2026 Sabri bin Saep</footer>
    </body>
    </html>
    <?php
}
