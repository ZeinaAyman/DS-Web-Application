<?php

include_once("ViewUser.php") ;
class ViewAdmin extends ViewUser
{

 public function CreateAccountForm()
 {
   $html='';
   <form action= "" method="post">
     <div class="input">
       <input class="info" type="text" placeholder="Employee Name"  name="name">
     </div>
     <div class="input">
       <input class="info" type="text" placeholder="Employee Email" name="email"><br>
     </div>
     <div class="input">
       <select name="Type" class ="info">
         <option disabled selected>Employee Role</option>
         <option value="2">Designer</option>
         <option value="3">Manager</option>
       </select>
     </div>
     <div class="input">
       <input class="info" type="password" placeholder="Password" name="password"><br>
     </div>
     <input class="button" type="submit" value="Create" name="Submit">
   </form>
   return $html;

 }

}

 ?>
