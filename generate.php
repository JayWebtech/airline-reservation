<?php 

include "include/server.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dismissible.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/iziToast.min.js" type="text/javascript"></script>
     <style>
        html,body{
            box-sizing: border-box;
            height: 100%;
            background-color: #f2f7ff;
        }
        body::-webkit-scrollbar{
		  width: 7px;
		}
		body::-webkit-scrollbar-track{
		  border-radius: 10px;
		  box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		}
		body::-webkit-scrollbar-thumb{
		  background-color: #3c0403;
		  border-radius: 10px
		}
        label{
            font-weight: 600;
        }

    </style>
</head>
<body>
        <?php
    if ($_GET['msg']=="error") { ?>
        <script>
       
           iziToast.error({
              title: '',
              message: 'Error try again',
              position: 'topRight',
               animateInside: true,
          });
       
    </script> 
    <?php }
    elseif ($_GET['msg']=="success") {
      ?>
         <script>
       
           iziToast.success({
              title: '',
              message: 'Flight added Successfully!',
              position: 'topRight',
               animateInside: true,
          });
       
    </script> 
   
      <?php
    }


    else{

    }
?>
    

	 <div class="container-fluid h-100" id="dashboard">
            <div class="row h-100">
            <div class="col-md-2 shadow">
                    <div class="left-bar">
                        <div class="row">
                            <div class="col-md-3">
                                <h6><span class="fa fa-plane"></span></h6>
                            </div>
                            <div class="col-md-9">
                                <h6>AZMAN AIRLINE<br>ADMIN DASHBOARD</h6>
                            </div>
                        </div>
                        <div class="nav-list">
                            <ul>
                            <li><a href="dashboard.php" ><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                <li><a href="generate.php" class="active"><span class="bi bi-card-list"></span> Add Flight</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Flights</a></li>
                                <li><a href="register.php"><span class="fa fa-drivers-license-o"></span> Register Plane</a></li>
                                <li><a href="view_aero.php"><span class="fa fa-drivers-license-o"></span> View Planes</a></li>
                                <li><a href="index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       
                  
                    <div class="row">
                        <div class="col-md-12 shadow" style="background-color: #fff;padding: 40px;">
                            <center><img src="img/logo.png" style="width: 25%;margin-bottom: 50px"></center>
                            <h3 style="font-family: Bold;text-align: center;">ADD FLIGHT</h3>
                            <br>
                
                                    <form action="generate.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Select Aeroplane</label>
                                                <select name="plane" id="" class="form-control" register>
                                                    <?php 
                                                        $sql = "SELECT * FROM planes WHERE status = 'true' ORDER BY id DESC";
                                                        $run = mysqli_query($dbcon, $sql);
                                                        while($row = mysqli_fetch_assoc($run)){
                                                            ?>
                                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label>Flight Date</label>
                                                <input type="date" class="form-control" id="fdate" name="fdate" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Flight Time</label>
                                                <input type="time" class="form-control" name="ftime" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>From</label>
                                                <select  class="form-control" id="from" name="ffrom" required>
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
                                                <select  class="form-control" id="to" name="fto" required>
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
                                                <label>Flight Amount</label>
                                                <input type="number" class="form-control" name="amount" required>
                                            </div>

                                                        <br><br>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="generate">Register Flight</button>





                                           </form>
                           
                    </div>


                    

                    </div>
                   

                </div>

                </div>

                
            </div>
            <script>
        // Set the min attribute to today's date
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('fdate').setAttribute('min', today);
        });
    </script>
            <script>
    document.addEventListener('DOMContentLoaded', function() {
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


<script type="text/javascript" src="js/canvas.js"></script>
 <script src="chart.js/Chart.bundle.min.js"></script>
 <script src="js/chartjs-init.js"></script>
</body>
</html>