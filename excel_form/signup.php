<?php

@include 'config.php';
error_reporting(0);
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="nav-container">
<div class="logo">
  <img src="" alt="LOGO" width="130"/>
  </div>
<nav>
  <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="index.php">Login</a></li>
  <li><a href="signup.php">Signup</a></li>
</ul>
  </nav>
</div>

<div class="form-container">

<form action="" method="post">
   <h3>Signup</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="text" name="name" required placeholder="name">
   <input type="email" name="email" required placeholder="email">
   <input type="password" name="password" required placeholder="password">
   <input type="password" name="cpassword" required placeholder="confirm password">
   <select name="user_type">
      <option value="user">user</option>
      <option value="admin">admin</option>
   </select>
   <!-- <input type="checkbox" id="" name="" value="Bike">
   <p>Remember me<p> -->
   <!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
   <label for="vehicle1">Remember me</label><br> -->

   <!-- <p>already have an account? <a href="login_form.php">Remember me</a></p> -->
   <input type="submit" name="submit" value="signup" class="form-btn">
   <!-- <input type="submit" name="submit" value="login now" class="form-btn"> -->
   <a href="index.php" class="form-btn">login</a>
</form>

</div>
</body>
</html>