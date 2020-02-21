<div>
    @if (session()->has('message'))
        <div class="alert">
            <strong>Success!</strong>
            <p>{{ session('message') }}</p>
        </div>
    @endif
</div>
