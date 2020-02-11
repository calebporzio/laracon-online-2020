<form action="/" method="GET">
    <input type="text" name="search" value="{{ $search }}" placeholder="Search things..." autofocus>

    <div class="while-loading" style="display: none;">Loading...</div>

    <ul>
        @foreach($things as $thing)
            <li>{{ $thing->title }}</li>
        @endforeach
    </ul>
</form>

@push('scripts')
<script src="https://unpkg.com/morphdom@2.5.12/dist/morphdom-umd.js"></script>
<script>
    document.querySelector('input').addEventListener('input', e => {
        document.querySelector('.while-loading').style.display = 'block'
        fetch('/search-component?search='+e.target.value)
            .then(response => response.text())
            .then(html => {
                morphdom(
                    document.querySelector('form'),
                    html
                )

                document.querySelector('.while-loading').style.display = 'none'
            })
    })
</script>
@endpush
