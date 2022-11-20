<?php
  include "../lib/mysql.php";
  include "../lib/validate.php";

  $id = $_POST["id"];
  $pw = $_POST["pw"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];

  if (form_validation($id, $pw, $name, $gender, $age) == false) {
    echo "<script>alert('입력을 확인해 주세요.');</script>";
    echo "<script>history.back();</script>";
    return;
  } else {
    $sql = "update users set pw='" . $pw . "', name='" . $name . "', age='" . $age . "', gender='" . $gender . "' where id=" . $id . ";";
    $results = mysqli_query($conn, $sql);

    if ($results == true) {
      echo "<script>location.href = '/';</script>";
    } else { 
      echo mysqli_error($conn);
    }
  }
?>