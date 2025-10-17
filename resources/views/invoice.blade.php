<?php
// Data RAB
$items = [
    ["Google Calendar API", "Gratis hingga batas kuota tertentu", "Free", 1],
    ["Jasa Setup Hosting (Deploy)", "Konfigurasi server, database, SSL, backup", 200000, 1],
    ["WhatsApp API Gateway", "Konfigurasi hosting, database, SSL", 300000, 1],
    ["Fitur Buat Janji", "Form Buat Janji + Integrasi Google Calendar + Validasi NIK", 1100000, 1],
    ["Sistem Poin (Backend)", "Akumulasi & pengurangan poin", 400000, 1],
    ["Autentikasi & Validasi NIK", "Validasi data user dengan NIK", 350000, 1],
    ["Integrasi Payment Gateway", "Bank transfer, OVO, Dana, dll", 400000, 1],
    ["Notifikasi Email (User & Admin)", "Konfirmasi janji, reminder, poin", 450000, 1],
    ["Halaman Buat Janji", "Form input, validasi, reCAPTCHA", 600000, 1],
    ["Halaman Input NIK & Riwayat Poin", "cek poin, tukar poin, reward", 500000, 1],
    ["Halaman Admin, Manajemen User & Setting", "Monitoring janji & poin user, Tambah/edit user, konfigurasi sistem ke user", 600000, 1],
    ["Transaksi Keuangan", "Riwayat transaksi + export excel", 200000, 1],
    ["Testing", "Testing (debugging & UAT)", 400000, 1],
    ["Manual Book", "Panduan penggunaan, alur sistem", 200000, 1],
];

// Hitung total secara dinamis
$total = array_reduce($items, function($sum, $item) {
    if (is_numeric($item[2])) {
        return $sum + $item[2];
    }
    return $sum;
}, 0);

function formatRupiah($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Invoice RAB</title>
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
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px 30px;
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
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
            text-transform: uppercase;
            font-weight: 600;
        }
        tr:last-child td {
            border-bottom: none;
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
            body { padding: 0; background-color: #fff; }
            .print-btn, .invoice-container { box-shadow: none; padding: 0; }
            .invoice-container { max-width: none; }
            .print-btn { display: none; }
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
                    <th style="width: 30%;">Komponen</th>
                    <th style="width: 45%;">Keterangan</th>
                    <th class="text-right" style="width: 20%;">Estimasi Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $i => $row): ?>
                <tr>
                    <td><?= $i+1; ?></td>
                    <td><?= $row[0]; ?></td>
                    <td><?= $row[1]; ?></td>
                    <td class="text-right">
                        <?php 
                            if (is_numeric($row[2])) {
                                echo formatRupiah($row[2]);
                            } else {
                                echo $row[2];
                            }
                        ?>
                    </td>
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
    
    <button class="print-btn" onclick="window.print()">🖨 Cetak Invoice</button>

</body>
</html>