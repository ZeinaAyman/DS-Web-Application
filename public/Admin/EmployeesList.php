<?php
include_once('navbar.php');
include_once('../../app/View/ViewManager.php');
include_once( '../../app/Controller/ManagerController.php');

$Manager=new Manager();
$ViewManager = new ViewManager();
$ManagerController = new ManagerController($Manager);
$res=$ManagerController ->C_GetEmployees();

 ?>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/Tables.css">

<a href="Home.php" style="text-decoration: none;"><h2>Back</h2></a>
<?php

 echo $ViewManager->ViewEmployees($res)

 ;?>
