<?php
if (isset($_POST['sign-up'])){

  require 'dbh.inc.php';

  $first= $_POST['first'];
  $last= $_POST['last'];
  $email= $_POST['email'];
  $pwd= $_POST['pwd'];
  $repwd= $_POST['repwd'];

  if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($repwd)) {
    header("Location: ../index.php?error=emptyfields&first=".$first."&last=".$last."&mail=".$email);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $first) && !preg_match("/^[a-zA-Z0-9]*$/", $last) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=invalidmail_last_first");
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $first) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=invalidmail_first&last=".$last);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $last) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=invalidmail_last&first=".$first);
    exit();
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=invalidmail&first=".$first."&last=".$last);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $last)) {
    header("Location: ../index.php?error=invalidlast&first=".$first."&mail=".$email);
    exit();
  }
  elseif ($pwd !== $repwd) {
    header("Location: ../index.php?error=invalidpassword&first=".$first."&last=".$last."&mail=".$email);
    exit();
  }
  else {

    $sql= "SELECT idusers FROM users WHERE firstUsers=?;";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $first);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck= mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../index.php?error=already_used");
        exit();
      }
      else {
        $sql= "INSERT INTO users (firstUsers, lastUsers, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";
        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?error=sqlerror");
          exit();
      }
      else {
        $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $first, $last, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php?signup=success");
        exit();
      }
    }
  }
}
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../index.php");
  exit();
}
 ?>
