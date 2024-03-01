<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Danh sách sinh viên</title>
</head>

<body data-bs-theme="dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h3>Danh sách sinh viên</h3>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary float-end" href="create.php">Thêm sinh viên mới</a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Lớp</th>
                <th>Ngày sinh</th>
                <th></th>
            </thead>
            <tbody>
                <td>1</td>
                <td>Nguyễn Quang Vinh</td>
                <td>64.CNTT-3</td>
                <td>30/07/2004</td>
                <td class="float-end">
                    <a href="info.php" class="btn btn-success">Thông tin chi tiết</a>
                    <a class="btn btn-secondary" href="update.php">Sửa đổi thông tin</a>
                    <button class="btn btn-danger">Xóa thông tin</button>
                </td>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>