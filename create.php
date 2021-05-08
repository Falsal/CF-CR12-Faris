<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>CR-12_Add destination</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>

    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add destination</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Destination</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="destination">
                            <option selected>Select destination</option>
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
                        <select class="form-select" aria-label="Default select example" name="image">
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
                        <td><input class='form-control' type="text" name= "description" placeholder="Enter description of destination" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price" placeholder="Enter price "/></td>
                    </tr>
                    <tr>
                        <th>About</th>
                        <td><input class='form-control' type="text" name="about" placeholder="Info about destination" value=""/></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><input class='form-control' type="date" name="date" placeholder="Enter date" value="<?php echo $date ?>"/></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="number" step='any' name="longitude" placeholder="enter longitude"/></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="number" step='any' name="latitude" placeholder="enter latitude"/></td>
                    </tr>
                    <tr class='container'>
                        <td><button class='btn btn-success' type="submit">Insert</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>