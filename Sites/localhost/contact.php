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
	
<div class="containe">
  <h1>Formulaire de contact</h1>
  <form action="cont_serv.php">
    <label for="fname">Name</label>
    <input type="text"  name="name"  required>

    <label for="sujet">Sujet</label>
    <input type="text"  name="sujet" placeholder=" sujet" required>

    <label for="emailAddress">Mail</label>
    <input  type="email" name="mail" placeholder="Your mail" required>


    <label for="subject">Message</label>
    <textarea  name="sujet" placeholder=" message" style="height:200px" required></textarea>

    <input  type="submit" value="Send">
  </form>
</div>




</body>

</html>




