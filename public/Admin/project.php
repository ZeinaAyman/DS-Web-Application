<?php
include 'navbar.php';
include_once '../../app/View/ViewDesigner.php';
include_once '../../app/Controller/DesignerController.php';
$viewDesigner = new ViewDesigner();
$DesignerController = new DesignerController(unserialize($_SESSION['online']));
$viewDesigner->PreviewProject($DesignerController->C_PreviewProject());
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/Project.css">
    <title>Project Details</title>
</head>

<body>
  <?php echo $viewDesigner->PreviewProject($DesignerController->C_PreviewProject()); ?>

</body>

</html>
