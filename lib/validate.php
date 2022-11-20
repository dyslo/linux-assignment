<?php
  function form_validation($id, $pw, $name, $gender, $age) {
    if(ctype_digit($id) == false || $id == null || strlen($id) != 8) return false;
    if(gettype($pw) != "string" || $pw == null || strlen($pw) < 6) return false;
    if(gettype($name) != "string" || $name == null) return false;
    if(gettype($gender) != "string" || $gender == null) return false;
    if(ctype_digit($id) == false || $age == null) return false;
    return true;
  }
?>