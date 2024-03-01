<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $dir = "image/";
    $tgfile = $dir . basename($_FILES["file_upload"]["name"]);

    if (file_exists($tgfile)) {
        echo "Ảnh của bạn không được tải lên.";
    } else if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $tgfile)) {
        echo "Ảnh đã được tải lên thành công.";
    } else {
        echo "Có lỗi khi tải ảnh lên.";
    }
}
?>
