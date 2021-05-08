<?php 
require_once 'components/db_connect.php';
$sql = "SELECT * FROM offers_table";
$result = mysqli_query($connect ,$sql);
$tbody=''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<div class='col-lg-3 col-md-6 col-sm-1 px-1 box-height mb-2 mb-lg-0 al shadow-sm p-3 mb-5 bg-body rounded'>

                <p class=' text-center px-2 h4'>".$row['locationName']."</p>
                <p class='text-center'> ".$row['description']." </p>
            
                <img class='rounded mx-auto d-none d-md-flex ' src='images/".$row['image']."' alt=".$row['locationName'].">

                <div class='col text-center '>
                <p class='text-center'> Price : € ".$row['price']."</p>
                </div>
                
                
                <div class='col d-flex justify-content-center'>
                    <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                    <a href='details.php?id=" .$row['id']."'><button class='btn btn-outline-info btn-sm' type='button'>more info</button></a>
                    <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
                </div>
            </div>
        "; 
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
$connect->close();

?>
<!-- ======================= Serri Jokes API ============================== -->
<?php
    $result = file_get_contents("http://api.serri.codefactory.live/random/");
    $info = json_decode($result);
    $serriJoke = $info->joke;
    
?>

<!-- ======================= HTML starts ============================== -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR-12-Faris</title>
        <?php require_once 'components/boot.php'?>
        <style>
        img {
            width: 300px;
            height: 300px;
            object-fit: cover;
        }
        .header{
            background-color: rgb(214, 245, 235);
            color: green;
        }
   
    </style>
    </head>
    <body>

            <div class="container-fluid">
                <div class="row sticky-top header bg-no-overlay align-items-center text-center ">
                    <h1 class="col-12  d-grid gap-2 d-md-inline-block mr-2"> Mount Everest Travels </h1>
                    
                    <div class="col-12 d-grid gap-2 d-md-inline-block d-flex justify-content-center">
                        <p id="joke"><?= $serriJoke;?> </p>
                    </div>

                    <div class="col-12 d-grid gap-2 d-md-inline-block d-flex justify-content-center">
                        <a href= "create.php"><button class="btn btn-success " type="button">Add Destination</button></a>
                        <a href='index.php'><button type="button" class="btn btn-dark " >New Joke</button></a>
                    </div>
                </div>
                <div class="bg-white py-4 px-4 ">
                    <div class="row ">
                        <h3 class=" col-12 d-grid gap-2 d-md-inline-block pb-4 "></h3>
                    </div>
                <div class="row mb-4" id="location">
                <?= $tbody;?> <!-- Space for items locations -->
                </div>
            </div>
    </body>
</html>