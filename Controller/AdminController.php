<?php
//include('PHP/classes.php') ;
include_once('Model/Project.php') ;
include_once('UserController.php') ;
class AdminController extends UserController
{
  public function C_CreateAccount()
  {
      $err="";
      if(isset($_POST['submit']) && !empty($_POST['submit']))
      {
          $name = $_POST["Name"];
          $email = $_POST["Email"];
          $type = $_POST["Type"];
          $pass =  $_POST["Password"];
          if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
            $msg="-Please enter a valid email <br>";
            //echo "-Please enter a valid name <br>";
            $err = true;
          }

          if(!$err)
          {
            $EMP = new Employee();
            $EMP->Feed($name,$email,$pass,$type);
            $this->Model->connect();
            $this->Model->CreateAccount($EMP);
          }
      }
  }
}

?>
