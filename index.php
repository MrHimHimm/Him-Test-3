<?php
$nama = "Him";
$jam = date("H");

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

    <!-- Panggil file CSS eksternal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2><?php echo $sapaan . ", " . $nama . "!"; ?></h2>
        <p>Ini halaman index.php sederhana yang berisi kombinasi HTML + PHP.</p>
        <button class="btn" onclick="alert('Hai Him! Ini tombol dari index.php')">Klik Aku</button>
    </div>
</body>
</html>
