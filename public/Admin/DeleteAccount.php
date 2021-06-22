<?php
include "databasehandler.php";

$id = $_POST['user_id'];

$sql = "DELETE from user WHERE ID ='". $id."'";
echo $sql;
mysqli_query($mysqli,$sql);

 ?>
