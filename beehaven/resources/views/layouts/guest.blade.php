<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')

    <title>{{ config('app.name', 'Bee Haven PVT LTD') }} - Guest</title>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <a href="/">
                    <x-application-logo class="w-16 h-16 fill-current text-gray-600 dark:text-gray-200" />
                </a>
            </div>

            <!-- Alerts (Flash Messages) -->
            @include('includes.alerts')

            <!-- Slot Content -->
            {{ $slot }}
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>
