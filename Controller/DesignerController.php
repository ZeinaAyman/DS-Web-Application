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
        $image =  $_POST["image"];
        $files=array();
        if(count($_FILES["file"]['name'])>0)
 {
//check if any file uploaded
 $str="";
  for($j=0; $j < count($_FILES["file"]['name']); $j++)
 { //loop the uploaded file array
   $filen = $_FILES["file"]['name']["$j"]; //file name
   array_push($files,$filen);
   $path = 'uploads/'.$filen; //generate the destination path
   if(move_uploaded_file($_FILES["file"]['tmp_name']["$j"],$path))
{
   //upload the file
    $str.= "File# ".($j+1)." ($filen) uploaded successfully<br>";
    //Success message
   }
  }
 }
 else {
  $str = "No files found to upload"; //No file upload message
}
echo $str;

        if(!$err)
        {
          $CurrentDes = unserialize($_SESSION['online']);
          //$CurrentDes->CreateProject($DB,$Project);
          $Project = new Project();
          $Project->Feed($name,$description,$budget,$image,$files);
          $this->Model->connect();
          $this->Model->CreateProject($Project,$CurrentDes);


        }
      }
    }
  }

 ?>
