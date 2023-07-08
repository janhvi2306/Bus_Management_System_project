<?php
require 'assets/partials/_userreg.php';
    $conn = mysqli_connect('localhost','root','','sbtbsphp');

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if(isset($_POST["submit"]))
    {
        $cname = $_POST['cname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `customers` WHERE customer_name='$cname' AND password='$password';";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
               
                $_SESSION["cname"] = $cname;
                echo '<script type="text/javascript">alert("User Login Successfull");</script>';
                echo '<script type=text/javascript">window.location(index1.php)</script>';
                exit;
          }
            
            // Login failure
            $error = true;
            header("location: index.php?error=$error");
           
      }
?>
<div class="modal fade" id="userloginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userloginModalLabel">Login As User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="cname" name="cname"  required>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
              <div class="form-text">We'll never share your password with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-success" name="submit" >Login</button><br><br>
         Don't have an account?<a href="#userreg" class="login nav-item" data-bs-toggle="modal" data-bs-target="#userregModal" data-dismiss="modal">Register </a>now
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>
