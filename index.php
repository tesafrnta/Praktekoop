<?php
// index.php
$nama = "";
$waktu = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Modern di Hugging Face</title>
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
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border: 4px solid #fff;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 2.5rem;
            color: #4a5568;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #718096;
            margin-bottom: 30px;
        }

        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .greeting {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .name-display {
            font-size: 2rem;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin: 10px 0;
        }

        .info-box {
            background: #f8f9ff;
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid #667eea;
            margin-bottom: 30px;
        }

        .server-time {
            font-size: 1.3rem;
            color: #4a5568;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .time-display {
            background: #e9ecef;
            padding: 8px 16px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
        }

        .docker-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2496ed;
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 500;
            margin-top: 10px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #667eea;
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #4a5568;
        }

        .feature-desc {
            color: #718096;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: #718096;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }

        /* Animation for time display */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .time-display {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://placehold.co/120x120" alt="Modern abstract geometric logo with gradient purple and blue colors representing technology and innovation" />
            </div>
            <h1>Selamat Datang di Website Modern!</h1>
            <p class="subtitle">Dibangun dengan teknologi terkini dan desain responsif</p>
        </div>

        <div class="welcome-section">
            <div class="greeting">Halo, Pengunjung Terhormat!</div>
            <div class="name-display">Tamu</div>
            <p>Kami senang Anda berkunjung ke website kami</p>
        </div>

        <div class="info-box">
            <div class="server-time">
                ⏰ Waktu server: 
                <span class="time-display" id="serverTime">Loading...</span>
            </div>
            <div class="docker-badge">
                ✅ Dijalankan di <strong>Docker</strong> di Hugging Face Spaces
            </div>
        </div>

        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3 class="feature-title">Cepat & Responsif</h3>
                <p class="feature-desc">Website dioptimalkan untuk kecepatan loading dan pengalaman pengguna yang smooth</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-desc">Desain responsif yang sempurna untuk semua perangkat dan ukuran layar</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Aman & Terpercaya</h3>
                <p class="feature-desc">Dibangun dengan standar keamanan terbaik untuk melindungi data pengguna</p>
            </div>
        </div>

        <div class="footer">
            <p>© 2024 Website Modern. Dibuat dengan ❤️ menggunakan teknologi terdepan.</p>
        </div>
    </div>

    <script>
        // Update server time dynamically
        function updateServerTime() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            const formattedTime = now.toLocaleDateString('id-ID', options);
            document.getElementById('serverTime').textContent = formattedTime;
        }

        // Initial update
        updateServerTime();
        
        // Update every second
        setInterval(updateServerTime, 1000);
    </script>
</body>
</html>

```

🎨 **Generating images based on descriptions...**

✅ **Images generated successfully! Here's your updated content:**

`index.html`
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Modern di Hugging Face</title>
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
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border: 4px solid #fff;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 2.5rem;
            color: #4a5568;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #718096;
            margin-bottom: 30px;
        }

        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .greeting {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .name-display {
            font-size: 2rem;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin: 10px 0;
        }

        .info-box {
            background: #f8f9ff;
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid #667eea;
            margin-bottom: 30px;
        }

        .server-time {
            font-size: 1.3rem;
            color: #4a5568;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .time-display {
            background: #e9ecef;
            padding: 8px 16px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
        }

        .docker-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2496ed;
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 500;
            margin-top: 10px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #667eea;
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #4a5568;
        }

        .feature-desc {
            color: #718096;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: #718096;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }

        /* Animation for time display */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .time-display {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a222e933-4098-4762-addc-78a651ac16c0.png" alt="Modern abstract geometric logo with gradient purple and blue colors representing technology and innovation" />
            </div>
            <h1>Selamat Datang di Website Modern!</h1>
            <p class="subtitle">Dibangun dengan teknologi terkini dan desain responsif</p>
        </div>

        <div class="welcome-section">
            <div class="greeting">Halo, Pengunjung Terhormat!</div>
            <div class="name-display">Tamu</div>
            <p>Kami senang Anda berkunjung ke website kami</p>
        </div>

        <div class="info-box">
            <div class="server-time">
                ⏰ Waktu server: 
                <span class="time-display" id="serverTime">Loading...</span>
            </div>
            <div class="docker-badge">
                ✅ Dijalankan di <strong>Docker</strong> di Hugging Face Spaces
            </div>
        </div>

        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3 class="feature-title">Cepat & Responsif</h3>
                <p class="feature-desc">Website dioptimalkan untuk kecepatan loading dan pengalaman pengguna yang smooth</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-desc">Desain responsif yang sempurna untuk semua perangkat dan ukuran layar</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Aman & Terpercaya</h3>
                <p class="feature-desc">Dibangun dengan standar keamanan terbaik untuk melindungi data pengguna</p>
            </div>
        </div>

        <div class="footer">
            <p>© 2024 Website Modern. Dibuat dengan ❤️ menggunakan teknologi terdepan.</p>
        </div>
    </div>

    <script>
        // Update server time dynamically
        function updateServerTime() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            const formattedTime = now.toLocaleDateString('id-ID', options);
            document.getElementById('serverTime').textContent = formattedTime;
        }

        // Initial update
        updateServerTime();
        
        // Update every second
        setInterval(updateServerTime, 1000);
    </script>
</body>
</html>

```
