<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload files</title>
  </head>
  <body>
    <h1>Upload de fichiers</h1>
    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="upload-file">
      <input type="submit" name="submit" value="Upload Image">
    </form>
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
