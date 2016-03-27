<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="upload-file">
      <input type="submit" name="submit" value="Upload Image">
    </form>
    <a href="rechercheville">recherche lieu</a>
    <a href="rechercheav">recherche avancée</a>
    <a href="calendar.php">calendrier</a>
    <a href="testcal.php">calendrier avancé</a>
    <a href="notif.php">Notifications</a>
    <div class="">
      <?php

      $directory = "../Media/";
      $images = glob($directory . "*.{jpg,png}", GLOB_BRACE);
      foreach($images as $image)
      {
        ?><img src="<?php echo $image ?>" alt="lol" width="300px" /><br><?php
      }


      ?>
    </div>
  </body>
</html>
