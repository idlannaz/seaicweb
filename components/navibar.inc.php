<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="nav navbar-nav navbar-left">
        <a href="Homepage.php" title="HomePage"><img src="static/SEAIC_Logo.png" class="navbar-brand"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="team.php">ABOUT US</a></li>
        <li><a href="service.php">PROJECTS</a></li>
        <li><a href="csr.php">CSR</a></li>
        <li><a href="conference.php">CONFERENCES</a></li>
        <?php 
        if($page == 'home' ){
        if(!isset($_SESSION['userID'])) {?>
        <li><a href="#contact">CONTACT US</a></li>
        <?php } 
        }?>
        <?php if(isset($_SESSION['userID']))
          {?>
        <li><a href="archive.php">ARCHIVES</a></li>
        <li><a href="backend/logout.php">LOG OUT</a></li>
        <?php
          }?>
      </ul>
    </div>

  </div>

</nav>