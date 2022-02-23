<?php include("backend/connection.php");

if (isset($_POST['member'])) {

  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="./image/".$filename;
  move_uploaded_file($tempname, $folder);

  $sql="INSERT INTO image (picture,time) VALUES('".$filename."',CURRENT_TIMESTAMP)";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));

  $sql2="SELECT imageID FROM image WHERE time = CURRENT_TIMESTAMP";
  $qry2=mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  $row2=mysqli_fetch_assoc($qry2);

  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $title=$_POST['title'];

  $_SESSION['adminid'];

  $sql="INSERT INTO team (teamName,teamTitle,imageID,adminID) VALUES('".$name."','".$title."','".$row2['imageID']."','".$_SESSION['adminid']."')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));

  echo "<script language='javascript'>alert('Members added successfully.');window.location='Team.php';</script>";
}

else if (isset($_POST['student'])) {

  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="./image/".$filename;
  move_uploaded_file($tempname, $folder);

  $sql="INSERT INTO image (picture,time) VALUES('".$filename."',CURRENT_TIMESTAMP)";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));

  $sql2="SELECT imageID FROM image WHERE time = CURRENT_TIMESTAMP";
  $qry2=mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  $row2=mysqli_fetch_assoc($qry2);

  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $edu=mysqli_real_escape_string($conn, $_POST['education']);
  $research=mysqli_real_escape_string($conn, $_POST['research']);

  $_SESSION['adminid'];

  $sql="INSERT INTO student (studentName,eduLevel,research,imageID,adminID) VALUES('".$name."','".$edu."','".$research."','".$row2['imageID']."','".$_SESSION['adminid']."')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));

  echo "<script language='javascript'>alert('Students added successfully.');window.location='Team.php';</script>";
}

?>