
<?php
if(isset($_POST['approve']))
{
	//echo "Approved";
	
	$studentroll = $_POST['studentroll'];
  $leavestartdate = $_POST['leavestartdate'];
	$status = "Accepted";

	//Connection
  	$conn = new mysqli('localhost','root','','student');
  	if($conn->connect_error)
  	{
    	die('Connection Failed :'.$conn -> connect_error);
  	}
  	else
  	{
  		$stmt = $conn->prepare("UPDATE leavedetails SET status_leave = '$status' WHERE studentroll = '$studentroll' AND leavestartdate = '$leavestartdate'");

    	$stmt->execute();
    	$stmt->close();

    	echo "Leave Approved Succesfully";
  	}

}

if(isset($_POST['reject']))
{
	//echo "Reject";
	$studentroll = $_POST['studentroll'];
	$status = "Rejected";
  $leavestartdate = $_POST['leavestartdate'];

	//Connection
  	$conn = new mysqli('localhost','root','','student');
  	if($conn->connect_error)
  	{
    	die('Connection Failed :'.$conn -> connect_error);
  	}
  	else
  	{
  		$stmt = $conn->prepare("UPDATE leavedetails SET status_leave = '$status' WHERE studentroll = '$studentroll' AND leavestartdate = '$leavestartdate'");

    	$stmt->execute();
    	$stmt->close();

    	echo "Leave Rejected";
  	}

}

?>