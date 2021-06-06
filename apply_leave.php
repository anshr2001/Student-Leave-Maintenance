
<!DOCTYPE html>
<html lang="en" xml:lang="en">
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
	<title>Leave Application</title>
</head>
<body>
	<section>
    	<div class="">
      	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> ALMS - Leave Options</h1>
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
          <img src="studentleave.webp" class="d-block w-100 size cropped" alt="main">
        </div>
    </div>
  </div>
  </section>

<section>

  <div class="bg">
    <br>
    <a href="apply.html"> 

      <button type="submit" name="leaveapplication" class='button'><span>Apply a Leave</span></button>
    </a>

    <p>    Students can apply leave by providing the details like type of leave, starting date,number of days and can get approvedby a particular admin </p>

    <br>
    <a href="leave_history.html"> 

      <button type="submit" name="leavehistory" class='button'><span>View Leave History</span></button>
    </a>

    <p>    Students can view their already applied leave details and also can know the status of the particular leaves </p>

    <br>
    <a href="upload_doc.html"> 

      <button type="submit" name="uploaddoc" class='button'><span>Upload Assisting Documents</span></button>
    </a>

    <p>    Students can Upload the assisting documents of their corresponding leave like OD form or medical form</p>

    <br>
    <a href="modify_leave.html"> 
      <button type="submit" name="modifyleave" class='button'><span>Modify Leave Details</span></button>
    </a>

    <p>    Students can Modify their Leave Details if the Leave is in the Pending State</p>

    <br>
    <a href="cancel_leave.html"> 
      <button type="submit" name="cancelleave" class='button'><span>Cancel Leave</span></button>
    </a>

    <p>    Students can Cancel their leave by providing the necessary details</p>

    <br>
    <a href="download_leave.html"> 
      <button type="submit" name="downloadleave" class='button'><span>Download Leave</span></button>
    </a>

    <p>    Students can Cancel their leave by providing the necessary details</p>

    
    <br>
    <a href="update_profile.html"> 
      <button type="submit" name="profileupdate" class='button'><span>Update my profile</span></button>
    </a>

    <p>    Students can Update their profile by providing the personal details including username, roll number, password, name etc...</p>

    <br>
    <a href="update_password.html"> 

      <button type="submit" name="passwordupdate" class='button'><span>Update Password</span></button>
    </a>

    <p>    Students can Update their their by providing the username, roll number, current password and save their new password to the database</p>


    <br>

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

