<?php
    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost;dbname=btth01_ex02", "root","Kt162003");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM theloai";
        //    $conn->query($sql);
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $kinds = $stmt->fetchAll();
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


</head>
<body>
    <div class="container-fluid">
        <?php include '../layout/nav-header.php' ?>

        <div class="main" style="margin-bottom: 50px; margin-top: 30px; text-align:center;">
            <h3>THÊM MỚI THỂ LOẠI</h3>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="enter d-flex justify-content-end">
                <a href="#" class="btn btn-success mx-sm-2"> Thêm </a>
                <a href="category.php" class="btn btn-warning"> Quay lại </a>
            </div>
           
        </div>
        

        <?php include '../layout/end.php'?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

</script>
</body>
</html>