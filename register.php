<?php

include_once 'includes/dbhandler.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="farmer.css">
</head>
<body >

    
<form action="/register.php" class="container" class="alert alert-succes" method="post">
    <br>
    <h1><img src="images/avatar.jpeg" alt="" class="avatar">LOG IN</h1>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="user" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="confirm Password" name="psw" required>
    <br>
    <button type="submit" class="btn"><strong>Submit</strong></button>
<br>
<p>Don't have an account? <a href="signup.html">Sign In</a></p>
      </div>
  </form>
  $conn; 
</body>
</html>