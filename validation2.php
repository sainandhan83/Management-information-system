<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body >
<img src="jainimage.jpg" class="bg" />

<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['mailuid'];
$password=$_POST['pwd'];
//$query="select * from usertable2 where name='$name' && password='$password'";
//$result=mysqli_query($con,$query);
//$num=mysqli_num_rows($result);
if($name=="sainandhan83@gmail.com" && $password=="123")
{
	$_SESSION['username']=$name;
	header('location:home2.php');
}
else
{
	header('location:check3.php');
}
?></body></html>