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
<h2 id="white">Congratulations! You have officially signed up for E-Week 2018!</h2>
<h3 id="white">Please look in your email for a confirmation QR code and further instructions.</h2><br>
<h4 id="white">Access your QR code below and screenshot it for easy entry into all E-Week events.</h4><br>

<div class="col-md-2 col-md-offset-5"><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#qr-modal"> Get QR Code </button></div><br><br>

<br><br><br><div class="col-md-12"><h4><a href="../index.php" id="white">Home</a></h4></div><br><br>
</center>

<?php include('../bottom.php'); include('modal.php'); ?>  
</body>
</html>