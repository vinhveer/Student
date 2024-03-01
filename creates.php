<?php
include("connect.php");

$store_id = 2;
$first_name = "Ngạn";
$last_name = "Trần Đức";
$email = "tranducngan@gmail.com";
$address_id = 5;
$active = 1;
$create_date = "2024-01-12";

$sql = "UPDATE customer 
SET 
    store_id = $store_id, 
    first_name = '$first_name', 
    last_name = '$last_name', 
    email = '$email', 
    address_id = $address_id, 
    active = $active, 
    create_date = '$create_date'
WHERE 
    customer_id = 1";

mysqli_query($connect, $sql);
?>