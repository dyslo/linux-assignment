<?php
  include "../lib/mysql.php";

  $query = $_GET["query"];
  $sql = "select id, name, age, gender from users where id like '%" . $query . "%' or name like '%" . $query . "%';";
  $results = mysqli_query($conn, $sql);

  $result_arr = array();
  
  while($row = mysqli_fetch_array($results)) {
    $temp = array("id" => $row["id"], "name" => $row["name"], "age" => $row["age"], "gender" => $row["gender"]);
    array_push($result_arr, $temp);
  }

  echo json_encode($result_arr);
?>