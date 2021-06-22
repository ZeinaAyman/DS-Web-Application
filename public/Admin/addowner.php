<?php
include "databasehandler.php";


$sql = "INSERT into assign (UID,PID,OwnerA,EditaA) VALUES('".$_POST['eid']."','".$_POST['pid']."','1','1',)";;
echo $sql;
mysqli_query($mysqli,$sql);
 ?>
