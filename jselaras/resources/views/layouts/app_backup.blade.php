<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'JSelaras') }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-900 min-h-screen text-white">

        <div class="p-4 text-xl font-bold border-b border-gray-700">
            JSelaras
        </div>

        <ul class="p-4 space-y-2">

            <li>
                <a href="/dashboard" class="block p-2 hover:bg-gray-700 rounded">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="/users" class="block p-2 hover:bg-gray-700 rounded">
                    User Management
                </a>
            </li>

            <li>
                <a href="/users/create" class="block p-2 hover:bg-gray-700 rounded">
                    Tambah Pegawai
                </a>
            </li>

        </ul>

    </div>


    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 min-h-screen">

        <!-- Top Navigation -->
        @include('layouts.navigation')

        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>