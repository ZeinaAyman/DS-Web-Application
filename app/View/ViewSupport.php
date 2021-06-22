<?php

include_once("ViewUser.php") ;
include_once '../../app/Model/Support.php';
class ViewSupport extends ViewUser
{
  public function ViewMessages($result)
  {
    $html="";
    if ($result->num_rows > 0) {
      // output data of each row
      $html.="<table>";
      $html.="<tr class='r1'>";
      $html.="<th>Message ID</th>";
      $html.="<th>Client Name</th>";
      $html.="<th>Client Email</th>";
      $html.="<th>Message</th>";
      $html.="<th>Reply</th>";
      $html.=" </tr>";
      while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $name=$row['name'];
        $email=$row["email"];
        $msg=$row["message"];





        $html.="<tr>";
        $html.="<td>$id</td>";
        $html.="<td>$name</td>";
        $html.="<td>$email</td>";
        $html.="<td>$msg</td>";
        $html.="<td><a href='mailto:$email'><img src='../images/email.png' class='editimg'></a></td>";
        $html.="</tr>";


      }
    $html.="</table>";
    }
    else {
      echo "no messages found";
    }
    return $html;
  }
}
