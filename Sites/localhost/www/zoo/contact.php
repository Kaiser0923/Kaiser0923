<?php
session_start();
if(!isset($_SESSION['mail']) && !isset($_SESSION['password'])){
	$_SESSION['flash']['error'] = "you are not allowed on this page";
	header('Location: authentificati1.php');
	exit();
	


if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	
	
	}
	

}

include('header.php');

?>
<!DOCTYPE html >
<html>

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="cont.css" >
	
</head>

<body>
	<!--
Question : 
https://openclassrooms.com/forum/sujet/formulaire-de-contact-responsive
-->
<div class="containe">
  <h1>Formulaire de contact</h1>
  <form action="/action_page.php">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

    <input  type="submit" value="Envoyer">
  </form>
</div>




</body>

</html>




