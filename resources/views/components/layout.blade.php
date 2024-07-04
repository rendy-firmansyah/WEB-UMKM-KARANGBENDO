<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'UMKM Unggulan Desa Karangbendo' }}</title>


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
