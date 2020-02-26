<form wire:submit.prevent="create" action="#">
    @include('_flash-messages')
    <input wire:model="name" type="text" placeholder="Name">
    @error('name') <span>{{ $message }}</span> @enderror

    <button class="btn">Create Repo</button>
</form>
