<?php
session_start();
?>

<style>
    body {
        background-color: #666 !important;
    }

    label {
        color: #fff;
    }

    h1 {
        text-align: center;
        color: #fff;
        padding-top: 20px;
    }

    p,
    a {
        color: #fff !important;
    }

    .msg {
        position: absolute;
        top: 10px;
        right: 0;
        background-color: green;
        color: #fff;
    }
</style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<div class="flex-container">
    <h1>Registration Form</h1>


    <form class="col-lg-6 p-4 m-auto bg-light" method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <!-- Gender  -->
        <select class="form-select mb-4" name="gender" id="gender" aria-label="Default select example">
            <option selected value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <!-- Gender  -->
        <!-- Address -->
        <div class="mb-4">
            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="Full Address" rows="2"></textarea>
        </div>
        <!-- Address -->
        <!-- Photo -->
        <div class="mb-4">
        <p class="text-dark m-1">Upload a passport size photo</p>
            <input type="file" placeholder="Photo" class="form-control" id="file" name="image" aria-label="Upload" required>
        </div>
        <!-- Photo -->
        <!-- Identificational Mark -->
        <div class="mb-4">
            
            <textarea placeholder="Identificational Mark" class="form-control" name="i_m" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>
        <!-- Identificational Mark -->
        <!-- Captcha -->
        <div class="mb-1">
            <img src="captcha.php" width="130px" height="55px" alt="">
        </div>
        <div class="mb-4">
            <input type="text" class="form-control" id="name" name="captcha" placeholder="Enter the captcha code" required>
        </div>
        <!-- Captcha -->

        <input type="submit" class="btn w-100 btn-primary" name="submit" value="SUBMIT">
    </form>
</div>
    <p><a href="display.php">Click Here</a> to see all applicants</p>

<div class="msg">
    <?php
    if (isset($_SESSION['msg'])) {

        echo $_SESSION['msg'];
    } else {}

    if (isset($_SESSION['err'])) {

        echo $_SESSION['err'];
    } else {}

    session_unset();
    session_destroy();

    ?>
</div>