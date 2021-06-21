<?php
  include_once('User.php') ;
  class Client extends User
  {
    public $Id;
    public $Message;
    public $phone;
    function __construct()
    {
      $err = false;
    }

    public function Feed($Name,$Email,$phone,$Message)
    {
      $this->Name=$Name;
      $this->Email=$Email;
      $this->phone=$phone;
      $this->Message=$Message;
    }

    public function AddContactMsg($EMP)
    {

      $this->DB->query = "INSERT into contact_messages (name,email,phone,message) VALUES('".$EMP->Name."','".$EMP->Email."','".$EMP->phone."','".$EMP->Message."')";
      $result = $this->DB->query();
    }

  }
 ?>
