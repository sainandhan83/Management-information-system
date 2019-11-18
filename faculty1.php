<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<html>
<head>
<style>
p{
	font-size:20px;
	color:black;
}
table,th,td{
	border:3px solid black;
}
body{
	background-color:skyblue;
}
</style>
</head>
<body>
<form action="faculty2.php" method="post">
<p><b>Enter faculty name:</b></p>
<input type="text" name="facultyname"><br>
<input type="submit" value="search">
</form>
</body>
