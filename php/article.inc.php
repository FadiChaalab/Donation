<?php
if (isset($_POST['save'])){
  session_start();
  $id = $_SESSION['userid'];
  require 'dbh.inc.php';

  $article= $_POST['aricle'];


  if (empty($article)) {
    header("Location: ../profile.php?error=emptyfield");
    exit();
  }
  else {
    $sql= "UPDATE article SET userArticle ='$article' WHERE usersid='$id';";
    $result = mysqli_query($conn, $sql);

    $sqlA = "UPDATE article SET ok =0 WHERE usersid='$id';";
    $resultA = mysqli_query($conn, $sqlA);
    header("Location: ../profile.php?save=success");
    exit();

  }
}
