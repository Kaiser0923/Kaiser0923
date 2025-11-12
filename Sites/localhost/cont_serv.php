<?php

require_once('verification1.php');
	
$NOM=$_POST['name'];
$SUJET=$_POST['sujet'];
$MAIL=htmlspecialchars($_POST['mail']);
$MESSAGE=$_POST['message'];


header('Location: principale.php');



$req ="INSERT INTO contact (name,sujet,mail,message)  VALUES ('".$_POST["name"]."','".$_POST["sujet"]."','".$_POST["mail"]."','".$_POST["message"]."')";

$query = $db_db->prepare($req);
$query->execute();

	
?>


