<?php
include('dbcon.php');
include('session.php');

$logout_query=mysqli_query($conn,"select * from user where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$f=$row['fullname_user'];

$type=$row['User_Type'];

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f', 'Logout', NOW(),'$type')")or die(mysqli_error());
  
session_start();  

session_unset();   
                      
session_destroy();
  
header('location:../index.php');

?>