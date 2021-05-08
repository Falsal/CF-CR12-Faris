<?php

// Require conn.php (DB connection) file
require_once('../components/db_connect.php');


// This query will check do we have car_id in the table car
// for the provided $id
$sql = "SELECT * FROM `offers_table`";

// Perform a query on the DB
$result = mysqli_query($connect, $sql);

// Fetch the query into $row
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the DB connection
mysqli_close($connect);