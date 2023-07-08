<?php
   session_start();
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
                echo '<script="text/javascript">alert("User Login Successfull");</script>';
                echo '<script type=text/javascript">window.location="index1.php"</script>';
                exit;
            }
            
            // Login failure
            $error = true;
            header("location: index.php?error=$error");
        }

?>