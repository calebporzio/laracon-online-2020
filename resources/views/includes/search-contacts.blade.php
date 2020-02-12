<form action="/">
    <div>
        <input name="search" placeholder="Search...">
    </div>

    <ul>
        @foreach (App\Contact::all() as $contact)
            @include('includes.contact-list-item')
        @endforeach
    </ul>
</form>
