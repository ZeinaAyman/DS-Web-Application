<?php
include_once('Controller.php') ;
  class UserController extends Controller
  {
      public function C_Login()
      {
        $err = false;
        if(isset($_POST['Submit']))
         {
                 $email=$_POST['email'];
                 $password=$_POST['password'];

                 if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
                   $msg="Please enter a valid email";
                   $err = true;
                 }

                 if(!$err){
                   $this->Model->connect();
                   $this->Model->Login($email,$password);
                 }

         }
      }
  }
 ?>
