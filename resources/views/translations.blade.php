<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilingual PoC</title>
</head>
<body>
    <h1>Multilingual Proof of Concept</h1>

    <nav>
        <a href="{{ route('set.language', 'us_en') }}">US English</a> |
        <a href="{{ route('set.language', 'uk_en') }}">UK English</a> |
        <a href="{{ route('set.language', 'my_bm') }}">Malay</a>
    </nav>

    <hr>

    <ul>
        @foreach ($translations as $translation)
            <li>{{ $translation->$language }}</li>
        @endforeach
    </ul>
</body>
</html>
