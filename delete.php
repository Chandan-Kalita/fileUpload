<?php

session_start();
include_once 'config.php';
$id = $_GET['id'];
$dsql = " delete from users where id= $id "; 
$dquery = mysqli_query($con, $dsql);
if($dquery){
    $_SESSION['delete'] = "Data deleted Succesfully";
}else{
    $_SESSION['deleteerr'] = "Data doesn't deleted Succesfully";
}

header('location: display.php');




?>