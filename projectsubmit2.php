<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$a=$_POST['month'];
echo $a;
if($a=="January")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='01'";
}
if($a=="February")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='02'";
}
if($a=="March")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='03'";
}

if($a=="April")
{
	$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='04'";
}
if($a=="May")
{
	$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='05'";
}
if($a=="June")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='06'";	
}
if($a=="July")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='07'";
}
if($a=="August")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='08'";
}
if($a=="September")
{
	$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='09'";
}
if($a=="October")
{
	$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='10'";
}
if($a=="November")
{
	$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='11'";
}
if($a=="December")
{
$que="select * from project_proposals_submitted_to_outside_agencies_during_the_month where month(date_of_submission)='12'";	
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
<table id="table16">
<p><b>Project_proposals_submitted_to_outside_Agencies_dduring_the_month(table 16)</b></p>
<tr>
<th>names_of_the_principal_investigator_and_co_investigator</th>
<th>Designation</th>
<th>Department</th>
<th>agency_to_which_applied</th>
<th>project_title</th>
<th>total_cost_of_the_project</th>
<th>date_of_submission</th>
<th>duration_of_the_project</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table16");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 var newcell6=newrow.insertCell(-1);
	 var newcell7=newrow.insertCell(-1);
	 var newcell8=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
	 newcell6.innerHTML="<?php echo $row[5] ?>";
	 newcell7.innerHTML="<?php echo $row[6] ?>";
	 newcell8.innerHTML="<?php echo $row[7] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}