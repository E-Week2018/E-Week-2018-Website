<!-- full navbar -->
<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: -1;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!--Main Text on Left-->
      <a class="navbar-brand" href="index.php" id="xlarge">  E-Week 2018  </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"><!--Left Side of Nav Bar-->
        <li><a href="index.php" id="large"> HOME <span class="sr-only"></span></a></li><!--Default homepage-->
        <?php if(isset($_SESSION['SBUser'])){ ?><!--if logged in-->
          <li><a href="Admin/users.php" id="large"> USERS <span class="sr-only"></span></a></li><!--manage admin users and people that sign up-->
        <?php }else{ ?><!--if not logged in-->

        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right"><!--Right Side of Nav Bar-->
        <?php if(isset($_SESSION['SBUser'])){ ?><!--if logged in-->
          <li><a href="Admin/logout.php" id="large"> LOGOUT <span class="sr-only"></span></a></li><!--logout-->
        <?php }else{ ?><!--if not logged in-->

        <?php } ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 