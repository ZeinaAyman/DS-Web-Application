<?php include "New_Homenavbar.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/about.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/gif/png" href="dslogo.png">
        <title>Design Solutions</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style media="screen">
        #section-about-us-2 .image-container {
            background: url(images/aboutus-photo.jpg);
            background-size: cover;
        }
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
    font-size: 32px;
    letter-spacing: 5px;
    float: left;
        padding: 55px;
    margin-right: 40px;
    text-transform: uppercase;
}
.col-md-4 h3{
  color: #fff;
}
        </style>
    </head>
    <body>
      <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px;">
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


<div class="form_col">
                <div class="slider-form context-light bg-default">
                  <h4 class="heading-decorated">Send us a Message</h4>
                  <!-- RD Mailform-->
                  <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap form-wrap_icon">
                      <i class="far fa-user"></i>
                      <input class="form-input" id="contact-order-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-order-name">Your name</label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                      <i class="fa fa-phone"></i>
                      <input class="form-input" id="contact-order-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                      <label class="form-label" for="contact-order-phone">Your phone</label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                      <i class="far fa-envelope"></i>
                      <input class="form-input" id="contact-order-email" type="email" name="email" data-constraints="@Required @Email">
                      <label class="form-label" for="contact-order-email">Your e-mail</label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                      <i class="far fa-envelope-open"></i>
                      <textarea class="form-input" id="contact-order-message" name="message" data-constraints="@Required"></textarea>
                      <label class="form-label" for="contact-order-message">Your message</label>
                    </div>
                    <button class="button button-primary" type="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h2>Global Offices</h2>
        <div class="container-footer">
            <div class="row-footer">

                <div class="col-md-4">
                    <h3>Contact Us <span class="id-color">Egypt</span></h3>
                    <div class="widget widget-address">
                        <address>
                            <span>Bejjany Street, Louaize District</span>
                            <span>Baabda, Lebanon.</span>
                            <span><strong>Phone:</strong><a href="tel:+96170951312">+961 70 951312</a></span>
                            <span><strong></strong><a href="tel:+9615922913">+961 5 922 913</a></span>
                            <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                        </address>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us <span class="id-color">Saudi Arabia</span></h3>
                    <div class="widget widget-address">
                        <address>
                            <span>CourtYard Building, Office #303</span>
                            <span>Khaledia District, Jeddah KSA.</span>
                            <span><strong>Phone:</strong><a href="tel:+966505644518">+966-505 644 518</a></span>
                            <span><strong></strong><a href="tel:+966126066980">+966-12 606 6980</a></span>
                            <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                        </address>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us <span class="id-color">Tunisia</span></h3>
                    <div class="widget widget-address">
                        <address>
                            <span>Bejjany Street, Louaize District</span>
                            <span>Baabda, Lebanon.</span>
                            <span><strong>Phone:</strong><a href="tel:+96170951312">+961 70 951312</a></span>
                            <span><strong></strong><a href="tel:+9615922913">+961 5 922 913</a></span>
                            <span><strong>Email:</strong><a href="mailto:info@design-solution.com">info@design-solution.com</a></span>
                        </address>
                    </div>
                </div>

            </div>
        </div>

<script>
  function initMap(){
    var egy = {lat: 30.030104, lng: 31.233576};
    var tunisia = {lat: 36.797409, lng: 10.187146};
    var saudia = {lat: 24.646518, lng: 46.717691};
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
            url: 'images/marker_red.png',
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
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtQlLfvyLrxCLLdPm04K0P0Sce4zNs6_o&callback=initMap"></script>
<?php include "includes/footer.php"; ?>


    </body>
</html>
