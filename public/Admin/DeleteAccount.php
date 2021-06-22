<?php
include '../../app/Model/Admin.php';
include '../../app/View/ViewAdmin.php';
include '../../app/Controller/AdminController.php';

$Model = new Admin();
$AdminController = new AdminController($Model);

$AdminController->C_DeleteAccount($_POST["user_id"]);

 ?>
