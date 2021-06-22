
<?php
include_once('navbar.php');
include_once('../../app/View/ViewManager.php');
include_once( '../../app/Controller/ManagerController.php');


if(isset($_GET['id_emp']))
{

 $ControllerManager=new ManagerController(unserialize($_SESSION['online']));
 $ControllerManager->C_AddPenalty();
 $id=$_GET['id_emp'];
 $name=$_GET['name'];
 $ViewManager = new ViewManager();

 echo $ViewManager->ViewPenaltyForm($id,$name);


}
 ?>
