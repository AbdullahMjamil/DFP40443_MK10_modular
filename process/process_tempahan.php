<?php
require_once __DIR__ . '/../data/products.php';

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

            if ($kuantiti > 0 && isset($produk_detail['harga'][$saiz])) {
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

header('Location: index.php?menu=invois');
exit();