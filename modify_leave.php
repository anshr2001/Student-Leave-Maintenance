
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
  <title>Update Leave Details</title>
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
              <a class="nav-link" href="modify_leave.html"> Previous </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Logout </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section>
  <h1>Leave Management System </h1>
  <h2> Details </h2>

  <hr>

  <?php $PHP_SELF;?>
</body>
</html>


<?php

  $studentroll = $_POST['studentroll'];
  $studentpassword = $_POST['studentpassword'];
  $status_leave = "Pending";

  $leavestartdate = $_POST['leavestartdate'];
  $numdays = $_POST['numdays'];
  $leavetype = $_POST['leavetype'];

  $leavestartdate1 = $_POST['leavestartdate1'];
  



  //Connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error)
    {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {
  	$sql = "SELECT * FROM studentdetails WHERE studentroll = '$studentroll' AND studentpassword = '$studentpassword'";
    $result = mysqli_query($conn, $sql);



    if(mysqli_num_rows($result) === 1)
    {
    	

    	$stmt = $conn->prepare("UPDATE leavedetails SET leavestartdate = '$leavestartdate1',numdays = '$numdays',leavetype = '$leavetype'  WHERE studentroll = '$studentroll' AND leavestartdate = '$leavestartdate' AND status_leave = 'Pending'"); 

    	//leavestartdate = '$leavestartdate1',

    $stmt->execute();
    $stmt->close();

    echo "<div align=center> Updated the Leave Details Successfully </div>";
  
    echo "";

    $sql1 = "SELECT * FROM leavedetails WHERE studentroll = '$studentroll'";

    $result1 = mysqli_query($conn, $sql1);

    echo "<br>";
    echo "<strong> Details After Modification </strong>";
    echo "<br>";
    echo "<table border='1'>
          <tr>
      
          <th>Student Roll Number</th>
          <th>Leave Start Date</th>
         
          <th>Number Of Days</th>
          <th>Leave Type</th>
          <th>Leave Status</th>
          </tr>";


    while($row = mysqli_fetch_array($result1))
    {
        echo "<tr>";
        echo " <td>" . $row['studentroll'] . "</td>";
        echo "<td>" . $row['leavestartdate'] . "</td>";
  
        echo "<td>" . $row['numdays'] . "</td>";
        echo "<td>" . $row['leavetype'] . "</td>";
        echo "<td>" . $row['status_leave'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";

    echo "<hr size = 3 noshade color = red>";
    echo "<div align = center> <strong> Leave Management System </strong> </div>";
    echo "<div align = center> <strong> Amrita Vishwa Vidyapeetham </strong> </div>";
    echo "<div align = center> <strong> Coimbatore</strong> </div>";
    echo "<hr size = 3 noshade color = red>";

    $conn->close();

    }

    else
    {
    	echo "Student Roll Number and Password doesn't Match";
    }



    
  }


 ?>

