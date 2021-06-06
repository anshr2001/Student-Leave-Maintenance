
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
              <a class="nav-link" href="upload_doc.html"> Previous </a>
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
  <hr>
 
  <?php $PHP_SELF;?>
</body>
</html>


<?php

  $studentroll = $_POST['studentroll'];
  $leavestartdate = $_POST['leavestartdate'];
  $studentpassword = $_POST['studentpassword'];
  $file = $_FILES['file'];

  $conn = new mysqli('localhost','root','','student');

  if($conn->connect_error)
  {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {
  	$sql = "SELECT * FROM studentdetails WHERE studentroll = '$studentroll' AND studentpassword = '$studentpassword' ";
    $result = mysqli_query($conn, $sql);

 
    if(mysqli_num_rows($result) === 1)
    {

    	//}
  		$filename = $file['name'];
  		$fileerror = $file['error'];
  		$filetmp = $file['tmp_name'];

  		$fileext = explode('.',$filename);
  		$filecheck = strtolower(end($fileext));

  		$fileextstored = array('png','jpg','jpeg');

  		if(in_array($filecheck,$fileextstored))
  		{
  			$destinationfile = 'upload/'.$filename;
  			move_uploaded_file($filetmp,$destinationfile);

  			$stmt = $conn->prepare("INSERT INTO upload(studentroll,leavestartdate,doc) VALUES (?,?,?)");

      		$stmt->bind_param("sss", $studentroll, $leavestartdate, $destinationfile);

      		$stmt->execute();

      		echo "Uploaded Document Successfully";

      		$stmt->close();

      		$conn->close();
  		}
  		else
  		{
  			echo "Check the File type!! Expected only jpg,jpeg and png formats";
  		}
  	}
  	else
  	{
  		echo "<h2> Student Roll Number and Password doesn't Match!! </h2>";
  	}
  }


?>