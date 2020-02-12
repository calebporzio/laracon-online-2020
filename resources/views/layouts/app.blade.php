<html>
<head>
    <link rel="stylesheet" href="/app.css">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
</head>
<body>
    @yield('content')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/alpine-plugin@v0.1.0/dist/livewire-alpine-plugin.js"></script>
    @stack('scripts')
</body>
</html>
