<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- 基本のfavicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" type="image/png">

    <!-- Android用 -->
    <link rel="icon" href="{{ asset('android-chrome-192x192.png') }}" sizes="192x192" type="image/png">
    <link rel="icon" href="{{ asset('android-chrome-512x512.png') }}" sizes="512x512" type="image/png">

    <!-- Apple用 -->
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Web Manifest -->
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
