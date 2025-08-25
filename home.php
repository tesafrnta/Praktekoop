<?php
// home.php
$judul = "Halaman Lain";
$deskripsi = "Ini adalah halaman tambahan dari website sederhana";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #2d3748;
            margin-bottom: 20px;
        }
        .content {
            background: #edf2f7;
            padding: 25px;
            border-radius: 15px;
            margin: 25px 0;
            line-height: 1.6;
        }
        .nav {
            margin-top: 30px;
        }
        .nav a {
            text-decoration: none;
            padding: 12px 24px;
            background: #4299e1;
            color: white;
            border-radius: 8px;
            margin: 0 10px;
            transition: background 0.3s;
        }
        .nav a:hover {
            background: #3182ce;
        }
        .features {
            text-align: left;
            margin: 20px 0;
        }
        .features li {
            margin: 10px 0;
            padding: 8px;
            background: rgba(66, 153, 225, 0.1);
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $judul ?></h1>
        
        <div class="content">
            <p><?= $deskripsi ?></p>
            
            <h3>Fitur Website:</h3>
            <ul class="features">
                <li>✅ PHP Native</li>
                <li>✅ Responsive Design</li>
                <li>✅ Dua Halaman Navigasi</li>
                <li>✅ Styling Modern</li>
                <li>✅ Kompatibel dengan Hugging Face</li>
            </ul>
        </div>

        <div class="info-box">
            <p><strong>Waktu Akses:</strong> <?= date('Y-m-d H:i:s') ?></p>
            <p><strong>Status:</strong> <span style="color: green;">Aktif dan Berfungsi</span></p>
        </div>

        <div class="nav">
            <a href="index.php">Kembali ke Home</a>
            <a href="home.php">Refresh</a>
        </div>
    </div>
</body>
</html>
