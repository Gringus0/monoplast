<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nova Porudžbina</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
<table style="max-width: 600px; background: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <tr>
        <td style="text-align: center;">
            <h2 style="color: #333;">🛍️ Nova Porudžbina</h2>
            <p style="color: #888;">Datum: {{ $order->datum }}</p>
            <p style="color: #888;">Broj porudžbine: <strong>{{ $order->broj_porudzbine }}</strong></p>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 20px;">
            <h3 style="color: #333;">👤 Podaci o kupcu</h3>
            <p><strong>Ime:</strong> {{ $order->ime }}</p>
            <p><strong>Firma:</strong> {{ $order->firma }}</p>
            <p><strong>Telefon:</strong> {{ $order->telefon }}</p>
            <p><strong>Email:</strong> {{ $order->mail }}</p>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 20px;">
            <h3 style="color: #333;">📦 Detalji porudžbine</h3>
            <p><strong>Tip kese:</strong> {{ $order->vrsta_kese }}</p>
            <p><strong>Materijal:</strong> {{ $order->materijal }}</p>
            <p><strong>Dimenzije (V x Š):</strong> {{ $order->visina }} x {{ $order->sirina }} cm</p>
            <p><strong>Boja kese:</strong> {{ $order->boja_kese }}</p>
            <p><strong>Boja ručke:</strong> {{ $order->boja_rucke ?: 'Nije navedeno' }}</p>
            <p><strong>Vrsta štampe:</strong> {{ $order->vrsta_stampe }}</p>
            <p><strong>Količina:</strong> {{ $order->kolicina }}</p>
        </td>
    </tr>
    @if($order->informacije)
        <tr>
            <td style="padding-top: 20px;">
                <h3 style="color: #333;">📄 Dodatne informacije</h3>
                <p>{{ $order->informacije }}</p>
            </td>
        </tr>
    @endif
    @if($order->fajl1)
        <tr>
            <td style="padding-top: 20px;">
                <h3 style="color: #333;">🖼️ Priložena slika</h3>
                <p>
                    <a href="{{ asset('assets/img/images/porudzbine/' . $order->fajl1) }}" target="_blank">
                        Pogledaj fajl
                    </a>
                </p>
            </td>
        </tr>
    @endif
</table>
</body>
</html>
