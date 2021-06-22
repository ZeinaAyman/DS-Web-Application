<?php
  include_once('Employee.php');
  class Admin extends Employee
  {

    function __construct()
    {

    }

    public function CreateAccount($EMP)
    {

      $this->DB->query = "INSERT into user (Name,Email,Type,Password,Picture) VALUES('".$EMP->Name."','".$EMP->Email."','".$EMP->Type."','".$EMP->Password."','".$EMP->Picture."')";
      $result = $this->DB->query();
    }

    public function DeleteAccount($id){

      $this->DB->query = "DELETE * FROM assign WHERE UID='".$id."'";
      $result = $this->DB->query();

      // $this->DB->query = "DELETE * FROM  user WHERE ID='".$id."'";
      // $result = $this->DB->query();

    }

  }

 ?>
