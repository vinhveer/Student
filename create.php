<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Thêm sinh viên mới</title>
</head>

<body data-bs-theme="dark">
    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <a href="index.php" alt="Trở về trang chủ">
                        <h3><i class="bi bi-arrow-left"></i></h3>
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary float-end">Lưu thông tin</button>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <h3>Thêm sinh viên mới</h3>
        </div>
        <div class="container mt-4">
            <div class="mb-3">
                <label for="file_img" class="form-label">Tải lên ảnh chân dung</label>
                <input type="file" class="form-control" id="file_img" name="file_img">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Lớp</label>
                <input type="text" class="form-control" id="class" name="class">
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Giới tính</label>
                <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                    <option value="3">Khác</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>