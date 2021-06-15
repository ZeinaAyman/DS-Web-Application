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

      public function C_UpdateUser()
      {
        $err = false;
        if(isset($_POST['submit']))
         {
                 $name=$_POST['name'];
                 $email=$_POST['email'];
                 $password=$_POST['password'];
                 $newpassword=$_POST['NewPassword'];
                 $confirmpassword=$_POST['ConfirmPassword'];

                 if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
                   $msg="Please enter a valid email";
                   $err = true;
                 }

                 if ($newpassword!=$confirmpassword) {
                   $msg="Password doesn't match";
                   $err = true;
                 }

                 if(!$err){
                   $this->Model->connect();
                   $this->Model->UpdateUser($this->Model,$name,$email,$password);
                 }

         }
      }
  }
 ?>
