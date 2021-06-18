<?php include 'navbar.php';
      include 'View/ViewDesigner.php';
      include 'Controller/DesignerController.php';
      $viewDesigner = new ViewDesigner();
      $Model = new Designer();
      $DesignerController = new DesignerController($Model);
      ?>
<link rel="stylesheet" href="Project.css">
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
        this.style.background='#59a2a6';
      });
      projects[i].addEventListener("mouseleave",function functionName() {
        this.style.background='#D6E8E9';
      });
    }
}
</script>
