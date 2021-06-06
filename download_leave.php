
<?php

  $studentroll = $_POST['studentroll'];
  $studentpassword = $_POST['studentpassword'];

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
    	//$query = "SELECT * from leavedetails WHERE studentroll = '$studentroll'";
    	$query = "SELECT studentdetails.studentroll,studentdetails.studentid,studentdetails.studentname,leavedetails.leavestartdate, leavedetails.numdays,leavedetails.leavetype,leavedetails.status_leave,studentdetails.phone_no,studentdetails.pemail FROM studentdetails,leavedetails WHERE studentdetails.studentroll = leavedetails.studentroll AND studentdetails.studentroll = '$studentroll'";

    	header('Content-Type: text/csv; charset=utf-8');
    	header('Content-Disposition: attachment; filename=student.csv');

    	$output = fopen("php://output","w");

    	fputcsv($output, array('Student Roll Number','Student Username','Student Name','Leave Start Date','Number Of Days','Leave Type','Status Of the Leave','Phone Number','Email'));

    	$result1 = mysqli_query($conn,$query);

    	while($row = mysqli_fetch_assoc($result1))
    	{
    		fputcsv($output,$row);
    	}
    	fclose($output);
    }

  }


?>