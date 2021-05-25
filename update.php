<?php

include_once 'config.php';
$id = $_GET['id'];
$ssql = " select * from users where id = $id";
$squery = mysqli_query($con, $ssql);
$data = mysqli_fetch_assoc($squery);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    body {
        background-color: #666 !important;  
    }

    /* .container {
        max-width: 1000px;
        margin: auto;
        background-color: #fff;
        min-height: 600px;
    } */
    label{
        color: #fff;
    }
    h1 {
        text-align: center;
        color: #fff;
        padding-top: 20px;
    }
    p, a{
        color: #fff !important;
    }
    .msg{
        position: absolute;
        top: 10px;
        right: 0;
        background-color: green;
        color: #fff;
    }
</style>
<h1 class="text-center">Update your details here</h1>
<div class="container">
<form  class="col-lg-6 p-4 m-auto bg-light" method="POST" action="up.php?id=<?php echo $id;?>" enctype="multipart/form-data">
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="id" value="<?php echo $data['id'] ?>" placeholder="Name" disabled>
        </div>
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $data['name'] ?>"  required>
        </div>
        <!-- Gender  -->
        <select class="form-select mb-4" name="gender" id="gender" aria-label="Default select example">
            
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <!-- Gender  -->
        <!-- Address -->
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="address" value="<?php echo $data['address'] ?>"  required>
        </div>
        <!-- Address -->
        <!-- Photo -->
        <div class="input-group mb-4">
            <img src="<?php echo $data['image'] ?>" height="132px" width="113px" alt="">
        </div>
        <!-- Photo -->
        <!-- Identificational Mark -->
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="i_m" value="<?php echo $data['i_m'] ?>"  required>

        </div>
        <!-- Identificational Mark -->

        <input type="submit" class="btn btn-primary" name="update" value="UPDATE">
    </form>
</div>

