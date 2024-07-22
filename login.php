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
	        <img src="img/logo.png">
	        <h4>Admin Login</h4>
	          <br>
	        <form id="formadd" name="form1" method="post">
	            <input type="text" name="uname" id="uname" placeholder="Enter Username" class="form-control">
	            <br>
	            <input type="password" name="pword" id="pword" placeholder="Enter Password" class="form-control">
	            <br>
	            <button class="btn btn-primary btn-block btn-lg" id="save"><span class="bi bi-lock" id="lock"></span> <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="width: 20px; height: 20px;display: none;"></span> Login</button>
	        </form>
    	</section>

<script src="js/dismissible.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

//SIGN UP

 $(document).on('submit','#formadd', function(e){
                e.preventDefault();
                $("#save").attr("disabled", "disabled");
                $("#spinner").show();
                $("#lock").hide();

                var uname = $("#uname").val();
                var pword = $("#pword").val();
                if (pword !="" && uname !="") {
                    $.ajax({
                        method: "POST",
                        url: "login-script.php",
                        data: $(this).serialize(),
                        success: function(data){
                          
                              if (data=="success") {
                                   window.open('dashboard.php','_self');
                              }else{
                                $("#save").removeAttr("disabled");
                                $("#success").show();
                                $("#spinner").hide();
                                $("#lock").show();
                                iziToast.error({
                                    title: '',
                                    message: data,
                                    position: 'topLeft',
                                    animateInside: true,
                                });
                              }
                            }
                        });
                }else{

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