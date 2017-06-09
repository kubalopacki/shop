<?php $title = "Katalog" ?>
<?php include 'top_menu.html.php' ?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="/product?id=<?php echo $product['product_id'] ?>"><img class="image" height="300px"
                                                                                    src="<?php echo $product['image'] ?>"
                                                                                    alt=""/></a>
                    <div class="caption">
                        <h3><?php echo $product['name_'] ?></h3>
                        <p>Cena:<?php echo $product['price'] . " PLN" ?></p>
                        <p>
                            <a href="/product?id=<?php echo $product['product_id'] ?>"
                               class="btn btn-primary"
                               role="button">Więcej</a>
                            <a href="/add_to_cart?id=<?php echo $product['product_id'] ?>" class="btn btn-default"
                               role="button" onclick="dodanoDoKoszyka()">Dodaj
                                do koszyka</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <hr>
</div>
<?php include 'footer.html.php' ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script> function dodanoDoKoszyka() {
        alert("Produkt został dodany do koszyka")
    } </script>
</body>
</html>
