<?php include('backend/pages/csrBE.inc.php'); ?>

<div class="container-fluid contain text-center">
  <h1 class="title">CORPORATE SOCIAL RESPONSIBILITY(CSR)</h1>
</div>

<div class="row">
  <div class="leftcolumn">

    <?php 
  if(isset($_SESSION['userID']))
  { ?>
    <div class="card">
      <?php include('components/Content/post.inc.php'); ?>
    </div><?php
  } ?>

    <?php

      $temp = 0;
      $i=0;
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

  <div class="rightcolumn sticky">
    <div class="card">
        <h3 class="left" style="font-size: x-large;">What is SEAIC-CSR?</h3>
      <h5 class="left" style="font-size:large;">CSR or Corporate social responsibility page show the events that SEAIC involved or held that including the
        community</h5>
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