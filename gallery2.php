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
      left: 788px;
      top: 166px;
    }

    .ei338_1433_338_1429 {
      background-color: rgba(229.00000154972076, 229.00000154972076, 229.00000154972076, 1);
      width: 636px;
      height: 354px;
      position: absolute;
      left: 0px;
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
      left: 820px;
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
      left: 820px;
      top: 700px;
      font-family: Mplus 1p Bold;
      text-align: left;
      font-size: 18px;
      letter-spacing: -1.5;
      line-height: px;
    }
  </style>

</head>

<body>
  <!-- images -->


  <div class="row2">
    <div class="column">
      <img src="images/building2.jpeg" style="width:100%">
      <img src="images/building3.jpg" style="width:100%">


    </div>
    <div class="column">
      <img src="images/building3.jpg" style="width:100%">
      <img src="images/building.jpg" style="width:100%">

    </div>


  </div>
  <!-- end images -->
  </div>
  <span class="e338_1425 title">Project Details</span><span class="e338_1426">
  </span>


  <!-- image Background -->
  <div class="e338_1432"></div>
  <!-- image position -->
  <div class=e338_1433 style="margin-bottom: 120px;">
    <!-- main image -->

    <div class="ei338_1433_338_1429"><img src="images/building3.jpg" style="width:100%"></div>
    <!-- project Description  -->
  </div>
  <span class="c4">Sed sssut perspiciatis unde omnis</span>
  <span class="e338_1435">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</span>


  <!-- footer and logos -->


  <?php include "includes/footer.php"; ?>

</body>

</html>