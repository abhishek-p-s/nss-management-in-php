<?php
session_start();
include'connection.php';
$error="";

if(isset($_POST['submit']))
{
	if(empty($_POST['uname'])||empty($_POST['psw']))
	{
		$error ='both fields required';
	}
	else{
		
		
	}
	$user=$_POST['uname'];
	$password=$_POST['psw'];
	$sql="select * from loginform where username='".$user."'AND password='".$password."'limit 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1){
		echo"you have successfully logged in";
	exit();
}
else
{
	echo "you have entered incorrect password";
	exit();
}
}
	?>