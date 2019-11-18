<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$a=$_POST['month'];
echo $a;
if($a=="January")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='01'";
}
if($a=="February")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='02'";
}
if($a=="March")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='03'";
}

if($a=="April")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='04'";
}
if($a=="May")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='05'";
}
if($a=="June")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='06'";
}
if($a=="July")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='07'";
}
if($a=="August")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='08'";
}
if($a=="September")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='09'";
}
if($a=="October")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='10'";
}
if($a=="November")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='11'";
}
if($a=="December")
{
$que="select * from conferences_or_workshops_organized_during_the_month where month(dates_of_workshop)='12'";
}

if($result=mysqli_query($con,$que))
{
?>
<html>
<head>
<style>
body
{
	background-color:#DDDDDD;
	
}
p{
	font-size:30px;
	font-family:verdana;
	color:#B10DC9;
	
}

table,th,td{
	border:3px solid black;
}
</style></head>
<body>
<table id="table9">
<p><b>Conferences or workshops organised during the month(table 9)</b></p>
<tr>
<th>serial.No</th>
<th>name of organiser</th>
<th>designation</th>
<th>department</th>
<th>Title of workshop</th>
<th>Dates of workshop</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table9");
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
}