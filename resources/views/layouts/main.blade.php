<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman Kelulusan - {{ $title ?? 'SMKS Muhammadiyah 1 Genteng' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 50%, #1e1b4b 100%);
        }
        .card-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .glow-effect {
            box-shadow: 0 0 60px rgba(59, 130, 246, 0.3);
        }
        .status-lulus {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        .status-tidak-lulus {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.4); }
            50% { box-shadow: 0 0 60px rgba(59, 130, 246, 0.8); }
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    @yield('content')
</body>
</html>