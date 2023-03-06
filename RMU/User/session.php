<?php 
session_start();
if (!isset($_SESSION['User_id'])){
header('location:index.php');
}
$id_session=$_SESSION['User_id'];
?>