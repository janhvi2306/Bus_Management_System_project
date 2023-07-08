<?php
  $conn = mysqli_connect('localhost','root','', 'sbtbsphp');
if(isset($_POST['submit1']))
{
    $cname=$_POST['cname'];
    $cphone=$_POST['cphone'];
    $password=$_POST['password'];
    $sql = "INSERT INTO `customers`(`customer_name`, `customer_phone`, `password`, `customer_created`) VALUES ('$cname', '$cphone', '$password', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    $autoInc_id = mysqli_insert_id($conn);
    // If the id exists then, 
    if($autoInc_id)
    {
        $code = rand(1,99999);
        // Generates the unique userid
        $customer_id = "CUST-".$code.$autoInc_id;
        $query = "UPDATE `customers` SET `customer_id` = '$customer_id' WHERE `customers`.`id` = $autoInc_id;";
        $queryResult = mysqli_query($conn, $query);

        if($queryResult)
            {
              echo '<div class="my-0 alert alert- alert-dismissible fade show" role="alert"><strong><h4 style="color:white;background: #04AA6D;margin-top:180px;width:30%;">Please note your Customer Id :</h4><strong>
              <b><h3 style="color:white;background: #04AA6D;margin-top:0;width:20%;">'.$customer_id.'<h3></b>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
    }

    if($result)
        $customer_added = true;

    // Gives back the Auto Increment id
    if($result)
    {
      echo '<script type="text/javascript">alert("Account created Successfully")</script>';
     
    }
    else{
      echo '<script type="text/javascript">alert("Failed to create account")</script>';
    }
    
  }

?>

<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
  function phoneNumberCheck(phoneNumber)
{
   var regEx = /^\(\d{3}\)\s*\d{3}(?:-|\s*)\d{4}$/;
   if(phoneNumber.value.match(regEx))
     {
      return true;
     }
   else
     {
     alert("Please enter a valid phone number.");
     return false;
     }
}    
</script>
  </head>
<body>
<div class="modal fade" id="userregModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userregLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
              <label for="cname" class="form-label">Name</label>
              <input type="text" class="form-control" id="cname" name="cname" required>
              
          </div>
          <div class="mb-3">
              <label for="cphone" class="form-label">Phone No.</label>
              <input type="number" class="form-control" id="cphone" name="cphone" onclick="phoneNumberCheck(document.form1.phone)" required>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
              <div class="form-text">We'll never share your password with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-success" name="submit1">Register Now</button><br><br>
        Already have an account?<a href="#userloginModal">Login </a>now
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>
</body>
</html>
