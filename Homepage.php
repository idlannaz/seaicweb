<!DOCTYPE html>
<html lang="en">

<head>
  <title>HOME</title>
  <?php include('components/head.inc.php'); ?>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/navi.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <?php 
    $page = 'home';
    if(!isset($_SESSION['userID']))
      {
        include('components/Home/login.inc.php'); 
      } ?>

  <?php include('components/navibar.inc.php'); ?>
  <?php include('components/Home/about.inc.php'); ?>
  <?php include('components/Home/teams.inc.php'); ?>
  <?php include('components/Home/services.inc.php'); ?>
  <?php include('components/Home/clients.inc.php'); ?>
  <?php include('components/Home/contact.inc.php'); ?>
  <?php include('components/footer.inc.php'); ?>

  <script src="js/homejs.js"></script>
  <script src="js/login.js"></script>

</body>

</html>