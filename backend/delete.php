<?php session_start();
include("connection.php");

if(isset($_REQUEST['stud'])) {

	$img=$_REQUEST['stud'];

	$delete=mysqli_query($conn, "DELETE FROM student WHERE imageID='$img'");
	$delete2=mysqli_query($conn, "DELETE FROM image WHERE imageID='$img'");

	if($delete && $delete2) {
		mysqli_close($conn);
		echo "<script language='javascript'>alert('Successfully deleted.');window.location='/seaic/Team.php';</script>";
		exit;
	}

	else {
		echo mysqli_error($conn);
	}

}

else if(isset($_REQUEST['team'])) {

	$img=$_REQUEST['team'];

	$delete=mysqli_query($conn, "DELETE FROM team WHERE imageID='$img'");
	$delete2=mysqli_query($conn, "DELETE FROM image WHERE imageID='$img'");


	if($delete && $delete2) {
		mysqli_close($conn);
		echo "<script language='javascript'>alert('Successfully deleted.');window.location='/seaic/Team.php';</script>";
		exit;
	}

	else {
		echo mysqli_error($conn);
	}

}

else if(isset($_REQUEST['archive'])) {

	$post=$_REQUEST['archive'];

	$delete=mysqli_query($conn, "DELETE FROM post WHERE postID='$post'");
	$delete2=mysqli_query($conn, "DELETE FROM image WHERE postID='$post'");
	$delete3=mysqli_query($conn, "DELETE FROM project WHERE postID='$post'");

	if($delete && $delete2 || $delete3) {
		mysqli_close($conn);
		echo "<script language='javascript'>alert('Successfully deleted.');window.location='/seaic/archive.php';</script>";
		exit;
	}

	else {
		echo mysqli_error($conn);
	}

}

?>