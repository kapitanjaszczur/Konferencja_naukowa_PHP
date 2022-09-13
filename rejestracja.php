<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php
    include 'header.php'
    ?>
    <body>
      <?php
      include 'navbar.php';
      ?>
      <form action="register.php" method="post">
        <div class="form-group row">
          <div class="col-2"> </div>
          <label class="col-2 col-form-label" for="imie">Imię</label>
          <div class="col-1"> </div>
          <div class="col-5">
            <input id="imie" name="imie" type="text" class="form-control" required="required">
          </div>
          <div class="col-2"> </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-2"> </div>
          <label for="nazwisko" class="col-2 col-form-label">Nazwisko</label>
          <div class="col-1"> </div>
          <div class="col-5">
            <input id="nazwisko" name="nazwisko" type="text" class="form-control" required="required">
          </div>
          <div class="col-2"> </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-2"> </div>
          <label for="mail" class="col-2 col-form-label">Adres e-mail:</label>
          <div class="col-1"> </div>
          <div class="col-5">
            <input id="mail" name="mail" type="email" required="required" class="form-control">
          </div>
          <div class="col-2"> </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-2"> </div>
          <label for="mail" class="col-2 col-form-label">Hasło:</label>
          <div class="col-1"> </div>
          <div class="col-5">
            <input id="pwd" name="pwd" type="password" required="required" class="form-control">
          </div>
          <div class="col-2"> </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-2"> </div>
          <label class="col-2">Czy chcesz zaprezentować referat?</label>
          <div class="col-1"> </div>
          <div class="col-5">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="referat" id="referat_1" type="radio" required="required" class="custom-control-input" value="tak"> 
              <label for="referat_1" class="custom-control-label">tak</label>
              <input name="referat" id="referat_0" type="radio" required="required" class="custom-control-input" value="nie" checked="checked"> 
              <label for="referat_0" class="custom-control-label">nie</label>
            </div>
          </div>
          <div class="col-2"> </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="offset-4 col-6">
            <button name="submit" type="submit" class="btn btn-primary">Wyślij</button>
            <a href="#" class="btn btn-primary">Wyczyść</a>
          </div>
        </div>
      </form>
              <?php
              include 'footer.php';
              ?>
    </body>
</html>
