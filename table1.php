<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<html>
<head>
<style>
h2{
	font-family:arial;
}
</style>
<body>
<h2>Select your branch</h2>
<form action="queries.php" method="post">
<select name="branch">
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="Mechanical">Mechinal</option>
  <option value="EEE">EEE</option>
  <option value="Civil">Civil</option>
</select>
<br><br>
 <input type="submit" value="search">
</form>
</body>


