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
                                <li><a href="dashboard.php" class="active"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                <li><a href="generate.php"><span class="bi bi-card-list"></span> Add Flight</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Flights</a></li>
                                <li><a href="register.php"><span class="fa fa-drivers-license-o"></span> Register Plane</a></li>
                                <li><a href="view_aero.php"><span class="fa fa-drivers-license-o"></span> View Planes</a></li>
                                <li><a href="view-bookings.php" class=""><span class="fa fa-drivers-license-o"></span> View Bookings</a></li>
                                <li><a href="index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard</h6>
                    <br>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="box shadow">
                                
                                <span class="bi bi-card-list "></span>
                                <h5>No. of Planes</h5>
                                <h4>
                                    <?php 

                                    $sql = "SELECT COUNT(id) AS total FROM plate";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row = mysqli_fetch_assoc($run);

                                    $first = $row['total'];

                                    echo $first;

                                ?>         
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box shadow">
                                <span class="bi bi-check-square"></span>
                                <h5>Bookings</h5>
                                <h4>
                           <?php 

                                    $sql = "SELECT COUNT(id) AS total FROM bookings";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row2 = mysqli_fetch_assoc($run);
                                    $second = $row2['total'];

                                    echo $second;

                                ?>              
                                </h4>
                            </div>
                        </div>


                    </div>
                   

                </div>

                </div>

                
            </div>
        </div>


    <script src="chart.js/Chart.bundle.min.js"></script>

 <script type="text/javascript">
    (function($) {
    "use strict"

  

let draw = Chart.controllers.line.__super__.draw; //draw shadow

//dual line chart
if(jQuery('#lineChart_3').length > 0 ){
    const lineChart_3 = document.getElementById("lineChart_3").getContext('2d');
    //generate gradient
    const lineChart_3gradientStroke1 = lineChart_3.createLinearGradient(500, 0, 100, 0);
    lineChart_3gradientStroke1.addColorStop(0, "rgba(47, 76, 221, 1)");
    lineChart_3gradientStroke1.addColorStop(1, "rgba(47, 76, 221, 0.5)");

    const lineChart_3gradientStroke2 = lineChart_3.createLinearGradient(500, 0, 100, 0);
    lineChart_3gradientStroke2.addColorStop(0, "rgba(255, 92, 0, 1)");
    lineChart_3gradientStroke2.addColorStop(1, "rgba(255, 92, 0, 1)");

    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(0, 0, 0, 0)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments)
                nk.restore();
            }
        }
    });
        
    lineChart_3.height = 100;

    new Chart(lineChart_3, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
            ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [
                      <?php 

                        $sel = "SELECT * FROM verified WHERE status = 'true'";
                        $selrun = mysqli_query($dbcon,$sel);
                        while($rowtrue = mysqli_fetch_assoc($selrun)){
                       


                        ?>
                        <?php echo $rowtrue['id']; ?>,
                    

                <?php } ?>

                    ],
                    borderColor: lineChart_3gradientStroke1,
                    borderWidth: "2",
                    backgroundColor: 'transparent', 
                    pointBackgroundColor: 'rgba(47, 76, 221, 0.5)'
                }, {
                    label: "My First dataset",
                    data: [
                    <?php 

                        $sel = "SELECT * FROM verified WHERE status = 'false'";
                        $selrun = mysqli_query($dbcon,$sel);
                        while($rowtrue = mysqli_fetch_assoc($selrun)){
                       


                        ?>
                         <?php echo $rowtrue['id']; ?>,
                    

                <?php } ?>
                ],
                    borderColor: lineChart_3gradientStroke2,
                    borderWidth: "2",
                    backgroundColor: 'transparent', 
                    pointBackgroundColor: 'rgba(254, 176, 25, 1)'
                }
            ]
        },
        options: {
            legend: false, 
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true, 
                        max: 100, 
                        min: 0, 
                        stepSize: 20, 
                        padding: 10
                    }
                }],
                xAxes: [{ 
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });
    

}

    
if(jQuery('#doughnut_chart').length > 0 ){
    //doughut chart
    const doughnut_chart = document.getElementById("doughnut_chart").getContext('2d');
    // doughnut_chart.height = 100;
    new Chart(doughnut_chart, {
        type: 'doughnut',
        data: {
            weight: 5,  
            defaultFontFamily: 'Poppins',
            datasets: [{
                data: [45, 25, 20],
                borderWidth: 3, 
                borderColor: "rgba(255,255,255,1)",
                backgroundColor: [
                    "rgba(47, 76, 221, 1)",
                    "rgba(43, 193, 85, 1)",
                    "rgba(255, 109, 76, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(47, 76, 221, 0.9)",
                    "rgba(43, 193, 85, .9)",
                    "rgba(255, 109, 76, .9)"
                ]

            }],
            // labels: [
            //     "green",
            //     "green",
            //     "green",
            //     "green"
            // ]
        },
        options: {
            weight: 1,  
             cutoutPercentage: 70,
            responsive: true,
            maintainAspectRatio: false
        }
    });
    
}




})(jQuery);
 </script>

</body>
</html>