<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$a=$_POST['branch'];

$que1="select * from awards_recieved_by_faculty_members where Department='$a'";
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
<table id="table4">
<p><b>Awards_recieved_by_faculty_members</b></p>
<tr>
<th>Name_of_faculty</th>	
<th>Designation</th>
<th>Department</th>
<th>Nature of award</th>
<th>Date of award</th>
<th>Other details</th>
</tr>
</table>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table4");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 var newcell6=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
	 newcell6.innerHTML="<?php echo $row[5] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}?>