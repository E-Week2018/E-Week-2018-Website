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
    <center><header class="col-md-12"><p><br><br></p></header></center>
</section>

<!--Title-->
<section class="container-fluid">  
  <div class="col-md-12">
    <center><header><h2><br><br>Personalized QR Code for <?php echo htmlspecialchars($_POST['email']); ?></h2></header></center>
    <br>
  </div>
</section>

<!--MAIN PHP SECTION FOR QR PROCESSING-->
<?php  

    $email = ((isset($_POST['email']))?htmlentities($_POST['email'], ENT_QUOTES, "UTF-8"):'');
    $email = trim($email);

    $result = $db->query("SELECT * FROM signup WHERE email = '$email'");

    // echo htmlspecialchars($_POST['email']);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // echo "id: " . $row["id"];
        ?><center>
            <!-- <img src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="" /> -->
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $row["id"]; ?>" alt="" title="" />
        </center><?php
    } else {
        header('Location: failure.php');
    }

    // mysql_select_db("eweek");
    // $result = mysql_query("SELECT * FROM signup WHERE email = '$email'");
    // $row = mysql_fetch_object($result);
    // echo $row->email;   
    // echo $row->id;
?>
<br><br><br><center><div class="col-md-12"><h4><a href="../index.php" id="white">Home</a></h4></div></center><br><br><br>

<?php include('../bottom.php'); ?>  
</body>
</html>