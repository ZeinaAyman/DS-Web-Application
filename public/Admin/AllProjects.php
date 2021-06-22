<?php include_once('navbar.php') ;

      include '../../app/View/ViewDesigner.php';
      include '../../app/Controller/DesignerController.php';
      $viewDesigner = new ViewDesigner();
      $Model = new Designer();
      $DesignerController = new DesignerController($Model);
      ?>
<link rel="stylesheet" href="../css/Project.css">
/*
<body onload="ready()">
  <h1 class="title">All Projects</h1>
  <?php echo $viewDesigner->AllProjectsList($DesignerController->C_GetAllProjects()); ?>

</body>
<script type="text/javascript">
function ready() {
    console.log("hi");
    var projects = document.getElementsByClassName('project');
    for (var i = 0; i < projects.length; i++) {
      projects[i].addEventListener("mouseover",function functionName() {
        this.style.background='#8C744D';
      });
      projects[i].addEventListener("mouseleave",function functionName() {
        this.style.background='#B89D5F';
      });
    }
}
</script>
