<?php include "navbar.php";
include 'View/ViewDesigner.php';
include 'Controller/DesignerController.php';
$Designer=new Designer();
$ViewDesigner = new ViewDesigner();
$DesignerController = new DesignerController($Designer);
$res=$DesignerController->C_GetProjects();
?>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style media="screen">
      body{
        background-color: #847F79;
      }
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
        <div class="recentprojects">
          <h1>Recent Projects</h1>
          <div class="image">
            <img class="img2" src="images/SEO-illustrations-Project-02.png" alt="Avatar" height="150">
            <h3 style="padding: 5px 66px;">Project 1</h3>
          </div>
          <div class="image">
            <img class="img2" src="images/SEO-illustrations-Project-02.png" alt="Avatar" height="150">
            <h3 style="padding: 5px 66px;">Project 2</h3>
          </div>
          <div class="image">
            <img class="img2" src="images/SEO-illustrations-Project-02.png" alt="Avatar" height="150">
            <h3 style="padding: 5px 66px;">Project 3</h3>
          </div>
          <a class="create" href="CreateProject.php">Create New Project</a>
        </div>

        <div class="timeline">
            <h1 style="color: #76323F; padding: 20px; padding-bottom: 10px; margin-bottom: 0px;">Timeline</h1>
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
          <h1 style="color:#76323F;">My Projects</h1>
          <?php
          echo $ViewDesigner->HomeMyProjects($res);
           ?>
          </div>
          <a href="myprojects.php"><h4 style="color:#76323F;">See More...</h4></a>
        </div>
      </div>

      <div class="homecontainer" style="width: 70%;">
        <h1>All Projects</h1>
        <div class="Allprojects">
          <div class="image" id="color">
            <img  src="images/Project-Management-Mantenimiento-1.jpg" alt="Avatar" height="150">
            <h3>Project 1</h3>
          </div>
          <div class="image" id="color">
            <img  src="images/Project-Management-Mantenimiento-1.jpg" alt="Avatar" height="150">
            <h3>Project 2</h3>
          </div>
          <div class="image" id="color">
            <img src="images/Project-Management-Mantenimiento-1.jpg" alt="Avatar" height="150">
            <h3>Project 3</h3>
          </div>
          <div class="image" id="color">
            <img  src="images/Project-Management-Mantenimiento-1.jpg" alt="Avatar" height="150">
            <h3>Project 3</h3>
          </div>
        </div>
        <a href="AllProjects.php"><h4>See More...</h4></a>
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
