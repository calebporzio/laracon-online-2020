<html>
<head>
    <link rel="stylesheet" href="/tailwind.css">
    <style>
        .is-loading { position: relative; }
        .is-loading::after { position: absolute!important; right: .75em; top: .75em; z-index: 4; -webkit-animation: spinAround .2s infinite linear; animation: spinAround .5s infinite linear; border: 2px solid #cbd5e0; border-radius: 290486px; border-right-color: transparent; border-top-color: transparent; content: ""; display: block; height: 1em; position: relative; width: 1em; }
        @-webkit-keyframes spinAround { from { transform: rotate(0) } to { transform: rotate(359deg) } } @keyframes spinAround { from { transform: rotate(0) } to { transform: rotate(359deg) } }
        body {background-color: #edf2f7; padding-top: 4rem; padding-bottom: 4rem;}
        body>div {margin: auto; width: 24rem;}
        input { width: 100%; -webkit-appearance: none; -moz-appearance: none; appearance: none; background-color: #fff; border-color: #e2e8f0; border-width: 1px; border-radius: 0.25rem; padding-top: 0.5rem; padding-right: 0.75rem; padding-bottom: 0.5rem; padding-left: 0.75rem; font-size: 1rem; line-height: 1.5;}
        ul { background: white; border-width: 1px; border-radius: 0.25rem; margin-top: 1rem; border-color: #e2e8f0; }
    </style>
</head>
<body>
    <div>
        <input type="text" placeholder="Search...">

        <ul>
            @foreach (App\Contact::search(request('search')) as $contact)
                @include('_contact-list-item')
            @endforeach
        </ul>
    </div>
</body>
</html>
