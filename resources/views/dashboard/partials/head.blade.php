<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Tailwind is included -->
    @include('dashboard.partials.style')
    <meta name="description" content="{{ $description }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    {{-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script> --}}
</head>
