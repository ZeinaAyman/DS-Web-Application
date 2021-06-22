<?php
//include('PHP/classes.php') ;
include '../../app/Model/Project.php';
include_once('UserController.php') ;

class DesignerController extends UserController
{

  /*public function C_ListFiles()
  {
    if(isset($_GET['imid']) && !empty($_GET['imid']))
    {
      $project = new Project();
      $project->connect();
      $project->ById($_GET['imid']);
      return $project;
    }
  }*/

  public function C_CreateProject()
  {

    $err="";
    $files=array();
    $images=array();
    if(isset($_POST['submit']) && !empty($_POST['submit'])) {
      $name = $_POST["name"];
      $description = $_POST["description"];
      $budget = $_POST["budget"];
      $property = $_POST["type"];
      $deadline = $_POST["deadline"];


      if(count($_FILES["file"]['name'])>0)
      {
        $str="";
        for($j=0; $j < count($_FILES["file"]['name']); $j++)
        {
          $filen = $_FILES["file"]['name']["$j"];
          array_push($files,$filen);
          $path = '../../public/uploads/projects/files/'.$filen;
          if(move_uploaded_file($_FILES["file"]['tmp_name']["$j"],$path))
          {
            $str.= "File# ".($j+1)." ($filen) uploaded successfully<br>";
          }
        }
      }
      else {
        $str = "No files found to upload"; //No file upload message
      }

      if(count($_FILES["image"]['name'])>0)
      {
        $str2="";
        for($j=0; $j < count($_FILES["image"]['name']); $j++)
        {
          $filen = $_FILES["image"]['name']["$j"];
          array_push($images,$filen);
          $path = '../../public/uploads/projects/images/'.$filen;
          if(move_uploaded_file($_FILES["image"]['tmp_name']["$j"],$path))
          {
            $str2.= "Image# ".($j+1)." ($filen) uploaded successfully<br>";
          }
        }
      }
      else {
        $str2 = "No Images found to upload"; //No file upload message
      }

      if(!$err)
      {
        $CurrentDes = unserialize($_SESSION['online']);
        //$CurrentDes->CreateProject($DB,$Project);
        $Project = new Project();
        $Project->Feed($name,$description,$budget,$property,$images,$files,$deadline);
        $this->Model->connect();
        $this->Model->CreateProject($Project,$CurrentDes);


      }
    }
  }
   public function C_GetProjects()
  {
    $this->Model->connect();
    $res=$this->Model->getMyProjects();
    return $res;

  }

  public function C_GetAllProjects()
 {
   $this->Model->connect();
   $res=$this->Model->DB->fetchAll('project');
   return $res;

 }

 public function C_GetAllUsersType($user, $type)
{
  $this->Model->connect();
  $res=$this->Model->DB->fetchByUserType($user,$type);
  return $res;
}

 public function C_PreviewProject()
 {
   if(isset($_GET['imid']) && !empty($_GET['imid']))
   {
     $project = new Project();
     $project->connect();
     $project->ById($_GET['imid']);
     return $project;
   }
 }
}
?>
