<?php
include 'navbar.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/View/ViewUser.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/Controller/UserController.php';

$err = false;
$ViewUser = new ViewUser();
$UserController = new UserController(unserialize($_SESSION['online']));
$UserController->C_UpdateUser();
//include 'PHP/classes.php';

$ViewUser = new ViewUser();

?>
<link rel="stylesheet" href="master.css">
<style media="screen">
  body {
    margin: 0;
    background-color: #E9E8E8;
  }

  .create-acc {
    margin-left: 42%;
    color: E3B7A5;
    font-size: 36;
    font-family: "Montserrat";
    opacity: 1;
  }

  .profilecontainer {
    top: 200px;
    padding-bottom: 100px;
    border-radius: 10px;
    border-color: #76323F;
  }

  .empinfo {
    margin-top: 0.5%;
    margin-left: 60%;
    color: #151515;
    font-size: 20px;
    display: block;
  }

  .empinput {
    margin-top: 1.5%;
    color: #E9E8E8;
    margin-left: 60%;
    background-color: #B89D5F;
    border-color: black;
    width: 30%;
    height: 35px;
    ;
  }

  .updatebut {
    margin-top: 0.5%;
    width: 120px;
    height: 50px;
    margin-left: 60%;
    border-radius: 6%;
    color: #E9E8E8;
    background-color: #B89D5F;
  }

  .info {
    margin: 0px;
    width: 401px;
    height: 150px;
    left: 44px;
    top: 300px;
    background-color: #B89D5F;
    overflow: hidden;
    font-family: "Montserrat";
    color: #847F79;

  }

  .personalimage {
    margin: 0px;
    position: absolute;
    width: 422px;
    height: 250px;
    left: 44px;
    top: 110px;
    overflow: hidden;
  }

  .photo {
    position: absolute;


  }

  .name {
    text-align: left;
    justify-content: left;
    font-family: "Montserrat";
    color: #847F79;


  }
  .p-input{
    margin-top: 0.5%;
        margin-left: 60%;
        color: #151515;
        font-size: 20px;
        display: block;
  }
  .form-file {
    padding-bottom: 31px;
    position: absolute;
    left: 60%;
    padding-right: 106px;
}
</style>

<div class="personalimage">
  <img class="photo" alt="personal photo" src="uploads/profilepictures/<?php echo unserialize($_SESSION['online'])->Picture;?>">
  </img>
</div>
<div class="info">
  <h2 class=name><?php echo unserialize($_SESSION['online'])->Type; ?></h2>
  <br>
  <br>
  <span style="font-size: 15px; color: #E9E8E8;   align-content: flex-end;">
    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
  </span>

</div>

<div class="profilecontainer">

  <?php echo $ViewUser->ProfileEditForm($_SESSION['online']); ?>

</div>
