<?php
//include_once('navbar.php');
include_once('../../app/View/ViewSupport.php');
include_once( '../../app/Controller/SupportController.php');

$Support=new Support();
$ViewSupport = new ViewSupport();
$SupportController = new SupportController($Support);
$res=$SupportController->C_GetMessages();

 ?>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/Tables.css">


<div class="navbar">
  <h2>Designs Solutions</h2>
  <div class="links">
    <a href="Login.php">Log Out</a>

  </div>
</div>

<a href="Support.php" style="text-decoration: none;"><h2>Back</h2></a>

<?php

 echo $ViewSupport->ViewMessages($res)

 ;?>
