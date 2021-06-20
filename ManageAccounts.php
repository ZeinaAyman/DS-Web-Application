<?php
  include 'View/ViewDesigner.php';
  include 'Controller/DesignerController.php';
  $viewDesigner = new ViewDesigner();
  $Model = new Designer();
  $UserController = new DesignerController($Model);
 ?>
<link rel="stylesheet" href="master.css">
<style media="screen">
table
{
width: 70%;
margin-top :3%;
margin-left: 2.5%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td,th
{
  line-height: 30px;
}
th{
  color: #E9E8E8;
}
.r1
{
  background-color: #B89D5F;
}
td
{
  text-align: center;
  background-color: white;
}
.editimg,.delimg
{
   width : 27;
   height : 25;
}
.delimg
{
   width : 17;
   height : 15;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  position: relative;
  text-align: center;
  margin: 15% auto;
  padding: 10px;
  border: 1px solid #888;
  height: 33%;
  width: 33%;
}
.modal-content p{
  font-family: "Monsterrat", Arial;
  font-size: 30px;
  font-weight: bold;
  width: 15em;
  position: relative;
  left: 0;
  height: 5em;
}
.modal-content button{
  display: inline-block;
      width: auto;
      max-width: 100%;
      border: 1px solid;
      border-radius: 0;
      padding: 12px 25px;
      font-size: 14px;
      line-height: 17px;
      text-decoration: none;
      font-family: Poppins;
      font-weight: 400;
      letter-spacing: 0;
      transition: .33s all ease;
      white-space: normal;
      text-transform: uppercase;
      cursor: pointer;
      text-align: center;
}
/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
a:hover{
  cursor: pointer;
}
a h2{
 color: #151515;
   font-size: 20px;
   letter-spacing: 1px;
   padding-left: 49px;
   padding-top: 20px;
   text-transform: uppercase;
}
@media (max-width: 600px) {
 a h2{
   display: none;
 }
}
</style>
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
    <td><a href=""><img src="images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="images/delete.png" class="delimg"></a></td>
  </tr>
  <tr>
    <td>DES02</td>
    <td>Designer</td>
    <td>Project01 <br> Project02</td>
    <td><a href=""><img src="images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="images/delete.png" class="delimg"></a></td>

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
    <td><a href=""><img src="images/edit.png" class="editimg"></a></td>
    <td><a class="myBtn"><img src="images/delete.png" class="delimg"></a></td>
  </tr>
</table>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
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
