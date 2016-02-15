<?php

$directory = "../Media/";

$fileurl = $directory.basename($_FILES["upload-file"]["name"]);
$uploadOk = 1;

if (isset($_POST['submit'])) {
  $check = getimagesize($_FILES["upload-file"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        // $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($fileurl)) {
    echo "Sorry, file already exists.";
    // $uploadOk = 0;
}

// Check file size octets
if ($_FILES["upload-file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

function upload($file, $path)
{
  if (move_uploaded_file($file, $path)) {
    echo "The file ". basename( $_FILES["upload-file"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    upload($_FILES["upload-file"]["tmp_name"], $fileurl);
    header("Location: index.php?image=$fileurl");
}
