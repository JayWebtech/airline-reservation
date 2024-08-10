<?php
session_start();
include 'include/db_connection.php';



$totalprice = $_POST['totalprice'];
$selectedSeats = $_POST['selectedSeats'];
$main_fname = $_POST['main_fname'];
$main_sname = $_POST['main_sname'];
$state = $_POST['state'];
$ffrom = $_POST['ffrom'];
$fto = $_POST['fto'];
$additional_fnames = isset($_POST['additional_fname']) ? $_POST['additional_fname'] : [];
$additional_snames = isset($_POST['additional_sname']) ? $_POST['additional_sname'] : [];
$additional_seats = isset($_POST['additional_seat']) ? $_POST['additional_seat'] : [];
$id = $_POST['id'];
$fdate = $_POST['fdate'];
$additionalBookings = [];
$email = $_POST['email'];
$gsm = $_POST['gsm'];

// Process additional booker’s names only if they are not empty
if (!empty($additional_fnames)) {
    foreach ($additional_fnames as $index => $fname) {
        $sname = $additional_snames[$index];
        $additionalBookings[] = "$fname $sname";
    }
}

// Format the final booking string
$bookingString = implode(', ', $additionalBookings);

$check_user = "INSERT INTO bookings (fname, sname, state, ffrom, tto, fdate, seats, flight_id, otherguests, amount, email, gsm) VALUES ('$main_fname','$main_sname','$state','$ffrom','$fto','$fdate','$selectedSeats','$id','$bookingString','$totalprice', '$email', '$gsm')";
$run = mysqli_query($dbcon, $check_user);
if($run){
    echo mysqli_insert_id($dbcon);
}else{
    echo "error";
}

?>