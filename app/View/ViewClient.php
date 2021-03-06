<?php
include_once("View.php") ;
class ViewUser extends View
{

  public function ContactForm()
  {
      $html="";
      $html.="<form class='rd-mailform rd-mailform_style-1' data-form-output='form-output-global' data-form-type='contact' method='post'>";
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

  public function NewsletterForm()
  {
    $html="";
    $html.="<form class='rd-mailform rd-mailform_style-1' method='post'>";
    $html.="<div class='form-wrap form-wrap_icon'>";
    $html.="<i class='far fa-user'></i>";
    $html.="<input class='form-input' id='contact-order-name' type='text' name='name' required placeholder='Your name'>";
    $html.="</div>";
    $html.="<div class='form-wrap form-wrap_icon'>";
    $html.="<i class='far fa-envelope'></i>";
    $html.="<input class='form-input' id='contact-order-email' type='email' name='email' required placeholder='Your Email'>";
    $html.="</div>";
    $html.="<button class='button button-primary' name='submit' type='submit'>Submit</button>";
    $html.="</form>";

    return $html;
  }
  public function Home_NewsletterForm()
  {
    $html="";
    $html.="<form data-name='Newsletter' name='wf-form-Newsletter' class='flex-2'>";
    $html.="<input type='text' class='text-field-2 w-input' name='name' placeholder='Your name' required>";
    $html.="<input type='email' class='text-field-2 _2 w-input'  name='email' placeholder='Your email' required>";
    $html.="<button class='submit-button-2 w-button' name='submit' type='submit'>Subscribe</button>";
    $html.="</form>";

    return $html;
  }

  public function thankYou($result)
  {
    $html="";

    $html.="<div class='back-overlay' id='thank-card-overlay'>";
    $html.="<div id='outer-overlay' style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>";
    $html.="<div class='thank-card' id='thank-card'>";
    $html.="<span class='close' style='font-size: 50px; cursor:pointer; position: relative;left: 94%;'>&times;</span>";
    $html.="<div class='content' style='display:flex;flex-direction:column;justify-content: center;align-content:center;'>";
    $html.="<h2 style='padding-bottom: 50px;padding-top:20px; color: #B89D5F;'>$result </h2>";
    $html.="<br>";
    $html.="<p>STAY CONNECTED ON OUR SOCIAL PLATFORMS</p>";
    $html.="<div class='flex'>";
    $html.="<a href='https://www.facebook.com/I.DesignSolu' target='_blank'><img src='../images/facebook (2).png' style='width: 15%; padding-right: 31px;'></a>";
    $html.="<a href='https://www.instagram.com/interior.design.solution' target='_blank'><img src='../images/instagram.png' style=' width: 16%; padding-right: 22px;'></a>";
    $html.="<a href='https://twitter.com/Design_Solu' target='_blank'><img src='../images/twitter.png' style='width: 30%;'></a>";
    $html.="</div>";
    $html.="</div>";
    $html.="</div>";
    $html.="</div>";


    return $html;
  }


}

 ?>
