<?php
session_start();
include 'db_connection.php';

error_reporting(0);



if (isset($_POST['login'])) {
  
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];

  
       $check_user = "SELECT * FROM backend WHERE uname = '$uname' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
        $_SESSION['uname'] = $uname;
          echo "<script>window.open('backend/index.php?msg=success','_self')</script>";
        }else{
         echo "<script>window.open('index.php?msg=error','_self')</script>";
      } 
}
if (isset($_POST['register'])) {

  $name = $_POST['name'];
  $seats = $_POST['seats'];
  $status = $_POST['status'];

  $insert = "INSERT INTO planes (name, seats, status) VALUES ('$name','$seats','$status')";
  if (mysqli_query($dbcon,$insert)) {
    echo "<script>window.open('register.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('register.php?msg=error','_self')</script>";
  }
}
if (isset($_POST['del_plate'])) {
  $id = $_POST['id'];


  $sql =  "DELETE FROM planes WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view_aero.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view_aero.php?msg=error','_self')</script>";
  }
}
if (isset($_POST['edit_plane'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $seats = $_POST['seats'];
  $status = $_POST['status'];

  $sql =  "UPDATE planes SET name = '$name', seats = '$seats', status = '$status' WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view_aero.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view_aero.php?msg=error','_self')</script>";
  }
}
if (isset($_POST['generate'])) {

  $plane = $_POST['plane'];
  $fdate = $_POST['fdate'];
  $ftime = $_POST['ftime'];
  $ffrom = $_POST['ffrom'];
  $fto = $_POST['fto'];
  $amount = $_POST['amount'];

  $insert5 = "INSERT INTO flights (plane, fdate, ftime, ffrom, fto, amount) VALUES ('$plane','$fdate','$ftime','$ffrom','$fto','$amount')";
  if (mysqli_query($dbcon,$insert5)) {
    echo "<script>window.open('generate.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('generate.php?msg=error','_self')</script>";
  }
}
if (isset($_POST['del_flight'])) {
  $id = $_POST['id'];


  $sql =  "DELETE FROM flights WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view.php?msg=error','_self')</script>";
  }
}
if (isset($_POST['edit_flight'])) {
  $id = $_POST['id'];
  $fdate = $_POST['fdate'];
  $ftime = $_POST['ftime'];
  $amount = $_POST['amount'];

  $sql =  "UPDATE flights SET fdate = '$fdate', ftime = '$ftime', amount = '$amount' WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view.php?msg=error','_self')</script>";
  }
}



?>
