<!-- Container (Services Section) -->

<?php include('backend/pages/teamBE.inc.php'); ?>

<div class="container-fluid contain text-center">
  <h1 class="title">ABOUT US</h1>
</div>

<div class="tab">
  <?php 
  if(isset($_SESSION['userID']))
  { ?>
  <button class="tablinks button6" onclick="roleTab(event, 'AddNew')">ADD NEW</button><?php 
  } ?>
  <button class="tablinks button6" onclick="roleTab(event, 'Members')" id="defaultOpen">MEMBERS</button>
  <button class="tablinks button6" onclick="roleTab(event, 'phD')">PhD</button>
  <button class="tablinks button6" onclick="roleTab(event, 'Master')">MASTER</button>
  <button class="tablinks button6" onclick="roleTab(event, 'Intern')">INTERNSHIP</button>
</div>


<!-- ---------------------------MEMBERS------------------------------------ -->
<div id="Members" class="tabcontent">

  <div class="row">
    <?php

    $sql = "SELECT * FROM team t, image i WHERE t.imageID = i.imageID";
    $qry = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($qry)) {
              
  ?>

    <div class="col-sm-3 text-center">
      <img src="image/<?php echo $row["picture"];?>" class="avatar">

      <h2> <?php echo $row["teamName"]  . "<br>";?> </h2>
      <h3> <?php echo "(" . $row["teamTitle"] .")". "<br>"; ?> </h3>

      <?php if(isset($_SESSION['userID'])){ 
        echo "<a onclick='return checkDelete()' href='backend/delete.php?team=".$row["imageID"]."'>";
        echo "<i title='Delete Member' class='fa remove fa-close'></i>";
        echo "</a>";
      }?>
    </div> <?php    
    } ?>

  </div>

</div>

<!-- ---------------------------MASTER------------------------------------ -->
<div id="Master" class="tabcontent">

  <div class="row">
    <?php

    $sql = "SELECT * FROM student s, image i WHERE s.imageID = i.imageID AND s.eduLevel = 'Master'";
    $qry = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($qry)) {
              
  ?>

    <div class="col-sm-3 text-center">
      <img src="image/<?php echo $row["picture"];?>" class="avatar">

      <h2> <?php echo "<strong>" . $row["studentName"] . "</strong>" . "<br>";?> </h2>
      <h3> <?php echo "(" . $row["eduLevel"] .")". "<br>"; ?> </h3>
      <h3> <?php echo "<q>" . $row["research"] ."</q>"; ?> </h3>

      <?php if(isset($_SESSION['userID'])){ ?><?php echo "<a onclick='return checkDelete()' href='backend/delete.php?stud=".$row["imageID"]."'>"?><i
        title="Delete Student" class="fa remove fa-close"></i><?php echo "</a>";?><?php }?>
    </div> <?php    
    } ?>

  </div>

</div>


<!-- ---------------------------PHD------------------------------------ -->
<div id="phD" class="tabcontent">

  <div class="row">
    <?php

    $sql = "SELECT * FROM student s, image i WHERE s.imageID = i.imageID AND s.eduLevel = 'PhD'";
    $qry = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($qry)) {
              
  ?>

    <div class="col-sm-3 text-center">
      <img src="image/<?php echo $row["picture"];?>" class="avatar">

      <h2> <?php echo "<strong>" . $row["studentName"] . "</strong>" . "<br>";?> </h2>
      <h3> <?php echo "(" . $row["eduLevel"] .")". "<br>"; ?> </h3>
      <h3> <?php echo "<q>" . $row["research"] ."</q>"; ?> </h3>


      <?php if(isset($_SESSION['userID'])){ ?><?php echo "<a onclick='return checkDelete()' href='backend/delete.php?stud=".$row["imageID"]."'>"?><i
        title="Delete Student" class="fa remove fa-close"></i><?php echo "</a>";?><?php }?>
    </div> <?php    
    } ?>

  </div>

</div>

<!-- ---------------------------INTERN------------------------------------ -->
<div id="Intern" class="tabcontent">

  <div class="row">
    <?php

    $sql = "SELECT * FROM student s, image i WHERE s.imageID = i.imageID AND s.eduLevel = 'Internship'";
    $qry = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($qry)) {
              
  ?>

    <div class="col-sm-3 text-center">
      <img src="image/<?php echo $row["picture"];?>" class="avatar">

      <h2> <?php echo "<strong>" . $row["studentName"] . "</strong>" . "<br>";?> </h2>
      <h3> <?php echo "(" . $row["eduLevel"] .")". "<br>"; ?> </h3>
      <h3> <?php echo "<q>" . $row["research"] ."</q>"; ?> </h3>

      <?php if(isset($_SESSION['userID'])){ ?><?php echo "<a onclick='return checkDelete()' href='backend/delete.php?stud=".$row["imageID"]."'>"?><i
        title="Delete Student" class="fa remove fa-close"></i><?php echo "</a>";?><?php }?>
    </div> <?php    
    } ?>

  </div>

</div>

<div id="AddNew" class="tabcontent">
  <?php include('components/Team/add.inc.php'); ?>
</div>

<script src="js/remove.js"></script>