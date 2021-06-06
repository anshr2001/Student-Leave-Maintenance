

<!DOCTYPE html>
<html lang="en">
<head>
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
	<title>Admin Home Page</title>
</head>
<body>
	<section>
    	<div class="">
      	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> ALMS - Admin Home</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
        	<span class="navbar-toggler-text"> Menu </span>
        </button>
        
        <div class="collapse navbar-collapse" id="shrink">
        <ul class="navbar-nav ml-auto">
        	<li class="nav-item">
        		<a class="nav-link" href="login.html"> Previous </a>
        	</li>

        	<li>
        		<a class="nav-link" href="index.html"> Log-out </a>
        	</li>

        </ul>
        </div>
      </nav>
    </div>
  </section>

<section>
    <div id="gallery" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
        <li data-target="#gallery" data-slide-to="0" class="active"></li>
        <li data-target="#gallery" data-slide-to="1"></li>
        <li data-target="#gallery" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- all images in carousel use the class cropped -->
          <img src="adminpic.webp" class="d-block w-10 size cropped" alt="main">
        </div>
    </div>
  </div>
  </section>

<section>
  <div class="bg"> 

    <a href="view_upload.html">
      <br>
      <br>
      <button type="submit" name="viewupload" class='button'><span>View Assisting Documents Of Students</span></button>
    </a>

    <p> An Admin can view the assisting documents of the students uploaded </p>

    <a href="leave_approve.php">
      <br>
      <br>
      <button type="submit" name="viewupload" class='button'><span>Approve or Reject Leave</span></button>
    </a>

    <p> An Admin can approve or reject the leaves applied by the students </p>

    <a href="view_pending_leave.php">
      <br>
      <br>
      <button type="submit" name="viewpending" class='button'><span>View Pending Leave Requests</span></button>
    </a>

    <p> An Admin can view all the Pending Leave requests applied by the students </p>

    <a href="view_accept_leave.php">
      <br>
      <br>
      <button type="submit" name="viewaccept" class='button'><span>View Accepted Leave Requests</span></button>
    </a>

    <p> An Admin can view all the Accepted Leave requests applied by the students </p>

    <a href="admin_update_profile.html"> 
    	<br>
    	<br>
      <button type="submit" name="profileupdate" class='button'><span>Update my profile</span></button>
    </a>

    <p> An Admin can update his/her home profile like Name, Phone Number, Mail </p>

    <a href="admin_update_password.html">
    	<br>
    	<br>
      <button type="submit" name="passwordupdate" class='button'><span>Update Password</span></button>
    </a>

    <p> An Admin can update his/her password by giving userid and current password </p>

  </div>
</section>

<footer class="bg-danger text-center spacing-2">
  <div id="contact">
    <em class="social-icon fab fa-facebook-f"></em>
    <em class="social-icon fab fa-twitter"></em>
    <em class="social-icon fab fa-instagram"></em>
    <em class="social-icon fas fa-envelope"></em>
    <p class="dev">© C12 - Leave</p>
  </div>
</footer>

</body>
</html>

