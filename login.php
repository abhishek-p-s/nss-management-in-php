<?php
session_start();
if($_SESSION['login']=="Login failed.<br>")
	echo $_SESSION['login'];
$conn = mysqli_connect("localhost", "root","","nss" );
if(!$conn)
    echo "Error on connection";

    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);

$sql = "SELECT * FROM login where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
if(!$result)
    echo "Error on selection";
$rows = pg_num_rows($result);
if($rows!=0)
{
$_SESSION['username']=$username;
$_SESSION['login']="Success";
header("Location:home1.php");
}
else
{
 $_SESSION['login']="Login failed";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" 
method="post">
<html>    
<head>
</head>
<body background="i.jfif"> 
<div class="login-box">
<link rel="stylesheet" type="text/css" href="style.css">
<center>
<img src="avatar.png" class="avatar"><br>
<h1>Login Here</h1>
<form>
<p>
Username:&nbsp;
</p>
<input type="text" name="username" placeholder="Enter Username">
<p>
Password:&nbsp;
</p>
<input type="password" name="password" placeholder="Enter Password">
<input type="submit" name="submit" value="Login">
<a href="register.php" >register</a>
</form>
</center>
</div>
</body>
</html>