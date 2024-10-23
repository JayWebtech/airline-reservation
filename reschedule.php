<?php

include "include/server.php";

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

    <section id="admin_dashboard" class="shadow-lg">
        <div style="display: flex; flex-direction: column; align-items: start;">
            <img src="img/logo.png" style="margin:1px;">
            <h4>Book a Flight</h4>
        </div>
        <br>
        <form id="formadd" name="form1" method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>From</label>
                    <select class="form-control" id="from" name="from" required>
                        <option value="">From</option>
                        <option value="Kano">Kano</option>
                        <option value="Abuja">Abuja</option>
                        <option value="Birnin Kebbi">Birnin Kebbi</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Maiduguri">Maiduguri</option>
                        <option value="Port-Harcourt">Port-Harcourt</option>
                        <option value="Owerri">Owerri</option>
                        <option value="Asaba">Asaba</option>
                        <option value="Benin">Benin</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>To</label>
                    <select class="form-control" id="to" name="to" required>
                        <option value="">To</option>
                        <option value="Kano">Kano</option>
                        <option value="Abuja">Abuja</option>
                        <option value="Birnin Kebbi">Birnin Kebbi</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Maiduguri">Maiduguri</option>
                        <option value="Port-Harcourt">Port-Harcourt</option>
                        <option value="Owerri">Owerri</option>
                        <option value="Asaba">Asaba</option>
                        <option value="Benin">Benin</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label>Flight Date</label>
                    <input type="date" class="form-control" id="fdate" name="fdate" required>
                </div>
                <div class="form-group col-md-12">
                    <label>Enter your Previous Booking ID</label>
                    <input type="text" class="form-control" name="bookingid" id="bookingid" required>
                </div>
            </div>

            <button class="btn btn-primary btn-block btn-lg" id="save"><span class="bi bi-search" id="lock"></span>
                <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                    style="width: 20px; height: 20px;display: none;"></span> Search Flight</button>
        </form>
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
                var id = $("#bookingid").val();
                if (from != "" && to != "") {
                    $.ajax({
                        method: "POST",
                        url: "search-flight.php",
                        data: $(this).serialize(),
                        success: function (data) {

                            if (data !== "error") {
                                window.open('start-bookingr.php?id=' + data + '&bookingid='+id, '_self');
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fromSelect = document.getElementById('from');
            const toSelect = document.getElementById('to');

            const fromOptions = [...fromSelect.options];
            const toOptions = [...toSelect.options];

            function updateOptions() {
                const fromValue = fromSelect.value;
                const toValue = toSelect.value;

                // Reset 'From' dropdown
                fromSelect.innerHTML = '';
                fromOptions.forEach(option => {
                    const newOption = new Option(option.text, option.value);
                    if (option.value === toValue) {
                        newOption.disabled = true;
                        newOption.classList.add('strikethrough');
                    }
                    fromSelect.add(newOption);
                });

                // Reset 'To' dropdown
                toSelect.innerHTML = '';
                toOptions.forEach(option => {
                    const newOption = new Option(option.text, option.value);
                    if (option.value === fromValue) {
                        newOption.disabled = true;
                        newOption.classList.add('strikethrough');
                    }
                    toSelect.add(newOption);
                });

                fromSelect.value = fromValue;
                toSelect.value = toValue;
            }

            fromSelect.addEventListener('change', updateOptions);
            toSelect.addEventListener('change', updateOptions);
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