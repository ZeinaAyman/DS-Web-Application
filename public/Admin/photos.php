<?php
include '../../public/Gallery/galleryNavbar.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet" />


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
            flex: 27%;
            max-width: 35%;
            padding: 0 4px;
        }
        .img_wrap{
          position:relative;
          text-align: center;
        }
        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }
        .column img:hover{
          outline: 4px solid white;
          transition: outline 0.12s linear;
          outline-offset: -10px;
        }
        .img_name{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 30px;
          color: #fff;
          visibility: hidden;
          opacity: 0;
        }

        .img_wrap:hover .img_name {
          visibility: visible;
          cursor: pointer;
          opacity: 1;
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

        h2{
         color: #eceff3;
           font-size: 20px;
           letter-spacing: 5px;
           padding-left: 49px;
           text-transform: uppercase;
       }
       @media (max-width: 600px) {
         h2{
           display: none;
         }
       }
    </style>

    <div class="container2">
        <div class="gallery">
            <figure class="gallery__item gallery__item--word">
                <h1 id="title1">Company Projects</h1>
            </figure>
            <figure class="gallery__item gallery__item--p">
                <p>A showcase of some of the best designs made by our designers.</p>
            </figure>
            <div class="row2">
              <div class="column">
                <?php
                $count = 0;
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                  $count++;
                  $images=$row['images'];
                  $id = $row['id'];
                  $firstimage = "../uploads/projects/images/".explode(",", $images)[0];
                  echo "<div class=\"img_wrap\">";
                  ?>
                  <a href="gallery2.php?project_id=<?php echo $id?>"> <?php echo "<img src=".$firstimage."></a>";
                  echo "<p class=\"img_name\">". $row['name'] ."</p>";
                  echo "</div>";

                  if($count % 3 == 0){
                    echo "</div>";
                    echo "<div class=\"column\">";
                  }
                }
              }

                 ?>
            </div>
        </div>
    </div>
    </div>

</html>
