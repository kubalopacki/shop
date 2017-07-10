<?php $title = $product["full_name"] ?>
<?php include 'top_menu.html.php' ?>
<link href="../assets/product_page_style.css" rel="stylesheet">
<link href="../assets/product_page_style_2.css" rel="stylesheet">

<div class="container-fluid">
    <div class="content-wrapper">
        <div class="item-container">
            <div class="container">
                <div class="col-md-12">

                    <img class="image"
                         id="item-display"
                         src="<?php echo $product["image"] ?>"
                         alt="">


                </div>

                <div class="col-md-7">
                    <div class="product-title"><?php echo $product["name_"] ?></div>
                    <div class="product-desc"><?php echo $product["full_name"] ?>
                    </div>
                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                class="fa fa-star-o"></i></div>
                    <hr>
                    <div class="product-price"><?php echo $product["price"] ?> PLN</div>
                    <?php if ($product["stock"] == 0): ?>
                        <div class="product-stock" style="color:#CC3300">Produkt dostępny na zamówienie.</div>
                    <?php else: ?>
                        <div class="product-stock">W magazynie</div>
                    <?php endif; ?>
                    <hr>
                    <div class="btn-group cart">
                        <a href="/add_to_cart?id=<?php echo $product['product_id'] ?>" class="btn btn-default"
                           role="button">Dodaj
                            do koszyka</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="container product-info"><?php echo $product["description"] ?>

        </section>

    </div>
    <div class="tab-pane fade" id="service-two">

        <section class="container">

        </section>

    </div>
    <div class="tab-pane fade" id="service-three">

    </div>
</div>
<hr>
<?php include 'footer.html.php' ?>


</body>
</html>
