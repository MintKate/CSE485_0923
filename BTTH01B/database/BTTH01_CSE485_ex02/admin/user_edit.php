<?php
if(isset($_GET['id'])){
    $uid = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_ex02", "root", "Kt162003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE userid='$uid'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
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
            <h3>SỬA THÔNG TIN NGƯỜI DÙNG</h3>
            <div class="main-content vh-100 p-3">
                <?php
                    if(isset($_GET['error'])){
                        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    }
                ?>
                <form action="process_user_edit.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            UserID
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uid" id="" class="form-control bg-warning" value="<?= $user[0]; ?>" readonly>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Username
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user" id="" class="form-control " value="<?= $user[1]; ?>" >
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="mail" id="" class="form-control" value="<?= $user[2]; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                        </div>
                    </div>
                </form>
            </div>
           
        </div>
        

        <?php include '../layout/end.php'?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

</script>
</body>
</html>