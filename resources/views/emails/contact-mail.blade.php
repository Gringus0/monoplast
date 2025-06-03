<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kontakt poruka</title>
</head>
<body>
<h2>Nova poruka preko kontakt forme</h2>

<p><strong>Ime:</strong> {{ $ime }}</p>
<p><strong>Telefon:</strong> {{ $telefon }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Poruka:</strong><br/> {!! nl2br(e($text)) !!}</p>
</body>
</html>
