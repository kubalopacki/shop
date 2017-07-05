<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faktura</title>
    <style>
        <?php echo require ROOTPATH.'/assets/stylowanie_tabeli.css' ?>
    </style>
</head>

<body>
<table border="1">
    <tr class="heading">
        <td>Nazwa produktu</td>

        <td>Ilość szt.</td>

        <td>Cena/szt.</td>


        <td align="left">Suma</td>
    </tr>
    <?php foreach ($table as $product => $details): ?>
        <tr>
            <td class="first" align="left"><?php echo $details['name_'] ?></td>

            <td align="center"><?php echo $details['quantity'] ?></td>

            <td align="center"><?php echo $details['price'] ?></td>


            <td align="center"><?php echo $details['price'] * $details['quantity'] ?> </td>
        </tr>
    <?php endforeach ?>
    <tr>
        <td></td>
        <td></td>
        <td>Cena całkowita</td>
        <td align="right"><?php echo $order_details['wartosc_zamowienia'] ?></td>
    </tr>
</table>
</body>
</html>
