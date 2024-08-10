<?php

include "include/server.php";
$id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id = '$id'";
$run = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($run);

$fname = $row['fname'];
$sname = $row['sname'];
$fdate = $row['fdate'];
$ffrom = $row['ffrom'];
$tto = $row['tto'];
$amount = $row['amount'];
$seats = $row['seats'];
$otherguests = $row['otherguests'];
$status = $row['status'];
$gsm = $row['gsm'];
$email = $row['email'];
$id = $row['id'];
$booking_date = $row['booking_date'];

$status = $row['status'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Azman Airline</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dismissible.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/iziToast.min.js" type="text/javascript"></script>
    <style>
        /* styles.css */
        body {
            background-color: #f8f9fa;
        }

        .receipt {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .receipt h1 {
            color: #3c0403;
        }

        .receipt h5 {
            color: #3c0403;
        }

        .receipt p {
            margin-bottom: 0.5rem;
        }

        .receipt .btn-primary {
            background-color: #3c0403;
            border-color: #3c0403;
        }

        .receipt .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        h5 {
            font-family: Bold;
            color: #3c0403;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="receipt border p-4 rounded">
            <div class="text-center mb-4">
                <img class="wow fadeInDown" data-wow-delay="0.1s" src="img/logo.png" style="width: 20%;">
                <br><br>
                <h1 class="display-4">Booking Receipt</h1>
                <p class="lead">Thank you for booking with us!</p>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h5>Passenger Information</h5>
                    <p><strong>Name:</strong> <?php echo $fname; ?> <?php echo $sname; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Phone:</strong> <?php echo $gsm; ?></p>
                </div>
                <div class="col-md-6">
                    <h5>Booking Information</h5>
                    <p><strong>Booking ID:</strong> <?php echo $id; ?></p>
                    <p><strong>Date:</strong> <?php echo $booking_date; ?></p>
                </div>

                <div class="col-md-6">
                    <h5>Flight Details</h5>
                    <p><strong>From:</strong> <?php echo $ffrom; ?></p>
                    <p><strong>To:</strong> <?php echo $tto; ?></p>
                </div>
                <div class="col-md-6">
                    <h5>Other Guests</h5>
                    <p><?php echo $otherguests; ?></p>
                </div>
                <div class="col-md-6">
                    <h5>Booking Status</h5>
                    <?php
                    if ($status == "") {
                        ?>
                        <p style="color:red"><strong>Not Paid</strong></p>
                        <button class="btn btn-success" id="paynow" onclick="payWithPaystack(event)">Pay now</button>
                        <?php
                    } else {
                        ?>
                        <p style="color:green"><strong>Paid</strong></p>
                        <button class="btn btn-success" onclick="print()">Print</button>
                        <?php
                    }

                    ?>
                </div>
                <div class="col-md-6">
                    <h5>Payment Summary</h5>
                    <p><strong>Total Price: NGN</strong> <?php echo number_format($amount); ?></p>
                </div>
            </div>


        </div>
    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script type="text/javascript">

        function payWithPaystack(e) {

            e.preventDefault();
            var ref = Math.floor((Math.random() * 1000000000) + 1);

            let handler = PaystackPop.setup({

                key: 'pk_test_b9deab98fdba3dd1e5dfdc51fa4631ef28e12b30', // Replace with your public key

                email:"<?php echo $email; ?>",
                amount: <?php echo $amount; ?> * 100,



                onClose: function () {

                    alert('Window closed.');

                },

                callback: function (response) {
                    alert('Payment Made Successfully');
                    $.ajax({
                        method: "POST",
                        url: "update.php",
                        data: "id="+<?php echo $id; ?>,
                        success: function (data) {

                            if (data !== "error") {
                                window.location.reload();
                            }
                        }
                    });
                   

                }

            });

            handler.openIframe();

        }


    </script>
</body>

</html>