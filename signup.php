<?php
session_start();

if (isset($_POST['submit'])) //check if submitted
//&& strstr($_SERVER['HTTP_REFERER'],'.php',true) == 'http://localhost/QueSeraSera/index') //and sended from this URL
{
  include_once("connect.php");

  $login = mysqli_real_escape_string($conn, $_POST['signupname']);
  $password = mysqli_real_escape_string($conn, $_POST['signuppass']);
  $mail = mysqli_real_escape_string($conn, $_POST['signupemail']);

  //empty fields
  if (empty($mail) || empty($login) || empty($password)) {
    header("Location: index.php?signup=empty");
    exit();
  }
    else {
      if(!preg_match("/^[a-zA-Z0-9]*$/", $login)) {
        header("Location: index.php?signup=invalid");
        exit();
      }
      else {
      //check email is valid
      if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?signup=email");
        exit();
      }
      else {
        $sql = "SELECT * FROM users WHERE `login`='$login' OR `email`='$login' OR `email`='$mail'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0) {
          header("Location: index.php?signup=userexists");
          exit();
        }
        else {
          //hashing password
          $hashPass = password_hash($password, PASSWORD_DEFAULT);
          //insert data to db
          $insert = "INSERT INTO users (`email`, `login`, `password`) VALUES ('$mail', '$login', '$hashPass');";
          $r = mysqli_query($conn, $insert);
          header("Location: index.php?signup=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: index.php?wtf");
  exit();
}
?>