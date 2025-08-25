<?php
// index.php
$nama = "Pengunjung";
$waktu = date("Y-m-d H:i:s");
?>

<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Minimal App</title>
<style>
body{font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; line-height:1.6; margin: 2rem;}
.card{max-width:720px; padding:1.25rem; border:1px solid #ddd; border-radius:16px; box-shadow:0 2px 8px rgba(0,0,0,.05)}
a{color:#0b5ed7; text-decoration:none}
a:hover{text-decoration:underline}
small{color:#666}
</style>
</head>
<body>
<div class="card">
<h1>Halo 👋</h1>
<p>Aplikasi PHP minimal berhasil berjalan.</p>
<ul>
<li><a href="/home.php">Ke halaman <code>home.php</code></a></li>
</ul>
<p><small>Server time: <?php echo date('Y-m-d H:i:s'); ?> (<?php echo date_default_timezone_get(); ?>)</small></p>
</div>
</body>
</html>
