<?php
//include('PHP/classes.php') ;
include_once('Model/Project.php') ;
include_once('UserController.php') ;
class AdminController extends UserController
{
  public function C_CreateAccount()
  {
      $err="";
      $msg="";
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
        move_uploaded_file($file_tmp,"uploads/profilepictures/".$file_name);

      }


      else{
         echo implode(',', $errors);
         echo "<br>";
         $flag=0;
      }
          if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
            $msg="-Please enter a valid email <br>";
            //echo "-Please enter a valid name <br>";
            $err = true;
          }
          echo $msg;
          if(!$err)
          {
            $EMP = new Employee();
            $EMP->Feed($name,$email,$pass,$type,$file_name);
            $this->Model->connect();
            $this->Model->CreateAccount($EMP);
          }
      }
  }
}

?>
