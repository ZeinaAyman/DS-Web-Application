
<?php

//include 'Model/Designer.php';
include_once($_SERVER['DOCUMENT_ROOT'].'/DS/app/View/ViewDesigner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/DS/app/Controller/DesignerController.php');
include_once('navbar.php') ;
?>
<link rel="stylesheet" href="css/createproject.css">
<style media="screen">
body
{
  margin: 0;
  background-color: #E9E8E8;
}
</style>
<?php
$Model = new Designer();
$ViewDesigner = new ViewDesigner();
$DesignerController = new DesignerController($Model);
$DesignerController->C_CreateProject();
echo $ViewDesigner->CreateProjectForm();
?>
