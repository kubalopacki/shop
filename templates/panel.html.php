<?php $title = "Panel użytkownika" ?>
<?php include 'top_menu.html.php' ?>


<div class="container">
    <form method="post" action="/adress_update"  class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Adres</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="adres">Imię i nazwisko</label>
                <div class="col-md-4">
                    <input id="imie_nazwisko" name="imie_nazwisko" type="text" placeholder="Jan Kowalski"
                           class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ulica">Ulica</label>
                <div class="col-md-4">
                    <input id="ulica" name="ulica" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nrdomu">Numer domu</label>
                <div class="col-md-4">
                    <input id="nrdomu" name="nr_domu" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="kodpoczotwy">Kod pocztowy</label>
                <div class="col-md-4">
                    <input id="kodpoczotwy" name="kod_pocztowy" type="text" placeholder="00-000"
                           class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="miasto">Miasto</label>
                <div class="col-md-4">
                    <input id="miasto" name="miasto" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nrtelefonu">Numer telefonu</label>
                <div class="col-md-4">
                    <input id="telefon" name="telefon" type="text" placeholder="000 000 000"
                           class="form-control input-md" required="">

                </div>
            </div>

            <div class="col-md-12 text-center">
                <button id="button1id" class="btn btn-success" type="submit">Zapisz dane</button>
            </div>
        </fieldset>
    </form>

</div>


<?php include 'footer.html.php' ?>
