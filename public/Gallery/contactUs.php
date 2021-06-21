<?php include "New_Homenavbar.php";
include '../../app/Model/Client.php';
include '../../app/View/ViewClient.php';
include '../../app/Controller/ClientController.php';

$Model = new Client();
$ViewClient = new ViewUser();
$ClientController = new ClientController($Model);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/about.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/gif/png" href="dslogo.png">
        <title>Design Solutions</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <style media="screen">
        .side-bg .image-container {
          height: 100%;
          width: 50%;
          overflow: hidden;
          padding: 0;
          position: absolute;
          background-size: cover !important;
}
#map{
  height: 500px;
  width: 100%;
}
h2{
  color: #eceff3;
    font-size: 20px;
    letter-spacing: 5px;
    float: left;
        padding: 46px;
    margin-right: 40px;
    text-transform: uppercase;
}
.col-md-4 h3{
  color: #fff;
}

@media (max-width: 600px) {
 a h2{
   display: none;
 }
}

        </style>
    </head>
    <body>

      <?php
          $ClientController->C_ContactForm();

          if($ClientController->success == 1){
            echo $ViewClient->thankYou("Thank you for Sending A Message");
          }

       ?>

<a href="New_Galleryhome.php" style="text-decoration: none;"><h2>Back</h2></a>
      <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px;margin-left: 8%;">
            <div class="container-about">
                <div class="row-about">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                        <ul class="crumb">
                            <li>Contact Us</li>
                            <li class="sep">/</li>
                            <li><a href="New_Galleryhome.php">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>





<div id="map"></div>
<div class="container-global">
        <div class="form_col">
                <div class="slider-form context-light bg-default">
                  <h4 class="heading-decorated">Send us a Message</h4>
                  <h7 style="color:red;"><?php echo $ClientController->msg; ?></h7>
                  <?php echo $ViewClient->ContactForm(); ?>
                </div>
    </div>
</div>


  <h2>Global Offices</h2><br><br>
  <div class="container-footer">
      <div class="row-footer">

        <div class="col-md-4">
            <h3><span class="id-color">Egypt</span></h3>
            <div class="widget widget-address">
                <address>
                    <span>Building 7218 Rd. 81, District S.</span>
                    <span>Mokattam, Cairo.</span>
                    <span><strong>Phone:</strong><a href="tel:+201000604745">+20 1000604745</a></span>
                    <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                </address>
            </div>
        </div>

        <div class="col-md-4">
            <h3><span class="id-color">Saudi Arabia</span></h3>
            <div class="widget widget-address">
                <address>
                    <span>Al-Shati, Prince Muhammad Bin Abdulaiz Street</span>
                    <span>Gizan, KSA.</span>
                    <span><strong>Phone:</strong><a href="tel:+966530141967">+966 530141967</a></span>
                    <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                </address>
            </div>
        </div>
        <div class="col-md-4">
            <h3><span class="id-color">Tunisia</span></h3>
            <div class="widget widget-address">
                <address>
                    <span>Espace Tunis, Monplaisir bloc C 5'eme Etage</span>
                    <span>Tunis, Tunisia.</span>
                    <span><strong>Phone:</strong><a href="tel:+21622908271">+21 622908271</a></span>
                    <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                </address>
            </div>
        </div>

      </div>
      <div class="icons2">
        <a href="https://twitter.com/Design_Solu" title="twitter" target="_blank" rel="noopener noreferrer"><img src="../images/twitter.png" class="first" alt="twitter" style="width: 5%;"></a>
        <a href="https://www.facebook.com/I.DesignSolu" title="facebook" target="_blank" rel="noopener noreferrer"><img src="../images/facebook (2).png" class="others" alt="facebook" style="margin-right: 8px;"></a>
        <a href="https://www.instagram.com/interior.design.solution" title="instagram" target="_blank" rel="noopener noreferrer"><img src="../images/instagram.png" class="others" alt="instagram" style="margin-right: 10px;"></a>
        <a href="https://www.snapchat.com/add/design.solution" title="snapchat" target="_blank" rel="noopener noreferrer"><img src="../images/snapchat.png" class="others" alt="snapchat"></a>
      </div>
  </div>


<script>
  function initMap(){
    var egy = {lat: 30.014500, lng: 31.308916};
    var tunisia = {lat: 36.818152, lng: 10.187018};
    var saudia = {lat: 16.929063, lng: 42.556959};
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: egy,
      mapId: 'd3b389dc0f494e0b'
    });

    function addMarker(name,text){
      var marker = new google.maps.Marker({
        position: name,
        map: map,
        label: {
          color: '#fff',
          fontWeight: 'bold',
          text: text,
        },
        icon: {
            labelOrigin: new google.maps.Point(11, 50),
            url: '../images/marker_red.png',
            size: new google.maps.Size(22, 40),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(11, 40),
          },
      });
    }
    addMarker(egy,'Design Solution Egypt');
    addMarker(tunisia,'Design Solution Tunisia');
    addMarker(saudia,'Design Solution Saudia Arabia');

  }

var thank_card = document.getElementById("thank-card-overlay");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  thank_card.className = "hide";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    thank_card.className = "hide";
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtQlLfvyLrxCLLdPm04K0P0Sce4zNs6_o&callback=initMap"></script>


    </body>
</html>
