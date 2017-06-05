<?php $title = "Koszyk" ?>
<?php include 'top_menu.html.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <?php if (empty($_SESSION['cart'])): ?>
                Koszyczek jest pusty ziomuś
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
                    <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
                    <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="/product?id=<?php echo $id ?>"> <img
                                            class="media-object"
                                            src="<?php echo $tablica[$id]['image'] ?>"
                                            style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a
                                                href="/product?id=<?php echo $id ?>"><?php echo $tablica[$id]['name_'] ?></a>
                                    </h4>
                                    <h5 class="media-heading"> by <?php echo $tablica[$id]['full_name'] ?><br></h5>
                                    <span>Stan: </span><span
                                            class="text-success"><strong>W magazynie</strong></span>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <strong><?php echo $quantity ?></strong>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <strong><?php echo $tablica[$id]['price'] . " PLN" ?></strong>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <strong><?php echo($quantity * $tablica[$id]['price']) ?> PLN</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/remove?id=<?php echo $tablica[$id]['product_id'] ?>">
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>Remove
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php $suma[] = $tablica[$id]['price'] * $quantity ?>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><?php echo array_sum($suma) ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Koszt wysyłki</h5></td>
                        <td class="text-right"><h5><strong>18 PLN</strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php echo array_sum($suma) + 18 ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>
                            <a href="/products">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>Powrót do sklepu
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="/checkout">
                                <button type="button" class="btn btn-success">Podsumowanie<span
                                            class="glyphicon glyphicon-play"></span>
                                </button>
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
</body>
</html>