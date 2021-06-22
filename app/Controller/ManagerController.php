<?php

include_once('UserController.php') ;

class ManagerController extends UserController
{
 public function C_GetEmployees()
 {
   $this->Model->connect();
   $res=$this->Model->GetEmployees();
   return $res;
 }
 public function C_AddPenalty()
 {

   if(isset($_POST['submit']) && !empty($_POST['submit'])) {

     $id = $_POST["id"];
     $description = $_POST["desc"];
     $this->Model->connect();
     echo $this->Model->Type;
     $this->Model->AddPenalty($id,$description);
     echo '<script>
     window.location.href = "../../public/Admin/EmployeesList.php";
     </script>';


 }

}
}


 ?>
