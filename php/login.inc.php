<?php
if (isset($_POST['login'])){

  require 'dbh.inc.php';

  $email= $_POST['email'];
  $pwd= $_POST['pwd'];

  if (empty($email) || empty($pwd)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql= "SELECT * FROM users WHERE emailUsers=?;";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result= mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($pwd, $row['pwdUsers']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=wrong_pwd");
          exit();
        }
        elseif ($pwdCheck == true) {
          session_start();
          $_SESSION['userid']= $row['idusers'];
          $_SESSION['useremail']= $row['emailUsers'];

          $userid = $row['idusers'];
          $sqlI = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
          mysqli_query($conn, $sqlI);

          $sqlArticle = "INSERT INTO article (usersid, ok) VALUES ('$userid', 1)";
          mysqli_query($conn, $sqlArticle);
          header("Location: ../profile.php?login=success");
          exit();
        }
        else {
          header("Location: ../index.php?error=wrong_pwd");
          exit();
      }
      }
      else {
        header("Location: ../index.php?error=no_match");
        exit();
    }
  }
}
}
else {
  header("Location: ../index.php");
  exit();
}
 ?>
