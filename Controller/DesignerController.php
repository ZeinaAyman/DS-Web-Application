<?php
//include('PHP/classes.php') ;
include_once('Model/Project.php') ;
include_once('UserController.php') ;
class DesignerController extends UserController
{
  public function C_CreatePorject()
  {

    $err="";
    if(isset($_POST['submit']) && !empty($_POST['submit'])) {
      $name = $_POST["name"];
      $description = $_POST["description"];
      $budget = $_POST["budget"];
      $images=array();
      $files=array();
      if(count($_FILES["file"]['name'])>0)
      {
        $str="";
        for($j=0; $j < count($_FILES["file"]['name']); $j++)
        {
          $filen = $_FILES["file"]['name']["$j"];
          array_push($files,$filen);
          $path = 'uploads/projects/files/'.$filen;
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
          $path = 'uploads/projects/images/'.$filen;
          if(move_uploaded_file($_FILES["image"]['tmp_name']["$j"],$path))
          {
            $str2.= "Image# ".($j+1)." ($filen) uploaded successfully<br>";
          }
        }
      }
      else {
        $str2 = "No Images found to upload"; //No file upload message
      }

      echo $str;
      echo $str2;

      if(!$err)
      {
        $CurrentDes = unserialize($_SESSION['online']);
        //$CurrentDes->CreateProject($DB,$Project);
        $Project = new Project();
        $Project->Feed($name,$description,$budget,$images,$files);
        $this->Model->connect();
        $this->Model->CreateProject($Project,$CurrentDes);


      }
    }
  }
}

?>
