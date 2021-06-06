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

        .gallery {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(11, 5vw);
            grid-gap: 1.5rem;
        }

        .gallery__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .gallery__item--word {
            grid-column-start: 5;
            grid-column-end: 10;
            grid-row-start: 1;
            grid-row-end: 3;
            padding-top: 10px;


        }

        .gallery__item--p {
            grid-column-start: 3;
            grid-column-end: 12;
            grid-row-start: 2;
            grid-row-end: 3;


        }

        .gallery__item--1 {
            grid-column-start: 3;
            grid-column-end: 5;
            grid-row-start: 3;
            grid-row-end: 5;

            /** Alternative Syntax **/
            /* grid-column: 1 / span 2;  */
            /* grid-row: 1 / span 2; */
        }

        .gallery__item--2 {
            grid-column-start: 5;
            grid-column-end: 7;
            grid-row-start: 3;
            grid-row-end: 5;

            /** Alternative Syntax **/
            /* grid-column: 3 / span 2;  */
            /* grid-row: 1 / span 2; */
        }

        .gallery__item--3 {
            grid-column-start: 7;
            grid-column-end: 11;
            grid-row-start: 3;
            grid-row-end: 8;

            /** Alternative Syntax **/
            /* grid-column: 5 / span 4;
  grid-row: 1 / span 5; */
        }

        .gallery__item--4 {
            grid-column-start: 3;
            grid-column-end: 7;
            grid-row-start: 5;
            grid-row-end: 8;

            /** Alternative Syntax **/
            /* grid-column: 1 / span 4;  */
            /* grid-row: 3 / span 3; */
        }

        .gallery__item--5 {
            grid-column-start: 3;
            grid-column-end: 7;
            grid-row-start: 8;
            grid-row-end: 11;

            /** Alternative Syntax **/
            /* grid-column: 1 / span 4; */
            /* grid-row: 6 / span 3; */
        }

        .gallery__item--6 {
            grid-column-start: 7;
            grid-column-end: 11;
            grid-row-start: 8;
            grid-row-end: 11;

            /** Alternative Syntax **/
            /* grid-column: 5 / span 4; */
            /* grid-row: 6 / span 3; */
        }

        .e338_1392 {
            width: 1392px;
            height: 72px;
            position: absolute;
            left: 0px;
            top: 0px;
        }

        .e338_1393 {
            color: rgba(214.00000244379044, 232.00000137090683, 233.00000131130219, 1);
            width: 1392px;
            height: 72px;
            position: absolute;
            left: 0px;
            top: 0px;
            font-family: Montserrat;
            text-align: center;
            font-size: 48px;
            letter-spacing: -1.5;
            line-height: px;
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
            <figure class="gallery__item gallery__item--1">
                <img src="images/building.jpg" alt="Gallery image 1" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--2">
                <img src="images/building.jpg" alt="Gallery image 2" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--3">
                <img src="images/building.jpg" alt="Gallery image 3" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--6">
                <img src="images/building.jpg" alt="Gallery image 6" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--4">
                <img src="images/building.jpg" alt="Gallery image 4" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--5">
                <img src="images/building.jpg" alt="Gallery image 5" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--6">
                <img src="images/building.jpg" alt="Gallery image 6" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--6">
                <img src="images/building.jpg" alt="Gallery image 6" class="gallery__img">
            </figure>
        </div>
    </div>
    <div class="e338_1408"></div>
</body>

</html>