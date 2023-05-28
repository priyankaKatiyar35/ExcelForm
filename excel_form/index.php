<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Form</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<style>
   
</style>
<body>
<div class="nav-container">
<div class="logo">
  <img src="" alt="LOGO" width="130"/>
  </div>
<nav>
  <ul>
  <li><a class="active" href="index.php">Home<a></li>
  <li><a href="index.php">Login</a></li>
  <li><a href="signup.php">Signup</a></li>
</ul>
  </nav>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!-- ----------------------LOGIN FORM----------------- -->

<?php

@include 'config.php';

session_start();
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

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<div class="form-container">

   <form action="" method="post">
      <h3>login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
<input type="email" name="email" required placeholder="email">
      <input type="password" name="password" required placeholder="password">
   
      <div class="checkbox-text">
         <div class="checkbox-contenet">
            <!-- <input type="checkbox" id="logcheck">
            <label for="logcheck" class="text"> Remember</label> -->
            <!-- <label for="checkid"  style="word-wrap:break-word">
        <input id="checkid"  type="checkbox" value="test" />testdata
     </label> -->

   </div>
   <a href="#" class="text">Forget?</a>
   </div>
   
      <input type="submit" name="submit" value="LOGIN" class="form-btn">
      <!-- <input type="submit" name="submit" value="register" class="btn"> -->
      <button></button><a href="signup.php"class="f-btn">signup</a></button>
      <!-- <p>don't have an account? <a href="register_form.php">register now</a></p> -->
   </form>
</div>

<!-- -----------------------------SIGNUP FORM------------------------------- -->





</body>
</html>