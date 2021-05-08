<?php
require_once '../components/db_connect.php';


if ($_POST) {   
    $destination=$_POST['destination'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $longitude=$_POST['longitude'];
    $latitude=$_POST['latitude'];
    $about=$_POST['about'];
    $date=$_POST['date'];

    
   
    $sql = "INSERT INTO `offers_table` (`id`, `locationName`, `image`, `description`, `price`, `long`, `lat`,`about`,`date`) VALUES (NULL,'$destination','$image','$description','$price','$longitude','$latitude','$about','$date')";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $destination</td>
            <td> $image </td>
            <td> $description </td>
            <td> $price </td>
            <td> $longitude </td>
            <td> $latitude </td>
            <td> $about </td>
            <td> $date </td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request</h1>
                <h2>Report</h2>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>