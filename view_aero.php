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
    <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="media/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" language="javascript" src="resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="resources/demo.js"></script>
   
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
    <script type="text/javascript" language="javascript" class="init">
    
    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>
</head>
<body>
<?php
    if ($_GET['msg']=="error") { ?>
        <script>
       
           iziToast.error({
              title: '',
              message: 'Unsuccessful, try again',
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
              message: 'Successful!',
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
                                <li><a href="register.php" ><span class="fa fa-drivers-license-o"></span> Register Plane</a></li>
                                <li><a href="view_aero.php" class="active"><span class="fa fa-drivers-license-o"></span> View Planes</a></li>
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
                            <div class="row">
                        <div class="col-md-12 shadow" style="background-color: #fff;padding: 20px;">


                            <h4 style="font-family: Bold;background: #3c0403;padding: 10px;color: #fff;">VIEW REGISTERED AEROPLANES</h4>
                            <br>
                            <div class="demo-html"></div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Seats</th>
                        <th>Availability</th>
                        <th>Action</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM planes ORDER BY id DESC";
                            $counter = 1;
                            //use for MySQLi-OOP
                            $query = mysqli_query($dbcon,$sql);
                            while($row = mysqli_fetch_assoc($query)){
                                echo 
                                "<tr>
                                    <td>".$counter++."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['seats']."</td>
                                    <td>".ucfirst($row['status'])."</td>
                                    <td><a href='#delete_".$row['id']."' data-toggle='modal'><button class='btn btn-danger btn-sm'><span class='fa fa-trash'></span> Delete</button></td>
                                    <td><a href='#edit_".$row['id']."' data-toggle='modal'><button class='btn btn-danger btn-sm'><span class='fa fa-edit'></span> Update Status</button></td>
                                </tr>";
                                include('edit_delete_modal_plane.php');
                            }
                        ?>
                    </tbody>
                </table>

                        </div>
                    	
                    </div>
                   
                           
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