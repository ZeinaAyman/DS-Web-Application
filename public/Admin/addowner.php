<?php
include "databasehandler.php";
$eid=$_POST['eid'];
$pid = $_POST['pid'];

$sql = "INSERT into assign (UID,PID,OwnerA,EditA) VALUES('".$eid."','".$pid."','1','1')";
echo $sql;
mysqli_query($mysqli,$sql);
 ?>
