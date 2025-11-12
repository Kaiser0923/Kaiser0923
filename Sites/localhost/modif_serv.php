<?php
session_start();
include("verification1.php");

<?
// création de la requête
$update = $db_db->prepare("UPDATE ticket SET login='$LOGIN',sujet=\"$SUJET\",description=\"$DESCRIPTION\",prio='$PRIO',secteur='$SECTEUR' ,statut='$STATUT'");
$update->execute();
header('Location: recupTicket');


// envoi des requêtes


?>
