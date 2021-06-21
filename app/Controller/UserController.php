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

                 $file_name = $_FILES['image']['name'];
                 $file_size =$_FILES['image']['size'];
                 $file_tmp =$_FILES['image']['tmp_name'];
                 $file_type=$_FILES['image']['type'];

                 if($file_name)
                 {
                   $temp=(explode('.',$_FILES['image']['name']));
                   $file_ext=strtolower(end($temp));
                   $extensions= array("jpeg","jpg","png");
                   if(in_array($file_ext,$extensions)=== false)
                   {
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
                 }
                 else {
                   $file_name=unserialize($_SESSION['online'])->Picture;;
                 }





                 if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
                   $msg="Please enter a valid email";
                   $err = true;
                 }

                 if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/',$newpassword)){
                   $msg =  "Password should be at least 8 characters <br> should include at least: <br> -One upper case letter <br> -One number <br> -One special character.";
                   $err=true;
                   }

                 if ($newpassword!=$confirmpassword) {
                   $msg="Password doesn't match";
                   $err = true;
                 }

                 if ($newpassword=="") {
                   $newpassword=$password;
                 }

                 if(!$err){
                   $this->Model->connect();
                   $this->Model->UpdateUser($this->Model,$name,$email,$newpassword,$file_name);
                 }

         }
      }
  }
 ?>
