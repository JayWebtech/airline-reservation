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
              message: 'Plane Added Successfully!',
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
                                <li><a href="generate.php" ><span class="bi bi-card-list"></span> Add Flight</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Flights</a></li>
                                <li><a href="register.php" class="active"><span class="fa fa-drivers-license-o"></span> Register Plane</a></li>
                                <li><a href="view_aero.php"><span class="fa fa-drivers-license-o"></span> View Planes</a></li>
                                <li><a href="view-bookings.php" class=""><span class="fa fa-drivers-license-o"></span> View Bookings</a></li>
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
                            <h3 style="font-family: Bold;text-align: center;">REGISTER NEW AEROPLANE</h3>
                            <br>
                
                                    <form action="register.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Aeroplane Name</label>
                                                <input type="text" id="name" name="name" class="form-control name" required>
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label>Number of Seats</label>
                                                <input type="number" id="gsm" class="form-control" name="seats" required>
                                            </div>

                                            <div class="form-group col-md-12">
                                                  <label>Availability</label>
                                                 <select id="status" name="status" class="form-control">
                                                       <option value="">Select Status</option>
                                                       <option value="true">Available</option>
                                                      <option value="false">Not Available</option>
                                                      </select>
                                            </div>

                                    
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">Register Plane</button>





                                           </form>
                           
                    </div>


                    

                    </div>
                   

                </div>

                </div>

                
            </div>
<script type="text/javascript" src="js/canvas.js"></script>
 <script src="chart.js/Chart.bundle.min.js"></script>
 <script src="js/chartjs-init.js"></script>
</body>
</html>