<?php session_start(); ?>
<!DOCTYPE html>
<html  lang="en">
<head><?php 
    include('../Core/init.php'); 
    include('../Includes/boot.php'); 
    include('admin_nav.php'); 

    $username = ((isset($_POST['username']))?htmlentities($_POST['username'], ENT_QUOTES, "UTF-8"):'');
    $username = trim($username);
    $password = ((isset($_POST['password']))?htmlentities($_POST['password'], ENT_QUOTES, "UTF-8"):'');
    $password = trim($password);
?></head>

<body> 
<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p><br><br><br><br></p></header></center>
</section>

<center><br><!--Main Information-->

<?php
    $checkone = 1;//must have email and password
    $checktwo = 1;//Password must be at least 6 characters
    $checkthree = 1;//check if email exists in database
    $checkfour = 1;//verify password
    if($_POST){
        //form validation
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo '<p>You must provide an email and password.<br></p>';
            $checkone = 0;
        }

        //Password must be at least 6 characters
        if(strlen($password)<6){
            echo '<p>Password must be at least 6 characters.</br>';
            $checktwo = 0;
        }

        //check if email exists in database
        $query = $db->query("SELECT * FROM admin WHERE username = '$username'");
        $user = mysqli_fetch_assoc($query);
        $userCount = mysqli_num_rows($query);
        if($userCount < 1){
            echo '<p>That email doesn\'t exist in our database.</br>';
            $checkthree = 0;
        }

        //verify password
        if(!password_verify($password, $user['password'])){
            echo '<p>The password does not match our records. Please try again.</p>';
            $checkfour = 0;
        }

        //Check for errors
        if($checkone==0 || $checktwo==0 || $checkthree==0 || $checkfour==0){}
        else if($checkone==1 && $checktwo==1 && $checkthree==1 && $checkfour==1){
            //log user in
            $user_id = $user['id'];
            login($user_id);//login function below
        }
    }
?>

<br><h4><a href="../index.php" id="white">Home</a><br><br>
</center>

<!--Login function-->
<?php
    function login($user_id){
        $_SESSION['SBUser'] = $user_id; 
        header('Location: ../index.php');
    }
?>

<?php include('../bottom.php'); ?>  
</body>
</html>