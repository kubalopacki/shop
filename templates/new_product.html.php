<?php $title = "Nowy produkt" ?>
<?php include 'top_menu.html.php' ?>

<form class="form-horizontal" action="/add_new_product_record" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Nowy produkt</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">Zdjęcie</label>
            <div class="col-md-4">
                <input id="image" name="image" type="text" placeholder="link URL do zdjęcia"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="producer_model">Nazwa producenta oraz model</label>
            <div class="col-md-4">
                <input id="producer_model" name="producer_model" type="text" placeholder="np. Dartmoor Thug"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="price">Cena</label>
            <div class="col-md-4">
                <input id="price" name="price" type="text" placeholder="cena w PLN"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="partname">Nazwa części</label>
            <div class="col-md-4">
                <input id="partname" name="partname" type="text" placeholder="nazwa części"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="update"></label>
            <div class="col-md-4">
                <button id="update" name="update" type="submit" class="btn btn-primary">Dodaj produkt</button>
            </div>
        </div>

    </fieldset>
</form>

<?php include 'footer.html.php' ?>
