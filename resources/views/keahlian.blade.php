<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keahlian - Portfolio</title>
</head>
<body>
    <h1>Keahlian</h1>
    <ul>
        @foreach ($skill as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <a href="/">Kembali ke Home</a>
</body>
</html>