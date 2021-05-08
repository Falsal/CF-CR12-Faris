<?php
require_once 'components/db_connect.php';


if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM offers_table WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $locationName = $data['locationName'];
        $image = $data['image'];
        $description = $data['description'];
        $price = $data['price'];
        $long = $data['long'];
        $lat = $data['lat'];
        $about = $data['about'];
        $date = $data['date'];
    } else {
        header("location: error.php");
    }
 
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>details</title>

        <style>
            #map {
                height: 60%;
            }
           html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class='col-lg-6 col-md-3 col-sm-1 px-2 box-height mt-3 mb-3 mb-lg-0 al shadow-sm px-2 bg-body rounded'>

                <p class=' text-center px-2 h4'>The offer</p>
                <p class='text-center'> <?php echo $description ?></p>
            

                <div class='col text-center '>
                    <p class='text-center'> Date :  <?php echo $date ?> </p>
                </div>
                <div class='col text-center '>
                    <p class='text-center'> Price : € <?php echo $price ?> </p>
                </div>
            

            </div>
            <div class='col-lg-6 col-md-6 col-sm-1 box-height mb-2 mb-lg-0 al shadow-sm px-3 mt-3 bg-body rounded'>
                <!-- <div class='col text-center '> -->
                    <p class=' text-center px-2 h4'>About <?php echo $locationName ?></p>
                <!-- </div>  -->
                <div class='col text-center '>
                        <p class='text-center'> <?php echo $about ?> </p>
                </div> 
            
                <div class='col text-center '>
                    <p class='text-center'> Longitude : <?php echo $long ?> </p>
                </div>
                <div class='col text-center '>
                    <p class='text-center'> Latitude :  <?php echo $lat ?> </p>
                </div>
            </div>
            <div class="container d-flex justify-content-center mb-3">
                <a href='index.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
            </div>
        </div>
    </div>
    <!-- ===================== MAP SPACE & map script======================= -->
    <div class="container" id="map"></div>
        <script>
            let longitude=<?php echo $long ?>;
            let latitude=<?php echo $lat ?>;
            console.log(latitude );
            console.log(longitude );


            var map;
            function initMap() {
                var city = {
                    lat: latitude,
                    lng: longitude
                };
                map = new google.maps.Map(document.getElementById('map'), {
                    center: city,
                    zoom: 8
                });
                var pinpoint = new google.maps.Marker({
                    position: city,
                    map: map
                });
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>
</html>
