<?php
require_once __DIR__ . '/../data/products.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . '/../process/process_tempahan.php';
}

$title = 'Biskut Klasik - Borang Tempahan';
$activeMenu = 'tempah';

require __DIR__ . '/../includes/header.php';
?>

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
                        <input
                            type="number"
                            id="produk_<?= $produk['id'] ?>_<?= $saiz_key ?>"
                            name="tempahan[<?= $produk['id'] ?>][<?= $saiz_key ?>]"
                            min="0"
                            value="0"
                            data-price="<?= $harga ?>"
                            class="qty-input"
                        >
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

<script src="assets/js/script.js"></script>

<?php require __DIR__ . '/../includes/footer.php'; ?>