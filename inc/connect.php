<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'justnote';

@$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
if(!$conn) {
  die("<p id='dbErr'>Ojej! A co to się porobiło?<span class='bigError'>" . mysqli_connect_error($conn) . '</p>');
}
?>