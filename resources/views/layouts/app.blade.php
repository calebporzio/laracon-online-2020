<html>
<head>
    <link rel="stylesheet" href="/app.css">
    @livewireStyles
</head>
<body>
    @yield('content')

    @livewireScripts
    @stack('scripts')
</body>
</html>
