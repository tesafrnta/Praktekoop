<?php
// index.php
$nama = "Pengunjung";
$waktu = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sederhana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            color: #4a5568;
            margin-bottom: 20px;
        }
        .info-box {
            background: #f8f9ff;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .nav {
            margin-top: 30px;
        }
        .nav a {
            text-decoration: none;
            padding: 12px 24px;
            background: #667eea;
            color: white;
            border-radius: 8px;
            margin: 0 10px;
            transition: background 0.3s;
        }
        .nav a:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Website Sederhana Tesa</h1>
        
        <div class="info-box">
            <p>Halo <strong><?= htmlspecialchars($nama) ?></strong>!</p>
            <p>Waktu server: <code><?= $waktu ?></code></p>
        </div>

        <div class="info-box">
            <h3>Tentang Website</h3>
            <p>Ini adalah website PHP sederhana yang berjalan di Hugging Face Spaces</p>
            <p>Status: <strong style="color: green;">✅ Berjalan dengan baik</strong></p>
        </div>

        <div class="nav">
            <a href="home.php">Halaman Lain</a>
        </div>
    </div>
</body>
</html>
