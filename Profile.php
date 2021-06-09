<?php
include 'navbar.php';
include 'PHP/classes.php';
session_start();
?>
<link rel="stylesheet" href="master.css">
<style media="screen">
  body {
    margin: 0;
    background-color: #847F79;
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
    margin-top: 1.5%;
    margin-left: 60%;
    color: white;
    font-size: 20px;
    display: block;
  }

  .empinput {
    margin-top: 1.5%;
    color: #76323F;
    margin-left: 60%;
    background-color: #B1DBAD;
    border-color: black;
    width: 30%;
    height: 35px;
    ;
  }

  .updatebut {
    margin-top: 1.5%;
    width: 120px;
    height: 50px;
    margin-left: 60%;
    border-radius: 6%;
    color: #B1DBAD;
    background-color: #76323F;
    /* >>>>>>> c0dada39a38f180432399ab89780aee400c076b0 */
  }

  .info {
    margin: 0px;
    width: 401px;
    height: 150px;
    left: 44px;
    top: 300px;
    background-color: #D6E8E9;
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
</style>

<div class="personalimage">
  <img class="photo" alt="personal photo" src="images/profilepic.jpg">
  </img>
</div>

<div class="info">
  <h2 class=name><?php echo unserialize($_SESSION['online'])->Name; ?></h2>
  <br>
  <br>
  <span style="font-size: 15px; color: #847F79;   align-content: flex-end;">
    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
  </span>

</div>

<div class="profilecontainer">
  <form class="profilecontainer" action="Profile.php" method="post">
    <label class="empinfo">First Name</label>
    <input type="text" class="empinput" value=<?php echo unserialize($_SESSION['online'])->Name; ?>>

    <label class="empinfo">Last Name</label>
    <input type="text" class="empinput" value="Deo">

    <label class="empinfo">Email</label>
    <input type="text" class="empinput" value=<?php echo unserialize($_SESSION['online'])->Email; ?>>

    <label class="empinfo">Old Password</label>
    <input type="password" class="empinput" value=<?php echo unserialize($_SESSION['online'])->Password; ?>>

    <label class="empinfo">New Password</label>
    <input type="password" class="empinput" value="">

    <label class="empinfo">Confirm Password</label>
    <input type="password" class="empinput" value="">
    <br>
    <input type="submit" class="updatebut" value="Update Profile">

  </form>

</div>
