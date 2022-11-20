<?php
  function form_validation($id, $pw, $name, $gender, $age) {
    if(ctype_digit($id) == false || $id == null || strlen($id) != 8) return false;
    if(gettype($pw) != "string" || $pw == null || strlen($pw) < 6) return false;
    if(gettype($name) != "string" || $name == null) return false;
    if(gettype($gender) != "string" || $gender == null || ($gender != "남자" && $gender != "여자")) return false;
    if(ctype_digit($age) == false || $age == null || strlen($age) > 3) return false;
    return true;
  }
?>