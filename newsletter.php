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
        </style>
    </head>
    <body>
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
                                                <h4 class="heading-decorated">Subscription Newsletter</h4>
                                                <p>Receive the latest design updates, architecture news and interiors inspiration straight to your inbox</p>
                                                <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                                  <div class="form-wrap form-wrap_icon">
                                                    <i class="far fa-user"></i>
                                                    <input class="form-input" id="contact-order-name" type="text" name="name" data-constraints="@Required">
                                                    <label class="form-label" for="contact-order-name">Your name</label>
                                                  </div>
                                                  <div class="form-wrap form-wrap_icon">
                                                    <i class="far fa-envelope"></i>
                                                    <input class="form-input" id="contact-order-email" type="email" name="email" data-constraints="@Required @Email">
                                                    <label class="form-label" for="contact-order-email">Your e-mail</label>
                                                  </div>
                                                  <button class="button button-primary" type="submit">Submit</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>




<?php include "includes/footer.php"; ?>


    </body>
</html>
