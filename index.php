<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <h3 class="text-center">เกียรติบัตรสภา</h3>
        <br>
        <form action="certificate.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="prefix" placeholder="คำนำหน้า " required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="ชื่อ " required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="นามสกุล " required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="role" placeholder="ตำแหน่ง " required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="num" placeholder="ลำดับตามตำแหน่ง " required>
            </div>
            <div class="text-center mx-auto">
                <button type="submit" class="btn btn-warning">รับเกียรติบัตร</button>
            </div>
        </form>
    </div>
</body>

</html>