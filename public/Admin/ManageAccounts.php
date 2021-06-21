<?php

  include '../../app/View/ViewDesigner.php';
  include '../../app/Controller/DesignerController.php';

  $viewDesigner = new ViewDesigner();
  $Model = new Designer();
  $UserController = new DesignerController($Model);
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
<table>
  <tr class="r1">
    <th>Employee Name</th>
    <th>Employee Role</th>
    <th>Employee Projects</th>
    <th>Edit Profile</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>DES01</td>
    <td>Designer</td>
    <td>Project01 <br> Project03</td>
    <td><a href=""><img src="../images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="../images/delete.png" class="delimg"></a></td>
  </tr>
  <tr>
    <td>DES02</td>
    <td>Designer</td>
    <td>Project01 <br> Project02</td>
    <td><a href=""><img src="../images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="../images/delete.png" class="delimg"></a></td>

    <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Are you sure you want to delete this user?</p>
    <button style="color: green">Delete</button>
    <button>Cancel</button>
  </div>

</div>
  </tr>
  <tr>
    <td>MAN01</td>
    <td>Manager</td>
    <td>Project01 <br> Project04 </td>
    <td><a href=""><img src="../images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="../images/delete.png" class="delimg"></a></td>
  </tr>
</table>
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
