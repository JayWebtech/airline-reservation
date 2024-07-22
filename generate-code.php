<?php 
if(isset($_POST) && !empty($_POST)) {
	include('phpqrcode/qrlib.php'); 
	$formData = $_POST['formData'];
	$codesDir = "codes/";	
	$codeFile = $formData.'.png';
	

	// generating QR code
	QRcode::png($formData, $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
	// display generated QR code
	echo $codesDir.$codeFile;
}

?>