<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css"/>
        <title>AD'DOC</title>
        <meta charset="utf-8" />
    </head>


    <body>
      <?php include("BDDconnect.php"); ?>
      <?php include("function.php"); ?>
      <!--Menu en haut de la page-->
      <?php include("header.php"); ?>

      <!--Content-->
      <div class="Blocktext">
        <h1 style="text-align:center;">AD'DOC unique</h1>
        <h3 style="text-align:center;">L'évalutation des risques "Pratiques adictives".</h3>
      </div>

      <div class="blockprincipal">
        <div class="Connection">
          test
        </div>

        <div class="Inscription">
          <?php include("inscription.php"); ?>
        </div>
      </div>

  </body>
  <!--Footer de la page-->
  <?php include("footer.php"); ?>
</html>
