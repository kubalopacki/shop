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
        <div class="row" style="margin-bottom:15px">
            <div class="col-xs-12">
                <div class="btn-group pull-right" role="group" aria-label="..." style="margin-top:10px;">
                    <a href="/katalog">
                        <button type="button" class="btn btn-default btn-info"><span class="fa fa-arrow-left"></span>Powrót
                            do sklepu
                        </button>
                    </a>
                    <button type="button" class="btn btn-default btn-success"><span class="fa fa-shopping-cart"></span>Do
                        kasy
                    </button>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.html.php' ?>