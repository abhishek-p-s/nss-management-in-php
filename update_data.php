<?php
$name=$_POST['name'];
$adm=$_POST['adm'];
$enrl_num=$_POST['enrol'];
$university_id=$_POST['university_id'];
$year=$_POST['year'];
$department=$_POST['department'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
 $category=$_POST['category']; 
  
	$conn=mysqli_connect("localhost","root","","nss");
	if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	}
	$query="UPDATE new_enrolment SET name=[$name],admision_number=[$adm],enrolment_number=[$enrl_num],university_id=[$university_id],department=[department],gender=[gender],religion=[religion],caste=[caste],year=[year],category=[category] WHERE name=$name";

	$query_run=mysqli_query($conn,$query);
	if($query_run)
	{	
	echo '<script type="text/javascript">alert("data updated");</script>';	
	}
	else
	{
	echo '<script type="text/javascript">alert("data not updated");</script>';		
	}
	
	?>