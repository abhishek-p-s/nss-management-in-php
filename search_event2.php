<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>student details</title>
  </head>
  <body>
  <font><center><h1>EVENT DETAILS</h1></center></font><br><br><br>


<table class="table table-hover">
  
    <tr>
      <th scope="col">programe</th>
      <th scope="col">date</th>
      <th scope="col">participent</th>  
    </tr>
	<?php
	$name=$_POST['participent'];
	$enrolment_number=$_POST['enrolment_number'];																					
	$conn=mysqli_connect("localhost","root","","nss");
	if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	}
	$sql="SELECT participent,programs,date FROM event_register WHERE participent='$name' AND enrolment_number='$enrolment_number'";
	$result=$conn->query($sql);
	if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
	echo"<tr><td>".$row["programs"]."</td><td>".$row["date"]."</td><td>".$row["participent"]."</td></tr>";
	}
	echo"</table>";
	}
	else{
	
	echo"0 result";
	}
	
	
	
	
	$conn->close();
	
	
	?>
	
<a class="btn btn-primary" href="search_event.html">BACK</a></center>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</html>
</html>