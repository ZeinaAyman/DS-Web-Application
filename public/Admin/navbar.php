<?php
session_start();
include_once '../../app/Model/Designer.php';
include_once '../../app/Model/Admin.php';
include_once '../../app/Model/Support.php';
if($_SESSION['online']===NULL)
{
  header("Location: Login.php");
}
else {
  $online=unserialize($_SESSION['online']);
  if ($online->Type=="1") {
    $NEW = new Admin();
    $NEW->ID=$online->ID;
    $NEW->Feed($online->Name,$online->Email,$online->Password,$online->Type,$online->Picture);
    $_SESSION['online'] = serialize($NEW);
    header("Location: Admin.php");
  }
  if($online->Type=="4")
  {
    $NEW = new Support();
    $NEW->ID=$online->ID;
    $NEW->Feed($online->Name,$online->Email,$online->Password,$online->Type,$online->Picture);
    $_SESSION['online'] = serialize($NEW);
    header("Location: Support.php");

  }
  else {
    $NEW = new Designer();
    $NEW->ID=$online->ID;
    $NEW->Feed($online->Name,$online->Email,$online->Password,$online->Type,$online->Picture);
    $_SESSION['online'] = serialize($NEW);
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <title></title>
  </head>
  <body>
    <div class="navbar">
      <h2>Designs Solutions</h2>
      <div class="links">
        <a href="Login.php">Log Out</a>
        <a href="Profile.php">Profile</a>
        <a href="myprojects.php">Projects</a>
        <a href="Home.php">Home</a>
      </div>
    </div>
  </body>
</html>
