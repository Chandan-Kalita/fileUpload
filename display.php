
<?php
session_start();
include_once 'config.php';
$sql = " select * from users";
$query = mysqli_query($con, $sql);

$count = mysqli_num_rows($query);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .msg{
        position: absolute;
        top: 10px;
        right: 0;
        background-color: green;
        color: #fff;
    }
</style>
<style>
    td{
        font-size: 20px;
    }
    .fa{
        padding: 10px;
    }
</style>
<h1 class="text-center">List of users registered</h1>
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <td>Sl.No</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Address</td>
                <td>Image</td>
                <td>Identificational Mark</td>
                <td>Date registered</td>
                <td>Action</td>
            </tr>
            <?php 
            for($i=1; $i<=$count;$i++){
                $row = mysqli_fetch_assoc($query);
                ?> 
                <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><a href="<?php echo $row['image'] ?>" target="_blank">View Image</a></td>
                <td><?php echo $row['i_m'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>" title="Delete" ><i class="fa fa-trash text-dark"></i></a>
                <a href="update.php?id=<?php echo $row['id']; ?>" title="Update" ><i class="fa fa-pen text-dark"></i></a>
                </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
<div class="msg">
<?php 
    if(isset($_SESSION['delete'])){

        echo $_SESSION['delete'];
    }
    else{
    }
    if(isset($_SESSION['deleteerr'])){

        echo $_SESSION['deleteerr'];
    }
    else{
    }
    if(isset($_SESSION['up'])){

        echo $_SESSION['up'];
    }
    else{
    }
    if(isset($_SESSION['uperr'])){

        echo $_SESSION['uperr'];
    }
    else{
    }

    session_unset();
    session_destroy();
?>
</div>


