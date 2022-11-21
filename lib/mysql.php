<?php
  $host   = "localhost";
  $user   = "user";
  $pw     = "password";
  $dbname = "dbname";

  $conn   = mysqli_connect($host, $user, $pw, $dbname) or die('Unabled to connect to Database. Check Connection Configurations');
?>