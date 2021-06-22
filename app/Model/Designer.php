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
      $this->DB->query = "INSERT into project (origin,name,description,budget,Property_Type,images,files,status,deadline) VALUES('".$Des->ID."','".$Project->getName()."', '".$Project->getDesc()."','".$Project->getBudget()."','".$Project->getPropertyType()."','".$Project->getImages()."','".$Project->getFiles()."','".$Project->getStatus()."','".$Project->getdeadline()."')";
      $result = $this->DB->query();



      $this->DB->query = "INSERT into assign (UID,PID,OwnerA,EditA) VALUES('".$Des->ID."',(SELECT max(id) FROM project WHERE origin='".$Des->ID."'),'1','1')";
      $result = $this->DB->query();
      echo $result;
    }

    public function getMyProjects()
    {
     $DesId = unserialize($_SESSION['online'])->ID;
     $this->DB->query="SELECT * from project INNER JOIN assign ON project.id=assign.PID WHERE assign.UID=".$DesId;
     $result=$this->DB->query();
     return $result;
    }

  }
 ?>
