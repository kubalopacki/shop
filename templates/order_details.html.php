<html>
<head>
    <meta charset="utf-8">
    <title>Szczegóły zamówienia</title>
    <link rel="stylesheet" href="../assets/order_details_styles.css">
</head>
<body>
<header>
    <h1>Szczegóły zamówienia</h1>

</header>
<article>
    <h1>Recipient</h1>
    <address>
        <p><?php echo $order['imie_nazwisko'] ?><br>
            <?php echo $order['ulica'] . " " . $order['numer_domu'] ?><br>
            <?php echo $order['kod_pocztowy'] . " " . $order['miasto'] ?><br>
        </p>
    </address>
    <table class="meta">
        <tr>
            <th>Numer zamówienia</th>
            <td><?php echo $order['order_id'] ?></td>
        </tr>
        <tr>
            <th>Data</th>
            <td><?php echo $order['order_date'] ?></td>
        </tr>
        <tr>
            <th>Wartość zamówienia</th>
            <td><?php echo $order['wartosc_zamowienia'] ?></td>
        </tr>
    </table>
    <table class="inventory">
        <thead>
        <tr>
            <th>Produkt</th>
            <th>Opis</th>
            <th>Ilość</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($table as $product => $values): ?>
        <tr>
            <td><?php echo $values['name_'] ?></td>
            <td><?php echo $price = $values['price'] ?></td>
            <td><?php echo $quantity = $values['quantity'] ?></td>
            <td><?php echo $price * $quantity ?></td>
        </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    <table class="balance">
        <tr>
            <th>Wartość</th>
            <td><?php echo $wartosc = $order['wartosc_zamowienia'] ?></td>
        </tr>
        <tr>
            <th>Koszt wysyłki</th>
            <?php $wysylka = $order['sposob_wysylki'] ?>
            <td><?php echo $koszt_wysylki = $config['shipment'][$wysylka]['price'] ?></td>
        </tr>
        <tr>
            <th>Suma</th>
            <td><?php echo $koszt_wysylki + $wartosc ?></td>
        </tr>
    </table>
</article>



</body>
</html>