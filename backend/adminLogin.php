<?php

	include("connection.php");

	$adminid = mysqli_real_escape_string($conn, $_POST['adminid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM admin a , user u  WHERE u.userID = a.userID AND a.adminID = '".$adminid."' AND a.adminPass = '".$password."'";
	$qry = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($qry);

	if($row > 0)
	{
		$r = mysqli_fetch_assoc($qry);
    	session_start();
	   
		$_SESSION['adminid'] = $adminid;
        	
		$_SESSION['userID'] = $r['userID'];
		$_SESSION['userType'] = $r['userType'];
		
		header("Location: /seaic/Homepage.php");
	}

	else{
		echo "<script language ='javascript'>alert ('User does not exist.');window.location = '/seaic/homepage.php'; </script>";
	}

?>