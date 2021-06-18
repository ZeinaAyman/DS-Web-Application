<?php include "navbar.php";
      include 'View/ViewDesigner.php';
      include 'Controller/DesignerController.php';
      $viewDesigner = new ViewDesigner();
      $Model = new Designer();
      $UserController = new DesignerController($Model);
      ?>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style media="screen">
      .create{
        position: absolute;
        font-family: sans-serif;
        font-weight: lighter;
        color: #D6E8E9;
        padding: 5px 80px;
        bottom: 0px;
        left: 500px;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="flex-container">
      <div class="homecontainer">
        <?php if(unserialize($_SESSION['online'])->Type==2){ echo $viewDesigner->Recentprojects($UserController->C_GetProjects());}
        else {
          echo $viewDesigner->Recentprojects($UserController->C_GetAllProjects());
        } ?>

        <div class="timeline">
            <h1 style="color: #151515; padding: 20px; padding-bottom: 10px; margin-bottom: 0px;">Timeline</h1>
          <div class="test">
            <ul>
              <li>project 35 end date 19/7/2021</li>
              <li>project 35 end date 19/7/2021</li>
              <li>project 35 end date 19/7/2021</li>
              <li>project 35 end date 19/7/2021</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="color">
        <div class="homecontainer" style="width: 70%;">
          <?php if(unserialize($_SESSION['online'])->Type==2){ echo $viewDesigner->Myprojects($UserController->C_GetProjects()); }?>
        </div>
      </div>

      <div class="homecontainer" style="width: 70%;">
        <?php echo $viewDesigner->Allprojects($UserController->C_GetAllProjects()); ?>
      </div>
    </div>

    <script>
    var x = document.getElementsByClassName("image");
    var numComments = x.length;
      for (var i = 0; i < numComments; i++) {
        console.log(x[i]);
        $(x[i]).hover(function(){
            $(this).css("opacity", "0.6");
            $(this).css("cursor", "pointer");
          }, function(){
            $(this).css("opacity", "1");
          });
      }
    </script>
  </body>
</html>
