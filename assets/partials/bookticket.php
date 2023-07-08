<?php

if (isset($_POST["book"])) {
    $customer_id = $_POST["cid"];
    $route_id = $_POST["route_id"];
    $route_source = $_POST["sourceSearch"];
    $route_destination = $_POST["destinationSearch"];
    $route = $route_source . " &rarr; " . $route_destination;
    $booked_seat = $_POST["seatInput"];
    $amount = $_POST["bookAmount"];
    $jdate=$_POST["jdate"];
    // $dep_timing = $_POST["dep_timing"];
    $bus_no = get_from_table($conn, "routes", "route_id", $route_id, "bus_no");
    $dep_date = get_from_table($conn, "routes", "route_id", $route_id, "route_dep_date");
    $dep_time = get_from_table($conn, "routes", "route_id", $route_id, "route_dep_time");


    $booking_exists = exist_booking($conn, $customer_id, $route_id);
    $booking_added = false;

    if (!$booking_exists) {
        // Route is unique, proceed
        $sql = "INSERT INTO `bookings` (`customer_id`, `route_id`, `customer_route`, `booked_amount`,`Jdate`, `booked_seat`, `booking_created`) VALUES ('$customer_id', '$route_id','$route', '$amount','$jdate', '$booked_seat', current_timestamp());";

        $result = mysqli_query($conn, $sql);
        // Gives back the Auto Increment id
        $autoInc_id = mysqli_insert_id($conn);
        // If the id exists then, 
        if ($autoInc_id) {
            $key = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $code = "";
            for ($i = 0; $i < 5; ++$i)
                $code .= $key[rand(0, strlen($key) - 1)];

            // Generates the unique bookingid
            $booking_id = $code . $autoInc_id;

            $query = "UPDATE `bookings` SET `booking_id` = '$booking_id' WHERE `bookings`.`id` = $autoInc_id;";
            $queryResult = mysqli_query($conn, $query);

            if (!$queryResult)
                echo "Not Working";
        }

        if ($result)
            $booking_added = true;
    }

    if ($booking_added) {
        // Show success alert
        echo '<div class="my-0 alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!</strong> Booking Added<br> Please NOTE your pnr number <b>' .$booking_id.'
       </b> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        // Update the Seats table
        $bus_no = get_from_table($conn, "routes", "route_id", $route_id, "bus_no");
        $seats = get_from_table($conn, "seats", "bus_no", $bus_no, "seat_booked");
        if ($seats) {
            $seats .= "," . $booked_seat;
        } else
            $seats = $booked_seat;

        $updateSeatSql = "UPDATE `seats` SET `seat_booked` = '$seats' WHERE `seats`.`bus_no` = '$bus_no';";
        mysqli_query($conn, $updateSeatSql);
    } else {
        // Show error alert
        echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Booking already exists
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}

else{
    echo '<script type="text/javascript">window.location(_userlogin.php)</script>';
}

?>
<?php require '_getJSON.php'; ?>

<!-- Modal -->
<div class="modal fade" id="bookticketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookModalLabel">Book Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addBookingForm" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <!-- Passing Route JSON -->
                    <input type="hidden" id="routeJson" name="routeJson" value='<?php echo $routeJson; ?>'>
                    <!-- Passing Customer JSON -->
                    <input type="hidden" id="customerJson" name="customerJson" value='<?php echo $customerJson; ?>'>
                    <!-- Passing Seat JSON -->
                    <input type="hidden" id="seatJson" name="seatJson" value='<?php echo $seatJson; ?>'>
                    <div class="mb-3">
                        <label for="cid" class="form-label">Customer ID</label>
                        <!-- Search Functionality -->
                        <div class="searchQuery">
                            <input type="text" class="form-control searchInput" id="cid" name="cid"  required>
                            <div class="sugg">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="routeSearch" class="form-label">Route</label>
                        <!-- Search Functionality -->
                        <div class="searchQuery">
                            <input type="text" class="form-control searchInput" id="routeSearch" name="routeSearch" required>
                            <div class="sugg">
                            </div>
                        </div>
                    </div>
                    <!-- Send the route_id -->
                    <input type="hidden" name="route_id" id="route_id">
                    <!-- Send the departure timing too -->
                    <input type="hidden" name="dep_timing" id="dep_timing">

                    <div class="mb-3">
                        <label for="sourceSearch" class="form-label">Source</label>
                        <!-- Search Functionality -->
                        <div class="searchQuery">
                            <input type="text" class="form-control " id="sourceSearch" name="sourceSearch" readonly>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="destinationSearch" class="form-label">Destination</label>
                        <!-- Search Functionality -->
                        <div class="searchQuery">
                            <input type="text" class="form-control " id="destinationSearch" name="destinationSearch" readonly>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="journeyDate" class="form-label">Journey Date:</label>
                        <!-- Search Functionality -->
                        <input type="date" class="form-control" name="jdate">
                    </div>
                    <?php
                    require 'assets/styles/search_routes.php';
                    ?>
                    <div class="mb-3">
                        <table id="seatsDiagram">
                            <tr>
                                <td id="seat-1" data-name="1">1</td>
                                <td id="seat-2" data-name="2">2</td>
                                <td id="seat-3" data-name="3">3</td>
                                <td id="seat-4" data-name="4">4</td>
                                <td id="seat-5" data-name="5">5</td>
                                <td id="seat-6" data-name="6">6</td>
                                <td id="seat-7" data-name="7">7</td>
                                <td id="seat-8" data-name="8">8</td>
                                <td id="seat-9" data-name="9">9</td>
                                <td id="seat-10" data-name="10">10</td>
                            </tr>
                            <tr>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                            </tr>
                            <tr>
                                <td id="seat-11" data-name="11">11</td>
                               <td id="seat-12" data-name="12">&nbsp;12</td>
                                <td id="seat-131" data-name="13">&nbsp;13</td>
                                <td id="seat-14" data-name="14">&nbsp;14</td>
                               <td id="seat-15" data-name="15">&nbsp;15</td>
                               <td id="seat-16" data-name="16">&nbsp;16</td>
                               <td id="seat-17" data-name="17">&nbsp;17</td>
                               <td id="seat-18" data-name="18">&nbsp;18</td>
                               <td id="seat-19" data-name="19">&nbsp;19</td>
                               <td id="seat-20" data-name="20">&nbsp;20</td>
                       
                           
                        
                        </table>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-auto">
                            <label for="seatInput" class="col-form-label">Seat Number</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="seatInput" class="form-control" name="seatInput" readonly>
                        </div>
                        <div class="col-auto">
                            <span id="seatInfo" class="form-text">
                                Select from the above figure, Maximum 1 seat.
                            </span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="bookAmount" class="form-label">Total Amount</label>
                        <input type="text" class="form-control" id="bookAmount" name="bookAmount" readonly>
                    </div><br>
                    <button type="submit" class="btn btn-success" name="book">Book</button>
                </form>
            </div>
            <div class="modal-footer">
                <!-- Add anything here in the future -->
            </div>
        </div>
    </div>
    <script src="assets/scripts/admin_booking.js"></script>
  
</div>




<!-- if booking id and route id matches thn it will display booking already exist -->