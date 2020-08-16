<?php
require 'dbh.inc.php';
session_start();
$id = $_SESSION['userid'];

if (isset($_POST['upload'])) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize > 2700) {
        $fileNameNew = "profile".$id.".".$fileActualExt;
        $fileDestination = '../uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE profileimg SET status =0 WHERE userid='$id';";
        $result = mysqli_query($conn, $sql);
        header("Location: ../profile.php?upload=success");
      }else {
        header("Location: ../profile.php?error=file_to_big");
      }
    }else {
      header("Location: ../profile.php?error=unexpected_error");
    }
  }else {
    header("Location: ../profile.php?error=wrong_type");
  }
}
 ?>
