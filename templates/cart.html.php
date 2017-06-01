<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Koszyk</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
                <a href="/cart" class="btn btn-default" role="button">Koszyk</a>
                <a href="/cart">Ilość produktów w koszyku(<?php echo array_sum($_SESSION['cart']) ?>)</a>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
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
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                              src="<?php echo $tablica[$id]['image'] ?>"
                                                                              style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"><?php echo $tablica[$id]['name_'] ?></a></h4>
                                    <h5 class="media-heading"> by <?php echo $tablica[$id]['full_name'] ?> <a
                                                href="#"></a>
                                    </h5>
                                    <span>Status: </span><span class="text-success"><strong>W magazynie</strong></span>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                   value="<?php echo $quantity ?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <strong><?php echo $tablica[$id]['price'] . " PLN" ?></strong>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <strong><?php echo($quantity * $tablica[$id]['price']) ?> PLN</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </button>
                        </td>
                    </tr>
                    <?php $suma[] = $tablica[$id]['price'] * $quantity ?>
                <?php endforeach ?>

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
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>