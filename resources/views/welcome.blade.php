<html>
<head>
    <link rel="stylesheet" href="/styles.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    <livewire:styles/>
</head>
<body>
    <x-modal>
        <x-slot name="trigger">
            <button class="btn">Show Modal</button>
        </x-slot>

        <livewire:create-repo/>
    </x-modal>

    <livewire:search-repos initial-search="livewire"/>

    <livewire:scripts/>
</body>
</html>
