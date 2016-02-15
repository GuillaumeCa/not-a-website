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

    <?php
    if (isset($_GET['image'])) {
      $image = $_GET['image'];
    }
    ?>

    <img src="<?php echo $image ?>" alt="lol" width="300px" />
  </body>
</html>
