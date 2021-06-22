<?php

include '../../app/Model/Designer.php';
include '../../app/View/ViewDesigner.php';
include '../../app/Controller/DesignerController.php';

  $Model = new Designer();
  $Viewdesigner = new ViewDesigner();
  $DesignerController = new DesignerController($Model);
 ?>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/Tables.css">

<div class="navbar">
  <h2>Designs Solutions</h2>
  <div class="links">
    <a href="Login.php">Log Out</a>
  </div>
</div>
<a href="Admin.php" style="text-decoration: none;"><h2>Back</h2></a>
<?php echo $Viewdesigner->AddOwner($DesignerController->C_GetAllUsersType('user',2)); ?>
<script type="text/javascript">

var adds = document.getElementsByClassName('add');
for (var i = 0; i < adds.length; i++) {
  adds[i].addEventListener("click", function(){
    console.log(this.dataset.pid);
    console.log(this.dataset.eid);
    jQuery.ajax({
                    type: "POST",
                    url: "addowner.php",
                    data: {project:this.dataset.pid,employee:this.dataset.eid}
                }
            );

  });
}




</script>
