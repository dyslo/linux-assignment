<?php
  include "../lib/mysql.php";

  $id = $_GET["id"];
  $sql = "delete from users where id=" . $id . ";";
  $results = mysqli_query($conn, $sql);
  if ($results == true) {
    echo "<script>location.href = '/';</script>";
  }
?>