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

</style>
<div class="topnav">
  <h2>Designs Solutions</h2>
</div>

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
    <td><a href="page.html"><img src="images/edit.png" class="editimg""></a></td>
    <td><a href="page.html"><img src="images/delete.png" class="delimg""></a></td>
  </tr>
  <tr>
    <td>DES02</td>
    <td>Designer</td>
    <td>Project01 <br> Project02</td>
    <td><a href="page.html"><img src="images/edit.png" class="editimg""></a></td>
    <td><a href="page.html"><img src="images/delete.png" class="delimg""></a></td>
  </tr>
  <tr>
    <td>MAN01</td>
    <td>Manager</td>
    <td>Project01 <br> Project04 </td>
    <td><a href="page.html"><img src="images/edit.png" class="editimg""></a></td>
    <td><a href="page.html"><img src="images/delete.png" class="delimg""></a></td>
  </tr>
</table>
