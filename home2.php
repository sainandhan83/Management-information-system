<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login2.php');
}
?>
<html>
<head>
<style>
h2{
	font-family:verdana;
}
a{
font-size:25px;
color:white;
}
body{
	background-image:url("jain.png");
	background-color:skyblue;
	background-repeat: round;
}
p{
	font-size:20px;
}
table,th,td{
	border:2px solid black;
}
</style>
<title>Home page</title>
</head>

<body>
<h2>Welcome admin</h2>

<a href="processing.php">Click here for accessing all the tables</a>
</body>
</html>
