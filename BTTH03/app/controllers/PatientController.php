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
    
}
?>