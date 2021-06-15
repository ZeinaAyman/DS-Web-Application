<?php include "New_Homenavbar.php"; ?>
<html lang="en">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="New_master.css">
  <link rel="icon" type="image/gif/png" href="dslogo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Gallery</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <!-- <link rel="stylesheet" href="styles1.css"> -->

  <style>
    @font-face {
      font-family: DancingScript;
      src: url('./fonts/DancingScript-Regular.ttf');
    }

    *,
    *::after,
    *::before {
      margin: 0;
      padding: 0;
      box-sizing: inherit;
    }

    body {
      font-family: "Nunito", sans-serif;
      color: #333;
      /* font-weight: 300;
      line-height: 1.6; */
      /* background: #E5E5E5; */
      background-color: #151515;
    }

    /* text project details */
    .e338_1425 {
      font-family: DancingScript;
      color: #fff;
      width: 695px;
      height: 64px;
      position: absolute;
      left: 25px;
      top: 166px;
      text-align: left;
      font-size: 48px;
      letter-spacing: -1.5;
      line-height: px;
    }

    .e338_1433 {
      width: 636px;
      height: 354px;
      position: absolute;
      left: 788px;
      top: 166px;
    }

    .e338_1432 {
      background-color: #6e5c38;
      width: 636px;
      height: 639px;
      position: absolute;
      left: 836px;
      top: 166px;
    }

    .ei338_1433_338_1429 {
      background-color: rgba(229.00000154972076, 229.00000154972076, 229.00000154972076, 1);
      width: 636px;
      height: 354px;
      position: absolute;
      left: 48px;
      top: 0px;
    }

    .row2 {
      margin-top: 160;
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin-left: 20px;
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

    .c4 {

      color: rgba(234.00000125169754, 232.00000137090683, 218.00000220537186, 1);
      width: 518px;
      height: 32px;
      position: absolute;
      left: 856px;
      top: 650;
      font-family: Montserrat;
      text-align: left;
      font-size: 24px;
      letter-spacing: -1.5;
      line-height: px;
    }

    .e338_1435 {
      color: rgba(234.00000125169754, 232.00000137090683, 218.00000220537186, 1);
      width: 518px;
      height: 106px;
      position: absolute;
      left: 856px;
      top: 700px;
      font-family: Mplus 1p Bold;
      text-align: left;
      font-size: 18px;
      letter-spacing: -1.5;
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
  <!-- images -->
  <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px; margin-left: 3%; padding-bottom: 23px;">
        <div class="container-about">
            <div class="row-about">
                <div class="col-md-12">
                    <h1>Project Details</h1>
                    <ul class="crumb">
                        <li>Project Details</li>
                        <li class="sep">/</li>
                        <li>Gallery</li>
                        <li class="sep">/</li>
                        <li><a href="New_Galleryhome.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  <div class="row2">
    <div class="column">
      <img src="images/building2.jpeg" style="width:100%">
      <img src="images/building3.jpg" style="width:100%;">


    </div>
    <div class="column">
      <img src="images/building3.jpg" style="width:100%">
      <img src="images/building.jpg" style="width:100%; height: 199px;">

    </div>


  </div>
  <!-- end images -->
  </div>


  <!-- image Background -->
  <div class="e338_1432" style="margin-top: 200px;"></div>
  <!-- image position -->
  <div class="e338_1433" style="margin-bottom: 125px; margin-top: 200px;">
    <!-- main image -->

    <div class="ei338_1433_338_1429"><img src="images/building3.jpg" style="width:100%"></div>
    <!-- project Description  -->
  </div>
  <span class="c4" style="margin-top: 200px;">Sed sssut perspiciatis unde omnis</span>
  <span class="e338_1435" style="margin-top: 200px;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</span>


  <!-- footer and logos -->


  <?php include "includes/footer.php"; ?>

</body>

</html>
