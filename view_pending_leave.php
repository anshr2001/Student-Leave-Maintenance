


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- favicon -->
  <link rel="icon" href="css/images/favicon.ico">
  <!-- custom css -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- webpage title -->
  <title>View Pending Leave Requests</title>
</head>

<body>
  <!-- navigation bar background-danger -->
  <section>
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> Leave Management System </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
          <span class="navbar-toggler-text"> Menu </span>
        </button>
        <div class="collapse navbar-collapse" id="shrink">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="admin_home.php"> Previous </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Logout </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section>
</body>
</html>


<?php

$status = 'Pending';


//Connection
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error)
{
  die('Connection Failed :'.$conn -> connect_error);
}
  
else
{
	$sql = "SELECT studentdetails.studentroll,studentdetails.studentid,studentdetails.studentname,leavedetails.leavestartdate, leavedetails.numdays,leavedetails.leavetype,leavedetails.status_leave,studentdetails.phone_no,studentdetails.pemail FROM studentdetails,leavedetails WHERE leavedetails.status_leave = '$status' AND studentdetails.studentroll = leavedetails.studentroll";

	$result = mysqli_query($conn, $sql);

	echo "<br>";
	echo "<strong> <h2> Pending Leave Requests</h2> </strong>";
	echo "<br>";

	echo "<table border='1'>
      	<tr>
      	<th>Student Roll Number</th>
      	<th>Student Username</th>
      	<th>Student Name</th>
          
      	<th>Leave Start Date</th>
      	<th>Number Of Days</th>
      	<th>Type Of Leave</th>

      	<th>Status Of the Leave</th>
      	<th>Phone Number</th>
      	<th>Email</th>
      	</tr>";


	while($row = mysqli_fetch_array($result) )
	{
    	echo "<tr>";
       
    	echo " <td>" . $row['studentroll'] . "</td>";
    	echo " <td>" . $row['studentid'] . "</td>";
    	echo "<td>" . $row['studentname'] . "</td>";
       
    	echo "<td>" . $row['leavestartdate'] . "</td>";
    	echo "<td>" . $row['numdays'] . "</td>";
    	echo "<td>" . $row['leavetype'] . "</td>";

    	echo "<td>" . $row['status_leave'] . "</td>";
    	echo "<td>" . $row['phone_no'] . "</td>";
    	echo "<td>" . $row['pemail'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";


	echo "<hr size = 3 noshade color = red>";
	echo "<div align = center> <strong> Leave Management System </strong> </div>";
 		
	echo "<div align = center> <strong> Amrita Vishwa Vidyapeetham </strong> </div>";
	echo "<div align = center> <strong> Coimbatore</strong> </div>";
	echo "<hr size = 3 noshade color = red>";

}

?>