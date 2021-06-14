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
    public function CreateProject($DB,$Project)
    {
      $Project->addDesigner($this);
      echo $Project->getDesigners();
      $assignedID=$this->ID;
      $DB->query = "INSERT into project (name,description,budget,images,files,status,AssignedDesigners) VALUES('".$Project->getName()."', '".$Project->getDesc()."','".$Project->getBudget()."','".$Project->getImages()."','".$Project->getFiles()."','".$Project->getStatus()."',$assignedID)";
      $result = $DB->query();
      echo $result;
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

  class Project
  {
    private $ID ;
    private $name;
    private $desc;
    private $status;
    private $budget;
    private $images;
    private $files;
    private $designers=array();
    function __construct()
    {

    }

    public function Feed($name,$desc,$budget,$images,$files)
    {
      $this->name=$name;
      $this->desc=$desc;
      $this->status="Ongoing";
      $this->budget=$budget;
      $this->images=$images;
      $this->files=$files;

    }
function setID($ID)
{
 $this->ID = $ID;
}
function getID()
{
 return $this->ID;
}
function setName($name)
{
 $this->name = $name;
}
function getName()
{
 return $this->name;
}
function setDesc($desc)
{
$this->desc = $desc;
}
function getDesc()
{
return $this->desc;
}
function setStatus($status)
{
$this->status = $status;
}
function getStatus()
{
return $this->status;
}
function setBudget($budget)
{
$this->budget = $budget;
}
function getBudget()
{
 return $this->budget;
}
function setImages($images)
{
 $this->images = $images;
}
function getImages()
{
 return $this->images;
}

function setFiles($files)
{
 $this->files = $files;
}
function getFiles()
{
 return $this->files;
}

function addDesigner($designer)
{
  array_push($this->designers,$designer);
}
function getDesigners()
{
  return print_r($this->designers);
}
}
 ?>
