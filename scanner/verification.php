<?php 
	include "../include/server.php";
	$code = $_GET['code'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verification</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../dist/css/iziToast.min.css">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
     <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dismissible.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/iziToast.min.js" type="text/javascript"></script>
    <style type="text/css">
    	#verification{
    		padding: 10px;
    		margin-top: 20px;
    	}
    	#verification .text-center img{
    		width: 100%;
    	}
    	#verification .vsuccess{
    		width: 50% !important;
    	}
    	#verification .info span{
    		font-family: Bold;
    		color: #3c0403;
    	}
    	button{
    		background-color: #3c0403 !important;
    		border:  none !important;
    		box-shadow: none !important;
    		width: 150px;
    		margin-bottom: 15px;
    	}

    </style>
</head>
<body>
	<h4 style="background-color: #3c0403;padding: 14px;color: #fff;">Verification Page</h4>
	<section id="verification">
		
	<?php 

		$sql = "SELECT * FROM plate WHERE code = '$code' LIMIT 1";
		$run = mysqli_query($dbcon,$sql);

		if (mysqli_num_rows($run)>0) {
			$row = mysqli_fetch_assoc($run);
			?>


			<div class="text-center">

				<img src="../img/plate.png">
				<h5 style="color: #000;font-family: Bold;margin-top: -150px"><?php echo $row['state']; ?></h5>
				<h6 style="color: #000;margin-top: -5px"><?php echo $row['slogan']; ?></h6>
				<h3 style="color: #3c0403;font-family: Bold;margin-top: 10px"><?php echo $row['pnumber']; ?></h3>
				<h5 style="color: #00c514;font-family: Bold;margin-top: -5px">✅VALID</h5>
			</div>
			<br><br>
			<div class="info">
				<p align="center">This Plate Number <span><?php echo $row['pnumber']; ?></span> is a valid Plate Number generated for <span><?php echo $row['name']; ?></span> on <span><?php $dd=strtotime("".$row['dateregister'].""); $fin = date("l jS \of F Y", $dd); echo $fin; ?></span></p>
			</div>

			<center><a href="process.php?code=<?php echo $code; ?>&status=true"><button class="btn btn-primary">Submit</button></a></center>

			<center><img class="vsuccess" src="../img/verify.svg"></center>


			<?php
		}else{

			?>

						<div class="text-center">

				<img src="../img/plate.png">
				<h3 style="color: red;font-family: Bold;margin-top: -120px">❌INVALID PLATE NUMBER</h3>
			</div>
			<br><br><br>
			<div class="info">
				<p align="center">This Plate Number is an invalid Plate Number.</p>
			</div>

			<center><a href="process.php?code=<?php echo $code; ?>&status=false"><button class="btn btn-primary">Submit</button></a></center>


			<?php

		}

	?>

</section>
</body>
</html>