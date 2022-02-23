<!DOCTYPE html>
<html lang="en">

<head>
  <title>CSR</title>
  <?php include('components/head.inc.php'); ?>
  <link rel="stylesheet" href="css/postcon.css">
  <link rel="stylesheet" href="css/navi.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/postplace.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <?php 
    $page = 'csr';
    include('components/navibar.inc.php'); 
  ?>
  
  <div class="build">
    <?php include('components/Content/contentCSR.inc.php'); ?>
  </div>


  <?php include('components/footer.inc.php'); ?>



  <script src="js/homejs.js"></script>
  <script src="js/accordion.js"></script>
  <script src="js/remove.js"></script>

</body>

</html>