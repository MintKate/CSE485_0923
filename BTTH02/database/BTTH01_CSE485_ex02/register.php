<?php
if(isset($_POST['sbmLogin'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 != $pass2){
        $error = "Mật khẩu không khớp";
        header("Location: signup.php");
    }

    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost;dbname=btth01_ex02", "root","Kt162003");

        // Kiểm tra tài khoản đã tồn tại hay chưa
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location:signup.php?error=existed");
        } else {
            // Tạo trạng thái chưa kích hoạt
            $status = "inactive";
    
            // Tạo truy vấn SQL để chèn dữ liệu
            $insertStmt = $conn->prepare("INSERT INTO users (username, email, password, status) VALUES (:username, :email, :password, :status)");
            $insertStmt->bindParam(':username', $username);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':pass1', $password);
            $insertStmt->bindParam(':status', $status);
            $insertStmt->execute();
    
            header("Location:admin/index.php");
        }
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

}



/*
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Lấy thông tin từ biểu mẫu đăng ký
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra tài khoản đã tồn tại hay chưa
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Tài khoản đã tồn tại.";
    } else {
        // Tạo trạng thái chưa kích hoạt
        $status = "inactive";

        // Tạo truy vấn SQL để chèn dữ liệu
        $insertStmt = $conn->prepare("INSERT INTO users (username, email, password, status) VALUES (:username, :email, :password, :status)");
        $insertStmt->bindParam(':username', $username);
        $insertStmt->bindParam(':email', $email);
        $insertStmt->bindParam(':password', $password);
        $insertStmt->bindParam(':status', $status);
        $insertStmt->execute();

        echo "Đăng ký thành công. Tài khoản của bạn đang chờ kích hoạt.";
    }

} catch (PDOException $e) {
    echo "Kết nối không thành công: " . $e->getMessage();
}

$conn = null;
?>

*/