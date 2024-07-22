<?php 


include "../include/server.php";
	$code = $_GET['code'];
	$status = $_GET['status'];


	$sql = "INSERT INTO verified (code, status) VALUES ('$code','$status')";
		$run = mysqli_query($dbcon,$sql);

		header('Location: scanner.php')


?>