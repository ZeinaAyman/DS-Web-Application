<?php
include_once("View.php") ;
class ViewUser extends View
{

  public function ContactForm()
  {
      $html="";
      $html.="<form class='rd-mailform rd-mailform_style-1' data-form-output='form-output-global' data-form-type='contact' method='post' action='contactUs.php'>";
      $html.="<div class='form-wrap form-wrap_icon'>";
      $html.="<i class='far fa-user'></i>";
      $html.="<input class='form-input' id='contact-order-name' type='text' name='name' required placeholder='Your name'>";
      $html.="</div>";
      $html.="<div class='form-wrap form-wrap_icon'>";
      $html.="<i class='fa fa-phone'></i>";
      $html.="<input class='form-input' id='contact-order-phone' type='text' name='phone' required placeholder='Your Phone'>";
      $html.="</div>";
      $html.="<div class='form-wrap form-wrap_icon'>";
      $html.="<i class='far fa-envelope'></i>";
      $html.="<input class='form-input' id='contact-order-email' type='email' name='email' required placeholder='Your Email'>";
      $html.="</div>";
      $html.="<div class='form-wrap form-wrap_icon'>";
      $html.="<i class='far fa-envelope-open'></i>";
      $html.="<textarea class='form-input' id='contact-order-message' name='message' required placeholder='Your Message'></textarea>";
      $html.="</div>";
      $html.="<button class='button button-primary' id='myBtn' type='submit' name='submit'>Submit</button>";
      $html.="</form>";

      return $html;
  }

  public function thankYou()
  {
    $html="";
    // $html.="<div id='myModal' class='modal'>";
    // $html.="<div class='modal-content'>";
    // $html.="<span class='close'>&times;</span>";
    // $html.="<p>Are you sure you want to delete this user?</p>";
    // $html.="<button style='color: green'>Delete</button>";
    // $html.="<button>Cancel</button>";
    // $html.="</div>";
    // $html.="</div>";

    $html.="<div class='back-overlay' id='thank-card-overlay'>";
    $html.="<div id='outer-overlay' style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>";
    $html.="<div class='thank-card' id='thank-card'>";
    $html.="<span class='close' style='font-size: 50px; cursor:pointer; position: relative;left: 94%;'>&times;</span>";
    $html.="<div class='content' style='display:flex;flex-direction:column;justify-content: center;align-content:center;'>";
    $html.="<h2 style='padding-bottom: 50px;padding-top:20px; color: #B89D5F;'>Thank you for Sending A Message!</h2>";
    $html.="<br>";
    $html.="<p>STAY CONNECTED ON OUR SOCIAL PLATFORMS</p>";
    $html.="<div class='flex'>";
    $html.="<a href='https://www.facebook.com/GamersLegacyMIU/' target='_blank'><img src='../images/facebook (2).png' style='width: 15%; padding-right: 31px;'></a>";
    $html.="<a href='https://www.instagram.com/gamerslegacymiu/' target='_blank'><img src='../images/instagram.png' style=' width: 16%; padding-right: 22px;'></a>";
    $html.="<a href='https://discord.gg/HewrKJRE2e' target='_blank'><img src='../images/twitter.png' style='width: 30%;'></a>";
    $html.="</div>";
    $html.="</div>";
    $html.="</div>";
    $html.="</div>";


    return $html;
  }


}

 ?>
