<?php
include "View.php";
class ViewUser extends View
{

  public function LoginForm()
  {
    $html="";
    $html.="<form action= '' method='post'>";
    $html.="<div class='input'>";
    $html.="<input class='info' type='text' placeholder='Email' required name='email'>";
    $html.="</div>";
    $html.="<div class='input'>";
    $html.="<input class='info' type='password' placeholder='Password' required name='password'><br>";
    $html.="</div>";
    $html.="<input class='button' type='submit' value='Log in' name='Submit'>";
    $html.="</form>";
    return $html;
  }




}

 ?>
