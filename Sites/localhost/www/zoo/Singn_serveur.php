<?php

require_once('verification1.php');
	
$NOM=$_POST['name'];
$PRENOM=$_POST['prenom'];
$PWD=password_hash($_POST['pwd'], PASSWORD_ARGON2ID);
$TEL=$_POST['tel'];
$MAIL=htmlspecialchars($_POST['mail']);
$ROLEID=$_POST['ROLE_ID'];

$req ="INSERT INTO `user` ( `name`, `prénom`, `password`, `tel` , `mail`;roleid)  VALUES ('$NOM', '$PRENOM','$PWD','$TEL','$MAIL')";

$query = $db_db->prepare($req);
$query->execute();






	
	
?>


