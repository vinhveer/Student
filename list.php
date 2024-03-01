<?php
include("connect.php");
$sql = "SELECT * FROM customer";

$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($result))
{
    echo "ID: " . $row["customer_id"] . "<br>";
    echo "Tên: " . $row["first_name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "<br>";
}
?>