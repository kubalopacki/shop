<?php $title = "Logowanie" ?>
<?php include 'top_menu.html.php' ?>
<link href="../assets/login_style.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"></h1>
            <?php if (isset($_SESSION['flashMessage'])): ?>
                <p><?php echo $_SESSION['flashMessage'] ?></p>
                <?php unset($_SESSION['flashMessage'] ) ?>
            <?php endif ?>
            <div class="account-wall">
                <img class="profile-img"
                     src="https://unsplash.it/96/96/?random"
                     alt="">
                <form method="post" action="/sign_in" class="form-signin">
                    <input name="login" type="text" class="form-control" placeholder="login" required autofocus>
                    <input name="password" type="password" class="form-control" placeholder="hasło" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Zaloguj się
                    </button>
                    <div class="text-center">
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me">
                            Zapamiętaj mnie
                        </label>
                    </div>
                    <a href="#" class="pull-right need-help"></a><span class="clearfix"></span>
                </form>
            </div>
            <a href="/new_account" class="text-center new-account">Utwórz konto </a>
        </div>
    </div>
</div>

<?php include 'footer.html.php' ?>
