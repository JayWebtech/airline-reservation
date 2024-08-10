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

$checkseat = "SELECT * FROM planes WHERE name = '$plane'";
$seatrun = mysqli_query($dbcon, $checkseat);
$seatfetch = mysqli_fetch_assoc($seatrun);
$seat = $seatfetch['seats'];

$bookedseatsArray = [];

$checkbooking = "SELECT * FROM bookings WHERE flight_id = '$id'";
$checkbookingrun = mysqli_query($dbcon, $checkbooking);
while ($row = mysqli_fetch_assoc($checkbookingrun)) {
    $seats = explode(',', $row['seats']); // Split the seat numbers in case they are stored as a comma-separated string
    $bookedseatsArray = array_merge($bookedseatsArray, $seats); // Merge into the main array
}

// Convert the array into a comma-separated string
$bookedseats = implode(',', $bookedseatsArray);

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
                <div class="col-md-12" style="background-color: #fff;padding: 20px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="d-flex flex-column">
                                <h4 style="margin-top: 0px;color: #3c0403;font-family: Bold;">Flight from
                                    <?php echo $ffrom; ?> to <?php echo $fto; ?>
                                </h4>
                                <span><strong>Plane Name:</strong> <?php echo $plane; ?></span><br>
                                <span><strong>Flight Date:</strong> <?php echo $fdate; ?></span><br>
                                <spanp><strong>Flight Time:</strong> <?php echo $ftime; ?></spanp>
                            </div>
                            <br>
                            <h3 style="font-family: Bold;">
                                Total Amount: <span style="font-family: Bold; color: #5cb85c">NGN</span><span
                                    id="totalAmount"
                                    style="font-family: Bold; color: #5cb85c"><?php echo number_format($amount); ?></span>
                            </h3>
                            <p id="numPeople">Paying for: 1 person</p>
                            <br>
                            <form id="formadd" name="form1" method="post">
                                <input type="text" id="selectedSeats" class="form-control" placeholder="Selected Seats"
                                    name="selectedSeats" value="" readonly>
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Firstname</label>
                                        <input type="text" class="form-control" name="main_fname"
                                            placeholder="Enter your firstname" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Surname</label>
                                        <input type="text" class="form-control" name="main_sname"
                                            placeholder="Enter your surname" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>State</label>
                                        <select name="state" class="form-control">
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nasarawa">Nasarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara </option>
                                            <option value="FCT">FCT </option>

                                        </select>
                                    </div>
                                   
                                </div>
                                <div id="bookingFormsContainer">
                                        <!-- Dynamic forms will be added here -->
                                    </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <h4 style="text-align: center;font-family: Bold; ">Select your Seat</h4>
                            <div class="plane" id="plane"></div>
                            <div class="legend">
                                <div class="legend-item">
                                    <div class="seat" style="cursor: not-allowed;"></div> <span>Available</span>
                                </div>
                                <div class="legend-item">
                                    <div class="seat occupied"></div> <span>Occupied</span>
                                </div>
                                <div class="legend-item">
                                    <div class="seat selected" style="cursor: not-allowed;"></div> <span>Selected</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/dismissible.js"></script>
  

<script>
    (function() {
        renderSeats();
    })();

    function renderSeats() {
        const plane = document.getElementById('plane');
        const selectedSeatsInput = document.getElementById('selectedSeats');
        const totalAmountElement = document.getElementById('totalAmount');
        const numPeopleElement = document.getElementById('numPeople');
        const bookingFormsContainer = document.getElementById('bookingFormsContainer');

        let selectedSeats = []; // Array to store selected seat numbers
        const baseAmount = <?php echo $amount; ?>; // Base price per seat

        plane.innerHTML = ''; // Clear previous seats

        const totalSeats = parseInt(<?php echo $seat; ?>);
        const occupiedSeats = "<?php echo $bookedseats; ?>".split(',').map(Number);

        if (!totalSeats || totalSeats <= 0) return;

        const seatsPerRow = 6; // Seats per row
        const rows = Math.ceil(totalSeats / seatsPerRow); // Calculate number of rows

        // Generate seats dynamically
        for (let i = 0; i < rows; i++) {
            const row = document.createElement('div');
            row.classList.add('row-seats');

            for (let j = 0; j < seatsPerRow; j++) {
                const seatNumber = i * seatsPerRow + j + 1;
                if (seatNumber > totalSeats) break; // Stop if we exceed the total number of seats

                const seat = document.createElement('div');
                seat.classList.add('seat');
                seat.dataset.seatNumber = seatNumber; // Store the seat number in a data attribute
                seat.innerText = seatNumber; // Display the seat number in the UI

                // Check if the seat is in the occupiedSeats array
                if (occupiedSeats.includes(seatNumber)) {
                    seat.classList.add('occupied');
                }

                row.appendChild(seat);
            }

            plane.appendChild(row);
        }

        // Add event listener to toggle selected class on click
        const seats = document.querySelectorAll('.seat:not(.occupied)');
        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                seat.classList.toggle('selected');
                const seatNumber = parseInt(seat.dataset.seatNumber);

                if (seat.classList.contains('selected')) {
                    selectedSeats.push(seatNumber);
                } else {
                    selectedSeats = selectedSeats.filter(num => num !== seatNumber);
                }

                // Ensure at least 1 person is selected, with a minimum total amount
                const numSeatsSelected = selectedSeats.length > 0 ? selectedSeats.length : 1;
                const totalAmount = baseAmount * numSeatsSelected;

                // Update the input field with selected seat numbers in the correct format
                selectedSeatsInput.value = selectedSeats.join(',');

                // Update the total amount and number of people
                totalAmountElement.innerText = new Intl.NumberFormat().format(totalAmount); // Format as NGN
                numPeopleElement.innerText = `Paying for: ${numSeatsSelected} ${numSeatsSelected > 1 ? 'people' : 'person'}`;

                // Generate booking forms based on selected seats
                generateBookingForms(selectedSeats.length);
            });
        });

        function generateBookingForms(numSeats) {
            bookingFormsContainer.innerHTML = ''; // Clear previous forms

            for (let i = 0; i < numSeats; i++) {
                const formDiv = document.createElement('div');
                formDiv.classList.add('row');
                
                formDiv.innerHTML = `
                    <div class="form-group col-md-6">
                        <label>Firstname</label>
                        <input type="text" class="form-control" name="fname[]" placeholder="Enter your firstname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="sname[]" placeholder="Enter your surname" required>
                        <input type="hidden" name="seat[]" value="${selectedSeats[i] || ''}">
                    </div>
                    
                `;

                bookingFormsContainer.appendChild(formDiv);
            }
        }
    }
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