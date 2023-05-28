<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/user_page.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      
      <h4> welcome <span><?php echo $_SESSION['user_name'] ?></span></h4>

      
    <style>
    
 </style>
    <body >
    <div class="nav-container">
<div class="logo">
  <img src="" alt="LOGO" width="130"/>
  </div>
<nav>
  <ul>
  <li a class="active" href="javascript:void(0)">Home</li>
  <li>Dashboard</li>
  <li>Logout</li>
</ul>
  </nav>
</div>

        <div class="container">
        <div class="innerdiv">
            <!-- <div class="row"><img class="imglogo" src="images/logo.png"/></div> -->
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                <br>
                <Button class="greenbtn" onclick="openpart('c')" >Components</Button>
                <Button class="greenbtn" onclick="openpart('ra')" >Requirment Analysis</Button>
                <Button class="greenbtn" onclick="openpart('rar')" >Requirment Analysis Review</Button>
                <Button class="greenbtn" onclick="openpart('d')">Design</Button>
                <Button class="greenbtn" onclick="openpart('dr')">Design Review</Button>
                <Button class="greenbtn" onclick="openpart('code')"> Code</Button>
                <Button class="greenbtn"  onclick="openpart('cr')"> Code Review</Button>
                <Button class="greenbtn" onclick="openpart('tcp')">Test Case Preparation</Button>
                <Button class="greenbtn" onclick="openpart('tcr')">Test Case Review</Button>
                <Button class="greenbtn" onclick="openpart('tce')">No of Test Case Executed</Button>
                <Button class="greenbtn" onclick="openpart('t')">Testing</Button>
                <Button class="greenbtn" onclick="openpart('uta')">UTA</Button>
                </div>
            
         <div class="rightinnerdiv">   
            <div id="c" class="innerright portion" style="display:none">
            <Button class="form-btn" >Components</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Group:</label><input  type="text" name=""/><br><br>
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/><br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/><br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/><br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>Code Rate:</label><input  type="text" name=""/><br><br>
            <label>Test Rate:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <label>Coding Time:</label><input  type="text" name=""/>
            <label>Testing Time:</label><input  type="text" name=""/><br><br>
            <label>Design Time:</label><input  type="text" name=""/>
            <label>DRE:</label><input  type="text" name=""/><br><br>
            <label>Coding Effectiveness:</label><input  type="text" name=""/>
            <label>Testing Effectiveness:</label><input  type="text" name=""/><br><br>
            <label>No of Test Case:</label><input  type="text" name=""/>
            <label>EV:</label><input  type="text" name=""/><br><br>
            <label>SV:</label><input  type="text" name=""/>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>
 

            <div class="rightinnerdiv">   
            <div id="ra" class="innerright portion" style="display:none">
            <Button class="form-btn" >Requirment Analysis</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="rar" class="innerright portion" style="display:none">
            <Button class="form-btn" >Requirment Analysis Review</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="d" class="innerright portion" style="display:none">
            <Button class="form-btn" >Design</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>CT:</label><input  type="text" name=""/>
            <label>Defects:</label><input  type="text" name=""/></br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="dr" class="innerright portion" style="display:none">
            <Button class="form-btn" >Design Review</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="code" class="innerright portion" style="display:none">
            <Button class="form-btn" >Code</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="cr" class="innerright portion" style="display:none">
            <Button class="form-btn" >Code Review</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="tcp" class="innerright portion" style="display:none">
            <Button class="form-btn" >Test Case Preparation</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="tcr" class="innerright portion" style="display:none">
            <Button class="form-btn" >test Case Review</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            
            <div class="rightinnerdiv">   
            <div id="tce" class="innerright portion" style="display:none">
            <Button class="form-btn" >No of test Case Review</Button>
            <form action="" method="post" enctype="multipart/form-data"><br><br>
            <label>size:</label><input  type="number" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="t" class="innerright portion" style="display:none">
            <Button class="form-btn" >Testing</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="uta" class="innerright portion" style="display:none">
            <Button class="form-btn" >UTA</Button>
            <form action="" method="post" enctype="multipart/form-data">
            <label>Planned Start Date:</label><input  type="text" name=""/>
            <label>Planned End Date:</label><input  type="text" name=""/></br><br>
            <label>Actual Start Date:</label><input  type="text" name=""/>
            <label>Actual End Date:</label><input  type="text" name=""/></br><br>
            <label>Planned Efforts:</label><input  type="text" name=""/>
            <label>Actual Efforts:</label><input  type="text" name=""/></br><br>
            <label>Defects:</label><input  type="text" name=""/>
            <label>CT:</label><input  type="text" name=""/><br><br>
            <input type="submit" value="SUBMIT" class="b"/>
            </br>
            </br>

            </form>
            </div>
            </div>
            <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }

        </script>
    

      <!-- <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a> -->
   </div>

</div>

</body>
</html>