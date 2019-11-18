<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<html>
<head>
<style>
h3{
font-size:25px;
text-align:right;
}
body
{
	background-color:lightblue;
}
p{
	font-size:20px;
	font-family:verdana;
}
th{
color:green;
}
table,th,td{
	border:3px solid black;
}
</style>
<title>Home page</title>
<script type="text/javascript">

</script>
</head>
<body>
<a href="logout2.php"><h3>Logout</h3></a>
<br>
<table id="table1">
<p><b>Faculty_joined_this_month(table1)</b></p>
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
<br>
<form action="testing.php" method="post" id="form1" name="tb1" >
Name of faculty:
<input type="text" name ="a1"><br>
Designation:
<input type="text" name ="b1"><br>
Department:
<input type="text" name ="c1"><br>
Date of joining:
<input type="text" name ="d1"><br>
Qualificaation:
<input type="text" name="e1"><br>
Previous experience in years:
<input type="text" name="f1"><br>
Category:
<input type="text" name="g1"><br>
<input type="submit" value="add row">
</form>


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
<form action="testing.php" id="form2" name="tb2" method="post">
Name of faculty:
<input type="text" name ="a2"><br>
Designation:
<input type="text" name ="b2"><br>
Department:
<input type="text" name ="c2"><br>
Date of submission of resignation date:
<input type="text" name ="d2"><br>
Date of relieving date:
<input type="text" name="e2"><br>
Reasons for leaving:
<input type="text" name="f2"><br>
<input type="submit" value="add row">
</form>



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
<form action="testing.php" id="form3" name="tb3" method="post">
Name of faculty:
<input type="text" name ="a3"><br>
Designation:
<input type="text" name ="b3"><br>
Department:
<input type="text" name ="c3"><br>
Qualificaation or Degree acquired:
<input type="text" name ="d3"><br>
University from which acquired:
<input type="text" name="e3"><br>
Date of award of degree date:
<input type="text" name="f3"><br>
<input type="submit" value="add row">
</form>





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
<form action="testing.php" id="form4" name="tb4" method="post">
Name of faculty:
<input type="text" name ="a4"><br>
Designation:
<input type="text" name ="b4"><br>
Department:
<input type="text" name ="c4"><br>
Nature of award:
<input type="text" name ="d4"><br>
Date of award:
<input type="text" name="e4"><br>
Other details:
<input type="text" name="f4"><br>
<input type="submit" value="add row">
</form>




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
<form action="testing.php" id="form5" name="tb5" method="post">
Initiative:
<input type="text" name ="a5"><br>
Proposed by:
<input type="text" name ="b5"><br>
Recommended or approved by:
<input type="text" name ="c5"><br>
Benefits of initiative:
<input type="text" name ="d5"><br>
Other details:
<input type="text" name="e5"><br>
<input type="submit" value="add row">
</form>


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
<form action="testing.php" id="form6" name="tb6" method="post">
Name of faculty:
<input type="text" name ="a6"><br>
Designation:
<input type="text" name ="b6"><br>
Programme:
<input type="text" name ="c6"><br>
Date of registration:
<input type="text" name ="d6"><br>
Institution at which registered:
<input type="text" name="e6"><br>
<input type="submit" value="add row">
</form>


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
<form action="testing.php" id="form7" name="tb7" method="post">
Name of faculty:
<input type="text" name ="a7"><br>
Designation:
<input type="text" name ="b7"><br>
Department:
<input type="text" name ="c7"><br>
Institution to which invited:
<input type="text" name ="d7"><br>
Date of viva:
<input type="text" name="e7"><br>
Other details:
<input type="text" name="f7"><br>

<input type="submit" value="add row">
</form>


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
<form action="testing.php" id="form8" name="tb8" method="post">
Name of faculty:
<input type="text" name ="a8"><br>
Designation:
<input type="text" name ="b8"><br>
Department:
<input type="text" name ="c8"><br>
Institution where FDP was held:
<input type="text" name ="d8"><br>
Date of FDP:
<input type="text" name="e8"><br>
Other details:
<input type="text" name="f8"><br>

<input type="submit" value="add row">
</form>



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
<form action="testing.php" id="form9" name="tb9" method="post">
Serial number:
<input type="text" name ="a9"><br>
Name of organiser:
<input type="text" name ="b9"><br>
Designation:
<input type="text" name ="c9"><br>
Department:
<input type="text" name ="d9"><br>
Title of workshop:
<input type="text" name="e9"><br>
Dates of workshop:
<input type="text" name="f9"><br>

<input type="submit" value="add row">
</form>




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
<form action="testing.php" id="form10" name="tb10" method="post">
Name of faculty:
<input type="text" name ="a10"><br>
Designation:
<input type="text" name ="b10"><br>
Department:
<input type="text" name ="c10"><br>
Title of paper:
<input type="text" name ="d10"><br>
Journal in which published:
<input type="text" name="e10"><br>
impact factor:
<input type="text" name="f10"><br>
National or international:
<input type="text" name="g10"><br>
ISSN_or_ISBN_NOS:
<input type="text" name="h10"><br>
Vol no,Page number:
<input type="text" name="i10"><br>
Year:
<input type="text" name="j10"><br>
<input type="submit" value="add row">
</form>


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
<br>

<form action="testing.php" id="form11" name="tb11" method="post">
Name of faculty:
<input type="text" name ="a11"><br>
Designation:
<input type="text" name ="b11"><br>
Department:
<input type="text" name ="c11"><br>
Title of paper:
<input type="text" name ="d11"><br>
journal_in_which_published:
<input type="text" name ="e11"><br>
impact_factor:
<input type="text" name="f11"><br>
scopus_or_thompson_reuter_indexed:
<input type="text" name="g11"><br>
ISSN_or_ISBN_or_NOS:
<input type="text" name="h11"><br>
vol_no_page_no:
<input type="number" name="i11"><br>
year:
<input type="number" name="j11"><br>

<input type="submit" value="add row">
</form>


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
<br>

<form action="testing.php" id="form12" name="tb12" method="post">
Name of faculty:
<input type="text" name ="a12"><br>
Designation:
<input type="text" name ="b12"><br>
Department:
<input type="text" name ="c12"><br>
nature_of_activity:
<input type="text" name ="d12"><br>
place_at_which_held:
<input type="text" name="e12"><br>
duration:
<input type="text" name="f12"><br>
organized_by:
<input type="text" name="g12"><br>

<input type="submit" value="add row">
</form>


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
<br>

<form action="testing.php" id="form13" name="tb13" method="post">
Name of faculty:
<input type="text" name ="a13"><br>
Designation:
<input type="text" name ="b13"><br>
Department:
<input type="text" name ="c13"><br>
Title_of_the_lecture:
<input type="text" name ="d13"><br>
organization_and_place_at_which_delivered:
<input type="text" name="e13"><br>
date_of_the_lecture:
<input type="text" name="f13"><br>

<input type="submit" value="add row">
</form>

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
<form action="testing.php" id="form14" name="tb14" method="post">
department:
<input type="text" name ="a14"><br>
name_of_organizer:
<input type="text" name ="b14"><br>
Designation:
<input type="text" name ="c14"><br>
organization_of_the_guest_lecturer:
<input type="text" name ="d14"><br>
date_of_lecture:
<input type="text" name="e14"><br>
title_of_the_lecture:
<input type="text" name="f14"><br>
outcome_of_the_lecture:
<input type="text" name="g14"><br>

<input type="submit" value="add row">
</form>

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

<form action="testing.php" id="form15" name="tb15" method="post">
name_of_the_equipment:
<input type="text" name ="a15"><br>
cost_of_the_equipment:
<input type="text" name ="b15"><br>
date_of_purchase:
<input type="text" name ="c15"><br>
name_of_the_company_or_vendor_from_which_procured:
<input type="text" name ="d15"><br>
department_for_which_equipment_purchased:
<input type="text" name="e15"><br>
<input type="submit" value="add row">
</form>

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

<form action="testing.php" id="form16" name="tb16" method="post">
names_of_the_principal_investigator_and_co_investigator:
<input type="text" name ="a16"><br>
Designation:
<input type="text" name ="b16"><br>
Department:
<input type="text" name ="c16"><br>
agency_to_which_applied:
<input type="text" name ="d16"><br>
project_title:
<input type="text" name="e16"><br>
total_cost_of_the_project:
<input type="number" name="f16"><br>
date_of_submission:
<input type="text" name="g16"><br>
duration_of_the_project:
<input type="text" name="h16"><br>

<input type="submit" value="add row">
</form>

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
<br>
<form action="testing.php" id="form17" name="tb17" method="post">
title_of_project:
<input type="text" name ="a17"><br>
principal_investigator_co_investigator:
<input type="text" name ="b17"><br>
Department:
<input type="text" name ="c17"><br>
agency:
<input type="text" name ="d17"><br>
place_at_which_held:
<input type="text" name="e17"><br>
date_of_defense:
<input type="text" name="f17"><br>
any_other_details:
<input type="text" name="g17"><br>
<input type="submit" value="add row">
</form>

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

<form action="testing.php" id="form18" name="tb18" method="post">
name_of_the_principal_investigator_and_co_investigators:
<input type="text" name ="a18"><br>
designation:
<input type="text" name ="b18"><br>
Department:
<input type="text" name ="c18"><br>
amount_sanctioned:
<input type="text" name ="d18"><br>
title_of_project:
<input type="text" name="e18"><br>
any_other_details:
<input type="text" name="f18"><br>

<input type="submit" value="add row">
</form>


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

<form action="testing.php" id="form19" name="tb19" method="post">
name_of_the_project_investigators:
<input type="text" name ="a19"><br>
designation:
<input type="text" name ="b19"><br>
Department:
<input type="text" name ="c19"><br>
amount_sanctioned:
<input type="text" name ="d19"><br>
title_of_project:
<input type="text" name="e19"><br>
any_other_details:
<input type="text" name="f19"><br>

<input type="submit" value="add row">
</form>

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

<form action="testing.php" id="form20" name="tb20" method="post">
name_of_the_project_investigators:
<input type="text" name ="a20"><br>
designation:
<input type="text" name ="b20"><br>
Department:
<input type="text" name ="c20"><br>
amount_sanctioned:
<input type="text" name ="d20"><br>
title_of_project:
<input type="text" name="e20"><br>
income_generated:
<input type="text" name="f20"><br>

<input type="submit" value="add row">
</form>


<table id="table21">
<p><b>inhouse_projects_proposed_or_funded_by_jgi(table21)</b></p>
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

<form action="testing.php" id="form21" name="tb21" method="post">
name_of_the_project_investigators:
<input type="text" name ="a21"><br>
title_of_the_project:
<input type="text" name ="b21"><br>
area_of_reasearch:
<input type="text" name ="c21">
amount_sanctioned:
<input type="number" name ="d21"><br>
Designation:
<input type="text" name="e21"><br>
any_other_details:
<input type="text" name="f21"><br>
<input type="submit" value="add row">
</form>



<table id="table22">
<p><b>syllabus_completion(table 22)</b></p>
<tr>
<th>Departement</th>
<th>sem</th>
<th>subcode_and_title </th>
<th>Faculty_name</th>
<th>Designation</th>
<th>Planned_hours</th>
<th>Actual_hours</th>
</tr>
</table>
<br>

<form action="testing.php" id="form22" name="tb22" method="post">
Departement:
<input type="text" name ="a22"><br>
sem:
<input type="text" name ="b22"><br>
subcode_and_title:
<input type="text" name ="c22"><br>
Faculty_name:
<input type="text" name ="d22"><br>
Designation:
<input type="text" name="e22"><br>
Planned_hours:
<input type="text" name="f22"><br>
Actual_hours:
<input type="text" name="g22"><br>
Percentage of syllabus completion:
<input type="text" name="h22"><br>


<input type="submit" value="add row">
</form>


<table id="table23">
<p><b>student_information(table 23)</b></p>
<tr>
<th>class</th>
<th>subject_title</th>
<th>subject_code</th>
<th>total_no_of_students</th>
<th>no_of_students_having_attendance</th>

</tr>
</table>
<br>

<form action="testing.php" id="form23" name="tb23" method="post">
class:
<input type="text" name ="a23"><br>
subject_title:
<input type="text" name ="b23"><br>
subject_code:
<input type="text" name ="c23"><br>
total_no_of_students:
<input type="text" name ="d23"><br>
no_of_students_having_attendance:
<input type="text" name="e23"><br>
<input type="submit" value="add row">
</form>




<table id="table24">
<p><b>new_courses_programmes_elective_proposed(table 24)</b></p>
<tr>
<th>Dept</th>
<th>course</th>
<th>proposed_by </th>
<th>scope_objective</th>

</tr>
</table>
<br>

<form action="testing.php" id="form24" name="tb24" method="post">
Dept:
<input type="text" name ="a24"><br>
course:
<input type="text" name ="b24"><br>
proposed_by:
<input type="text" name ="c24"><br>
scope_objective:
<input type="text" name ="d24"><br>

<input type="submit" value="add row">
</form>




<table id="table25">
<p><b>inter_disciplinary(table 25)</b></p>
<tr>
<th>Dept</th>
<th>faculty</th>
<th>designation</th>
<th>title_of_the_programme</th>
<th>scope_objective</th>

</tr>
</table>
<br>

<form action="testing.php" id="form25" name="tb25" method="post">
Dept:
<input type="text" name ="a25"><br>
faculty:
<input type="text" name ="b25"><br>
designation:
<input type="text" name ="c25"><br>
title_of_the_programme:
<input type="text" name ="d25"><br>
scope_objective:
<input type="text" name="e25"><br>
<input type="submit" value="add row">
</form>



<table id="table26">
<p><b>student_participated(table 26)</b></p>
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

<form action="testing.php" id="form26" name="tb26" method="post">
name_of_the_students:
<input type="text" name ="a26"><br>
course:
<input type="text" name ="b26"><br>
paper_id:
<input type="text" name ="c26"><br>
title_of_the_seminar_competition:
<input type="text" name ="d26"><br>
title:
<input type="text" name="e26"><br>
dates:
<input type="text" name="f26"><br>
national_international:
<input type="text" name="g26"><br>
<input type="submit" value="add row">
</form>



<table id="table27">
<p><b>study_tours(table 27)</b></p>
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

<form action="testing.php" id="form27" name="tb27" method="post">
name_of_the_faculty_member:
<input type="text" name ="a27"><br>
place_to_which_study_fieldtoursorganized:
<input type="text" name ="b27"><br>
no_of_students_participated:
<input type="text" name ="c27"><br>
Organization_industry_visited:
<input type="text" name ="d27"><br>
outcome_of_the_tour:
<input type="text" name="e27"><br>
date_on_visited:
<input type="text" name="f27"><br>
<input type="submit" value="add row">
</form>


<table id="table28">
<p><b>ENTREPRENUERSHIP(table 28)</b></p>
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

<form action="testing.php" id="form28" name="tb28" method="post">
name_of_the_Departement:
<input type="text" name ="a28"><br>
name_of_the_organizer:
<input type="text" name ="b28"><br>
EDP_promational_activity_ifany:
<input type="text" name ="c28"><br>
Funding_source_conducted_by_resourcepersons:
<input type="text" name ="d28"><br>
Line_of_bussiness:
<input type="text" name="e28"><br>
no_of_business:
<input type="text" name="f28"><br>

<input type="submit" value="add row">
</form>

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

<form action="testing.php" id="form29" name="tb29" method="post">
Department:
<input type="text" name ="a29"><br>
Name_of_the_organizer:
<input type="text" name ="b29"><br>
Designation:
<input type="text" name ="c29"><br>
Organization_place_at_which_held
<input type="text" name ="d29"><br>
Date:
<input type="text" name="e29"><br>
Title_Topic_of_the_event:
<input type="text" name="f29"><br>
Outcome:
<input type="text" name="g29"><br>
<input type="submit" value="add row">
</form>

<table id="table31">
<p><b>News_paper_articles(table31)</b></p>
<tr>
<th>DATE</th>
<th>Article_Title</th>
<th>Department</th>
<th>Magazine_NewsPaper_NewsChannel</th>
<th>BriefSummary_Details</th>
</tr>
</table>
<br>

<form action="testing.php" id="form31" name="tb31" method="post">
DATE:
<input type="text" name ="a31"><br>
Article_Title:
<input type="text" name ="b31"><br>
Department:
<input type="text" name ="c31"><br>
Magazine_NewsPaper_NewsChannel:
<input type="text" name ="d31"><br>
BriefSummary_Details:
<input type="text" name="e31"><br>

<input type="submit" value="add row">
</form>

<table id="table32">
<p><b>Library_Learningresources(table32)</b></p>
<tr>
<th>Name_of_the_Resource</th>
<th>Vendor</th>
<th>Cost</th>
<th>Date_Acquired</th>
<th>Usepurpose</th>
<th>Recommended_by</th>
<th>Remarks </th>
</tr>
</table>
<br>

<form action="testing.php" id="form32" name="tb32" method="post">
Name_of_the_Resource:
<input type="text" name ="a32"><br>
Vendor:
<input type="text" name ="b32"><br>
Cost:
<input type="text" name ="c32"><br>
Date_Acquired:
<input type="text" name ="d32"><br>
Usepurpose:
<input type="text" name="e32"><br>
Recommended_by:
<input type="text" name="f32"><br>
Remarks:
<input type="text" name="g32"><br>
<input type="submit" value="add row">
</form>


<table id="table33">
<p><b>MoUs_Entered(table33)</b></p>
<tr>
<th>Organization_with_MOU_is_Entered</th>
<th>Nature_of_MoU</th>
<th>Other_details </th>
</tr>
</table>
<br>

<form action="testing.php" id="form33" name="tb33" method="post">
Organization_with_MOU_is_Entered:
<input type="text" name ="a33"><br>
Nature_of_MoU:
<input type="text" name ="b33"><br>
Other_details:
<input type="text" name ="c33"><br>

<input type="submit" value="add row">
</form>


<table id="table34">
<p><b>Activities(table34)</b></p>
<tr>
<th>Name</th>
<th>designation</th>
<th>Department</th>
<th>Organization_with_which_proposed</th>
<th>Nature_of_Collaboration</th>
<th>Other_details</th>
</tr>
</table>
<br>

<form action="testing.php" id="form34" name="tb34" method="post">
Name:
<input type="text" name ="a34"><br>
designation:
<input type="text" name ="b34"><br>
Department:
<input type="text" name ="c34"><br>
Organization_with_which_proposed:
<input type="text" name ="d34"><br>
Nature_of_Collaboration:
<input type="text" name="e34"><br>
Other_details:
<input type="text" name="f34"><br>

<input type="submit" value="add row">
</form>


<table id="table35">
<p><b>Industry_Collaboration(table35)</b></p>
<tr>
<th>Dates</th>
<th>Name_of_the_Industry_contacted</th>
<th>Name_of_the_Program_Internship</th>
<th>Contact_person_in_the_Industry </th>
<th>Other_details  </th>
</tr>
</table>
<br>

<form action="testing.php" id="form35" name="tb35" method="post">
Dates:
<input type="text" name ="a35"><br>
Name_of_the_Industry_contacted:
<input type="text" name ="b35"><br>
No_of_students_participated_for_Internships:
<input type="text" name ="c35"><br>
Name_of_the_Program_Internship:
<input type="text" name ="d35"><br>
Contact_person_in_the_Industry:
<input type="text" name="e35"><br>
Other_details:
<input type="text" name="f35"><br>

<input type="submit" value="add row">
</form>


<table id="table36">
<p><b>International_Collaboration(table36)</b></p>
<tr>
<th>Dates</th>
<th>Name_of_the_Institution </th>
<th>Name_of_the_Person </th>
<th>Duration_place_and_Date_of_guest_lecture </th>
<th>Topic_of_the_Guest_Lecture </th>
<th>Other_details </th>
</tr>
</table>
<br>
<form action="testing.php" id="form36" name="tb36" method="post">
Dates:
<input type="text" name ="a36"><br>
Name_of_the_Institution:
<input type="text" name ="b36"><br>
Name_of_the_Person :
<input type="text" name ="c36"><br>
Duration_place_and_Date_of_guest_lecture :
<input type="text" name ="d36"><br>
Topic_of_the_Guest_Lecture :
<input type="text" name="e36"><br>
Other_details:
<input type="text" name="f36"><br>
<input type="submit" value="add row">
</form>


<table id="table37">
<p><b>Collaborative_Research(table37)</b></p>
<tr>
<th>Organization_with_which_proposed </th>
<th>Nature_of_Collaboration </th>
<th>Other_details </th>

</table>
<br>

<form action="testing.php" id="form37" name="tb37" method="post">
Organization_with_which_proposed :
<input type="text" name ="a37"><br>
Nature_of_Collaboration :
<input type="text" name ="b37"><br>
Other_details:
<input type="text" name ="c37"><br>
<input type="submit" value="add row">
</form>

<table id="table38">
<p><b>Placement_activities(table38)</b></p>
<tr>
<th>No_of_companies_visited </th>
<th>No_of_offers_made </th>
<th>Avg_salary </th>
<th>Total_no_of_students_placed</th>
<th>Profile</th>
<th>Branch</th>
</tr>
</table>
<br>

<form action="testing.php" id="form38" name="tb38" method="post">
No_of_companies_visited:
<input type="text" name ="a38"><br>
No_of_offers_made:
<input type="text" name ="b38"><br>
Avg_salary:
<input type="text" name ="c38"><br>
Total_no_of_students_placed:
<input type="text" name ="d38"><br>
Profile:
<input type="text" name="e38"><br>
Branch:
<input type="text" name="f38"><br>

<input type="submit" value="add row">
</form>



