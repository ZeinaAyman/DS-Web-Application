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
<a href="home.php" style="text-decoration: none;"><h2>Back</h2></a>
<?php echo $Viewdesigner->AddEdit($DesignerController->C_GetAllUsersType('user',2)); ?>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
modal.style.display = "none";
}
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}


var btn = document.getElementsByClassName("myBtn");
var numComments = btn.length;
for (var i = 0; i < numComments; i++) {
btn[i].addEventListener("click", function() {
  modal.style.display = "block";

});
}
</script>
