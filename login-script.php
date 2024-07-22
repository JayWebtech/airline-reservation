<?php
session_start();
include 'include/db_connection.php';



      $uname = $_POST['uname'];
      $pword = $_POST['pword'];

 
       $check_user = "SELECT * FROM backend WHERE uname = '$uname' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {

          echo "success";

        }else{
         echo "Invalid Username/Password!";
      } 

?>