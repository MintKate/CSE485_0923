<?php
    require_once __DIR__ . '/../config/config.php';
    require_once APP_ROOT . '/app/libs/DBConnection.php';
    require_once APP_ROOT . '/app/services/PatientServices.php';
    class PatientController{
        private $patientService;
        public function __construct(){
            $this->patientService = new PatientService();
        }
        public function index(){
            $patient= $this->patientService->getAllPatient();
            require_once APP_ROOT. '/app/views/Patient/index.php';
        }
    //     public function insertForm() {
    //         require_once(APP_ROOT."/app/views/Patient/add.php");
    //     }
    //     public function insert() {
    //         // Kiểm tra xem đã gửi biểu mẫu thêm sinh viên chưa
    //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //             // Lấy thông tin từ biểu mẫu
    //             $tenLop = $_POST['tenLop'];
                
    
    //             // Gọi dịch vụ để thêm sinh viên 
    //             $classService = new ClassService();
    //             $result = $classService->addNewClass($tenLop);
    
                
    //             if ($result) {
                   
    //               header('Location:' . DOMAIN . 'public/index.php?action=index&controller=class');
    //                 //echo "them thanh cong";
    //             } else {
    //                 // Xử lý lỗi hoặc hiển thị thông báo lỗi
    //                 echo 'Thêm thất bại';
    //             }
    //         } else {
               
    //             //echo 'Không tìm thấy thông tin';
    //             // include APP_ROOT.'/app/views/patients/add.php';
    //         }
    // }
    // public function edit() {
    //     // Kiểm tra xem đã gửi biểu mẫu sửa sinh viên chưa
    //         if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
    //             // Lấy thông tin từ biểu mẫu
    //             $id= $_GET['id'];
    //             $tenLop = $_POST['tenLop'];
        
    //             // Gọi dịch vụ để sửa sinh viên     
    //             $classService= new ClassService();
    //             $result = $classService->editNewClass($id,$tenLop);
        
    //             // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
    //             if ($result) {
    //                 // Sửa sinh viên thành công
    //                   //header('Location: ../../public/index.php');  
    //                 //echo "Sửa thành công";
    //                 header('Location:' . DOMAIN . 'public/index.php?action=index&controller=class');
    //             } else {
    //                 // Xử lý lỗi hoặc hiển thị thông báo lỗi
    //                 echo 'Sửa thất bại';
    //             }
    //         } else {
               
    //             //echo 'Không tìm thấy thông tin';
    //             // include APP_ROOT.'/app/views/patients/edit.php';
    //         }
    //     }
    //     public function delete() {
    //         // Kiểm tra xem đã gửi biểu mẫu xoá lớp chưa
    //         if (isset($_GET['id'])) {
    //                 // Lấy thông tin từ biểu mẫu
    //             $id = $_GET['id'];
    //                 // Gọi dịch vụ để xoá lop   
    //             $classService = new ClassService();
    //             $result = $classService->remoteNewClass($id);
        
    //                 // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
    //             if ($result) {
    //                 //header('Location:' . DOMAIN . 'public/index.php?action=delete&controller=student');
                    
    //                 header('Location:' .DOMAIN .'/public/index.php?controller=class&action=index');
    //                 //echo"Xoá thành công";
    //             } else {
    //                     // Xử lý lỗi hoặc hiển thị thông báo lỗi
    //                 echo 'Xoá thất bại';
    //             }
    //         } else {
                    
    //                 //echo 'Không tìm thấy thông tin';
                   
    //             echo 'Không có thông tin';
    //         }
    
    // }
}
?>