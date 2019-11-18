<html>
<head>
<style>
table,th,td{
	border:3px solid black;
}
p
{
	font-size:20px;
	font-family:verdana;
}
</style>
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$value=$_POST['var1'];

if($value==1)
{
$sql="select * from faculty_joined_this_month";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table1">
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
</table>	
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table1");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}
//------------------------------

else if($value==2)
{
$sql="select * from faculty_left_during_the_month";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table2">
<p><b>Faculty left during the month(table2)</b></p>
<tr>
<th>Name_of_faculty</th>	
<th>Designation</th>
<th>Department</th>
<th>Date of submission of resignation date</th>
<th>Date of relieving date</th>
<th>Reasons for leaving</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table2");
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
}


else if($value==3)
{
$sql="select * from addition_or_upgradation_of_qualifications";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table3">
<p><b>Addition_or_upgradation_of_qualifications(table3)</b></p>
<tr>
<th>Name_of_faculty</th>	
<th>Designation</th>
<th>Department</th>
<th>Qualification or degree acquired</th>
<th>University from which acquired</th>
<th>Date of award of degree date</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table3");
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
}

else if($value==4)
{
$sql="select * from awards_recieved_by_faculty_members";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table4">
<p><b>Awards_recieved_by_faculty_members(table 4)</b></p>
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
}
}


else if($value==5)
{
$sql="select * from ict_enabled_teaching_or_learning";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table5">
<p><b>Table ICT_enabled_teaching_or_learning(table 5)</b></p>
<tr>
<th>Initiative</th>	
<th>Proposed by</th>
<th>Recommended or approved by</th>
<th>Benefits of initiative</th>
<th>Other details</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table5");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==6)
{
$sql="select * from faculty_registered_with_mphil_or_phd_with_ju_or_outside";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table6">
<p><b>Faculty_registered_with_MPhil_or_PhD_with_JU_or_outside(table 6)</b></p>
<tr>
<th>Name of faculty</th>	
<th>Designation</th>
<th>Programme</th>
<th>Date of registration</th>
<th>Institution at which registered</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>

<script type="text/javascript">

var mytable=document.getElementById("table6");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==7)
{
$sql="select * from faculty_invited_for_vivaoral_examination_for_phd_and_others";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table7">
<p><b>Faculty_invited_for_vivaoral_examination_for_PhD_and_others(table 7)</b></p>
<tr>
<th>Name of faculty</th>	
<th>Designation</th>
<th>Department</th>
<th>Institution to which invited</th>
<th>Date of viva</th>
<th>Other details</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table7");
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
}

else if($value==8)
{
$sql="select * from initiatives_towards_faculty_development_programme";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table8">
<p><b>Initiative towards faculty development programme(table 8)</b></p>
<tr>
<th>Name of faculty</th>
<th>Designation</th>
<th>Department</th>
<th>institution_where_FDP_was_held</th>
<th>Date_of_FDP</th>
<th>Other details</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table8");
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
}


else if($value==9)
{
$sql="select * from conferences_or_workshops_organized_during_the_month";
if($result=mysqli_query($con,$sql))
{
?>

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
}


else if($value==10)
{
$sql="select * from papers_presented_by_the_faculty_members";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table10">
<p><b>papers_presented_by_the_faculty_members(table 10)</b></p>
<tr>
<th>name_of_faculty</th>
<th>designation</th>
<th>department</th>
<th>Title of paper</th>
<th>Journal in which published</th>
<th>impact factor</th>
<th>national_or_international</th>
<th>ISSN_or_ISBN_NOS</th>
<th>vol no,page no</th>
<th>Year</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table10");
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
	 var newcell10=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
	 newcell6.innerHTML="<?php echo $row[5] ?>";
	 newcell7.innerHTML="<?php echo $row[6] ?>";
	 newcell8.innerHTML="<?php echo $row[7] ?>";
	 newcell9.innerHTML="<?php echo $row[8] ?>";
	 newcell10.innerHTML="<?php echo $row[9] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==11)
{
$sql="select * from research_papers_published_in_national_international_journals";
if($result=mysqli_query($con,$sql))
{
?>
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
}
}


else if($value==12)
{
$sql="select * from faculty_attended_participated_in_conferences_workshops_seminar";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table12">
<p><b>Faculty_attended_participated_in_conferences_workshops_Seminar(table12)</b></p>
<tr>
<th>Name_of_faculty</th>
<th>Designation</th>
<th>Department</th>
<th>nature_of_activity</th>
<th>place_at_which_held</th>
<th>duration</th>
<th>organized_by</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table12");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}

else if($value==13)
{
$sql="select * from guest_lectures_delivered_by_faculty_outside_jain_university";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table13">
<p><b>Guest_Lectures_delivered_by_Faculty_outside_Jain_University(table 13)</b></p>
<tr>
<th>Name_of_faculty</th>
<th>Designation</th>
<th>Department</th>
<th>Title_of_the_lecture</th>
<th>organization_and_place_at_which_delivered</th>
<th>date_of_the_lecture</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table13");
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
}

else if($value==14)
{
$sql="select * from guest_lectures_organized_at_the_department_at_jain_university";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table14">
<p><b>Guest_Lectures_organizes_at_the_Department_at_Jain_University(table 14)</b></p>
<tr>
<th>department</th>
<th>name_of_organizer</th>
<th>Designation</th>
<th>organization_of_the_guest_lecturer</th>
<th>date_of_lecture</th>
<th>title_of_the_lecture</th>
<th>outcome_of_the_lecture</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table14");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==15)
{
$sql="select * from addn_equipment_procured_ina_month_above_1500_other_than_pcs";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table15">
<p><b>Addn_Equipment_procured_ina_month_above_1500_other_than_PCs(table 15)</b></p>
<tr>
<th>name_of_the_equipment</th>
<th>cost_of_the_equipment</th>
<th>date_of_purchase</th>
<th>name_of_the_company_or_vendor_from_which_procured</th>
<th>department_for_which_equipment_purchased</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table15");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==16)
{
$sql="select * from project_proposals_submitted_to_outside_agencies_during_the_month";
if($result=mysqli_query($con,$sql))
{
?>
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
}

else if($value==17)
{
$sql="select * from defense_held_against_the_project_proposals_wrt__s_no_6_above";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table17">
<p><b>Defense_held_against_the_project_proposals_wrt_S_no_6_above(table17)</b></p>
<tr>
<th>title_of_project</th>
<th>principal_investigator_co_investigator</th>
<th>Department</th>
<th>agency</th>
<th>place_at_which_held</th>
<th>date_of_defense</th>
<th>any_other_details</th>
</tr>
</table>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table17");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}




else if($value==18)
{
$sql="select * from grants_sanctioned_for_submitted_projects_from_funding_agencies";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table18">
<p><b>Grants_sanctioned_for_submitted_projects_from_funding_agencies(table 18)</b></p>
<tr>
<th>name_of_the_principal_investigator_and_co_investigators</th>
<th>designation</th>
<th>Department</th>
<th>amount_sanctioned</th>
<th>title_of_project</th>
<th>any_other_details</th>
</tr>
</table>
<br>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table18");
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
}


else if($value==19)
{
$sql="select * from consultancy_projects_proposed";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table19">
<p><b>consultancy_projects_proposed(table 19)</b></p>
<tr>
<th>name_of_the_project_investigators</th>
<th>designation</th>
<th>Department</th>
<th>amount_sanctioned</th>
<th>title_of_project</th>
<th>any_other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table19");
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
}

else if($value==20)
{
$sql="select * from grants_recieved_for_consultancy_projects";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table20">
<p><b>grants_recieved_for_consultancy_projects(table20)</b></p>
<tr>
<th>name_of_the_project_investigators</th>
<th>designation</th>
<th>Department</th>
<th>amount_sanctioned</th>
<th>title_of_project</th>
<th>income_generated</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table20");
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
}



else if($value==21)
{
$sql="select * from inhouse_projects_proposed_or_funded_by_jgi_and_implemented";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table21">
<p><b>inhouse_projects_proposed_or_funded_by_jgi</b></p>
<tr>
<th>name_of_the_project_investigators</th>
<th>title_of_the_project</th>
<th>area_of_reasearch</th>
<th>amount_sanctioned</th>
<th>Designation</th>
<th>any_other_details</th>

</tr>
</table>
<br>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table21");
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
}


else if($value==22)
{
$sql="select * from syllabus_completion";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table22">
<p><b>syllabus_completion</b></p>
<tr>
<th>Departement</th>
<th>sem</th>
<th>subcode_and_title </th>
<th>Faculty_name</th>
<th>Designation</th>
<th>Planned_hours</th>
<th>Actual_hours</th>
<th>Percentage of syllabus completion</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table22");
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
}

else if($value==23)
{
$sql="select * from student_information";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table23">
<p><b>student_information</b></p>
<tr>
<th>class</th>
<th>subject_title</th>
<th>subject_code</th>
<th>total_no_of_students</th>
<th>no_of_students_having_attendance</th>

</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table23");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}



else if($value==24)
{
$sql="select * from new_courses_programmes_electives_proposed";
if($result=mysqli_query($con,$sql))
{
?>


<table id="table24">
<p><b>new_courses_programmes_elective_proposed</b></p>
<tr>
<th>Dept</th>
<th>course</th>
<th>proposed_by </th>
<th>scope_objective</th>

</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table24");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}



else if($value==25)
{
$sql="select * from inter_disciplinary";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table25">
<p><b>inter_disciplinary</b></p>
<tr>
<th>Dept</th>
<th>faculty</th>
<th>designation</th>
<th>title_of_the_programme</th>
<th>scope_objective</th>

</tr>
</table>
<br>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table25");
	 var newrow=mytable.insertRow(-1);
	 var newcell1=newrow.insertCell(-1);
	 var newcell2=newrow.insertCell(-1);
	 var newcell3=newrow.insertCell(-1);
	 var newcell4=newrow.insertCell(-1);
	 var newcell5=newrow.insertCell(-1);
	 newcell1.innerHTML="<?php echo $row[0] ?>";
	 newcell2.innerHTML="<?php echo $row[1] ?>";
	 newcell3.innerHTML="<?php echo $row[2] ?>";
	 newcell4.innerHTML="<?php echo $row[3] ?>";
	 newcell5.innerHTML="<?php echo $row[4] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==26)
{
$sql="select * from students_participated";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table26">
<p><b>student_participated</b></p>
<tr>
<th>name_of_the_students</th>
<th>course</th>
<th>paper_id </th>
<th>title_of_the_seminar_competition</th>
<th>title</th>
<th>dates</th>
<th>national_international</th>
</tr>
</table>
<br>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table26");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==27)
{
$sql="select * from study_tours";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table27">
<p><b>study_tours</b></p>
<tr>
<th>name_of_the_faculty_member</th>
<th>place_to_which_study_fieldtoursorganized</th>
<th>no_of_students_participated</th>
<th>Organization_industry_visited</th>
<th>outcome_of_the_tour</th>
<th>date_on_visited</th>

</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table27");
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
}


else if($value==28)
{
$sql="select * from entrepreneurship";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table28">
<p><b>ENTREPRENUERSHIP</b></p>
<tr>
<th>name_of_the_Departement</th>
<th>name_of_the_organizer</th>
<th>EDP_promational_activity_ifany</th>
<th>Funding_source_conducted_by_resourcepersons</th>
<th>Line_of_bussiness</th>
<th>no_of_business</th>

</tr>
</table>
<br>

<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table28");
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
}


else if($value==29)
{
$sql="select * from any_other_information";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table29">
<p><b>Any_other_information(table29)</b></p>
<tr>
<th>Department</th>
<th>Name_of_the_organizer</th>
<th>Designation</th>
<th>Organization_place_at_which_held</th>
<th>Date</th>
<th>Title_Topic_of_the_event</th>
<th>Outcome</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table29");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}



else if($value==30)
{
$sql="select * from national_international_journals";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table30">
<p><b>National_International_Journals(table30)</b></p>
<tr>
<th>Name_of_the_Journal</th>
<th>Cost_of_the_journal</th>
<th>Publisher</th>
<th>Proposed_by</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table30");
var newrow=mytable.insertRow(-1);
var newcell1=newrow.insertCell(-1);
var newcell2=newrow.insertCell(-1);
var newcell3=newrow.insertCell(-1);
var newcell4=newrow.insertCell(-1);
newcell1.innerHTML="<?php echo $row[0] ?>";
newcell2.innerHTML="<?php echo $row[1] ?>";
newcell3.innerHTML="<?php echo $row[2] ?>";
newcell4.innerHTML="<?php echo $row[3] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==31)
{
$sql="select * from news_paper_articles";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table31">
<p><b>News_paper_articles(table31)</b></p>
<tr>
<th>Dates</th>
<th>Article_Title</th>
<th>Magazine_NewsPaper_NewsChannel</th>
<th>BriefSummary_Details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table31");
var newrow=mytable.insertRow(-1);
var newcell1=newrow.insertCell(-1);
var newcell2=newrow.insertCell(-1);
var newcell3=newrow.insertCell(-1);
var newcell4=newrow.insertCell(-1);
newcell1.innerHTML="<?php echo $row[0] ?>";
newcell2.innerHTML="<?php echo $row[1] ?>";
newcell3.innerHTML="<?php echo $row[2] ?>";
newcell4.innerHTML="<?php echo $row[3] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}



else if($value==32)
{
$sql="select * from library_learningresources";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table32">
<p><b>Library_Learningresources(table32)</b></p>
<tr>
<th>Name_of_the_Resource</th>
<th>Vendor</th>
<th>Cost</th>
<th>Date_Acquired</th>
<th>Usepurpose</th>
<th>Recommended_by</th>
<th>Remarks</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table32");
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
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==33)
{
$sql="select * from mous_entered";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table33">
<p><b> MoUs_Entered(table33)</b></p>
<tr>
<th>Organization_with_MOU_is_Entered</th>
<th>Nature_of_MoU</th>
<th>Other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table33");
var newrow=mytable.insertRow(-1);
var newcell1=newrow.insertCell(-1);
var newcell2=newrow.insertCell(-1);
var newcell3=newrow.insertCell(-1);
newcell1.innerHTML="<?php echo $row[0] ?>";
newcell2.innerHTML="<?php echo $row[1] ?>";
newcell3.innerHTML="<?php echo $row[2] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}

else if($value==34)
{
$sql="select * from activities";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table34">
<p><b>Activities(table34)</b></p>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Department</th>
<th>Organization_with_which_proposed</th>
<th>Nature_of_Collaboration</th>
<th>Other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table34");
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
}


else if($value==35)
{
$sql="select * from industry_collaboration";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table35">
<p><b>Industry_Collaboration(table35)</b></p>
<tr>
<th>Dates</th>
<th>Name_of_the_Industry_contacted</th>
<th>No_of_students_participated_for_Internships</th>
<th>Name_of_the_Program_Internship</th>
<th>Contact_person_in_the_Industry</th>
<th>Other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table35");
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
}

else if($value==36)
{
$sql="select * from international_collaboration";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table36">
<p><b>International_Collaboration(table36)</b></p>
<tr>
<th>Dates</th>
<th>Name_of_the_Institution</th>
<th>Name_of_the_Person</th>
<th>Duration_place_and_Date_of_guest_lecture</th>
<th>Topic_of_the_Guest_Lecture</th>
<th>Other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table36");
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
}


else if($value==37)
{
$sql="select * from collaborative_research";
if($result=mysqli_query($con,$sql))
{
?>

<table id="table37">
<p><b> Collaborative_Research(table37)</b></p>
<tr>
<th>Organization_with_which_proposed</th>
<th>Nature_of_Collaboration</th>
<th>Other_details</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">

var mytable=document.getElementById("table37");
var newrow=mytable.insertRow(-1);
var newcell1=newrow.insertCell(-1);
var newcell2=newrow.insertCell(-1);
var newcell3=newrow.insertCell(-1);
newcell1.innerHTML="<?php echo $row[0] ?>";
newcell2.innerHTML="<?php echo $row[1] ?>";
newcell3.innerHTML="<?php echo $row[2] ?>";
</script></head>
<?php
    }
  mysqli_free_result($result);
}
}


else if($value==38)
{
$sql="select * from placement_activities";
if($result=mysqli_query($con,$sql))
{
?>
<table id="table38">
<p><b>Placement_activities(table38)</b></p>
<tr>
<th>No_of_companies_visited</th>
<th>No_of_offers_made</th>
<th>Avg_salary</th>
<th>Total_no_of_students_placed</th>
<th>Profile</th>
<th>Branch</th>
</tr>
</table>
<br>
<?php
  while ($row=mysqli_fetch_row($result))
    {
?>
<script type="text/javascript">
var mytable=document.getElementById("table38");
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
}
?>