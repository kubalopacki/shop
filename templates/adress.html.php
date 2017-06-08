<?php $title = "Podsumowanie" ?>
<?php include 'top_menu.html.php' ?>
<div class="container">
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Adres dostawy</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label"
                       for="adres">Imię i nazwisko</label>
                <div class="col-md-4">
                    <input id="adres" name="adres" type="text"
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
                    <input id="nrdomu" name="nrdomu" type="text"
                           value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['nr_domu'] ?>"
                           class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label"
                       for="kodpoczotwy">Kod pocztowy</label>
                <div class="col-md-4">
                    <input id="kodpocztowy" name="kodpocztowy" type="text"
                           value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['kod_pocztowy'] ?>"
                           class="form-control input-md" required="">

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
                    <input id="nrtelefonu" name="nrtelefonu" type="text"
                           value="<?php if (isset($_SESSION['user']['customer_id'])) echo $dane['telefon'] ?>"
                           class="form-control input-md" required="">

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="kodrabatowy">Kod rabatowy</label>
                <div class="col-md-4">
                    <input id="kodrabatowy" name="kodrabatowy" type="text" value="" class="form-control input-md">

                </div>
            </div>

        </fieldset>
    </form>
</div>
<div class="container">
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Sposób płatności</legend>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Wybierz sposób płatności</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="">Odbiór osobisty (0 zł)</option>
                        <option value="">Płatność przy odbiorze Paczkomaty (12 zł)</option>
                        <option value="">Płatność przy odbiorze poczta polska (17 zł)</option>
                        <option value="">Płatność przy odbiorze kurier DHL (2 zł)</option>
                        <option value="">Przedpłata na konto (1 zł)</option>
                    </select>
                </div>
            </div>

        </fieldset>
    </form>

</div>
<div class="container">
    <form class="form-horizontal">
        <fieldset>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Komentarz do zamówienia</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="textarea"></textarea>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<!-- Multiple Checkboxes -->
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

<!-- Button (Double) -->
<div class="container">
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" name="button1id" class="btn btn-success">Kupuję</button>
        </div>
    </div>
</div>

<?php include 'footer.html.php' ?>
