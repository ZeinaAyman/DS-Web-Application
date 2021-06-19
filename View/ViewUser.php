<?php
include_once("View.php") ;
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

  public function ProfileEditForm($online)
  {
      $html="";
      $html.="<form class='profilecontainer' action='Profile.php' method='post' enctype='multipart/form-data'>";
      $html.="<label class='empinfo'>First Name</label>";
      $html.="<input type='text' name='name' class='empinput' value='".unserialize($online)->Name."'>";

      $html.="<label class='empinfo'>Email</label>";
      $html.="<input type='text' name='email' class='empinput' value='".unserialize($online)->Email."'>";

      $html.="<label class='empinfo'>Old Password</label>";
      $html.="<input type='password' name='password' class='empinput' value='".unserialize($online)->Password."'>";

      $html.="<label class='empinfo'>New Password</label>";
      $html.="<input type='password' name='NewPassword' class='empinput' value='' >";

      $html.="<label class='empinfo'>Confirm Password</label>";
      $html.="<input type='password' name='ConfirmPassword' class='empinput' value='' >";

      $html.="<label class='p-input'>Images</label>";
      $html.="<div class='input'>";
      $html.="<input type='file' class='form-file' id='imageupload' name='image' value='Upload'>";

      $html.="<br>";
      $html.="<input type='submit' name='submit' class='updatebut' value='Update Profile'>";

      $html.="</form>";

      return $html;
  }


}

 ?>
