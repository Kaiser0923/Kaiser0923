<?php
session_start();
if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	
	
	}
	

//destroys all the variables of the current session.
unset($_SESSION['ID_users']);
unset($_SESSION["mail"]);
unset($_SESSION["password"]);

session_destroy();//close the session

header('Location: authentificati1.php');
exit;

?>
