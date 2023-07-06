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
<h3 style="text-align:center">COLLEGE REGISTRATION FORM</h3>
<form method="post" id="RegisterCollegeFormAJAX">
  <div class="mb-3">
    <label for="Email" class="form-label">Registered Email address</label>
    <input type="email" name="emailID" class="form-control" id="Email" required>
  </div><br>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="Pass" id="Password" class="form-control" required>
  </div><br>
  <div class="mb-3">
    <label for="id" class="form-label">College Id</label>
    <input type="number" name="CollegeID" id="id" class="form-control" required>
  </div><br>
  <div class="mb-3">
    <label for="name" class="form-label">College Name</label>
    <input type="text" name="CollegeName" class="form-control" id="name" required>
  </div><br>
  <div class="mb-3">
    <label for="address" class="form-label">College Address</label>
    <input type="text" name="CollegeAddress" class="form-control" id="address" required>
  </div><br>
  <div class="mb-3">
    <label for="state" class="form-label">College State</label>
    <select name="CollegeState" class="form-control" aria-label="Default select example" id="state" required >
        <option value="NULL">--Select a State--</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
    </select>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button><br>
  <a href="register-user">Want to be an Admin ?</a>

</form>
</div>
</body>
</html>

<script type="text/javascript" src="/public/js/ajax.js"></script>
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/sweetalert.js"></script>