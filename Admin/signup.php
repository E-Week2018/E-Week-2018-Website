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

<!--MAIN PHP SECTION FOR SIGNUP PROCESSING-->
<?php  

    $email = ((isset($_POST['email']))?htmlentities($_POST['email'], ENT_QUOTES, "UTF-8"):'');
    $email = trim($email);
    $major = ((isset($_POST['major']))?htmlentities($_POST['major'], ENT_QUOTES, "UTF-8"):'');
    $major = trim($major);
    $year = ((isset($_POST['year']))?htmlentities($_POST['year'], ENT_QUOTES, "UTF-8"):'');
    $year = trim($year);

    $checkzero = 1;//email is in database already
    $checkone = 1;//all fields are filled out
    $checktwo = 1;//validate email

    $emailQuery = $db->query("SELECT * FROM signup WHERE email = '$email'");
    $emailCount = mysqli_num_rows($emailQuery);

    // email is already in database
    if($emailCount !== 0){
        $checkzero = false;
    }

    //all fields are filled out
    $required = array('email', 'major', 'year');
    foreach($required as $f){
        if(empty($_POST[$f])){
            $checkone = 0;
        }
    }

    //valid email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $checktwo = 0;
    }


    if($checkzero == 0 || $checkone == 0 || $checktwo == 0){
        echo '<center>';
        //failure printing
        if($checkzero == 0){
            echo '<h2 id="white">That email already exists.<br></h2>';
        }
        if($checkone == 0){
            echo '<h2 id="white">You must fill out all required fields.<br></h2>';
        }
        if($checktwo == 0){
            echo '<h2 id="white">You must enter a valid email.<br></h2>';
        }
        echo '<br><h4><a href="../index.php" id="white">Home</a><br><br>
                      <a href="../signup.php" id="white">Signup</a><br></h4></center><br>';
    }
    elseif($checkzero == 1 && $checkone == 1 && $checktwo == 1){
        //Add user to database
        $query = "INSERT INTO signup (email, major, year) VALUES ('$email','$major','$year')";
        if ($db->query($query) === TRUE) {
            header('Location: success.php');
        } else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
        
    }
?>

<?php include('../bottom.php'); ?>  
</body>
</html>