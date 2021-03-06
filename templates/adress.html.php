<?php $title = "Podsumowanie" ?>
<?php include 'top_menu.html.php' ?>
    <div class="container">
        <?php if (!isset($_SESSION['user']['customer_id'])): ?>
            <div class="alert alert-info text-center" role="alert" >Składasz swoje zamówienie jako gość, jeżeli założysz konto nie
                będziesz musiał za każdym razem wpisywać swoich danych oraz uzyskasz podgląd do histori zakupów.
            </div>
        <?php endif; ?>
        <form class="form-horizontal" method="post" action="/finish_order" action="/address_update">
            <fieldset>

                <!-- Form Name -->
                <legend>Adres dostawy</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           for="adres">Imię i nazwisko</label>
                    <div class="col-md-4">
                        <input id="adres" name="imie_nazwisko" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['imie_nazwisko'] ?>"
                               class="form-control input-md"
                               required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="ulica">Ulica</label>
                    <div class="col-md-4">
                        <input id="ulica" name="ulica" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['ulica'] ?>"
                               class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nrdomu">Numer domu</label>
                    <div class="col-md-4">
                        <input id="nrdomu" name="numer_domu" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['nr_domu'] ?>"
                               class="form-control input-md"
                               required="">

                    </div>
                </div>
                <script>
                    var input = document.getElementById('kodpocztowy');

                    input.oninvalid = function (event) {
                        event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
                    }
                </script>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           for="kodpocztowy">Kod pocztowy</label>
                    <div class="col-md-4">
                        <input id="kodpocztowy" name="kod_pocztowy" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['kod_pocztowy'] ?>"
                               class="form-control input-md" title="Np. 58-100" required="" pattern="[0-9]{2}-[0-9]{3}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="miasto">Miasto</label>
                    <div class="col-md-4">
                        <input id="miasto" name="miasto" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['miasto'] ?>"
                               class="form-control input-md"
                               required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           for="nrtelefonu">Numer telefonu</label>
                    <div class="col-md-4">
                        <input id="nrtelefonu" name="numer_telefonu" type="text"
                               value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['telefon'] ?>"
                               class="form-control input-md" required="">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea">Komentarz do zamówienia</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="komentarz"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="regulamin"></label>
                    <div class="col-md-4">
                        <div class="checkbox">
                            <label for="regulamin-">
                                <input required type="checkbox" id="regulamin" value="">
                                Zapoznałem się z <a href="/regulamin">regulaminem</a> sklepu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="form-group">
                        <label class="col-md-4  control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <button  id="button1id" value="1" type="submit" name="status" class="btn btn-success">Kupuję
                            </button>
                        </div>
                    </div>
                </div>


    </div>

    <!--</div>
    Text input
    <div class="form-group">
        <label class="col-md-4 control-label" for="kodrabatowy">Kod rabatowy</label>
        <div class="col-md-4">
            <input id="kodrabatowy" name="kodrabatowy" type="text" value="" class="form-control input-md">

        </div>
    </div>-->

    </fieldset>
    </form>
    </div>
    <!--<div class="container">
        <form class="form-horizontal" method="post" action="/finish_order">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea">Komentarz do zamówienia</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

    <div class="container">
        <div class="form-group">
            <label class="col-md-4 control-label" for="regulamin"></label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="regulamin-">
                        <input type="checkbox" name="regulamin" id="regulamin-" value="">
                        Zapoznałem się z <a href="/regulamin">regulaminem</a> sklepu
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <button id="button1id" type="submit" name="button1id" class="btn btn-success">Kupuję</button>
            </div>
        </div>
    </div>
    -->
<?php include 'footer.html.php' ?>