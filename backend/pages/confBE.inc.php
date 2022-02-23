<?php
	
  include("backend/connection.php");
	
  $sql = "SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID WHERE post.pageID = 3 ORDER BY post.time desc";
  $qry = mysqli_query($conn,$sql);

  if (isset($_POST['post'])) { 

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $caption = mysqli_real_escape_string($conn,$_POST['caption']);
    $page = 3;
    $archive = 3;

    $_SESSION['adminid'];

    $sql = "INSERT INTO post (title,caption,pageID,adminID,time,archive) VALUES('".$title."','".$caption."','".$page."','".$_SESSION['adminid']."',CURRENT_TIMESTAMP,'".$archive."')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));

      $sql2 = "SELECT postID FROM post WHERE time = CURRENT_TIMESTAMP";
      $qry2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
      $row2 = mysqli_fetch_assoc($qry2);

      $imageCount = count($_FILES['image']['name']);

      for($i=0; $i<$imageCount; $i++){

        $imagename = $_FILES['image']['name'][$i];
        $tempname = $_FILES['image']['tmp_name'][$i];   
        $folder = "./image/".$imagename;

        if(move_uploaded_file($tempname, $folder)){

          $sql = "INSERT INTO image (picture,postID,time) VALUES('".$imagename."','".$row2['postID']."',CURRENT_TIMESTAMP)";
          mysqli_query($conn,$sql) or die(mysqli_error($conn));

        }

      }

    echo "<script language='javascript'>alert('Post added successfully.');window.location='conference.php';</script>";
  }

?>