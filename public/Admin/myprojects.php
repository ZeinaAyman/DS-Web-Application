<?php
include 'navbar.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/View/ViewDesigner.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/Controller/DesignerController.php';
?>
 <link rel="stylesheet" href="Project.css">
<h1 class="title">My Projects</h1>
<div class="add-p">
  <a style="text-decoration:none; color: #151515;" href="CreateProject.php">Create Project</a>
  <a style="text-decoration:none; color: #151515;" href="CreateProject.php"><img src="images/add.png" alt="" class="add-p-icon"></a>
</div>
<?php




$Designer=new Designer();
$ViewDesigner = new ViewDesigner();
$DesignerController = new DesignerController($Designer);
$res=$DesignerController->C_GetProjects();
 echo $ViewDesigner->Projectslist($res);

 ?>
