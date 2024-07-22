<?php
include "include/server.php";

$id = $_GET['id'];

$sql = "SELECT * FROM flights WHERE id = '$id'";
$run = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($run);

$plane = $row['plane'];
$fdate = $row['fdate'];
$ftime = $row['ftime'];
$ffrom = $row['ffrom'];
$fto = $row['fto'];
$amount = $row['amount'];

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
</head>

<body style="background-color: #3c0403;">
    <div id="dismissible-container"></div>

    <section class="shadow-lg" style="margin: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"  style="background-color: #fff;padding: 20px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="d-flex flex-column">
                                <h4 style="margin-top: 0px;color: #3c0403;font-family: Bold;">Flight from <?php echo $ffrom; ?> to <?php echo $fto; ?>
                                </h4>
                                <span><strong>Plane Name:</strong> <?php echo $plane; ?></span><br>
                                <span><strong>Flight Date:</strong> <?php echo $fdate; ?></span><br>
                                <spanp><strong>Flight Time:</strong> <?php echo $ftime; ?></spanp>
                            </div>
                            <br>
                            <form id="formadd" name="form1" method="post">

                            </form>
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/dismissible.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            //SIGN UP

            $(document).on('submit', '#formadd', function (e) {
                e.preventDefault();
                $("#save").attr("disabled", "disabled");
                $("#spinner").show();
                $("#lock").hide();

                var from = $("#from").val();
                var to = $("#to").val();
                if (from != "" && to != "") {
                    $.ajax({
                        method: "POST",
                        url: "search-flight.php",
                        data: $(this).serialize(),
                        success: function (data) {

                            if (data !== "error") {
                                window.open('start-booking.php?id=' + data, '_self');
                            } else {
                                $("#save").removeAttr("disabled");
                                $("#success").show();
                                $("#spinner").hide();
                                $("#lock").show();
                                iziToast.warning({
                                    title: '',
                                    message: "No flight found for the selected destination",
                                    position: 'topCenter',
                                    animateInside: true,
                                });
                            }
                        }
                    });
                } else {

                    iziToast.info({
                        title: '',
                        message: 'All fields are required',
                        position: 'topLeft',
                        animateInside: true,
                    });

                    // const dismissible = new Dismissible(document.querySelector('#dismissible-container'));

                    // dismissible.info('All fields are required!');

                    $("#lock").show();
                    $("#save").removeAttr("disabled");
                    $("#spinner").hide();

                }
            });

        });

    </script>


    <script src="lib/wow/wow.min.js"></script>
    <script type="text/javascript">
        (function ($) {
            "use strict";
            new WOW().init();
        })(jQuery);
    </script>
</body>

</html>