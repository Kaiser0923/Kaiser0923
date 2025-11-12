<?php
session_start();
include("verification1.php");
$ID=$_GET['id'];
$pdoStat = $db_db->prepare("SELECT FROM `ticket` WHERE `ticket` `id`='$ID'");
$pdoStat ->execute();
$afficher = $pdoStat->fetch();
var_dump($contact);
?>


