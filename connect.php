<?php
$username = "root";
$password = "@Cancot123";
$host = "localhost";
$port = "3306";
$database_name = "sakila";

$connect = new mysqli($host, $username, $password, $database_name, $port);

if ($connect -> connect_error)
    echo "Không thể kết nối";
else
    echo "Kết nối thành công";
?>