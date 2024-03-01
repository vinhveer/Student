<?php
include('connect.php');
$sql = "DELETE FROM customer WHERE customer_id = 2";

mysqli_query($connect, $sql);
?>