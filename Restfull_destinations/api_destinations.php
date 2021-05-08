<?php
    require_once 'RESTful.php';

    $url = 'http://localhost/CF-CR12-Faris/Restfull_destinations/webservice.php?id=all';

    $result=curl_get($url);
    $desJ = json_decode($result, true); //it turns the json into an object
    $destins = $desJ['data'];

    $tbody ="";
    foreach ($destins as $data) {
        // var_dump ($data);
        // echo $data["locationName"];
        $tbody .="
            <div class='col-lg-3 col-md-6 col-sm-1 px-1 box-height mb-2 mb-lg-0 al shadow-sm p-3 mb-5 bg-body rounded'>

                <p class=' text-center px-2 h4'>".$data['locationName']."</p>
                <p class='text-center'> ".$data['description']." </p>
            
                <img class='rounded mx-auto d-none d-md-flex ' src='../images/".$data['image']."' alt=".$data['locationName'].">

                <div class='col text-center '>
                    <p class='text-center'> Price : € ".$data['price']."</p>
                </div>
                
                
 
            </div>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR12_bonus</title>
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

            <div class="container">
                <div class="row sticky-top header bg-no-overlay align-items-center text-center ">
                    <h1 class="col-12  d-grid gap-2 d-md-inline-block mr-2"> Mount Everest Travels </h1>


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