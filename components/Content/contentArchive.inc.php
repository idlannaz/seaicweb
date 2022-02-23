<?php 
    include("backend/connection.php"); 

?>

<div class="container-fluid contain text-center">
  <h1 class="title">ARCHIVES</h1>
</div>

<div class="row">
  <div class="leftcolumn">

    <div id="tabbs">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('pro')">Projects</button>
      <button class="btn" onclick="filterSelection('csr')">CSR</button>
      <button class="btn" onclick="filterSelection('conf')">Conferences</button>
    </div>


    <!------------------------------------- projects-------------------------------- -->
    <div class="filterDiv pro">
      <?php

      $temp = 0;
      $i=0;
      $sql = "SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID WHERE post.pageID = 4 AND post.archive = 1 ORDER BY post.time desc";
      $qry = mysqli_query($conn,$sql);
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
            <h2 class="para"><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkDelete()' href='backend/delete.php?archive=".$row["postID"]."'>";?><i
              title="Delete Post" class="fa remove fa-close"></i></a></th><?php }?>
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

    <!----------------------------------- csr ------------------------------------------>
    <div class="filterDiv csr">
      <?php

      $temp = 0;
      $i=0;
      $sql = "SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID WHERE post.pageID = 4 AND post.archive = 2 ORDER BY post.time desc";
      $qry = mysqli_query($conn,$sql);
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
            <h2 class="para"><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkDelete()' href='backend/delete.php?archive=".$row["postID"]."'>";?><i
              title="Delete Post" class="fa remove fa-close"></i></a></th><?php }?>
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

    <!------------------------------------------- conferences --------------------------------------->
    <div class="filterDiv conf">
      <?php

      $temp = 0;
      $i=0;
      $sql = "SELECT * FROM page INNER JOIN post ON post.pageID = page.pageID INNER JOIN image ON image.postID = post.postID WHERE post.pageID = 4 AND post.archive = 3 ORDER BY post.time desc";
            $qry = mysqli_query($conn,$sql);
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
            <h2 class="para"><?php echo $row["title"];?></h2>
          </th>
          <?php if(isset($_SESSION['userID'])){ ?><th class="title">
            <?php echo "<a onclick='return checkDelete()' href='backend/delete.php?archive=".$row["postID"]."'>";?><i
              title="Delete Post" class="fa remove fa-close"></i></a></th><?php }?>
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

      <h3 class="left" style="font-size: x-large;">What is SEAIC-Archive?</h3>

      <h5 class="left" style="font-size:large;">Archive page is for all the archived post in the SEAIC website.</h5>
    </div>

    <!-- <div class="card">
      <h3>Follow Us</h3>
      <p>Some text..</p>
    </div> -->

  </div>
</div>