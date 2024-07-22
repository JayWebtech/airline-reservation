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

	 <div class="container-fluid h-100" id="dashboard">
            <div class="row h-100">
                <div class="col-md-2 shadow">
                    <div class="left-bar">
                        <div class="row">
                        	<div class="col-md-3">
                        		<h6><span class="fa fa-qrcode"></span></h6>
                        	</div>
                        	<div class="col-md-9">
                        		<h6>Generate QR Code<br> for Plate Number</h6>
                        	</div>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li><a href="dashboard.php"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                <li><a href="generate.php"><span class="bi bi-card-list"></span> Generate Plate Number</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Plate Number</a></li>
                                <li><a href="verify.php" class="active"><span class="fa fa-drivers-license-o"></span> Verify Plate Number</a></li>
                                <li><a href="index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard > Verify Certificate</h6>

                       <div class="row">
                            <div class="col-md-12 text-center shadow" style="background-color: #fff;padding: 20px;">
                                <span class="fa fa-qrcode verify" style="font-size: 200px;color: #000;text-align: center;"></span>
                                <br>
                                <a href=""><button class="btn btn-primary">Download QR Sanner</button></a>
                                <br>
                                <span class="bi bi-upc-scan" style="font-size: 150px;color: #000;text-align: center;"></span>
                                <br>
                                <h5 style="font-family: Bold;">Scan QR Code to Verify Certificate</h5>
                            </div>
                    </div>

                        


                    </div>
                   

                </div>

                </div>

                
            </div>
        </div>
 <script src="chart.js/Chart.bundle.min.js"></script>
 <script src="js/chartjs-init.js"></script>
</body>
</html>