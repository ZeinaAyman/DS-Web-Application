<?php
  include 'User.php';
  //require_once('Designer.php');
  class Employee extends User
  {
    public $ID;
    public $Password;
    public $Type;
    function __construct()
    {
z$err = false;
    }

    public function Feed($Name,$Email,$Password,$Type)
    {
      $this->Name=$Name;
      $this->Email=$Email;
      $this->Password=$Password;
      $this->Type=$Type;
    }

    public function Login($email,$password)
    {
        $this->DB->query = "SELECT * FROM user Where Email='".$email."' And Password='".$password."'";
        $result = $this->DB->query();
        if ($this->DB->ok === 1)
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

          $_SESSION['online'] = serialize($this);
          header("Location: Home.php");

        }
        else
        {
          $msg='User not found';
        }
    }

    public function UpdateUser($online,$name,$email,$password)
    {
        $this->DB->query = "UPDATE user SET Name='".$name."',Email='".$email."',Password='".$password."' Where ID='".$online->ID."'";
        $result = $this->DB->query();
        if ($this->DB->ok === 1)
        {
          echo "done";
          $DB->ok=0;
          $online->ID=$id;
          $online->Name=$name;
          $online->Email=$email;
          $online->Password=$password;

        }
        else
        {
          $msg='Update Failed';
        }
    }

    public function CreateProject($DB,$Project)
    {
      $DB->query = "INSERT into project (name,description,budget,images,files,status) VALUES('".$Project->getName()."', '".$Project->getDesc()."','".$Project->getBudget()."','".$Project->getImages()."','".$Project->getFiles()."','".$Project->getStatus()."')";
      $result = $DB->query();
      echo $result;
    }
  }
 ?>
