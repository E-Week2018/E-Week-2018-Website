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

<center><br><!--Main Information-->

<?php
    //once you submit the form
    if($_POST){
        $username = ((isset($_POST['username']))?htmlentities($_POST['username'], ENT_QUOTES, "UTF-8"):'');
        $username = trim($username);
        $password = ((isset($_POST['password']))?htmlentities($_POST['password'], ENT_QUOTES, "UTF-8"):'');
        $password = trim($password);
        $confirm = ((isset($_POST['confirm']))?htmlentities($_POST['confirm'], ENT_QUOTES, "UTF-8"):'');
        $confirm = trim($confirm);
        $checkzero = 1;//username is in database
        $checkone = 1;//all fields are filled out
        $checktwo = 1;//password is at least 6 characters
        $checkthree = 1;//check if new password matches confirm

        $emailQuery = $db->query("SELECT * FROM admin WHERE username = '$username'");
        $emailCount = mysqli_num_rows($emailQuery);

        //email is in database
        if($emailCount !== 0){
            $checkzero = false;
        }

        //all fields are filled out
        $required = array('username', 'password', 'confirm');
        foreach($required as $f){
            if(empty($_POST[$f])){
                $checkone = 0;
            }
        }

        //password is at least 6 characters
        if(strlen($password) < 6){
            $checktwo = 0;
        }

        //check if new password matches confirm
        if($password !== $confirm){
            $checkthree = 0;
        }


        if($checkzero == 0 || $checkone == 0 || $checktwo == 0 || $checkthree == 0){
            //failure printing
            if($checkzero == 0){
                echo '<p>That email already exists.</p>';
            }
            if($checkone == 0){
                echo '<p>You must fill out all required fields.</p>';
            }
            if($checktwo == 0){
                echo '<p>Your password must be at least six characters long.</p>';
            }
            if($checkthree == 0){
                echo "<p>The passwords do not match.<br></p>";
            }
        }
        elseif($checkzero == 1 && $checkone == 1 && $checktwo == 1 && $checkthree == 1){
            //Add user to database
            $hashed = password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO admin (username, password) VALUES ('$username','$hashed')";
            if ($db->query($query) === TRUE) {
                header('Location: ../index.php');
            } else {
                echo "Error: " . $query . "<br>" . $db->error;
            }
            
        }
        ?>
        
        <div class="col-md-12"><center><br>
        <h4 class="text-center"><a href="login.php" alt="home" id="white">Login</a></h4><br>
        <br><h4><a href="../index.php" id="white">Home</a><br><br>
        <!-- <h3 class="text-center"><a href="../index.php" alt="home" id="white">Home Page</a></h3> -->
        <br></center></div>
        
        <?php
    }
    else{
?>

</div>
<?php } ?>
</center>

<?php include('../bottom.php'); ?>  
</body>
</html>