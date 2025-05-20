<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')

    <title>
        @hasSection('title')
            @yield('title') - {{ config('app.name', 'Bee Haven PVT LTD') }}
        @else
            {{ config('app.name', 'Bee Haven PVT LTD') }}
        @endif
    </title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Vite compiled CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-white">

    <!-- Main Layout Container -->
    <div class="min-h-screen flex flex-col">

        <!-- Topbar -->
        @include('partials.topbar')
        <!-- Navigation -->
        @include('partials.navbar')

        <!-- Breadcrumbs (Optional) -->
        @hasSection('breadcrumb')
            <div class="container mx-auto px-4 mt-4">
                @include('partials.breadcrumbs')
            </div>
        @endif

        <!-- Alerts (Flash Messages) -->
        <div class="container mx-auto px-4 mt-4">
            @include('partials.alerts')
        </div>

        <!-- Optional Page Header -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Optional Contact CTA (Only if not on home page) -->
        @if (Route::currentRouteName() !== 'home' && Route::currentRouteName() !== 'about' && Route::currentRouteName() !== 'homes')
            @include('partials.contact')
        @endif

        <!-- Footer -->
        @include('partials.footer-agent-subscription')
        <!-- Footer -->
        @include('partials.footer-top')
        <!-- Footer -->
        @include('partials.footer')
    </div>

    <!-- Page-level scripts -->
    @include('partials.scripts')
    @yield('scripts')

</body>
</html>
