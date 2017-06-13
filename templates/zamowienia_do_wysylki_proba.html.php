<?php $title = "Zamówienia" ?>
<?php include 'top_menu.html.php' ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
                <th>Numer telefonu</th>
                <th>Wartość zamówienia</th>
                <th>Szczególy zamówienia</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($zamowienia as $record): ?>
                <tr>
                    <td colspan="7">

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            <?php echo $record['order_id'] ?>
                                    </h4>
                                </div>

                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        Adres wysyłki:<br><br>
                                        <?php echo $record['imie_nazwisko'] ?><br>
                                        <?php echo $record['ulica'] ?>
                                        <?php echo $record['numer_domu'] ?><br>
                                        <?php echo $record['kod_pocztowy'] ?>
                                        <?php echo $record['miasto'] ?><br>
                                        <?php echo $record['numer_telefonu'] ?><br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.html.php' ?>
