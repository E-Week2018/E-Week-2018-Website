<?php session_start(); ?>
<!DOCTYPE html>
<html  lang="en">
<head><?php 
    include('../Core/init.php'); 
    include('../Includes/boot.php'); 
    include('admin_nav.php'); 
?></head>

<body> 
<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p><br><br><br><br></p></header></center>
</section>

<center><br>
<h2 id="white">Sorry, that email does not appear to be in out database!</h2>
<h3 id="white">Please sign up before attempting to retrieve your QR code.</h2><br>

<br><h4><a href="../index.php" id="white">Home</a><br><br>
</center>

<?php include('../bottom.php'); ?>  
</body>
</html>