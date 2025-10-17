<?php
// Data RAB dari gambar
$items = [
    ["Analisis & Desain", "- Diskusi User Requirement dan flow chart Toko Online\n- Penyusunan struktur database sederhana\n- Membuat UI untuk Toko Online", 1200000],
    ["Pengembangan Website", "Frontend (User):\n- Halaman Home + katalog produk\n- Halaman detail produk (foto, deskripsi, harga, stok)\n- Fitur keranjang belanja (add/update/delete item)\n- Halaman checkout (form pelanggan, alamat, pilih metode bayar)\n- Validasi form & notifikasi error\n\nBackend (Admin):\n- CRUD produk (tambah, edit, hapus, stok, harga)\n- Kelola pesanan (status: baru, diproses, selesai)\n- Notifikasi pesanan via email ke admin\n- Dashboard ringkasan transaksi & statistik sederhana", 3500000],
    ["Integrasi Payment Gateway", "- Integrasi API Tripay\n- Pilihan metode bayar (VA Bank, QRIS, e-wallet)\n- Callback untuk update status transaksi otomatis\n- Pengaturan multi-channel pembayaran (lebih dari 3 metode bayar)", 400000],
    ["Testing & Deployment", "- Uji coba transaksi (cart -> checkout -> bayar via PG -> order masuk)\n- Testing sandbox payment gateway\n- Bug fixing minor & optimasi UI/UX\n- Deployment ke server/hosting", 700000],
];

// Hitung total secara dinamis
$total = array_reduce($items, function($sum, $item) {
    return $sum + $item[2];
}, 0);

function formatRupiah($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RAB Pengembangan Aplikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
            color: #212529;
            font-size: 11px;
        }
        .invoice-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #0d6efd;
            font-size: 24px;
            margin: 0;
            text-transform: uppercase;
            font-weight: 700;
        }
        .header h2 {
            font-size: 14px;
            color: #495057;
            margin-top: 5px;
            font-weight: 400;
        }
        .header p {
            margin: 0;
            font-size: 12px;
            color: #6c757d;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 11px;
        }
        th, td {
            padding: 8px 10px;
            text-align: left;
            border: 1px solid #dee2e6;
            vertical-align: top;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
            text-transform: uppercase;
            font-weight: 600;
        }
        .total-row {
            background-color: #f0f8ff;
            font-weight: bold;
            color: #0d6efd;
            border-top: 2px solid #0d6efd;
            font-size: 12px;
        }
        .text-right {
            text-align: right;
        }
        .pre-formatted {
            white-space: pre-wrap;
        }
        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }
        .signature-box {
            width: 48%;
            text-align: center;
        }
        .signature-box p {
            margin: 0;
            font-size: 12px;
            color: #495057;
        }
        .signature-line {
            border-bottom: 1px dotted #6c757d;
            width: 90%;
            margin: 60px auto 5px;
        }
        .print-btn {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            margin: 15px auto;
            display: block;
            text-align: center;
            transition: background-color 0.3s;
        }
        .print-btn:hover {
            background-color: #0a58ca;
        }
        @media print {
            body { background-color: #fff; padding: 0; }
            .print-btn, .invoice-container { box-shadow: none; padding: 0; }
            .invoice-container { max-width: none; }
            .print-btn { display: none; }
            th, td { border: 1px solid #000 !important; }
        }
    </style>
</head>
<body>

    <div class="invoice-container">
        <div class="header">
            <h1>INVOICE</h1>
            <h2>Pengembangan Sistem Web Lunox</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 25%;">Komponen</th>
                    <th style="width: 50%;">Keterangan</th>
                    <th style="width: 20%;" class="text-right">Estimasi Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $i => $row): ?>
                <tr>
                    <td><?= $i+1; ?></td>
                    <td><?= $row[0]; ?></td>
                    <td class="pre-formatted"><?= $row[1]; ?></td>
                    <td class="text-right"><?= formatRupiah($row[2]); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="3" class="text-right">TOTAL</td>
                    <td class="text-right"><?= formatRupiah($total); ?></td>
                </tr>
            </tfoot>
        </table>
        <div class="signature-section">
            <div class="signature-box">
                <p>Disetujui oleh,</p>
                <div class="signature-line"></div>
                <p>Nama & Jabatan</p>
            </div>
            <div class="signature-box">
                <p>Dibuat oleh,</p>
                <div class="signature-line"></div>
                <p>Nama & Jabatan</p>
            </div>
        </div>
    </div>
    <button class="print-btn" onclick="window.print()">🖨 Cetak RAB</button>
</body>
</html>