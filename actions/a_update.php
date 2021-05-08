<?php
require_once '../components/db_connect.php';

if ($_POST) {    
    $id = $_POST['id'];
    $destination=$_POST['destination'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $longitude=$_POST['longitude'];
    $latitude=$_POST['latitude'];
    $about=$_POST['about'];
    $date=$_POST['date'];
 

    $sql = "UPDATE `offers_table` SET 
            `locationName` = '$destination', 
            `image` = '$image',
            `description` = '$description', 
            `price` = '$price', 
            `long` = '$longitude', 
            `lat` = '$latitude',
            `about` = '$about',
            `date` = '$date'
    WHERE id = {$id}";
   
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
    }
    $connect->close();
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
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>