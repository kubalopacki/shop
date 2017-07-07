<?php $title = "Podsumowanie" ?>
<?php include 'top_menu.html.php' ?>

    <link href="../assets/checkout2_styles.css" rel="stylesheet">

    <div class="container" style="margin-top:120px;">
    <div class="row">
        <!-- Title -->
        <ol class="breadcrumb">
            <li><a href="/cart">Koszyk</a></li>
            <li>Podsumowanie</li>
        </ol>
    </div>
    <div class="row product-row">
        <!-- Products-->
        <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
            <div class="col-xs-12 col-sm-7">
                <div class="media">
                    <a class="pull-left" href="/product?id=<?php echo $id ?>"><img class="img-checkout"
                                                                                   src="<?php echo $tablica[$id]['image'] ?>"></a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $tablica[$id]['name_'] ?></h4>
                        <p class="text-muted"><?php echo $tablica[$id]['full_name'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <table>
                    <tr>
                        <td width="800px"><b>Ilość:</b><?php echo $quantity ?></td>
                        <td width="400px"><b>Cena/szt.:</b><?php echo $tablica[$id]['price'] ?></td>
                        <td width="200px"><b>Suma:</b><?php echo $quantity * $tablica[$id]['price'] ?></td>
                </table>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="container">
        <form method="post" action="/adress" class="form-horizontal">
            <fieldset>
                <legend></legend>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="wysylka">Wybierz sposób płatności</label>
                    <div class="col-md-4">
                        <select id="comboA" onchange="getComboA(this.selectedOptions[0].dataset.price)"
                                name="wysylka"
                                class="form-control">
                            <?php foreach ($config['shipment'] as $id => $shipment): ?>
                                <option data-price="<?php echo $shipment['price'] ?>" value="<?php echo $id ?>">
                                    <?php echo $shipment['name'] ?>
                                </option>
                            <?php endforeach ?>
                            <!--                            <option data-price="0" value="1">Odbiór osobisty (0 zł)</option>-->
                            <!--                            <option data-price="12" value="2">Płatność przy odbiorze Paczkomaty (12 zł)</option>-->
                            <!--                            <option data-price="17" value="3">Płatność przy odbiorze poczta polska (17 zł)</option>-->
                            <!--                            <option data-price="20" value="4">Płatność przy odbiorze kurier DHL (20 zł)</option>-->
                            <!--                            <option data-price="10" value="5">Przedpłata na konto (10 zł)</option>-->
                        </select>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-9">
                            <h4 class="text-right">Suma <strong id="suma"><?php $cart_value ?></strong> PLN</h4>
                        </div>
                        <div class="col-xs-3">
                            <button type="submit" class="btn btn-success btn-block">
                                Do kasy
                            </button>
                        </div>
                    </div>
                </div>

                <script>
                    function getComboA(value) {
                        var cart_value = <?php echo $cart_value ?>;
                        var value = cart_value + parseInt(value);
                        document.getElementById('suma').innerHTML = value;
                    }
                    getComboA(0);
                </script>


            </fieldset>
        </form>

    </div>
    <div class="container">
        <form class="form-horizontal">
            <fieldset>

    </div>

<?php include 'footer.html.php' ?>