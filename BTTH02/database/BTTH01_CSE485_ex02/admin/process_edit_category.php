<?php
if(isset($_POST['sbmSave'])) {
    $id = $_POST['tid'];
    $name = $_POST['tenTloai'];
}

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_ex02", "root", "Kt162003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM theloai WHERE ten_tloai='$name' AND ma_tloai != '$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:user_edit.php?error=existed");
        }else{
            $sql_update = "UPDATE theloai set ten_tloai = '$name' WHERE ma_tloai='$id'";
            $stmt = $conn->prepare($sql_update);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location: category.php");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>