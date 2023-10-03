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

        <div class="main" >
            <div class="table-form" style="margin-bottom: 30px; margin-top: 30px;">
                <h3 class=" text-center text-uppercase">Thể loại</h3>
                <a href="add_category.php" class="btn btn-success"> Thêm mới </a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($kinds as $kind){
                        ?>
                            <tr>
                                <th scope="row">
                                    <?= $kind[0]; ?>
                                </th>
                                <td>
                                    <?= $kind[1]; ?>
                                </td>
                                <td>
                                    <a href="edit_category.php?id=<?= $kind[0]; ?>">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#<?= $kind[0]; ?>">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?= $kind[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE Kind Of Music</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure detele the kind of music have id: <?= $kind[0]; ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="delete_category.php?id=<?= $kind[0]; ?>" class="btn btn-success">OK</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
            <?php include '../layout/end.php'?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

</script>
</body>
</html>