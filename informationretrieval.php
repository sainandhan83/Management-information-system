<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<html>
<head>
<style>
h1{
	font-family:arial;
}
body{
	background-color:skyblue;
}
a{
	font-size:25px;
}
</style>
<body>
<h1>Department wise datails</h1>
<a href="table1.php">Faculty joined this month</a><br>
<a href="table2.php">Awards received by faculty</a><br>
<a href="table3.php">Faculty left this month</a><br>
<a href="table4.php">Number of students placed</a><br>
<a href="table6.php">Seminars organised</a><br>
</form>

<h1>Details with respect to journals</h1>
<a href="department1.php">With respect to department, click here</a><br>
<a href="faculty1.php">With respect to faculty name, click here</a>

<h1>Month wise details</h1>
<a href="monthwise.php">Faculty left during particular months</a><br>
<a href="workshop2.php">Workshops organised during particular months</a><br>
<a href="projectsubmit.php">Projects submitted during particular months</a>
</body>
</html>