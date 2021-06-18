<?php

include_once("ViewUser.php") ;
class ViewAdmin extends ViewUser
{

 public function CreateAccountForm()
 {
   $html="";
   $html.="<form action= '' method='post'>";
   $html.="<div class='input'>";
   $html.="<input class='info' type='text' placeholder='Employee Name'  name='Name'>";
   $html.="</div>";
   $html.="<div class='input'>";
   $html.="<input class='info' type='text' placeholder='Employee Email' name='Email'><br>";
   $html.="</div>";
   $html.="<div class='input'>";
   $html.="<select name='Type' class ='info'>";
   $html.="<option disabled selected>Employee Role</option>";
   $html.="<option value='2'>Designer</option>";
   $html.="<option value='3'>Manager</option>";
   $html.="</select>";
   $html.="</div>";
   $html.="<div class='input'>";
   $html.="<input class='info' type='password' placeholder='Password' name='Password'><br>";
   $html.="</div>";
   $html.="<input class='button' type='submit' value='Create' name='submit'>";
   $html.="</form>";
   return $html;
 }

 public function ListEmployees($result)
 {
   $html.="";
   $html.="<table>";
   $html.="<tr class='r1>";
   $html.="<th>Employee Name</th>";
   $html.="<th>Employee Role</th>";
   $html.="<th>Employee Projects</th>";
   $html.="<th>Edit Profile</th>";
   $html.="<th>Delete</th>";
   $html.="</tr>";
   while ($row = $result->fetch_assoc())
   {
     $html.="<tr>";
     $html.="<td>DES01</td>";
     $html.="<td>Designer</td>";
     $html.="<td>Project01 <br> Project03</td>";
     $html.="<td><a href='page.html'><img src='images/edit.png' class='editimg'></a></td>";
     $html.="<td><a href='page.html'><img src='images/delete.png' class='delimg'></a></td>";
     $html.="</tr>";
   }
     $html.="</table>";
 }

}

 ?>
