<?php
// index.php
$nama = "Semua";
$waktu = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website di Hugging Face</title>
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

        .header {
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.5rem;
            color: #4a5568;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #718096;
            margin-bottom: 10px;
        }

        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 25px;
        }

        .greeting {
            font-size: 1.4rem;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .name-display {
            font-size: 1.8rem;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin: 10px 0;
            backdrop-filter: blur(10px);
        }

        .info-box {
            background: #f8f9ff;
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid #667eea;
        }

        .server-time {
            font-size: 1.2rem;
            color: #4a5568;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .time-display {
            background: #e9ecef;
            padding: 8px 16px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: #2d3748;
            border: 2px solid #cbd5e0;
        }

        .docker-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2496ed;
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 4px 12px rgba(36, 150, 237, 0.3);
        }

        /* Animations */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .time-display {
            animation: pulse 2s infinite;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 25px;
                margin: 10px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .greeting {
                font-size: 1.2rem;
            }
            
            .name-display {
                font-size: 1.5rem;
                padding: 8px 16px;
            }
            
            .server-time {
                flex-direction: column;
                gap: 8px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }
            
            .welcome-section {
                padding: 20px;
            }
            
            .info-box {
                padding: 20px;
            }
            
            .docker-badge {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Selamat Datang!</h1>
            <p class="subtitle">Website Tesa Firna Ananta</p>
        </div>

        <div class="welcome-section">
            <div class="greeting">Halo, Pengunjung!</div>
            <div class="name-display">Tamu</div>
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

