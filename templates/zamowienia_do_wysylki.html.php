<?php $title = "Zamówienia" ?>
<?php include 'top_menu.html.php' ?>
<link href="../assets/zamowienia_styles.css" rel="stylesheet">
<div class="container-fluid">
    <h2 class="sub-header">Historia zamówień</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID zamówienia</th>
                <th>Status zamówienia</th>
                <th>Sposób wysyłki</th>
                <th>Imię i nazwisko</th>
                <th>Ulica</th>
                <th>Numer domu/mieszkania</th>
                <th>Kod pocztowy</th>
                <th>Świdnica</th>
                <th>Numer telefonu</th>
                <th>Wartość zamówienia</th>
                <th>Szczególy zamówienia</th>
            </tr>
            </thead>
            <?php foreach ($zamowienia as $record): ?>
            <tbody>
            <tr>
                <td><?php echo $record['order_id'] ?></td>
                <td class="important">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="order_update<?php echo $record['order_id'] ?>">Wybierz aktualny status
                                zamówienia</label>
                            <div class="col-md-4">
                                <select id="order_update<?php echo $record['order_id'] ?>" name="order_update<?php echo $record['order_id'] ?>"
                                        class="form-control">
                                    <option value="1">Zamówienie zostało złożone</option>
                                    <option value="2">Oczekuje na płatność</option>
                                    <option value="3">Zapłacone</option>
                                    <option value="4">Wysłane</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </td>
                <td><?php echo $config['shipment'][$record['sposob_wysylki']]['name'] ?></td>
                <td><?php echo $record['imie_nazwisko'] ?></td>
                <td><?php echo $record['ulica'] ?></td>
                <td><?php echo $record['numer_domu'] ?></td>
                <td><?php echo $record['kod_pocztowy'] ?></td>
                <td><?php echo $record['miasto'] ?></td>
                <td><?php echo $record['numer_telefonu'] ?></td>
                <td><?php echo $record['wartosc_zamowienia'] ?></td>
                <td><a href="/szczegoly_zamowienia?orderid=<?php echo $record['order_id'] ?>">Zobacz szczegóły
                        zamówienia</a></td>


            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.html.php' ?>
