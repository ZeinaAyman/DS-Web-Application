<?php
  include_once('Employee.php');
  class Admin extends Employee
  {

    function __construct()
    {

    }

    public function CreateAccount($DB,$EMP)
    {

      $DB->query = "INSERT into user (Name,Email,Type,Password) VALUES('".$EMP->Name."','".$EMP->Email."','".$EMP->Type."','".$EMP->Password."')";
      $result = $DB->query();
    }


  }

 ?>
