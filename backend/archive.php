<?php session_start();
include("connection.php");

if(isset($_REQUEST['archive'])) {
	$post=$_REQUEST['archive'];

	$edit=mysqli_query($conn, "update post set pageID = 4 WHERE postID='$post'");

	if($edit) {
		mysqli_close($conn);
		header("location:/seaic/archive.php");
		exit;
	}

	else {
		echo mysqli_error($conn);
	}
}

?>