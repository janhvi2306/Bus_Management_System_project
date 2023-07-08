<?php
  
    $conn = mysqli_connect('localhost','root','','sbtbsphp');

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if(isset($_POST["submit"]))
    {
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $sql = "SELECT * FROM `admin` WHERE admin_name='$admin_name' AND admin_password='$admin_password';";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result))
        {
                session_start();
                $_SESSION["loggedIn"] = true;
                $_SESSION["admin_id"] = $row["admin_id"];

                header("location: ../../admin/dashboard.php");
                exit;
            }
            
            // Login failure
            $error = true;
            header("location: index.php?error=$error");
        }

?>