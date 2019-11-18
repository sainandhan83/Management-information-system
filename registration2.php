<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password==$password2)
{
$query="select * from usertable2 where name='$name'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
$query3="select * from usertable2 where email='$email'";
$result2=mysqli_query($con,$query3);
$num2=mysqli_num_rows($result2);
if($num==1)
{
	header('location:check.php');//if username already exists
}
else if($num2==1)
{
	header('location:check4.php');//if email already exists
}	
else
{
	$que="select * from admin where name='$name'";
	$res=mysqli_query($con,$que);
	$n=mysqli_num_rows($res);
	/*if($n==1)
	{*/
	$query2="insert into usertable2(name,email,password) values('$name','$email','$password')";
	mysqli_query($con,$query2);
	header('location:check2.php');//successful registration
	/*else
	{
		?>
		<html><body><h1>"You are not priviliged to be an admin"</h1>
		<a href="login2.php">Go home</a>
		</body></html>
		<?php
	}*/
}
}
else
{?>
	<html>
	<body><h1>passwords donot match..Please go back and enter correct password</h1></body>
	<a href="login2.php">Go back</a>
	</html>
	<?php
}

?>