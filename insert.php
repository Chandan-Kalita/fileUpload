<?php
session_start();
include_once 'config.php';
$name_array = explode('.', $_FILES['image']['name']);
$count = sizeof($name_array);
$rand = rand(1111111111, 9999999999);

if (!in_array($name_array[$count - 1], ['jpg', 'jpeg', 'png'])) {
    $_SESSION['err'] = "Invalid image type! Cann't register";
} else {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $i_m = mysqli_real_escape_string($con, $_POST['i_m']);
    $captcha = mysqli_real_escape_string($con, $_POST['captcha']);
    if ($captcha == $_SESSION['CODE']) {
        $dt = date("Y-m-d H:i:s");

        $time_of_upload = date("Y-m-d-H-i-s");
        move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $name . $rand . "-time-" . $time_of_upload . $_FILES['image']['name']);
        $img_path =  "upload/" . $name . $rand . "-time-" . $time_of_upload . $_FILES['image']['name'];


        $sql = "insert into users (name, gender, address, image, i_m, date) values ('$name','$gender','$address','$img_path','$i_m','$dt')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            $_SESSION['msg'] = 'Data Succesfully inserted';
        } else {
            $_SESSION['msg'] = 'Somthing went wrong! data can not be inserted';
        }
    }else{
        $_SESSION['msg'] = "Captcha doesn't matched";
    }
}


header('location: index.php');
