<?php
include_once('Controller.php') ;
include_once('../../app/View/ViewClient.php');
  class ClientController extends Controller
  {
      public $msg;
      public $success;
      public function C_ContactForm()
      {
        $error = false;

          if(isset($_POST['submit']))
          {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $this->msg="-Please enter a valid email <br>";
              //echo "-Please enter a valid email<br>";
              $error = true;
            }
            if(strlen($phone) > 12 || strlen($phone) < 11){
              $this->msg="-Please enter a valid Phone Number<br>";
              //echo "-Please enter a valid name <br>";

              $error = true;
            }

            if(!$error){
              $this->success=true;

              $EMP = new Client();
              $EMP->Feed($name,$email,$phone,$message);
              $this->Model->connect();
              $this->Model->AddContactMsg($EMP);
            }
          }
      }

      public function C_NewsletterForm()
      {
        $error = false;

          if(isset($_POST['submit']))
          {
            $name = $_POST["name"];
            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $this->msg="-Please enter a valid email <br>";
              //echo "-Please enter a valid email<br>";
              $error = true;
            }

            if(!$error){
              $this->success=true;
              $EMP = new Client();
              $EMP->Feed($name,$email,0,0);
              $this->Model->connect();
              $this->Model->AddNewsletter($EMP);
            }
          }
      }

  }
 ?>
