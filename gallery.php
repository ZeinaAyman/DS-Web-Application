<?php
include 'galleryNavbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

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
            font-family: "Nunito", sans-serif;
            color: #333;
            font-weight: 300;
            line-height: 1.6;
            background-color: rgba(177.0000046491623, 219.0000021457672, 173.00000488758087, 1);
        }

        .container {
            width: 80%;
            margin: 2rem auto;
            background-color: rgba(132.0000073313713, 127.00000002980232, 121.00000038743019, 1);
            margin-top: 180px;
        }




        h1 {
            font-family: Montserrat;
            text-align: center;
            font-size: 36px;
            color: rgba(214.00000244379044, 232.00000137090683, 233.00000131130219, 1);
        }

        p {
            font-family: Montserrat;
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

        .row {
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
    </style>
</head>

<body>
    <div class="container">
        <div class="gallery">
            <figure class="gallery__item gallery__item--word">
                <h1>Company Projects</h1>
            </figure>
            <figure class="gallery__item gallery__item--p">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
            </figure>
            <div class="row">
                <div class="column">
                    <img src="images/building2.jpeg" style="width:100%">
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
    <div class="e338_1408"></div>
</body>

</html>