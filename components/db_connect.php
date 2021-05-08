<?php
// defining connection variables
$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="cr12_mount_everest_faris";

// creating connection
$connect=new mysqli($hostname,$username,$password,$dbname);

// testing connection 

if($connect -> connect_error)
{
    die("Connection failed ".$connect -> connect_error);
}else{
    // echo "Connected successfully";
}

?>