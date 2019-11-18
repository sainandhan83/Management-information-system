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
<a href="informationretrieval.php"><h3>Click here for Mini report</h3></a>
<title>Home page</title>
<script type="text/javascript">

</script>
</head>
<body>
<a href="logout.php"><h3>Logout</h3></a>
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="1"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="2"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="3"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="4"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="5"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="6"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="7"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="8"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="9"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="10"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="11"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="12"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="13"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="14"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="15"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="16"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="17"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="18"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="19"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="20"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="21"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="22"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="23"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="24"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="25"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="26"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="27"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="28"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="29"><br>
<input type="submit" value="Click here to see the table data:">
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


<form action="display.php" method="post">
<input type="hidden" name="var1" value="31"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="32"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="33"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="34"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="35"><br>
<input type="submit" value="Click here to see the table data:">
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
<form action="display.php" method="post">
<input type="hidden" name="var1" value="36"><br>
<input type="submit" value="Click here to see the table data:">
</form>


<table id="table37">
<p><b>Collaborative_Research(table37)</b></p>
<tr>
<th>Organization_with_which_proposed </th>
<th>Nature_of_Collaboration </th>
<th>Other_details </th>

</table>
<br>
<form action="display.php" method="post">
<input type="hidden" name="var1" value="37"><br>
<input type="submit" value="Click here to see the table data:">
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

<form action="display.php" method="post">
<input type="hidden" name="var1" value="38"><br>
<input type="submit" value="Click here to see the table data:">
</form>















