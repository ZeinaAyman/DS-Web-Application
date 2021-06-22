<?php include_once ("navbar.php");
      include_once '../../app/View/ViewDesigner.php';
      include_once '../../app/Controller/DesignerController.php';

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
        color: #B89D5F;
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
        <?php  echo $viewDesigner->ViewTimeline($UserController->C_GetAllProjects());?>
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
