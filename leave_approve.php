

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
  <title>Approve or Reject Leave</title>
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
  
  <section class="bg-light">
    <div class="container">
      <div class="pl-0 text-left">
        <br><br>
        <h1>Admin Approve Or Reject Leave</h1>
        <br>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-1 box">
          <h4 class="mb-3">Student Details</h4>
          <form action="approve_reject.php" method="post">

          	<div class="col-md-6 mb-3">
            	<label for="PrescriptionNo">Enter the Roll No</label>
            	<input type="text" class="form-control" name = "studentroll" id="studentroll" required>
          	</div>

            <br>
            <div class="col-md-6 mb-3">
            <label for="leavedate">Choose the leave start date Of the Student to Approve/Reject</label>
        <input type="date" class="form-control" name="leavestartdate" id="leavestartdate">
          </div> 
    
    
          <hr class="col-md-6 mb-3">
          <button class="btn btn-primary" name = "approve" type="submit">Accept</button>
          <button class="btn btn-primary" name = "reject" type="submit">Reject</button>

        </form>
        </div>
      </div>

      <?php $PHP_SELF;?>

    </div>
  </section>

</body>
</html>

<?php

//Connection
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error)
{
  die('Connection Failed :'.$conn -> connect_error);
}
else
{
	$sql = "SELECT * FROM leavedetails WHERE status_leave = 'Pending'";

    $result = mysqli_query($conn, $sql);


    		echo "<br>";
    		echo "<strong> <h2> Pending Leave Details </h2></strong>";
    		echo "<br>";
    		echo "<table border='1'>
          		<tr>
          		<th>Student Roll No</th>
          		<th>Leave Start Date</th>
          		<th>Number Of Days</th>
          		<th>Type Of Leave</th>
          		</tr>";


    		while($row = mysqli_fetch_array($result) )
    		{
        		echo "<tr>";
        		echo "<td> " . $row['studentroll'] . "</td> ";
        		echo "<td> " . $row['leavestartdate'] . "</td> ";
        		echo " <td>" . $row['numdays'] . "</td>";
        		echo "<td>" . $row['leavetype'] . "</td>";
 
        		echo "</tr>";
    		}
    		echo "</table>";

    		echo "<hr size = 3 noshade color = red>";
    		echo "<div align = center> <strong> Leave Management System </strong> </div>";
    		echo "<div align = center> <strong> Amrita Vishwa Vidyapeetham </strong> </div>";
    		echo "<div align = center> <strong> Coimbatore</strong> </div>";
    		echo "<hr size = 3 noshade color = red>";


    		?>
    <footer class="bg-danger text-center spacing-2">
  	<div id="contact">
    	<em class="social-icon fab fa-facebook-f"></em>
    	<em class="social-icon fab fa-twitter"></em>
    	<em class="social-icon fab fa-instagram"></em>
    	<em class="social-icon fas fa-envelope"></em>
    	<p class="dev">© C12 - Leave</p>
  	</div>
	</footer>

    <?php

}


?>