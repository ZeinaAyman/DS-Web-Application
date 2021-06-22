<?php
//include('PHP/classes.php') ;
include '../../app/Model/Project.php';
include_once('UserController.php') ;
class AdminController extends UserController
{
  public $msg="";
  public function C_CreateAccount()
  {
    $err="";
    if(isset($_POST['submit']) && !empty($_POST['submit']))
    {
      $name = $_POST["Name"];
      $email = $_POST["Email"];
      $type = $_POST["Type"];
      $pass =  $_POST["Password"];
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $temp=(explode('.',$_FILES['image']['name']));
      $file_ext=strtolower(end($temp));
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file. ";

      }

      if(empty($errors)==true)
      {
        move_uploaded_file($file_tmp,"../../public/uploads/profilepictures/".$file_name);

      }


      else{
        echo implode(',', $errors);
        echo "<br>";
        $flag=0;
      }
      if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
        $this->msg="-Please enter a valid email <br>";
        //echo "-Please enter a valid name <br>";
        $err = true;
      }
      if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/',$pass)){
        $this->msg =  "Password should be at least 8 characters should include at least: <br> -One upper case letter <br> -One number <br> -One special character.";
        $err=true;
      }

      if(!$err)
      {
        $EMP = new Employee();
        $EMP->Feed($name,$email,$pass,$type,$file_name);
        $this->Model->connect();
        $this->Model->CreateAccount($EMP);
      }
    }
  }

  public function C_DeleteAccount($user_id)
  {
    $EMP = new Employee();
    $this->Model->connect();
    $this->Model->DeleteAccount($user_id);
  }

  public function C_GetAllUsers()
 {
   $this->Model->connect();
   $res=$this->Model->DB->fetchAllUsers();
   return $res;
 }

}

?>
