<?php 
session_start();
if (!isset($_SESSION['User_id'])){
header('location:logout.php');
}
$id_session=$_SESSION['User_id'];
//$name=$_SESSION['fullname_user'];
?>