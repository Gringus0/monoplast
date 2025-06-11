<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Kontakt Poruka</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
<table style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
    <tr>
        <td style="text-align: center;">
            <h2 style="color: #333;">📬 Nova Kontakt Poruka</h2>
            <p style="color: #777;">Primljena preko kontakt forme</p>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 20px;">
            <h3 style="color: #333;">👤 Podaci Pošiljaoca</h3>
            <p><strong>Ime:</strong> {{ $ime }}</p>
            <p><strong>Telefon:</strong> {{ $telefon }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 20px;">
            <h3 style="color: #333;">✉️ Poruka</h3>
            <div style="background-color: #f1f1f1; padding: 15px; border-radius: 5px; color: #333;">
                {{ $text }}
            </div>
        </td>
    </tr>
</table>
</body>
</html>
