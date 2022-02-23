<?php include('backend/pages/serviceBE.inc.php'); ?>

<div class="container-fluid contain text-center">
  <h1 class="title">SEA-IC PROJECTS</h1>
</div>

<div class="row">

  <div class="leftcolumn">
    <?php 
  if(isset($_SESSION['userID']))
  { ?>
    <div class="card">
      <?php include('components/Content/postSer.inc.php'); ?>
    </div><?php
  } ?>

    <div id="tabbs">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('drone')"> Drone</button>
      <button class="btn" onclick="filterSelection('consult')"> Consultation</button>
      <button class="btn" onclick="filterSelection('train')"> Training</button>
      <button class="btn" onclick="filterSelection('other')"> Other</button>
    </div>


    <!-------------------------------------------------- drone -------------------------------------------------------------------- -->
    <!-- id letak sini -->
    <div class="filterDiv drone">
      <?php

$temp = 0;
$i=0;
$sql="SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID INNER JOIN project ON project.postID = post.postID WHERE post.pageID = 1 AND project.category = 'Drone' ORDER BY post.time desc";
$qry=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($qry)) 
{
  $timestamp = $row["time"];

  if($row["postID"] != $temp)
  {
    $sql2 = "SELECT * FROM image WHERE postID = '".$row["postID"]."'";
    $qry2 = mysqli_query($conn,$sql2);    

?>
      <div class="card">
        <table>
          <th class="title left">
            <h2><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkArchive()' href='backend/archive.php?archive=".$row["postID"]."'>";?><i
              title="Archive Post" class="fa remove fa-close"></i></a></th><?php }?>
        </table>

        <h5><?php echo date('M d, Y', strtotime($timestamp));?></h5>

        <div class="row post center">
          <?php
    while($row2 = mysqli_fetch_assoc($qry2))
    {
      $i++;
      echo "<div class='col-sm-3 text-center'>";
        echo "<img onClick='showImage(" . $i . ")' id = 'myImg" . $i . "' src = 'image/".$row2['picture']."' class = 'avatar'>";
        echo "</span>";
        echo "<div id = 'myModal" . $i . "' class = 'modal'>";
        echo "<span class = 'close' onClick='closeImage(" . $i . ")'>&times;</span>";
        echo "<img class = 'modal-content' id = 'img01" . $i . "'>";
        echo "</div>";
      echo "</div>";
    }
  ?>

        </div>
        <br><br>

        <p class="para"><?php echo $row["caption"];?></p>
      </div>
      <?php
    $temp = $row["postID"]; 
  }
}
?>
    </div>

    <!-- ----------------------------------------------------Training  ---------------------------------------------------------------------------------->
    <!-- id letak sini -->
    <div class="filterDiv train">
      <?php

$temp = 0;
$i=0;
$sql="SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID INNER JOIN project ON project.postID = post.postID WHERE post.pageID = 1 AND project.category = 'Training' ORDER BY post.time desc";
      $qry=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($qry)) 
{
  $timestamp = $row["time"];

  if($row["postID"] != $temp)
  {
    $sql2 = "SELECT * FROM image WHERE postID = '".$row["postID"]."'";
    $qry2 = mysqli_query($conn,$sql2);    

?>
      <div class="card">
        <table>
          <th class="title left">
            <h2><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkArchive()' href='backend/archive.php?archive=".$row["postID"]."'>";?><i
              title="Archive Post" class="fa remove fa-close"></i></a></th><?php }?>
        </table>

        <h5><?php echo date('M d, Y', strtotime($timestamp));?></h5>

        <div class="row post center">
          <?php
    while($row2 = mysqli_fetch_assoc($qry2))
    {
      $i++;
      echo "<div class='col-sm-3 text-center'>";
        echo "<img onClick='showImage(" . $i . ")' id = 'myImg" . $i . "' src = 'image/".$row2['picture']."' class = 'avatar'>";
        echo "</span>";
        echo "<div id = 'myModal" . $i . "' class = 'modal'>";
        echo "<span class = 'close' onClick='closeImage(" . $i . ")'>&times;</span>";
        echo "<img class = 'modal-content' id = 'img01" . $i . "'>";
        echo "</div>";
      echo "</div>";
    }
  ?>

        </div>
        <br><br>

        <p class="para"><?php echo $row["caption"];?></p>
      </div>
      <?php
    $temp = $row["postID"]; 
  }
}
?>
    </div>


    <!-------------------------------------------------- Consult---------------------------------------------------------->
    <!-- id letak sini -->
    <div class="filterDiv consult">
      <?php

$temp = 0;
$i=0;
$sql="SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID INNER JOIN project ON project.postID = post.postID WHERE post.pageID = 1 AND project.category = 'Consultation' ORDER BY post.time desc";
      $qry=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($qry)) 
{
  $timestamp = $row["time"];

  if($row["postID"] != $temp)
  {
    $sql2 = "SELECT * FROM image WHERE postID = '".$row["postID"]."'";
    $qry2 = mysqli_query($conn,$sql2);    

?>
      <div class="card">
        <table>
          <th class="title left">
            <h2><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkArchive()' href='backend/archive.php?archive=".$row["postID"]."'>";?><i
              title="Archive Post" class="fa remove fa-close"></i></a></th><?php }?>
        </table>

        <h5><?php echo date('M d, Y', strtotime($timestamp));?></h5>

        <div class="row post center">
          <?php
    while($row2 = mysqli_fetch_assoc($qry2))
    {
      $i++;
      echo "<div class='col-sm-3 text-center'>";
        echo "<img onClick='showImage(" . $i . ")' id = 'myImg" . $i . "' src = 'image/".$row2['picture']."' class = 'avatar'>";
        echo "</span>";
        echo "<div id = 'myModal" . $i . "' class = 'modal'>";
        echo "<span class = 'close' onClick='closeImage(" . $i . ")'>&times;</span>";
        echo "<img class = 'modal-content' id = 'img01" . $i . "'>";
        echo "</div>";
      echo "</div>";
    }
  ?>

        </div>
        <br><br>

        <p class="para"><?php echo $row["caption"];?></p>
      </div>
      <?php
    $temp = $row["postID"]; 
  }
}
?>
    </div>


    <!--------------------------------------------------------- Others -------------------------------------------------------------------------->
    <div class="filterDiv other">
      <?php

$temp = 0;
$i=0;
$sql="SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID INNER JOIN project ON project.postID = post.postID WHERE post.pageID = 1 AND project.category = 'Others' ORDER BY post.time desc";
      $qry=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($qry)) 
{
  $timestamp = $row["time"];

  if($row["postID"] != $temp)
  {
    $sql2 = "SELECT * FROM image WHERE postID = '".$row["postID"]."'";
    $qry2 = mysqli_query($conn,$sql2);    

?>
      <div class="card">
        <table>
          <th class="title left">
            <h2><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkArchive()' href='backend/archive.php?archive=".$row["postID"]."'>";?><i
              title="Archive Post" class="fa remove fa-close"></i></a></th><?php }?>
        </table>

        <h5><?php echo date('M d, Y', strtotime($timestamp));?></h5>

        <div class="row post center">
          <?php
    while($row2 = mysqli_fetch_assoc($qry2))
    {
      $i++;
      echo "<div class='col-sm-3 text-center'>";
        echo "<img onClick='showImage(" . $i . ")' id = 'myImg" . $i . "' src = 'image/".$row2['picture']."' class = 'avatar'>";
        echo "</span>";
        echo "<div id = 'myModal" . $i . "' class = 'modal'>";
        echo "<span class = 'close' onClick='closeImage(" . $i . ")'>&times;</span>";
        echo "<img class = 'modal-content' id = 'img01" . $i . "'>";
        echo "</div>";
      echo "</div>";
    }
  ?>

        </div>
        <br><br>

        <p class="para"><?php echo $row["caption"];?></p>
      </div>
      <?php
    $temp = $row["postID"]; 
  }
}
?>
    </div>
  </div>


  <div class="rightcolumn sticky">

    <div class="card">
      <h3 class="left" style="font-size: x-large;">What is SEAIC-PROJECTS?</h3>
      <p class="left" style="font-size: large;">This page show the history of services that SEAIC have done since SEAIC
        establish.</p>
    </div>

    <div class="card">
      <h3 class="left" style="font-size: x-large;">Our Social Media</h3>
      <a href="https://www.facebook.com/SEAICFKMUiTM/" target="blank" class="fa fa-facebook"></a>
      <a href="https://www.youtube.com/channel/UCsFoJeyW0BC3wVvnDEsIyxw" target="blank" class="fa fa-youtube"></a>
      <a href="http://www.instagram.com/sea_ic_official" target="blank" class="fa fa-instagram"></a>
      <a href="https://vimeo.com/user99854816/seaic" target="blank" class="fa fa-vimeo"></a>
    </div>
  </div>



</div>