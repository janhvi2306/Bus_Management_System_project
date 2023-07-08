<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        *{
            font-family:'Poppins',sans-serif;
        }

        
      h1{
        font-size: 45px;
    margin-left: 75px;
    margin-top: 5px;
    padding: 4px;
      }

      .lg{
          width:5%;
          height:5%;
          float:left;
          margin-top: 30px;
      }
      .btn{
        float: right;
    font-size: 20px;
    padding: 10px 15px 10px 15px;
    border-radius: 40px;
    background-color: red;
    margin-top: -88px;
    margin-right: 44px;
      }
    table{
        border: 3px solid black;
    }
    tr{
        font-size: 17px;
        font-weight: bold;
    }
    th{
        font-size:20px;
        color: blue;
    }
  
      </style>
</head>
<body>
    <div class="container"><br>
    <img src="newlogo.png" class="lg">
    <br><button class="btn" style="font-size:20px;float: right;margin-right: 150px;margin-top: 30px;background:green;cursor:pointer;border:none;">
        <a href="index.php" style="text-decoration:none;color:white;"><i class="fa fa-home">&nbsp;Home</i></a></button>
    <h1>Bus Schedule</h1>
    </div>
</body>
</html>

<?php

//fetch.php
$connect = mysqli_connect("localhost", "root", "", "sbtbsphp");
$output = '';
    $query = "
  SELECT * FROM routes ORDER BY route_id
 ";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive"><br>
   <table class="center" border="2" cellpadding="10" cellspacing="10">
    <thead>
    <th>Route Id</th>
     <th>Bus No.</th>
     <th>Route Cities</th>
     <th>Departure Date</th>
     <th>Departure Time</th>
     <th>Price</th>
    </thead>
 ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
   <tbody>
   <td style="color:red;">' .$row["route_id"] . '</td>
    <td>' . $row["bus_no"] . '</td>
    <td>' . $row["route_cities"] . '</td>
    <td>' . $row["route_dep_date"] . '</td>
	<td>' . $row["route_dep_time"] . '</td>
    <td>' . $row["route_step_cost"] . '</td>
   </tbody>
  ';
    }
    echo $output;
} else {
    echo 'Data Not Found';
}

?>
