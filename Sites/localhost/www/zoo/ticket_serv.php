
<?php

include_once('verification1.php');

$LOGIN=$_POST['login'];
$SUJET=$_POST['sujet'];
$DESCRIPTION=$_POST['description'];
$PRIO=$_POST['prio'];
$SECTEUR=$_POST['secteur'];
$STATUT=$_POST['statut'];

$insert = $db_db->prepare("INSERT INTO ticket SET login='$LOGIN',sujet=\"$SUJET\",description=\"$DESCRIPTION\",prio='$PRIO',secteur='$SECTEUR' ,statut='$STATUT'");
$insert->execute();
header('Location: header.php')
?>

$req ="INSERT INTO `ticket` ( `login`, `sujet`, `description`, `prio` , `secteur` , `statut`)  VALUES ('$LOGIN', '$SUJET','$DESCRIPTION','$SECTEUR','$STATUT')";

$prep = $db_db->prepare($req);
$prep->execute();

