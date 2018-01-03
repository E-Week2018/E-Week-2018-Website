<?php session_start(); ?>
<!DOCTYPE html>
<html  lang="en">
<head> <?php include('top.php'); include('modal.php'); ?> </head>

<body> 
<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p></p></header></center>
</section>

<!--Background image for homepage
<div class="row">
<img class="wide" id="width" src="_images/home.jpg" alt="home">
</div>
-->

<!--Title-->
<section class="container-fluid">  
  <div class="col-md-12">
    <center><header><h2><br><br>E-Week 2018</h2></header></center>
    <br>
  </div>
</section>

<!--Main Information-->
<section class="container-fluid">  
  <div class="col-md-8 col-md-offset-2">
    <center>
      <h3><br>
      Main Information on E-Week 2018
      </h3>
    </center>
  </div>
</section>
<br><br><br><br>

<center><div class="container-fluid">
<div class="col-md-3"><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#signup-modal"> Signup </button></div>
<div class="col-md-3"><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#qr-modal"> Get QR Code </button></div>
<div class="col-md-3"><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#admin-modal"> Create New Admin </button></div>
<div class="col-md-3"><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#login-modal"> Login as Admin </button></div>
</div></center><br><br><br><br>

<?php include('bottom.php'); ?>  
</body>
</html>

<!-- <script>
    //ajax request to signup user
    function signup_modal(){
        jQuery.ajax({
            url : '/Includes/signup_modal.php',
            method : "post",
            data : data,
            success : function(data){
                //adds information to just above the closing body tag
                jQuery('body').append(data);
                //select and toggle modal
                jQuery('#modal1').modal('toggle');
            },
            error : function(){alert("Something went wrong!");},
        });
    }
    //ajax request to retrieve QR code
    function qr_modal(){
        jQuery.ajax({
            url : '/Includes/qr_modal.php',
            method : "post",
            data : data,
            success : function(data){
                //adds information to just above the closing body tag
                jQuery('body').append(data);
                //select and toggle modal
                jQuery('#modal1').modal('toggle');
            },
            error : function(){alert("Something went wrong!");},
        });
    }
</script> -->