
<?php
include_once("ViewUser.php") ;
include_once '../../app/Model/Manager.php';
class ViewManager extends ViewUser
{

public function ViewEmployees($result)
{
$html="";
$role;
if ($result->num_rows > 0) {
  // output data of each row

  $html.="<table>";
  $html.="<tr class='r1'>";
  $html.="<th>Employee ID</th>";
  $html.="<th>Employee Name</th>";
  $html.="<th>Employee Role</th>";
  $html.="<th>Penalty State</th>";
  $html.=" </tr>";
  while($row = $result->fetch_assoc()) {
    $Eid=$row["ID"];
    $name=$row['Name'];
    $Type=$row["Type"];
    $penalty=$row["description"];
    switch ($Type) {
    case "1":
      $role="Admin";
      break;
    case "2":
      $role="Designer";
      break;
    case "3":
      $role="Manager";
      break;
    case "4":
      $role="Customer Support";
      break;
  }
    $html.="<tr>";
    $html.="<td>$Eid</td>";
    $html.="<td>$name</td>";
    $html.="<td>$role</td>";
    if($penalty=="")
    {
      $html.="<td><a href='AddPenalty.php?id_emp=$Eid&name=$name'>Add</a></td>";
    }
    else {
      $html.="<td>$penalty</td>";
    }

    $html.="</tr>";
  }
$html.="</table>";
}
else {
  echo "no Employees found";
}
return $html;
}
public function ViewPenaltyForm($id,$name)
{
  echo "Add penalty to $name : ";
  $html='';
  $html.="<form class='form' action='' method='post' name='' >";
  $html.="<label class='p-input'>Penalty Description</label>";
  $html.="<input type='text' class='form-input' name='desc' value=''>";
    $html.="<input type='hidden' class='form-input' name='id' value='$id'>";
  $html.= "<input  type='submit' class='create' name='submit' value='Add penalty'>";
  $html.= "</form>";
  return $html;
}
}
