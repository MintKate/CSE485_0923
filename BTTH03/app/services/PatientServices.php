<?php 
require_once APP_ROOT. '/app/models/Patient.php';
require_once APP_ROOT. '/app/libs/DBConnection.php';
class PatientService{
    private $conn;
    public function __construct(){
        $dbConnection = new DBConnection();
        $this->conn = $dbConnection->getConnection();    
    }
    public function getAllPatient(){
        $patient = [];
        if(!$this->conn){
            return false;
        }
        try{
            $sql = "SELECT * FROM benhnhan";
            $stmt=$this->conn->query($sql);
            while($row=$stmt->fetch()){
                $Patient = new BenhNhan($row['id'], $row['tenBenhNhan'],$row['ngayKham'],$row['trieuChung'],$row['idBacSi']);
                $patient[] = $Patient;
            }
            return $patient;
            
        }catch(PDOException $e){
            echo "Lỗi: " .$e->getMessage();
        }
    }


    public function getPatientById($id) {
        if (!$this->conn) {
            return false;
        }
    
        try {
            $sql = "SELECT * FROM benhnhan WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
    
            // Kiểm tra xem có dữ liệu trả về hay không
            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $Patient = new BenhNhan($row['id'], $row['tenBenhNhan'],$row['ngayKham'],$row['trieuChung'],$row['idBacSi']);
                return $Patient;
            } else {
                // Trả về giá trị null nếu không tìm thấy sinh viên
                return null;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    // Thêm bệnh nhân
    public function addNewPatient($tenBenhNhan) {
        if (!$this->conn) {
            return false;  
        }               
        try {
            $sql = "INSERT INTO benhnhan(tenBenhNhan) VALUES (:tenBenhNhan)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':tenBenhNhan', $tenBenhNhan);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage();
            return false; 
        }
    }
//     //Sửa dữ liệu
// public function editNewClass($id,$tenLop) {
//     if (!$this->conn) {
//         return false;
//     }

//     try {
//         $sql = "UPDATE lop SET tenLop = :tenLop WHERE id = :id";
//         $stmt = $this->conn->prepare($sql);
//         $stmt->bindParam(':tenLop', $tenLop);
//         $stmt->bindParam(':id', $id);
//         $stmt->execute();
//         return true;
//     } catch (PDOException $e) {
//         echo "Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage();
//         return false;
//     }
// }
// //Xoá dữ liệu
// public function remoteNewClass($id){
//     if(!$this->conn){
//         return false;
//     }

//     try{
//         $sql = "DELETE FROM lop WHERE id = :id";
//         $stmt = $this->conn->prepare($sql);
//         $stmt->bindParam(':id', $id);
//         $stmt->execute();
//         return true;
//     }catch(PDOException $e){
//         echo "Lỗi truy vấn cơ sở dữ liệu" . $e->getMessage();
//         return false;
//     }
// }
}
?>