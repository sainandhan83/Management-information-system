<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$a=$_POST['branch'];
echo $a;
$que1="select * from faculty_joined_this_month where Department='$a'";
if($result=mysqli_query($con,$que1))
{
?>
<html><head><style>
table,th,td{
	border:3px solid black;
}
body
{
	background-color:#DDDDDD;
	
}
p{
	font-size:30px;
	font-family:verdana;
	color:#B10DC9;
	
}
</style></head>
<body>
<table id="tabl1">
<p><b>Faculty_joined_this_month</b></p>
<tr>
<th>Name_of_faculty</th>	
<th>Designation</th>
<th>Department</th>
<th>Date_of_joining</th>
<th>Qualification</th>
<th>Previous experience in years</th>
<th>Category</th>
</tr>
</table></body></html>	
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">
var mytable=document.getElementById("tabl1");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 var newcell6=newrow.insertCell(-1);
	 var newcell7=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
	 newcell6.innerHTML="<?php echo $row[5] ?>";
	 newcell7.innerHTML="<?php echo $row[6] ?>";
</script>
<?php
    }
  mysqli_free_result($result);
}?>