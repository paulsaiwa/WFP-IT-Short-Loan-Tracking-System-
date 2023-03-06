<?php
  include('dbcon.php');
  $get_id=$_GET['id'];
  //$get=$_SESSION['status'];
  $query_user=mysqli_query($conn,"select * from user where User_id='$get_id'")or die(mysqli_error());
      $row=mysqli_fetch_array($query_user);
        $get=$_GET['status'];
          if ($_GET['status']='Activate') {
              $status=$_GET['status']='Deactivate';
                mysqli_query($conn,"update user set status='$status' where User_id='$get_id'")  or die(mysqli_error());
                    header('location:user_account.php'); 
          }      

   
?>