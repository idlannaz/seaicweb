<!DOCTYPE html>
<html lang="en">

<head>
  <title>ABOUT US</title>
  <?php include('components/head.inc.php'); ?>
  <link rel="stylesheet" href="css/team.css">
  <link rel="stylesheet" href="css/navi.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/tabs.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" class="team">
  <?php 
    $page = 'team';
    include('components/navibar.inc.php');
  ?>
  <div class="build">
    <?php include('components/Team/team.inc.php'); ?>
    <?php include('components/footer.inc.php'); ?>
  </div>
  <script src="js/tab.js"></script>
  <script src="js/homejs.js"></script>
  <script src="js/addteam.js"></script>
</body>

</html>