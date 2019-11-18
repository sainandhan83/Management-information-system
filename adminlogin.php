<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body >
<img src="jainimage.jpg" class="bg" />
<h2> Login Form</h2>
<div id="id01" class="loginbox"align="center">
  
     
      <img src="images.jpg" alt="Avatar" class="jainimage">

 <form action="validation2.php" method="post" align="center">
         <br><br><br> <b>Enter username<b><br><input type="text" name="mailuid" placeholder="username.."><br></h1>
           <b>Enter password<b><br><input type="password" name="pwd" placeholder="password.."><br ></h2>
            <button type="submit" name="login-submit">login</button><br><br>
          </form>
            

    
  
</div>



</body>
</html>
