<!-- signup-modal -->
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-modal-label" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      
      <h3 class="modal-title" id="black">Signup</h3>
    </div>
    <div class="modal-body">
      <!--Main form for signup-->
      <form action="Admin/signup.php" method="post">
      <div class="container-fluid">

        <!--Necessary Information to be filled out-->
        <label id="black"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
        <label id="black"><b>Major</b></label>
        <input type="text" placeholder="Major" name="major" required>
        <label id="black"><b>Year</b></label>
        <input type="text" placeholder="Year" name="year" required>

      </div> 
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="submit" class="signupbtn">Sign Up</button>
      <button type="button" class="signupbtn" data-dismiss="modal">Close</button>
      </form><!--END OF FORM, necessary to include buttons in this-->
    </div>
  </div>
</div>
</div>

<!-- qr-modal -->
<div class="modal fade" id="qr-modal" tabindex="-1" role="dialog" aria-labelledby="qr-modal-label" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="black">Retrieve Your QR Code</h3>
    </div>
    <div class="modal-body">
      <!--Main form for signup-->
      <form action="Admin/fetch_qr.php" method="post">
      <div class="container-fluid">

        <!--Necessary Information to be filled out-->
        <label id="black"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

      </div> 
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="submit" class="signupbtn">Get QR Code</button>
      <button type="button" class="signupbtn" data-dismiss="modal">Close</button>
      </form><!--END OF FORM, necessary to include buttons in this-->
    </div>
  </div>
</div>
</div>

<!-- create admin-modal -->
<div class="modal fade" id="admin-modal" tabindex="-1" role="dialog" aria-labelledby="admin-modal-label" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="black">Create a New Administrator</h3>
    </div>
    <div class="modal-body">
      <!--Main form for signup-->
      <form action="Admin/add_admin.php" method="post">
      <div class="container-fluid">

        <!--Necessary Information to be filled out-->
        <label id="black"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required><br>
        <label id="black"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required><br>
        <label id="black"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="confirm" required><br>

      </div> 
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="submit" class="signupbtn">Create Administrator</button>
      <button type="button" class="signupbtn" data-dismiss="modal">Close</button>
      </form><!--END OF FORM, necessary to include buttons in this-->
    </div>
  </div>
</div>
</div>

<!-- admin login-modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="black">Login as Administrator</h3>
    </div>
    <div class="modal-body">
      <!--Main form for signup-->
      <form action="Admin/login.php" method="post">
      <div class="container-fluid">

        <!--Necessary Information to be filled out-->
        <label id="black"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required><br>
        <label id="black"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required><br>

      </div> 
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="submit" class="signupbtn">Login</button>
      <button type="button" class="signupbtn" data-dismiss="modal">Close</button>
      </form><!--END OF FORM, necessary to include buttons in this-->
    </div>
  </div>
</div>
</div>