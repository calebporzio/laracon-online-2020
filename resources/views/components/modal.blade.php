<div x-data="{ open: false }" @close-modal.window="open = false" @keydown.escape.window="open = false" class="modal">
    <div @click="open = true">
        {{ $trigger }}
    </div>

    <div x-show="open" class="overlay">
        <div @click.away="open = false" class="content">
            {{ $slot }}
        </div>
    </div>
</div>
