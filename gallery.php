<?php include "New_Homenavbar.php";
      include 'Model/Admin.php';

$admin = new Admin();
$admin->connect();
$result = $admin->DB->FetchAll("project");




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="New_master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif/png" href="dslogo.png">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Gallery</title>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
            font-size: 62.5%;
        }

        body {

            font-family: 'Oswald', sans-serif;
            color: #6e5c38;
            font-weight: 300;
            line-height: 1.6;
            background-color: #151515;
        }

        .container2 {
            width: 80%;
            margin: 2rem auto;
            background-color: #6e5c38;
            padding: 12px;
            padding-right: 15px;
            margin-top: 100px;
        }




        h1 {
            font-family: 'Oswald', sans-serif;
            text-align: center;
            font-size: 36px;
            color: rgba(214.00000244379044, 232.00000137090683, 233.00000131130219, 1);
        }

        p {
            font-family: 'Oswald', sans-serif;
            font-size: 22px;
            text-align: center;
            color: rgba(214.00000244379044, 232.00000137090683, 233.00000131130219, 1);
        }

        .e338_1408 {
            background-color: rgba(118.00000056624413, 50.000000819563866, 63.000000044703484, 1);
            width: 1440px;
            height: 121px;
            /* position: absolute; */
            left: 0px;
            top: 903px;
        }

        .row2 {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        }
        .container-about {
            width: 1170px;
            padding-right: 15px;
            padding-left: 15px;
        }
        section {
            padding: 90px 0 90px 0;
        }
        .row-about {
            margin-right: -15px;
            margin-left: -15px;
        }
        #subheader {
            padding-bottom: 70px;
            background: #151515;
        }
        section {
            padding: 90px 0 90px 0;
        }
        #subheader h1 {
            color: #eceff3;
            font-size: 32px;
            letter-spacing: 5px;
            float: left;
            padding-right: 40px;
            margin-right: 40px;
            text-transform: uppercase;
        }
        #subheader .crumb {
            font-size: 15px;
            letter-spacing: 3px;
            color: #fff;
            text-transform: uppercase;
        }
        .crumb {
            color: #777;
            float: right;
            font-size: 12px;
        }
        .col-md-12 {
            width: 100%;
        }
        .crumb li {
            display: inline;
            text-decoration: none;
            padding: 0 2px 0 2px;
            float: right !important;
        }
        .crumb a {
            text-decoration: none;
            color: #6e5c38;
        }
        section {
            background: #18191b;
        }
        #content {
            background: #18191b;
        }
        #content {
            width: 100%;
            padding: 90px 0 90px 0;
            z-index: 100;
        }
        .no-top {
            padding-top: 0 !important;
        }
        .no-bottom {
            padding-bottom: 0 !important;
        }
        .no-bottom {
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
</head>

<body>

  <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px; margin-left: 8%;">
        <div class="container-about">
            <div class="row-about">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <ul class="crumb">
                        <li>Gallery</li>
                        <li class="sep">/</li>
                        <li><a href="New_Galleryhome.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container2">
        <div class="gallery">
            <figure class="gallery__item gallery__item--word">
                <h1 id="title1">Company Projects</h1>
            </figure>
            <figure class="gallery__item gallery__item--p">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
            </figure>
            <div class="row2">
              <div class="column">
                <?php
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                  $images=$row['images'];
                  $firstimage = "uploads/projects/images/".explode(",", $images)[0];

                  echo "<img src=".$firstimage.">";
                }
              }

                 ?>
                  <img src="images/building3.jpg" style="width:100%">
                  <img src="images/building2.jpeg" style="width:100%">

              </div>

                <div class="column">
                    <img src="images/building3.jpg" style="width:100%">
                    <img src="images/building.jpg" style="width:100%">
                    <img src="images/building3.jpg" style="width:100%">

                </div>
                <div class="column">
                    <img src="images/building2.jpeg" style="width:100%">
                    <img src="images/building3.jpg" style="width:100%">
                    <img src="images/building2.jpeg" style="width:100%">

                </div>
                <div class="column">
                    <img src="images/building3.jpg" style="width:100%">
                    <img src="images/building.jpg" style="width:100%">
                    <img src="images/building.jpg" style="width:100%">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="e338_1408"></div> -->
    <?php include "includes/footer.php"; ?>
</body>

</html>
