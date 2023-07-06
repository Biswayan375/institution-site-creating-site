<?php 
 include("../config.php");

  extract($_POST);

  $sql = "INSERT INTO users (email, username, phone, pass )
          VALUES ('$emailID', '$Username', $PhoneNO, '$Pass')";


  if ($conn->query($sql) === TRUE) {
    $output = array("response" => "success");
  } 
  else {
    $output = array("response" => "invalid");
  }


  echo json_encode($output);
?>