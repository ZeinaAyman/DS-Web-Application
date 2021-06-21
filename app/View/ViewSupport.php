<?php

include_once("ViewUser.php") ;
include_once '../../app/Model/Support.php';
class ViewSupport extends ViewUser
{
 public function ViewMessages($result)
 {
     $html.="";
     if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
       $id=$row["id"];
       $name=$row['name'];
       $email=$row["email"];
       $msg=$row["message"];

   $html.="<table>";
   $html.="<tr class='r1'>"
   $html.="<th>Message ID</th>";
   $html.="<th>Client Name</th>";
   $html.="<th>Client Email</th>";
   $html.="th>Message</th>";
   $html.=" </tr>";


     $html.="<tr>";
      $html.="<td>$id</td>";
       $html.="<td>$name</td>";
       $html.="<td>$email</td>";
       $html.="<td>$Message</td>";
       $html.="<td><a href=''><img src='../images/edit.png' class='editimg'></a></td>";
       $html.="<td><a class='myBtn'><img src='../images/delete.png' class='delimg'></a></td>"
     $html.="</tr>";
     $html.="</table>"
     return $html;
 }

}
