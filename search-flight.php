<?php
session_start();
include 'include/db_connection.php';



      $from = $_POST['from'];
      $to = $_POST['to'];
      $fdate = $_POST['fdate'];
      $formattedDate = date('Y-m-d', strtotime($fdate));
 
       $check_user = "SELECT * FROM flights WHERE ffrom = '$from' AND fto='$to' AND fdate = '$formattedDate'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
            $row = mysqli_fetch_assoc($run);
          echo $row['id'];
        }else{
         echo "error";
      } 

?>