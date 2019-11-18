<html>
<head>
<style>
h2{
	color: black;
	font-size:30px;
}
a{
	font-size:25px;
	color:white;
}
body{
	background-image:url("jainimage.jpg");
	background-repeat: round;
}
</style>
<body>
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

if(isset($_POST['a1']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a1'];
$b = $_POST['b1'];
$c = $_POST['c1'];
$d = $_POST['d1'];
$e = $_POST['e1'];
$f = $_POST['f1'];
$g = $_POST['g1'];
$query="insert into faculty_joined_this_month values('$a','$b','$c','$d','$e',$f,'$g')";
mysqli_query($con,$query);
}


if(isset($_POST['a2']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a2 = $_POST['a2'];
$b2 = $_POST['b2'];
$c2 = $_POST['c2'];
$d2 = $_POST['d2'];
$e2 = $_POST['e2'];
$f2 = $_POST['f2'];
$query="insert into faculty_left_during_the_month values('$a2','$b2','$c2','$d2','$e2','$f2')";
mysqli_query($con,$query);
}


if(isset($_POST['a3']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a3 = $_POST['a3'];
$b3 = $_POST['b3'];
$c3 = $_POST['c3'];
$d3 = $_POST['d3'];
$e3 = $_POST['e3'];
$f3 = $_POST['f3'];
$query="insert into addition_or_upgradation_of_qualifications values('$a3','$b3','$c3','$d3','$e3','$f3')";
mysqli_query($con,$query);
}


if(isset($_POST['a4']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a4'];
$b = $_POST['b4'];
$c = $_POST['c4'];
$d = $_POST['d4'];
$e = $_POST['e4'];
$f = $_POST['f4'];
$query="insert into awards_recieved_by_faculty_members values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}


if(isset($_POST['a5']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a5'];
$b = $_POST['b5'];
$c = $_POST['c5'];
$d = $_POST['d5'];
$e = $_POST['e5'];
$query="insert into ict_enabled_teaching_or_learning values('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
}


if(isset($_POST['a6']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a6'];
$b = $_POST['b6'];
$c = $_POST['c6'];
$d = $_POST['d6'];
$e = $_POST['e6'];
$query="insert into faculty_registered_with_mphil_or_phd_with_ju_or_outside values('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
}

if(isset($_POST['a7']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a7'];
$b = $_POST['b7'];
$c = $_POST['c7'];
$d = $_POST['d7'];
$e = $_POST['e7'];
$f = $_POST['f7'];
$query="insert into faculty_invited_for_vivaoral_examination_for_phd_and_others values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a8']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a8'];
$b = $_POST['b8'];
$c = $_POST['c8'];
$d = $_POST['d8'];
$e = $_POST['e8'];
$f = $_POST['f8'];
$query="insert into initiatives_towards_faculty_development_programme values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a9']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a9'];
$b = $_POST['b9'];
$c = $_POST['c9'];
$d = $_POST['d9'];
$e = $_POST['e9'];
$f = $_POST['f9'];
$query="insert into conferences_or_workshops_organized_during_the_month values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a10']))
{
	?>
	<h2>" Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a10'];
$b = $_POST['b10'];
$c = $_POST['c10'];
$d = $_POST['d10'];
$e = $_POST['e10'];
$f = $_POST['f10'];
$g = $_POST['g10'];
$h = $_POST['h10'];
$i = $_POST['i10'];
$j = $_POST['j10'];
$query="insert into papers_presented_by_the_faculty_members values('$a','$b','$c','$d','$e','$f','$g','$h',$i,$j)";
mysqli_query($con,$query);
}


if(isset($_POST['a11']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a11'];
$b = $_POST['b11'];
$c = $_POST['c11'];
$d = $_POST['d11'];
$e = $_POST['e11'];
$f = $_POST['f11'];
$g = $_POST['g11'];
$h = $_POST['h11'];
$i = $_POST['i11'];
$j = $_POST['j11'];
$query="insert into research_papers_published_in_national_international_journals values('$a','$b','$c','$d','$e','$f','$g','$h',$i,$j)";
mysqli_query($con,$query);
}

if(isset($_POST['a12']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a12'];
$b = $_POST['b12'];
$c = $_POST['c12'];
$d = $_POST['d12'];
$e = $_POST['e12'];
$f = $_POST['f12'];
$g = $_POST['g12'];
$query="insert into faculty_attended_participated_in_conferences_workshops_seminar values('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
}


if(isset($_POST['a13']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a13'];
$b = $_POST['b13'];
$c = $_POST['c13'];
$d = $_POST['d13'];
$e = $_POST['e13'];
$f = $_POST['f13'];
$query="insert into guest_lectures_delivered_by_faculty_outside_jain_university values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}


if(isset($_POST['a14']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a14'];
$b = $_POST['b14'];
$c = $_POST['c14'];
$d = $_POST['d14'];
$e = $_POST['e14'];
$f = $_POST['f14'];
$g = $_POST['g14'];
$query="insert into guest_lectures_organized_at_the_department_at_jain_university values('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
}

if(isset($_POST['a15']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a15'];
$b = $_POST['b15'];
$c = $_POST['c15'];
$d = $_POST['d15'];
$e = $_POST['e15'];

$query="insert into addn_equipment_procured_ina_month_above_1500_other_than_pcs values('$a',$b,'$c','$d','$e')";
mysqli_query($con,$query);
}

if(isset($_POST['a16']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a16'];
$b = $_POST['b16'];
$c = $_POST['c16'];
$d = $_POST['d16'];
$e = $_POST['e16'];
$f = $_POST['f16'];
$g = $_POST['g16'];
$h = $_POST['h16'];

$query="insert into project_proposals_submitted_to_outside_agencies_during_the_month values('$a','$b' ,'$c','$d','$e',$f,'$g','$h')";
mysqli_query($con,$query);
}



if(isset($_POST['a17']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a17'];
$b = $_POST['b17'];
$c = $_POST['c17'];
$d = $_POST['d17'];
$e = $_POST['e17'];
$f = $_POST['f17'];
$g = $_POST['g17'];

$query="insert into defense_held_against_the_project_proposals_wrt__s_no_6_above values('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
}

if(isset($_POST['a18']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a18'];
$b = $_POST['b18'];
$c = $_POST['c18'];
$d = $_POST['d18'];
$e = $_POST['e18'];
$f = $_POST['f18'];

$query="insert into grants_sanctioned_for_submitted_projects_from_funding_agencies values('$a','$b','$c',$d,'$e','$f')";
mysqli_query($con,$query);
}


if(isset($_POST['a19']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a19'];
$b = $_POST['b19'];
$c = $_POST['c19'];
$d = $_POST['d19'];
$e = $_POST['e19'];
$f = $_POST['f19'];

$query="insert into consultancy_projects_proposed values('$a','$b','$c',$d,'$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a20']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a20'];
$b = $_POST['b20'];
$c = $_POST['c20'];
$d = $_POST['d20'];
$e = $_POST['e20'];
$f = $_POST['f20'];
$query="insert into grants_recieved_for_consultancy_projects values('$a','$b','$c',$d,'$e','$f')";
mysqli_query($con,$query);
}



if(isset($_POST['a21']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a21'];
$b = $_POST['b21'];
$c = $_POST['c21'];
$d = $_POST['d21'];
$e = $_POST['e21'];
$f = $_POST['f21'];
$query="insert into inhouse_projects_proposed_or_funded_by_jgi_and_implemented values('$a','$b','$c',$d,'$e','$f')";
mysqli_query($con,$query);
}


if(isset($_POST['a22']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a22'];
$b = $_POST['b22'];
$c = $_POST['c22'];
$d = $_POST['d22'];
$e = $_POST['e22'];
$f = $_POST['f22'];
$g = $_POST['g22'];
$h=$_POST['h22'];
$query="insert into syllabus_completion values('$a','$b','$c','$d','$e','$f','$g','$h')";
mysqli_query($con,$query);
}

if(isset($_POST['a23']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a23'];
$b = $_POST['b23'];
$c = $_POST['c23'];
$d = $_POST['d23'];
$e = $_POST['e23'];
$query="insert into student_information values('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
}

if(isset($_POST['a24']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a24'];
$b = $_POST['b24'];
$c = $_POST['c24'];
$d = $_POST['d24'];
$query="insert into new_courses_programmes_electives_proposed values('$a','$b','$c','$d')";
mysqli_query($con,$query);
}


if(isset($_POST['a25']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a25'];
$b = $_POST['b25'];
$c = $_POST['c25'];
$d = $_POST['d25'];
$e = $_POST['e25'];
$query="insert into inter_disciplinary values('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
}



if(isset($_POST['a26']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a26'];
$b = $_POST['b26'];
$c = $_POST['c26'];
$d = $_POST['d26'];
$e = $_POST['e26'];
$f = $_POST['f26'];
$g = $_POST['g26'];
$query="insert into students_participated values('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
}

if(isset($_POST['a27']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a27'];
$b = $_POST['b27'];
$c = $_POST['c27'];
$d = $_POST['d27'];
$e = $_POST['e27'];
$f = $_POST['f27'];
$query="insert into study_tours values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a28']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a28'];
$b = $_POST['b28'];
$c = $_POST['c28'];
$d = $_POST['d28'];
$e = $_POST['e28'];
$f = $_POST['f28'];
$query="insert into entrepreneurship values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a29']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a29'];
$b = $_POST['b29'];
$c = $_POST['c29'];
$d = $_POST['d29'];
$e = $_POST['e29'];
$f = $_POST['f29'];
$g = $_POST['f29'];
$query="insert into any_other_information values('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
}


if(isset($_POST['a30']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a30'];
$b = $_POST['b30'];
$c = $_POST['c30'];
$d = $_POST['d30'];
$query="insert into national_international_journals values('$a','$b','$c','$d')";
mysqli_query($con,$query);
}


if(isset($_POST['a31']))
{
	?>
	<h2>"successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a31'];
$b = $_POST['b31'];
$c = $_POST['c31'];
$d = $_POST['d31'];
$query="insert into news_paper_articles values('$a','$b','$c','$d')";
mysqli_query($con,$query);
}

if(isset($_POST['a32']))
{
	?>
	<h2>"successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a32'];
$b = $_POST['b32'];
$c = $_POST['c32'];
$d = $_POST['d32'];
$e = $_POST['e32'];
$f = $_POST['f32'];
$g = $_POST['g32'];
$query="insert into library_learningresources values('$a','$b',$c,'$d','$e','$f','$g')";
mysqli_query($con,$query);
}

if(isset($_POST['a33']))
{
	?>
	<h2>"successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a33'];
$b = $_POST['b33'];
$c = $_POST['c33'];
$query="insert into mous_entered values('$a','$b','$c')";
mysqli_query($con,$query);
}


if(isset($_POST['a34']))
{
	?>
	<h2>"successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a34'];
$b = $_POST['b34'];
$c = $_POST['c34'];
$d = $_POST['d34'];
$e = $_POST['e34'];
$f = $_POST['f34'];
$query="insert into activities values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a35']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a35'];
$b = $_POST['b35'];
$c = $_POST['c35'];
$d = $_POST['d35'];
$e = $_POST['e35'];
$f = $_POST['f35'];
$query="insert into industry_collaboration values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a36']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a36'];
$b = $_POST['b36'];
$c = $_POST['c36'];
$d = $_POST['d36'];
$e = $_POST['e36'];
$f = $_POST['f36'];
$query="insert into international_collaboration values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$query);
}

if(isset($_POST['a37']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a37'];
$b = $_POST['b37'];
$c = $_POST['c37'];
$query="insert into collaborative_research values('$a','$b','$c')";
mysqli_query($con,$query);
}

if(isset($_POST['a38']))
{
	?>
	<h2>"Information is successfully saved"</h2>
	<a href="clickhere.php">go back and continue</a>
<?php
$a = $_POST['a38'];
$b = $_POST['b38'];
$c = $_POST['c38'];
$d = $_POST['d38'];
$e = $_POST['e38'];
$f = $_POST['f38'];
$query="insert into placement_activities values($a, $b, $c, $d, '$e','$f')";
mysqli_query($con,$query);
}
?>


