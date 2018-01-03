<?php session_start(); 
if(isset($_SESSION['SBUser'])){?>
<!DOCTYPE html>
<html  lang="en">
<head><?php 
    include('../Core/init.php'); 
    include('../Includes/boot.php'); 
    include('admin_nav.php'); 
    include('modal.php');

    $userQuery = $db->query('SELECT * FROM signup ORDER BY id');
    $adminQuery = $db->query('SELECT * FROM admin ORDER BY id');
?></head>

<body> 
<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p><br><br><br><br></p></header></center>
</section>

<br><!--Main Information-->

<center>
<h1>Users</h1>

<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#admin-modal"> Create New Admin </button><br><br> 

<h3>Key for event numbers</h3><br>
<h5>0 = Not Visited | 1 = Visited</h5><br>
<h5></h5><br>
</center>

<!--Key for USER data-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead>
        <th><h3 id="black">Event ID</h3></th>
        <th><h3 id="black">Event Name</h3></th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Engineering and Science Fair</td>
        </tr>
        <tr>
            <td>2</td>
            <td>E-Talk</td>
        </tr>
        <tr>
            <td>3</td>
            <td>EFL</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Closing Ceremonies</td>
        </tr>
        <tr>
            <td>5</td>
            <td>E-Fest</td>
        </tr>
        <tr>
            <td>6</td>
            <td>ESL</td>
        </tr>
        <tr>
            <td>7</td>
            <td>5k</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Yoga</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Think Better</td>
        </tr>
    </tbody>
</table>
</div><br><br>

<center><h2>All Users</h2><br><br></center>

<!--Retreives and displays all USER data in a table-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">ID</h3></th>
        <th><h3 id="black">Email</h3></th>
        <th><h3 id="black">Major</h3></th>
        <th><h3 id="black">Year</h3></th>
        <th><h3 id="black">1</h3></th>
        <th><h3 id="black">2</h3></th>
        <th><h3 id="black">3</h3></th>
        <th><h3 id="black">4</h3></th>
        <th><h3 id="black">5</h3></th>
        <th><h3 id="black">6</h3></th>
        <th><h3 id="black">7</h3></th>
        <th><h3 id="black">8</h3></th>
        <th><h3 id="black">9</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <?php while($user = mysqli_fetch_assoc($userQuery)): ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['major']?></td>
            <td><?=$user['year']?></td>
            <td><?=$user['one']?></td>
            <td><?=$user['two']?></td>
            <td><?=$user['three']?></td>
            <td><?=$user['four']?></td>
            <td><?=$user['five']?></td>
            <td><?=$user['six']?></td>
            <td><?=$user['seven']?></td>
            <td><?=$user['eight']?></td>
            <td><?=$user['nine']?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div><br><br>

<center><h2>Event Attendance</h2><br><br></center>

<?php //getting amount of attendance for each of the nine events
    $one = $db->query('SELECT * FROM signup WHERE one = 1'); 
    $two = $db->query('SELECT * FROM signup WHERE two = 1'); 
    $three = $db->query('SELECT * FROM signup WHERE three = 1'); 
    $four = $db->query('SELECT * FROM signup WHERE four = 1'); 
    $five = $db->query('SELECT * FROM signup WHERE five = 1'); 
    $six = $db->query('SELECT * FROM signup WHERE six = 1'); 
    $seven = $db->query('SELECT * FROM signup WHERE seven = 1'); 
    $eight = $db->query('SELECT * FROM signup WHERE eight = 1'); 
    $nine = $db->query('SELECT * FROM signup WHERE nine = 1'); 
?>

<!--Displays stats on attendance for each event-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">1</h3></th>
        <th><h3 id="black">2</h3></th>
        <th><h3 id="black">3</h3></th>
        <th><h3 id="black">4</h3></th>
        <th><h3 id="black">5</h3></th>
        <th><h3 id="black">6</h3></th>
        <th><h3 id="black">7</h3></th>
        <th><h3 id="black">8</h3></th>
        <th><h3 id="black">9</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <tr>
            <td><?= mysqli_num_rows($one) ?></td>
            <td><?= mysqli_num_rows($two) ?></td>
            <td><?= mysqli_num_rows($three) ?></td>
            <td><?= mysqli_num_rows($four) ?></td>
            <td><?= mysqli_num_rows($five) ?></td>
            <td><?= mysqli_num_rows($six) ?></td>
            <td><?= mysqli_num_rows($seven) ?></td>
            <td><?= mysqli_num_rows($eight) ?></td>
            <td><?= mysqli_num_rows($nine) ?></td>
        </tr>
    </tbody>
</table>
</div><br><br>

<center><h1>Administrators</h1></center>

<!--Retreives and displays all ADMIN data in a table-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">ID</h3></th>
        <th><h3 id="black">Username</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <?php while($user = mysqli_fetch_assoc($adminQuery)): ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['username']?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>

<?php include('../bottom.php'); ?>  
</body>
</html>
<?php } ?> <!--Ending if to make sure the user is logged in -->