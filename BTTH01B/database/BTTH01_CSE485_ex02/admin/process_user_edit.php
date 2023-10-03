<?php
if(isset($_POST['sbmSave'])) {
    $id = $_POST['uid'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
}

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_ex02", "root", "Kt162003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE (username = '$user' OR email='$mail') AND userid != '$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:user_edit.php?error=existed");
        }else{
            $sql_update = "UPDATE users set username = '$user', email = '$mail' WHERE userid='$id'";
            $stmt = $conn->prepare($sql_update);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:user_management.php?success=updated");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>