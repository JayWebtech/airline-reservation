<?php
session_start();
include 'include/db_connection.php';



      $id = $_POST['id'];
 
       $check_user = "UPDATE bookings SET status = 'PAID' WHERE id='$id'";
       $run = mysqli_query($dbcon,$check_user);
       if($run){
        return "sucess";
       }else{
        return "failed";
       }

?>