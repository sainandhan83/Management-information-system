<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body style="background-image:url(jainimage2.jpg)"">
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['mailuid'];
$password=$_POST['pwd'];
$query="select * from usertable2 where name='$name' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
	//$_SESSION['username']=$name;
	?>
	<h2>Welcome...You are successfully logged in<h2>
	<a href="clickhere.php">Click here for all the tables</a>
		<?php
}
else
{
	header('location:check5.php');
}
?>
</body>
</html>