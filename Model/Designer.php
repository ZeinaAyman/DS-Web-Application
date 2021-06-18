<?php
  include_once('Employee.php');
  class Designer extends Employee
  {

    function __construct()
    {

    }

    public function CreateProject($Project,$Des)
    {
      $Project->addDesigner($Des);
      $assignedID=$Des->ID;
      $this->DB->query = "INSERT into project (name,description,budget,images,files,status,AssignedDesigners) VALUES('".$Project->getName()."', '".$Project->getDesc()."','".$Project->getBudget()."','".$Project->getImages()."','".$Project->getFiles()."','".$Project->getStatus()."',$assignedID)";
      $result = $this->DB->query();
      echo $result;
    }

    public function GetProjects()
    {
      $this->DB->query = "SELECT * FROM project";
      $result = $this->DB->query();
      if ($this->DB->ok === 1)
      {
        return $result;
      }
      else
      {
        $msg='User not found';
      }
    }
  }
 ?>
