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
                    <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for
                        mid-spec gaming PC
                    </div>
                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                class="fa fa-star-o"></i></div>
                    <hr>
                    <div class="product-price"><?php echo $product["price"] ?> PLN</div>
                    <div class="product-stock">In Stock</div>
                    <hr>
                    <div class="btn-group cart">
                        <a href="/add_to_cart?id=<?php echo $product['product_id'] ?>" class="btn btn-default"
                           role="button">Dodaj
                            do koszyka</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="container product-info">
            The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for
            building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable,
            continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet,
            dual ball-bearing fan automatically adjusts its speed according to temperature, so it will
            never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool
            glow. Not feeling blue? You can turn off the lighting with the press of a button.

            <h3><?php echo $product["full_name"] ?></h3>
            <li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2
                and ATX12V 2.01 systems
            </li>
            <li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise
                level by varying fan speed in response to temperature
            </li>
            <li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to
                100% load)
            </li>
            <li>0.99 Active Power Factor Correction provides clean and reliable power</li>
            <li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to
                select the voltage input!
            </li>
            <li>Extra long fully-sleeved cables support full tower chassis</li>
            <li>A three year warranty and lifetime access to Corsair’s legendary technical support and
                customer service
            </li>
            <li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit
                Protection provide complete component safety
            </li>
            <li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
            <li>MTBF: 100,000 hours</li>
            <li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
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
