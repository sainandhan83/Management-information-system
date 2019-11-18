<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$a=$_POST['branch'];
echo $a;
$que1="select * from research_papers_published_in_national_international_journals where department='$a'";
if($result=mysqli_query($con,$que1))
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
<table id="table11">
<p><b>Research_Papers_published_in_National/International_Journals(table11)</b></p>
<tr>
<th>Name_of_faculty</th>
<th>Designation</th>
<th>Department</th>
<th>journal_in_which_published</th>
<th>impact_factor</th>
<th>scopus_or_thompson_reuter_indexed</th>
<th>ISSN_or_ISBN_or_NOS</th>
<th>vol_no_page_no</th>
<th>year</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">
var mytable=document.getElementById("table11");
var newrow=mytable.insertRow(-1);
var newcell1=newrow.insertCell(-1);
var newcell2=newrow.insertCell(-1);
var newcell3=newrow.insertCell(-1);
var newcell4=newrow.insertCell(-1);
var newcell5=newrow.insertCell(-1);
var newcell6=newrow.insertCell(-1);
var newcell7=newrow.insertCell(-1);
var newcell8=newrow.insertCell(-1);
var newcell9=newrow.insertCell(-1);
newcell1.innerHTML="<?php echo $row[0] ?>";
newcell2.innerHTML="<?php echo $row[1] ?>";
newcell3.innerHTML="<?php echo $row[2] ?>";
newcell4.innerHTML="<?php echo $row[3] ?>";
newcell5.innerHTML="<?php echo $row[4] ?>";
newcell6.innerHTML="<?php echo $row[5] ?>";
newcell7.innerHTML="<?php echo $row[6] ?>";
newcell8.innerHTML="<?php echo $row[7] ?>";
newcell9.innerHTML="<?php echo $row[8] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}?>

