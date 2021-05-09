<?php	
$con=mysqli_connect("localhost","root","","cr12_mount_everest_faris");
$response=array(); // empty array to fill with data from DB
if($con){
    $sql="select * from offers_table"; //write query
    $result=mysqli_query($con,$sql);// execute query
    if($result){                //if there is response do:
        header("content-type: JSON");
        $i=0;                  // initial index for response array 
        while($row=mysqli_fetch_assoc($result)){ //create assoc version
            $response[$i]['id']=$row["id"];   // fill response array
            $response[$i]['locationName']=$row["locationName"];
            $response[$i]['price']=$row["price"];
            $response[$i]['image']=$row["image"];
            $i++;                         //increment index
        };
        $tbody="";
        foreach($response as $data){
            $tbody .="
            <div class='m-2 card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                
                <p class='card-title'>".$data['locationName']."</p>
                
                <img src='../images/".$data['image']."' class='card-img-top img-thumbnail'>
                
                <div class='card-body'>
                    <p class='card-text'>Price: ".$data['price']."</p>
                </div>
            </div>
        ";
        }
        // echo json_encode($response,JSON_PRETTY_PRINT);
    }

}else{
    echo "DB is NOT connected"; 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>example API</title>
        <style>
            .container {
                background-color: #60CECE;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container justify-content-center ">

            <div class="row justify-content-center text-align-center">
                <h1 class="text-align-center w-100"> Simple Version API</h1>
            </div>
            <div class="row justify-content-center ">
                <?=$tbody;?>
            </div>

        </div>
    </body>
</html>