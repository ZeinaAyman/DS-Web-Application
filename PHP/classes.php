<?php

  class User
  {
    public $Name;
    public $Email;
    function __construct()
    {

    }

  }


  class Employee extends User
  {
    public $ID;
    public $Password;
    public $Type;
    function __construct()
    {

    }

    public function Feed($Name,$Email,$Password,$Type)
    {
      $this->Name=$Name;
      $this->Email=$Email;
      $this->Password=$Password;
      $this->Type=$Type;
    }

    public function Login($DB,$email,$password)
    {
        $DB->query = "SELECT * FROM user Where Email='".$email."' And Password='".$password."'";
        $result = $DB->query();
        if ($DB->ok === 1)
        {
          echo "done";
          $DB->ok=0;
          $row = mysqli_fetch_assoc($result);
          $this->ID=$row['ID'];
          $this->Name=$row['Name'];
          $this->Email=$row['Email'];
          $this->Password=$row['Password'];
          $this->Type=$row['Type'];
          session_start();
          $_SESSION['online']=serialize($this);
          header("Location: Home.php");
        }
        else
        {
          $msg='User not found';
        }
    }
  }

  class Designer extends Employee
  {

    function __construct()
    {

    }
  }

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
