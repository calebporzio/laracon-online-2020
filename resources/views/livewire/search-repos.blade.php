<div>
    <div wire:loading.class="is-loading">
        <input wire:model="search" type="text" placeholder="Search Repos...">
    </div>

    <ul>
        @foreach ($repos as $repo)
            <li>{{ $repo->name }}</li>
        @endforeach
    </ul>
</div>
