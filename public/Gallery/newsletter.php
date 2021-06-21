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
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style media="screen">
        #section-about-us-2 .image-container {
            background: url(../images/aboutus-photo.jpg);
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
a h2{
 color: #eceff3;
   font-size: 20px;
   letter-spacing: 5px;
   padding-left: 49px;
   text-transform: uppercase;
}
@media (max-width: 600px) {
 a h2{
   display: none;
 }
}
        </style>
    </head>
    <body>
      <a href="New_Galleryhome.php" style="text-decoration: none;"><h2>Back</h2></a>
      <?php
          $ClientController->C_NewsletterForm();

          if($ClientController->success == 1){
            echo $ViewClient->thankYou("Thank you for Subscribing to our Newsletter");
          }

       ?>
      <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px; margin-left: 8%;">
            <div class="container-about">
                <div class="row-about">
                    <div class="col-md-12">
                        <h1>Newsletter</h1>
                        <ul class="crumb">
                            <li>Newsletter</li>
                            <li class="sep">/</li>
                            <li><a href="New_Galleryhome.php">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="content" class="no-top no-bottom">
          <section id="section-about-us-2" class="side-bg no-padding">
                <div class="image-container col-md-5 pull-left" data-delay="0"></div>

                <div class="container-about">
                    <div class="row-about">
                        <div class="inner-padding">
                            <div class="col-about-left" data-animation="fadeInRight" data-delay="200">
                                <h4 class="heading-decorated">Newsletter Subscription</h4>
                                <p>Receive the latest design updates, architecture news and interiors inspiration straight to your inbox</p>
                                <h7 style="color:red;"><?php echo $ClientController->msg; ?></h7>
                                <?php echo $ViewClient->NewsletterForm(); ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>




<?php include "../includes/footer.php"; ?>
<script type="text/javascript">
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

    </body>
</html>
