<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="UMKM Unggulan Desa Karangbendo adalah pusat kegiatan ekonomi kreatif di Karangbendo. Kami menyediakan berbagai produk batik, kerupuk, dan masih banyak potensi lain yang dimiliki oleh deesa karangbendo.">
    <meta name="keywords"
        content="UMKM, Desa Karangbendo, Batik, Kerupuk, Produk Lokal, Ekonomi Kreatif, Banyuwangi, Karangbendo, Pandawa, Larasati, Srokandi, Kerupuk Rahayu, Kota Banyuwangi, Rogojampi, Web Desa, Website Desa, UMKM Unggulan Desa Karangbendo">
    <meta name="author" content="Desa Karangbendo">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta property="og:description"
        content="UMKM Desa Karangbendo adalah pusat kegiatan ekonomi kreatif di Karangbendo. Kami menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta property="og:image" content="{{ asset('dist/logo-icon-umkm.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta name="twitter:description"
        content="UMKM Desa Karangbendo adalah pusat kegiatan ekonomi kreatif di Karangbendo. Kami menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta name="twitter:image" content="{{ asset('dist/logo-icon-umkm.jpeg') }}">
    <meta name="twitter:site" content="@karangbendo_umkm">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/logo-icon-umkm.jpeg') }}">
    <meta itemprop="name" content="UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas">
    <meta itemprop="description"
        content="UMKM Desa Karangbendo adalah pusat kegiatan ekonomi kreatif di Karangbendo. Kami menyediakan berbagai produk batik, kerupuk, dan kerajinan lokal berkualitas tinggi.">
    <meta itemprop="image" content="{{ asset('images/schema-image.jpg') }}">
    <link rel="icon" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" type="image/x-icon">
    <title>{{ $title ?? 'UMKM Unggulan Desa Karangbendo' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />


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
    </style>
</head>

<body>

    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
