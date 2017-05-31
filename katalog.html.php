<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sklep</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="shop_style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sklep</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="image" height="300px" src="<?php echo $product['image'] ?>" alt=""/>
                    <div class="caption">
                        <h3><?php echo $product['name_'] ?></h3>
                        <p>Cena:<?php echo $product['price'] . " PLN" ?></p>
                        <p>
                            <a href="/product?id=<?php echo $product['product_id'] ?>"
                               class="btn btn-primary"
                               role="button">Więcej</a>
                            <a href="#" class="btn btn-default" role="button">Dodaj do koszyka</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <hr>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>
