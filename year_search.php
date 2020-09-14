<?php
$user_name="root";
$password="";
$server="localhost";
$database="mysql";
$db_handle=mysqli_connect($server,$user_name,$password);
if(!$db_handle){
	die('could not connect:'.mysql_error());
}
$db_found= mysqli_select_db($database,$db_handle);
if($db_found)
{
	$sql="SELECT * FROM new_enrolment WHERE year=='".$_POST['year'	]."'";
	$select_query=mysqli_query($sql);
	echo"<table border=1>";
	echo"<tr>";
	echo"<center>STUDENT DETAILS</center></th>";
	echo"</td>";
	echo"<tr>";
	echo"<td>name</td>";
	echo"<td>admision_number</td>";
	echo"<td>enrolmeny_number</td>";
	echo"<td>university_id</td>";
	echo"<td>department</td>";
	echo"<td>gender</td>";
	echo"<td>religion</td>";
	echo"<td>caste</td>";
	echo"<td>year</td>";
	echo"<td>catogery</td>";
	echo"</td>";
	while($record=mysqli_fetch_array($select_query)){
		echo"<tr>";
		echo"<td>".$record['name']."</td>";
		echo"<td>".$record['admision_number']."</td>";
		echo"<td>".$record['enrolment_number']."</td>";
		echo"<td>".$record['univerity_id']."</td>";
		echo"<td>".$record['department']."</td>";
		echo"<td>".$record['gender']."</td>";
		echo"<td>".$record['religion']."</td>";
		echo"<td>".$record['caste']."</td>";
		echo"<td>".$record['year']."</td>";
		echo"<td>".$record['category']."</td>";
		echo"</tr>";
	}
	echo"</table>";
}
else
{
	echo'<br>database not found';
}
mysqli_close($db_handle);

?>