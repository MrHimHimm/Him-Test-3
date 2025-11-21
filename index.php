<?php
// Halaman index PHP sederhana
// Bisa jadi template awal proyek web kamu

// Contoh variabel PHP
a $nama = "Him";
$jam = date("H");

// Tentukan sapaan berdasarkan waktu
if ($jam < 12) {
    $sapaan = "Selamat pagi";
} elseif ($jam < 18) {
    $sapaan = "Selamat siang";
} else {
    $sapaan = "Selamat malam";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index PHP Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f5ff;
            padding: 30px;
            color: #222;
        }
        .card {
            background: white;
            padding: 20px;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin: auto;
            text-align: center;
        }
        .btn {
            background: #6C5CE7;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2><?php echo $sapaan . ", " . $nama . "!"; ?></h2>
        <p>Ini halaman index.php sederhana yang berisi kombinasi HTML + PHP.</p>
        <button class="btn" onclick="alert('Hai Him! Ini tombol dari index.php')">Klik Aku</button>
    </div>
</body>
</html>
