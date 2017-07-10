<?php $title = "Koszyk" ?>
<?php include 'top_menu.html.php' ?>
<?php $echo = false; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?php if (empty($_SESSION['cart'])): ?>
                Koszyk jest pusty!
            <?php else: ?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Ilość</th>
                        <th class="text-center">Cena</th>
                        <th class="text-center">Suma</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
                        <tr id="row_<?php echo $id ?>">

                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="/product?id=<?php echo $id ?>">
                                        <img class="media-object"
                                             src="<?php echo $tablica[$id]['image'] ?>"
                                             style="width: 72px; height: 72px;"/>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="/product?id=<?php echo $id ?>">
                                                <?php echo $tablica[$id]['name_'] ?>
                                            </a>
                                        </h4>
                                        <h5 class="media-heading">
                                            by <?php echo $tablica[$id]['full_name'] ?><br>
                                        </h5>
                                        <span>Stan: </span>

                                        <?php if ($tablica[$id]['stock'] == 0): ?>
                                        <?php $echo = true; ?>
                                        <span class="text-success" style="color:#CC3300">
                                                <strong>Produkt dostępny na zamówienie.*</strong>
                                            <?php else: ?>
                                            <span class="text-success">
                                                <strong>W magazynie.</strong>
                                                <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                                <strong>
                                    <span id="ilosc_produktu_<?php echo $id ?>"><?php echo $quantity ?></span>
                                </strong>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                                <strong><?php echo $tablica[$id]['price'] . " PLN" ?></strong>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                                <strong id="suma_<?php echo $id ?>">
                                    <?php echo($quantity * $tablica[$id]['price']) ?>
                                </strong> PLN
                            </td>

                            <td class="col-sm-1 col-md-1">
                                <button id="remove"
                                        type="button"
                                        class="btn btn-danger remove-button"
                                        data-product_id="<?php echo $id ?>">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    Remove
                                </button>
                            </td>

                        </tr>

                    <?php endforeach; ?>
                    <tr>
                        <td>
                            <?php if ($echo): ?>
                                <span style="font-size: 11px">*Nie wszystkie zamówione przez Ciebie produkty są w naszym
                                magazynie.<br>
                            Czas realizacji może
                            się wydłużyć.</span>
                            <?php endif; ?>
                        </td>
                        <td>  </td>
                        <td>  </td>
                        <td>
                            <h5>Wartość koszyka:</h5>
                        </td>
                        <td class="text-right">
                            <h5>
                                <strong id="cart-value"><?php echo $cart_value ?></strong> PLN
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>
                            <a href="/products" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                Powrót do sklepu
                            </a>
                        </td>
                        <td>
                            <a href="/checkout" class="btn btn-success">
                                Podsumowanie
                                <span class="glyphicon glyphicon-play"></span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include 'footer.html.php' ?>

<script>

    $(".remove-button").click(function () {
        var product_id = $(this).data('product_id');
        $.post('/remove_product_from_cart', {
            'product_id': product_id
        }, function (data) {
            if (data.cart_value = 0) {

            }
            if (data.quantity > 0) {
                $('#ilosc_produktu_' + product_id).html(data.quantity);
            } else {
                $('#row_' + product_id).remove();
            }
            $('#suma_' + product_id).html(data.suma);
            $('#cart-value').html(data.cart_value);
        });
    });

</script>
</body>
</html>