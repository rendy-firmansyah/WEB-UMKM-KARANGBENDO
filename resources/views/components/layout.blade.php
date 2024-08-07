<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="UMKM Unggulan Desa Karangbendo menyediakan berbagai produk batik, kerupuk, dan masih banyak potensi lain yang dimiliki oleh deesa karangbendo.">
    <meta name="keywords"
        content="UMKM, Desa Karangbendo, Batik, Kerupuk, Produk Lokal, Ekonomi Kreatif, Banyuwangi, Karangbendo, Pandawa, Larasati, Srokandi, Kerupuk Rahayu, Kota Banyuwangi, Rogojampi, Web Desa, Website Desa, UMKM Unggulan Desa Karangbendo">
    <meta name="author" content="Desa Karangbendo">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta property="og:description"
        content="UMKM Desa Karangbendo menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta property="og:image" content="{{ asset('images/logo-icon-umkm.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta name="twitter:description"
        content="UMKM Desa Karangbendo menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta name="twitter:image" content="{{ asset('images/logo-icon-umkm.jpeg') }}">
    <meta name="twitter:site" content="@karangbendo_umkm">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-icon-umkm.jpeg') }}">
    <meta itemprop="name" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta itemprop="description"
        content="UMKM Desa Karangbendo menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta itemprop="image" content="{{ asset('images/schema-image.jpg') }}">
    <link rel="icon" href="{{ asset('images/logo-icon-umkm.jpeg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo-icon-umkm.jpeg') }}" type="image/x-icon">
    <title>{{ $title ?? 'UMKM Unggulan Desa Karangbendo' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @stack('scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .menu-enter {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .menu-enter-active {
            max-height: 500px;
            transition: max-height 0.3s ease-in;
        }

        * {
            scroll-behavior: smooth
        }

        select {
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white"><path d="M5.29 7.71a1 1 0 011.41 0L10 11.34l3.29-3.63a1 1 0 011.42 0l.03.03a1 1 0 010 1.41l-4 4a1 1 0 01-1.42 0l-4-4a1 1 0 01-.03-1.41z" /></svg>');
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.25rem;
            padding-right: 2.5rem;
        }
    </style>
</head>

<body>
    <div id="loading-screen" class="fixed inset-0 bg-gray-800 flex flex-col items-center justify-center z-50 ">
        <div class="flex space-x-2 justify-center items-center mb-4">
            <div class="h-6 w-6 bg-blue-600 rounded-full animate-bounce [animation-delay:-0.3s]"></div>
            <div class="h-6 w-6 bg-blue-600 rounded-full animate-bounce [animation-delay:-0.15s]"></div>
            <div class="h-6 w-6 bg-blue-600 rounded-full animate-bounce"></div>
        </div>
        <p class="text-gray-100 text-lg">Loading...</p>
    </div>
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
    <x-footer></x-footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loadingScreen = document.getElementById('loading-screen');

            function showLoading() {
                loadingScreen.classList.remove('hidden');
            }

            function hideLoading() {
                loadingScreen.classList.add('hidden');
            }

            showLoading();
            window.addEventListener('load', hideLoading);

            window.addEventListener('beforeunload', showLoading);
        });
    </script>
</body>

</html>
