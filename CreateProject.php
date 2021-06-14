
<?php

//include 'Model/Designer.php';
include_once('View/ViewDesigner.php');
include_once('Controller/DesignerController.php');
include_once('navbar.php') ;
?>
<link rel="stylesheet" href="css/createproject.css">
<style media="screen">
body
{
  margin: 0;
  background-color: #847F79;
}
</style>
<?php
$Model = new Designer();
$ViewDesigner = new ViewDesigner();
$DesignerController = new DesignerController($Model);
$DesignerController->C_CreatePorject();
echo $ViewDesigner->CreateProjectForm();
?>
