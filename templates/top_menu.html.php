<?php print_r($_SESSION); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/shop_style.css" rel="stylesheet">
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
            <a class="navbar-brand" href="/products">Sklep</a>
            <?php if (false === isset($_SESSION['admin']) && false === isset($_SESSION['user'])): ?>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/login">Zaloguj się</a></li>
                </ul>
            <?php elseif (isset($_SESSION['user'])): ?>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/moje_zamowienia">Moje zamówienia</a></li>
                    <li><a href="/logout">Wyloguj się</a></li>
                    <li><a href="/panel">Moje konto</a></li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/add_new_product">Nowy produkt</a></li>
                    <li><a href="/logout">Wyloguj się</a></li>
                    <li><a href="/panel">Moje konto</a></li>
                    <li><a href="/zamowienia">Historia zamówień</a></li>
                    <li><a href="/zamowienia_do_wysylki">Zamówienia do wysyłki</a></li>
                </ul>
            <?php endif; ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <form class="navbar-form navbar-right">
                <a href="/cart" class="btn btn-default" role="button">Koszyk</a>
                <a href="/cart">Ilość produktów w koszyku(<?php echo array_sum($_SESSION['cart'] ?? []) ?>)</a>

            </form>
        </div>
    </div>

</nav>