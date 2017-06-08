<?php $title = "Nowe konto" ?>
<?php include 'top_menu.html.php' ?>

<form method="post" action="/create_new_account" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Logowanie</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="login_email">E-mail</label>
            <div class="col-md-4">
                <input id="login_email" name="login" type="text" placeholder="jan.kowalski@gmail.com"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="haslo">Hasło</label>
            <div class="col-md-4">
                <input id="haslo" name="haslo" type="password" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="haslo2">Powtórz hasło</label>
            <div class="col-md-4">
                <input id="haslo2" name="haslo2" type="password" placeholder="" class="form-control input-md"
                       required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="logowanie"></label>
            <div class="col-md-4">
                <button id="logowanie" name="logowanie" class="btn btn-primary">Utwórz konto</button>
            </div>
        </div>

    </fieldset>
</form>

<?php include 'footer.html.php' ?>
