<?php
include('dbcon.php');
include('session.php');

$id=$_GET['returned_id'];
$logout_query=mysqli_query($conn,"select * from user where User_id=$id_session")or die(mysqli_error());
$user_row=mysqli_fetch_array($logout_query);
$user_name=$user_row['User_Type'];



$result=mysqli_query($conn,"select * from returned_by where returned_id='$id'")or die(mysqli_error);
$row=mysqli_fetch_array($result);



mysqli_query($conn,"delete from returned_by where returned_id='$id'");

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Item returned information', NOW(),'$user_name')")or die(mysqli_error());

header('location:returned_item_details.php');
?>