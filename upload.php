<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Upload Ảnh</h2>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="file_upload">Chọn ảnh:</label>
        <input type="file" name="file_upload" id="file_upload">
        <br>
        <input type="submit" value="Upload">
    </form>

</body>

</html>