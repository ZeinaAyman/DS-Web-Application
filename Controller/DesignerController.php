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
        $file =  $_POST["file"];


        if(!$err)
        {
          $CurrentDes = unserialize($_SESSION['online']);
          //$CurrentDes->CreateProject($DB,$Project);
          $Project = new Project();
          $Project->Feed($name,$description,$budget,$image,$file);
          $this->Model->connect();
          $this->Model->CreateProject($Project,$CurrentDes);


        }
      }
    }
  }

 ?>
