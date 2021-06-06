<?php

  class User
  {
    public $ID;
    public $Name;
    public $Email;
    public $password;
    public $type;
    function __construct()
    {

    }

    public function Login($DB,$email,$password)
    {
        $DB->query = "SELECT * FROM user Where Email='".$email."' And Password='".$password."'";
        $result = $DB->query();
        if ($DB->ok === 1)
        {
          echo "done";
          $DB->ok=0;
          header("Location: Home.php");
        }
        else
        {
          $msg='User not found';
        }
    }

  }





 ?>
