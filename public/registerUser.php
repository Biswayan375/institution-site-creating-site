<?php
    include 'config.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/src/util/send_error.php';

    // Check connection
    if (!$conn) {
      send_error(mysqli_connect_error(), 503);
    }
    else{
      echo "Connected successfully";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container" style="width:30%; background-color:yellow">
<h3 style="text-align:center">ADMIN REGISTRATION FORM</h3>
<form method="post" id="RegisterUserFormAJAX">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" name="emailID" class="form-control" id="Email" required>
  </div><br>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="Username" id="Name" class="form-control" required>
  </div><br>
  <div class="mb-3">
    <label for="Phone" class="form-label">Phone No</label>
    <input type="number" name="PhoneNO" class="form-control" id="Phone" required>
  </div><br>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="Pass" id="Password" class="form-control" required>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
  <a href="register-college">Want to Register College ?</a>
</form>
</div>
</body>
</html>

<script type="text/javascript" src="/public/js/ajax.js"></script>
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/sweetalert.js"></script>