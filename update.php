<?php
require_once 'components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `offers_table` WHERE id = {$id}";
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
<html>
    <head>
        <title>Edit Destination</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='images/<?php echo 
            $image ?>' alt="<?php echo $locationName ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Destination</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="destination">
                            <option selected><?php echo $locationName ?></option>
                            <option value="Vienna">Vienna</option>
                            <option value="Venice">Venice</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Paris">Paris</option>
                            <option value="Shanghai">Shanghai</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Rio di Jeneiro">Rio de Jeneiro</option>
                            <option value="Dubai">Dubai</option>
                        </select>
                        </td>
                    </tr>  
                    <tr>
                        <th>Image</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="image" >
                        <option value="<?php echo $image ?>"><?php echo $locationName ?></option>
                            <option value="img_1.jpg">Paris</option>
                            <option value="img_2.jpg">Vienna</option>
                            <option value="img_3.jpg">Venice</option>
                            <option value="img_4.jpg">Tokyo</option>
                            <option value="img_5.jpg">Shanghai</option>
                            <option value="img_6.jpg">Los Angeles</option>
                            <option value="img_7.jpg">Rio De Jeneiro</option>
                            <option value="img_8.jpg">Dubai</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Enter description of destination" value="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price" placeholder="Enter price" value="<?php echo $price ?>"/></td>
                    </tr>
                    <tr>
                        <th>About</th>
                        <td><input class='form-control' type="text" name="about" placeholder="Info about destination" value="<?php echo $about ?>"/></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><input class='form-control' type="date" name="date" placeholder="Enter date" value="<?php echo $date ?>"/></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="number" step='any' name="longitude" placeholder="enter longitude" value="<?php echo $long ?>"/></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="number" step='any' name="latitude" placeholder="enter latitude" value="<?php echo $lat ?>"/></td>
                    </tr>
         
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                       
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>