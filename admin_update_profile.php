



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
  <title>Update Profile ALMS</title>
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
              <a class="nav-link" href="admin_update_profile.html"> Previous </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Logout </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section>
  <h1 align="center">Leave Management System </h1>
  <h2 align = "center"> Details </h2>

  <hr size = "3" noshade color = "red">

  <?php $PHP_SELF;?>
</body>
</html>


<?php

  $adminid = $_POST['adminid'];
  $adminpassword = $_POST['adminpassword'];
  
  $adminname = $_POST['adminname'];
  $adminphone_no = $_POST['adminphone_no'];
  $adminemail = $_POST['adminemail'];
  



  //Connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error)
    {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {
    $stmt = $conn->prepare("UPDATE admindetails SET adminname = '$adminname', adminphone_no = '$adminphone_no',adminemail = '$adminemail'  WHERE adminid = '$adminid' AND adminpassword = '$adminpassword'");

    $stmt->execute();
    $stmt->close();

    echo "<div align=center> Updated the Details Successfully </div>";
  
    echo "";

    $sql = "SELECT * FROM admindetails WHERE adminid = '$adminid'";

    $result = mysqli_query($conn, $sql);

    echo "<br>";
    echo "<strong> Details After addition of the details </strong>";
    echo "<br>";
    echo "<table border='1'>
          <tr>
      
          <th>Admin Username</th>
          <th>Admin Name</th>
         
          <th>Phone Number</th>
          <th>Email</th>
          </tr>";


    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo " <td>" . $row['adminid'] . "</td>";
        echo "<td>" . $row['adminname'] . "</td>";
  
        echo "<td>" . $row['adminphone_no'] . "</td>";
        echo "<td>" . $row['adminemail'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<hr size = 3 noshade color = red>";
    echo "<div align = center> <strong> Leave Management System </strong> </div>";
    echo "<div align = center> <strong> Amrita Vishwa Vidyapeetham </strong> </div>";
    echo "<div align = center> <strong> Coimbatore</strong> </div>";
    echo "<hr size = 3 noshade color = red>";



    $conn->close();
    //header("Location: success.html");
  }


 ?>
