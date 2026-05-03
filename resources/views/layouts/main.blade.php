<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Pengumuman Kelulusan - {{ $title ?? 'SMKS Muhammadiyah 1 Genteng' }}</title>
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Meta Tags for SEO/UX -->
    <meta name="theme-color" content="#0f172a">
    <meta name="description" content="Informasi Pengumuman Kelulusan SMKS Muhammadiyah 1 Genteng">
</head>
<body class="min-h-screen">
    @yield('content')
    @stack('scripts')
</body>
</html>