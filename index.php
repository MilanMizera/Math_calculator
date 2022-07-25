<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?> ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
  <?php include 'math.php' ?>
<h1 class="form_title"> Matematická kalkulačka</h1>

<form method="post" action="index.php">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
    <div class="col">
      <input type="text" name="number1" class="form-control" id="inputEmail3" placeholder="Zde zadejte Vaše první číslo">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="text" name="number2" class="form-control" id="inputPassword3" placeholder="Zde zadejte Vaše druhé číslo">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0"></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="g" id="gridRadios1" value="+" checked>
          <label class="form-check-label" for="gridRadios1">
            Sčítání +
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="g" id="gridRadios2" value="-">
          <label class="form-check-label" for="gridRadios2">
            Odčítání -
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="g" id="gridRadios3" value="*">
          <label class="form-check-label" for="gridRadios2">
            Násobení x
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="g" id="gridRadios4" value="/">
          <label class="form-check-label" for="gridRadios2">
            Dělení ÷
          </label>
        </div>

      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <div class="col">
      <button type="submit" name="submit" class="btn btn-primary">Odeslat</button>
    </div>
  </div>
</form>
<?php if ($result) : ?>
<h2 class="my_result">Výsledek:<?= $result ?></h2>
<?php endif ?>
<script src="bootstrap/js/bootstrap.js"> </script>
</body>
</html>