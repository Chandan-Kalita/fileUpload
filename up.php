<?php
session_start();
include_once 'config.php';
    
    $id = $_GET['id'];
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $i_m = mysqli_real_escape_string($con,$_POST['i_m']);
$usql = "update users set name = '$name',gender = '$gender',address = '$address',i_m = '$i_m' where id= $id";
$uquery = mysqli_query($con, $usql);
if($uquery){
    $_SESSION['up'] = "Updated Sucessfully";
}else{
    $_SESSION['uperr'] = "Can't update Sucessfully";
}
header('location: display.php');


?>